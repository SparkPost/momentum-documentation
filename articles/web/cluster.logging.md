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

| 7.3. Clustered Logging |
| [Prev](cluster.config.duravip.php)  | Chapter 7. Clustering |  [Next](cluster.realtime_logging.php) |

## 7.3. Clustered Logging

### 7.3.1. Logging Configuration

The Clustered Logging feature set provided by the Momentum clustering suite does not redefine logging facilities, formats or semantics. Instead it provides a medium to which logs can be journaled that can be aggregated in near real-time to a centralized server. It does this by providing a `cluster://` implementation view of the `io_wrapper` input output abstraction. All logging modules that utilize the `io_wrapper` to journal log output will be able to seamlessly leverage the clustered publication facility. All standard logging modules shipped with Momentum utilize the `io_wrapper` layer.

Typically, in a non-clustered environment a logging configuration would appear as follows:

```
Logger logging/ec_logger ec_logger {
  mainlog = "/var/log/ecelerity/mainlog.ec"
  paniclog = "/var/log/ecelerity/paniclog.ec"
  rejectlog = "/var/log/ecelerity/rejectlog.ec"
}
Logger logging/custom_logger custom_logger {
  permanent_failure_logfile = "/var/log/ecelerity/bounce_report_log"
  permanent_failure_format = "%t@B@%r@%R@%s@%c@%n"
}
```

In the above configuration, each filename is actually treated as a path portion of a URI under the `file://` schema. So, the mainlog above is actually `file:///var/log/ecelerity/mainlog.ec`. The clustering module provides a `cluster://` URI schema to support near real-time log aggregation:

```
Logger logging/ec_logger ec_logger {
  mainlog = "cluster:///var/log/ecelerity/mainlog.cluster=>master"
  paniclog = "cluster:///var/log/ecelerity/paniclog.cluster=>master"
  rejectlog = "cluster:///var/log/ecelerity/rejectlog.cluster=>master"
}
Logger logging/custom_logger custom_logger {
  permanent_failure_logfile = "cluster:///var/log/ecelerity/bounce_report_log.cluster=>master"
  permanent_failure_format = "%t@B@%r@%R@%s@%c@%n"
}
Logger cluster/ec_cluster ec_cluster {
  cluster_listener = "*:4802"
  logs [
    mainlog = "/var/log/ecelerity/mainlog.cluster"
    paniclog = "/var/log/ecelerity/paniclog.cluster"
    rejectlog = "/var/log/ecelerity/rejectlog.cluster"
    bouncelog = "/var/log/ecelerity/bounce_report_log.cluster"
  ]
  dml [
    dml_log = "/var/log/ecelerity/dmllog.rt"
  ]
}
```

In the above configuration, the log destinations have been specified with the `cluster://` schema. For the mainlog, the path to the log storage will be `/var/log/ecelerity/mainlog.cluster`. The `=>master` indicates that if the log storage does not exist, it should be initialized with a single subscriber named "master."

Within the clustering module, the `logs` section describes which log storage locations should be exposed to the log aggregation server. The left hand side of the association is an arbitrarily assigned name that describes the logs and can be used as a part of the destination filename on the centralized logging server.

Within the clustering module, the `dml` section describes which locations will contain the dml queue produced by the Web UI / realtime statistics logging facility.

The `cluster_listener` directive describes over which IP and port the clustered services will be exposed. The default is all IP addresses and port 4802, but can be changed with this option. When nodes join the cluster, they will solicit several pieces of information from peer nodes. The cluster_listener is one of these queried parameters and as such, when changing the cluster_listener on one node, no reconfiguration of other nodes in the cluster (including the cluster manager) is required.

### 7.3.2. Logging Philosophy

The Momentum clustered logging facilities provide reliable, near real-time centralized logging facilities across the entire cluster of nodes running Momentum. There are two essential requirements for logs written by critical services such as email: availability and reliability.

In the traditional sense, availability just means accessibility in spite of component failures. However, in a centralized logging paradigm, it means immediate, real-time access to logs across the cluster as a whole. The logs written by each node should be available to the operator in one location and those logs should represent, as closely as possible, the most current happenings.

