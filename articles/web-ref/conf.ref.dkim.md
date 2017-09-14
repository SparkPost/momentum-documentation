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

| dkim |
| [Prev](conf.ref.disk_queue_drain_rate.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.dns_cache_purge_interval.php) |

<a name="conf.ref.dkim"></a>
## Name

dkim — enable or disable dkim signing

## Synopsis

`dkim = "enabled"`
`dkim = "disabled"`

<a name="idp8988256"></a>
## Description

### Note

This directive is only valid if the Momentum dkim_sign module is loaded. See [Section 14.27, “dkim – DomainKeys Identified Mail Signatures”](modules.dkim.php "14.27. dkim – DomainKeys Identified Mail Signatures")

This directive instructs Momentum to enable (or disable) signing messages with a DKIM signature globally, on a specific domain, binding or domain within a binding. When the dkim_sign module is loaded signing occurs for all messages by default. This is the same as setting `dkim = "enabled"` at the global scope.

Note that you would not normally need to change this, since even when signing is enabled globally you also need to have a valid key and selector configured for a domain. For this reason signing is usually "enabled" by defining selectors and keys for the signing domains in the dkim_sign module.

<a name="idp8993088"></a>
## Scope

dkim is valid in the binding, domain and global scope.

dkim is also valid in the binding_group scope.

<a name="idp8995536"></a>
## See Also

[domainkeys](conf.ref.domainkeys.php "domainkeys") and [Section 14.27, “dkim – DomainKeys Identified Mail Signatures”](modules.dkim.php "14.27. dkim – DomainKeys Identified Mail Signatures")

| [Prev](conf.ref.disk_queue_drain_rate.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.dns_cache_purge_interval.php) |
| disk_queue_drain_rate  | [Table of Contents](index.php) |  dns_cache_purge_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)