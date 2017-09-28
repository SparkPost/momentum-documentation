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

| 7.5. Clustered Data Replication |
| [Prev](cluster.realtime_logging.php)  | Chapter 7. Clustering |  [Next](cluster.installation.php) |

## 7.5. Clustered Data Replication

The Clustered Replication feature set provided by the Momentum clustering suite is an extensive set of data sharing and aggregation facilities for representing information across node boundaries.

The following replication types are supported:

*   cache – replicate a data cache across the cluster

*   inbound_cidr – replicate inbound SMTP connections

*   outbound_cidr – replicate outbound SMTP connections

*   outbound_domains – replicate outbound domains

*   OBTM – replicate outbound message throttles

*   OBTC – replicate outbound connection throttles

*   shared_named_throttles – enable replication of shared throttles

*   metrics – maintain cluster-wide time series views for an IP address or CIDR block

*   eccmgr_metrics – update the eccmgr but not other nodes

### 7.5.1. Replication Configuration

There are three special replication facilities that are used for enforcing clusterwide reception and delivery behaviors. These facilities exist to count inbound connections by IP address as well as outbound connections by both IP address and domain. To enable these facilities, you use the following configuration:

```
Logger cluster/ec_cluster ec_cluster {
  # ... other cluster config ...
  replicate [ type = inbound_cidr ]
  replicate [ type = outbound_cidr ]
  replicate [ type = outbound_domains ]
}
```

Given the above configuration, Momentum will track cluster-wide inbound SMTP connections by IP address in the `inbound_cidr` replicated data structure, the outbound SMTP connections by IP address in the `outbound_cidr` replicated data structure, and the outbound SMTP connections by destination domain in the `outbound_domains` replicated data structure.

From the system console you can view the configuration using the **cluster shared list**             command:

```
22:36:50 ecelerity(2025)> cluster shared list
Currently managed objects:
                  inbound_cidr [lazy, cidrtree w/ snapshots]
                 outbound_cidr [lazy, cidrtree w/ snapshots]
              outbound_domains [lazy, gauge table w/ snapshots]
```

