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

| use_ipv6 |
| [Prev](conf.ref.use_iflist_cache.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.use_mmap.php) |

<a name="conf.ref.use_ipv6"></a>
## Name

use_ipv6 — Affects the selection of IPv6 hosts in the SMTP client

## Synopsis

`use_ipv6 = false`

`use_ipv6 = true`

<a name="idp27307568"></a>
## Description

When set to false, Momentum will ignore `AAAA` records in the list of hosts resolved from MX lookups. This will effectively prevent the use of outbound IPv6 SMTP connections. The AAAA records will not be visible in the output of the **dig** console command either.

The default is `false`.

For a discussion of using IPv6 addresses with listeners, see [Section 15.4.5, “Listeners and IPv6 Addresses”](listeners.php#listeners.ipv6 "15.4.5. Listeners and IPv6 Addresses").

<a name="idp27312464"></a>
## Scope

use_ipv6 is valid in the global scope.

| [Prev](conf.ref.use_iflist_cache.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.use_mmap.php) |
| use_iflist_cache  | [Table of Contents](index.php) |  use_mmap |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)