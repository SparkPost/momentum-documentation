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

| scheduler_active_queue_reinsert |
| [Prev](apis.ping_scheduler.php)  | Chapter 41. Scheduler Functions |  [Next](apis.scheduler_close_connection.php) |

<a name="apis.scheduler_active_queue_reinsert"></a>
## Name

scheduler_active_queue_reinsert — Reinsert a delivery construct's messages into the active queue, for re-processing

## Synopsis

`#include "mail_queue.h"`

| `void **scheduler_active_queue_reinsert** (` | <var class="pdparam">dc</var>, |   |
|   | <var class="pdparam">domain</var>`)`; |   |

`delivery_construct * <var class="pdparam">dc</var>`;
`const char * <var class="pdparam">domain</var>`;<a name="idp31380880"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Reinsert a delivery construct's messages into the active queue, for re-processing.

This is necessary in a few instances (banner fail, TLS errors, etc). In general if you have an SMTP failure you should be going into the delayed queue, so don't use this unless you really know what you're doing.

| [Prev](apis.ping_scheduler.php)  | [Up](scheduler.php) |  [Next](apis.scheduler_close_connection.php) |
| ping_scheduler  | [Table of Contents](index.php) |  scheduler_close_connection |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)