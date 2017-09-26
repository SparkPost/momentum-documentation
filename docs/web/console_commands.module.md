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

`module` { *`ID`* } { *`command`* }

`module` { *`module_name`* } { *`command`* }

`module enable` { *`ID`* }

`module disable` { *`ID`* }

<a name="idp9914704"></a>
## Description

Because multiple instances of a module may be running within a single Momentum instance, modules can be addressed from the system console by their number or their unique name. Before addressing commands to any module from the system console, start by running **module list**      which will displays a full list of all loaded modules, as illustrated below:

```
10:47:35 /tmp/2025> module list
Module ID: 1
  Name: ec_logger.c
  Unique Name: ec_logger
  Enabled: enabled
  API: Logger
  Description: Momentum minimalistic logging module
  File/Symbol: logging/ec_logger:ec_logger
Module ID: 2
  Name: $RCSfile: bounce_logger.c,v $
  Unique Name: bounce_logger
  Enabled: enabled
  API: Logger
  Description: Eclerity minimalistic logging module $Revision: 1.51 $
  File/Symbol: logging/bounce_logger:bounce_logger
...
```

The preceding output shows the modules that have been loaded. For example, ec_logger has been loaded into the system and is currently the module with an ID of "1". This value changes depending upon the placement of the module in the configuration file and for this reason modules can also be identified by their "Unique Name". In the case of Module 1 the `Unique Name` is `ec_logger`.

Console commands can be issued to a module using the **module *`<id>`* *`<command>`***                        syntax or the ***`unique_name`* *`<command>`***               syntax.

For example, the following command turns on the logging of transient failures for the ec_logger module: **`module 1 set log_transient_failures on`**                                 .

In the above example, module 1's unique name is "ec_logger." This allows consistent command issuance to modules despite changes in their ordering. Issue a command using the module name in the following way: **`ec_logger set log_transient_failures on`**                               .

The commands that can be used with the **module *`id`***        command (or the unique module name) are specific to individual modules, **sieve flush cache** , for example. For a list of all the module-specific commands see [Section 13.1, “Module-Specific Console Commands”](module_specific_console_commands.php "13.1. Module-Specific Console Commands").

Loaded modules can be disabled or enabled via the following commands:

10:47:35 /tmp/2025> module disable *`1`*
Success

10:47:35 /tmp/2025> module enable *`1`*
Success
### Note

You must use the module number with the **module enable**        and **module disable**         commands. You cannot use the module name.

**module hooks**       displays all the dynamic hooks in the system, along with each hook's prototype.

<a name="idp9932496"></a>
## See Also

[the section called “Runtime Extensibility; Loading Modules”](ecelerity.conf.php#ecelerity.conf.loading.modules "Runtime Extensibility; Loading Modules")

| [Prev](console_commands.message_retry.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.pager.php) |
| message retry  | [Table of Contents](index.php) |  \pager |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)