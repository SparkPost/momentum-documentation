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

| 68.27. ec_datasource_query_cache_entry |
| [Prev](structs.ec_datasource_closure.php)  | Chapter 68. Structs |  [Next](structs.ec_datasource_value_iterator.php) |

## 68.27. ec_datasource_query_cache_entry

The struct members are as follows:

```
struct ec_datasource_query_cache_entry {
  /* the generic cache and cache element we're stored in */
  ec_cache_t *cache;
  ec_cache_elt *elt;

  /* the result data */
  int nrows;
  ec_hash_table **rows;

  /* column information.  This may be NULL for some sources
   * (notably LDAP) where the result data can have wildly changing
   * structure.
   * When set, colnames contains the names of the columns in the
   * order that they appear in the result set. */
  int ncols;
  char **colnames; /* may be NULL for some sources */
};
```

To use this struct, include the file `modules/datasource/ecdatasource.h`.

The members of the `ec_cache_elt` struct are as follows:

```
typedef struct ec_cache_element ec_cache_elt;
typedef struct ec_cache_head    ec_cache_t;
typedef void (*ec_cache_elt_dtor_func)(void *value);

struct ec_cache_element {
  char *key;
  void *value;
  ec_atomic_t ref;
  int keylen;
  /* last use time */
  time_t last;
  /* time at which this element expires */
  time_t expiry_time;

  /* this represents the actual cache entry */
  ec_fc_entry_t entry;
  ec_cache_elt_dtor_func dtor;
};
```

To use this struct, include the file `modules/datasource/ecdatasource.h`.

Members of the `ec_cache_elt` struct are as follows:

```
struct ec_cache_head {
  unsigned int max_size;
  unsigned int max_life;
  ec_cache_stats2 stats;
  ec_cache_elt_dtor_func dtor;
  pthread_rwlock_t lock;
  Skiplist cache;
  ec_hash_table pending;
  char *name;
  Event *e;
  ec_fc_t *fc;
};
```

To use this struct, include the file `modules/datasource/ecdatasource.h`.

The ec_fc struct is also typedef'ed as `ec_fc_t`. The struct members are as follows:

```
struct ec_fc {
  char *name;
  unsigned int name_generate;
  struct timeval create;

  unsigned int capacity;
  unsigned int expire;

  ec_fc_entry_dtor destroy_entry;

  struct ec_fc_fifo lru;

  struct ec_fc_fifo *timer;
  uint32_t timer_length;
  uint32_t timer_mask;

  struct ec_fc_st st;

  ck_spinlock_t mutex;

  ck_ht_t key_index;

  ec_atomic_t refs;

  /* XXX: To be removed. */
  void *container;
} CK_CC_CACHELINE;
```

To use this struct, include the file `modules/datasource/ecdatasource.h`.

### 68.27.1. See Also

[ec_datasource_cache_delref](apis.ec_datasource_cache_delref.php "ec_datasource_cache_delref") and [ec_datasource_cache_query](apis.ec_datasource_cache_query.php "ec_datasource_cache_query")

| [Prev](structs.ec_datasource_closure.php)  | [Up](structs.php) |  [Next](structs.ec_datasource_value_iterator.php) |
| 68.26. ec_datasource_closure  | [Table of Contents](index.php) |  68.28. ec_datasource_value_iterator |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)