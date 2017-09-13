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

| 68.31. ec_hash_table |
| [Prev](structs.ec_hash_iter.php)  | Chapter 68. Structs |  [Next](structs.ec_hook_head.php) |

## 68.31. ec_hash_table

The ec_hash_table struct has the following members:

```
typedef struct _ec_hash_bucket {
  const char *k;
  int klen;
  void *data;
  struct _ec_hash_bucket *next;
} ec_hash_bucket;

struct _ec_hash_table {
  u_int32_t sizeof_ec_hash_table;
  ec_hash_bucket **buckets;
  u_int32_t table_size;
  u_int32_t initval;
  u_int32_t num_used_buckets;
  u_int32_t size;
  unsigned dont_rebucket:1;
  unsigned track_version:1;
  unsigned _spare:30;
  ec_atomic_t ref;
  ECHashFreeFunc key_free, data_free;
  ec_atomic_t version;
};
```

To use this struct, include the file `echash.h`.

### Note

The hash table data structure is not thread safe; any simultaneous access needs to be coordinated by the API consumer.

An ECDict is an ec_hash_table.

### 68.31.1. See Also

[ec_datasource_cache_query](apis.ec_datasource_cache_query.php "ec_datasource_cache_query") and [echash_create](apis.echash_create.php "echash_create")

| [Prev](structs.ec_hash_iter.php)  | [Up](structs.php) |  [Next](structs.ec_hook_head.php) |
| 68.30. ec_hash_iter  | [Table of Contents](index.php) |  68.32. __ec_hook_head |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)