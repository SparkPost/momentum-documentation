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

| 9.2. The Message Scope .ini Files |
| [Prev](msc.files.php)  | Chapter 9. Files Associated with the Message Scope Web UI |  [Next](msc.files.postgres.php) |

## 9.2. The Message Scope .ini Files

The `.ini` configuration files are created during installation and are found in the `/opt/msys/scope/www/config` directory. The files are as follows:

*   `db.ini` – the Data Source Name (DSN) for the Message Scope database

*   `export.ini` – when exporting a search result or a message trace, you will receive a warning when you reach or exceed maximum number of hits defined in this file

*   `momentum.ini` – identifies the hostname or IP address and the username of Momentum nodes

*   `search.ini` – identifies the hostname or IP address and port of the nodes that perform the search function

*   `drivers.ini` – the driver files for Message Scope. You only need to alter this file if you are defining custom behaviors as described in [Appendix A, *The APIs for adding Custom Behavior*](msc.custom.behavior.php "Appendix A. The APIs for adding Custom Behavior") .

*   `httpd.conf` – Message Scope web UI configuration file

| [Prev](msc.files.php)  | [Up](msc.files.php) |  [Next](msc.files.postgres.php) |
| Chapter 9. Files Associated with the Message Scope Web UI  | [Table of Contents](index.php) |  9.3. PostgreSQL Files |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)