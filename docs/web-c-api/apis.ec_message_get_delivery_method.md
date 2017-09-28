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

| ec_message_get_delivery_method |
| [Prev](apis.ec_message_get_code.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_get_envelope.php) |

<a name="apis.ec_message_get_delivery_method"></a>
## Name

ec_message_get_delivery_method — Retrieve the delivery method of a message

## Synopsis

`#include "ec_message.h"`

| `const char * **ec_message_get_delivery_method** (` | <var class="pdparam">mess</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;<a name="idp28254768"></a>
## Description

**Configuration Change. ** This function is available as of Momentum version 3.5.5.

Retrieve the delivery method of a message.

**Parameters**

<dl class="variablelist">

<dt>msg</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message").

</dd>

</dl>

**Return Values**

A character pointer to the delivery method, for example "gcm". For more information about delivery methods see [delivery_method](https://support.messagesystems.com/docs/web-ref/conf.ref.delivery_method.php).

**Threading**

It is legal to call this function in any thread.

<a name="idp28263904"></a>
## See Also

[msg_dispose](hooks.generic_delivery.msg_dispose.php "msg_dispose") and [Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/)

| [Prev](apis.ec_message_get_code.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_get_envelope.php) |
| ec_message_get_code  | [Table of Contents](index.php) |  ec_message_get_envelope |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)