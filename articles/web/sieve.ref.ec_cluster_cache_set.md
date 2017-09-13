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

| ec_cluster_cache_set |
| [Prev](sieve.ref.ec_cluster_cache_get.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_config.php) |

<a name="sieve.ref.ec_cluster_cache_set"></a>
## Name

ec_cluster_cache_set — Set a value in a cluster-wide replicated cache

## Synopsis

`ec_cluster_cache_set` { *`replication_name`* } { *`key`* } { *`value`* } { *`ttl`* }

<a name="idp13909280"></a>
## Description

`ec_cluster_cache_set` sets the value for the given key and cache name. The `ttl` is a string specifying the number of seconds until the value expires (unless it ends with "H" or "M" for hours or minutes). The value will not expire if the `ttl` is "0".

### Note

This feature requires the cluster module. The cluster configuration stanza must include a `replicate` directive that names this cache. See [Section 7.5.1.6, “Replicated Caches”](cluster.replication.php#cluster.replicatedcache "7.5.1.6. Replicated Caches").

<a name="example.ec_cluster_cache_set"></a>

**Example 15.31. ec_cluster_cache_set example**

`ec_cluster_cache_set "mycache" "mykey" "myvalue" "0";`

| [Prev](sieve.ref.ec_cluster_cache_get.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_config.php) |
| ec_cluster_cache_get  | [Table of Contents](index.php) |  ec_config |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)