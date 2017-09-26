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

| ec_growbuf_io_next_chunk |
| [Prev](apis.ec_growbuf_io_cur_chunk.php)  | Chapter 9. Buffer Functions |  [Next](apis.ec_growbuf_io_open.php) |

<a name="apis.ec_growbuf_io_next_chunk"></a>
## Name

ec_growbuf_io_next_chunk — Return a pointer to the next growbuf chunk and its length

## Synopsis

`#include "ec_growbuf.h"`

| `int **ec_growbuf_io_next_chunk** (` | <var class="pdparam">io</var>, |   |
|   | <var class="pdparam">outbuf</var>`)`; |   |

`io_object * <var class="pdparam">io</var>`;
`char ** <var class="pdparam">outbuf</var>`;<a name="idp20560528"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Return a pointer to the next growbuf chunk and its length.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io_object corresponding to the growbuf string

</dd>

<dt>outbuf</dt>

<dd>

filled in with a pointer to the next chunk or NULL if we are at the end

</dd>

</dl>

**Return Values**

Returns the length of the next chunk or 0 if there is no next chunk

| [Prev](apis.ec_growbuf_io_cur_chunk.php)  | [Up](buffer.php) |  [Next](apis.ec_growbuf_io_open.php) |
| ec_growbuf_io_cur_chunk  | [Table of Contents](index.php) |  ec_growbuf_io_open |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)