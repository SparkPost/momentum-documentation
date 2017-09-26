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

| io_wrapper_open_memory |
| [Prev](apis.io_wrapper_open2.php)  | Chapter 30. io_wrapper Functions |  [Next](apis.io_wrapper_open_tmpspool.php) |

<a name="apis.io_wrapper_open_memory"></a>
## Name

io_wrapper_open_memory — Open a read-only handle on some memory

## Synopsis

`#include "io_wrapper.h"`

| `io_object * **io_wrapper_open_memory** (` | <var class="pdparam">blob</var>, |   |
|   | <var class="pdparam">len</var>, |   |
|   | <var class="pdparam">memtype</var>`)`; |   |

`const char * <var class="pdparam">blob</var>`;
`size_t <var class="pdparam">len</var>`;
`int <var class="pdparam">memtype</var>`;<a name="idp26423408"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Open a read-only handle on some memory.

**Parameters**

<dl class="variablelist">

<dt>blob</dt>

<dd>

start of the memory area

</dd>

<dt>len</dt>

<dd>

size of the area in bytes

</dd>

<dt>memtype</dt>

<dd>

type of memory

</dd>

</dl>

If memtype is MEMTYPE_DONTCARE, then the memory will NOT be freed when the object is destroyed. If memtype is MEMTYPE_IS_MALLOC_3C, then the memory will be freed using free(3C). If memtype is MEMTYPE_IS_MMAP, then the memory will be released using the munmap() system call. The len parameter must match the length used to mmap() the memory. Otherwise, memtype is one of the MEMTYPE constants defined in memory.h

| [Prev](apis.io_wrapper_open2.php)  | [Up](io_wrapper.php) |  [Next](apis.io_wrapper_open_tmpspool.php) |
| io_wrapper_open2  | [Table of Contents](index.php) |  io_wrapper_open_tmpspool |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)