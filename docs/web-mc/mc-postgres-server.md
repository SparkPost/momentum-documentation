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

| 2.3. Running the PostgreSQL Server |
| [Prev](mc-postgresql.conf.php)  | Chapter 2. Message Central and PostgreSQL |  [Next](mc-postgres-client.php) |

## 2.3. Running the PostgreSQL Server

The PostgreSQL server is installed as a daemon and starts up whenever the system is rebooted. To start the daemon immediately after installation you can issue the command **`/etc/init.d/msyspg start`**       .

### Note

Because web UI credentials are stored in a PostgeSQL database, the PostgreSQL server must be started before you can log in to the web UI.

To determine the options that can be used with the `msyspg` command go to the command line and enter **`/etc/init.d/msyspg`**. You should see the following output:

`Usage: /etc/init.d/msyspg {start|stop|restart}`

Find below a description of the various options:

*   `start` – Start the PostgreSQL server

*   `stop` – Stop the PostgreSQL server

*   `restart` – Restart the PostgreSQL server

Calling this script with the `start` option starts a PostgreSQL server daemon named `msyspg` running at levels 3, 4 and 5.

### 2.3.1. The `pe` Database

### Warning

The schema is described here as an aid to troubleshooting. The documentation of this schema does not constitute an API; the only supported means for interacting with Message Central is via the REST APIs.

We strongly advise against building applications to interface with our schema, and make no guarantees that the schema will remain the same between minor revisions of the product.

Additionally, applications that interface directly with the schema may be incompatible with future upgrades to the version of PostgreSQL used with Message Central.

Installation creates the following schemas within the `pe` database:

```
List of schemas

       Name        |  Owner
-------------------+---------
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
```

The schemas owned by the `msyspg` user are the default schemas found in any PostgreSQL database. The `maincontrol` schema contains information essential to the running of Message Central, such as the VERP domain and database server name supplied during installation. It also contains the functions essential to the running of Message Central.

The `org000001` schema is the default organization schema. Depending upon the nature of your business you may or may not need other organizational schemas.

The `org0000001rel` and the `relational` schemata are used for storing existing customer data that you may have. An org*`number`* and an org*`number`*rel schema is created for every org that you add. To use data from an external data store you must import data into the Messsage Central database. This is described at [Exporting Data from MySQL to PostgreSQL](https://support.messagesystems.com/docs/web-mc-user/mc3-export-data.php).

### Note

Field names in relational tables cannot contain any underscores or they will not work for personalization.

The `scoreboard` schema supports the pg_scoreboard package, an in-memory task tracking system.

| [Prev](mc-postgresql.conf.php)  | [Up](mc-postgresql.php) |  [Next](mc-postgres-client.php) |
| 2.2. The `postgresql.conf` File  | [Table of Contents](index.php) |  2.4. Using the PostgreSQL Client Program |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)