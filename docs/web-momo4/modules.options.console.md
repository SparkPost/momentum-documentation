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