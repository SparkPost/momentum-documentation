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

| 68.24. ec_data_source_query_cache |
| [Prev](structs.ec_config_value.php)  | Chapter 68. Structs |  [Next](structs.ec_datasource_cache_query.php) |

## 68.24. ec_data_source_query_cache

The members of this struct are as follows:

```
struct ec_data_source_query_cache {
  ec_cache_t *dbcache;
  u_int32_t cache_life;
  u_int32_t cache_size;
  int serialized; /* use cluster replication for the cache */
  int no_cache; /* don't use the cache, pass everything to backend */
  char *name;
  ec_ptr_array uris;
  ec_atomic_t last_uri;
  struct ec_datasource_driver_record *rec; /* private state */
  char *charset; /* charset to assume for data, if the driver doesn't specify */
  int32_t max_rows; /* maximum number of rows to fetch and cache */
  ECDict confdict;
  /* @since 3.0.15 */
  int jobclass;
};
```

To use this struct, include the file `modules/datasource/ecdatasource.h`.

### 68.24.1. See Also

[ec_datasource_cache_query](apis.ec_datasource_cache_query.php "ec_datasource_cache_query") and [Section 68.26, “ec_datasource_closure”](structs.ec_datasource_closure.php "68.26. ec_datasource_closure")

| [Prev](structs.ec_config_value.php)  | [Up](structs.php) |  [Next](structs.ec_datasource_cache_query.php) |
| 68.23. ec_config_value  | [Table of Contents](index.php) |  68.25. ec_datasource_cache_query |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)