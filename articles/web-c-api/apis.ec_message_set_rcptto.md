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

| ec_message_set_rcptto |
| [Prev](apis.ec_message_set_parser_defaults.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_should_reduce_resources.php) |

<a name="apis.ec_message_set_rcptto"></a>
## Name

ec_message_set_rcptto — sets the entire protocol decorated rcptto string

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_set_rcptto** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">str</var>, |   |
|   | <var class="pdparam">len</var>, |   |
|   | <var class="pdparam">take_buffer</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`const char * <var class="pdparam">str</var>`;
`int <var class="pdparam">len</var>`;
`int <var class="pdparam">take_buffer</var>`;<a name="idp29676896"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

sets the entire protocol decorated rcptto string.

If take_buffer is non-zero, then str MUST be a buffer allocated using MEMTYPE_MESSAGE_BODY; ownership of that buffer will be taken by the message and the caller must not access it any more. If take_buffer is non-zero, the supplied buffer MUST also be NUL terminated.

| [Prev](apis.ec_message_set_parser_defaults.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_should_reduce_resources.php) |
| ec_message_set_parser_defaults  | [Table of Contents](index.php) |  ec_message_should_reduce_resources |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)