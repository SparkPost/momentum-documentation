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

| mbus.conf |
| [Prev](eccluster-client.conf.php)  | Chapter 10. Cluster Configuration Reference |  [Next](exe.php) |

<a name="mbus.conf"></a>
## Name

mbus.conf — Momentum Cluster Messaging Bus configuration file

<a name="idp7304640"></a>
## Description

`/opt/ecelerity/etc/mbus.conf` configures the behavior of the Momentum Cluster Messaging Bus, **mbusd**.

Momentum's clustering solution makes heavy use of a group communication messaging bus called "Spread". Spread provides a mechanism for distributing data to various nodes in a networked configuration. Without this messaging bus, the nodes and the cluster manager cannot communicate and all cluster tasks such as DuraVIP™ binding, logging, and replication will cease to operate.

The cluster manager node and each Momentum node will pull the configuration from **eccmgr** on a periodic basis (once per minute) and if the configuration has changed, the messaging bus will shut itself down and restart operations under the new configuration.

In order to start the messaging bus, an initial configuration must be placed in the configuration repository managed by **eccmgr** using the `mbuscfg` tool. Commit this file in the following way:

`shell> /opt/ecelerity/bin/mbuscfg -s /opt/ecelerity/etc/mbus.conf`
```
DebugFlags = { EXIT CONFIGURATION }
RuntimeDir = /var/run/spread
EventLogFile = /var/log/spread/mainlog
EventTimeStamp
DangerousMonitor = false

Spread_Segment  10.0.0.255:4803 {         # 10.0.0.255 is the bcast
       manager-0-1          10.0.0.91     # management node
       ec-0-1               10.0.0.191    # ecelerity node 1
       ec-0-2               10.0.0.192    # ecelerity node 2
       ec-0-3               10.0.0.193    # ecelerity node 3
       ec-0-4               10.0.0.194    # ecelerity node 4
       ec-0-5               10.0.0.195    # ecelerity node 5
       ec-0-6               10.0.0.196    # ecelerity node 6
}
```

The above configuration listing illustrates a standard configuration. In this configuration, 10.0.0.255 is the network broadcast address. Inside the Spread_Segment declaration we see each participating node. The node name should match the output of the **hostname** command on that node. The IP interface on which the node's participating address resides must have the same broadcast address as this Spread_Segment, as reported by **ifconfig**.

### Note

Momentum is no longer supported on Windows.

A file like the above should be constructed representing your cluster topology in a file called `/opt/ecelerity/etc/mbus.conf`. Once complete, it should be registered into the configuration repository via: **/opt/ecelerity/bin/mbuscfg -s /opt/ecelerity/etc/mbus.conf** 

Once the `mbus.conf` file has been checked in to the repository, the copy located at `/opt/ecelerity/etc/mbus.conf` on the cluster manager will be regularly overwritten by the message bus monitoring process. If you need to edit the `mbus.conf` file, copy it to `/var/tmp/mbus.conf`, edit the copy and then check it in using the command shown above, substituting `/var/tmp/mbus.conf` for the regular path.

Once this configuration file has been registered, create an `/opt/ecelerity/etc/eccluster-client.conf` file on the cluster manager containing the following information and distribute it to each of the nodes (10.0.0.91 should be replaced with the IP address of your Momentum cluster manager node):

```
ENABLED=TRUE
ECCMGR=10.0.0.91:2026
CONFIG=boot
```
<a name="idp7324576"></a>
## See Also

[eccmgr](executable.eccmgr.php "eccmgr"), [mbusd](executable.mbusd.php "mbusd"), [mbusd_monitor](executable.mbusd_monitor.php "mbusd_monitor"), [mbuscfg](executable.mbuscfg.php "mbuscfg")

| [Prev](eccluster-client.conf.php)  | [Up](cluster.ref.php) |  [Next](exe.php) |
| eccluster-client.conf  | [Table of Contents](index.php) |  Chapter 11. Momentum Command Line Reference |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)