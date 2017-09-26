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

| Chapter 26. Log Aggregation |
| [Prev](outbound_mail.relay_hosts.php)  | Part III. Configuring Momentum |  [Next](cluster.config.logging.centalized.logging.php) |

## Chapter 26. Log Aggregation

**Table of Contents**

<dl class="toc">

<dt>[26.1\. Configuring Log Aggregation](log_aggregation.php#log_aggregation.configuration)</dt>

<dt>[26.2\. Centralized Logging Example](cluster.config.logging.centalized.logging.php)</dt>

<dt>[26.3\. Complex Centralized Logging Deployments](cluster.config.logging.complex.php)</dt>

<dt>[26.4\. Redundant Logs](cluster.config.logging.redundancy.php)</dt>

<dt>[26.5\. Decommissioning a Log Aggregator](cluster.config.logging.decommissioning.php)</dt>

</dl>

The log aggregation capability of the cluster provides a reliable, durable centralized logging facility. The default cluster configuration implements centralized logging in addition to the regular loggers and maintains its own local logs in the usual location.

There is no requirement that log aggregation be enabled. These logs are gathered for the customer's own use and are not used by any Momentum software. However, log aggregation means that you can see any log from any node on any date by going to the `/var/log/eccluster` directory on the log aggregator (if you use the default configuration).

## 26.1. Configuring Log Aggregation

The following elements are required in order to aggregate log files on the log aggregator:

*   Define logger modules in `ecelerity-cluster.conf`. See [Aggregated Cluster Node Logging](conf.ref.ecelerity_cluster.conf.php#conf.ref.ecelerity_cluster.conf.logging) .

*   Define the `logs` dictionary within the cluster module scope in `ecelerity-cluster.conf` See [logs](modules.cluster.php#option.logs.dictionary) .

    You can view the configuration by issuing the console command **config show cluster**              from the console on a cluster node.

*   Define the `Logs` stanza in `eccluster.conf`. See [Log Aggregation](conf.ref.eccluster.conf.php#conf.ref.eccluster.conf.logs) .

| [Prev](outbound_mail.relay_hosts.php)  | [Up](p.configuration.php) |  [Next](cluster.config.logging.centalized.logging.php) |
| 25.7. Outbound Email Relay  | [Table of Contents](index.php) |  26.2. Centralized Logging Example |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)