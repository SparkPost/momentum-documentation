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

| Chapter 1. Installing Message Central |
| [Prev](preface.php)  |   |  [Next](mc3-modes.php) |

## Chapter 1. Installing Message Central

**Table of Contents**

<dl class="toc">

<dt>[1.1\. System Requirements](mc-installation.php#mc-requirements)</dt>

<dt>[1.2\. Message Central Web UI and REST API Access, Database-centric Mode, Direct Access Mode](mc3-modes.php)</dt>

<dt>[1.3\. Installation Configurations](mc-configurations.php)</dt>

<dt>[1.4\. Installation Overview](mc-installation-overview.php)</dt>

<dt>[1.5\. Upgrading from Message Central version 3.4.1 to version 3.5.1](mc-upgrade-341-to-351.php)</dt>

<dt>[1.6\. Inbound and Outbound MTAs](mc-mtas.php)</dt>

<dt>[1.7\. Services](mc-start-services.php)</dt>

</dl>

## 1.1. System Requirements

Message Central is made up of a number of separate components. For maximum efficiency, distributing the various components across five different machines is recommended for a typical Message Central installation. Find the suggested breakdown below:

*   The PostgreSQL database, the Message Central web UI, Momentum cluster manager, the REST server and the Momentum web UI

*   The generators

*   The outbound MTA

*   The inbound MTA

*   The click/asset servers

### Note

A cluster manager and an MTA node cannot run on the same machine.

The Database, web UI, and cluster manager can be installed on the same server, but can also be distributed. For best performance, the REST server should be installed on the Database server but it can be installed on any machine.

The web UI should be separated from the click tracker server since the click tracker is, by definition, exposed to the Internet.

For best performance the MTA nodes should not share any other roles.

The supported platforms are:

*   Red Hat Enterprise Linux 6 (x86_64) (as of Message Central version 3.7)

*   Red Hat Enterprise Linux 5 (x86_64)

All servers should be running the same OS.

### Note

If you are installing the web UI, Internet Explorer 8 and Firefox 3.6.10 (or higher) are the only browsers supported. As of version 3.7, Internet Explorer 9 is supported.

### 1.1.1. Database Storage Requirements

The hardware requirements for each machine are similar, but the database server will require the most robust configuration.

The machine running the database is the critical component of the system. You must ensure that it has the fastest possible disks, as the performance of the generators is directly linked to the performance of the disks on the database machine.

We recommend the following grade of hardware:

*   2X 64-bit architecture

*   8+ GBs of RAM (16 is better, 32 is recommended for the machine hosting the database server)

*   6 dedicated 15k RPM or faster SCSI hard drives connected to a battery-backed RAID 0 or 10 controller with write-back caching.

    *   Spool or Database (4 drives in a RAID-10)

    *   OS and Logging (2 drives in a RAID-0)

You will require approximately 0.5 GB of storage space per million contacts per mailing on the database machine. This space usage increases or decreases roughly linearly, so if you have half or double the number of contacts or mailings, you will need to half or double the storage requirements accordingly.

For best results, all machines should be on the same network segment with IP addresses in the same subnet. Although WAN configurations are possible, bandwidth between nodes should be low-latency; Gigabit, local connections are preferred.

| [Prev](preface.php)  |   |  [Next](mc3-modes.php) |
| Preface  | [Table of Contents](index.php) |  1.2. Message Central Web UI and REST API Access, Database-centric Mode, Direct Access Mode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)