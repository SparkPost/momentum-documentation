| cluster_server_max_outbound_connections |
| [Prev](conf.ref.cluster_scope_max_outbound_connections.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.connect_timeout.php) |

<a name="conf.ref.cluster_server_max_outbound_connections"></a>
## Name

cluster_server_max_outbound_connections — set the maximum number of outbound connections, and enforce it across a cluster

## Synopsis

`cluster_server_max_outbound_connections = 800`

<a name="idp24002624"></a>
## Description

Limits the number of total connections that will be established concurrently by a cluster of Momentum systems, irrespective of bindings. There is no limit enforced by default; 800 is an example value. A more realistic value would need to be based on the cluster size and the capabilities of the underlying hardware and operating system.

Within a `Binding` stanza, this option will regulate the total number of connections through that particular binding across the cluster.

### Note

The cluster module must be configured with the outbound CIDR parameters.

<a name="idp24007136"></a>
## Scope

cluster_server_max_outbound_connections is valid in the binding, binding_group, and global scopes.

<a name="idp24009024"></a>
## See Also

[server_max_outbound_connections](conf.ref.server_max_outbound_connections.php "server_max_outbound_connections")

| [Prev](conf.ref.cluster_scope_max_outbound_connections.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.connect_timeout.php) |
| cluster_scope_max_outbound_connections  | [Table of Contents](index.php) |  connect_timeout |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)