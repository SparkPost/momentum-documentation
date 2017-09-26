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

| signing_stats |
| [Prev](conf.ref.server_reserve_outbound_connections.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.siv_throttle_cache_size.php) |

<a name="conf.ref.signing_stats"></a>
## Name

signing_stats — control how signing statistics are recorded

## Synopsis

`Signing_Stats = "all"`

`Signing_Stats = "global"`

`Signing_Stats = "off"`

<a name="idp6651776"></a>
## Description

This option is used to control whether signing statistics are recorded per binding, as a global summary only, or disabled entirely. You might consider setting this option to `global` or `off` if you have a very large number of bindings and don't need to track message signing statistics such as DKIM on a per-binding basis.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.45.

The default value for this option is `all`.

<a name="idp6658576"></a>
## Scope

Signing_Stats is valid in the global scope.

<a name="idp6660208"></a>
## See Also

[Section 14.22, “dkim – DomainKeys Identified Mail Signatures”](modules.dkim.php "14.22. dkim – DomainKeys Identified Mail Signatures"), [Section 14.24, “domainkeys – Yahoo! DomainKeys”](modules.domainkeys.php "14.24. domainkeys – Yahoo! DomainKeys")

| [Prev](conf.ref.server_reserve_outbound_connections.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.siv_throttle_cache_size.php) |
| server_reserve_outbound_connections  | [Table of Contents](index.php) |  siv_throttle_cache_size |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)