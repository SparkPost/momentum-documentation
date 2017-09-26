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

| ec_mem_get_stats |
| [Prev](apis.ec_malloc_size.php)  | Chapter 33. Memory Functions |  [Next](apis.ec_memory_get_total_allocated.php) |

<a name="apis.ec_mem_get_stats"></a>
## Name

ec_mem_get_stats — Return usage statistics for all memtypes

## Synopsis

`#include "ec_malloc.h"`

| `int **ec_mem_get_stats** (` | <var class="pdparam">sysstats</var>, |   |
|   | <var class="pdparam">usage_by_type</var>, |   |
|   | <var class="pdparam">nelems</var>`)`; |   |

`struct ec_mem_stats * <var class="pdparam">sysstats</var>`;
`struct ec_mem_type_usage * <var class="pdparam">usage_by_type</var>`;
`unsigned int <var class="pdparam">nelems</var>`;<a name="idp27254208"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.0.18.

Return usage statistics for all memtypes. For more information about memory types see [Memory Types](arch.primary.apis.php#arch.memory.types "1.3.6.1. Memory Types"). It fills out the ec_mem_stats structures with a snapshot of the memory utilization.

It is possible, even likely, that the individual numbers are not 100% consistent with each other, as the allocator layer deliberately avoids a global lock across memory types. Since allocations are being made asynchronously, it is possible that the numbers will change before this routine completes.

The caller is responsible for providing a big enough array of ec_mem_type_usage structures. If the provided array is too small, this function will stop short of overflowing it, and will return the number of registered memtypes. The constant `MEMTYPE_MAX` defines the maximum number of memtypes supported by the allocator; it is easiest to declare a stack variable with `MEMTYPE_MAX` elements and pass that to this function.

**Parameters**

<dl class="variablelist">

<dt>sysstats</dt>

<dd>

A buffer to hold system level information. For a description of this data type see [Section 68.35, “ec_mem_stats”](structs.ec_mem_stats.php "68.35. ec_mem_stats").

</dd>

<dt>usage_by_type</dt>

<dd>

An array to hold per-memtype information.

</dd>

<dt>nelems</dt>

<dd>

The number of elements that can be written to in `usage_by_type`.

</dd>

</dl>

**Return Value**

This function returns the number of defined memtypes.

**Threading**

It is legal to call this function in any thread.

<a name="idp27270064"></a>
## See Also

[Chapter 33, *Memory Functions*](memory.php "Chapter 33. Memory Functions") 

| [Prev](apis.ec_malloc_size.php)  | [Up](memory.php) |  [Next](apis.ec_memory_get_total_allocated.php) |
| ec_malloc_size  | [Table of Contents](index.php) |  ec_memory_get_total_allocated |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)