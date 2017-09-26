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

| ec_console |
| [Prev](executable.ec_cmd.php)  | 11.2. Executable Commands |  [Next](executable.ec_ctl.php) |

<a name="executable.ec_console"></a>
## Name

ec_console — connect to Momentum to perform introspection and administration

## Synopsis

`/opt/msys/ecelerity/bin/ec_console` [ remoteaddr [*`command`*] ] [ --man ]

<a name="idp13294448"></a>
## Description

Runtime administration of Momentum can be performed through **ec_console**. Through the console you can view and change the value of configuration options. Please see [Section 4.1, “The Momentum System Console”](operations.console.php "4.1. The Momentum System Console") for a detailed description of **ec_console**. For the list of available commands see [Chapter 12, *Momentum System Console Commands Reference*](console_commands.php "Chapter 12. Momentum System Console Commands Reference") . There are also module-specific commands documented at [Section 13.3, “Module-Specific Console Commands”](module_specific_console_commands.php "13.3. Module-Specific Console Commands").

### Note

You can create your own console commands using Lua. For details see [msys.registerControl](lua.ref.msys.registerControl.php "msys.registerControl").

This command has the following options:

<dl class="variablelist">

<dt>*`remoteaddr`* [*`command`*]</dt>

<dd>

Specify the IP address or the Unix socket. This can be useful if you wish to run the system console in batch mode. For more information see [Section 4.1, “The Momentum System Console”](operations.console.php "4.1. The Momentum System Console").

</dd>

<dt>--man</dt>

<dd>

Show the man page for the ec_console command

</dd>

</dl>

| [Prev](executable.ec_cmd.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_ctl.php) |
| ec_cmd  | [Table of Contents](index.php) |  ec_ctl |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)