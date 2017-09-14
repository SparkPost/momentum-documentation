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

| ec_memtype_range_by_module |
| [Prev](apis.ec_memtype_get_stats.php)  | Chapter 33. Memory Functions |  [Next](apis.ec_memtype_register.php) |

<a name="apis.ec_memtype_range_by_module"></a>
## Name

ec_memtype_range_by_module — Returns the range of memtypes associated with a given module

## Synopsis

`#include "ec_malloc.h"`

| `int **ec_memtype_range_by_module** (` | <var class="pdparam">module</var>, |   |
|   | <var class="pdparam">lower</var>, |   |
|   | <var class="pdparam">upper</var>`)`; |   |

`const char * <var class="pdparam">module</var>`;
`int * <var class="pdparam">lower</var>`;
`int * <var class="pdparam">upper</var>`;<a name="idp27397024"></a>
## Description

This function determines whether a specific range of memtypes is associated with a given module. For more information about memory types see [Memory Types](arch.primary.apis.php#arch.memory.types "1.3.6.1. Memory Types").

**Parameters**

<dl class="variablelist">

<dt>module</dt>

<dd>

The module prefix.

</dd>

<dt>lower</dt>

<dd>

The lower end of the range.

</dd>

<dt>upper</dt>

<dd>

The upper end of the range.

</dd>

</dl>

**Return Value**

This function returns `0` if no memtypes matched, `1` otherwise.

**Threading**

You can call this function from any thread.

<a name="idp27408400"></a>
## See Also

[Chapter 33, *Memory Functions*          ](memory.php "Chapter 33. Memory Functions") and [ec_memtype_by_name](apis.ec_memtype_by_name.php "ec_memtype_by_name")

| [Prev](apis.ec_memtype_get_stats.php)  | [Up](memory.php) |  [Next](apis.ec_memtype_register.php) |
| ec_memtype_get_stats  | [Table of Contents](index.php) |  ec_memtype_register |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)