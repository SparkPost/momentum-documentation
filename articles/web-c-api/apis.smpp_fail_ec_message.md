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

| smpp_fail_ec_message |
| [Prev](apis.smpp_find_segmentation_break.php)  | Chapter 46. SMPP Functions |  [Next](apis.smpp_free.php) |

<a name="apis.smpp_fail_ec_message"></a>
## Name

smpp_fail_ec_message — Fail an SMPP message

## Synopsis

`#include "modules/mobility/smpp/smpp_esme.h"`

| `void **smpp_fail_ec_message** (` | <var class="pdparam">conn</var>, |   |
|   | <var class="pdparam">m</var>, |   |
|   | <var class="pdparam">error</var>`)`; |   |

`smpp_conn * <var class="pdparam">conn</var>`;
`ec_message * <var class="pdparam">m</var>`;
`const char * <var class="pdparam">error</var>`;<a name="idp33833984"></a>
## Description

Fail an SMPP message with the specified error.

**Parameters**

<dl class="variablelist">

<dt>conn</dt>

<dd>

The [smpp_conn](structs.smpp_conn.php "68.78. smpp_conn").

</dd>

<dt>m</dt>

<dd>

The message to fail.

</dd>

<dt>error</dt>

<dd>

The error code will be set to `550`. This parameter determines the error string that will be associated with the message. See [ec_message_set_code](apis.ec_message_set_code.php "ec_message_set_code").

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

<a name="idp33845456"></a>
## See Also

[Chapter 46, *SMPP Functions*          ](smpp.php "Chapter 46. SMPP Functions") and [smpp_async_fail_ec_message](apis.smpp_async_fail_ec_message.php "smpp_async_fail_ec_message")

| [Prev](apis.smpp_find_segmentation_break.php)  | [Up](smpp.php) |  [Next](apis.smpp_free.php) |
| smpp_find_segmentation_break  | [Table of Contents](index.php) |  smpp_free |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)