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

| 7.2. DuraVIP™ |
| [Prev](cluster.config.overview.php)  | Chapter 7. Clustering |  [Next](cluster.logging.php) |

## 7.2. DuraVIP™

### 7.2.1. DuraVIP™ Configuration

Durable MultiVIP© bindings or DuraVIP™ is achieved through the use of extended virtual synchrony group communication. The nodes comprising a cluster coordinate to share the responsibility over a global set of virtual interfaces.

On each instance, MultiVIP© bindings and Listeners may be marked with the `duravip="enabled"` attribute. An instance will manage Bindings marked in this fashion differently than normal Bindings.

Under non-clustered operations, the administrator is responsible for allocating the IP address to which a binding is bound on the machine. The action of placing an IP address "live" on a machine's interface is a manual one. If that IP address is not currently available on the machine, the binding will be marked as off-line.

When clustering is enabled and bindings (or listeners) are marked as DuraVIP™, the clustering system will take on the responsibility of adding and removing these virtual IP addresses to the system as needed. The nodes participating in a cluster will coordinate with each other to deterministically create a consistent clusterwide configuration of owners. At any time, exactly one node in the cluster will be the owner of a DuraVIP™. Additionally, the cluster will make a best effort to evenly balance responsibility for DuraVIP™ bindings across all participating nodes.

As Momentum will be responsible for bringing on-line IP addresses that were previously not available at the local server, it must understand how to do so. The IP address alone is not enough information to bring an IP address on-line. In addition to the IP address, Momentum must know the physical interface on which to place the IP address as well as the netmask to assign. This "hinting" is accomplished via a CIDR notated configuration block in the cluster configuration section of `ecelerity.conf`.

```
Logger cluster/ec_cluster cluster {
  ...
  192.168.0.0/24 [
    interface = "bge0"
    cidrmask = "32"
  ]
}
```

The above configuration snippet shows how one would hint to Momentum that any IP address within the 192.168.0.0 class C network should be placed on the physical interface labelled `bge0` with a 32-bit netmask (255.255.255.255).

The CIDR notated configuration block may also be added to the configuration file using the `include` directive, for example, `include "/opt/ecelerity/etc/interfaces"`.

### Warning

As the DuraVIP™ system migrates IP addresses from one system to another, it is imperative that the set of DuraVIP™ IP addresses not contain the management addresses of any of the underlying systems. If a management address is configured as a DuraVIP™, undefined behavior can occur including a loss of connectivity to the system whose management address was used.

DuraVIP™ does not work across different subnets, meaning you cannot have a DuraVIP™ migrate between servers on different LAN segments, because there is no way to alter the underlying networking.

It is important to note that in almost all cases, the cidrmask should be 32\. The reason for this is described in detail in your operating system's ifconfig man page or other networking documentation.

```
ESMTP_Listener = (
    192.168.0.1 [ ... ACL ...  ]
    192.168.0.10 <duravip="enabled"> [ ... ACL ...  ]
    192.168.0.11 <duravip="enabled"> [ ... ACL ...  ]
    192.168.0.12 <duravip="enabled"> [ ... ACL ...  ]
    192.168.0.13 <duravip="enabled"> [ ... ACL ...  ]
    192.168.0.14 <duravip="enabled"> [ ... ACL ...  ]
    192.168.0.15 <duravip="enabled"> [ ... ACL ...  ]
)
```

In the above configuration, an ESMTP_Listener will be started on 192.168.0.1 (as it is not marked as DuraVIP™). And when the cluster is live and operational, the remaining 6 IP addresses will be negotiated with other nodes that are configured to support them. All nodes that have 192.168.0.10 in their configuration marked as DuraVIP™ will collaborate and elect a single node to be responsible for owning that IP and providing ESMTP listening services on it.

Bindings work in a similar fashion and follow the same semantics as Listeners.

```
Binding companya-1 <duravip="enabled"> {
  Binding_Group = companya
  Bind_Address = 192.168.0.10
}
Binding companya-2 <duravip="enabled" duravip_preference="node5"> {
  Binding_Group = companya
  Bind_Address = 192.168.0.11
}
Binding companya-3 <duravip="enabled"> {
  Binding_Group = companya
  Bind_Address = 192.168.0.12
}
Binding companyb-1 <duravip="enabled"> {
  Binding_Group = companyb
  Bind_Address = 192.168.0.13
}
Binding companyb-2 <duravip="enabled"> {
  Binding_Group = companyb
  Bind_Address = 192.168.0.14
}
Binding companyb-3 <duravip="enabled"> {
  Binding_Group = companyb
  Bind_Address = 192.168.0.15
}
```

In the above configuration, we have 6 bindings (192.168.0.10 through 192.168.0.15) that have the DuraVIP™ feature enabled. The first three are in a group called companya and the latter three are in a group called companyb. In non-clustered operation the Binding_Group has little use aside from reporting. However, in the clustering system real-time statistics can be aggregated and used for traffic shaping based on Binding_Group.

Additionally, we have denoted that a machine "node5" should be responsible for the binding "companya-2" at IP 192.168.0.11\. This is accomplished by assigning the name of the preferred node to the `duravip_preference` attribute. In this case, if node5 is a member of the cluster, it will be responsible for 192.168.0.11\. If node5 is not a member then normal owner election semantics will be employed.

**7.2.1.1. Dependence**

