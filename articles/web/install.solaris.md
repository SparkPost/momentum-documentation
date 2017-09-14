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

| 1.8. Installation on Solaris |
| [Prev](install.darwin.php)  | Chapter 1. Installation |  [Next](install.options.php) |

## 1.8. Installation on Solaris

Momentum is packaged for a number of Solaris based systems. Choosing and downloading the correct package for your OS is critical to Momentum performing correctly, as different packages utilize different versions of critical system libraries and there are also certain platform-specific optimizations.

If you are making use of DuraVIP™ then You must install Ecelerity in a Solaris global zone. Additionally, the `privileges` option requires the `net_rawaccess` privilege which only works in a global zone.

The installation package for Solaris is distributed as a single compressed tar file, one for Sparc and one for Intel systems. The file can be found on the Message Systems support web site, named `ecelerity-bundle-VERSION-sol10.ARCH.tar.gz`

The `version` here is the product version, and `arch` is the architecture you're running on. The `type` indicates whether the package is for sending or receiving.

Upon completion, if you are installing eccmgr, you should see the following output:

```
You will need to create an eccluster.conf, and then start the service via:
  svcadm enable mbus
  svcadm enable eccmgr

You should start the cluster console via:
  svcadm enable ec_stat
  svcadm enable cidr_server
  svcadm enable ecclusterconsole

These services will start automatically the next time you boot
your operating system.
```

Upon completion, if you are installing ecelerity and the web console, you should see the following output:

```
You will need to create an ecelerity.conf, and then start the service via:
  svcadmin enable ecelerity

You should start the following services for the webconsole:
  svcadm enable ec_stat
  svcadm enable ecwebconsole

These services will start automatically the next time you boot
your operating system.
```

### 1.8.1. Installation

To unpack and install after downloading the file, perform the following commands:

```
**gzip -dc ecelerity-bundle-VERSION-sol10.ARCH.tar.gz | tar xf -** 

  **cd ecelerity-VERSION** 
  **./installer**
```

### Note

For the options available with the **installer** command see [Section 1.9, “Installer Options”](install.options.php "1.9. Installer Options").

*   `database` – data store (max 1 per deployment)

*   `manager` – cluster service manager for a cluster of MTAs

*   `mta` – for sending/receiving email

*   `singlenode` – shortcut for the mta, database and web roles

*   `web` – browser driven control panel

When running the installer you will be asked a series of questions that vary depending upon the roles chosen. If you are installing the database on a separate machine, you *must* install this role first. Additionally, if you are installing a cluster configuration, the manager must be installed before the nodes.

This will start the Momentum installation procedure. You will be asked a series of questions. At the end of the installation you will be told how to start the Momentum server. Before you do this you should read the [configuration guide](conf.php "Chapter 2. Configuration") and modify your `/opt/ecelerity/etc/ecelerity.conf` file appropriately.

| [Prev](install.darwin.php)  | [Up](install.php) |  [Next](install.options.php) |
| 1.7. Installation on Mac OS X/Darwin  | [Table of Contents](index.php) |  1.9. Installer Options |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)