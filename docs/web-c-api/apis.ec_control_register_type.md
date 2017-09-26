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

| ec_control_register_type |
| [Prev](apis.ec_control_register_command_allsched.php)  | Chapter 14. Control Functions |  [Next](apis.ec_control_send_command.php) |

<a name="apis.ec_control_register_type"></a>
## Name

ec_control_register_type — Register a command handler (deprecated)

## Synopsis

`#include "control.h"`

| `void **ec_control_register_type** (` | <var class="pdparam">type</var>`)`; |   |

`ec_control_type * <var class="pdparam">type</var>`;<a name="idp21817856"></a>
## Description

Register a command handler (deprecated).

**Deprecated**

Momentum 3.0 offers better APIs. See [ec_control_register_command3](apis.ec_control_register_command3.php "ec_control_register_command3") and [ec_control_register_command2](apis.ec_control_register_command2.php "ec_control_register_command2").

| [Prev](apis.ec_control_register_command_allsched.php)  | [Up](control.php) |  [Next](apis.ec_control_send_command.php) |
| ec_control_register_command_allsched  | [Table of Contents](index.php) |  ec_control_send_command |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)