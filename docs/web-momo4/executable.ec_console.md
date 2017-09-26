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
| [Prev](executable.ec_adtool.php)  | Chapter 74. Executable Commands Reference |  [Next](executable.ec_ctl.php) |

<a name="executable.ec_console"></a>
## Name

ec_console — connect to Momentum to perform introspection and administration

## Synopsis

`/opt/msys/ecelerity/bin/ec_console` [ remoteaddr [*`command`*] ] [ --man ]

<a name="idp11103648"></a>
## Description

Runtime administration of Momentum can be performed through the Momentum System Console **ec_console**. Through the console, you can view and change the value of configuration options.

This command has the following options:

<dl class="variablelist">

<dt>*`remoteaddr`* [*`command`*]</dt>

<dd>

Specify the IP address or the Unix socket. This can be useful if you wish to run the console in batch mode.

</dd>

<dt>--man</dt>

<dd>

Show the man page for the **ec_console** command.

</dd>

</dl>

<a name="idp11112080"></a>
## See Also

[Chapter 67, *Console Commands Summary*](console_commands.php "Chapter 67. Console Commands Summary") , [Chapter 17, *Configuring Momentum's System Console*](control_listener.php "Chapter 17. Configuring Momentum's System Console") , [Chapter 37, *Using the System Console (**ec_console**)*](operations.php "Chapter 37. Using the System Console (ec_console)") 

| [Prev](executable.ec_adtool.php)  | [Up](exec.cmds.ref.php) |  [Next](executable.ec_ctl.php) |
| ec_adtool  | [Table of Contents](index.php) |  ec_ctl |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)