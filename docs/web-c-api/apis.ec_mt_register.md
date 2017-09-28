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

| ec_mt_register |
| [Prev](apis.ec_mt_realloc.php)  | Chapter 33. Memory Functions |  [Next](apis.ec_mt_strdup.php) |

<a name="apis.ec_mt_register"></a>
## Name

ec_mt_register — Implementation specific memtype initialization routine

## Synopsis

`#include "ec_malloc.h"`

| `int **ec_mt_register** (` | <var class="pdparam">def</var>, |   |
|   | <var class="pdparam">impl_data</var>`)`; |   |

`const mem_type_def * <var class="pdparam">def</var>`;
`void ** <var class="pdparam">impl_data</var>`;<a name="idp27529824"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.0.18.

Implementation specific memtype initialization routine. For more information about memory types see [Memory Types](arch.primary.apis.php#arch.memory.types "1.3.6.1. Memory Types").

### Warning

Do not call this function directly, use [ec_memtype_register](apis.ec_memtype_register.php "ec_memtype_register").

This is used to allow an allocator implementation to perform memtype-specific initialization. For instance, a slab allocator may want to initialize the slab information here.

The implementation may set `*impl_data` to hold a pointer to its state.

If this function returns `0`, the registration of the given memtype is treated as failed. If this function returns `1`, the registration of the given memtype is treated as successful. If this function returns any other value, the behavior is undefined.

<a name="idp27538320"></a>
## See Also

[Chapter 33, *Memory Functions*](memory.php "Chapter 33. Memory Functions") 

| [Prev](apis.ec_mt_realloc.php)  | [Up](memory.php) |  [Next](apis.ec_mt_strdup.php) |
| ec_mt_realloc  | [Table of Contents](index.php) |  ec_mt_strdup |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)