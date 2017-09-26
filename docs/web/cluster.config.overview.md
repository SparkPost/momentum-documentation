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

| 7.1. Configuration Overview |
| [Prev](cluster.php)  | Chapter 7. Clustering |  [Next](cluster.config.duravip.php) |

## 7.1. Configuration Overview

The clustering module for Momentum tightly integrates several key clustering features into one cohesive package. The configuration of the system is performed in both the module loading section as well as in the Momentum core configuration. The clustering module extends the Momentum configuration syntax slightly to more intuitively accomplish per-domain and per-binding cluster configuration.

```
Security {
  user = ecuser
  group = ecuser
  # On Linux, allow binding to privileged ports without requiring
  # a process restart
  Capabilities = "cap_net_bind_service+ep"
  # On Solaris, allow binding to privileged ports without requiring
  # a process restart
  Privileges = "basic net_privaddr"
}

ESMTP_Listener = (
    192.168.0.1:25,200
    192.168.0.41:25,200 <duravip="enabled"> [
        0.0.0.0/0 = (
            personality [
                idle_time = 300
                banner_hostname = "r1.example.com"
            ]
            continue
        )
    ]
)
Binding example <duravip="enabled"> {
  Bind_Address = 192.168.0.41
}
Logger logging/ec_logger ec_logger {
    log_transient_failures = on
    mainlog = "cluster:///var/log/ecelerity/mainlog.cluster=>master"
    paniclog = "cluster:///var/log/ecelerity/paniclog.cluster=>master"
    rejectlog = "cluster:///var/log/ecelerity/rejectlog.cluster=>master"
}
Logger logging/custom_logger custom_logger {
    permanent_failure_logfile =
        "cluster:///var/log/ecelerity/bounces.cluster=>master"
    permanent_failure_format =
        "%b %B %c %i %m@%M %H %N %p %r@%R %s %t %T %U %n"
}
Logger cluster/ec_cluster cluster  {
    mbus_daemon = 4803
    cluster_group = ec_cluster
    control_group = ec_console
    cluster_listener = *:4802
    # nodename = "node1"
    # nodeaddr = "192.168.0.1"
    # Clustered logging configuration
    logs [
        rejectlog = "/var/log/ecelerity/rejectlog.cluster"
        paniclog = "/var/log/ecelerity/paniclog.cluster"
        mainlog = "/var/log/ecelerity/mainlog.cluster"
        bouncealllog = "/var/log/ecelerity/bounces.cluster"
    ]
    # Replication Directives
    replicate [ type = "inbound_cidr" ]
    replicate [ type = "outbound_cidr" ]
    replicate [ type = "outbound_domains" ]
    # DuraVIP network topology hints
    192.168.0.0/24 [
        cidrmask = "32"
        interface = "bge0"
    ]
}
```

### 7.1.1. Identity

<dl class="variablelist">

<dt>nodename</dt>

<dd>

Specifies the local nodename. If left blank, the current system's hostname will be used (as returned from gethostname()). It is highly recommended that this be left blank and that the system's hostname be used.

</dd>

<dt>nodeaddr</dt>

<dd>

Specifies the local node's IP address. If left blank, the nodename will be resolved to an IP address and that address will be used. It is highly recommended that this be left blank and that the IP address associated with the nodename be the cluster-accessible IP address for this node.

</dd>

</dl>

### 7.1.2. Cluster Communications

<dl class="variablelist">

<dt>mbus_daemon</dt>

<dd>

The most important underlying component of the clustering system is the underlying messaging bus. Momentum clustering module utilizes a messaging bus that provides extended virtual synchrony (EVS) messaging semantics. The Momentum instance will attach to this node over some form of inter-process communication socket (IPC) (currently either AF_INET or AF_UNIX) as specified by the `mbus_daemon` configuration option.

</dd>

<dt>cluster_group</dt>

<dd>

The DuraVIP™ system will coordinate IP ownership responsibilities via the `cluster_group` EVS group.

</dd>

<dt>control_group</dt>

<dd>

Each node can respond to normal console commands received on the `control_group`. The cluster console manager utilizes this group to issue cluster-wide configuration commands to update and discover changes in configuration information.

