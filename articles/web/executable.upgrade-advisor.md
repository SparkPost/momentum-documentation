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

| upgrade-advisor |
| [Prev](executable.mbusd_monitor.php)  | 11.2. Executable Commands |  [Next](console_commands.php) |

<a name="executable.upgrade-advisor"></a>
## Name

upgrade-advisor — determine whether you are taking full advantage of the real-time logging capabilities of Momentum

## Synopsis

`/opt/ecelerity/bin/upgrade-advisor`

<a name="idp8644832"></a>
## Description

### Note

This script is not intended to be run manually; it is run by the installer during an interactive installation.

**Configuration Change. ** This feature is discontinued in version 3.0.

`upgrade-advisor` is a shell script that analyzes your `ecelerity.conf` file to determine if you are taking full advantage of the real-time logging capabilities of Momentum. This script checks whether the jlog, ec_logger_rt, bounce_logger_rt and the stats_producer modules are loaded and notifies the user if any one of these modules is absent.

| [Prev](executable.mbusd_monitor.php)  | [Up](exe.commands.details.php) |  [Next](console_commands.php) |
| mbusd_monitor  | [Table of Contents](index.php) |  Chapter 12. Momentum System Console Commands Reference |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)