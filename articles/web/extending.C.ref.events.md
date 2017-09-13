Logged in as: OmniTI, Inc.  ([logout](https://support.messagesystems.com/logout.php))

[![Message Systems](https://support.messagesystems.com/images/ms-white205.png)](https://support.messagesystems.com/start.php) 

*   [Changelog](https://support.messagesystems.com/start.php?show=changelog)
*   [Documentation](https://support.messagesystems.com/docs/)
*   [Downloads](https://support.messagesystems.com/start.php)

*   [Licenses](https://support.messagesystems.com/license_summary.php)
*   <a href="">Clients</a>
    *   [Support](https://support.messagesystems.com/cs.php)
    *   [Add/Edit](https://support.messagesystems.com/edit_client.php)
    *   [Legal/Products](https://support.messagesystems.com/edit_products.php)
*   [Users](https://support.messagesystems.com/edit_customer.php)

## Search Help

Search for a single word or perform multi-word searches by enclosing your search in quotation marks.

Where you have multiple words but no quotation marks, an **OR** search is performed. For example, **"REST Injection"** searches for the phrase **"REST Injection"**, and, without quotation marks, searches for **REST OR Injection**--the operator is understood.

### Warning

You must escape the following special characters: **+ - && || ! ( ) { } [ ] ^ " ~ * ? : \**. Use the **\** character as the escape character. For example: **B0/00-11719-46C328D4\:default\:**

You can also perform **AND** searches, for example, **rest AND port** (no quotation marks) finds pages where both these words occur.

Terms used in searches are case-insensitive but operators are not. Alphabetic operators **must** be in uppercase.

Other operators can also be used. For more information see "[Query Parser Syntax](https://lucene.apache.org/core/old_versioned_docs/versions/3_0_0/queryparsersyntax.html)". Use of fields in searches is not currently supported.

| events |
| [Prev](extending.C.ref.ec_cache.php)  | Chapter 17. C API Reference |  [Next](extending.C.ref.pcre_cache.php) |

<a name="extending.C.ref.events"></a>
## Name

events — The IO Event system

## Synopsis

```
#include "ec_config.h"
#include "event.h"
#include "scheduler.h"

typedef int (*EventFunc)(Event *event, int eventtype,
  void *closure, struct timeval *now);
```
<a name="idp16738192"></a>
## Description

### Warning

All of the functions described here can only be called from the scheduler thread, unless otherwise noted.

The event system in Momentum tracks both IO and time based events using the Event structure. This section of the manual covers IO based events; timed events are discussed in detail in [timed events](extending.C.ref.timed-events.php "timed events").

The Event structure encapsulates a file descriptor and an action that should be triggered when IO is signalled on that descriptor. The event system keys events by file descriptor; you can only have one instance of an Event structure scheduled for a given descriptor. You may have multiple event structures that reference the same descriptor, but only one of those can be active in the scheduler at a given time.

## Creating a file-descriptor based event

If you have an open socket and you want to use the event system to alert you when it becomes readable, you would use code along the lines of:

```
#include "ec_config.h"
#include "event.h"
#include "scheduler.h"

static int its_readable(Event *event, int eventtype, void *closure,
  struct timeval *now)
{
  char buf[8192];
  int len;
  int needmask;

  len = event_read(event->fd, buf, sizeof(buf), &needmask);
  if (len > 0) {
    log1_printf(DDEBUG, "I read %d bytes: %.*s\n", len, len, buf);
    return needmask;
  }
  log1_printf(DERROR,
    "My socket had a problem %d: %s\n",
    errno, strerror(errno));
  event_close(event); /* close the event descriptor */
  return 0; /* the scheduler will de-schedule and free the event structure */
}

...
  Event *e;
  int fd = socket(...);
  int non_blocking = 1;

  ioctl(fd, FIONBIO, &non_blocking);
  e = build_fd_event(fd, E_READ, 0, its_readable, NULL);
  schedule_event(e);
...
```

The event callback function receives the event pointer and the *`eventtype`* mask, identifying the event (and thus the descriptor) and the type of event that is signalled. We define `E_READ` to indicate that reading the descriptor will not block, `E_WRITE` to indicate that writing will not block and `E_EXCEPTION` to indicate certain error conditions. There are other possible mask values, but they are for internal use. *`eventtype`* will be set to one or more of these values bitwise OR'd together.

The *`closure`* that is passed to the event callback corresponds to the closure that we associated with the event by the `build_fd_event` call.

The *`now`* references a timeval that holds the time that was sampled at the start of the current scheduler iteration, which should be accurate enough for most purposes, but if you need sub-second accuracy, you should use gettimeofday() to fetch your own idea of the current time.

## Event callback return values

The return value of the callback is used as the new event mask for the event. In the code sample above, the callback returns `E_READ` each time, indicating that we're only interested in reading from the descriptor as data becomes available. Most network protocols involve an element of dialogue rather than monologue, so you might return `E_READ` until you've read a complete packet, then `E_WRITE` while you are waiting for your response to be dispatched over the network.

Returning `0` from an event callback causes the scheduler to free the event structure via `event_free`. Note that freeing the event structure does not close the descriptor; you must explicitly do so yourself before returning from the callback. Also note that you must not directly call `event_free` on the event currently being dispatched, because the scheduler is working with the event and you'll cause a crash if you free it out from under the scheduler.

The code samples here use `event_read` and `event_write` to encapsulate the handling of special events (such as SSL). The functions populate a *`needmask`* that will be set to the appropriate return value required to satisfy a pending read or write operation. SSL enabled events may need to write data in order to satisfy a read, so it's not simply a matter of returning `E_READ` and `E_READ` only when you are reading data.

The code sample below flip-flops between writing to and then reading from a socket, until it encounters an error, and then it closes the socket and free's the event. Notice how we jump to the read code and attempt to read immediately after we finished a write; this is necessary because some platforms will only signal the scheduler when the descriptor is first signalled, and won't trigger it again until the next packet comes in from the network. If a prior read used up only a portion of a kernel level buffer, there's no guarantee that returning `E_READ` would wake up the event immediately. This behavior manifests as sluggish event handling, so if you observe apparent slowness in your code, it's quite possible that this is the cause.

```
#include "ec_config.h"
#include "event.h"
#include "scheduler.h"

static int my_callback(Event *event, int eventtype, void *closure,
  struct timeval *now)
{
  char buf[8192];
  int len;
  int needmask = 0;

  if (eventtype & E_WRITE) {
trywrite:
    len = event_write(event, "hello\r\n", sizeof("hello\r\n")-1, &needmask);
    if (len == -1 && errno == EAGAIN) {
      return needmask;
    }
    if (len) {
      goto tryread;
    }
    log1_printf(DERROR,
      "My socket had a problem during write %d: %s\n",
      errno, strerror(errno));
    event_close(event); /* close the event descriptor */
    return 0; /* the scheduler will de-schedule and free the event structure */
  }
  if (eventtype & E_READ) {
tryread:
    len = event_read(event, buf, sizeof(buf), &needmask);
    if (len == -1 && errno == EAGAIN) {
      return needmask;
    }
    if (len > 0) {
      log1_printf(DDEBUG, "I read %d bytes: %.*s\n", len, len, buf);
      goto trywrite;
    }
    log1_printf(DERROR,
      "My socket had a problem during read %d: %s\n",
      errno, strerror(errno));
    event_close(event); /* close the event descriptor */
    return 0; /* the scheduler will de-schedule and free the event structure */
  }
  log1_printf(DERROR, "This state shouldn't trigger\n");
  event_close(event); /* close the event descriptor */
  return 0; /* the scheduler will de-schedule and free the event structure */
}

...
  Event *e;
  int fd = socket(...);
  int non_blocking = 1;

  ioctl(fd, FIONBIO, &non_blocking);
  e = build_fd_event(fd, E_WRITE, 0, my_callback, NULL);
  schedule_event(e);
...
```

## Handling partial writes

A number of factors can cause a write to succeed after only partially satisfying your request. This can lead to some complicated logic to ensure that your entire write completes, so we provide some helper functions to make it simpler. The sample above could be implemented using those helpers, as shown below.

```
#include "ec_config.h"
#include "event.h"
#include "scheduler.h"

struct my_state {
  event_io_state st;
};

static int my_callback(Event *event, int eventtype, void *closure,
  struct timeval *now)
{
  char buf[8192];
  int len;
  int needmask = 0;
  struct my_state *self = (struct my_state*)closure;

  if (eventtype & E_WRITE) {
trywrite:
    if (self->st.needmask) {
      ret = event_io_retry(event, &self->st);
    } else {
      ret = event_io_write(event, "hello\r\n",
              sizeof("hello\r\n")-1, &self->st);
    }
    switch (ret) {
      case EVENT_IO_PENDING:
        return self->st.needmask;
      case EVENT_IO_DONE:
        goto tryread;
    }
    log1_printf(DERROR,
      "My socket had a problem during write %d: %s\n",
      errno, strerror(errno));
    goto close_out;
  }
  if (eventtype & E_READ) {
tryread:
    len = event_read(event, buf, sizeof(buf), &needmask);
    if (len == -1 && errno == EAGAIN) {
      return needmask;
    }
    if (len > 0) {
      log1_printf(DDEBUG, "I read %d bytes: %.*s\n", len, len, buf);
      goto trywrite;
    }
    log1_printf(DERROR,
      "My socket had a problem during read %d: %s\n",
      errno, strerror(errno));
    goto close_out;
  }
  log1_printf(DERROR, "This state shouldn't trigger\n");
close_out:
  event_io_state_clean(&self->st);
  free(self);
  event_close(event); /* close the event descriptor */
  return 0; /* the scheduler will de-schedule and free the event structure */
}

...
  Event *e;
  int fd = socket(...);
  int non_blocking = 1;
  struct my_state *state;

  ioctl(fd, FIONBIO, &non_blocking);
  state = calloc(1, sizeof(*state));
  e = build_fd_event(fd, E_WRITE, 0, my_callback, state);
  schedule_event(e);
...
```

## Reading a "record" from a stream

The example above doesn't care what form the data is receives arrives in. A real-world protocol will tend to use either a fixed (or pre-arranged) packet length, or be line based. The sample below demonstrates reading a line delimited by canonical line endings. The tryread construct encapsulates a read buffer; you should keep it alive until you close your socket. You should not free it between read calls on a given socket, as you will be discarding buffered data.

```
#include "ec_config.h"
#include "event.h"
#include "scheduler.h"
#include "ec_growbuf.h"

struct my_state {
  minimal_tryread_construct mtc; 
};

static int my_callback(Event *event, int eventtype, void *closure,
  struct timeval *now)
{
  int len;
  int needmask = 0;
  struct my_state *self = (struct my_state*)closure;

  len = tryread_until(event, &needmask, &self->mtc, "\r\n");
  if (len == -1 && errno == EAGAIN) {
    return needmask;
  }
  if (len > 0) {
    char *line =  self->mtc.gb_donebuffer;
    len = self->mtc.gb_donesize;
    log1_printf(DDEBUG, "I got my line, its length is %d. %s",
      len, line);
    ec_free(MEMTYPE_MESSAGE_BODY, line);
    goto close_out;
  }
  log1_printf(DERROR,
    "My socket had a problem during read %d: %s\n",
    errno, strerror(errno));
close_out:
  minimal_tryread_construct_free(&self->mtc);
  free(self);
  event_close(event); /* close the event descriptor */
  return 0; /* the scheduler will de-schedule and free the event structure */
}

...
  Event *e;
  int fd = socket(...);
  int non_blocking = 1;
  struct my_state *state;

  ioctl(fd, FIONBIO, &non_blocking);
  state = calloc(1, sizeof(*state));
  e = build_fd_event(fd, E_READ, 0, my_callback, state);
  schedule_event(e);
...
```

This example reads 8192 from a socket and into a buffer. It will either read 8192 bytes precisely, or indicate an error.

```
#include "ec_config.h"
#include "event.h"
#include "scheduler.h"

struct my_state {
  event_io_state st;
};

static int my_callback(Event *event, int eventtype, void *closure,
  struct timeval *now)
{
  char buf[8192];
  struct my_state *self = (struct my_state*)closure;

  switch (event_io_read(event, buf, sizeof(buf), &self->st)) {
    case EVENT_IO_PENDING:
      return self->st.needmask;
    case EVENT_IO_DONE:
      log1_printf(DDEBUG, "I read exactly %d bytes into buf\n", sizeof(buf));
      goto close_out;
  }
  log1_printf(DERROR,
    "My socket had a problem during read %d: %s\n",
    errno, strerror(errno));
close_out:
  event_io_state_clean(&self->st);
  free(self);
  event_close(event); /* close the event descriptor */
  return 0; /* the scheduler will de-schedule and free the event structure */
}

...
  Event *e;
  int fd = socket(...);
  int non_blocking = 1;
  struct my_state *state;

  ioctl(fd, FIONBIO, &non_blocking);
  state = calloc(1, sizeof(*state));
  e = build_fd_event(fd, E_READ, 0, my_callback, state);
  schedule_event(e);
...
```

## Suspending and resuming a connection

Often, we need to put a connection on hold while we perform some other asynchronous action, such as resolving DNS or performing work in a thread pool. The essence of suspending a connection is described below, but you should be aware that some frameworks in ecelerity have alternative APIs and requirements, so be sure to use the method appropriate for the environment in which your code will operate.

Suspending a connection involves duplicating the current event, saving the duplicate for later, and then informing the scheduler that it should free the current event.

Resuming a connection is then simply a matter of scheduling your duplicated event using `schedule_event_and_dispatch`, which is safe to call from any thread. If you are using the thread pool APIs, you can use `ec_async_wake_event` to handle this for you.

The code sample below reads a URL from a socket, suspends the session while it retrieves the content from that URL, resumes the session and then sends the contents back over the channel to the peer:

```
#include "ec_config.h"
#include "event.h"
#include "scheduler.h"
#include "io_wrapper.h"
#include "ec_growbuf.h"

struct my_state {
  minimal_tryread_construct mtc; 
  io_job *job;
  Event *session;
  enum {
    WAITING_FOR_LINE,
    WAITING_FOR_URL,
    WRITING_DATA
  } state;
  event_io_state st;
  string buf;
};

static int my_callback(Event *event, int eventtype, void *closure,
  struct timeval *now)
{
  int len;
  int needmask = 0;
  struct my_state *self = (struct my_state*)closure;

state_change:
  switch (self->state) {
    case WAITING_FOR_LINE:
      len = tryread_until(event, &needmask, &self->mtc, "\r\n");
      if (len == -1 && errno == EAGAIN) {
        return needmask;
      }
      if (len <= 0) {
        log1_printf(DERROR, "My socket had a problem during read %d: %s\n",
          errno, strerror(errno));
        goto close_out;
      }
      /* duplicate the current session */
      self->session = ec_malloc(MEMTYPE_EVENT);
      memcpy(self->session, event, sizeof(*event));
      event_post_dup(self->session, event);
      /* remove the event from the kernel level scheduler */
      clear_event_by_fd(event->fd);
      /* create a job to read in the url */
      self->job = io_wrapper_create_read_job(self->mtc.gb_donebuffer);
      self->job->buffer = &self->buf;
      self->buf.len = 0;
      ec_free(MEMTYPE_MESSAGE_BODY, self->mtc.gb_donebuffer);
      /* arrange for that job to schedule our new event */
      ec_async_wake_event(&self->job->job, self->session, E_READ|E_WRITE);
      /* queue the job to the thread pool */
      ec_queue_async_job(&self->job->job);
      self->state = WAITING_FOR_URL;
      /* tell ecelerity scheduler to free event */
      return 0;

    case WAITING_FOR_URL:
      /* when we get here, our IO job completed */
      if (self->job->status == IOJ_COMPLETED) {
        /* success, all our data is in self->job->buffer */
        self->state = WRITING_DATA;
        goto state_change;
      }
      /* there was an erro */
      log1_printf(DERROR, "Error fetching URL\n");
      goto close_out;

    case WRITING_DATA:
      switch (event_io_write_string(event, self->buf, &self->st)) {
        case EVENT_IO_PENDING:
          return self->st.needmask;
        case EVENT_IO_DONE:
          self->state = WAITING_FOR_LINE;
          io_wrapper_free_read_job(self->job);
          self->job = NULL;
          goto state_change;
      }
      log1_printf(DERROR,
        "My socket had a problem during write %d: %s\n",
        errno, strerror(errno));
      goto close_out;
  }
close_out:
  if (self->job) {
    io_wrapper_free_read_job(self->job);
    self->job = NULL;
  }
  minimal_tryread_construct_free(&self->mtc);
  free(self);
  event_close(event); /* close the event descriptor */
  return 0; /* the scheduler will de-schedule and free the event structure */
}

...
  Event *e;
  int fd = socket(...);
  int non_blocking = 1;
  struct my_state *state;

  ioctl(fd, FIONBIO, &non_blocking);
  state = calloc(1, sizeof(*state));
  string_init_type(&state->buf, 8192, STRING_TYPE_ECSTRING);
  e = build_fd_event(fd, E_READ, 0, my_callback, state);
  schedule_event(e);
...
```

| [Prev](extending.C.ref.ec_cache.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.ref.pcre_cache.php) |
| ec_cache  | [Table of Contents](index.php) |  pcre_cache |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)