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

| match_cache_size |
| [Prev](conf.ref.match_cache_life.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.max_deliveries_per_connection.php) |

<a name="conf.ref.match_cache_size"></a>
## Name

match_cache_size — the size of the cache that holds the results of looking up matching scopes

## Synopsis

`match_cache_size = 16384`

<a name="idp10157840"></a>
## Description

In version 2.2, Momentum creates a separate cache for every scope instance that contains regex domains. Consider the following configuration snippet:

```
Binding_Group group {
  Binding foo {
    Domain /yahoo\.co(m|\.uk)$/ {
    }
    Domain /google\.(com|es|ru)$/{
    }
  }
  Domain /yahoo\.co(m|\.uk)$/ {
  }
  Domain /google\.(com|es|ru)$/{
  }
}

Domain /yahoo\.co(m|\.uk)$/ {
}

Domain /google\.(com|es|ru)$/{
}
```

Three caches would be created: one for the global scope, one for the Binding_Group `group` scope, and one for the Binding `foo` scope. match_cache_size determines the maximum number of elements in *each* cache. If your configuration uses regex domains, then, for best performance, the cache size should be larger than the number of unique queries. This should be at least the number of unique destination domains you send to.

### Warning

The Match_Cache_Size **MUST NOT**     be set to `0`; doing so will result in undefined behavior.

<a name="idp10164400"></a>
## Changes in Version 3

Version 3.0 uses a single global cache. For this reason the default value has increased to `16384`.

In 2.2 `match_cache_size` applied only to regex domains, but in 3.0 it also applies to Peer scopes in listeners, and any user-defined scopes that use matching.

In Momentum version 3.0 it is not necessary to restart the MTA if changes are made to this option using **config set** .

<a name="idp10168768"></a>
## Scope

match_cache_size is valid in the global scope.

<a name="idp10170416"></a>
## See Also

[match_cache_life](conf.ref.match_cache_life.php "match_cache_life") and [domain](conf.ref.domain.php "domain")

| [Prev](conf.ref.match_cache_life.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.max_deliveries_per_connection.php) |
| match_cache_life  | [Table of Contents](index.php) |  max_deliveries_per_connection |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)