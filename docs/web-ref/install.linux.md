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

| 1.6. Installation on Linux |
| [Prev](install.os-specific.php)  | Chapter 1. Installation |  [Next](install.solaris.php) |

## 1.6. Installation on Linux

Momentum is packaged for a number of Linux distributions. Choosing the correct package for your OS is critical to Momentum performing correctly, as different Linux distributions utilize different versions of critical system libraries and Momentum also uses certain platform-specific optimizations.

The installation package for Linux is distributed as a single compressed tar file, one for each supported Linux distribution. The file can be found on the Message Systems support web site, named momentum-*`type`*-bundle-*`version-platform.arch`*.tar.gz .

`version` indicates the product version, `platform` the platform you're running on (for example, rhel5 for RedHat Enterprise Linux 5), and `arch` indicates the architecture. `type` indicates whether the package is for sending or receiving.

To unpack and install after downloading the file, perform the following commands:

**tar xzf momentum-*`type`*-bundle-*`version-platform.arch`*.tar.gz.tar.gz** 

**cd momentum-*`type-version`*** 

**./installer**
### Note

For the options available with the **installer** command see [Section 1.8, “Installer Options”](install.options.php "1.8. Installer Options").

During installation the following roles are available:

*   `database` – data store (max 1 per deployment)

*   `manager` – cluster service manager for a cluster of MTAs

*   `mta` – for sending/receiving email

*   `singlenode` – shortcut for the mta, database and web roles

*   `web` – browser driven control panel

When running the installer you will be asked a series of questions that vary depending upon the roles chosen. If you are installing the database on a separate machine, you *must* install this role first. Additionally, if you are installing a cluster configuration, the manager must be installed before the nodes.

During installation a service account and an admin account are created. Be sure to record the passwords that you use for these accounts; they are required when installing different roles.

At the end of the installation you will be told how to start the Momentum server. Before you do this you should read the [configuration guide](conf.php "Chapter 2. Configuration") and modify your `/opt/msys/ecelerity/etc/conf/default/ecelerity.conf` file appropriately.

| [Prev](install.os-specific.php)  | [Up](install.php) |  [Next](install.solaris.php) |
| 1.5. Operating System Specific Preparation  | [Table of Contents](index.php) |  1.7. Installation on Solaris |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)