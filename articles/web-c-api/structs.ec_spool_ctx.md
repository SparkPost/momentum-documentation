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

| 68.42. ec_spool_ctx |
| [Prev](structs.ec_scheduler_inst.php)  | Chapter 68. Structs |  [Next](structs.ec_ssl_ctx.php) |

## 68.42. ec_spool_ctx

This struct is defined as follows:

```
struct _ec_spool_ctx {
#ifdef _WIN32
  HANDLE spool_lock;
#else
  int spool_lock;
#endif
  char *base;
  size_t base_length;
  int file_mode;

  /* if 0, we'll use the global message_expiration instead */
  int maximum_retention;
  /** if non zero, we'll always rewrite message ids on import */
  unsigned always_rewrite_mids:1;
  /** if non zero, we'll suppress adding trace headers */
  unsigned suppress_trace_headers:1;

  ec_spool_ctx *next;

  ec_hash_table *spool_hash;
  ec_atomic_t spool_hash_lock;
  ec_hash_table *spool_resources;
  pthread_mutex_t resource_lock;
  ec_spool_ctx_insertion_func on_insert;
  void *on_insert_closure;

  int filtered;
  ec_spool_ctx_io_filter_func filters[EC_SPOOL_FILTER_GROWBUF_READ+1];
  void *filter_ctxs[EC_SPOOL_FILTER_GROWBUF_READ+1];
};
```

To use this struct, include the file `spool.c`.

### 68.42.1. See Also

[ec_spool_ctx_create](apis.ec_spool_ctx_create.php "ec_spool_ctx_create")

| [Prev](structs.ec_scheduler_inst.php)  | [Up](structs.php) |  [Next](structs.ec_ssl_ctx.php) |
| 68.41. ec_scheduler_inst  | [Table of Contents](index.php) |  68.43. ec_ssl_ctx |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)