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

| pe2g.gimli.enable_heartbeats |
| [Prev](conf.mcg.pe2.gimli.beat_every.php)  | Chapter 7. Message Central Configuration Reference |  [Next](conf.mcg.relay_queue_backlog.php) |

<a name="conf.mcg.pe2g.gimli.enable_heartbeats"></a>
## Name

pe2g.gimli.enable_heartbeats — enable watchdog behavior

## Synopsis

`pe2g.gimli.enable_heartbeats = 1`

<a name="idp1921280"></a>
## Description

This option determines whether watchdog behavior is enabled for the generator. In general, the value of this option should not be changed unless instructed to do so by support.

Overloaded systems or systems with poor specifications, may encounter watchdogs because the system is not able to operate under the demands placed upon it. In those situations, the correct resolution is to increase the hardware capacity or reduce the load; disabling this option is not recommended.

<a name="idp1924048"></a>
## See Also

[pe2g.gimli.beat_every](conf.mcg.pe2.gimli.beat_every.php "pe2g.gimli.beat_every")

| [Prev](conf.mcg.pe2.gimli.beat_every.php)  | [Up](mc.conf.php) |  [Next](conf.mcg.relay_queue_backlog.php) |
| pe2g.gimli.beat_every  | [Table of Contents](index.php) |  pe2g.relay_queue_backlog |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)