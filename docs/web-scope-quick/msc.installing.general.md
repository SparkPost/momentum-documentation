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

| 3.2. Installing Roles |
| [Prev](msc.installing.php)  | Chapter 3. Installing the Message Scope Bundle |  [Next](msc.installing.starting.services.php) |

## 3.2. Installing Roles

When you have decided how you are going to configure your machines, download the Message Scope bundle for each machine that you are using.

Decompress the bundle using the command **tar zxf message-scope-bundle-*`version_num.os.arch`*.tar.gz**                                                         and then navigate to the message-scope-*`version_num`* directory. Run the command **./installer**, to begin installation.

### Note

If you are unfamiliar with Message Systems installation instructions you can run the installer with the `--dry-run` option. This will take you through the installation process without installing the application.

Follow the instructions on the screen, installing the desired role or roles. Enter the role or roles that you wish to host and press **enter** when you are finished. If you wish to deselect a role, enter the role name preceded by a minus sign.

If you are installing the database, it will be installed to `/var/db/msyspg` unless you choose otherwise. Note that this database is the Message Scope remediation database and not the Momentum database. When installing the database role, the admin and service account credentials are created. You will need these credentials when installing other roles. Note that this user is not a shell account.

When installing the ingestor, the database role must already be installed. You will need to identify the machine that hosts the Message Scope database.

When installing any role, you must identify the Momentum cluster node(s) configured with the message scope logger module. Enter the hostname or IP address of the node or nodes and press **enter** when you are finished.

| [Prev](msc.installing.php)  | [Up](msc.installing.php) |  [Next](msc.installing.starting.services.php) |
| Chapter 3. Installing the Message Scope Bundle  | [Table of Contents](index.php) |  3.3. Completing Installation and Starting Services |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)