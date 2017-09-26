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

| 7.9. Configuring Momentum for High Availability and Failover |
| [Prev](cluster.config.operations.php)  | Chapter 7. Clustering |  [Next](cluster.cidr_server.php) |

## 7.9. Configuring Momentum for High Availability and Failover

Momentum's architecture supports fault-tolerant configurations. This means that you can operate in an environment that is readily configured to support failing over automatically.

Components that support high availability and fault tolerance include:

*   ecconfigd

*   DuraVIP™ bindings

*   Command delegation in a cluster

*   Centralized logging

*   Per-node data

*   CIDR server/as_logger

### 7.9.1. ecconfigd and eccfg

**ecconfigd** is the Momentum configuration management server. Configuration files are maintained in a version control repository and exported via the ecconfigd service. In a clustered configuration, ecconfigd will automatically replicate your configuration repositories to all participating cluster nodes.

When nodes share the same configuration, DuraVIP™ bindings provide transparent failover in the event that a node fails.

### 7.9.2. DuraVIP™ Bindings

One of the most important features of Momentum cluster configuration is DuraVIP™ bindings. DuraVIP™ maintains the availability of bindings and listener services even when nodes are down either due to failure or for administrative reasons.

With DuraVIP™, all injection IP addresses and outbound IP addresses are assigned automatically to the nodes in the cluster, allowing the reception and delivery of messages to be divided among the nodes. In the event of node failure, these injection IPs and outbound IP addresses are assumed by the remaining nodes

If the owner of a given IP address goes down, either due to administrative action or due to failure, the other nodes will notice its departure from the cluster and then hold an election for that IP address, assigning it to another node. The IP will then be plumbed on the new owning node with minimal interruption to service.

When the downed node rejoins the cluster, another election will be held for ownership of the IP addresses, which will likely cause reassignment of IP addresses back to the downed node.

For a complete description of how DuraVIP™ bindings are implemented see [Section 7.5, “DuraVIP™: IP Fail over”](cluster.config.duravip.php "7.5. DuraVIP™: IP Fail over").

### 7.9.3. Command Delegation in a Cluster

The web UI makes use of the cluster manager to talk to nodes. In a worst case failure scenario, a cluster manager fails and the web interface is unable to gather statistics and information from the nodes.

As a safeguard we recommend that a web UI be installed alongside the cluster manager. If fault tolerance is desired, simply adding a new cluster manager with a web interface will suffice.

### 7.9.4. Central Logging and Aggregation

The log aggregation capability of the cluster provides a reliable, durable, centralized logging facility. The default cluster configuration implements centralized logging in addition to the regular loggers, so that the node keeps its own local logs in the usual location as well as making that information available to the cluster manager.

If redundant logs are required,customers are recommended to follow one of the two following options:

*   Store data on a Storage Area network (SAN)

*   Use multiple managers with separate subscriber names for consuming the jlogs

For a complete discussion of log aggregation see [Section 7.6, “Log Aggregation”](cluster.config.logging.php "7.6. Log Aggregation").

### 7.9.5. Per-node Data

Per-node logs can be made redundant by storing the node-specific data on a SAN. Locking semantics must be checked for the log: spool locks are currently enforced and safe.

On the SAN, the paths to directories should be unique per node and each node should be able to mount the SAN directory at its unique location.

### 7.9.6. CIDR Server and as_logger

The CIDR Server queries the data created by an as_logger module and displays the result in the cluster console. The CIDR server and as_logger can be configured to log data to a SAN. Locking semantics must be checked.

For more information see [Section 14.6, “as_logger – Audit series logger”](modules.as_logger.php "14.6. as_logger – Audit series logger") and [Section 7.10, “The `cidr_server`”](cluster.cidr_server.php "7.10. The cidr_server").

| [Prev](cluster.config.operations.php)  | [Up](cluster.php) |  [Next](cluster.cidr_server.php) |
| 7.8. Using the Cluster Manager  | [Table of Contents](index.php) |  7.10. The `cidr_server` |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)