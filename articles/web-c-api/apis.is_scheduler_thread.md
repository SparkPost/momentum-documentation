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

| is_scheduler_thread |
| [Prev](scheduler.php)  | Chapter 41. Scheduler Functions |  [Next](apis.ping_scheduler.php) |

<a name="apis.is_scheduler_thread"></a>
## Name

is_scheduler_thread — Determines whether or not the thread that calls this function is a scheduler thread

## Synopsis

`#include "scheduler.h"`

| `int **is_scheduler_thread** (` | `)`; |   |

`void`;<a name="idp31347664"></a>
## Description

Determines whether the thread that calls this function is a scheduler thread.

**Return Values**

This is a Boolean function that returns `1` if this is a scheduler thread, and `0` otherwise.

**Threading**

It is legal to call this function in any thread.

<a name="idp31352208"></a>
## See Also

[scheduler_recurrent_func_add](apis.scheduler_recurrent_func_add.php "scheduler_recurrent_func_add"), [get_scheduler_pid](apis.get_scheduler_pid.php "get_scheduler_pid") and [ping_scheduler](apis.ping_scheduler.php "ping_scheduler").

| [Prev](scheduler.php)  | [Up](scheduler.php) |  [Next](apis.ping_scheduler.php) |
| Chapter 41. Scheduler Functions  | [Table of Contents](index.php) |  ping_scheduler |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)