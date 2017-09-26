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

| smpp_write_msg_text_blob |
| [Prev](apis.smpp_wrap_in_string_with_len.php)  | Chapter 46. SMPP Functions |  [Next](apis.smpp_write_seg_blob.php) |

<a name="apis.smpp_write_msg_text_blob"></a>
## Name

smpp_write_msg_text_blob — Write a text blob to an SMPP message

## Synopsis

`#include "modules/mobility/smpp/smpp_util.h"`

| `void **smpp_write_msg_text_blob** (` | <var class="pdparam">m</var>, |   |
|   | <var class="pdparam">msg_text</var>, |   |
|   | <var class="pdparam">msg_text_len</var>, |   |
|   | <var class="pdparam">key</var>`)`; |   |

`ec_message * <var class="pdparam">m</var>`;
`char * <var class="pdparam">msg_text</var>`;
`int <var class="pdparam">msg_text_len</var>`;
`const char * <var class="pdparam">key</var>`;<a name="idp34130576"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.2.

Write a text blob to an SMPP message. Valid keys are: `BLOB_KEY_SMS_TEXT` and `BLOB_KEY_MO_EMAIL_TEXT`.

**Parameters**

<dl class="variablelist">

<dt>m</dt>

<dd>

The ec_message. For a description of this data type see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message").

</dd>

<dt>msg_txt</dt>

<dd>

The input message string.

</dd>

<dt>msg_text_len</dt>

<dd>

The length of the input string.

</dd>

<dt>key</dt>

<dd>

The text blob context key of the text blob to set.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

<a name="idp34145232"></a>
## See Also

[Chapter 46, *SMPP Functions*](smpp.php "Chapter 46. SMPP Functions") 

| [Prev](apis.smpp_wrap_in_string_with_len.php)  | [Up](smpp.php) |  [Next](apis.smpp_write_seg_blob.php) |
| smpp_wrap_in_string_with_len  | [Table of Contents](index.php) |  smpp_write_seg_blob |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)