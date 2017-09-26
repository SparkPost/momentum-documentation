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

| ec_datasource_cache_query |
| [Prev](apis.ec_datasource_cache_delref.php)  | Chapter 16. Datasource Functions |  [Next](apis.ec_datasource_destroy_query.php) |

<a name="apis.ec_datasource_cache_query"></a>
## Name

ec_datasource_cache_query — Execute a query against a datasource cache

## Synopsis

`#include "modules/datasource/ecdatasource.h"`

| `(int) **ec_datasource_cache_query** (` | <var class="pdparam">cachename</var>, |   |
|   | <var class="pdparam">query</var>, |   |
|   | <var class="pdparam">params</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`const char * <var class="pdparam">cachename</var>`;
`const char * <var class="pdparam">query</var>`;
`ECDict <var class="pdparam">params</var>`;
`ec_datasource_closure * <var class="pdparam">closure</var>`;<a name="idp22130784"></a>
## Description

Execute a query against a datasource cache.

When you are done, call [ec_datasource_cache_delref](apis.ec_datasource_cache_delref.php "ec_datasource_cache_delref") on any results and destroy your query using [ec_datasource_destroy_query](apis.ec_datasource_destroy_query.php "ec_datasource_destroy_query").

**Parameters**

<dl class="variablelist">

<dt>cachename</dt>

<dd>

A pointer to the datasource cache.

</dd>

<dt>query</dt>

<dd>

A pointer to the query that will be executed.

</dd>

<dt>params</dt>

<dd>

An ECDict of the query parameters. An ECDict is an [ec_hash_table](structs.ec_hash_table.php "68.31. ec_hash_table") struct.

</dd>

<dt>closure</dt>

<dd>

A pointer to the [Section 68.26, “ec_datasource_closure”](structs.ec_datasource_closure.php "68.26. ec_datasource_closure") struct that holds the result set and the completion routine.

</dd>

</dl>

**Return Values**

The int returned is one of the following values:

*   `ECDS_QUERY_LIMBO`

*   `ECDS_QUERY_FAIL`

*   `ECDS_QUERY_OK`

*   `ECDS_QUERY_ASYNC`

When `ECDS_QUERY_OK` is returned, you can access the result field of the [Section 68.25, “ec_datasource_cache_query”](structs.ec_datasource_cache_query.php "68.25. ec_datasource_cache_query") struct immediately.

In the event that the query is asynchronous—it returns `ECDS_QUERY_ASYNC`—your callback function is called with the results. Prepare the query with a completion routine by setting the `job` field of the ec_data_closure struct. The `job` field is a struct described at [ec_async_job](structs.ec_async_job.php "68.15. ec_async_job").

### Note

A query can only be asynchronous if the function calling `ec_datasource_cache_query` is capable of going asynchronous. This requires contextual knowledge about where the query is being executed.

The following code snippet shows how an ec_datasource_closure might be initialized:

<a name="apis.ec_datasource_cache_query.closure.example"></a>

**Example 16.1. ec_datasource_cache_query example**

```
ec_datasource_closure *dsc;
dsc = ec_malloc_size(memtype_campaign_vsize, sizeof(*dsc));
memset(dsc, 0, sizeof(*dsc));

dsc->job.completion = ECTP_COMPLETE_CALLBACK;
dsc->job.r.cb.func = completion;
dsc->job.r.cb.closure = closure;
dsc->job.job_class = ECTP_CLASS_IO;
dsc->errmsg = erroutput;
```

**Threading**

It is legal to call this function in any thread.

<a name="idp22160640"></a>
## See Also

[Section 68.27, “ec_datasource_query_cache_entry”](structs.ec_datasource_query_cache_entry.php "68.27. ec_datasource_query_cache_entry"), [Section 68.24, “ec_data_source_query_cache”](structs.ec_data_source_query_cache.php "68.24. ec_data_source_query_cache") and [Section 68.31, “ec_hash_table”](structs.ec_hash_table.php "68.31. ec_hash_table")

| [Prev](apis.ec_datasource_cache_delref.php)  | [Up](datasource.php) |  [Next](apis.ec_datasource_destroy_query.php) |
| ec_datasource_cache_delref  | [Table of Contents](index.php) |  ec_datasource_destroy_query |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)