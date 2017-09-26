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

| 13.1. Module Overview |
| [Prev](modules.overview.php)  | Chapter 13. Modules |  [Next](modules.summary.php) |

## 13.1. Module Overview

All modules in version 3.0 load automatically if you use any of the options they declare, or use other resources provided by them. In order to set configuration options, modules must be explicitly loaded. However, you need not explicitly declare modules, such as the jlog module, that don't have options (apart from the `enabled` and `debug_level` options common to all modules).

Examples of modules that will typically load implicitly are:

*   antivirus

*   cidrdb

*   compress_spool

*   http_io

*   jlog

*   persist_io

*   sievelib

*   suppress_spool

Modules are most easily configured from the web console as described in [Section 3.8.1.5, “Changing Module Configuration Options”](web3.administration.php#web3.module_config "3.8.1.5. Changing Module Configuration Options") but they can also be configured by manually altering the configuration file or by setting options using the system console. Use the [config](console_commands.config.php "config") command to set configuration options from the system console.

Some modules, typically antivirus modules, must be loaded in "passive" mode. To load a module in passive mode, use the web console to set the `Enabled` option to `false`. Use the following syntax if you are manually changing the `ecelerity.conf` file:

```
symbolname "name" {
  Enabled = false
  ...
}
```

The `Enabled` option is common to all modules as is the `Debug_Level` option.

### 13.1.1. Module Debugging

During troubleshooting, it can be useful to have debugging information sent to the paniclog. Module debug levels can be set in the `ecelerity.conf` file, from the web console or from the system console. The default debugging level is `ERROR`, which will cause `ERROR` and `CRITICAL` messages to be logged to the paniclog. Find below an example of setting the debug level of the bounce_logger module:

```
bounce_logger "bounce_logger1"
{
   debug_level = "NOTICE"
   bouncelog = "/var/log/ecelerity/bouncelog.ec"
   bouncelog_mode = 0644
   heartbeat = 60
}
```

For a list of all the debug levels see [Table 9.28, “Debug levels”](conf.ref.debug_flags.php#conf.ref.debug.levels "Table 9.28. Debug levels"). Setting debug levels from the system console is described in [the section called “Setting Module-Level Debugging from the System Console”](module_specific_console_commands.using.php#modules.console.debugging "Setting Module-Level Debugging from the System Console").

Be sure to turn off debugging when you are finished otherwise log files can become excessively large.

If the module that you wish to debug is not explicitly loaded, then you must add it to your configuration file.

| [Prev](modules.overview.php)  | [Up](modules.overview.php) |  [Next](modules.summary.php) |
| Chapter 13. Modules  | [Table of Contents](index.php) |  13.2. Summary Module Information |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)