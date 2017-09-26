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

| pe2.log.warning_facilities |
| [Prev](conf.pe2.log.notice_facilities.php)  | Chapter 7. Message Central Configuration Reference |  [Next](conf.mcg.block_not_finished_sleep.php) |

<a name="conf.pe2.log.warning_facilities"></a>
## Name

pe2.log.warning_facilities — set the log level of the specified facility to

## Synopsis

`pe2.log.warning_facilities = (DB)`

<a name="idp1872320"></a>
## Description

**Configuration Change. ** This option is available as of version 3.0 and has been replaced in version 3.5\. For more information see [Chapter 6, *Configuration Files in Version 3.5 and Higher*](mc.conf.3.5.php "Chapter 6. Configuration Files in Version 3.5 and Higher") .

This option sets the log level of the specified facility to `warning`. For a complete list of facilities see ["Debug Flags"](https://support.messagesystems.com/docs/web-ref/conf.ref.debug_flags.php) . You may specify any number of facilities. Use `ALL` for all facilities.

<a name="idp1878256"></a>
## See Also

[pe2.log.debug_facilities](conf.pe2.log.debug_facilities.php "pe2.log.debug_facilities"), [pe2.log.info_facilities](conf.pe2.log.info_facilities.php "pe2.log.info_facilities"), [pe2.log.notice_facilities](conf.pe2.log.notice_facilities.php "pe2.log.notice_facilities"), [pe2.log.error_facilities](conf.pe2.log.error_facilities.php "pe2.log.error_facilities") and [pe2.log.critical_facilities](conf.pe2.log.critical_facilities.php "pe2.log.critical_facilities")

| [Prev](conf.pe2.log.notice_facilities.php)  | [Up](mc.conf.php) |  [Next](conf.mcg.block_not_finished_sleep.php) |
| pe2.log.notice_facilities  | [Table of Contents](index.php) |  pe2g.block_not_finished_sleep |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)