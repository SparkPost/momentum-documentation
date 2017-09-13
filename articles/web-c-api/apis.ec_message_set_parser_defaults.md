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

| ec_message_set_parser_defaults |
| [Prev](apis.ec_message_set_next_attempt.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_set_rcptto.php) |

<a name="apis.ec_message_set_parser_defaults"></a>
## Name

ec_message_set_parser_defaults — Set message parsing/validation defaults

## Synopsis

`#include "ec_message.h"`

| `void **ec_message_set_parser_defaults** (` | <var class="pdparam">mess</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;<a name="idp29657824"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Set message parsing/validation defaults.

Sets the default parsing parameters onto the supplied message. The defaults are those configured by the administrator in the `ecelerity.conf`. You should call this function (or ec_message_parser_defaults2) before starting to ec_message_parse a message.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to apply defaults to.

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 3.0.18.

| [Prev](apis.ec_message_set_next_attempt.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_set_rcptto.php) |
| ec_message_set_next_attempt  | [Table of Contents](index.php) |  ec_message_set_rcptto |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)