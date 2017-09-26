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

| 13.4. Using Module-Specific Console Commands |
| [Prev](module_specific_console_commands.php)  | Chapter 13. Modules |  [Next](modules.php) |

## 13.4. Using Module-Specific Console Commands

In version 3.0, most module-specific system console commands have changed. How commands are issued depends upon whether a module is a singleton or not. Use the **module list**      command from the system console to determine whether a module is a singleton or refer to [Section 13.2.1, “All Modules”](modules.summary.php#modules.summary.all.modules "13.2.1. All Modules"). This command also displays the instance name of a module—this information is also necessary when issuing console commands. Find below partial output of the **module list**      command:

```
...
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

This output shows both a singleton and a non-singleton module. The instance name of a module is the name that you choose when the module is created. Non-singleton module commands are issued using `Scope_Name:Instance_Name` followed by the command. For example, when you have an ec_logger module named `ec_logger1`, issue the `help` command in the following way:

`05:47:04 /tmp/2025> ec_logger:ec_logger1 help`

Singleton module commands are executed exactly as they were in version 2.2, using the module scope name followed by the command.

As of version 3.0, all module-specific commands related to setting or getting module options have been removed. Use the following syntax to set or get module-specific options: **config [set | eval | get] Scope_Name [Instance_Name] option [value]** . Note that there is no ‘`:`’ between the Scope_Name and the Instance_Name. For example, when you have a sieve module named `sieve1`, you can set the `cache_life` option from the system console in the following way:

`05:47:04 /tmp/2025> config set sieve sieve1 cache_life 300`
### Setting Module-Level Debugging from the System Console

In version 2.2 it was possible to set and get module-level debugging from the system console in the following way: **debug module *`module_name`* [level]** .

In version 3.0, you set and get module-level debugging using the **config** command. The debug level is set in the same way as any other module option. For example, use the following syntax to set the debug level of an ec_logger module with the name `ec_logger1`:

`05:47:04 /tmp/2025> config set ec_logger ec_logger1 Debug_Level DEBUG`

For a list of all the debug levels see [Table 9.28, “Debug levels”](conf.ref.debug_flags.php#conf.ref.debug.levels "Table 9.28. Debug levels").

| [Prev](module_specific_console_commands.php)  | [Up](modules.overview.php) |  [Next](modules.php) |
| 13.3. Module-Specific Console Commands  | [Table of Contents](index.php) |  Chapter 14. Modules Reference |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)