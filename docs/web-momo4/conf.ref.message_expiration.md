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

| message_expiration |
| [Prev](conf.ref.memory_hwm.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.migrate_connections_between_sibling_domains.php) |

<a name="conf.ref.message_expiration"></a>
## Name

message_expiration — the time to live for messages

## Synopsis

`Message_Expiration = 604800`

<a name="idp25532816"></a>
## Description

The maximum amount of time in seconds a message will remain undelivered in the system. If a message remains undeliverable for this amount of time, it will be removed and a delivery failure log entry will be made. If the `Generate_Bounces` configuration option is enabled, then at failure time an out-of-band bounce message will be generated and queued for delivery. The default value for this option is `86400` seconds (24 hours). However, in the default `ecelerity.conf` file this option is set to `604800` (1 week).

<a name="idp25536848"></a>
## Scope

`message_expiration` is valid in the binding, binding_group, domain and global scopes.

<a name="idp25539152"></a>
## See Also

[never_attempt_expired_messages](conf.ref.never_attempt_expired_messages.php "never_attempt_expired_messages"), [retry_interval](conf.ref.retry_interval.php "retry_interval") and [max_retries](conf.ref.max_retries.php "max_retries")

| [Prev](conf.ref.memory_hwm.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.migrate_connections_between_sibling_domains.php) |
| memory_hwm  | [Table of Contents](index.php) |  migrate_connections_between_sibling_domains |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)