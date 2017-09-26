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

| Chapter 2. Message Central and PostgreSQL |
| [Prev](mc-start-services.php)  |   |  [Next](mc-postgresql.conf.php) |

## Chapter 2. Message Central and PostgreSQL

**Table of Contents**

<dl class="toc">

<dt>[2.1\. PostgreSQL Version Upgrade](mc-postgresql.php#mc-postgresql.version)</dt>

<dt>[2.2\. The `postgresql.conf` File](mc-postgresql.conf.php)</dt>

<dt>[2.3\. Running the PostgreSQL Server](mc-postgres-server.php)</dt>

<dt>[2.4\. Using the PostgreSQL Client Program](mc-postgres-client.php)</dt>

<dt>[2.5\. Database Maintenance](mc-postgres-maintenance.php)</dt>

<dt>[2.6\. The PostgreSQL Log File](mc-postgres-log-file.php)</dt>

</dl>

The data store used with Message Central is a PostgreSQL database. The name of this database is specified during installation and has a default value of `pe`. If you did not use the default, you can determine the database name by checking the `postgres.connect_string` parameter in the `pe2.conf` file. For the location of this file see [Section 9.1, “Files Used by All Components”](mc-logs-files.php#mc-logs-all-components "9.1. Files Used by All Components").

The root database directory for PostgreSQL is `/var/db/msyspg`. This directory also contains the database configuration file and the PID file.

## 2.1. PostgreSQL Version Upgrade

As of version 3.4, Message Central has been upgraded to PostgreSQL version 9 from version 8.

### Note

If you are upgrading from an earlier version of Message Central, the process should be seamless. However, **we strongly recommend that anyone doing the migration back up the database** .

| [Prev](mc-start-services.php)  |   |  [Next](mc-postgresql.conf.php) |
| 1.7. Services  | [Table of Contents](index.php) |  2.2. The `postgresql.conf` File |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)