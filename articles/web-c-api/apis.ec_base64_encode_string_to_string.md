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

| ec_base64_encode_string_to_string |
| [Prev](apis.ec_base64_encode_space.php)  | Chapter 6. Base64 Encode/Decode and Related Functions |  [Next](apis.ec_base64_encode_to_string.php) |

<a name="apis.ec_base64_encode_string_to_string"></a>
## Name

ec_base64_encode_string_to_string — Apply base64 encoding to an ec_string and store the result to another ec_string where the previous content will be replaced

## Synopsis

`#include "util.h"`

| `int **ec_base64_encode_string_to_string** (` | <var class="pdparam">srcstring</var>, |   |
|   | <var class="pdparam">deststring</var>, |   |
|   | <var class="pdparam">fold</var>`)`; |   |

`string * <var class="pdparam">srcstring</var>`;
`string * <var class="pdparam">deststring</var>`;
`int <var class="pdparam">fold</var>`;<a name="idp20031776"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Apply base64 encoding to an ec_string and store the result to another ec_string where the previous content will be replaced.

**Parameters**

<dl class="variablelist">

<dt>srcstring</dt>

<dd>

the ec_string to encode

</dd>

<dt>deststring</dt>

<dd>

the destination for the encoded result

</dd>

<dt>fold</dt>

<dd>

if true, the encoded line will be folded so each line will not exceed 76 chars.

</dd>

</dl>

| [Prev](apis.ec_base64_encode_space.php)  | [Up](base64.php) |  [Next](apis.ec_base64_encode_to_string.php) |
| ec_base64_encode_space  | [Table of Contents](index.php) |  ec_base64_encode_to_string |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)