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

| 9.3. PostgreSQL Files |
| [Prev](msc.files.ini.php)  | Chapter 9. Files Associated with the Message Scope Web UI |  [Next](msc.logs.webui.php) |

## 9.3. PostgreSQL Files

Find below the default location of the Message Scope PostgreSQL files.

<a name="table.msc.files.postgres"></a>

**Table 9.1. PostgreSQL files**

| Description | Location |
| --- | --- |
| Configuration File | `/var/db/msyspg/postgresql.conf` |
| Log Files Directory | `/var/db/msyspg/pg_log` |
| File system location of the database files | `/var/db/msyspg` |
| PID file | `/var/run/postmaster.pid` |
| The PostgreSQL client | `/opt/msys/3rdParty/bin/psql` |
| The PostgreSQL daemon | `/etc/init.d/msyspg` |
| The PostgreSQL daemon log file | `/var/log/msyspg/postgresql.log` |

| [Prev](msc.files.ini.php)  | [Up](msc.files.php) |  [Next](msc.logs.webui.php) |
| 9.2. The Message Scope .ini Files  | [Table of Contents](index.php) |  9.4. The Message Scope Web Server Files |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)