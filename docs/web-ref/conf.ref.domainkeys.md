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

| domainkeys |
| [Prev](conf.ref.domain_for_unqualified_sender_address.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.drop_body_after_trans_fail.php) |

<a name="conf.ref.domainkeys"></a>
## Name

domainkeys — enable or disable domainkeys signing

## Synopsis

`domainkeys = "enabled"`
`domainkeys = "disabled"`

<a name="idp9458256"></a>
## Description

### Note

This directive is only valid if the Momentum dk_sign module is loaded. See [Section 14.29, “domainkeys – Yahoo! DomainKeys”](modules.domainkeys.php "14.29. domainkeys – Yahoo! DomainKeys")

This directive instructs Momentum to enable (or disable) signing messages with a DomainKeys signature globally, on a specific domain, binding or domain within a binding. When the dk_sign module is loaded, signing occurs for all messages by default. This is the same as setting domainkeys = enabled at the global scope.

<a name="idp9461936"></a>
## Scope

domainkeys is valid in the binding, domain and global scope.

domainkeys is also valid in the binding group scope.

<a name="idp9464400"></a>
## See Also

[dkim](conf.ref.dkim.php "dkim")

| [Prev](conf.ref.domain_for_unqualified_sender_address.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.drop_body_after_trans_fail.php) |
| domain_for_unqualified_sender_address  | [Table of Contents](index.php) |  drop_body_after_trans_fail |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)