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

| soft_bounce_drain_rate |
| [Prev](conf.ref.snmp.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.spool_mode.php) |

<a name="conf.ref.soft_bounce_drain_rate"></a>
## Name

soft_bounce_drain_rate — how many soft bounces to place into the mail queues in a single scheduler iteration

## Synopsis

`soft_bounce_drain_rate = 100`

<a name="idp26698992"></a>
## Description

When `async_bounce_rendering` is enabled, soft bounces are queued internally. This option defines how many are pulled from the internal queue and placed into the mail queues in a single scheduler iteration.

The default value is `100`.

<a name="idp26702336"></a>
## Scope

`soft_bounce_drain_rate` is valid in the global scope.

<a name="idp26704592"></a>
## See Also

[async_bounce_rendering](conf.ref.async_bounce_rendering.php "async_bounce_rendering")

| [Prev](conf.ref.snmp.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.spool_mode.php) |
| SNMP  | [Table of Contents](index.php) |  spool_mode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)