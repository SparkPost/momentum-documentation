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

| smpp_async_fail_ec_message |
| [Prev](apis.smpp_append_encoded_integer.php)  | Chapter 46. SMPP Functions |  [Next](apis.smpp_config_fetch_using_connection.php) |

<a name="apis.smpp_async_fail_ec_message"></a>
## Name

smpp_async_fail_ec_message — Fail an asynchronous SMPP message

## Synopsis

`#include "modules/mobility/smpp/smpp_esme.h"`

| `void **smpp_async_fail_ec_message** (` | <var class="pdparam">m</var>, |   |
|   | <var class="pdparam">force_async</var>`)`; |   |

`ec_message * <var class="pdparam">m</var>`;
`int <var class="pdparam">force_async</var>`;<a name="idp33701856"></a>
## Description

This function is like [smpp_fail_ec_message](apis.smpp_fail_ec_message.php "smpp_fail_ec_message"), but you need to use [ec_message_set_code](apis.ec_message_set_code.php "ec_message_set_code") to set the error and you must also set the delivered field to `EM_FAILED` or `EM_FAILED_QUIET` before calling it.

**Parameters**

<dl class="variablelist">

<dt>m</dt>

<dd>

The message to fail.

</dd>

<dt>force_async</dt>

<dd>

This parameter must be set to `0` in contexts where failing the message is time-sensitive. For example, where we never want to attempt to send the message again because it was already rejected by the peer. In other cases and in bulk failure scenarios, it can be set to `1`.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

When an async job is created, it is possible to create a race condition if the caller thread and the async thread both accessing the same resource.

<a name="idp33713568"></a>
## See Also

[Chapter 46, *SMPP Functions*](smpp.php "Chapter 46. SMPP Functions") 

| [Prev](apis.smpp_append_encoded_integer.php)  | [Up](smpp.php) |  [Next](apis.smpp_config_fetch_using_connection.php) |
| smpp_append_encoded_integer  | [Table of Contents](index.php) |  smpp_config_fetch_using_connection |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)