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

| Chapter 3. Installing the Message Scope Bundle |
| [Prev](scope.installing.momo3.msc1.2.services.php)  |   |  [Next](msc.installing.general.php) |

## Chapter 3. Installing the Message Scope Bundle

**Table of Contents**

<dl class="toc">

<dt>[3.1\. Preparatory](msc.installing.php#msc.installing.preparation)</dt>

<dt>[3.2\. Installing Roles](msc.installing.general.php)</dt>

<dt>[3.3\. Completing Installation and Starting Services](msc.installing.starting.services.php)</dt>

<dt>[3.4\. Logging In](msc.installing.login.php)</dt>

</dl>

The Message Scope bundle is packaged separately from Momentum and is installed on a separate machine or machines. This bundle controls installation of the following roles:

*   database

*   ingestor/searcher

*   web console

These elements are described in detail in [Chapter 1, *Overview of Message Scope*](msc.intro.php "Chapter 1. Overview of Message Scope") .

During installation two accounts are set up: the admin account for logging into the Message Scope web UI and the service account that provides database credentials. These accounts apply to the Message Scope web UI only. They differ from the admin and service accounts set up while installing the Momentum component. If you wish you may of course use the same usernames and passwords.

## 3.1. Preparatory

Installation of Momentum must precede installation of the Message Scope bundle. During installation of Message Scope you will need to identify which Momentum node or nodes have been configured with the Message Scope logger module. This module is described in "[The msc_logger Module](https://support.messagesystems.com/docs/web-message-scope/modules.msc_logger.php)".

Currently, the database role must be installed on the same machine as the web console and it must be installed first.

### Database and Webconsole Roles

The database is installed to `/var/db/msyspg` unless you choose otherwise. Note that this database is the Message Scope remediation database and not the Momentum database.

When installing the database role you must be able to identify the node that hosts the ingestor and the Momentum node or nodes that are configured with the msc_logger module.

When installing these roles the admin and the service account credentials are created. You will need these same credentials when installing the ingestor.

### Ingestor and Search Server Roles

The machine or machines that host the ingestor role must have Java 1.6 installed and adequate RAM. The Java `Xmx` and `Xms` options require a minimum to 4 GBs.

Installation of this node must follow installation of the Message Scope database.

When installing this role you must be able to identify the node that hosts the Message Scope database, the Message Scope admin and service account credentials *and* the Momentum node or nodes configured with the msc_logger module.

| [Prev](scope.installing.momo3.msc1.2.services.php)  |   |  [Next](msc.installing.general.php) |
| 2.3. Starting the Services  | [Table of Contents](index.php) |  3.2. Installing Roles |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)