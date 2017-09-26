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

| ec_config_register_option |
| [Prev](apis.ec_config_option_slot_from_capablity.php)  | Chapter 36. Module Configuration Functions |  [Next](apis.ec_config_release_scope_instance.php) |

<a name="apis.ec_config_register_option"></a>
## Name

ec_config_register_option — Register a module option

## Synopsis

`#include "ec_config.h"`

| `int **ec_config_register_option** (` | <var class="pdparam">option</var>`)`; |   |

`ec_config_option_def * <var class="pdparam">option</var>`;<a name="idp30264448"></a>
## Description

Register a module option. After registering an option, use [ec_config_null_value](apis.ec_config_null_value.php "ec_config_null_value") to initialize the value of the option.

**Parameters**

<dl class="variablelist">

<dt>option</dt>

<dd>

A pointer to an [ec_config_option_def](structs.ec_config_option_def.php "68.22. ec_config_option_def") struct.

</dd>

</dl>

**Return Values**

On success this function returns the slot member of an ec_config_option_internal struct. On failure `-1` is returned.

**Threading**

It is legal to call this function in the thread.

<a name="idp30273104"></a>
## See Also

[Primary Momentum APIs](arch.primary.apis.php "1.3. Primary Momentum APIs")

| [Prev](apis.ec_config_option_slot_from_capablity.php)  | [Up](module.config.php) |  [Next](apis.ec_config_release_scope_instance.php) |
| ec_config_option_slot_from_capability  | [Table of Contents](index.php) |  ec_config_release_scope_instance |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)