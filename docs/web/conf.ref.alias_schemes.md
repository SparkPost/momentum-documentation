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

| alias_schemes |
| [Prev](conf.ref.address_metrics_lifetime.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.allow_ip_literal.php) |

<a name="conf.ref.alias_schemes"></a>
## Name

alias_schemes — Enable named alias expansion schemes

## Synopsis

`Alias_Schemes = ("ldapaliases")`

<a name="idp4079136"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.0.17.

When the alias module is loaded, the `Alias_Schemes` option can be used to configure alias expansion on a per-domain basis, with optional global behavior.

When alias expansion is run, Momentum looks to see if `Alias_Schemes` is configured for the domain of the recipient, and applies the expansions from listed schemes, in the order that they are listed. Alias expansion is recursive; each recipient can expand to 0 or more recipients, with 0 expansions halting the process for a given recipient. Expansion loops are detected and prevented by the alias module.

An empty `Alias_Schemes` list means that no aliasing should be performed; this can be used in situations where you want to apply aliases globally, except for a handful of domains.

If a domain does not specify `Alias_Schemes`, then the value of `Alias_Schemes` is used instead.

The default global value of `Alias_Schemes` is an empty list, meaning that no alias expansion will be performed.

In the following example, mail for `example.com` recipients will expand aliases from an LDAP directory, mail for `localhost.localdomain` recipients will expand aliases from a local sqlite database and no alias expansion will be performed for any other domains.

<a name="example.alias_achemes"></a>

**Example 9.1. Alias_Schemes example**

```
Module datasource/ds_core ds_core {
  sqlitedb [
    uri = "sqlite:/path/to/sqlite.db"
  ]
  ldap [
    uri = "ldap://ldaphost"
  ]
}

Module datasource/ds_sqlite ds_sqlite {}
Module datasource/ds_ldap ds_ldap {}

Validate validate/alias alias {
  alias:local [
    cache = "sqlitedb"
    query = "SELECT expansion FROM foo WHERE address = :address"
    map = "simple"
    column = "expansion"
  ]
  map:simple [
    address = "%{rcptto}"
    local = "%{localpart}"
    domain = "%{domain}"
  ]

  alias:ldapaliases [
    cache = "ldap"
    query = "ldap:///cn=$local%2Cou=mailAliases%2Cdc= ’
    example%2Cdc=com?mgrpRFC822MailMember?sub?(objectClass=mailGroup)?"
    map = "ldapmap"
  ]
  map:ldapmap [
    local = "%{localpart}"
    domain = "%{domain}"
  ]
}

Domain localhost.localdomain {
  Alias_Schemes = ( "local" )
}

Domain example.com {
  Alias_Schemes = ( "ldapaliases" )
}
```

<a name="idp4094480"></a>
## Scope

alias_schemes is valid in the domain, global, pathway and pathway_group scopes.

<a name="idp4096160"></a>
## See Also

[Section 14.1, “alias – Alias Expansion Module”](modules.alias.php "14.1. alias – Alias Expansion Module")

| [Prev](conf.ref.address_metrics_lifetime.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.allow_ip_literal.php) |
| address_metrics_lifetime  | [Table of Contents](index.php) |  allow_ip_literal |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)