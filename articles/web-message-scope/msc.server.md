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

| Chapter 6. Message Scope Server |
| [Prev](msc.ui.roles.php)  |   |  [Next](msc.server.protocol.commands.php) |

## Chapter 6. Message Scope Server

**Table of Contents**

<dl class="toc">

<dt>[6.1\. The Message Scope Server Script](msc.server.php#msc.server.script)</dt>

<dt>[6.2\. Protocol Commands](msc.server.protocol.commands.php)</dt>

<dt>[6.3\. Banner](msc.server.banner.php)</dt>

<dt>[6.4\. Request](msc.server.request.php)</dt>

<dt>[6.5\. Response](msc.server.response.php)</dt>

<dt>[6.6\. Client Handling of Data](msc.server.client.handling.php)</dt>

<dt>[6.7\. Successful Protocol Termination](msc.server.protocol.termination.php)</dt>

<dt>[6.8\. Error Conditions](msc.server.error.conditions.php)</dt>

<dt>[6.9\. Handling Data with GIMME](msc.server.data.handling.php)</dt>

</dl>

The Message Scope server is a utility that, from a high level, simply serves Message Scope log files which the indexers consume as clients. The server does this by implementing a protocol called the “GIMME” protocol,

The GIMME protocol is a simple protocol for reliably sending files over the network. It is tailored slightly to some Momentum concepts such as subclusters and nodes.

The log file server is implemented in Perl and is a simple select/fork server that exists simply to provide Message Scope log files to the Ingestor.

## Handling Data with GIMME

The Message Scope log server relies on properties of the GIMME protocol to avoid duplicating or losing data. When a client connects and requests a file using the GIMME command, the server marks that file as unavailable for any new connection. If the GIMME conversation succeeds, that log file is deleted and never again sent to another client. If the GIMME conversation fails, the file is left intact and the "lock" is removed in hopes that a future conversation may have better luck.

## 6.1. The Message Scope Server Script

The `/opt/msys/ecelerity/bin/msc_server` script does not start automatically on MTA nodes. Start it manually by issuing the command **`/etc/init.d/msc_server start`**       . On Linux, to set the service to restart on reboot, use **`chkconfig msc_server on`**               . On Solaris, starting the service by running the initialization script enables it to restart on reboot.

By default, the server listens for connections on port 2029, on all addresses on the system. It opens a log directory at `/var/log/ecelerity/scope` and treats all files within that directory as Message Scope log files.

| [Prev](msc.ui.roles.php)  |   |  [Next](msc.server.protocol.commands.php) |
| 5.8. Roles & Permissions  | [Table of Contents](index.php) |  6.2. Protocol Commands |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)