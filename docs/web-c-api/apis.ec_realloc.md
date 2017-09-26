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

| ec_realloc |
| [Prev](apis.ec_mt_vasprintf.php)  | Chapter 33. Memory Functions |  [Next](ec_message.php) |

<a name="apis.ec_realloc"></a>
## Name

ec_realloc — Re-allocate a block of memory, changing its size

## Synopsis

`#include "ec_malloc.h"`

| `void * **ec_realloc** (` | <var class="pdparam">object_type</var>, |   |
|   | <var class="pdparam">old</var>, |   |
|   | <var class="pdparam">size</var>`)`; |   |

`int <var class="pdparam">object_type</var>`;
`void * <var class="pdparam">old</var>`;
`size_t <var class="pdparam">size</var>`;<a name="idp27630576"></a>
## Description

Re-allocate a block of memory, changing its size. This function returns NULL if the size could not be altered; the original pointer is left untouched in this case.

### Note

This function is only valid with VSIZE memory type, not a fixed size type. For more information about memory types see [Memory Types](arch.primary.apis.php#arch.memory.types "1.3.6.1. Memory Types").

The "old" pointer **must** have been allocated against the same object_type as is being requested here, otherwise undefined behavior will result.

The commentary about mmap in the [ec_malloc_size](apis.ec_malloc_size.php "ec_malloc_size") documentation also applies to ec_realloc.

It is illegal to attempt to realloc a fixed size allocation using this function. Undefined, and most certainly unwanted behavior, will result if this is attempted.

Memory returned from this function must be freed via [ec_free](apis.ec_free.php "ec_free").

**Parameters**

<dl class="variablelist">

<dt>object_type</dt>

<dd>

This parameter is an integer indicating a memory type as defined in [the section called “Memory Types”](apis.ec_malloc.php#apis.ec_malloc.types "Memory Types").

</dd>

<dt>old</dt>

<dd>

A pointer to the original memory location.

</dd>

<dt>size</dt>

<dd>

A `size_t` type unsigned integer.

</dd>

</dl>

**Return Values**

This function returns the address of the newly sized memory block; it may be the same as the original pointer.

**Threading**

It is legal to call this function in any thread.

<a name="idp27647312"></a>
## See Also

[ec_malloc](apis.ec_malloc.php "ec_malloc"), [ec_malloc_size](apis.ec_malloc_size.php "ec_malloc_size"), [ec_free](apis.ec_free.php "ec_free") and [ec_mt_strndup](apis.ec_mt_strndup.php "ec_mt_strndup") and [ec_mt_strdup](apis.ec_mt_strdup.php "ec_mt_strdup").

| [Prev](apis.ec_mt_vasprintf.php)  | [Up](memory.php) |  [Next](ec_message.php) |
| ec_mt_vasprintf  | [Table of Contents](index.php) |  Chapter 34. Message Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)