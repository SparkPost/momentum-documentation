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

| 71.16. cidrdb – CIDRDB |
| [Prev](modules.chunk_logger.php)  | Chapter 71. Modules Reference |  [Next](modules.clamav.php) |

## 71.16. cidrdb – CIDRDB

<a class="indexterm" name="idp20262944"></a>

The cidrdb module exposes scripting functions that check the IP of incoming transactions against CIDR blocks defined within a database, a blacklist for example. For more information on CIDR blocks, see [http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing#CIDR_blocks](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing#CIDR_blocks).

The cidrdb module can query the data source layer or an RBLDNSD-format data file. When using the data source layer, the cidrdb module requires a previous ds_core instantiation with the uri pointing to the database that contains the table from which the CIDR blocks are drawn. For more information, see [Section 71.29, “ds_core - Datasource Query Core”](modules.ds_core.php "71.29. ds_core - Datasource Query Core").

### 71.16.1. Configuration

This module is loaded automatically as required and does not need to be explicitly included.

### 71.16.2. Datasource Scope

When using the data source layer as the source for the CIDR data, ensure that you have disabled the limit on the number of rows returned in a data source query by setting `max_rows` to `-1` as shown in the following:

<a name="example.cidrdb.csv"></a>

**Example 71.27. Specifying a Datasource**

```
Datasource "csv" {
    uri = "csv:"
    max_rows = -1
}
```

### 71.16.3. Lua Functions

This module makes the following Lua functions available:

*   [msys.cidr.define](lua.ref.msys.cidr.define.php "msys.cidr.define")

*   [msys.cidr.query](lua.ref.msys.cidr.query.php "msys.cidr.query")

*   [msys.cidr.reload](lua.ref.msys.cidr.reload.php "msys.cidr.reload")

### 71.16.4. Console Commands

The cidrdb module can be controlled through the `ec_console`. The following commands are available:

<dl class="variablelist">

<dt>cidrdb reload <listname></dt>

<dd>

The reload action will trigger an immediate reload of the specified list.

</dd>

<dt>cidrdb list</dt>

<dd>

List configured CIDR databases. This command outputs:

*`cidr_name`* [refresh in *`secs`* seconds]

To list configured CIDR databases in XML format use **`xml cidrdb list`**             . This command outputs the cidr_name, the refresh interval, and the number of seconds until the next refresh.

</dd>

</dl>

| [Prev](modules.chunk_logger.php)  | [Up](modules.php) |  [Next](modules.clamav.php) |
| 71.15. chunk_logger Module  | [Table of Contents](index.php) |  71.17. clamav – ClamAV |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)