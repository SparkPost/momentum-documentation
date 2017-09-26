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

| ec_memtype_register |
| [Prev](apis.ec_memtype_range_by_module.php)  | Chapter 33. Memory Functions |  [Next](apis.ec_mt_alloc.php) |

<a name="apis.ec_memtype_register"></a>
## Name

ec_memtype_register — Register a new memtype with the system

## Synopsis

`#include "ec_malloc.h"`

| `int **ec_memtype_register** (` | <var class="pdparam">def</var>`)`; |   |

`const mem_type_def * <var class="pdparam">def</var>`;<a name="idp27418944"></a>
## Description

Register a new memtype with the system. The build-in memtypes are enumerated at [the section called “Memory Types”](apis.ec_malloc.php#apis.ec_malloc.types "Memory Types").

Given a mem_type_def structure, this function registers the memtype with the allocator and returns the memtype id that can then be passed to calls to [ec_malloc](apis.ec_malloc.php "ec_malloc") and related functions to allocate memory against that type.

**Parameters**

<dl class="variablelist">

<dt>def</dt>

<dd>

A constant pointer to a [Section 68.36, “ec_mem_type_def”](structs.ec_mem_type_def.php "68.36. ec_mem_type_def") struct.

</dd>

</dl>

**Return Value**

The new memtype id, or `MEMTYPE_REGISTER_FAILED` (-1) if the new type could not be registered.

Note that the definition structure is effectively copied; after this call returns, the allocator does not use the provided mem_type_def pointer, however, the memtype_description field **must not**     be transient memory; its value is assumed to hold a valid value for the lifetime of the process.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp27429664"></a>
## See Also

[ec_malloc](apis.ec_malloc.php "ec_malloc"), [ec_malloc_size](apis.ec_malloc_size.php "ec_malloc_size"), [ec_realloc](apis.ec_realloc.php "ec_realloc"), [ec_mt_strndup](apis.ec_mt_strndup.php "ec_mt_strndup") and [ec_mt_strdup](apis.ec_mt_strdup.php "ec_mt_strdup").

| [Prev](apis.ec_memtype_range_by_module.php)  | [Up](memory.php) |  [Next](apis.ec_mt_alloc.php) |
| ec_memtype_range_by_module  | [Table of Contents](index.php) |  ec_mt_alloc |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)