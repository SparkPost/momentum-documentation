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

| 16.6. Configuring Momentum for High Availability and Failover |
| [Prev](cluster.listeners.php)  | Chapter 16. Cluster-specific Configuration |  [Next](cluster.riak.configuration.php) |

## 16.6. Configuring Momentum for High Availability and Failover

Momentum's architecture supports fault-tolerant configurations. This means that you can operate in an environment that is readily configured to support failing over automatically.

Components that support high availability and fault tolerance include the following:

*   [`ecconfigd`](conf.overview.php#conf.ecconfigd "15.1.3. Configuration Management (ecconfigd)")

*   [DuraVIP™ bindings](cluster.config.duravip.php "Chapter 27. DuraVIP™: IP Fail over")

*   [Centralized logging and Aggregration](log_aggregation.php "Chapter 26. Log Aggregation")

*   Per-node data

    Per-node logs can be made redundant by storing the node-specific data on a SAN. Locking semantics must be checked for the log: spool locks are currently enforced and safe.

    On the SAN, the paths to directories should be unique per node and each node should be able to mount the SAN directory at its unique location.

*   [cidr_server](cluster.cidr_server.php "Chapter 39. CIDR Server") and [as_logger](modules.as_logger.php "71.7. as_logger – Audit Series Logger")

    The **cidr_server** queries the data created by an as_logger module and displays the result in the cluster console. The **cidr_server** and as_logger can be configured to log data to a SAN. Locking semantics must be checked.

| [Prev](cluster.listeners.php)  | [Up](cluster.php) |  [Next](cluster.riak.configuration.php) |
| 16.5. Cluster-specific Listeners  | [Table of Contents](index.php) |  16.7. Configuring Riak in a Cluster |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)