Reliability, while obvious, is a challenging concern when addressing clustered logging. Writing logs directly to a logging server can introduce data loss for SMTP services. The log of an email delivery or failure event happens in a non-transactional way. The event itself is logged after the triggering action has already occurred (the delivery or failure). If the logging server is down and the message cannot be sent, there is no feasible way to rollback the email delivery or failure and thus, unless special measures are taken, the log of that event could be lost.

The clustering module addresses the issues of real-time data availability and reliability carefully. First and foremost, we address reliability and durability. All logs are written to local storage unconditionally. Secondly, we address real-time availability requirement by providing the centralized logging server with a TCP/IP based service available via the `cluster_listener` that can serve the locally written logs on demand.

### 7.3.3. Operational Details

Clustered logging operation has two aspects: node configuration and log server configuration. If the log server is down for any reason, no logs will be lost as they are always kept durably on the individual nodes until the log server has pulled them and acknowledged that they have been written to disk.

**7.3.3.1. Cluster Manager**

The Cluster Manager will run **eccmgr** which handles, amongst other things, the acquisition and journaling of logs from the cluster nodes.

```
Logs {
  logfile = "/data/eccluster/logs/%Y/%m/%d/%{l}/%{n}"
  file_mode = "0644"
  dir_mode = "0755"
}
```

**eccmgr** will join the cluster group and determine the current membership. It will ask all of the present nodes for several pieces of information, like their nodename, version number and their cluster services listener address. Each node that answers these questions adequately will become a "qualified" member of the group and the manager will initiate several tasks to "qualified" members. Requesting a full log feed is one of these tasks.

**eccmgr** will create log files and their directories on demand and manage a current open set of append-only log files for performance. The `logfile` parameter in the `Logs` section of the `eccluster.conf` file that drives the **eccmgr** is interpolated via `strftime` . Additionally, the `logfile` format supports:

<dl class="variablelist">

<dt>%{l}</dt>

<dd>

Interpolates to the name of the log as specified within the keys of the `logs` section of the cluster module configuration in `ecelerity.conf`.

</dd>

<dt>%{n}</dt>

<dd>

Interpolates as the name of the node generating the logs. This is determined when qualifying the nodes. It is the response to the ec_console command **cluster nodename**          and can be configured via the `nodename` option in the cluster module configuration in `ecelerity.conf`. (For other ec_console cluster commands see [Section 7.5.2, “Cluster Management Using Console Commands”](cluster.replication.php#cluster.logging.console "7.5.2. Cluster Management Using Console Commands").)

</dd>

</dl>

**7.3.3.2. Cluster Nodes**

The clustered logging facilities are managed in a directory structure. This means that the path specified for clustered log storage via the `cluster://` URI schema is actually a directory. Inside that directory there are three types of files:

<dl class="variablelist">

<dt>metadata</dt>

<dd>

The `metadata` file is a small, static file that describes specific characteristics of the logs stored in the directory such as the maximum file segment size and the currently active log for appending.

</dd>

<dt>cp.{hexstring}</dt>

<dd>

The cp files are "checkpoint" files. This file set is responsible for maintaining the checkpoint information for each subscriber to the logs. As a subscriber reads the logs that are available, it will begin at one item past the last known checkpoint and read a number of logs. After reading these logs, the system can establish a new checkpoint for that subscriber that indicates the progress thus far. The `{hexstring}` is actually the name of the subscriber where each letter in the subscriber's name is represented by its two digit hexadecimal representation in ASCII.

</dd>

<dt>{hexstring}</dt>

<dd>

Files that are simply a sequence of (8) hexadecimal digits are the log data files themselves. The logs are in binary form. Each log entry consists of a 16 byte header containing information about the host, the time of the message and the length of the subsequent message data followed by the message data itself.

</dd>

<dt>{hexstring}.idx</dt>

<dd>

Files that are simply a sequence of (8) hexadecimal digits with the "idx" extension are the log data index files. The index files contain the offset of each message within the corresponding data file. This provides a mechanism for quickly seeking to a specific message number within a log data file. The index file format is simply a contiguous set of 64-bit file offsets.

</dd>

</dl>

| [Prev](cluster.config.duravip.php)  | [Up](cluster.php) |  [Next](cluster.realtime_logging.php) |
| 7.2. DuraVIP™  | [Table of Contents](index.php) |  7.4. Web UI Clustered Logging |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)