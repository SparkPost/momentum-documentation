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

| dns_fallback_to_tcp |
| [Prev](conf.ref.dns_failures_to_purge.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.domain_for_unqualified_recipient_addresses.php) |

<a name="conf.ref.dns_fallback_to_tcp"></a>
## Name

dns_fallback_to_tcp — whether or not to fail over to TCP in place of UDP

## Synopsis

`dns_fallback_to_tcp = false`

<a name="idp24409248"></a>
## Description

Momentum uses User Datagram Protocol (UDP) for DNS queries. However, the size of a UDP packet is limited and a DNS query can exceed it. Set this option to `true` and Momentum tries first with UDP then fails over to TCP if the query response is too large. This avoids having lengthy DNS responses truncated.

The default value is `false`.

<a name="idp24412256"></a>
## Scope

`dns_fallback_to_tcp` is valid in the global scope.

| [Prev](conf.ref.dns_failures_to_purge.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.domain_for_unqualified_recipient_addresses.php) |
| dns_failures_to_purge  | [Table of Contents](index.php) |  domain_for_unqualified_recipient_addresses |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)