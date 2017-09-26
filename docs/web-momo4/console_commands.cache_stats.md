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

| cache stats |
| [Prev](console_commands.cache_stat.php)  | Chapter 73. Non-Module-Specific Console Commands |  [Next](console_commands.config.php) |

<a name="console_commands.cache_stats"></a>
## Name

cache stats — show cache statistics

## Synopsis

`cache stats` [ *`cache_name`* ...]

<a name="idp11432176"></a>
## Description

This command shows statistics for all caches if no parameter is passed in. Otherwise it shows the statistics for the specified cache or caches. For example, **cache stats *`ds_core:ecdb`***                        will produce metrics such as:

```
cache name                      lookups %                  deletions %
                       elts  hit miss pend  total  inserts man ttl lru  total
---------------------- ----- -------------------- -------- ------------------

ds_core:ecdb              2  52  48   0       83        2   0   0   0        0
```

For each cache, this command prints statistics including the number of elements in the cache (elts), hit rate, number of cache hits and misses during lookups, number of inserts, and number of deletions. The deletions are broken down into entries explicitly (manually) deleted, those deleted due to time-to-live (ttl) expiration as configured via the `match_cache_life` option, and least-recently-used (lru) items deleted due to the cache_size being reached.

<a name="idp11437504"></a>
## See Also

[match_cache_life](conf.ref.match_cache_life.php "match_cache_life")

| [Prev](console_commands.cache_stat.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.config.php) |
| cache stat  | [Table of Contents](index.php) |  config |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)