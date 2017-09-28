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

| pe2.log.db_level |
| [Prev](conf.pe2.log.info_facilities.php)  | Chapter 7. Message Central Configuration Reference |  [Next](conf.mc.log_level.php) |

<a name="conf.mc.log.db_level"></a>
## Name

pe2.log.db_level — set the database log level

## Synopsis

`pe2.log.db_level = 2`

<a name="idp1796256"></a>
## Description

**Configuration Change. ** As of version 3.0, this option is no longer used. In version 3.0, set the log level of a facility by using the appropriate log level option with the facility you wish to debug. For example, to log notice level database errors use `pe2.log.notice_facilities = (DB)`.

This option determines the verbosity of database errors written to the log. It may be assigned a value of `0` through `4`. Refer to the `pe2.log_level` option for the meaning of the different levels. The default value for this option is `2`, or Warning.

<a name="idp1802384"></a>
## See Also

[pe2.log_level](conf.mc.log_level.php "pe2.log_level")

| [Prev](conf.pe2.log.info_facilities.php)  | [Up](mc.conf.php) |  [Next](conf.mc.log_level.php) |
| pe2.log.info_facilities  | [Table of Contents](index.php) |  pe2.log_level |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)