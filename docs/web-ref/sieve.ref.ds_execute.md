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

| ds_execute |
| [Prev](sieve.ref.disclaimer_add.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.ds_fetch.php) |

<a name="sieve.ref.ds_execute"></a>
## Name

ds_execute — execute a query on a datasource

## Synopsis

`ds_execute` { *`cachename`* } { *`query`* } [ *`params`* ]

<a name="idp28999056"></a>
## Description

This function executes a query that does not return a result set. The query will be queued to the thread pool and the current Sieve script will be suspended until the query completes. While the Sieve script is suspended, Momentum will continue to schedule other events.

If you need to execute a query that fetches a row or all rows from a datasource, you need to use [ds_fetch](sieve.ref.ds_fetch.php "ds_fetch"), [ds_fetch_hash](sieve.ref.ds_fetch_hash.php "ds_fetch_hash"). or [ds_fetch_flat](sieve.ref.ds_fetch_flat.php "ds_fetch_flat").

### Note

The ds_core module and datasource drivers are loaded automatically as required and do not need to be explicitly included. See [Section 14.30, “ds_core – Datasource Query Core”](modules.ds_core.php "14.30. ds_core – Datasource Query Core") for more information.

By specifying the optional *`params`* parameter, you can create parameterized queries. Where supported by the underlying datasource driver, parameterized queries are mapped to native prepared statements for more optimal database performance.

Parameterized queries use one of three different kinds of placeholder indicator, depending on the underlying driver. If you want to use the ODBC style `?` parameter marker, then the *`params`* parameter should be a stringlist containing the values to be substituted for each marker.

Alternatively, you may use Oracle style `:name` parameter markers, which are useful for creating more readable queries. If you use these, then *`params`* should be a hash table where the keys of the hash correspond to the names of the parameters; the values in the hash will be substituted for the placeholders.

The last form is similar to Oracle style named markers, except that a dollar sign is used instead of the colon: `$name`. This style of naming is used by datasource drivers where the native query syntax treats the `:` and `?` characters specially. Rather than requiring tedious quoting/escaping of those characters an alternative symbol was chosen.

Most drivers support both `?` and `:name` style parameters. Those that don't, only support the `$name` style. The definitive list of drivers and their supported placeholders can be found in [Section 14.30.3, “Datasource Drivers”](modules.ds_core.php#modules.ds_core.drivers "14.30.3. Datasource Drivers").

<a name="example.ds_execute"></a>

**Example 16.20. ds_execute example: executing query**

```
if size :over 1M {
  ($deny) = ds_fetch "mssql" "select deny from LargeMsgSender where sender = ?"
               ["%{vctx_mess:mailfrom_localpart}@%{vctx_mess:mailfrom_domain}"];
  #cache_life should be 0 for real-time check;
  if ec_test :is "${deny}" "1" {
    ec_action 550 "5.7.1 sender rejected by policy";
  } else {
    ds_execute "mssql" "insert into LargeMsgSender values (1, ?)"
               ["%{vctx_mess:mailfrom_localpart}@%{vctx_mess:mailfrom_domain}"];
    ec_action 550 "5.7.1 sender rejected by policy";
  }
}
```

<a name="idp29018688"></a>
## See Also

[ds_fetch](sieve.ref.ds_fetch.php "ds_fetch"). [ds_fetch_flat](sieve.ref.ds_fetch_flat.php "ds_fetch_flat"). [ds_fetch_hash](sieve.ref.ds_fetch_hash.php "ds_fetch_hash").

| [Prev](sieve.ref.disclaimer_add.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.ds_fetch.php) |
| disclaimer_add  | [Table of Contents](index.php) |  ds_fetch |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)