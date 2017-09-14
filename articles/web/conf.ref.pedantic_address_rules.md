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

| pedantic_address_rules |
| [Prev](conf.ref.pcre_cache_ttl.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.permastore_interval.php) |

<a name="conf.ref.pedantic_address_rules"></a>
## Name

pedantic_address_rules — Allow relaxation of enforcement of the rfc2821 address rules.

## Synopsis

`RFC2822 { Pedantic_Address_Rules = false }`
`RFC2822 { Pedantic_Address_Rules = true }`

<a name="idp6193696"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.

RFC2821 has very strict guidelines about what address formats are allowable. This option allows those guidelines to be relaxed. If the option is set to its default value of true, it will enforce the full gamut of rfc2821 rules. If it is set to false, it will allow addresses of the following formats: "a..b@xxx.com" "ab.@xxx.com"

### Note

This option has been renamed RFC2821_Pedantic_Address_Rules in version 3.0.

<a name="idp6199520"></a>
## Scope

Pedantic_Address_Rules is valid in the RFC2822 scope.

| [Prev](conf.ref.pcre_cache_ttl.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.permastore_interval.php) |
| pcre_cache_ttl  | [Table of Contents](index.php) |  permastore_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)