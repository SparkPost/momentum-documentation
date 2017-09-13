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

| 4.2. Running the PostgreSQL Server |
| [Prev](msc.postgresql.php)  | Chapter 4. Message Scope and PostgreSQL |  [Next](msc.postgres.client.php) |

## 4.2. Running the PostgreSQL Server

The PostgreSQL server is installed as a daemon and starts up whenever the system is rebooted. To start the daemon immediately after installation you can issue the command **`/etc/init.d/msyspg start`**       . The options used with this command are `start, stop` and `restart`.

### Note

Because web UI credentials are stored in a PostgeSQL database, the PostgreSQL server must be started before you can log in to the Message Scope web UI. The log-in credentials are those created during installation.

Calling this script with the `start` option starts a PostgreSQL server daemon named `msyspg` running at levels 3, 4 and 5.

### 4.2.1. The `ecelerity` Database

### Warning

The database is described here as an aid to troubleshooting. This documentation does not constitute an API.

Installation creates the following schemata within the `ecelerity` database:

```
List of schemata

       Name        |  Owner
-------------------+---------
information_schema | msyspg
mss                | ecuser
pg_catalog         | msyspg
pg_toast           | msyspg
pg_toast_temp_1    | msyspg
public             | msyspg
```

The schemata owned by the `msyspg` user are the default schemata found in any PostgreSQL database. The `mss` schema contains the tables used by the Message Scope web UI.

| [Prev](msc.postgresql.php)  | [Up](msc.postgresql.php) |  [Next](msc.postgres.client.php) |
| Chapter 4. Message Scope and PostgreSQL  | [Table of Contents](index.php) |  4.3. Using the PostgreSQL Client Program |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)