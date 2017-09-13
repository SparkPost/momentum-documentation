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

| 29.2. Running the PostgreSQL Server |
| [Prev](postgresql.php)  | Chapter 29. PostgreSQL |  [Next](postgresql.client.php) |

## 29.2. Running the PostgreSQL Server

<a class="indexterm" name="idp3925776"></a>

The PostgreSQL server is installed as a daemon and starts up whenever the system is rebooted. To start the PostgreSQL server immediately after installation, issue the command

`shell> /etc/init.d/msyspg start`

To determine the options that can be used with the `msyspg` command, issue the command

`shell> /etc/init.d/msyspg`

The following output is displayed:

`Usage: {start|stop|restart}`

where

*   `start` – Start the PostgreSQL server daemon named `msyspg` running at levels 3, 4 and 5

*   `stop` – Stop the PostgreSQL server

*   `restart` – Restart the PostgreSQL server

| [Prev](postgresql.php)  | [Up](postgresql.php) |  [Next](postgresql.client.php) |
| Chapter 29. PostgreSQL  | [Table of Contents](index.php) |  29.3. Using the PostgreSQL Client Program |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)