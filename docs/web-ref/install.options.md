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

| 1.8. Installer Options |
| [Prev](install.solaris.php)  | Chapter 1. Installation |  [Next](install.additional.packages.php) |

## 1.8. Installer Options

The following installation options may be used with the installer script:

*   `--upgrade` – Use the same answers as the last installation. This option can only be used when upgrading within major versions, for example, when upgrading from 3.*`num`* to a higher version number. It *cannot* be used for upgrading from version 2.2 to 3.0.

*   `--dry-run` – Attempt the installation, but do not actually install any files.

*   --option-file *`/path/to/file`* – When Momentum is installed, the `/opt/msys/etc/installer/lastinstall` file is created. You can facilitate installation by pointing to a `lastinstall` file.

    Note that the `/opt/mys/etc/installer/lastinstall` file is used to recreate the Momentum configuration files. On upgrade, the installer will recreate the Momentum nodes that existed at the time of the last installation. Any new nodes added to a cluster after the original installation will **not** appear in the lastinstall file so will not be recreated. A warning notice will appear during installation alerting you to this fact. After an upgrade you must manually add any new nodes.

*   `––uninstall` – Remove all packages previously installed.

    This option does **not** return a machine to the state it was in prior to installation. It will remove all of the files that were added as part of each installed `msys-` package file, as well as any package-related directories that were created and are (as a result of uninstalling) now completely empty. (If you wish you can identify these directories by running **rpm -ql msys-*`package-name`***                          .)

    Any configuration file added or changed after installation will be retained, as well as the numerous "generated" files such as the `/var/ecconfigd/repos` directory contents. The following directories (and files below these directories) are not removed:

    *   `/opt/msys` and all files and directories below this directory

    *   Any Momentum-related files in `/var/log` and `/var/spool`

    *   The `/var/ecconfigd`directory and all files and directories below this directory

    *   Any Momentum-related files in `/var/db`

### Warning

Reinstalling over top of an existing installation is not supported. You must manually uninstall before reinstalling. Remove the following directories:

*   `/opt/msys`

*   `/var/log/ecelerity`

*   `/var/ecconfigd`

If the installer detects that you are reinstalling the database, you can choose to overwrite the existing database if you wish.

| [Prev](install.solaris.php)  | [Up](install.php) |  [Next](install.additional.packages.php) |
| 1.7. Installation on Solaris  | [Table of Contents](index.php) |  1.9. Installing Additional Packages |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)