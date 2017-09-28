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

| delay_dsn_max_retry_interval |
| [Prev](conf.ref.default_charset.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.delay_dsn_retry_interval.php) |

<a name="conf.ref.delay_dsn_max_retry_interval"></a>
## Name

delay_dsn_max_retry_interval — maximum interval for sending DSNs to the sender of a message that has not yet been delivered

## Synopsis

`delay_dsn_max_retry_interval = "43200"`

<a name="idp24208192"></a>
## Description

The maximum interval between successive warning messages (delivery status notifications, or DSNs) sent to the sender of a message that has not yet been delivered. This provides a cap on the effective interval between DSNs calculated from `delay_dsn_retry_interval`.

### Note

To use this feature the [delay_dsn](modules.delay_dsn.php "71.26. delay_dsn – Delay DSN Generation") module must be loaded.

The default value is `0`.

<a name="idp24213280"></a>
## Scope

`delay_dsn_max_retry_interval` is valid in the binding_group, binding, domain, and global scopes.

<a name="idp24215600"></a>
## See Also

[generate_delay_dsn](conf.ref.generate_delay_dsn.php "generate_delay_dsn"), [delay_dsn_max_retry_interval](conf.ref.delay_dsn_max_retry_interval.php "delay_dsn_max_retry_interval"), and [delay_dsn_retry_interval](conf.ref.delay_dsn_retry_interval.php "delay_dsn_retry_interval")

| [Prev](conf.ref.default_charset.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.delay_dsn_retry_interval.php) |
| default_charset  | [Table of Contents](index.php) |  delay_dsn_retry_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)