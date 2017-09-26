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

| 37.4. Setting and Getting Module Options from the Console |
| [Prev](module_specific_console_commands.using.php)  | Chapter 37. Using the System Console (**ec_console**) |  [Next](operations.console.lua.php) |

## 37.4. Setting and Getting Module Options from the Console

There are no module-specific commands related to setting or getting module options. To set or get module-specific options, use the command:

`config [set | eval | get] Scope_Name [Instance_Name] option [value]`

Note that there is no ‘`:`’ between the Scope_Name and the Instance_Name and that no Instance_Name is specified if the module is a singleton.

For example, the event types logged by the ec_logger can be toggled as follows:

config set ec_logger *`ec_logger1`* log_transient_failures off

If the command is successful, then `Set` is output to the screen.

For a complete discussion of the **config** command, see [config](console_commands.config.php "config").

| [Prev](module_specific_console_commands.using.php)  | [Up](operations.php) |  [Next](operations.console.lua.php) |
| 37.3. Using Module-Specific Console Commands  | [Table of Contents](index.php) |  37.5. Creating Custom Console Commands |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)