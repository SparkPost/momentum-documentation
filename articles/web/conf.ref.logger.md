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

| logger |
| [Prev](conf.ref.lmtp_port.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.lone_lf_in_body.php) |

<a name="conf.ref.logger"></a>
## Name

logger — load a logging module

<a name="idp5486048"></a>
## Description

```
Logger logging/module_name module_name {
  configkey1 = configval1
  configkey2 = configval2
}
```

The `Logger` keyword instructs Momentum to load a logging module. Such modules can control the syntax in which logs are written, including error messages, message receptions, attempts, deliveries and failures. The `ec_logger` module is the default Logger module in Momentum, see [Section 14.26, “ec_logger – Momentum-Style Logging”](modules.ec_logger.php "14.26. ec_logger – Momentum-Style Logging") for more details.

**Configuration Change. ** The `Logger` keyword is not required in version 3.0; you need only reference the module name.

<a name="idp5492544"></a>
## Module Naming and Debugging

When a module is loaded, it is named based on the module_name specified in the configuration. Some modules can have multiple instances loaded with different configurations, for example, to log different sets of information into different log files. In this case, the secondary instances will have an internally generated name assigned to them so that they can be symbolically referenced in reporting and console commands.

You may explicitly name a module instance by using the name attribute in your configuration file:

```
Module generic/module_name module_name <name="my_name"> {
  configkey1 = configval1
  configkey2 = configval2
}
```

The attribute syntax works for all types of modules, including logger, io_system and validation modules.

### Module Debugging

During troubleshooting, it can be useful to have debugging information sent to the paniclog. Each module has its own notion of debugging verbosity that can be set both from the `ecelerity.conf` and dynamically via the **ec_console** **debug** command. The default debugging level is `ERROR` , which will cause ERROR and CRITICAL messages to be logged to the paniclog.

You can specify an alternate level in `ecelerity.conf` using the `debug_level` attribute:

```
Module generic/module_name module_name <debug_level="DEBUG" name="my_name"> {
  configkey1 = configval1
  configkey2 = configval2
}
```
<a name="idp5502576"></a>
## Scope

logger is valid in the global scope.

<a name="idp5504208"></a>
## See Also

[Chapter 14, *Modules Reference*          ](modules.php "Chapter 14. Modules Reference") [io_system](conf.ref.io_system.php "io_system") [validate](conf.ref.validate.php "validate") [interpreter](conf.ref.interpreter.php "interpreter") [module](conf.ref.module.php "module")

| [Prev](conf.ref.lmtp_port.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.lone_lf_in_body.php) |
| lmtp_port  | [Table of Contents](index.php) |  lone_lf_in_body |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)