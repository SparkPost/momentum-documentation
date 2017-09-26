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

| module |
| [Prev](console_commands.message_retry.php)  | Chapter 73. Non-Module-Specific Console Commands |  [Next](console_commands.pager.php) |

<a name="console_commands.module"></a>
## Name

module — manage loaded modules online

## Synopsis

`module hooks`

`module list`

<a name="console_commands.module.version_3"></a>
## Description

The **module list**      command displays a full list of all loaded modules, as illustrated below:

```
16:48:23 /tmp/2025> module list
Module: ec_logger:ec_logger
  Scope_Name: ec_logger
  Instance_Name: ec_logger
  Enabled: enabled
  API: Logger
  Name: ec_logger.c
  Description: Momentum minimalistic logging module
Module: bounce_logger:bounce_logger
  Scope_Name: bounce_logger
  Instance_Name: bounce_logger
  Enabled: enabled
  API: Logger
  Name: $RCSfile: bounce_logger.c,v $
  Description: Eclerity minimalistic logging module $Revision: 1.51 $
Module: ds_core
  Scope_Name: ds_core
  Enabled: enabled
  API: Singleton
  Name: ds_core.c
  Description: generic datasource module
...
```

In addition to supplying information about your configuration, the scope name and the instance name shown by the **module list**      command are required when issuing module-specific commands. For more information, see [Section 37.3, “Using Module-Specific Console Commands”](module_specific_console_commands.using.php "37.3. Using Module-Specific Console Commands").

The **module hooks**       command displays all the dynamic hooks in the system, along with each hook's prototype. The output should be similar to the following:

```
core_config_get_domain_bounces_inline_original_data
	int(generic_module_infrastructure*,int*,constchar*,void**)
core_config_get_reserve_maintenance_interval_data
	int(generic_module_infrastructure*,int*,void**)
...
```

| [Prev](console_commands.message_retry.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.pager.php) |
| message retry  | [Table of Contents](index.php) |  \pager |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)