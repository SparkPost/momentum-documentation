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

| msys.db.fetch_row |
| [Prev](lua.ref.msys.counter.unlink.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.db.query.php) |

<a name="lua.ref.msys.db.fetch_row"></a>
## Name

msys.db.fetch_row — If successful, return the first row of the query result as a table

<a name="idp17898448"></a>
## Synopsis

`msys.db.fetch_row(cachename, query, queryparams, options);`

```
cachename: string
query: string
queryparams: table, optional
options: table, optional
```
<a name="idp17901520"></a>
## Description

Issue a query to a datasource.

Enable this function with the statement `require('msys.db');` and also include the statement `require('msys.datasource');`.

The parameters are as follows:

*   `cachename` – Name of the datasource cache to be queried

*   `query` – Query to be presented to the cache

    The query may use placeholder characters in the form `:name, ?`, or `$name` depending on the underlying driver. If the `?` placeholder is used, then `queryparams` must be a table with numeric keys, with index `1` corresponding to the first `?` in the query string. Otherwise, the keys must be string keys with names that match up to the defined parameters. For instance, `$name` or `:name` expect to find a parameter in the table using the key name; the leading `$` or `:` is removed before looking up the value.

*   `queryparams` – Lua table object with parameters to bind into the query

    ### Note

    The SQL standard requires the use of the "`IS [NOT] NULL"` syntax in a predicate for matching against `NULL`. A predicate "*`field_name`* = ?" would result in an error if a query parameter is `NULL`. A Lua `nil` is equivalent to an SQL `NULL`.

*   `options` – Lua table object containing additional options that affect this query

    If `options` is specified, it must be a table. The following options are permitted:

    *   `nocache` – Boolean value. If set to `true`, bypass the cache and force the query to be presented to the underlying datasource.

    *   `raise_error` – Boolean value. If set to `true`, raise an exception (lua_error) on error containing the error string. Default value is `true`.

This function returns the following:

*   If query succeeds – Returns the first row of the query results as a table.

*   If the query returns no data – Returns `nil`.

*   If the query fails and `raise_error` is set to `false` – Returns `nil` indicating query failure and `errmsg` indicating what failed.

*   If the query fails and `raise_error` is set to `true` – Raises an exception.

The following is an example:

<a name="lua.ref.msys.db.fetch_row.example"></a>

**Example 70.55. msys.db.fetch_row example**

```
...
  r, e = msys.db.fetch_row (cache, query, nil, { raise_error = false });
  if (r ~= nil) then
    for k, v in pairs(r) do
      print(k, v);
    end
  elseif (e ~= nil) then
    print "Query failed";
  else
    print "No match";
  end
...
```

### Note

The data cache used in the preceding example must be defined in your configuration file. For more information, see [Section 71.29, “ds_core - Datasource Query Core”](modules.ds_core.php "71.29. ds_core - Datasource Query Core").

<a name="idp17939888"></a>
## See Also

[msys.db.query](lua.ref.msys.db.query.php "msys.db.query"), [msys.db.execute](lua.ref.msys.db.execute.php "msys.db.execute"), [Section 62.2, “Policy Scriptlets”](implementing.policy.scriptlets.php "62.2. Policy Scriptlets")

| [Prev](lua.ref.msys.counter.unlink.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.db.query.php) |
| msys.counter.unlink  | [Table of Contents](index.php) |  msys.db.query |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)