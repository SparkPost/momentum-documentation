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

| 1.1. System Requirements |
| [Prev](install.php)  | Chapter 1. Installation |  [Next](install.ports.php) |

## 1.1. System Requirements

*   `database` – data store (max 1 per deployment, required for all deployments)

*   `manager` – cluster service manager for a cluster of MTAs

*   `mta` – for sending/receiving email

*   `singlenode` – shortcut for the mta, database and web roles

*   `web` – browser driven control panel

When running the installer you will be asked a series of questions that vary depending upon the roles chosen. If you are installing the database on a separate machine, you *must* install this role first. Additionally, if you are installing a cluster configuration, the manager must be installed before the nodes.

We recommend running Momentum on dedicated hardware to ensure optimal performance. The exact hardware specifications depend on the volume of mail that you intend to process and the role that each specific machine is performing. But, in general terms, you should use nodes having 64 bit, x86-based architecture.

### Note

Use Linux with kernel 2.6.18-194 or later. There is an issue with Broadcom NICs when used with older kernels in Red Hat 4 and Red Hat 5\. If you are running kernel 2.6.18-194 or later you will not have this issue.

The Momentum web UI supports the following browsers:

*   Firefox version 3.6 and higher on PC and Mac

*   Internet Explorer versions 8 and 9

On Microsoft Windows we require that you are running Windows Server 2003 or later, and that Internet Information Services (IIS) be installed prior to installing Momentum. *Note: Momentum is no longer supported on Windows.* 

| [Prev](install.php)  | [Up](install.php) |  [Next](install.ports.php) |
| Chapter 1. Installation  | [Table of Contents](index.php) |  1.2. Ports Used by Momentum |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)