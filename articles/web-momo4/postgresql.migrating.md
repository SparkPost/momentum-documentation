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

| 29.4. Dumping and Restoring the Database |
| [Prev](postgresql.client.php)  | Chapter 29. PostgreSQL |  [Next](riak.php) |

## 29.4. Dumping and Restoring the Database

In some circumstances, you may need to change the machine that hosts Momentum and migrate your data to new hardware. When moving to a host with the same operating system, architecture, and bit size, you can simply archive the `/var/db/msyspg` directory and then restore it. Otherwise, you can use PostgreSQL tools to dump and restore the database.

Database dumps are plain-text files that contain the SQL commands and data required to rebuild the database. Create a dump file using the **pg_dump** command and then restore your database by passing the dump file to **pg_restore**. The steps are itemized in the following:

1.  Ensure that the database is not in use. Go to the command line of the machine that hosts the PostgreSQL server and issue the following command:

    `shell> /opt/msys/3rdParty/bin/pg_dump -Fc -U msyspg ecelerity -f /path/to/db.dump`

    No password is required to access the database from localhost.

    Using `-c` creates custom output making it possible to select and reorder archived items if necessary when restoring the database. It also compresses the file. The user `msyspg` is the PostgreSQL superuser; all database dumps and restorations should be performed as this user.

2.  Since the dump file is compressed, you must use the **pg_restore** to restore the database. Go to the command line of the destination machine and issue the command:

    `shell> /opt/msys/3rdParty/bin/pg_restore -c -U msyspg -d ecelerity /path/to/db.dump`
3.  Examine any warnings that are output. You will get errors trying to drop and create some of the schemas, but they are harmless.

| [Prev](postgresql.client.php)  | [Up](postgresql.php) |  [Next](riak.php) |
| 29.3. Using the PostgreSQL Client Program  | [Table of Contents](index.php) |  Chapter 30. Riak |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)