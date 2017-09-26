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

| ec_mt_realloc |
| [Prev](apis.ec_mt_free.php)  | Chapter 33. Memory Functions |  [Next](apis.ec_mt_register.php) |

<a name="apis.ec_mt_realloc"></a>
## Name

ec_mt_realloc — Reallocate memory against a given memtype

## Synopsis

`#include "ec_malloc.h"`

| `void * **ec_mt_realloc** (` | <var class="pdparam">def</var>, |   |
|   | <var class="pdparam">old</var>, |   |
|   | <var class="pdparam">oldsize</var>, |   |
|   | <var class="pdparam">size</var>`)`; |   |

`struct ec_mem_type_def * <var class="pdparam">def</var>`;
`void * <var class="pdparam">old</var>`;
`size_t <var class="pdparam">oldsize</var>`;
`size_t <var class="pdparam">size</var>`;<a name="idp27504832"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.0.18.

Reallocate memory against a given memtype.

### Note

This performs a raw reallocation from the allocator backend. *Do not call this function directly, [ec_realloc](apis.ec_realloc.php "ec_realloc") will call it at the appropriate time.* 

Fixed sized allocations are never resized.

<dl class="variablelist">

<dt>def</dt>

<dd>

The memory type. For more information about memory types see [Memory Types](arch.primary.apis.php#arch.memory.types "1.3.6.1. Memory Types").

</dd>

<dt>old</dt>

<dd>

A void pointer to the old memory location.

</dd>

<dt>oldsize</dt>

<dd>

The old memory size..

</dd>

<dt>size</dt>

<dd>

The new memory size.

</dd>

</dl>

<a name="idp27518944"></a>
## See Also

[Chapter 33, *Memory Functions*](memory.php "Chapter 33. Memory Functions") 

| [Prev](apis.ec_mt_free.php)  | [Up](memory.php) |  [Next](apis.ec_mt_register.php) |
| ec_mt_free  | [Table of Contents](index.php) |  ec_mt_register |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)