**Configuration Change. ** This feature was introduced in Momentum 2.1.1.

When configuring both DuraVIP™ listeners and bindings in the same cluster, it may be necessary to associate particular listeners to bindings. The reason for this is as follows. If listeners are configured on different IP addresses than bindings, it would be possible for a listener to end up on a different node from its associated binding. A message arriving on the listener would have to be transferred to another node to be sent on its assigned binding. As the message volume increases, this intra-cluster shuffling can have a negative impact on the overall performance of the cluster.

To associate a DuraVIP™ listener with a binding, use the following syntax:

```
ESMTP_Listener = (
    192.168.0.10 <duravip_follow="companya-1">
)
Binding companya-1 <duravip="enabled"> {
    Bind_Address = 192.168.1.100
}
```

You may only use `duravip_follow` on listeners to make listeners follow bindings: Bindings *cannot* follow listeners. The DuraVIP™ entity to follow may be called by its name or its IP address. Note that a listener cannot be both `duravip="enabled"` and `duravip_follow`.

**7.2.1.2. The `arp_all_hosts` Option**

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.42.

Some networks may experience difficulties with Address Resolution Protocol (ARP) traffic when using the DuraVIP™ clustering feature. If you are experiencing ARP-related issues, you can set `arp_all_hosts` = `false` in the cluster stanza to limit the scope of the ARP traffic generated by DuraVIP™ moves. The default value for this option is `true`.

**7.2.1.3. Internal configuration conflicts**

As described, the DuraVIP™ attribute can be set individually on Listeners and Bindings. It is thus possible to enable DuraVIP™ on a binding with a given IP address and not enable it on a Listener with the same IP address. It is not possible to have two machines with the same IP address on the same subnet, so by remembering that DuraVIP™ manages IP addresses on the lowest level, we can reduce the confusion when internally conflicting configurations are provided.

The DuraVIP™ subsystem makes several passes through the configuration and will automatically upgrade a service (Listener or Binding) on an IP address that is marked as DuraVIP™ under another service. For example, in the following configuration, the Listener on 192.168.0.20 is implicitly considered a DuraVIP™-enabled service and will be reflected as such in the online configuration.

```
ESMTP_Listener = (
    192.168.0.20
)
Binding example <duravip="enabled"> {
    Bind_Address = 192.168.0.20
}
```

The same would hold true for the Binding if the DuraVIP™ was omitted and added to the ESMTP_Listener.

**7.2.1.4. Clustered configuration inconsistency**

The DuraVIP™ subsystem attempts to make the most intelligent and **safe** decision regardless of the situation encountered.

**7.2.1.4.1. Preference conflicts**

The DuraVIP™ configuration attribute "duravip_preference" is not a boolean attribute that dictates whether the locally configured node should prefer a particular IP address. The reasoning is that if configuration files are copied between machines, two nodes could prefer the same IP address. By requiring the configuration to explicitly name the node that should prefer a specific IP address, the likelihood of that configuration is dramatically reduced. If, in the unlikely event, two different nodes are brought online both configured to be the preferred owner of an IP address then that address will be marked in conflict and normal election semantics will be employed.

**7.2.1.4.2. Services conflicts**

As detailed in the configuration section, IP addresses that are configured for DuraVIP™ on one service will be automatically upgraded to DuraVIP™ on all services. However, this does not prevent one node from being configured with an ESMTP_Listener on a DuraVIP™ interface while another node is configured with the same DuraVIP™ interface yet without an ESMTP_Listener:

```
# node1 configuration
ESMTP_Listener = ( 192.168.0.51 <duravip="enabled"> )
Binding example <duravip="enabled"> { Bind_Address = 192.168.0.51 }

# node2 configuration
Binding example <duravip="enabled"> { Bind_Address = 192.168.0.51 }
```

In this case, the DuraVIP™ subsystem will mark the IP address as "UNSAFE." However, that is the extent of conflict resolution that will occur. The usual semantics for electing an owner of the IP address will be employed. The tag of UNSAFE is simply to assist the cluster administrator in finding problems.

**7.2.1.4.3. Binding name and IP mismatches**

In Momentum, most mechanisms for assigning a message to a MultiVIP© binding use the Binding name for such assignments. As such, it is essential that the Binding name associated with an IP address be consistent across the cluster. If it is not, it indicates a misconfiguration that could result in messages leaving from the wrong IP address (which is unacceptable for multi- client configurations). If the DuraVIP™ subsystem recognizes such a misconfiguration, it will mark the named DuraVIP™ instance as "BROKEN," and refuse to manage it.

**7.2.1.4.4. Disjoint DuraVIP™ Participation**

The group membership and election processes that drive the DuraVIP™ subsystem are a dynamic extension atop advanced research in the area of highly reliable IP services. The system provides a unified and consistent virtual membership on a per-IP address basis. What this means is that you can have different nodes in the cluster managing different, possibly overlapping, DuraVIP™ sets.

While this is certainly possible, it can be hard to understand the expected behavior of the system in such complicated configurations. As such, it is highly recommended that the global set of bindings and listeners managed under DuraVIP™ are identical on each system.

| [Prev](cluster.config.overview.php)  | [Up](cluster.php) |  [Next](cluster.logging.php) |
| 7.1. Configuration Overview  | [Table of Contents](index.php) |  7.3. Clustered Logging |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)