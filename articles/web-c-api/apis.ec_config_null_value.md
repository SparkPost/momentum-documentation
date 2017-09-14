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

| ec_config_null_value |
| [Prev](apis.ec_config_free_mx_routes.php)  | Chapter 36. Module Configuration Functions |  [Next](apis.ec_config_option_slot_from_capablity.php) |

<a name="apis.ec_config_null_value"></a>
## Name

ec_config_null_value — Initialize storage for a configuration option

## Synopsis

`#include "ec_config.h"`

| `ec_config_value * **ec_config_null_value** (` | <var class="pdparam">option_slot</var>`)`; |   |

`int <var class="pdparam">option_slot</var>`;<a name="idp30228528"></a>
## Description

Initialize storage for the value associated with a configuration option. If the option specified by `option_slot` exists, return a pointer to an ec_config_value associated with that slot.

**Parameters**

<dl class="variablelist">

<dt>option_slot</dt>

<dd>

The option identifier. This integer is returned when an option is registered.

</dd>

</dl>

**Return Values**

On success this function returns a pointer to an [ec_config_value](structs.ec_config_value.php "68.23. ec_config_value") struct. Otherwise it returns NULL.

**Threading**

It is legal to call this function in any thread.

<a name="idp30236256"></a>
## See Also

[ec_config_register_option](apis.ec_config_register_option.php "ec_config_register_option")

| [Prev](apis.ec_config_free_mx_routes.php)  | [Up](module.config.php) |  [Next](apis.ec_config_option_slot_from_capablity.php) |
| ec_config_free_mx_routes  | [Table of Contents](index.php) |  ec_config_option_slot_from_capability |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)