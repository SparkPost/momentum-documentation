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

| ec_qp_encode |
| [Prev](apis.ec_convert_string.php)  | Chapter 6. Base64 Encode/Decode and Related Functions |  [Next](apis.ec_qp_encode_to_string.php) |

<a name="apis.ec_qp_encode"></a>
## Name

ec_qp_encode — Quoted-printable encode a string

## Synopsis

`#include "util.h"`

| `int **ec_qp_encode** (` | <var class="pdparam">src</var>, |   |
|   | <var class="pdparam">src_len</var>, |   |
|   | <var class="pdparam">dest</var>, |   |
|   | <var class="pdparam">dest_len</var>`)`; |   |

`const char * <var class="pdparam">src</var>`;
`size_t <var class="pdparam">src_len</var>`;
`char * <var class="pdparam">dest</var>`;
`size_t <var class="pdparam">dest_len</var>`;<a name="idp20202016"></a>
## Description

Quoted-printable encode a string.

**Parameters**

<dl class="variablelist">

<dt>src</dt>

<dd>

The source string.

</dd>

<dt>src_len</dt>

<dd>

The length of the source string.

</dd>

<dt>dest</dt>

<dd>

The destination buffer that will hold the encoded result.

</dd>

<dt>dest_len</dt>

<dd>

The size of the destination buffer.

</dd>

</dl>

**Return Values**

0 on failure, or the length of the encoded result on success

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.ec_convert_string.php)  | [Up](base64.php) |  [Next](apis.ec_qp_encode_to_string.php) |
| ec_convert_string  | [Table of Contents](index.php) |  ec_qp_encode_to_string |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)