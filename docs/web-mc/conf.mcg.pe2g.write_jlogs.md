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

| pe2g.write_jlogs |
| [Prev](conf.mcg.pe2g.verpdomain.php)  | Chapter 7. Message Central Configuration Reference |  [Next](conf.pe2m.call_period.php) |

<a name="conf.mcg.pe2g.write_jlogs"></a>
## Name

pe2g.write_jlogs — whether or not to write jlogs for the generator

## Synopsis

pe2g.write_jlogs = *`1`*

<a name="idp2003504"></a>
## Description

This option enables writing of generated records to a jlog. Managers load these records from the jlog to the database. Setting this option to `0` bypasses the jlogs and writes records directly to the database. The default value for this option is `1`.

### Note

You must turn this feature off in order to use Intelligent Message Disposition. For more information see [Section 3.11, “Exposing IMD Controls in the Web UI”](mc-post-installation.enabling.imd.php "3.11. Exposing IMD Controls in the Web UI").

| [Prev](conf.mcg.pe2g.verpdomain.php)  | [Up](mc.conf.php) |  [Next](conf.pe2m.call_period.php) |
| pe2g.verpdomain  | [Table of Contents](index.php) |  pe2m.call_period |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)