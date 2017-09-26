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

| build_event_from_now_f |
| [Prev](apis.build_event.php)  | Chapter 24. Event Functions |  [Next](apis.build_fd_event.php) |

<a name="apis.build_event_from_now_f"></a>
## Name

build_event_from_now_f — Create a timed event

## Synopsis

`#include "event.h"`

| `(Event *) **build_event_from_now_f** (` | <var class="pdparam">offset</var>, |   |
|   | <var class="pdparam">fd</var>, |   |
|   | <var class="pdparam">callback</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`float <var class="pdparam">offset</var>`;
`int <var class="pdparam">fd</var>`;
`Eventfunc <var class="pdparam">callback</var>`;
`void <var class="pdparam">closure</var>`;<a name="idp23993184"></a>
## Description

Create a timed event. It's a common requirement to need to schedule some work to occur either at a particular time, or at a certain time interval from the current time. The event system in Momentum tracks both IO and time-based events.

You can create a timed event using `build_event_from_now_f` which specifies a time interval from the current time plus the specified offset.

Once you have created an event, you will need to schedule the event for it to be picked up by the scheduler. Use `schedule_event` for this purpose.

The *`callback`* and *`closure`* parameters define what will happen when the event is due to run; the callback function will be invoked and passes an *`eventype`* (set to `E_TIMEOUT`) to the event, the *`closure`* that you used to create the timed event and a timeval representing the current time.

The timed event callback function is called from the scheduler thread; you should avoid blocking or lengthy operations.

### Note

You must return `0` from your timed event callback routine.

If you are using a timed event to implement, for example, a timeout for network IO, you will need to cancel the timer when the socket is closed, and reset it when your IO operation completes. You cancel timed events using the [clear_timed_event](apis.clear_timed_event.php "clear_timed_event") function, which will implicitly free the event if it is found in the system. Otherwise it will return `0` and the caller is responsible for freeing the event.

<a name="apis.build_event_from_now_f.example"></a>

**Example 24.1. build_event_from_now_f example**

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

**Parameters**

<dl class="variablelist">

<dt>offset</dt>

<dd>

When to build the event.

</dd>

<dt>fd</dt>

<dd>

This value is always `-1`.

</dd>

<dt>callback</dt>

<dd>

The callback function.

</dd>

<dt>closure</dt>

<dd>

The closure used to create the Event.

</dd>

</dl>

**Return Values**

This function returns an Event.

**Threading**
### Warning

The build_event functions can only be called from the `Scheduler` thread.

<a name="idp24017872"></a>
## See Also

[Section 68.49, “Event”](structs.event.php "68.49. Event") and [event_free](apis.event_free.php "event_free")

| [Prev](apis.build_event.php)  | [Up](event.php) |  [Next](apis.build_fd_event.php) |
| build_event  | [Table of Contents](index.php) |  build_fd_event |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)