</dd>

<dt>cluster_listener</dt>

<dd>

Any direct, point-to-point communication between cluster nodes that does not require membership-wide ordering semantics will be performed over TCP/IP via the `cluster_listener`. The node in need will establish a connection to the destination node at the address specified by the `cluster_listener` configuration directive and point-to-point communication will ensue.

</dd>

</dl>

Under normal circumstances, the `mbus_daemon`, `cluster_group`, `control_group` and `cluster_listener` should be left at their default values (as shown in the configuration above).

### 7.1.3. DuraVIP™

The DuraVIP™ featureset maintains the availability of MultiVIP© bindings and listener services on IP addresses despite node failures. Each binding or listener that should be managed in this fashion should be marked with a `duravip="enabled"` attribute as shown in the above configuration.

As Momentum is responsible for adding and removing the corresponding IP addresses more information must be known about the IP networks and physical interfaces on which these IPs will reside. Within the module configuration, there is a section labelled `<IP>/<CIDR>` that provides this additional information for IP addresses that fall in its range.

<dl class="variablelist">

<dt>interface</dt>

<dd>

In the above configuration, the section 192.168.0.0/24 informs the clustering module that IPs that fall on that network will be added to the `bge0` ethernet interface.

</dd>

<dt>cidrmask</dt>

<dd>

When bringing an IP address online, you must also know the netmask it will be using. The cidrmask directive indicates the number of bits in the netmask for a given IP address. Above, we see that the IP address should be added with a /32 netmask (i.e. 255.255.255.255). It is most common to add IP aliases with a 255.255.255.255 netmask, but this can vary between operating systems.

</dd>

</dl>

### 7.1.4. Clustered Logging

The Momentum clustering module provides two facilities that aid administrators in setting up cluster-wide consolidated logging. The first of these is a node-local clustered I/O layer which is provided by the clustering module as the `cluster://` URI schema. A typical log destination would look like `cluster:///var/log/ecelerity/mainlog.cluster=>master` where `cluster://` tells the I/O abstraction layer to use node-local segmented data format, `/var/log/ecelerity/mainlog.cluster` is the directory in which the node-local log stream will be stored (created on demand), and `=>master` specifies that a subscriber named "master" should be added to the node-local log stream if it is created on demand.

The second part of the clustered logging solution is the log file service (provided over the `cluster_listener`). This service lets subscribers connect to Momentum and request a "replay" of logs since their last checkpoint and then checkpoint the reader. This is a durable logging mechanism for aggregation. The log file server is configured in the `logs` section of the cluster module configuration.

Each logfile that should be serviced in this fashion is given a key name and a corresponding local path that should match the path portion of the `cluster://` log destination specified in the other Loggers throughout your configuration.

### 7.1.5. Replication

The replication component of the clustering module is considered its most powerful and versatile feature. The `replicate` directive allows you to employ a sound and efficient replication framework to the data managed within Momentum. Such metrics as the number of current connections from a specific netblock are calculated locally by referencing an internal structure called a CIDR tree. By specifying `replicate [ type = "inbound_cidr" ]`, we tell the clustering subsystem to share all the local information about inbound connections tracked in its CIDR tree with every other node in the cluster (and vice versa). Using this shared information, the replication system will maintain an aggregated "cluster-wide" CIDR tree representing **all** inbound connections to the cluster.

The same is possible for outbound connections via `type = "outbound_cidr"` as well as outbound connections grouped by destination domain via `type = "outbound_domains"`. For outbound connections, it may be desirable to be more granular than aggregating on a cluster-wide premise. This is discussed in more detail in the cluster data replication section.

In addition to native Momentum data, it is possible to replicate user controlled data sets as well (such as caches). This provides a transparent and convenient mechanism to cache data from a module level in a medium that is accessible via every node participating in the cluster. This is discussed in more detail in the cluster data replication section.

| [Prev](cluster.php)  | [Up](cluster.php) |  [Next](cluster.config.duravip.php) |
| Chapter 7. Clustering  | [Table of Contents](index.php) |  7.2. DuraVIP™ |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)