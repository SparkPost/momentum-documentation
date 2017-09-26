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

| max_deliveries_per_connection |
| [Prev](conf.ref.match_cache_size.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.max_dns_ttl.php) |

<a name="conf.ref.max_deliveries_per_connection"></a>
## Name

max_deliveries_per_connection — maximum number of messages to deliver before closing a connection

## Synopsis

`max_deliveries_per_connection = 0`

<a name="idp25287152"></a>
## Description

The maximum number of messages that will be sent over a single SMTP connection. This option limits *successful* deliveries only. If you wish to limit the number of attempted RCPT TO commands that are sent, use `max_recipients_per_connection`. `max_deliveries_per_connection` is configurable globally, in the binding scope and on a per-domain basis. If set to `0` (the default), then no maximum limit will be enforced.

<a name="idp25291088"></a>
## Scope

max_deliveries_per_connection is valid in the binding, binding_group, domain and global scopes.

| [Prev](conf.ref.match_cache_size.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.max_dns_ttl.php) |
| match_cache_size  | [Table of Contents](index.php) |  max_dns_ttl |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)