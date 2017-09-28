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

| cluster_server_max_outbound_connections |
| [Prev](conf.ref.cluster_scope_max_outbound_connections.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.connect_timeout.php) |

<a name="conf.ref.cluster_server_max_outbound_connections"></a>
## Name

cluster_server_max_outbound_connections — set the maximum number of outbound connections, and enforce it across a cluster

## Synopsis

`Cluster_Server_Max_Outbound_Connections = 800`

<a name="idp8648336"></a>
## Description

Limits the number of total connections that will be established concurrently by a cluster of Momentum systems, irrespective of bindings. There is no limit enforced by default. 800 is an example value -- a more realistic value would need to be based on the cluster size and the capabilities of the underlying hardware and operating system.

Within a `Binding` stanza, this option will regulate the total number of connections through that particular binding across the cluster.

### Note

The cluster module must be configured with the outbound CIDR parameters as defined here: [Section 7.7, “Data Replication”](cluster.config.replication.php "7.7. Data Replication")

<a name="idp8653344"></a>
## Scope

cluster_server_max_outbound_connections is valid in the binding, binding_group and global scopes.

<a name="idp8655040"></a>
## See Also

[server_max_outbound_connections](conf.ref.server_max_outbound_connections.php "server_max_outbound_connections")

| [Prev](conf.ref.cluster_scope_max_outbound_connections.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.connect_timeout.php) |
| cluster_scope_max_outbound_connections  | [Table of Contents](index.php) |  connect_timeout |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)