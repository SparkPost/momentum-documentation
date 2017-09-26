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

| __mail_queue_maintain |
| [Prev](mailq.php)  | Chapter 32. Mail Queue Functions |  [Next](apis.__mailq_get_next_active.php) |

<a name="apis.__mail_queue_maintain"></a>
## Name

__mail_queue_maintain — __mail_queue_maintain is the default implementation if the __mail_queue_maintain hook

## Synopsis

`#include "mail_queue.h"`

| `int **__mail_queue_maintain** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding_slot</var>, |   |
|   | <var class="pdparam">sl</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">goalsz</var>, |   |
|   | <var class="pdparam">reserve</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`domain_record * <var class="pdparam">dr</var>`;
`ec_binding_slot <var class="pdparam">binding_slot</var>`;
`Skiplist * <var class="pdparam">sl</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`int <var class="pdparam">goalsz</var>`;
`int <var class="pdparam">reserve</var>`;<a name="idp26840880"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

__mail_queue_maintain is the default implementation if the __mail_queue_maintain hook.

This is provided as an export so you can create a hook that uses this default as a part of a larger, smarter implementation.

| [Prev](mailq.php)  | [Up](mailq.php) |  [Next](apis.__mailq_get_next_active.php) |
| Chapter 32. Mail Queue Functions  | [Table of Contents](index.php) |  __mailq_get_next_active |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)