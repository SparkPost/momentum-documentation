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

| ec_mt_strndup |
| [Prev](apis.ec_mt_strdup.php)  | Chapter 33. Memory Functions |  [Next](apis.ec_mt_vasprintf.php) |

<a name="apis.ec_mt_strndup"></a>
## Name

ec_mt_strndup — Duplicate a string of the specified message type copying at most the specified number of bytes

## Synopsis

`#include "ec_malloc.h"`

| `(char *) **ec_mt_strndup** (` | <var class="pdparam">object_type</var>, |   |
|   | <var class="pdparam">str</var>, |   |
|   | <var class="pdparam">len</var>`)`; |   |

`int <var class="pdparam">object_type</var>`;
`const char * <var class="pdparam">str</var>`;
`size_t <var class="pdparam">len</var>`;<a name="idp27576064"></a>
## Description

Duplicate a string of the specified message type copying at most the specified number of bytes. A terminating null byte is added. The build-in memtypes are enumerated at [the section called “Memory Types”](apis.ec_malloc.php#apis.ec_malloc.types "Memory Types"). To create your own memory type use [ec_memtype_register](apis.ec_memtype_register.php "ec_memtype_register").

### Note

This function is only valid with VSIZE memory type, not a fixed size type. For more information about memory types see [Memory Types](arch.primary.apis.php#arch.memory.types "1.3.6.1. Memory Types").

The `ec_strndup` function is a macro for duplicating a string of the MEMTYPE_MESSAGE_BODY type: It calls `ec_mt_strdup(MEMTYPE_MESSAGE_BODY, __str, len)`.

**Parameters**

<dl class="variablelist">

<dt>object_type</dt>

<dd>

This parameter is an integer indicating a specific memory type.

</dd>

<dt>str</dt>

<dd>

A pointer to the string you wish to duplicate.

</dd>

<dt>len</dt>

<dd>

The number of bytes to copy, typically the length of the string.

</dd>

</dl>

**Return Value**

This function returns a pointer to the duplicated string.

**Threading**

It is legal to call this function in the `any` thread.

<a name="idp27591104"></a>
## See Also

[ec_malloc](apis.ec_malloc.php "ec_malloc"), [ec_malloc_size](apis.ec_malloc_size.php "ec_malloc_size"), [ec_realloc](apis.ec_realloc.php "ec_realloc"), [ec_memtype_register](apis.ec_memtype_register.php "ec_memtype_register") and [ec_mt_strdup](apis.ec_mt_strdup.php "ec_mt_strdup").

| [Prev](apis.ec_mt_strdup.php)  | [Up](memory.php) |  [Next](apis.ec_mt_vasprintf.php) |
| ec_mt_strdup  | [Table of Contents](index.php) |  ec_mt_vasprintf |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)