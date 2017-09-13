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

| smpp_decode_integer |
| [Prev](apis.smpp_date_to_long.php)  | Chapter 46. SMPP Functions |  [Next](apis.smpp_find_segmentation_break.php) |

<a name="apis.smpp_decode_integer"></a>
## Name

smpp_decode_integer — Decode an octet string into integer

## Synopsis

`#include "modules/mobility/smpp/smpp_util.h"`

| `long **smpp_decode_integer** (` | <var class="pdparam">os</var>, |   |
|   | <var class="pdparam">pos</var>, |   |
|   | <var class="pdparam">octets</var>`)`; |   |

`string * <var class="pdparam">os</var>`;
`long <var class="pdparam">pos</var>`;
`int <var class="pdparam">octets</var>`;<a name="idp33784816"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.2.

Decode an octet string into integer. `pos` is the offset of the beginning of the octet string in string `os`. `octets` is the length of the data.

**Parameters**

<dl class="variablelist">

<dt>os</dt>

<dd>

The input string holding the octet string.

</dd>

<dt>pos</dt>

<dd>

The offset of the octet string to be decoded.

</dd>

<dt>octets</dt>

<dd>

The length of the octet string to be decoded.

</dd>

</dl>

**Return Values**

The integer (long) decoded value.

**Threading**

It is legal to call this function in any thread.

<a name="idp33797584"></a>
## See Also

[Chapter 46, *SMPP Functions*](smpp.php "Chapter 46. SMPP Functions") 

| [Prev](apis.smpp_date_to_long.php)  | [Up](smpp.php) |  [Next](apis.smpp_find_segmentation_break.php) |
| smpp_date_to_long  | [Table of Contents](index.php) |  smpp_find_segmentation_break |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)