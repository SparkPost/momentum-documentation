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

| 37.3. Using Module-Specific Console Commands |
| [Prev](operations.console-commands.php)  | Chapter 37. Using the System Console (**ec_console**) |  [Next](modules.options.console.php) |

## 37.3. Using Module-Specific Console Commands

How module-specific console commands are issued depends upon whether a module is a singleton. To determine whether a module is a singleton, refer to [Chapter 65, *Modules Summary*        ](modules.summary.all.modules.php "Chapter 65. Modules Summary") or use the **module list**      command from the console. This command displays a full list of all loaded modules. The following is an example partial output:

```
...
Module: ds_core
  Scope_Name: ds_core
  Enabled: enabled
  API: Singleton
  Name: ds_core.c
  Description: generic datasource module
Module: ec_logger:ec_logger
  Scope_Name: ec_logger
  Instance_Name: ec_logger1
  Enabled: enabled
  API: Logger
  Name: ec_logger.c
  Description: Momentum minimalistic logging module
...
```

This output shows both a singleton (ds_core) and a non-singleton (ec_logger) module. The instance name of a non-singleton module is the name that you choose when the module is created.

Non-singleton module commands are issued using `Scope_Name:Instance_Name` followed by the command. For example, when you have an ec_logger module named `ec_logger1`, issue the `help` command in the following way:

`ec_logger:ec_logger1 help`

Singleton module commands are executed by using the module scope name followed by the command. For example, to flush a cache named *`sqlite`*, issue the `ds_core flush` command in the following way:

`ds_core flush sqlite`

For a list of module-specific console commands, see [Chapter 67, *Console Commands Summary*](console_commands.php "Chapter 67. Console Commands Summary") .

| [Prev](operations.console-commands.php)  | [Up](operations.php) |  [Next](modules.options.console.php) |
| 37.2. Console Commands  | [Table of Contents](index.php) |  37.4. Setting and Getting Module Options from the Console |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)