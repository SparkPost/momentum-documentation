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

| 1.11. Performing a Stand-alone Installation |
| [Prev](install.riak.php)  | Chapter 1. Installation |  [Next](install.cluster.php) |

## 1.11. Performing a Stand-alone Installation

A stand-alone installation should be performed when you intend to install the product on a single machine.

To perform a stand-alone installation:

1.  Download and extract the installation bundle as discussed in the operating system specific installation sections.

2.  Run the **installer** script.

3.  When prompted, enter `singlenode` for the role selection. This is a shortcut for the `mta`, `database` and `web` roles.

4.  Because you are installing the database role you will be prompted for a location for storing data. The default is `/var/db/msyspg`.

5.  You will also be prompted for a web UI password for the account named 'admin'.

    The MTA needs access to the PostgreSQL database and to ecconfigd to manage authentication and replication. For this reason you must also provide a password for the service account.

6.  During installation configuration files with reasonable defaults are added to the local configuration repository for you to use as the basis for your installation. You are strongly encouraged to review the files here: `/opt/msys/ecelerity/etc/conf` before running Momentum in a production environment.

    You can view and manage configuration files from the web console. For more information on this topic see [Section 3.8, “Administration”](web3.administration.php "3.8. Administration").

    Copy your license to the `/opt/msys/ecelerity/etc` directory before starting the services if you are not connected to the Internet.

7.  Confirm the success of your installation by logging in to the web console supplying `admin` as the username and the password created during installation.

| [Prev](install.riak.php)  | [Up](install.php) |  [Next](install.cluster.php) |
| 1.10. Riak Server  | [Table of Contents](index.php) |  1.12. Installing a Cluster |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)