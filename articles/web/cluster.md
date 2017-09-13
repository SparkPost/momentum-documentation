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

| Chapter 7. Clustering |
| [Prev](policy.context-mess.php)  | Part I. Configuration Guide |  [Next](cluster.config.overview.php) |

## Chapter 7. Clustering

**Table of Contents**

<dl class="toc">

<dt>[7.1\. Configuration Overview](cluster.config.overview.php)</dt>

<dt>[7.2\. DuraVIP™](cluster.config.duravip.php)</dt>

<dt>[7.3\. Clustered Logging](cluster.logging.php)</dt>

<dt>[7.4\. Web UI Clustered Logging](cluster.realtime_logging.php)</dt>

<dt>[7.5\. Clustered Data Replication](cluster.replication.php)</dt>

<dt>[7.6\. Installing Momentum Clustering](cluster.installation.php)</dt>

<dt>[7.7\. Using the Momentum Cluster Manager](cluster.operations.php)</dt>

<dt>[7.8\. The `cidr_server`](cluster.cidr_server.php)</dt>

</dl>

The clustering capabilities of the product enable the following features:

*   Centralized management of configuration for multiple MTA nodes

*   Log aggregation pulls log files from MTA nodes to centralized location(s) on the network

*   Replication of a variety of real-time metrics to allow cluster-wide coordination for inbound and outbound traffic shaping

*   DuraVIP™, our IP Failover mechanism.

Clustering is based on the concept of having a cluster of machines that communicate using a group communication message bus. Ideally, a cluster will have a dedicated gigabit network for transmission of replicated data and internal message moves.

The product assumes that the cluster network is a trusted network, meaning that it leaves host based authentication to be implemented by the network administrator at an appropriate firewall on the network.

| [Prev](policy.context-mess.php)  | [Up](p.guide.php) |  [Next](cluster.config.overview.php) |
| 6.2. Message Context Variables  | [Table of Contents](index.php) |  7.1. Configuration Overview |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)