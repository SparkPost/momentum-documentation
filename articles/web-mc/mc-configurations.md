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

| 1.3. Installation Configurations |
| [Prev](mc3-modes.php)  | Chapter 1. Installing Message Central |  [Next](mc-installation-overview.php) |

## 1.3. Installation Configurations

The first consideration when installing Message Central is whether you are performing a stand-alone installation or a clustered installation.

Message Central can be installed on a single server for lower volume needs by combining database, generator, Momentum web UI, Message Central web UI, click tracker and MTA roles in a single unit. The cluster manager is not used in a single server environment. Combining all of these functions into a single server is acceptable, but the hardware must be a good quality data server. A stand-alone configuration can also be useful for testing purposes.

### Note

If you install the standalone role, the Momentum web UI is installed on port `8080` and the Message Central web UI is installed on port `80`. These port numbers also apply if you install both the Momentum and the Message Central web UI on the same machine.

However, Message Central is best deployed with a cluster of MTAs. To do this you will need a cluster manager and nodes for the MTA, in addition to the machines required for Message Central. Provision your machines in the following way and perform the installation following these steps:

1.  An MTA manager node – running eccmgr and the Momentum web components

2.  A database host – this machine hosts both the Message Central and the Momentum databases and currently must run on the same machine as the MTA manager node.

3.  MTA nodes – we recommend one or more outbound, and one inbound MTA

4.  Message Central web – runs the Message Central web UI and clicktracker components.

5.  The Message Central generator – running the scheduler and generator components.

6.  Message Central REST server – the machine hosting the REST server.

This configuration gives you the Momentum UI on the manager node, so you can manage your MTAs, and the Message Central UI on the Message Central web box.

During installation of Momentum the following roles are available:

*   clicktrack – click/open tracking and show-in-browser service

*   database – data store (maximum one per deployment)

*   generator – content generation services

*   manager – cluster service manager for a cluster of MTAs

*   mta – for sending/receiving email

*   rest – the REST server

*   singlenode – standalone server (for evaluation purposes or light duty)

*   web – Message Central UI (Momentum UI if the 'manager' role is selected)

Given the recommended configuration above, You would install the Momentum roles as follows:

*   The MTA manager node – the Momentum manager, web and database roles. Please note that the Momentum web UI defaults to localhost:8080.

*   MTA nodes – The mta role.

### Note

The generator role and the manager role cannot be installed on the same machine.

During installation you have the option of requiring an SSL connection to the database.

Find below a diagram of the architecture of Message Central.

<a name="fig.mc.architecture"></a>

**Figure 1.1. Message Central architecture**

![Message Central architecture](images/MC_arch.png)

### 1.3.1. Message Central and Subclusters

The Message Central generators need to be on the same local area network (LAN) as the database and the MTAs.

This means that you cannot use sub-clusters in a wide area network (WAN) environment, but the other sub-cluster use cases, such as staging and production, can still be used in a LAN environment.

For example, you can use Message Central with an inbound sub-cluster and an outbound sub-cluster in one data center but you cannot use Message Central with 2 MTA/Generator nodes outbound in one data center and 2 MTA/Generator nodes in a second data center.

| [Prev](mc3-modes.php)  | [Up](mc-installation.php) |  [Next](mc-installation-overview.php) |
| 1.2. Message Central Web UI and REST API Access, Database-centric Mode, Direct Access Mode  | [Table of Contents](index.php) |  1.4. Installation Overview |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)