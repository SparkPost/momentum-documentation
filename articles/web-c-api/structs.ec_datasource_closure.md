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

| 68.26. ec_datasource_closure |
| [Prev](structs.ec_datasource_cache_query.php)  | Chapter 68. Structs |  [Next](structs.ec_datasource_query_cache_entry.php) |

## 68.26. ec_datasource_closure

This struct is also typedef'ed as `ec_data_closure`. The struct members are as follows:

```
struct _ec_datasource_closure {
  ec_async_job job;
  int status;
  /* the query: on completion, q.result holds the result; the caller
   * is responsible for delref'ing it */
  struct ec_datasource_cache_query q;
  /* if the status indicates an error, and the caller has set errmsg
   * to a valid string pointer, the error message will be printed
   * to it. */
  string *errmsg;
};
```

To use this struct, include the file `modules/datasource/ecdatasource.h`.

Values for the status field are:

*   `ECDS_QUERY_LIMBO` (0) – uninitialized

*   `ECDS_QUERY_FAIL` (1) – query failed

*   `ECDS_QUERY_OK` (2) – query succeeded

*   `ECDS_QUERY_ASYN` (3) – query queued; will notify when complete

The query status field determines what action to take after executing a query. For more information see [ec_datasource_cache_query](apis.ec_datasource_cache_query.php "ec_datasource_cache_query").

### 68.26.1. See Also

[Section 68.15, “ec_async_job”](structs.ec_async_job.php "68.15. ec_async_job") and [Section 68.25, “ec_datasource_cache_query”](structs.ec_datasource_cache_query.php "68.25. ec_datasource_cache_query")

| [Prev](structs.ec_datasource_cache_query.php)  | [Up](structs.php) |  [Next](structs.ec_datasource_query_cache_entry.php) |
| 68.25. ec_datasource_cache_query  | [Table of Contents](index.php) |  68.27. ec_datasource_query_cache_entry |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)