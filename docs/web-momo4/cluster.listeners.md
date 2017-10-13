| 16.5. Cluster-specific Listeners |
| [Prev](conf.ref.msgc_server.conf.php)  | Chapter 16. Cluster-specific Configuration |  [Next](cluster.config.failover.php) |

## 16.5. Cluster-specific Listeners

This section describes the listeners that are used in a cluster configuration.

### 16.5.1. ECCluster_Listener Configuration

Any direct, point-to-point communication between cluster nodes that does not require membership-wide ordering semantics will be performed over TCP/IP via the port specified in the `Listen` stanza within the ECCluster_Listener scope. Any node can establish a connection to the destination node at the address specified by the ECCluster_Listener and point-to-point communication will ensue.

The ECCluster_Listener is configured in the `ecelerity-cluster.conf` file. The following is an example configuration:

```
ECCluster_Listener {
  Listen "*:4802" {}
}
```

For details about the non-module specific configuration options that are valid in the ECCluster_Listener scope, refer to [Chapter 66, *Configuration Options Summary*](config.options.summary.php "Chapter 66. Configuration Options Summary") .

Modules and their configuration options are discussed in the [Chapter 71, *Modules Reference*](modules.php "Chapter 71. Modules Reference") .

For general information regarding listeners, see [Section 15.4, “Listeners”](listeners.php "15.4. Listeners").

### 16.5.2. Msgcserver_Listener Configuration

The msgcserver_listener mediates between msgc_servers and between msgc_servers and their clients. It is an internal service for msgc communication and is configured in the `msgc_server.conf` file. The following is a typical configuration:

```
msgcserver_listener {
   Listen ":4809" { }
}
```

As with other listeners, a `Listen` scope is defined within the msgcserver_listener. This scope defines the port on which the listener listens. By default, the msgcserver_listener listens on port 4809.

For details about the non-module specific configuration options that are valid in the msgcserver_listener and its nested scopes, refer to [Chapter 66, *Configuration Options Summary*](config.options.summary.php "Chapter 66. Configuration Options Summary") .

Modules and their configuration options are discussed in the [Chapter 71, *Modules Reference*](modules.php "Chapter 71. Modules Reference") .

For general information regarding listeners, see [Section 15.4, “Listeners”](listeners.php "15.4. Listeners").

| [Prev](conf.ref.msgc_server.conf.php)  | [Up](cluster.php) |  [Next](cluster.config.failover.php) |
| 16.4. `msgc_server.conf` File  | [Table of Contents](index.php) |  16.6. Configuring Momentum for High Availability and Failover |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)