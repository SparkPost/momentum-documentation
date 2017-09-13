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

| 26.3. Complex Centralized Logging Deployments |
| [Prev](cluster.config.logging.centalized.logging.php)  | Chapter 26. Log Aggregation |  [Next](cluster.config.logging.redundancy.php) |

## 26.3. Complex Centralized Logging Deployments

More complex deployments may arrange for the logs for a given subcluster to be aggregated on a custer manager local to that subcluster. Consider an environment with "east" and "west" subclusters, where the intention is for logs from the "east" subcluster to be journalled on a cluster manager node physically located in the east, and similarly, logs from "west" logged to a cluster manager in the west. The east subcluster has nodes "east1" and "east2", and the west subcluster has nodes "west1" and "west2".

There are two ways to configure this deployment. The first is using the `eccluster.conf` file:

```
Logs {
    logfile = "/var/log/eccluster/%Y/%m/%d/%{l}/%{s}/%{n}"
    file_mode = "0640"
    dir_mode = "0755"

    Manager "eastmgr" {
        # Note that The default for Subscriber here is ("eastmgr", "master")
        Node "west1" {
            Subscriber = () # don't pull anything from west1
        }
        Node "west2" {
            Subscriber = () # don't pull anything from west2
        }
    }
    Manager "westmgr" {
        # Note that The default for Subscriber here is ("westmgr", "master")
        Node "east1" {
            Subscriber = () # don't pull anything from east1
        }
        Node "east2" {
            Subscriber = () # don't pull anything from east2
        }
    }
}
```

For this to work, you would save this to `/opt/msys/ecelerity/etc/conf/global/eccluster.conf` and remove `/opt/msys/ecelerity/etc/conf/default/eccluster.conf` so that there is just one configuration file for all the cluster managers across the cluster.

This configuration instructs the cluster managers to ignore the nodes from the opposing subcluster and has the convenience of centralizing the log pulling logic. The trade off is that complexity of the cluster manager configuration will grow as the number of nodes and subclusters increases.

An alternate configuration to achieve the same end result is to leave `eccluster.conf` as the default and instead alter the `ecelerity-cluster.conf` file for the "west" subcluster so that the aggregated cluster node logging section is the following:

```
ec_logger "ec_logger_cluster" {
    mainlog = "cluster:///var/log/ecelerity/mainlog.cluster=>westmgr"
    paniclog = "cluster:///var/log/ecelerity/paniclog.cluster=>westmgr"
    rejectlog = "cluster:///var/log/ecelerity/rejectlog.cluster=>westmgr"
    acctlog = "cluster:///var/log/ecelerity/acctlog.cluster=>westmgr"
}

bounce_logger "bounce_logger_cluster" {
    bouncelog = "cluster:///var/log/ecelerity/bouncelog.cluster=>westmgr"
}
```

Modify the same section for the "east" subcluster, as follows:

```
ec_logger "ec_logger_cluster" {
    mainlog = "cluster:///var/log/ecelerity/mainlog.cluster=>eastmgr"
    paniclog = "cluster:///var/log/ecelerity/paniclog.cluster=>eastmgr"
    rejectlog = "cluster:///var/log/ecelerity/rejectlog.cluster=>eastmgr"
    acctlog = "cluster:///var/log/ecelerity/acctlog.cluster=>eastmgr"
}

bounce_logger "bounce_logger_cluster" {
    bouncelog = "cluster:///var/log/ecelerity/bouncelog.cluster=>eastmgr"
}
```

This configuration changes the subscriber name on the jlogs to match the name of the cluster manager node that you want to pull the log file. By default, the cluster manager will try to pull jlogs using its nodename as the subscriber, and then try to pull logs with the subscriber name of "master". Since there are no longer any jlogs targeting the "master" subscriber, the net result of this configuration change is that the "eastmgr" cluster manager will pull all the logs from nodes in the "east" subcluster (because they target "eastmgr" as a subscriber) and similarly, the "westmgr" cluster manager will pull all the logs from the nodes in the "west" subcluster.

In a more complex deployment scenario, you may want to have multiple cluster managers pull the same set of logs from a given node. Declare multiple subscribers by changing the "=>mgrname" portion of the filename, as follows:

```
ec_logger "ec_logger_cluster" {
    mainlog = "cluster:///var/log/ecelerity/mainlog.cluster?subscribers=mgr1,mgr2,mgr3"
    ...
}
```

Repeat this change for each log file that you want to export in this way.

Note that each subscriber that you declare will maintain a checkpoint for the log data in the jlog. If a subscriber never consumes data from the jlog, the jlog will continue to grow and occupy an increasing amount of disk space. For this reason, ensure that you only provision subscribers that will be actively consuming data from the jlog.

| [Prev](cluster.config.logging.centalized.logging.php)  | [Up](log_aggregation.php) |  [Next](cluster.config.logging.redundancy.php) |
| 26.2. Centralized Logging Example  | [Table of Contents](index.php) |  26.4. Redundant Logs |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)