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

| timed events |
| [Prev](extending.C.ref.pcre_cache.php)  | Chapter 17. C API Reference |  [Next](extending.C.genref.API_EXPORT.php) |

<a name="extending.C.ref.timed-events"></a>
## Name

build_event_from_now_f, build_event_from_now, build_event_from_epoch, clear_timed_event — Timed Events

## Synopsis

```
#include "ec_config.h"
#include "event.h"
#include "scheduler.h"

typedef int (*EventFunc)(Event *event, int eventtype,
  void *closure, struct timeval *now);
```

| `Event ***build_event_from_now_f** (` | <var class="pdparam">offset</var>, |   |
|   | <var class="pdparam">fd_always_minus_one</var>, |   |
|   | <var class="pdparam">callback</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`float <var class="pdparam">offset</var>`;
`unsigned int <var class="pdparam">fd_always_minus_one</var>`;
`EventFunc <var class="pdparam">callback</var>`;
`void *<var class="pdparam">closure</var>`;

| `Event ***build_event_from_now** (` | <var class="pdparam">when</var>, |   |
|   | <var class="pdparam">fd_always_minus_one</var>, |   |
|   | <var class="pdparam">callback</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`struct timeval <var class="pdparam">when</var>`;
`unsigned int <var class="pdparam">fd_always_minus_one</var>`;
`EventFunc <var class="pdparam">callback</var>`;
`void *<var class="pdparam">closure</var>`;

| `Event ***build_event_from_epoch** (` | <var class="pdparam">when</var>, |   |
|   | <var class="pdparam">fd_always_minus_one</var>, |   |
|   | <var class="pdparam">callback</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`struct timeval <var class="pdparam">when</var>`;
`unsigned int <var class="pdparam">fd_always_minus_one</var>`;
`EventFunc <var class="pdparam">callback</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **clear_timed_event** (` | <var class="pdparam">evt</var>`)`; |   |

`Event <var class="pdparam">evt</var>`;<a name="idp16829680"></a>
## Description

### Warning

All of the functions described here can only be called from the scheduler thread.

It's a common requirement to need to schedule some work to occur either at a particular time, or at a certain time interval from the current time. The event system in Momentum tracks both IO and time based events, and this page documents how to use the latter.

To create a timed event, you use one of `build_event_from_now`, `build_event_from_now_f` or `build_event_from_epoch`. These functions are very similar; the `from_now` variants specify a time interval from the current time, whereas the `from_epoch` specifies and absolute time relative to the Unix epoch.

The *`callback`* and *`closure`* parameters define what will happen when the event is due to run; the callback function will be invoked and passed the event, an *`eventype`* set to `E_TIMEOUT` , the *`closure`* that you used to create the timed event and a timeval representing the current time.

These functions simply create the event; you will need to schedule the event for it to be picked up by the scheduler. You use `schedule_event` for this purpose.

The timed event callback function is called from the scheduler thread; you should avoid blocking or lengthy operations.

### Note

You must return 0 from your timed event callback routine.

<a name="idp16840320"></a>

**Example 17.3. Schedule some code to run in 30 seconds time**

```
#include "ec_config.h"
#include "event.h"
#include "scheduler.h"

static int my_func(Event *event, int eventtype, void *closure,
  struct timeval *now)
{
  log1_printf(DDEBUG, "my_func was triggered, closure is %s\n",
    (char*)closure);
  return 0;
}

...

  Event *t = build_event_from_now_f(30, -1, my_func, "hello");
  schedule_event(t);
...
```

## Recurrent timed events

If you need to trigger your event multiple times, for instance, every 30 seconds until some later decision to cancel the event, then you will need to create and schedule a new timed event from within your timed event callback routine.

<a name="idp16843616"></a>

**Example 17.4. Schedule some code to run every 30 seconds**

```
#include "ec_config.h"
#include "event.h"
#include "scheduler.h"

static int my_func(Event *event, int eventtype, void *closure,
  struct timeval *now)
{
  Event *t;

  log1_printf(DDEBUG, "my_func was triggered, closure is %s\n",
    (char*)closure);

  t = build_event_from_now_f(30, -1, my_func, closure);
  schedule_event(t);

  return 0;
}

...

  Event *t = build_event_from_now_f(30, -1, my_func, "hello");
  schedule_event(t);
...
```

## Cancelling a timed event

If you are using a timed event to implement, for example, a timeout for network IO, you will need to cancel the timer when the socket is closed, and re-set it when your IO operation completes. You cancel timed events using the `clear_timed_event` function, which will implicitly free the event if it was found in the system. Otherwise it will return 0 and the caller is responsible for freeing the event.

<a name="idp16847568"></a>

**Example 17.5. Cancelling a timed event**

```
#include "ec_config.h"
#include "event.h"
#include "scheduler.h"

static int my_func(Event *event, int eventtype, void *closure,
  struct timeval *now);
...

  Event *t = build_event_from_now_f(30, -1, my_func, "hello");
  schedule_event(t);
...
  if (!clear_timed_event(t)) {
    event_free(t);
  }
  /* t is no longer valid */
...
```

| [Prev](extending.C.ref.pcre_cache.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.genref.API_EXPORT.php) |
| pcre_cache  | [Table of Contents](index.php) |  API_EXPORT |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)