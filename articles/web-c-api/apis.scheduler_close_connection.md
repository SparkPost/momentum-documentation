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

| scheduler_close_connection |
| [Prev](apis.scheduler_active_queue_reinsert.php)  | Chapter 41. Scheduler Functions |  [Next](apis.scheduler_recurrent_func_add.php) |

<a name="apis.scheduler_close_connection"></a>
## Name

scheduler_close_connection — Have the scheduler clean up a connection

## Synopsis

`#include "mail_queue.h"`

| `void **scheduler_close_connection** (` | <var class="pdparam">dc</var>, |   |
|   | <var class="pdparam">domain</var>`)`; |   |

`delivery_construct * <var class="pdparam">dc</var>`;
`const char * <var class="pdparam">domain</var>`;<a name="idp31393232"></a>
## Description

Have the scheduler clean up a connection.

**Parameters**

<dl class="variablelist">

<dt>dc</dt>

<dd>

A `delivery_construct`. For documentation of this data structure see [Section 68.11, “delivery_construct”](structs.delivery_construct.php "68.11. delivery_construct")

</dd>

<dt>domain</dt>

<dd>

A string name of the domain.

</dd>

</dl>

**Return Values**

This function returns `void`.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp31402944"></a>
## See Also

[scheduler_reuse_connection](apis.scheduler_reuse_connection.php "scheduler_reuse_connection")

| [Prev](apis.scheduler_active_queue_reinsert.php)  | [Up](scheduler.php) |  [Next](apis.scheduler_recurrent_func_add.php) |
| scheduler_active_queue_reinsert  | [Table of Contents](index.php) |  scheduler_recurrent_func_add |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)