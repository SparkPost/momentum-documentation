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

| ec_malloc_size |
| [Prev](apis.ec_malloc.php)  | Chapter 33. Memory Functions |  [Next](apis.ec_mem_get_stats.php) |

<a name="apis.ec_malloc_size"></a>
## Name

ec_malloc_size — Allocate a block of memory of arbitrary size

## Synopsis

`#include "ec_malloc.h"`

| `void * **ec_malloc_size** (` | <var class="pdparam">object_type</var>, |   |
|   | <var class="pdparam">size</var>`)`; |   |

`int <var class="pdparam">object_type</var>`;
`size_t <var class="pdparam">size</var>`;<a name="idp27220368"></a>
## Description

Allocate a block of memory of arbitrary size. The memory is uninitialized.

### Note

This function is only valid with VSIZE memory type, not a fixed size type. For more information about memory types see [Memory Types](arch.primary.apis.php#arch.memory.types "1.3.6.1. Memory Types").

Memory allocated using `ec_malloc_size` must be freed via [ec_free](apis.ec_free.php "ec_free").

The system will use the locally configured allocator to satisfy the allocation, but this choice will be overridden by the setting of the [malloc2mmap_threshold](https://support.messagesystems.com/docs/web-ref/conf.ref.malloc2mmap_threshold.php) setting.

Since 3.0.25, the behavior of `malloc2mmap_threshold` is as follows: If malloc2mmap_threshold is set to "auto" in the configuration file (this is equivalent to -1), and the allocator is set to use the system allocator (malloc), then the threshold value is assumed to be `4092`. If the allocator is not malloc, then the threshold value is assumed to be "off" (0). If the option is configured with any other value, then that value is used as the threshold.

Any sized allocation where SIZE exceeds the effective threshold value will be satisfied using the `mmap` system call.

In versions prior to 3.0.25, the malloc2mmap_threshold is ignored unless the allocator is set to the system allocator. The default value is `4092`.

In all versions, if the effective threshold value is 0, then mmap() will not be used directly by `ec_malloc_size` allocations, although the underlying allocator may opt to use mmap itself.

Regardless of whether mmap() is used directly or indirectly by `ec_malloc_size`, the memory returned from this function must only be freed using [ec_free](apis.ec_free.php "ec_free").

**Parameters**

<dl class="variablelist">

<dt>object_type</dt>

<dd>

This parameter is an integer indicating a memory type as defined in [the section called “Memory Types”](apis.ec_malloc.php#apis.ec_malloc.types "Memory Types").

</dd>

<dt>size</dt>

<dd>

A `size_t` type unsigned integer.

</dd>

</dl>

**Return Values**

This function returns a void pointer to the memory location.

**Threading**

It is legal to call this function in any thread.

<a name="idp27240400"></a>
## See Also

[ec_malloc](apis.ec_malloc.php "ec_malloc"), [ec_free](apis.ec_free.php "ec_free"), [ec_realloc](apis.ec_realloc.php "ec_realloc") [ec_mt_strndup](apis.ec_mt_strndup.php "ec_mt_strndup") and [ec_mt_strdup](apis.ec_mt_strdup.php "ec_mt_strdup").

| [Prev](apis.ec_malloc.php)  | [Up](memory.php) |  [Next](apis.ec_mem_get_stats.php) |
| ec_malloc  | [Table of Contents](index.php) |  ec_mem_get_stats |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)