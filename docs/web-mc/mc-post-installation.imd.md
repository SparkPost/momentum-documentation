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

| 3.10. Configuring For Intelligent Message Disposition |
| [Prev](mc3.ldap.php)  | Chapter 3. Post-installation Tasks |  [Next](mc-post-installation.enabling.imd.php) |

## 3.10. Configuring For Intelligent Message Disposition

As of version 3.6.2, Intelligent Message Disposition (IMD) is available. IMD makes it possible to recover messages in circumstances where a Momentum node crashes or is otherwise unable to complete delivery. Using IMD you can regenerate mailings when MTA node failures are detected.

### Note

Using IMD may lead to duplicate messages and may have an impact on reporting—duplicates may make reports seem inaccurate.

Also note that the `message_expiration` option in `ecelerity.conf` defaults to one week. You may want to consider resetting this value to a lower number. For more information about this option see [message_expiration](https://support.messagesystems.com/docs/web-ref/conf.ref.message_expiration.php).

The default `/opt/msys/pe2/etc/mc_sched.conf` file is used to configure IMD. It includes configuration options that are commented out. Enable IMD by uncommenting these options.

The configuration elements required by IMD are the msgc modules and the mc_eccluster stanza.

The `/opt/msys/pe2/etc/mc_sched.conf` file that is included with Message Central 3.6.2 is reproduced below:

```
mc_sched {
  debug_level = "info"
}

mc_db {
  debug_level = "info"
}

#mc_eccluster {
#
# If a momentum node leaves the cluster for more than a configurable
# time period pe2sched.mtanode_inactivity_interval (default 120 seconds)
# then all mailings that had generation activity to that node within the
# last pe2sched.mtanode_monitor_interval (default 15 minutes {15 * 60})
# will be assessed;
#
# mtanode_inactivity_interval = 120
# mtanode_monitor_interval = 900
#  debug_level = "info"
#}

mc_log {
  log_filename = "/var/log/pe2/sched.log"
}

#msgc_client {
#  server = ( "127.0.0.1:4809" )
#  debug_level = "info"
#}

#include msgc_server.conf

# Pull in authentication configuration.  Do not remove this next line
include "mc_auth.conf"
```

The mc_eccluster stanza (along with the msgc modules) monitors the MTA nodes and triggers regeneration of mailings when MTA node failures are detected. If a node leaves the cluster for longer than the time defined by the `mtanode_inactivity_interval` option, then any message activity within the `mtaNode_monitor_interval` will be assessed and regenerated if necessary. The default value for `mtanode_inactivity_interval` is `120` and the default value for `mtaNode_monitor_interval` is `900`.

The msgc_client configuration that is included in the `mc_sched.conf` file is the standard node communication configuration in use since Momentum 3.4\. In addition to being a requirement for messaging in a cluster environment, the msgc modules are also a requirement for IMD. The `msgc_server.conf` file that is included in `mc_sched.conf` is reproduced below:

```
# NOTE: This file MUST live in the global portion of the repository, as it
# must be the same for all nodes in the cluster.

msgc_server {
   peers = [
     # node1 = "192.168.0.10"
     # node2 = "192.168.0.11"
     # manager = "192.168.0.12"
   ]
}

MSGCServer_Listener {
   Listen ":4809" { }
}
```

Again, this configuration is standard in Momentum since version 3.4\. For a complete description see [msgc Modules](https://support.messagesystems.com/docs/web-ref/modules.msgc.php).

### Warning

When both IMD and jlogs are enabled, message regeneration will not occur if a mailing is set to the `ready` state while an MTA is down. This occurs only when `pe2g.write_jlogs` is set to `1` in the `pe2.conf` file. As a workaround, it is strongly recommended that you always set the value of `pe2g.write_jlogs` to `0` when using IMD. For more information about this option see [pe2g.write_jlogs](conf.mcg.pe2g.write_jlogs.php "pe2g.write_jlogs").

### IMD and Delivery Discrepancies

When using IMD and an MTA is restarted, delivery counts may decrease because both a delivery and a bounce may be reported for the same message.

When an MTA fails, a delivery may be reported by the MTA that sends the regenerated message and a bounce reported for the same message when the original MTA is brought back up. This occurs when deliveries are suspended and [never_retry](https://support.messagesystems.com/docs/web-ref/conf.ref.never_retry.php) is set to true.

In circumstances where there is both a delivery and a bounce for the same message, Message Central reports the message as bounced. This is done to handle out-of-band bounces where a delivery may be reported initially, but at a later point a bounce is reported. For this reason, there may be reporting "inaccuracies" when there is a node failure while using IMD; Message Central cannot differentiate between a node failure in the context of IMD and an out-of-band bounce. When a message has two final dispositions, bounces take precedence.

| [Prev](mc3.ldap.php)  | [Up](mc-post-installation.php) |  [Next](mc-post-installation.enabling.imd.php) |
| 3.9. Using LDAP with Message Central  | [Table of Contents](index.php) |  3.11. Exposing IMD Controls in the Web UI |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)