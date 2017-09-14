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

| generate_delay_dsn |
| [Prev](conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.growbuf_size.php) |

<a name="conf.ref.generate_delay_dsn"></a>
## Name

generate_delay_dsn — generate DSNs if mail is delayed

## Synopsis

`generate_delay_dsn = true`

`generate_delay_dsn = false`

<a name="idp9701232"></a>
## Description

Momentum has the ability to generate warning messages (delivery status notifications, or DSNs) that are delivered to the envelope sender of a message that has not yet been delivered.

The default value for this option is `false`.

### Note

To use this feature the [delay_dsn](modules.delay_dsn.php "14.25. delay_dsn – Delay DSN Generation") module must be loaded.

<a name="idp9706096"></a>
## Scope

`generate_delay_dsn` is valid in the binding_group, binding, domain and global scopes.

<a name="idp9708176"></a>
## See Also

[delay_dsn_retry_interval](conf.ref.delay_dsn_retry_interval.php "delay_dsn_retry_interval"), [delay_dsn_max_retry_interval](conf.ref.delay_dsn_max_retry_interval.php "delay_dsn_max_retry_interval") and [generate_delay_dsn](conf.ref.generate_delay_dsn.php "generate_delay_dsn")

| [Prev](conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.growbuf_size.php) |
| generate_bounces_for_multi_recipient_policy_rejections  | [Table of Contents](index.php) |  growbuf_size |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)