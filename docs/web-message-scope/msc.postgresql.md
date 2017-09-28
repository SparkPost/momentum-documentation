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

| Chapter 4. Message Scope and PostgreSQL |
| [Prev](modules.msc_logger.lua.php)  |   |  [Next](msc.postgres.server.php) |

## Chapter 4. Message Scope and PostgreSQL

**Table of Contents**

<dl class="toc">

<dt>[4.1\. The `postgresql.conf` File](msc.postgresql.php#msc.postgresql.conf)</dt>

<dt>[4.2\. Running the PostgreSQL Server](msc.postgres.server.php)</dt>

<dt>[4.3\. Using the PostgreSQL Client Program](msc.postgres.client.php)</dt>

<dt>[4.4\. Database Maintenance](msc.postgres.maintenance.php)</dt>

<dt>[4.5\. The PostgreSQL Log File](msc.postgres.log.file.php)</dt>

</dl>

The data store used with the Message Scope web UI is a PostgreSQL database. The database name is `ecelerity` and is installed when the 'database' role is chosen during installation.

The root database directory for PostgreSQL is `/var/db/msyspg`. This directory also contains the configuration file and the PID file.

### Note

This chapter applies to the database associated with the Message Scope web UI only. For information about the PostgreSQL database used by Momentum see "[PostgreSQL](https://support.messagesystems.com/docs/web-ref/operations.postgresql.php)".

## 4.1. The `postgresql.conf` File

The PostgreSQL configuration file is found in the `/var/db/msyspg` directory.

The logging options set in the configuration file are discussed in [Section 4.5, “The PostgreSQL Log File”](msc.postgres.log.file.php "4.5. The PostgreSQL Log File").

| [Prev](modules.msc_logger.lua.php)  |   |  [Next](msc.postgres.server.php) |
| 3.6. Lua Usage  | [Table of Contents](index.php) |  4.2. Running the PostgreSQL Server |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)