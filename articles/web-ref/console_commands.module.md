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
| [Prev](console_commands.message_retry.php)  | 12.2. System Console Commands |  [Next](console_commands.pager.php) |

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
Module: statp:statp
  Scope_Name: statp
  Instance_Name: statp
  Enabled: enabled
  API: Generic
  Name: stats_producer.c
  Description: Stats producer module
Module: ds_core
  Scope_Name: ds_core
  Enabled: enabled
  API: Singleton
  Name: ds_core.c
  Description: generic datasource module
...
```

In addition to supplying information about your configuration, the scope name and the instance name shown by the **module list**      command are required when issuing module-specific commands. For more information see [the section called “Module-specific Commands”](console_commands.module.php#console_commands.module.version_3.module.specific "Module-specific Commands").

**module hooks**       displays all the dynamic hooks in the system, along with each hook's prototype. The output should be similar to the following:

```
core_config_get_domain_bounces_inline_original_data
	int(generic_module_infrastructure*,int*,constchar*,void**)
core_config_get_reserve_maintenance_interval_data
	int(generic_module_infrastructure*,int*,void**)
...
```
<a name="console_commands.module.version_3.module.specific"></a>
### Module-specific Commands

Before issuing commands to a module from the system console, you need to know whether a module is a "Singleton" or not. You can determine this using the **module list**      command. For non-singleton modules you issue module commands using the Scope_Name (also know as the module name) and the Instance_Name. For example, if you have a bounce_logger module defined in the following way, `bounce_logger "bounce_logger1" { ... }`, issue the command **bounce_logger:*`bounce_logger1`* reopen logs**             to reopen the logs. For a list of the modules that have console commands see [Section 13.3, “Module-Specific Console Commands”](module_specific_console_commands.php "13.3. Module-Specific Console Commands").

For modules where the API is defined as a Singleton (the ds_core module, for example) there is no Instance_Name. Issue singleton module commands using the Scope_Name only.

<a name="idp16182272"></a>
### Setting and Getting Module Options

All module-specific commands related to setting or getting module options have been removed in version 3.0\. For example, you can no longer set the Sieve cache size in the following way: **sieve set cache_size 300** . Again, in order to get or set module options, you need to use the **module list**      command first to determine whether a module is a singleton or not. Use the following syntax to set or get module-specific options: **config {set | get} Scope_Name [Instance_Name] option [value]** . Note that there is no ‘`:`’ between the Scope_Name and the Instance_Name. You cannot specify the Instance_Name if the module is a singleton. For a complete discussion of the **config** command see [config](console_commands.config.php "config").

In version 3.0, modules no longer have id numbers, so you can not enable or disable them using the command **module disable *`module_number`*** . Instead use the "config set" syntax, for example, **config set bounce_classifier *`bounce_classifier1`* enabled 1** .

| [Prev](console_commands.message_retry.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.pager.php) |
| message retry  | [Table of Contents](index.php) |  \pager |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)