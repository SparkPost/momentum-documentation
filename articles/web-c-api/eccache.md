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

| Chapter 21. ec_cache Functions |
| [Prev](apis.dns_get_domain.php)  | Part II. C API |  [Next](apis.ec_cache_create.php) |

## Chapter 21. ec_cache Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_cache_create](apis.ec_cache_create.php) — Create a cache with `max_elts`</dt>

<dt>[ec_cache_create2](apis.ec_cache_create2.php) — Create a cache with `max_elts`</dt>

<dt>[ec_cache_delete](apis.ec_cache_delete.php) — Delete an item determined by `key` from a cache</dt>

<dt>[ec_cache_delref](apis.ec_cache_delref.php) — Delete a reference from a cached item determined by `elt` in a cache</dt>

<dt>[ec_cache_destroy](apis.ec_cache_destroy.php) — Purge all entries from the cache and free all memory allocated to it</dt>

<dt>[ec_cache_find](apis.ec_cache_find.php) — Find a cache item determined by a `key`</dt>

<dt>[ec_cache_get_stats](apis.ec_cache_get_stats.php) — Get cache statistics (deprecated)</dt>

<dt>[ec_cache_get_stats2](apis.ec_cache_get_stats2.php) — get cache statistics</dt>

<dt>[ec_cache_get_stats_by_name](apis.ec_cache_get_stats_by_name.php) — get cache statistics for a named cache</dt>

<dt>[ec_cache_insert](apis.ec_cache_insert.php) — Insert a key/value pair into a cache</dt>

<dt>[ec_cache_purge](apis.ec_cache_purge.php) — Explicitly remove elements from the cache</dt>

<dt>[ec_cache_resolve](apis.ec_cache_resolve.php) — Look up an element from the cache</dt>

<dt>[ec_cache_resolver_delref](apis.ec_cache_resolver_delref.php) — Release a resolver object reference</dt>

<dt>[ec_cache_resolver_run_on_completion](apis.ec_cache_resolver_run_on_completion.php) — Schedule a function to run when the resolver completes</dt>

<dt>[ec_cache_resolver_set_complete](apis.ec_cache_resolver_set_complete.php) — Stores the resolved cache element in the resolver</dt>

<dt>[ec_cache_resolver_wait_for_completion](apis.ec_cache_resolver_wait_for_completion.php) — Blocks the caller until cache resolution completes</dt>

<dt>[ec_cache_resolver_wake_on_completion](apis.ec_cache_resolver_wake_on_completion.php) — Allows a thread to block, pending completion of the cache resolution</dt>

</dl>

A common requirement for high performance modules is to cache information that is expensive to obtain. The generic cache implementation in Momentum operates by having an upper bound on the number of elements to be stored in a cache, pushing out the least recently used item when an insert is made and the cache is full. You may optionally set a time-to-live for the cache; elements that have been stored in the cache for longer than the time-to-live will, periodically, be expired from the cache.

The APIs documented here relate to the [cache list](https://support.messagesystems.com/docs/web-ref/console_commands.cache_list.php) console command.

| [Prev](apis.dns_get_domain.php)  | [Up](pt.apis.php) |  [Next](apis.ec_cache_create.php) |
| dns_get_domain  | [Table of Contents](index.php) |  ec_cache_create |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)