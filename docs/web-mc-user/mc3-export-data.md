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

| Appendix B. Exporting Data from MySQL to PostgreSQL |
| [Prev](mc3-content-conditional-fields.php)  |   |  [Next](mc3-role-permissions.php) |

## Exporting Data from MySQL to PostgreSQL

This appendix outlines the steps required to export data from a MySQL database and import that data into PostgreSQL so that it is accessible when creating relations.

Use the **mysqldump** command to dump data from an existing database:

shell> mysqldump *`db_name tbl_name`*           --skip-opt --no-create-info > dump.sql
### Note

Depending upon your configuration settings, you may also need to specify a username, hostname and password in addition to the parameters shown in the preceding example.

The mysqldump command exports data from `tbl_name` in the database specified by `db_name`. The standard MySQL options are turned off by the `--skip-opt` option and no table creation statement is generated.

When used as shown above, the mysqldump command outputs data as a series of `INSERT` statements as shown below:

```
INSERT INTO "members" VALUES (1,'Patricia','Wright','pat@myisp.com','soccer','Detroit','MI','');
INSERT INTO "members" VALUES (2,'Melissa','Jones','mel@myisp.com','baseball','Traverse City','MI','');
...
```

Copy the data file to a temporary directory on the machine hosting the Message Central database:

shell> scp dump.sql root@*`db_host`*:/var/tmp

Go to the command line on the machine hosting the Message Central database, navigate to the directory where you copied the data file and open the PostgreSQL client:

```
shell> cd /var/tmp
shell> /opt/msys/3rdParty/bin/psql pe --user=ecuser --password
```

### Note

Message Systems does not provide support for the use of any third party tools included or referenced by name within our products or product documentation; support is the sole responsibility of the third party provider.

You will be prompted for your password. If you successfully log in to the client you should see output such as the following:

```
Password for user ecuser:
SET
psql (9.0.4)
Type "help" for help.
```

You can confirm that you are using the `pe` database by issuing the **\dn** command. You should see output such as the following:

```
List of schemas
        Name        | Owner
--------------------+--------
 information_schema | msyspg
 maincontrol        | ecuser
 org0000001         | ecuser
 org0000001rel      | ecuser
 pg_catalog         | msyspg
 pg_toast           | msyspg
 pg_toast_temp_1    | msyspg
 public             | msyspg
 relational         | ecuser
 scoreboard         | ecuser
(10 rows)
```

To add a table that is accessible to all orgs, you must add it to the `relational` schema. For ease of use, set the `SEARCH_PATH` variable to `relational`. (For data accessible only to org1, use `org0000001rel`.)

`pe-# SET SEARCH_PATH TO relational;`

Tables in the relational schema can be used by any org. This table needs to accommodate the exported data and should have the same name as the original table. Create the table issuing a DDL statement such as the following:

```
pe-# CREATE TABLE members (id INTEGER PRIMARY KEY, first CHAR(100), last CHAR(100),
 email CHAR(100), sport CHAR(100), city CHAR(100), state CHAR(50), zip CHAR(40));
```

Confirm creation of the table in the following way:

```
pe=# \dt
           List of relations
   Schema   |  Name   | Type  | Owner
------------+---------+-------+--------
 relational | members | table | ecuser
(1 row)
```

You can now import the data into the newly created table:

```
pe=# \i dump.sql
INSERT 0 1
INSERT 0 1
INSERT 0 1
INSERT 0 1
INSERT 0 1
INSERT 0 1
INSERT 0 1
...
```

### Note

The `dump.sql` file must be in the current directory for the **`\i dump.sql`**           command to execute.

Confirm that the data has been inserted into a table in the "relational" schema by selecting from the table:

`pe=# SELECT * FROM members;`

This should display all the records in the table.

Open the Message Central web UI and navigate to the RELATIONAL DATA page. Click the NEW RELATION button and you should find the imported table in the Target Table drop down list box:

<a name="figure-relations-table"></a>

**Figure B.1. External table**

![External table](images/relational_table.jpg)

| [Prev](mc3-content-conditional-fields.php)  |   |  [Next](mc3-role-permissions.php) |
| Appendix A. Fields Used in Conditional Content  | [Table of Contents](index.php) |  Appendix C. Role Permissions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)