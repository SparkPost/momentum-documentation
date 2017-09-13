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

| postgres.connect_string |
| [Prev](conf.perl.lib_dir.php)  | Chapter 7. Message Central Configuration Reference |  [Next](conf.postgres.reconnect_delay.php) |

<a name="conf.postgres.connect_string"></a>
## Name

postgres.connect_string — specify the parameters for connecting to the PostgreSQL database

## Synopsis

`postgres.connect_string = "host=127.0.0.1 dbname=pe user=ecuser password=servicepassword"`

<a name="idp2199696"></a>
## Description

A connection string needs to be specified to enable access to the Message Central database. The entry for this option in the `pe2.conf` file is created with the values specified during installation. Specifying this option is required.

The default values supplied during installation are as follows:

*   host – localhost

*   dbname – pe

*   user – ecuser

*   password – the service password you selected when installing the database machine.

| [Prev](conf.perl.lib_dir.php)  | [Up](mc.conf.php) |  [Next](conf.postgres.reconnect_delay.php) |
| perl.lib_dir  | [Table of Contents](index.php) |  postgres.reconnect_delay |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)