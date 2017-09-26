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

| scheduler_recurrent_func_add |
| [Prev](apis.scheduler_close_connection.php)  | Chapter 41. Scheduler Functions |  [Next](apis.scheduler_register.php) |

<a name="apis.scheduler_recurrent_func_add"></a>
## Name

scheduler_recurrent_func_add — Registers a recurrent function and a closure for the **master scheduler**           thread

## Synopsis

`#include "scheduler.h"`

| `void **scheduler_recurrent_func_add** (` | <var class="pdparam">func</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`RecurFunc <var class="pdparam">func</var>`;
`void * <var class="pdparam">closure</var>`;<a name="idp31414624"></a>
## Description

Registers a recurrent function and a closure for the **master scheduler**           thread.

**Parameters**

<dl class="variablelist">

<dt>func</dt>

<dd>

The recurrent function to register for the **master scheduler**           thread.

The following typedef applies to this data type:

`typedef int (*RecurFunc) (void *closure, struct timeval * now);`

</dd>

<dt>closure</dt>

<dd>

The closure to register for the **master scheduler**           thread.

</dd>

</dl>

**Return Values**

This function returns `void`.

**Threading**

This function may only be called in the `Scheduler` thread.

### Warning

This function should *only* be called at startup.

<a name="idp31428368"></a>
## See Also

[is_scheduler_thread](apis.is_scheduler_thread.php "is_scheduler_thread"), [get_scheduler_pid](apis.get_scheduler_pid.php "get_scheduler_pid") and [ping_scheduler](apis.ping_scheduler.php "ping_scheduler").

| [Prev](apis.scheduler_close_connection.php)  | [Up](scheduler.php) |  [Next](apis.scheduler_register.php) |
| scheduler_close_connection  | [Table of Contents](index.php) |  scheduler_register |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)