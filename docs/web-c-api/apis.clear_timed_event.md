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

| clear_timed_event |
| [Prev](apis.clear_event_by_fd.php)  | Chapter 24. Event Functions |  [Next](apis.schedule_event.php) |

<a name="apis.clear_timed_event"></a>
## Name

clear_timed_event — Clear the specified timed event

## Synopsis

`#include "scheduler.h"`

| `void **clear_timed_event** (` | <var class="pdparam">evt</var>`)`; |   |

`Event * <var class="pdparam">evt</var>`;<a name="idp24409040"></a>
## Description

Clear the specified timed event.

### Note

You cancel timed events using this function, which will implicitly free the event if it was found in the system. Otherwise it will return `0` and the caller is responsible for freeing the event.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

The Event that you wish to close.

</dd>

</dl>

**Return Values**

On success this function returns `1`. When `0` is returned, the caller is responsible for freeing the event.

**Threading**
### Warning

Only call this function from the `Scheduler` thread.

<a name="idp24418720"></a>
## See Also

[Section 68.49, “Event”](structs.event.php "68.49. Event") and [Section 1.3.3, “The Event API”](arch.primary.apis.php#arch.event "1.3.3. The Event API")

| [Prev](apis.clear_event_by_fd.php)  | [Up](event.php) |  [Next](apis.schedule_event.php) |
| clear_event_by_fd  | [Table of Contents](index.php) |  schedule_event |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)