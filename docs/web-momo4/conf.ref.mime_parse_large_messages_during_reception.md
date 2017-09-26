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

| mime_parse_large_messages_during_reception |
| [Prev](conf.ref.migrate_connections_between_sibling_domains.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.min_dns_ttl.php) |

<a name="conf.ref.mime_parse_large_messages_during_reception"></a>
## Name

mime_parse_large_messages_during_reception — configure whether large messages are parsed upon reception or just in time.

## Synopsis

`mime_parse_large_messages_during_reception = true`

<a name="idp25563936"></a>
## Description

This option sets or unsets the message mime parse state on a message generated with the builder API.

### Warning

Setting this value to "false" may result in blocking the scheduler thread. The default value for this option is `true`.

<a name="idp25567296"></a>
## Scope

`mime_parse_large_messages_during_reception` is valid in the global scope.

| [Prev](conf.ref.migrate_connections_between_sibling_domains.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.min_dns_ttl.php) |
| migrate_connections_between_sibling_domains  | [Table of Contents](index.php) |  min_dns_ttl |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)