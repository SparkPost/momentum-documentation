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

| __default_connection_goal |
| [Prev](connection.php)  | Chapter 13. Connection-related Functions |  [Next](apis.connection_address.php) |

<a name="apis.__default_connection_goal"></a>
## Name

__default_connection_goal — __default_connection_goal is the internally used connection goal determination function

## Synopsis

`#include "mail_queue.h"`

| `void **__default_connection_goal** (` | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding_slot</var>, |   |
|   | <var class="pdparam">sl</var>, |   |
|   | <var class="pdparam">goal</var>`)`; |   |

`domain_record * <var class="pdparam">dr</var>`;
`ec_binding_slot <var class="pdparam">binding_slot</var>`;
`Skiplist * <var class="pdparam">sl</var>`;
`int * <var class="pdparam">goal</var>`;<a name="idp21465456"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

__default_connection_goal is the internally used connection goal determination function.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

| [Prev](connection.php)  | [Up](connection.php) |  [Next](apis.connection_address.php) |
| Chapter 13. Connection-related Functions  | [Table of Contents](index.php) |  connection_address |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)