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

| 7.4. Web UI Clustered Logging |
| [Prev](cluster.logging.php)  | Chapter 7. Clustering |  [Next](cluster.replication.php) |

## 7.4. Web UI Clustered Logging

### 7.4.1. Web UI / Realtime Logging Configuration

The realtime clustered logging feature set exposes logs information through the Momentum Cluster Console.

The clustering module uses the data from the rt_stats system to do realtime statistical analysis on logs and to make them available through the Web UI. To make this available, you must have the following lines in your ecelerity.conf:

```
Logger logging/ec_logger ec_logger <name="ec_logger_rt"> {
  mainlog = "jlog:///var/log/ecelerity/mainlog.rt=>ec_rt_stats"
  rejectlog = "jlog:///var/log/ecelerity/rejectlog.rt=>ec_rt_stats"
  log_errors = false
}

Logger logging/bounce_logger bounce_logger <name="bounce_logger_rt"> {
  bouncelog = "jlog:///var/log/ecelerity/bouncelog.rt=>ec_rt_stats"
}
Logger cluster/ec_cluster ec_cluster {
  # standard clustering config
  # ...
  dml [
    dml_log = "/var/log/ecelerity/dmllog.rt"
  ]
}
```

Further, in your `/opt/ecelerity/etc/ec_rotate.conf` you should add the following line:

`rt_stats_dml_output_file = jlog:///var/log/ecelerity/dmllog.rt`

In eccmgr's `/opt/ecelerity/etc/eccluster.conf` you then need to add the following processing directive:

```
RTStats {
  DB_Path = "/var/log/eccluster/rt/%Y%m%d.sql3"
}
```

### 7.4.2. Operational Details

The clustered web logging works as a multi-stage system. First ecelerity logs raw data to the 'rt' queues. This data is periodically consumed by ec_rt_stats, which then outputs summarized and processed data to the `jlog:///var/log/ecelerity/dmllog.rt` queue, and sets it to be consumed by the default subscriber. The cluster module exposes this data back to the cluster manager by putting it in the 'dml' section of its config. Finally, eccmgr knows to expect dml logs, and who it should subscribe as, via its 'RTStats' directive.

### 7.4.3. Cluster-wide Activity Graphs

The clustered web console collects raw graphing data automatically from all of the cluster nodes. This is performed by the [ec_rrdd](executable.ec_rrdd.php "ec_rrdd") program. To place ec_rrdd in cluster mode, the following lines must be added to /opt/ecelerity/etc/ec_rrdd.conf:

```
mode = cluster
spread_port = 4803
spread_group = ec_console
```

### Note

If you have changed your spread port elsewhere in your cluster configuration, you must change the spread_port in ec_rrdd.conf appropriately.

To produce the data, your ecelerity.conf file must contain:

`Module generic/stats_producer statp { }`

| [Prev](cluster.logging.php)  | [Up](cluster.php) |  [Next](cluster.replication.php) |
| 7.3. Clustered Logging  | [Table of Contents](index.php) |  7.5. Clustered Data Replication |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)