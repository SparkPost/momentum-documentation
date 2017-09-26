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

| ec_memtype_get_stats |
| [Prev](apis.ec_memtype_by_name.php)  | Chapter 33. Memory Functions |  [Next](apis.ec_memtype_range_by_module.php) |

<a name="apis.ec_memtype_get_stats"></a>
## Name

ec_memtype_get_stats — Return usage statistics for a given memtype

## Synopsis

`#include "ec_malloc.h"`

| `int **ec_memtype_get_stats** (` | <var class="pdparam">object_type</var>, |   |
|   | <var class="pdparam">usage</var>`)`; |   |

`int <var class="pdparam">object_type</var>`;
`struct ec_mem_type_usage * <var class="pdparam">usage</var>`;<a name="idp27373504"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.0.18.

Return usage statistics for a given memtype.

**Parameters**

<dl class="variablelist">

<dt>object_type</dt>

<dd>

The memory type for which stats are desired. For more information about memory types see [Memory Types](arch.primary.apis.php#arch.memory.types "1.3.6.1. Memory Types").

</dd>

<dt>usage</dt>

<dd>

A structure to hold the stats. For more information about this data structure see [Section 68.37, “ec_mem_type_usage”](structs.ec_mem_type_usage.php "68.37. ec_mem_type_usage").

</dd>

</dl>

**Return Value**

This function returns the memory statistics for the desired type.

**Threading**

You can call this function in any thread.

<a name="idp27384480"></a>
## See Also

[Chapter 33, *Memory Functions*          ](memory.php "Chapter 33. Memory Functions") and [memory console command](https://support.messagesystems.com/docs/web-ref/console_commands.memory.php)

| [Prev](apis.ec_memtype_by_name.php)  | [Up](memory.php) |  [Next](apis.ec_memtype_range_by_module.php) |
| ec_memtype_by_name  | [Table of Contents](index.php) |  ec_memtype_range_by_module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)