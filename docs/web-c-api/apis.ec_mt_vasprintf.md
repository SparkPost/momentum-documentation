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

| ec_mt_vasprintf |
| [Prev](apis.ec_mt_strndup.php)  | Chapter 33. Memory Functions |  [Next](apis.ec_realloc.php) |

<a name="apis.ec_mt_vasprintf"></a>
## Name

ec_mt_vasprintf — Memory-typed vasprintf function

## Synopsis

`#include "misc/ec_string.h"`

| `int **ec_mt_vasprintf** (` | <var class="pdparam">mt</var>, |   |
|   | <var class="pdparam">strp</var>, |   |
|   | <var class="pdparam">fmt</var>, |   |
|   | <var class="pdparam">ap</var>`)`; |   |

`int <var class="pdparam">mt</var>`;
`char ** <var class="pdparam">strp</var>`;
`const char * <var class="pdparam">fmt</var>`;
`va_list <var class="pdparam">ap</var>`;<a name="idp27605712"></a>
## Description

Memory-typed vasprintf function.

Version of vasprintf() that takes an Momentum memory type as an argument.

**Parameters**

<dl class="variablelist">

<dt>mt</dt>

<dd>

The memory type to use for allocations. For more information about memory types see [Memory Types](arch.primary.apis.php#arch.memory.types "1.3.6.1. Memory Types").

</dd>

<dt>strp</dt>

<dd>

The newly allocated string.

</dd>

<dt>fmt</dt>

<dd>

The format string.

</dd>

<dt>ap</dt>

<dd>

The list of arguments.

</dd>

</dl>

**Return Value**

This function returns the length of the resulting string or `-1` if the allocation fails.

**Threading**

It is legal to call this function in any thread.

<a name="idp27618992"></a>
## See Also

[Chapter 33, *Memory Functions*](memory.php "Chapter 33. Memory Functions") 

| [Prev](apis.ec_mt_strndup.php)  | [Up](memory.php) |  [Next](apis.ec_realloc.php) |
| ec_mt_strndup  | [Table of Contents](index.php) |  ec_realloc |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)