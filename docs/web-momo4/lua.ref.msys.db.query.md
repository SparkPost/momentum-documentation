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

| msys.db.query |
| [Prev](lua.ref.msys.db.fetch_row.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.delivery.ob_get_current_message.php) |

<a name="lua.ref.msys.db.query"></a>
## Name

msys.db.query — Query a datasource

<a name="idp17947840"></a>
## Synopsis

`msys.db.query(cachename, query, queryparams, options);`

```
cachename: string
query: string
queryparams: table, optional
options: table, optional
```
<a name="idp17950912"></a>
## Description

Issue a query to a datasource.

Enable this function with the statement `require('msys.db');` and also include the statement `require('msys.datasource');`.

The parameters are as follows:

*   `cachename` – Name of the datasource cache to be queried

*   `query` – Query to be presented to the cache

    `query` may use placeholder characters in the form `:name, ?` or `$name` depending on the underlying driver. If the `?` placeholder is used, then `queryparams` must be a table with numeric keys, with index `1` corresponding to the first `?` in the query string. Otherwise, the keys must be string keys with names that match up to the defined parameters. For instance, `$name` or `:name` expect to find a parameter in the table using the key name; the leading `$` or `:` is removed before looking up the value.

*   `queryparams` – Lua table object with parameters to bind into the query

    ### Note

    The SQL standard requires the use of the "`IS [NOT] NULL"` syntax in a predicate for matching against `NULL`. A predicate "*`field_name`* = ?" would result in an error if a query parameter is `NULL`. A Lua `nil` is equivalent to an SQL `NULL`.

*   `options` – Lua table object containing additional options that affect this query

    If `options` is specified, it must be a Lua table object. The following options are permitted:

    *   `nocache` – Boolean value. If set to `true`, bypass the cache and force the query to be presented to the underlying datasource.

    *   `raise_error` – Boolean value. If set to `true`, raise an exception (lua_error) on error containing the error string. Default value is `true`.

This function returns the following:

*   If the query succeeds, – Returns `rowiter`, which is an iterator returning the rows.

*   If the query fails and `raise_error` is set to `false` – Returns `nil` indicating query failure and `errmsg` indicating what failed.

*   If the query fails and `raise_error` is set to `true` – Raises an exception.

The idiom for issuing a query and working with the results is as follows:

<a name="lua.ref.msys.db.query.example"></a>

**Example 70.56. msys.db.query example**

```
require('msys.db');
require('msys.datasource');
local rowset, row, err;

...
  rowset, err = msys.db.query('mycache', 'select firstname, lastname from names
  where age < ?', {30});

  if rowset == nil then
    print("ERROR: " .. err);
    return;
  end

  for row in rowset do
    print(row.firstname, row.lastname);
  end
...
```

### Note

The data cache used in the preceding example must be defined in your configuration file. For more information, see [Section 71.29, “ds_core - Datasource Query Core”](modules.ds_core.php "71.29. ds_core - Datasource Query Core").

Each iteration over the returned rowset yields a table with string keys corresponding to the names of the columns from the row. If the driver does not return names, the values are indexed by their ordinal position instead, with the first column at ordinal position `1`. For drivers that can return multiple values for a given named column (such as LDAP), the values may in turn be tables indexed by ordinal position of the sub-value.

<a name="idp17989696"></a>
## See Also

[msys.db.fetch_row](lua.ref.msys.db.fetch_row.php "msys.db.fetch_row"), [msys.db.execute](lua.ref.msys.db.execute.php "msys.db.execute"), [Section 62.2, “Policy Scriptlets”](implementing.policy.scriptlets.php "62.2. Policy Scriptlets")

| [Prev](lua.ref.msys.db.fetch_row.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.delivery.ob_get_current_message.php) |
| msys.db.fetch_row  | [Table of Contents](index.php) |  msys.delivery.ob_get_current_message |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)