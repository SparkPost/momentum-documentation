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

| 68.25. ec_datasource_cache_query |
| [Prev](structs.ec_data_source_query_cache.php)  | Chapter 68. Structs |  [Next](structs.ec_datasource_closure.php) |

## 68.25. ec_datasource_cache_query

The members of this struct are as follows:

```
struct ec_datasource_cache_query {
  char *query;
  int query_len;
  const char *desired_charset;
  unsigned no_cache:1;
  unsigned no_fetch:1;

  int params_positional; /* if non-zero, holds the number of positional params */
  ecdata_value *positional_params;

  /* if params_positional == 0, then this holds a hash of name => ecdata_value */
  ec_hash_table *params;

  /* after initial processing by the cache layer, this is the serialized
   * representation of the query */
  char *key;
  int key_len;

  /* after a call to _cache_query(), this points at the result from the cache */
  struct ec_datasource_query_cache_entry *result;

  /* reference to the cache this query is/will be associated with */
  ec_data_source_query_cache *cache;
};
```

To use this struct, include the file `modules/datasource/ecdatasource.h`.

### 68.25.1. Typedef

The ec_data_cache_query is a typedef of this struct.

### 68.25.2. See Also

[ec_datasource_cache_query](apis.ec_datasource_cache_query.php "ec_datasource_cache_query"), [Section 68.27, “ec_datasource_query_cache_entry”](structs.ec_datasource_query_cache_entry.php "68.27. ec_datasource_query_cache_entry") [Section 68.24, “ec_data_source_query_cache”](structs.ec_data_source_query_cache.php "68.24. ec_data_source_query_cache") and [Section 68.26, “ec_datasource_closure”](structs.ec_datasource_closure.php "68.26. ec_datasource_closure")

| [Prev](structs.ec_data_source_query_cache.php)  | [Up](structs.php) |  [Next](structs.ec_datasource_closure.php) |
| 68.24. ec_data_source_query_cache  | [Table of Contents](index.php) |  68.26. ec_datasource_closure |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)