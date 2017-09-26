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

| 9.5. PostgreSQL Files |
| [Prev](mc-logs-mcsched.php)  | Chapter 9. Files Associated with Message Central |  [Next](mc-logs-web-ui.php) |

## 9.5. PostgreSQL Files

Find below the default location of the Message Central PostgreSQL files.

<a name="table.mc.postgresql.files"></a>

**Table 9.1. PostgreSQL files**

| Description | Location |
| --- | --- |
| Configuration File | `/var/db/msyspg/postgresql.conf` |
| Log Files Directory | `/var/db/msyspg/pg_log` |
| File system location of the database files | `/var/db/msyspg` |
| PID file | `/var/run/postmaster.pid` |
| The PostgreSQL client | `/opt/msys/3rdParty/bin/psql` |
| Starting the PostgreSQL daemon | `/etc/init.d/msyspg` |

| [Prev](mc-logs-mcsched.php)  | [Up](mc-logs-files.php) |  [Next](mc-logs-web-ui.php) |
| 9.4. The `pe2sched` Component File  | [Table of Contents](index.php) |  9.6. The Web UI Files |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)