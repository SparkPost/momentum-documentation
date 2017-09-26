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

| 27.4. DuraVIP™ Configuration Conflicts and Ambiguities |
| [Prev](cluster.config.arp_all_hosts.php)  | Chapter 27. DuraVIP™: IP Fail over |  [Next](cluster.config.replication.php) |

## 27.4. DuraVIP™ Configuration Conflicts and Ambiguities

The DuraVIP™ subsystem attempts to make the most intelligent and **safe** decision regardless of the situation encountered.

### 27.4.1. Preference conflicts

The DuraVIP™ configuration attribute "duravip_preference" is not a boolean attribute that dictates whether the locally configured node should prefer a particular IP address. The reasoning is that if configuration files are copied between machines, two nodes could prefer the same IP address. By requiring the configuration to explicitly name the node that should prefer a specific IP address, the likelihood of that configuration is dramatically reduced. If, in the unlikely event, two different nodes are brought online both configured to be the preferred owner of an IP address then that address will be marked in conflict and normal election semantics will be employed.

### 27.4.2. Services conflicts

As detailed in the configuration section, IP addresses that are configured for DuraVIP™ on one service will be automatically upgraded to DuraVIP™ on all services. However, this does not prevent one node from being configured with an ESMTP_Listener on a DuraVIP™ interface while another node is configured with the same DuraVIP™ interface yet without an ESMTP_Listener:

```
# node1 configuration
ESMTP_Listener {
  Listen "192.168.0.51:25" {
    Enable_Duravip = "true"
  }
}
Binding example {
  Enable_Duravip = "true"
  Bind_Address = 192.168.0.51
}

# node2 configuration
Binding example {
  Enable_Duravip = "true"
  Bind_Address = 192.168.0.51
}
```

In this case, the DuraVIP™ subsystem will mark the IP address as "UNSAFE." However, that is the extent of conflict resolution that will occur. The usual semantics for electing an owner of the IP address will be employed. The tag of UNSAFE is simply to assist the cluster administrator in finding problems.

### 27.4.3. Binding name and IP mismatches

In Momentum, most mechanisms for assigning a message to a MultiVIP© binding use the Binding name for such assignments. As such, it is essential that the Binding name associated with an IP address be consistent across the cluster. If it is not, it indicates a misconfiguration that could result in messages leaving from the wrong IP address (which is unacceptable for multi-client configurations). If the DuraVIP™ subsystem recognizes such a misconfiguration, it will mark the named DuraVIP™ instance as "BROKEN," and refuse to manage it.

### 27.4.4. Disjointed DuraVIP™ Participation

The group membership and election processes that drive the DuraVIP™ subsystem are a dynamic extension atop advanced research in the area of highly reliable IP services. The system provides a unified and consistent virtual membership on a per-IP address basis. What this means is that you can have different nodes in the cluster managing different, possibly overlapping, DuraVIP™ sets.

While this is certainly possible, it can be hard to understand the expected behavior of the system in such complicated configurations. As such, it is highly recommended that the global set of bindings and listeners managed under DuraVIP™ are identical on each system.

| [Prev](cluster.config.arp_all_hosts.php)  | [Up](cluster.config.duravip.php) |  [Next](cluster.config.replication.php) |
| 27.3. Address Resolution Protocol (ARP) traffic  | [Table of Contents](index.php) |  Chapter 28. Data Replication |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)