For a complete list of the cluster commands available from the system console see [Section 7.5.2, “Cluster Management Using Console Commands”](cluster.replication.php#cluster.logging.console "7.5.2. Cluster Management Using Console Commands").

**7.5.1.1. Tracking inbound connections via inbound_cidr**

On a running system, investigating the contents of the `inbound_cidr` storage will show us the inbound connections to our cluster:

```
22:45:34 ecelerity(2025)> cluster shared show inbound_cidr
lazy, snapped cidrtree 'inbound_cidr', view 'global'
     31                         10.0.0.0/8
     31                         10.0.0.0/24
      4                         10.0.0.0/25
      4                         10.0.0.103/32
     27                         10.0.0.160/27
     27                         10.0.0.176/29
     27                         10.0.0.180/31
     14                         10.0.0.180/32
     13                         10.0.0.181/32
```

The above output shows the view of inbound SMTP connections per IP address aggregated across the entire cluster. In order to view the inbound connection counts to a particular node, we can ask for the view of that information from the perspective of any node by appending `from nodename` where `nodename` is the name of the node:

```
22:45:40 ecelerity(2025)> cluster shared show inbound_cidr from relay-0-1
lazy, snapped cidrtree 'inbound_cidr', view '#ec1-12137#relay-0-1'
      5                         10.0.0.0/8
      5                         10.0.0.0/24
      5                         10.0.0.160/27
      5                         10.0.0.176/29
      5                         10.0.0.180/31
      4                         10.0.0.180/32
      1                         10.0.0.181/32

22:45:59 ecelerity(2025)> cluster shared show inbound_cidr from relay-0-2
lazy, snapped cidrtree 'inbound_cidr', view '#ec1-48616#relay-0-2'
      7                         10.0.0.0/8
      7                         10.0.0.0/24
      3                         10.0.0.103/32
      4                         10.0.0.160/27
      4                         10.0.0.180/31
      2                         10.0.0.180/32
      2                         10.0.0.181/32
```
**7.5.1.2. Tracking outbound connections via outbound_cidr**

To look at the outbound SMTP connections by IP address, we can use the same command as above, replacing `inbound_cidr` with `outbound_cidr`, yielding an identical data layout and meaning (excepting the data represents outbound connections).

**7.5.1.3. Tracking outbound connections via outbound_domain**

The outbound connections tallied by destination domain can be viewed by specifying the `outbound_domain` shared structure:

```
23:05:30 ecelerity(2025)> cluster shared show outbound_domain
lazy, snapped gauge table 'outbound_domain', view 'global'
                                                     aol.com:           10
                                               bellsouth.net:           23
                                                 hotmail.com:          246
                                                  omniti.com:            5
                                                   yahoo.com:           65
```

Just as in any shared structure view, you can limit the display to the perspective of any participating node by appending `from nodename` to the command. To see the view from relay-0-1 instead of the cluster-wide aggregate, we can issue the following command:

```
23:05:34 ecelerity(2025)> cluster shared show outbound_domain from relay-0-1
lazy, snapped gauge table 'outbound_domain', view '#ec1-12137#relay-0-1'
                                                     aol.com:            1
                                               bellsouth.net:            4
                                                 hotmail.com:           26
                                                   yahoo.com:           30
```
**7.5.1.4. Replicated inbound audit metrics**

We can use this feature with the inbound audit module (see [Section 14.33, “inbound_audit – Inbound traffic analytics”](modules.inbound_audit.php "14.33. inbound_audit – Inbound traffic analytics")) in order to maintain cluster-wide time series views of inbound connections, receptions and rejections from any IP address or CIDR block.

```
Logger cluster/ec_cluster cluster {
  # ... other cluster configuration ...
  replicate [ type = "metrics" parameters="connect;reception;rejection" ]
}
```

With this configuration, it's also necessary to define one or more audit series for the inbound audit module.

```
Validate validate/inbound_audit inbound_audit
{
        # keep audit data for the last half hour,
        # placed into six windows of 5 min (300s) each
        monitor = "300,6"
}
```

With such a configuration we can view connections, receptions and rejections over the entire cluster for the last half hour from any IP address or CIDR block. From the console, this can be done using a command of this form:

`09:16:03 ecelerity> inbound_audit show ip 127.0.0.0/8`

You can also implement policy based on these time series using Sieve. See [ec_ip_connections_cluster](sieve.ref.ec_ip_connections_cluster.php "ec_ip_connections_cluster"), [ec_ip_receptions_cluster](sieve.ref.ec_ip_receptions_cluster.php "ec_ip_receptions_cluster"), and [ec_ip_rejections_cluster](sieve.ref.ec_ip_rejections_cluster.php "ec_ip_rejections_cluster").

**7.5.1.5. Replicated named audit series**

Named audit series are a more general mechanism than the inbound audit metrics. We can use them to maintain time series for any events we wish—in comparison, the inbound audit metrics can track only connections, receptions and rejections. Since the source IP address is recorded for each event, we can obtain event counts by IP address or CIDR block. These named audit series can be replicated across a cluster by including `audit_series` in the metrics replication stanza.

```
Logger cluster/ec_cluster cluster {
  # ... other cluster configuration ...
  replicate [ type = "metrics" parameters="audit_series" ]
}
```

With this configuration, we can use Sieve to add data to a named series and specify that it be replicated. We can also obtain counts from these series. See [audit_series_add](sieve.ref.audit_series_add.php "audit_series_add") and [audit_series](sieve.ref.audit_series.php "audit_series").

**7.5.1.6. Replicated Caches**

In addition to the other built-in replication objects, we can dynamically replicate arbitrary key-value pairs across all nodes of the cluster using replicated caches.

<a name="cluster.replicatedcache.code"></a>

**Example 7.1. Replicated caches**

```
Module datasource/ds_core ds_core {
  mycache [
    uri = "odbc:DSN=sqlserver;UID=user;PWD=pass"
    cache_size = 200
    cache_life = 360
    serialized = true
  ]
}

Logger cluster/ec_cluster cluster {
  # ... other cluster configuration ...
  replicate [
    type = "cache"
    replication_name="mycache" ]
}
```

Note that if you have the replicate type defined as `cache` you must supply the `replication_name` of the cache and that name must match the cache name defined in the `ds_core` module. In [Example 7.1, “Replicated caches”](cluster.replication.php#cluster.replicatedcache.code "Example 7.1. Replicated caches"), for example, the name `mycache` referenced in the ec_cluster stanza is defined in the ds_core module. For more information about using the `ds_core` module see [Section 14.25, “ds_core – Datasource Query Core”](modules.ds_core.php "14.25. ds_core – Datasource Query Core").

This stanza can be repeated any number of times, specifying a unique `replication_name` for each cache. Key-value pairs can be inserted into, or retrieved from, the replicated cache at run time using Sieve. See [ec_cluster_cache_get](sieve.ref.ec_cluster_cache_get.php "ec_cluster_cache_get") and [ec_cluster_cache_set](sieve.ref.ec_cluster_cache_set.php "ec_cluster_cache_set").

By default, nodes that join the cluster will receive new or updated key-value pairs as they are inserted into the cache. Any pre-existing key-value pairs present on other nodes will not be populated into the cache on a new node until the key-value pair is updated. To change this behavior, snapshots can be enabled on a per-cache basis. This causes all pre-existing key-value pairs on the other nodes to be populated on a new node as soon as it joins the cluster.

```
Logger cluster/ec_cluster cluster {
  # ... other cluster configuration ...
  replicate [ type = "cache" replication_name="mycache" parameters="snapshot" ]
}
```
**7.5.1.7. Shared named throttles**

Cluster-wide enforcement of name-keyed throttles is supported in the MTA, and accessed in a similar way to the [ec_throttle](sieve.ref.ec_throttle.php "ec_throttle") support for single instance deployments. The documentation for [ec_shared_throttle](sieve.ref.ec_shared_throttle.php "ec_shared_throttle") provides information on how to interact directly with the throttles. The following stanza must be placed in the cluster module configuration to enable the shared throttles:

```
Logger cluster/ec_cluster cluster {
  # ... other cluster configuration ...
  replicate [ type = "shared_named_throttles" ]
}
```
**7.5.1.8. Shared Outbound Throttles**

Cluster-wide outbound connection and message throttles are supported in the MTA, using the [cluster_outbound_throttle_connections](conf.ref.cluster_outbound_throttle_connections.php "cluster_outbound_throttle_connections") and [cluster_outbound_throttle_messages](conf.ref.cluster_outbound_throttle_messages.php "cluster_outbound_throttle_messages") configuration parameters. The cluster stanza must include a `replicate` directive to enable outbound message throttles (OBTM) or outbound connection throttles (OBTC).

```
Logger cluster/ec_cluster cluster {
  # ... other cluster configuration ...
  replicate [ type = "OBTM" ]   # outbound message throttles
  replicate [ type = "OBTC" ]   # outbound connection throttles
}
```
**7.5.1.9. Shared Gauge Caches**

A gauge cache is a collection of named counters (gauges), which are manipulated by increment or decrement operations. In Sieve, these are used via the [ec_gauge_cache](sieve.ref.ec_gauge_cache.php "ec_gauge_cache") functions. When gauge cache replication is enabled, increments or decrements are broadcast to all nodes on the cluster.

```
Logger cluster/ec_cluster cluster {
  # ... other cluster configuration ...
  replicate [ type = "metrics" parameters="gauge_cache" ]
}
```

Once gauge cache replication is enabled in this way, we can specify which caches to replicate on an individual basis. This is done using the `replicate` argument to `ec_gauge_cache_init`.

### 7.5.2. Cluster Management Using Console Commands

The cluster module can be controlled and queried through the system console; the following commands are available:

**7.5.2.1. cluster help**

Display the available console commands.

**7.5.2.2. cluster arp show**

Resolve the MAC addresses of the cluster. Sample output follows.

```
12:34:15 ecelerity(/tmp/2025)> cluster arp show
10.80.116.204    [00:e0:81:63:5c:e8]  43s
10.80.116.202    [00:30:48:74:28:24]  13s
10.80.116.201    [00:e0:81:63:5d:64]  8s
10.80.117.25     [00:30:48:52:f9:06]  8s
10.80.117.2      [00:00:5e:00:01:0c]  8s
10.80.116.203    [00:30:48:74:29:ee]  8s
```
**7.5.2.3. cluster duravip show**

Show the current state of DuraVIP™ bindings. Sample output follows.

```
12:35:44 ecelerity(/tmp/2025)> cluster duravip show
DuraVIP State:
10.80.116.50/flowgomail-hotmail-50/flowgomail-hotmail-51/flowgomail-hotmail-52: (owned,safe) multivip
	[view stable for 5420 seconds]
	[configuration stable for 5409 seconds]
    	labrat-2 multivip
    	labrat-1 multivip
 *  	labrat-4 multivip
10.80.116.53/flowgomail-hotmail-53: (owned,safe) multivip
	[view stable for 5420 seconds]
	[configuration stable for 5466 seconds]
 *  	labrat-2 multivip
    	labrat-1 multivip
    	labrat-4 multivip
10.80.116.54/flowgomail-hotmail-54: (owned,safe) multivip
	[view stable for 5420 seconds]
	[configuration stable for 5465 seconds]
 *  	labrat-2 multivip
    	labrat-1 multivip
    	labrat-4 multivip
...
```
**7.5.2.4. cluster duravip debug  | **

Turn DuraVIP™ debugging on or off.

**7.5.2.5. cluster membership**

Display the current operating status and parameters including the private name of the node, the node name and the node type. If the node is disconnected, no information is available. Sample output follows.

```
13:42:20 ecelerity(/tmp/2025)> cluster membership
Private Name: #eccmgr#labrat-3
Node Name: (Null)
Node Type: Manager
Version: 2.2.2.35 r(26875/26878M)
Address: 0.0.0.0:0
Groups: ec_cluster

Private Name: #ec0-24573#labrat-4
Node Name: labrat-4
Node Type: Momentum
Version: 2.2.2.35 r(26825/26848M)
Address: 10.80.116.204:4802
Groups: ec_cluster, ec_console

Private Name: #ec0-22787#labrat-1
Node Name: labrat-1
Node Type: Momentum
Version: 2.2.2.35 r(26825/26848M)
Address: 10.80.116.201:4802
Groups: ec_cluster, ec_console
...
```
**7.5.2.6. cluster duravip show tables**

Display the DuraVIP™ state tables in XML format.

**7.5.2.7. cluster info**

Display the current operating status and parameters. Sample output follows.

```
13:38:31 ecelerity(/tmp/2025)> cluster info
Daemon: 4803 [m:#ec0-22787#labrat-1,s:#ec1-22787#labrat-1]
Control Group: ec_console
Cluster Group: ec_cluster (labrat-4 is leader)
Logger Group: none
```
**7.5.2.8. cluster nodename**

Show the name of the local node.

**7.5.2.9. cluster nodeaddr**

Show the cluster protocol service address. Sample output follows.

```
13:40:17 ecelerity(/tmp/2025)> cluster nodeaddr
10.80.116.201:4802
```
**7.5.2.10. cluster reset**

Reset the node cluster membership.

**7.5.2.11. cluster shared list**

This command displays the currently managed objects. For example:

```
22:36:50 ecelerity(2025)> cluster shared list
Currently managed objects:
                  inbound_cidr [lazy, cidrtree w/ snapshots]
                 outbound_cidr [lazy, cidrtree w/ snapshots]
              outbound_domains [lazy, gauge table w/ snapshots]
```
**7.5.2.12. cluster shared show **

Display the specified shared object. Sample output follows.

```
15:26:28 ecelerity(/tmp/2025)> cluster shared show inbound_cidr
lazy, snapped cidrtree 'inbound_cidr', view 'global'
```
**7.5.2.13. cluster shared show  from **

Display the specified shared object from node's perspective.

**7.5.2.14. cluster show logs**

Show the size, name and location of the cluster logs. Sample output follows.

```
15:40:34 ecelerity(/tmp/2025)> cluster show logs
mainlog
	[on disk: 1604005 bytes]
	[subscriber: 'master' @ 00000000:0000a43a]
paniclog
	[on disk: 9184 bytes]
	[subscriber: 'master' @ 00000000:00000059]
rejectlog
	[on disk: 3950 bytes]
	[subscriber: 'master' @ 00000000:0000001e]
bouncealllog
	[on disk: 0 bytes]
```

| [Prev](cluster.realtime_logging.php)  | [Up](cluster.php) |  [Next](cluster.installation.php) |
| 7.4. Web UI Clustered Logging  | [Table of Contents](index.php) |  7.6. Installing Momentum Clustering |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)