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

| ec_growbuf_io_open |
| [Prev](apis.ec_growbuf_io_next_chunk.php)  | Chapter 9. Buffer Functions |  [Next](apis.minimal_tryread_construct_free.php) |

<a name="apis.ec_growbuf_io_open"></a>
## Name

ec_growbuf_io_open — Allocate and initialize an io_object for a new growbuf-backed string

## Synopsis

`#include "ec_growbuf.h"`

| `io_object * **ec_growbuf_io_open** (` | <var class="pdparam">size</var>`)`; |   |

`size_t <var class="pdparam">size</var>`;<a name="idp20577376"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Allocate and initialize an io_object for a new growbuf-backed string.

**Parameters**

<dl class="variablelist">

<dt>size</dt>

<dd>

the size of the initial buffer to allocate (including the terminating NUL) or 0 to use the growbuf_size configuration value

</dd>

</dl>

**Return Values**

Returns the new io_object on success or NULL on failute

| [Prev](apis.ec_growbuf_io_next_chunk.php)  | [Up](buffer.php) |  [Next](apis.minimal_tryread_construct_free.php) |
| ec_growbuf_io_next_chunk  | [Table of Contents](index.php) |  minimal_tryread_construct_free |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)