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

| ec_mt_alloc |
| [Prev](apis.ec_memtype_register.php)  | Chapter 33. Memory Functions |  [Next](apis.ec_mt_asprintf.php) |

<a name="apis.ec_mt_alloc"></a>
## Name

ec_mt_alloc — Makes an allocation against a given memtype

## Synopsis

`#include "ec_malloc.h"`

| `void * **ec_mt_alloc** (` | <var class="pdparam">def</var>, |   |
|   | <var class="pdparam">size</var>`)`; |   |

`struct ec_mem_type_def * <var class="pdparam">def</var>`;
`size_t <var class="pdparam">size</var>`;<a name="idp27442800"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.0.18.

Makes an allocation against a given memtype. For a list of memory types see [the section called “Memory Types”](apis.ec_malloc.php#apis.ec_malloc.types "Memory Types").

### Note

This performs a raw allocation from the allocator backend. *Do not call this function directly, [ec_malloc](apis.ec_malloc.php "ec_malloc") will call it at the appropriate time.* 

Size will be the size to use for the allocation.

| [Prev](apis.ec_memtype_register.php)  | [Up](memory.php) |  [Next](apis.ec_mt_asprintf.php) |
| ec_memtype_register  | [Table of Contents](index.php) |  ec_mt_asprintf |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)