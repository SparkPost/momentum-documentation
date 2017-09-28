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

| pe2g.gimli.beat_every |
| [Prev](conf.mcg.db_pool_size.php)  | Chapter 7. Message Central Configuration Reference |  [Next](conf.mcg.pe2g.gimli.enable_heartbeats.php) |

<a name="conf.mcg.pe2.gimli.beat_every"></a>
## Name

pe2g.gimli.beat_every — how often to send a heartbeat to the watchdog

## Synopsis

`pe2g.gimli.beat_every = 1`

<a name="idp1907856"></a>
## Description

This option sends a heartbeat to the Gimli watchdog after the specified number of contacts are pulled from the database. The default value for `pe2g.gimli.beat_every` is `1`.

This option is not used if `pe2g.gimli.enable_heartbeats` is disabled. However, `pe2g.gimli.enable_heartbeats` should not be disabled unless instructed to do so by support. In general, neither of these options should be changed; heartbeats should be on and it should beat on every tick.

<a name="idp1912320"></a>
## See Also

[pe2g.gimli.enable_heartbeats](conf.mcg.pe2g.gimli.enable_heartbeats.php "pe2g.gimli.enable_heartbeats")

| [Prev](conf.mcg.db_pool_size.php)  | [Up](mc.conf.php) |  [Next](conf.mcg.pe2g.gimli.enable_heartbeats.php) |
| pe2g.db_pool_size  | [Table of Contents](index.php) |  pe2g.gimli.enable_heartbeats |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)