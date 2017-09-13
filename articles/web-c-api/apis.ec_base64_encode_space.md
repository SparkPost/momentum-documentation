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

| ec_base64_encode_space |
| [Prev](apis.ec_base64_encode.php)  | Chapter 6. Base64 Encode/Decode and Related Functions |  [Next](apis.ec_base64_encode_string_to_string.php) |

<a name="apis.ec_base64_encode_space"></a>
## Name

ec_base64_encode_space — Returns the number of bytes required to Base64 encode a string

## Synopsis

`#include "util.h"`

| `int **ec_base64_encode_space** (` | <var class="pdparam">len</var>`)`; |   |

`int <var class="pdparam">len</var>`;<a name="idp20012816"></a>
## Description

Returns the number of bytes required to Base64 encode a string.

**Parameters**

<dl class="variablelist">

<dt>len</dt>

<dd>

The length of the string to Base64 encode, in bytes.

</dd>

</dl>

**Return Values**

This function returns the number of bytes required to Base64 encode a string.

**Threading**

It is legal to call this function in any thread.

<a name="idp20018896"></a>
## See Also

[ec_base64_encode](apis.ec_base64_encode.php "ec_base64_encode"), [ec_base64_decode](apis.ec_base64_decode.php "ec_base64_decode"), and [ec_base64_decode_space](apis.ec_base64_decode_space.php "ec_base64_decode_space").

| [Prev](apis.ec_base64_encode.php)  | [Up](base64.php) |  [Next](apis.ec_base64_encode_string_to_string.php) |
| ec_base64_encode  | [Table of Contents](index.php) |  ec_base64_encode_string_to_string |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)