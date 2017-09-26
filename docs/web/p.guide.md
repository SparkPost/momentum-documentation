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

| Part I. Configuration Guide |
| [Prev](typographical.php)  |   |  [Next](install.php) |

## Part I. Configuration Guide

**Table of Contents**

<dl class="toc">

<dt>[1\. Installation](install.php)</dt>

<dd>

<dl>

<dt>[1.1\. System Requirements](install.requirements.php)</dt>

<dt>[1.2\. Ports Used by Momentum](install.ports.php)</dt>

<dt>[1.3\. Preparing the System](install.prepare.php)</dt>

<dt>[1.4\. Operating System Specific Preparation](install.os-specific.php)</dt>

<dt>[1.5\. Converting a System From 32 to 64 Bit](install.3264conversion.php)</dt>

<dt>[1.6\. Installation on Linux](install.linux.php)</dt>

<dt>[1.7\. Installation on Mac OS X/Darwin](install.darwin.php)</dt>

<dt>[1.8\. Installation on Solaris](install.solaris.php)</dt>

<dt>[1.9\. Installer Options](install.options.php)</dt>

<dt>[1.10\. Installation on Microsoft Windows (Deprecated)](install.win32.php)</dt>

</dl>

</dd>

<dt>[2\. Configuration](conf.php)</dt>

<dd>

<dl>

<dt>[2.1\. The `ecelerity.conf` File](conf.ecelerity.conf.php)</dt>

<dt>[2.2\. Authentication, Authorization and Accounting](conf.aaa.php)</dt>

<dt>[2.3\. Options that Must Change](conf.initial.conf.php)</dt>

<dt>[2.4\. Configuration Scopes and Fallback](ecelerity.conf.fallback.php)</dt>

<dt>[2.5\. Starting Momentum](conf.starting.php)</dt>

</dl>

</dd>

<dt>[3\. The Web Console](webconsole.php)</dt>

<dd>

<dl>

<dt>[3.1\. Administering the Web Console](webconsole.admin.php)</dt>

<dt>[3.2\. Web Console Authentication](webconsole.authentication.php)</dt>

<dt>[3.3\. Configuration of Momentum](webconsole.configuration.php)</dt>

<dt>[3.4\. Dashboard, Queue, Log and Bounce Reports](webconsole.reports.php)</dt>

</dl>

</dd>

<dt>[4\. Operations](operations.php)</dt>

<dd>

<dl>

<dt>[4.1\. The Momentum System Console](operations.console.php)</dt>

<dt>[4.2\. Console Commands](operations.console-commands.php)</dt>

<dt>[4.3\. Logging](operations.logging.php)</dt>

<dt>[4.4\. MultiVIP© Interfaces](operations.multivip.php)</dt>

</dl>

</dd>

<dt>[5\. Implementing Policy with Momentum](policy.php)</dt>

<dd>

<dl>

<dt>[5.1\. Validation and the Validation Context](policy.validation.php)</dt>

<dt>[5.2\. Implementing Policy Using Sieve](policy.implementing.php)</dt>

<dt>[5.3\. Setting Context Based on Connecting IP](policy.context-based-on-ip.php)</dt>

<dt>[5.4\. Conclusion](policy.conclusion.php)</dt>

</dl>

</dd>

<dt>[6\. Validation Context Variables](policy.context.variables.php)</dt>

<dd>

<dl>

<dt>[6.1\. Connection Context Variables](policy.predefined-context-conn.php)</dt>

<dt>[6.2\. Message Context Variables](policy.context-mess.php)</dt>

</dl>

</dd>

<dt>[7\. Clustering](cluster.php)</dt>

<dd>

<dl>

<dt>[7.1\. Configuration Overview](cluster.config.overview.php)</dt>

<dt>[7.2\. DuraVIP™](cluster.config.duravip.php)</dt>

<dt>[7.3\. Clustered Logging](cluster.logging.php)</dt>

<dt>[7.4\. Web UI Clustered Logging](cluster.realtime_logging.php)</dt>

<dt>[7.5\. Clustered Data Replication](cluster.replication.php)</dt>

<dt>[7.6\. Installing Momentum Clustering](cluster.installation.php)</dt>

<dt>[7.7\. Using the Momentum Cluster Manager](cluster.operations.php)</dt>

<dt>[7.8\. The `cidr_server`](cluster.cidr_server.php)</dt>

</dl>

</dd>

<dt>[8\. Sieve++](sieve.php)</dt>

<dd>

<dl>

<dt>[8.1\. The differences between Sieve and Sieve++](sieve.differences.php)</dt>

<dt>[8.2\. Sieve's Basic Syntax](sieve.syntax.basic.php)</dt>

<dt>[8.3\. RFC Standard Sieve Enhancements](sieve.enhancements.php)</dt>

<dt>[8.4\. Sieve++, Momentum-specific extensions](sieve.ecaddons.php)</dt>

</dl>

</dd>

</dl>

| [Prev](typographical.php)  |   |  [Next](install.php) |
| 1. Typographical Conventions Used in This Document  | [Table of Contents](index.php) |  Chapter 1. Installation |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)