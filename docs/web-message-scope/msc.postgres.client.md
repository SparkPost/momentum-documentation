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

| 4.3. Using the PostgreSQL Client Program |
| [Prev](msc.postgres.server.php)  | Chapter 4. Message Scope and PostgreSQL |  [Next](msc.postgres.maintenance.php) |

## 4.3. Using the PostgreSQL Client Program

There may be occasions where you wish to inspect the PostgreSQL database installed by Message Scope. You can do this using the PostgreSQL client program, `psql`, found in the `/opt/msys/3rdParty/bin` directory. No `root` user is created when PostgreSQL is installed so you must log in as the user created during installation. The default value for this user is `ecuser`.

Start the PostgreSQL client by issuing the command, **/opt/msys/3rdParty/bin/psql ecelerity -U *`username`***                          . PostgreSQL is configured to run on the default port, 5432, so there is no need to specify a port when running the PostgreSQL client.

In addition to the user created during installation, there should also be a superuser named `msyspg`. To confirm this issue the command **`\du`** from the PostgreSQL prompt.

### Note

Other PostgreSQL programs such as **pg_dump** are also found in the `/opt/msys/3rdParty/bin/` directory.

| [Prev](msc.postgres.server.php)  | [Up](msc.postgresql.php) |  [Next](msc.postgres.maintenance.php) |
| 4.2. Running the PostgreSQL Server  | [Table of Contents](index.php) |  4.4. Database Maintenance |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)