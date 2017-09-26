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

| smpp_esme_numbering_plan |
| [Prev](mobility.conf.smpp_esme_max_bind_retries.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_esme_throttled_timeout.php) |

<a name="mobility.conf.smpp_esme_numbering_plan"></a>
## Name

smpp_esme_numbering_plan — The second of three SMS address parameters that specify the source address for SMS messages sent with SMPP

## Synopsis

`smpp_esme_numbering_plan = "e164"`

<a name="idp1647632"></a>
## Description

The second of three SMS address parameters that specify the source address for SMS messages sent with SMPP. It defines the numbering plan indicator for the ESME address.

The default value for this option is `e164` .

The legal values for this option are: `e164` | `unknown`.

<a name="idp1651920"></a>
## Scope

smpp_esme_numbering_plan is valid in the binding, binding_group, domain and global scopes.

| [Prev](mobility.conf.smpp_esme_max_bind_retries.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_esme_throttled_timeout.php) |
| smpp_esme_max_bind_retries  | [Table of Contents](index.php) |  smpp_esme_throttled_timeout |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)