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

| ds_fetch_hash |
| [Prev](sieve.ref.ds_fetch_flat.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.ec_action.php) |

<a name="sieve.ref.ds_fetch_hash"></a>
## Name

ds_fetch_hash — query and fetch a row from a datasource, as a hash

## Synopsis

`ds_fetch_hash` { *`cachename`* } { *`query`* } [ *`params`* ]

<a name="idp29110304"></a>
## Description

This function issues a query against a datasource cache. If the data is available in the cache, it will return immediately with the first row of the data. If the data is not cached, the query will be queued to the thread pool and the current Sieve script will be suspended until the query completes. While the Sieve script is suspended, Momentum will continue to schedule other events.

The first row of the data is returned as a hash. The values of the columns are stored in the hash, keyed by the column names. If the datasource can provide multiple values for a column, then the value will be a stringlist containing each possible value for that column, in the order that they were returned from the datasource.

If your query cannot be completed due to an error, the connection validation context variable `datasource_error` will contain the error message. For successful queries, this connection context variable is deleted.

### Note

The ds_core module and datasource drivers are loaded automatically as required and do not need to be explicitly included. See [Section 14.30, “ds_core – Datasource Query Core”](modules.ds_core.php "14.30. ds_core – Datasource Query Core") for more information.

By specifying the optional *`params`* parameter, you can create parameterized queries. Where supported by the underlying datasource driver, parameterized queries are mapped to native prepared statements for more optimal database performance.

Parameterized queries use one of three different kinds of placeholder indicator, depending on the underlying driver. If you want to use the ODBC style `?` parameter marker, then the *`params`* parameter should be a stringlist containing the values to be substituted for each marker.

Alternatively, you may use Oracle style `:name` parameter markers, which are useful for creating more readable queries. If you use these, then *`params`* should be a hash table where the keys of the hash correspond to the names of the parameters; the values in the hash will be substituted for the placeholders.

The last form is similar to Oracle style named markers, except that a dollar sign is used instead of the colon: `$name`. This style of naming is used by datasource drivers where the native query syntax treats the `:` and `?` characters specially. Rather than requiring tedious quoting/escaping of those characters an alternative symbol was chosen.

Most drivers support both `?` and `:name` style parameters. Those that don't, only support the `$name` style. The definitive list of drivers and their supported placeholders can be found in [Section 14.30.3, “Datasource Drivers”](modules.ds_core.php#modules.ds_core.drivers "14.30.3. Datasource Drivers").

<a name="example.ds_fetch_hash"></a>

**Example 16.23. ds_fetch_hash example: fetching data**

```
$prefs = ds_fetch_hash "mssql" "select * from prefs where rcpt = ?"
                  ["%{rcptto_localpart}@%{rcptto_domain}"];

if isset $prefs "antivirus_enable" {
  $enable = $prefs["antivirus_enable"];
  if ec_test "${enable}" :is "1" {
    clamav_avscan;

    if vctx :is "clamav_status" "error" {
      ec_action 451 "temporary issue while running avscan"
            "transient:avscan error %{vctx_mess:clamav_info}";
    }

    if vctx :is "clamav_status" "virus" {
      ec_action 550 text:
5.7.1 rejected by policy: virus.
%{vctx_mess:clamav_info}
.
      "virus:%{vctx_mess:clamav_info}";
    }
  }
}
```

For an explanation of the context variables used in the preceding example see [Section 14.5.1, “antivirus Configuration”](modules.antivirus.php#modules.antivirus.configuration "14.5.1. antivirus Configuration").

<a name="idp29131296"></a>
## See Also

[ds_execute](sieve.ref.ds_execute.php "ds_execute"), [ds_fetch](sieve.ref.ds_fetch.php "ds_fetch"), [ds_fetch_flat](sieve.ref.ds_fetch_flat.php "ds_fetch_flat")

| [Prev](sieve.ref.ds_fetch_flat.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.ec_action.php) |
| ds_fetch_flat  | [Table of Contents](index.php) |  ec_action |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)