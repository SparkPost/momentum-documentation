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

| ec_message_set_next_attempt |
| [Prev](apis.ec_message_set_mailfrom.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_set_parser_defaults.php) |

<a name="apis.ec_message_set_next_attempt"></a>
## Name

ec_message_set_next_attempt — Determines and sets the next attempt time for the message

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_set_next_attempt** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">now</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`struct timeval * <var class="pdparam">now</var>`;<a name="idp29638528"></a>
## Description

Determines and sets the next attempt time for the message.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message").

</dd>

<dt>now</dt>

<dd>

A pointer to a timeval struct.

</dd>

</dl>

**Return Values**

This function returns 1 on success. It will return 0 if the message has expired (see [message_expiration](https://support.messagesystems.com/docs/web-ref/conf.ref.message_expiration.php)) or exceeded the max number of retries (see [max_retries](https://support.messagesystems.com/docs/web-ref/conf.ref.max_retries.php)). It will also return 0 if the [never_retry](https://support.messagesystems.com/docs/web-ref/conf.ref.never_retry.php) option was set to true.

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.ec_message_set_mailfrom.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_set_parser_defaults.php) |
| ec_message_set_mailfrom  | [Table of Contents](index.php) |  ec_message_set_parser_defaults |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)