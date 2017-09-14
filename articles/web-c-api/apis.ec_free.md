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

| ec_free |
| [Prev](memory.php)  | Chapter 33. Memory Functions |  [Next](apis.ec_malloc.php) |

<a name="apis.ec_free"></a>
## Name

ec_free — Free memory allocated

## Synopsis

`#include "ec_malloc.h"`

| `void **ec_free** (` | <var class="pdparam">object_type</var>, |   |
|   | <var class="pdparam">ptr</var>`)`; |   |

`int <var class="pdparam">object_type</var>`;
`void * <var class="pdparam">ptr</var>`;<a name="idp27165264"></a>
## Description

Returns memory allocated by `ec_malloc`, `ec_malloc_size` or `ec_realloc` to the allocator layer, ready for reuse.

Other functions which allocate memory and must use `ec_free` are and `ec_mt_strdup` `ec_mt_strndup`. *Note*: `ec_strdup` and `ec_strndup` are macros that invoke the preceding functions so memory allocated by these functions must also use `ec_free`.

**Parameters**

<dl class="variablelist">

<dt>object_type</dt>

<dd>

One of the memory types enumerated at [the section called “Memory Types”](apis.ec_malloc.php#apis.ec_malloc.types "Memory Types").

</dd>

<dt>ptr</dt>

<dd>

A pointer to the memory location.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

<a name="idp27178736"></a>
## See Also

[ec_malloc](apis.ec_malloc.php "ec_malloc"), [ec_malloc_size](apis.ec_malloc_size.php "ec_malloc_size"), [ec_realloc](apis.ec_realloc.php "ec_realloc"), [ec_mt_strndup](apis.ec_mt_strndup.php "ec_mt_strndup") and [ec_mt_strdup](apis.ec_mt_strdup.php "ec_mt_strdup").

| [Prev](memory.php)  | [Up](memory.php) |  [Next](apis.ec_malloc.php) |
| Chapter 33. Memory Functions  | [Table of Contents](index.php) |  ec_malloc |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)