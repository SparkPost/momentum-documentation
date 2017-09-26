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

| ec_hex_encode |
| [Prev](apis.ec_hex_decode.php)  | Chapter 55. Utility Functions |  [Next](apis.ec_parse_url.php) |

<a name="apis.ec_hex_encode"></a>
## Name

ec_hex_encode — encodes bytes into ASCII hex characters

## Synopsis

`#include "util.h"`

| `int **ec_hex_encode** (` | <var class="pdparam">src</var>, |   |
|   | <var class="pdparam">src_len</var>, |   |
|   | <var class="pdparam">dest</var>, |   |
|   | <var class="pdparam">dest_len</var>`)`; |   |

`const char * <var class="pdparam">src</var>`;
`size_t <var class="pdparam">src_len</var>`;
`char * <var class="pdparam">dest</var>`;
`size_t <var class="pdparam">dest_len</var>`;<a name="idp36491536"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

encodes bytes into ASCII hex characters

Reads src_len bytes starting at src and writes src_len * 2 bytes of ASCII hex characters starting at dest. The high-order nibble is written first.

**Return Values**

0 if dest_len is too small to hold the entire encoding, or the number of ASCII hex characters written.

| [Prev](apis.ec_hex_decode.php)  | [Up](utility.php) |  [Next](apis.ec_parse_url.php) |
| ec_hex_decode  | [Table of Contents](index.php) |  ec_parse_url |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)