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