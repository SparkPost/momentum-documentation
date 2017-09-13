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

| Chapter 21. Data Drivers |
| [Prev](rest.external.data.retention.php)  |   |  [Next](rest.data.integration.reporting.php) |

## Chapter 21. Data Drivers

**Table of Contents**

<dl class="toc">

<dt>[21.1\. Mailing Data: Accessing External Data](rest.data.integration.php#rest.mailing.data)</dt>

</dl>

`GET /v1.0/mailing/directaccess/drivers`

Enumerates the data drivers available for data integration with external sources, such as ODBC databases.

This API returns an associative array of DataDriver objects, with the driver name (CSV, CSV_ODBC, ODBC) as the key. The following output is displayed when the drivers are requested in XML format:

```
<response>

  <CSV>

    <_docstring> The CSV driver allows you to use CSV files as Message Central (MC) data sources.
      The files are uploaded (but not imported) through the Web UI. </_docstring>

    <_displayorder>
      <csvnames/>
      <colnames/>
      <defaults/>
    </_displayorder>

    <csvnames>
      <type>boolean</type>
      <display>CSV Column Names</display>
      <required>true</required>
      <default>false</default>

      <helpmsg> True if CSV data file contains column names as its first row. </helpmsg>
    </csvnames>

    <colnames>
      <type>array:string</type>
      <display>Column Names</display>
      <required>false</required>

      <when>
        <csvnames>false</csvnames>
      </when>

      <helpmsg> Column names of data provided in the CSV file. Data containing fewer columns than
        specified here will generate an error. Must have the same number of column names as
        defaults. </helpmsg>
    </colnames>

    <defaults>
      <type>array:string</type>
      <display>Column Defaults</display>
      <required>true</required>

      <helpmsg> Values to be used for each column if that column is not available. Must have the
        same number of defaults as column names. </helpmsg>
    </defaults>
  </CSV>

  <CSV_ODBC>

    <_docstring> The CSV_ODBC driver allows you to perform initial targeting using a CSV file. The
      external id value from each CSV row is then used to execute a query against a remote ODBC
      compliant database. The result set returned by that query is then combined with the CSV. </_docstring>

    <_displayorder>
      <csvnames/>
      <item>csv_colnames</item>
      <item>csv_defaults</item>
      <dbdriver/>
      <dbhost/>
      <port/>
      <username/>
      <password/>
      <database/>
      <item>dsn_extra</item>
      <item>data_query</item>
      <item>odbc_colnames</item>
      <item>odbc_defaults</item>
    </_displayorder>

    <csvnames>
      <type>boolean</type>
      <display>CSV Column Names</display>
      <required>true</required>
      <default>false</default>

      <helpmsg> True if CSV data file contains column names as its first row. </helpmsg>
    </csvnames>

    <csv_colnames>
      <type>array:string</type>
      <display>CSV Column Names</display>
      <required>false</required>

      <when>
        <csvnames>false</csvnames>
      </when>

      <helpmsg> Column names of CSV data if not specified in the file. Data containing fewer columns
        than specified here will generate an error. Must have the same number of CSV column names as
        CSV defaults. </helpmsg>
    </csv_colnames>

    <csv_defaults>
      <type>array:string</type>
      <display>CSV Column Defaults</display>
      <required>true</required>

      <helpmsg> Values to be used for each CSV column if that column does not contain a value. Must
        have the same number of CSV defaults as CSV column names. </helpmsg>
    </csv_defaults>

    <dbdriver>
      <type>string</type>
      <display>Database Driver</display>

      <helpmsg> This defaults to the provided driver (MsysFreeTDS). If the system should connect to
        systems not supported by MsysFreeTDS, this option should be customized after installing the
        proper software and making the required system level configuration changes. </helpmsg>
      <default>MsysFreeTDS</default>
      <required>true</required>
      <advanced>true</advanced>
    </dbdriver>

    <dbhost>
      <type>string</type>
      <display>Host</display>
      <required>true</required>

      <helpmsg> The hostname or IP address of the database server to which we should connect. Note
        that this connection will happen from the WebUI server (to validate) and the database server
        (to gather data). </helpmsg>
    </dbhost>

    <port>
      <type>string</type>
      <display>Port</display>
      <required>true</required>
      <helpmsg>The port on dbhost to which we should connect.</helpmsg>
    </port>

    <username>
      <type>string</type>
      <display>Username</display>
      <required>true</required>
      <helpmsg>Credentials to use when connecting to dbhost.</helpmsg>
    </username>

    <password>
      <type>password</type>
      <display>Password</display>
      <required>false</required>
      <helpmsg>Credentials to use when connecting to dbhost.</helpmsg>
    </password>

    <database>
      <type>string</type>
      <display>Database Name</display>
      <required>true</required>

      <helpmsg> The name of the database in dbhost where our query should run. </helpmsg>
    </database>

    <dsn_extra>
      <type>string</type>
      <display>Extra Connection String Data</display>

      <helpmsg> Any additional information that should be sent as part of the connection string. </helpmsg>
      <required>false</required>
      <advanced>true</advanced>
    </dsn_extra>

    <data_query>
      <type>sql:string</type>
      <display>Data Query</display>
      <required>true</required>

      <helpmsg> The query to run once we are connected. Data returned will be mapped onto the
        specified column names. </helpmsg>
    </data_query>

    <odbc_colnames>
      <type>array:string</type>
      <display>ODBC Column Names</display>
      <required>true</required>

      <helpmsg> Column names to assign to data returned from the query. Must have the same number of
        ODBC column names as ODBC defaults </helpmsg>
    </odbc_colnames>

    <odbc_defaults>
      <type>array:string</type>
      <display>ODBC Column Defaults</display>
      <required>true</required>

      <helpmsg> Values to be used for each ODBC column if that column has no value. Must have the
        same number of ODBC defaults as ODBC column names. </helpmsg>
    </odbc_defaults>
  </CSV_ODBC>

  <ODBC>

    <_docstring> The ODBC driver allows you to use SQL queries against ODBC compliant data sources
      as Message Central (MC) data sources. The query and associated connection info must be
      specified at mailing creation time. </_docstring>

    <_displayorder>
      <dbdriver/>
      <dbhost/>
      <port/>
      <username/>
      <password/>
      <database/>
      <item>dsn_extra</item>
      <item>data_query</item>
      <colnames/>
      <defaults/>
    </_displayorder>

    <dbdriver>
      <type>string</type>
      <display>Database Driver</display>

      <helpmsg> This defaults to the provided driver (MsysFreeTDS). If the system should connect to
        systems not supported by MsysFreeTDS, this option should be customized after installing the
        proper software and making the required system level configuration changes. </helpmsg>
      <default>MsysFreeTDS</default>
      <required>true</required>
      <advanced>true</advanced>
    </dbdriver>

    <dbhost>
      <type>string</type>
      <display>Host</display>
      <required>true</required>

      <helpmsg> The hostname or IP address of the database server to which we should connect. Note
        that this connection will happen from the WebUI server (to validate) and the database server
        (to gather data). </helpmsg>
    </dbhost>

    <port>
      <type>string</type>
      <display>Port</display>
      <required>true</required>
      <helpmsg>The port on dbhost to which we should connect.</helpmsg>
    </port>

    <username>
      <type>string</type>
      <display>Username</display>
      <required>true</required>
      <helpmsg>Credentials to use when connecting to dbhost.</helpmsg>
    </username>

    <password>
      <type>password</type>
      <display>Password</display>
      <required>false</required>
      <helpmsg>Credentials to use when connecting to dbhost.</helpmsg>
    </password>

    <database>
      <type>string</type>
      <display>Database Name</display>
      <required>true</required>

      <helpmsg> The name of the database in dbhost where our query should run. </helpmsg>
    </database>

    <dsn_extra>
      <type>string</type>
      <display>Extra Connection String Data</display>

      <helpmsg> Any additional information that should be sent as part of the connection string. </helpmsg>
      <required>false</required>
      <advanced>true</advanced>
    </dsn_extra>

    <data_query>
      <type>sql:string</type>
      <display>Data Query</display>
      <required>true</required>

      <helpmsg> The query to run once we are connected. Data returned will be mapped onto the
        specified column names. </helpmsg>
    </data_query>

    <colnames>
      <type>array:string</type>
      <display>Column Names</display>
      <required>true</required>

      <helpmsg> Column names to assign to data returned from the query. </helpmsg>
    </colnames>

    <defaults>
      <type>array:string</type>
      <display>Column Defaults</display>
      <required>true</required>

      <helpmsg> Values to be used for each column if that column has no value. </helpmsg>
    </defaults>
  </ODBC>
</response>
```

### Note

The `helpmsg` element describes the function of its container element.

For examples of using these drivers see [Section 21.1.1, “Driver Examples”](rest.data.integration.php#rest.mailing.data.driver.examples "21.1.1. Driver Examples").

## 21.1. Mailing Data: Accessing External Data

This section supplements the information provided in [Chapter 21, *Data Drivers*](rest.data.integration.php "Chapter 21. Data Drivers") .

When the `type` field of a mailing is `direct access` (see [Section 25.15, “mailing”](rest.autogen.struct.mailing.php "25.15. mailing")) then recipient information is pulled from an external system using a CSV or ODBC driver. Examples of using the different drivers follow.

### 21.1.1. Driver Examples

The following examples show the various driver requirements in JSON format.

**The CSV Driver**
```
{
  "driver": "CSV",
  "filename": "data.csv",
  "csvnames": true,
  "colnames": [
    "firstname",
    "lastname",
    "emailaddress",
    "gender"
  ],
  "defaults": [
    "Customer",
    "",
    "",
    "U"
  ]
}
```

This example assumes a CSV data file with the following format:

```
"firstname","lastname","emailaddress","gender"
  "Tom","Piperson","tom@test.messagesystems.com","F"
  "Richard","Smith","richard@test.messagesystems.com","F"
  "Harold","Gray","harold@test.messagesystems.com","M"
  ...
```
**The ODBC Driver**
```
{
  "driver": "ODBC",
  "dbhost": "omniti.net",
  "username": "username",
  "password": "password",
  "dbdriver": "MsysFreeTDS",
  "database": "ectest",
  "port": 1433,
  "dsn_extra": "tds_version=7.0;client_charset=utf-8;",
  "data_query": " SELECT recipientid as externalid, firstname, lastname, 
    emailaddress, gender FROM mc_test_recipients ",
  "colnames": [
    "externalid",
    "firstname",
    "lastname",
    "emailaddress",
    "gender"
  ],
  "defaults": [
    -1,
    "Customer",
    "",
    "invalid@example.com",
    "U"
  ]
}
```
**The CSV_ODBC Driver**
```
{
  "driver": "CSV_ODBC",
  "csvnames": true,
  "csv_colnames": [
    "firstname",
    "externalid"
  ],
  "csv_defaults": [
    "Customer",
    ""
  ],
  "dbhost": "pems.int.omniti.net",
  "username": "username",
  "password": "password",
  "dbdriver": "MsysFreeTDS",
  "database": "ectest",
  "port": 1433,
  "dsn_extra": "tds_version=7.0;client_charset=utf-8;",
  "data_query": " SELECT recipientid, lastname, emailaddress, gender FROM 
    mc_test_recipients WHERE lastname = ? ",
  "odbc_colnames": [
    "recipientid",
    "lastname",
    "emailaddress",
    "gender"
  ],
  "odbc_defaults": [
    -1,
    "",
    "invalid\@example.com",
    "U"
  ]
}
```

### 21.1.2. Message Central 3.x Database Fields and Direct Access Mailings

When using a Direct Access mailing, the first name obtained from an external database or CSV file is not the same as the recipient firstname in the Message Central 3.x database. Therefore, using `[%= :prettyTo %]` in the `To:` field of the mailing will always show the default value, '`john`', regardless of who is receiving the mail.

### Warning

`[$= :prettyTo %]` and the other standard recipient fields such as `firstname, lastname, age, gender, address, etc.` do **not** have a value in Direct Access mailing and should not be used in the mailing content.

This warning no longer applies. As of version MC 3.7.0 you can reference column names from an external database (or their aliases), for example, [%= :external_db_field_name %].

For this reason, use the [%= $userinfo->{'*`field`*'} %] syntax when referencing recipient field values. For example use `[%= $userinfo->{'firstname'} %]` to replace a reference to `firstname`.

This is as designed. Except for the email address, the fields in a CSV file or an external database are placed in the Message Central 3.x database as separate fields in the `userinfo` object. There is no attempt to reconcile, for example, that first name in the database is semantically the same as Message Central 3.x's notion of a recipient's first name.

| [Prev](rest.external.data.retention.php)  |   |  [Next](rest.data.integration.reporting.php) |
| 20.3. Retention of External Data  | [Table of Contents](index.php) |  Chapter 22. Data Integration: Reporting |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)