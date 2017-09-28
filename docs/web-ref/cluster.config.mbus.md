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

| 7.3. Message Bus |
| [Prev](cluster.config.management.php)  | Chapter 7. Clustering |  [Next](cluster.config.deployment.php) |

## 7.3. Message Bus

The cluster utilitizes an extended virtual synchrony group communication messaging bus to share information and coordinate operations. The message bus process, mbusd, must run on each node participating in the cluster. In addition, the `mbusd.conf` configuration file must be identical across those nodes for correct operation of the cluster. We strongly recommend that the `mbus.conf` file be checked into the "global" repo so that the cluster-wide configuration replication will automatically keep each node in sync. In other words, the `mbus.conf` file is typically found at `/opt/msys/ecelerity/etc/conf/global/mbus.conf`.

**Configuration Change. ** As of version 3.4, Momentum uses [Section 14.47, “msgc – Modules”](modules.msgc.php "14.47. msgc – Modules") for cluster communication rather than `mbus`.

Message bus configuration is sensitive to your overall networking configuration, so we strongly advise that you follow these guidelines:

*   Each node must have "nodename" on the message bus.

*   The nodename must be 19 characters or less

*   The nodename must correspond to the system nodename

*   The nodename must be DNS resolvable (the DNS search path must allow resolution of the 19-character-or-less nodename)

*   The reverse lookup for the IP should resolve to the nodename

When adding new nodes to the cluster, we recommend adding the node to the `mbus.conf`, committing that change to the repository and allowing enough time for the existing nodes to pick up the change and restart their mbus daemons before you bring the daemon for the new node online.

For a description of the `mbus.conf` file see [mbus.conf](mbus.conf.php "mbus.conf").

| [Prev](cluster.config.management.php)  | [Up](cluster.php) |  [Next](cluster.config.deployment.php) |
| 7.2. Configuration Management  | [Table of Contents](index.php) |  7.4. Cluster Deployment |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)