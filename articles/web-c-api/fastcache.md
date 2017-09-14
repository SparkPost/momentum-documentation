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

| Chapter 25. Fast Cache Functions |
| [Prev](apis.sp_sync_close.php)  | Part II. C API |  [Next](apis.ec_fc_caches_find.php) |

## Chapter 25. Fast Cache Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_fc_caches_find](apis.ec_fc_caches_find.php) — Find a cache with the provided name</dt>

<dt>[ec_fc_caches_purge](apis.ec_fc_caches_purge.php) — Purge all caches</dt>

<dt>[ec_fc_create](apis.ec_fc_create.php) — Returns a new cache with maximum number of entries and a default expiration time</dt>

<dt>[ec_fc_delref](apis.ec_fc_delref.php) — Destroy cache if destruction has been deferred</dt>

<dt>[ec_fc_destroy](apis.ec_fc_destroy.php) — Destroys the cache is no references exist to it</dt>

<dt>[ec_fc_entry_addref](apis.ec_fc_entry_addref.php) — Add a reference to an entry</dt>

<dt>[ec_fc_entry_delref](apis.ec_fc_entry_delref.php) — Delete a reference from an entry, if no references exist then also call the destructor routine</dt>

<dt>[ec_fc_entry_reset](apis.ec_fc_entry_reset.php) — Reset an entry to a known state</dt>

<dt>[ec_fc_init](apis.ec_fc_init.php) — Initializes the faster-cache subsystem</dt>

<dt>[ec_fc_invalidate](apis.ec_fc_invalidate.php) — Remove an entry from the cache and delete the cache reference</dt>

<dt>[ec_fc_invalidate_key](apis.ec_fc_invalidate_key.php) — Remove an entry from the cache with the associated key and key length</dt>

<dt>[ec_fc_load](apis.ec_fc_load.php) — Load an entry from the cache with the provided key and key_length</dt>

<dt>[ec_fc_purge](apis.ec_fc_purge.php) — Quickly purge all items from the cache</dt>

<dt>[ec_fc_purge2](apis.ec_fc_purge2.php) — Quickly purge all items from the cache</dt>

<dt>[ec_fc_purge_time](apis.ec_fc_purge_time.php) — Purge the cache's LRU and expired entries (relative to tv->tv_sec)</dt>

<dt>[ec_fc_set_capacity](apis.ec_fc_set_capacity.php) — Sets a new capacity for a given cache</dt>

<dt>[ec_fc_set_expire](apis.ec_fc_set_expire.php) — Sets a new expiration time for a given cache</dt>

<dt>[ec_fc_stat](apis.ec_fc_stat.php) — Return statistics for given cache</dt>

<dt>[ec_fc_store](apis.ec_fc_store.php) — Store entry in the cache with the provided key and key length</dt>

<dt>[ec_fc_store_expire](apis.ec_fc_store_expire.php) — Store entry in the cache with the provided key, key length and expiration time</dt>

</dl>

| [Prev](apis.sp_sync_close.php)  | [Up](pt.apis.php) |  [Next](apis.ec_fc_caches_find.php) |
| sp_sync_close  | [Table of Contents](index.php) |  ec_fc_caches_find |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)