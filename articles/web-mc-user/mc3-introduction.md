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

| Chapter 1. Introduction |
| [Prev](mc3-preface.php)  |   |  [Next](mc3-logging-in.php) |

## Chapter 1. Introduction

**Table of Contents**

<dl class="toc">

<dt>[1.1\. Installing the web Role](mc3-introduction.php#mc3-web-role)</dt>

<dt>[1.2\. Logging in to the Web UI](mc3-logging-in.php)</dt>

</dl>

Message Central is a campaign management system that uses Momentum as its MTA.

This document deals principally with using the web user interface (UI) for Message Central. For details regarding configuration of Message Central see ["Message Central 3.0 Reference Guide"](https://support.messagesystems.com/docs/web-mc/index.php). For details about configuring Momentum see ["Online Reference Manual, 3.0"](https://support.messagesystems.com/docs/web-ref/index.php).

The Message Central web UI is used to manage all aspects of a campaign. Use it to create campaigns, mailings, mailing lists and content. The web UI can also be used to perform administrative tasks such as adding users, importing recipients and setting up relationships to external databases.

The Message Central web UI is one of the roles that can be created during installation. The roles are as follows:

*   `clicktrack` – click/open tracking and show-in-browser service

*   `database` – data store (max 1 per deployment)

*   `generator` – content generation services

*   `manager` – cluster service manager for a cluster of mtas

*   `mta` – node for sending/receiving email

*   `web` – Message Central UI (Momentum UI if the 'manager' role is selected)

*   `rest` – the REST server role

Note that you choose to install the Message Central web user interface on the cluster manager along with the Momentum web UI, you will be required to select a port for the Momentum web UI. The default value is `8080`.

## 1.1. Installing the web Role

Before installing the web role you must have the data store installed and if you are installing the Message Central web UI on a cluster node, the cluster manager must be running.

To install the Message Central web UI, choose the `web` role during installation. Installation is performed as described in ["Installing Message Central"](https://support.messagesystems.com/docs/web-mc/mc-installation.php).

If you wish, the web UI can be installed on the cluster manager or on a cluster node.

| [Prev](mc3-preface.php)  |   |  [Next](mc3-logging-in.php) |
| Preface  | [Table of Contents](index.php) |  1.2. Logging in to the Web UI |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)