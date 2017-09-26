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

| config_rsrc_setup |
| [Prev](hooks.msg_gen_data_spool.php)  | Chapter 69. Hook Points and C Functions Reference |  [Next](apis.ec_config_rsrc_get.php) |

<a name="hooks.config_rsrc_setup"></a>
## Name

config_rsrc_setup — Register a resource

## Synopsis

`#include "hooks/core/config_resource_setup.h"`

| `int **config_rsrc_setup** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">transaction</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_config_header *<var class="pdparam">transaction</var>`;<a name="idp7213264"></a>
## Description

This hook point is suitable for registering resources using the `[ec_config_rsrc_get](apis.ec_config_rsrc_get.php "ec_config_rsrc_get")` function with the `EC_CFG_RSRC_REGISTERING` flag. This hook **must** be used by non-singleton modules to register their resources and can optionally be used by singleton modules.

This hook allows resources to be set up within the current configuration transaction. If this hook is not used, then resources may "disappear" when a configuration option is changed with **config set**     or **config unset** . For documentation of these console commands, see [config](console_commands.config.php "config").

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

Pointer to the closure

</dd>

<dt>transaction</dt>

<dd>

For a description of this data type, see [ec_config_header](https://support.messagesystems.com/docs/web-c-api/structs.ec_config_header.php).

</dd>

</dl>

**Return Values**

This hook returns void.

**Threading**

This hook will be called in any thread.

**See Also**

[ec_httpsrv_register_auth](apis.ec_httpsrv_register_auth.php "ec_httpsrv_register_auth"), [ec_httpsrv_register](https://support.messagesystems.com/docs/web-c-api/apis.ec_httpsrv_register.php), [ec_control_register_command3](https://support.messagesystems.com/docs/web-c-api/apis.ec_control_register_command3.php)

| [Prev](hooks.msg_gen_data_spool.php)  | [Up](hooks.php) |  [Next](apis.ec_config_rsrc_get.php) |
| msg_gen_data_spool  | [Table of Contents](index.php) |  ec_config_rsrc_get |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)