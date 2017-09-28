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

| match_cache_life |
| [Prev](conf.ref.masterdb_file.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.match_cache_size.php) |

<a name="conf.ref.match_cache_life"></a>
## Name

match_cache_life — set the maximum number of seconds that the match cache will be valid

## Synopsis

`match_cache_life = 0`

<a name="idp10142432"></a>
## Description

`match_cache_life` determines the maximum validity for cache entries in the match cache. With a default match_cache_life of `0`, cache entries will be kept for as long as they are still usable and the cache size hasn't been exceeded. Normally it is not necessary to set this option to a value other than `0`.

<a name="idp10145552"></a>
## Scope

`match_cache_life` is valid in the global scope.

<a name="idp10147584"></a>
## See Also

[match_cache_size](conf.ref.match_cache_size.php "match_cache_size"), [cache stats](console_commands.cache_stats.php "cache stats") and [domain](conf.ref.domain.php "domain")

| [Prev](conf.ref.masterdb_file.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.match_cache_size.php) |
| masterdb_file  | [Table of Contents](index.php) |  match_cache_size |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)