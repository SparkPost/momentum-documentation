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

| event_free |
| [Prev](apis.event_close.php)  | Chapter 24. Event Functions |  [Next](apis.event_io_printf.php) |

<a name="apis.event_free"></a>
## Name

event_free — Free an event

## Synopsis

`#include "event.h"`

| `void **event_free** (` | <var class="pdparam">e</var>`)`; |   |

`Event * <var class="pdparam">e</var>`;<a name="idp24080272"></a>
## Description

Free an event.

<a name="apis.event_free.example"></a>

**Example 24.2. event_free example**

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

**Parameters**

<dl class="variablelist">

<dt>dst</dt>

<dd>

The Event.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**
### Warning

Only call this function from the `Scheduler` thread.

<a name="idp24090144"></a>
## See Also

[Section 68.49, “Event”](structs.event.php "68.49. Event") and [build_event_from_now_f](apis.build_event_from_now_f.php "build_event_from_now_f")

| [Prev](apis.event_close.php)  | [Up](event.php) |  [Next](apis.event_io_printf.php) |
| event_close  | [Table of Contents](index.php) |  event_io_printf |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)