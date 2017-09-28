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

| ec_message_mcmt_fixup |
| [Prev](apis.ec_message_lock.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_new.php) |

<a name="apis.ec_message_mcmt_fixup"></a>
## Name

ec_message_mcmt_fixup — This function is to be called by a listener when an injected message is a MCMT container (i.e

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_mcmt_fixup** (` | <var class="pdparam">msg</var>`)`; |   |

`ec_message * <var class="pdparam">msg</var>`;<a name="idp28583024"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

This function is to be called by a listener when an injected message is a MCMT container (i.e.

ec_message_is_mcmt(msg) returns 1). This function implements the following: * call core_ec_message_mcmt_fixup_hook (hooks/core/ec_message_mcmt_fixup.h) * if a hook implementation returns EC_MSG_MCMT-INVALID or EC_MSG_MCMT_ERROR the implementation should have set the appropriate rejection error using ec_message_set_code() ec_message_mcmt_fixup return with the same return cdoe. * now, either there is no implementation of core_ec_message_mcmt_fixup_hook or all of them returns EC_MSG_MCMT_OK. This function will replace the MIME tree with that represented by the message/rfc822 payload. If such payload is not found, it will set the error code and returns EC_MSG_MCMT_INVALID. The message will be permenantly rejected.

| [Prev](apis.ec_message_lock.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_new.php) |
| ec_message_lock  | [Table of Contents](index.php) |  ec_message_new |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)