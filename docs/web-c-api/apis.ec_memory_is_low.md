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

| ec_memory_is_low |
| [Prev](apis.ec_memory_get_total_allocated.php)  | Chapter 33. Memory Functions |  [Next](apis.ec_memory_pretty_mem_amount.php) |

<a name="apis.ec_memory_is_low"></a>
## Name

ec_memory_is_low — Called when the core detects a memory shortage

## Synopsis

`#include "ec_malloc.h"`

| `void **ec_memory_is_low** (` | `)`; |   |

`void`;<a name="idp27297136"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.0.18.

Called when the core detects a memory shortage.

The purpose of this function is to try to flush or otherwise release resources back to the system, if possible.

**Return Value**

This function returns void.

**Threading**

You can call this function in any thread.

<a name="idp27302608"></a>
## See Also

[Chapter 33, *Memory Functions*](memory.php "Chapter 33. Memory Functions") 

| [Prev](apis.ec_memory_get_total_allocated.php)  | [Up](memory.php) |  [Next](apis.ec_memory_pretty_mem_amount.php) |
| ec_memory_get_total_allocated  | [Table of Contents](index.php) |  ec_memory_pretty_mem_amount |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)