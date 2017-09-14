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

| Chapter 1. Overview of Message Scope |
| [Prev](index.php)  |   |  [Next](scope.installing.php) |

## Chapter 1. Overview of Message Scope

**Table of Contents**

<dl class="toc">

<dt>[1.1\. Required Files](msc.intro.php#msc.intro.required)</dt>

</dl>

This section provides a quick overview of the architecture of Message Scope and shows how the various components are related.

Message Scope creates logs of incoming or outgoing messages. These logs are accessible through a web interface, making it easy to track the flow of messages through Momentum.

Searches are initiated through the web UI by sending HTTP queries to a Java ingestor. This component transmits the request to all of the machines in the search cluster.

The following image file depicts Message Scope configured in a cluster environment.

<a name="figure_messagescope_diagram"></a>

**Figure 1.1. Message Scope architecture**

![Message Scope architecture](images/messagescope_diagram.jpg)

### Note

You can use Message Scope to track SMPP messages as well as SMTP messages.

Broadly speaking, Message Scope is made up of Momentum combined with Message Scope specific elements.

The Momentum elements of Message Scope are as follows:

*   `Message Scope Server` – serves Message Scope log files which the indexers consume. This component is described in "[Message Scope Server](https://support.messagesystems.com/docs/web-message-scope/msc.server.php)".

*   `Cluster Nodes (including the manager)` – the nodes of interest are those with the msc_logger module installed. This module is run on all Momentum nodes.

The elements exclusive to a Message Scope installation are as follows:

*   `Database` – data store (1 required per deployment, separate from the Momentum database)

*   `Ingestor` – Java ingestion and search processes. The ingestor, search server and janitor processes all run on the same machine.

*   `Web Console` – The user's search interface

The recommended configuration of servers for a typical Message Scope installation is as follows:

*   One or more Momentum nodes (in a standalone or cluster configuration)

*   The Message Scope database and webconsole roles on one machine

*   One or more machines devoted to the Message Scope ingestor role

This document describes the installation of Message Scope in a cluster configuration running on Linux.

## 1.1. Required Files

Three different files must be downloaded from Message Systems in order to install Message Scope.

The required files are as follows:

*   momentum-*`type`*-bundle-*`version.os.arch`*.tar.gz – This file is the main Momentum file and is installed on all the Momentum nodes.

*   msys-ecelerity-messagescope-*`version.os.arch`*.rpm – The Message Scope server and logger modules RPM. This file is installed on all the Momentum nodes. As of Message Scope version 1.2, this package is installed along with Momentum by responding "yes" when asked to enable Message Scope during installation.

*   message-scope-bundle-*`version_num.os.arch`*.tar.gz – The Message Scope bundle. This bundle is installed on all the Message Scope specific nodes.

| [Prev](index.php)  |   |  [Next](scope.installing.php) |
| Quick Start Guide for Message Scope  | [Table of Contents](index.php) |  Chapter 2. Installing the Momentum Component |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)