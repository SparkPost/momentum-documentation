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

| msys.db.execute |
| [Prev](lua.function.details.php)  | 15.2. Lua Functions |  [Next](lua.ref.ac_esmtp_capability_add.php) |

<a name="lua.ref.msys.db.execute"></a>
## Name

msys.db.execute — Execute a query that is not expected to return data

<a name="idp23329664"></a>
## Synopsis

```
require('msys.db')
require('msys.datasource')
```

`success, errmsg = msys.db.execute(cachename, query, queryparams, options);`

```
cachename: string
query: string
queryparams: table (optional)
options: table (optional)
```
<a name="idp23333104"></a>
## Description

Execute a query that is not expected to return data. The parameters are as follows:

*   `cachename` the name of the datasource cache to be queried

*   `query` the query to be presented to the cache

    The query may use placeholder characters in the form `:name, ?` or `$name` depending on the underlying driver. If the `?`placeholder is used, then `queryparams` must be a table with numeric keys, with index `1` corresponding to the first `?` in the query string. Otherwise, the keys must be string keys with names that match up to the defined parameters. For instance, `$name` or `:name` expect to find a parameter in the table using the key name; the leading `$` or `:` is removed before looking up the value.

*   `queryparams` a Lua table object with parameters to bind into the query

    ### Note

    The SQL standard requires the use of the "`IS [NOT] NULL"` syntax in a predicate for matching against `NULL`. A predicate "*`field_name`* = ?" would result in an error if a query parameter is `NULL`. A Lua `nil` is equivalent to an SQL `NULL`.

*   `options` a Lua table object containing additional options that affect this query.

If `options` is specified, it must be a table. The following options are permitted:

*   `nocache` This is a boolean. If set to `true`, bypass the cache and force the query to be presented to the underlying datasource.

*   `raise_error` This is a boolean. If set to `true`, raise an exception (lua_error) on error containing the error string. The default value is `true`.

If the query succeeds, it returns `true`.

If the query fails, it returns `false`. In this case, a second return value, `errmsg`, is a string indicating what failed.

If the query fails and `raise_error` is set to `true` an exception is raised.

The idiom for issuing a query and working with the results is:

<a name="lua.ref.msy.db.execute.example"></a>

**Example 15.1. lua.ref.msy.db.execute example**

```
require('msys.datasource');
require('msys.db');

local success, errmsg;
local cache, query, raise_error;
...

  success, errmsg = msys.db.execute (cache, query, nil, { raise_error = false });
  if (success == true) then
    print ("Query succeeded");
  elseif (success == false) then
    print ("Query failed: " .. errmsg);
  else
    print ("Unknown state");
  end
...
```

### Note

The data cache used in the preceding example must be defined in your configuration file. For more information see [Section 14.30, “ds_core – Datasource Query Core”](modules.ds_core.php "14.30. ds_core – Datasource Query Core").

<a name="idp23362976"></a>
## See Also

[msys.db.query](lua.ref.msys.db.query.php "msys.db.query"), [msys.db.fetch_row](lua.ref.msys.db.fetch_row.php "msys.db.fetch_row"), [Section 5.2, “Implementing Policy Using Scriptlets”](implementing.policy.scriptlets.php "5.2. Implementing Policy Using Scriptlets")

| [Prev](lua.function.details.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.ac_esmtp_capability_add.php) |
| 15.2. Lua Functions  | [Table of Contents](index.php) |  ac:esmtp_capability_add |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)