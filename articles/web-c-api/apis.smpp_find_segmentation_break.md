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

| smpp_find_segmentation_break |
| [Prev](apis.smpp_decode_integer.php)  | Chapter 46. SMPP Functions |  [Next](apis.smpp_fail_ec_message.php) |

<a name="apis.smpp_find_segmentation_break"></a>
## Name

smpp_find_segmentation_break — Return a pointer to the break between two message segments within the complete text string

## Synopsis

`#include "modules/mobility/smpp/smpp_util.h"`

| `const char * **smpp_find_segmentation_break** (` | <var class="pdparam">dp</var>, |   |
|   | <var class="pdparam">seg_len</var>, |   |
|   | <var class="pdparam">data_coding</var>, |   |
|   | <var class="pdparam">is_gsm</var>`)`; |   |

`const char * <var class="pdparam">dp</var>`;
`int <var class="pdparam">seg_len</var>`;
`int <var class="pdparam">data_coding</var>`;
`int <var class="pdparam">is_gsm</var>`;<a name="idp33810144"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.2.

Return a pointer to the break between two message segments within the complete text string.

**Parameters**

<dl class="variablelist">

<dt>dp</dt>

<dd>

The buffer holding the whole input text string.

</dd>

<dt>seg_len</dt>

<dd>

The length of each segment.

</dd>

<dd>

The data coding of the input string: `1` indicates GSM data coding and `0` indicates non-GSM data coding.

</dd>

</dl>

**Return Values**

The location of the start of the next segment.

**Threading**

It is legal to call this function in any thread.

<a name="idp33822336"></a>
## See Also

[Chapter 46, *SMPP Functions*](smpp.php "Chapter 46. SMPP Functions") 

| [Prev](apis.smpp_decode_integer.php)  | [Up](smpp.php) |  [Next](apis.smpp_fail_ec_message.php) |
| smpp_decode_integer  | [Table of Contents](index.php) |  smpp_fail_ec_message |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)