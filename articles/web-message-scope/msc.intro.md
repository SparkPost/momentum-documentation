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

| Chapter 1. Introduction to Message Scope |
| [Prev](preface.php)  |   |  [Next](modules.messagescope.php) |

## Chapter 1. Introduction to Message Scope

**Table of Contents**

<dl class="toc">

<dt>[1.1\. Installing Message Scope](msc.intro.php#msc.intro.install)</dt>

</dl>

Message Scope creates logs of incoming or outgoing messages. These logs are accessible through a web interface, making it easy to track the flow of either SMTP or SMPP messages through Momentum. Using the web UI you can also make near real-time changes to Momentum policy by adding items to remediation lists.

Searches are initiated through the web UI by sending HTTP queries to a Java servlet. This servlet transmits the request to all of the machines in the index/search cluster, these machines then search their local stores for matching messages, filter them into streams, and sort them by time.

Users can also create third party modules to output their own Message Scope-compatible log files and by reading these files into the Message Scope search database, it is possible to customize how messages are tracked.

The following image file depicts Message Scope configured in a cluster environment.

<a name="figure_messagescope_diagram"></a>

**Figure 1.1. Message Scope architecture**

![Message Scope architecture](images/messagescope_diagram.jpg)

Find below a description of the various components that make up Message Scope:

*   `Message Scope Server` – serves Message Scope log files which the indexers consume. This component is part of the Momentum installation

*   `Cluster Nodes (including the manager)` – a typical cluster installation of Momentum

*   `Message Scope Web UI` – The Message Scope interface for conducting searches

*   `Searching/Indexing` – This component is part of the Message Scope installation

*   `Ingestor (and Janitor)` – The Lucene search engine that processes Momentum logs.

## 1.1. Installing Message Scope

The installation of Momentum is described at [Installation](https://support.messagesystems.com/docs/web-ref/install.php). During the installation process you will be asked: `Would you like to enable Message Scope?` Follow the instructions given by the installer. To install the Message Scope components see [Installing Message Scope](https://support.messagesystems.com/docs/web-scope-quick/msc.installing.php).

### Note

The `msc_server` daemon does not start automatically on MTA nodes. Start it manually by issuing the command **`/etc/init.d/msc_server start`**       . On Linux, to set the service to restart on reboot use **`chkconfig msc_server on`**               . On Solaris, starting the service by running the initialization script enables it to restart on reboot.

### Upgrading From 1.2.0 to 1.2.2

During an upgrade the following files are backed up (with the added extension, `.bak`) and overwritten:

*   `/opt/msys/scope/etc/scope.xml` – the ingestor configuration file

*   `/opt/msys/scope/etc/momentum_nodes` – the nodes with `msc_logger` modules installed

*   `/opt/msys/scope/www/config/search.ini` – the file that identifies the nodes that perform searches

*   `/opt/msys/scope/www/config/momentum.ini` – the file that identifies all Momentum nodes

If you customized any of the preceding files, a warning notice will appear during the upgrade. When the upgrade is complete, use the backup as a reference for reapplying local customizations.

Also, note that the `/opt/mys/etc/installer/lastinstall` file is used to recreate the Momentum configuration files. On upgrade, the installer will recreate the Momentum nodes that existed at the time of the last installation. Any new nodes added to a cluster after the original installation will **not** appear in the lastinstall file so will not be recreated. A warning notice will appear during installation alerting you to this fact. After an upgrade you must manually add any new nodes.

| [Prev](preface.php)  |   |  [Next](modules.messagescope.php) |
| Preface  | [Table of Contents](index.php) |  Chapter 2. The messagescope Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)