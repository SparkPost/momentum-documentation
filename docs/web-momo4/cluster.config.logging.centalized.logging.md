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

| 26.2. Centralized Logging Example |
| [Prev](log_aggregation.php)  | Chapter 26. Log Aggregation |  [Next](cluster.config.logging.complex.php) |

## 26.2. Centralized Logging Example

This section provides an example of log aggregation when a custom_logger and an fbl module are defined.

The following is an example configuration for the [custom_logger](modules.custom_logger.php "71.25. custom_logger – User-defined Logging") module:

```
custom_logger "custom_logger1" {
  permanent_failure_logfile = "cluster:///var/log/ecelerity/custombounce.cluster=>master"
  permanent_failure_format  = "%t@%i@%BI@%CI@B@%r@%R@%m@%M@%g@%b@%c@%C@%B@%H@%h{X-campaignid} »
    @%h{date}@%h{subject}@%n"
  transient_failure_logfile = "cluster:///var/log/ecelerity/custombounce.cluster=>master"
  transient_failure_format  = "%t@%i@%BI@%CI@T@%r@%R@%m@%M@%g@%b@%c@%C@%B@%H@%h{X-campaignid} »
    @%h{date}@%h{subject}@%n"
}
```

*Note*: The format options in the custom_logger module above should be unbroken in your configuration file.

The following is an example configuration for the [fbl](modules.fbl.php "71.35. fbl - Feedback Loop") module:

```
fbl {
  Auto_Log = true # default is "false"
  Log_Path = "cluster:///var/log/ecelerity/fbllog.cluster=>master"
  Addresses = ( “^.*@fbl.domain.com” ) # default is unset
  Header_Name = “X-MSFBL” # this is the default
  User_String = “%{vctx_mess:my_context_variable}” # default is unset
  Message_Disposition = “blackhole” # default is blackhole, also allowed to set to "pass"
  Condition = “can_relay” # default is unset, should be name of a vctx entry
}
```

Given the above configuration for the custom_logger module and the fbl module, you would configure the cluster logs in the following way:

```
cluster {
  cluster_group = ec_cluster
  control_group = ec_console
  logs = [
    rejectlog = "/var/log/ecelerity/rejectlog.cluster"
    paniclog = "/var/log/ecelerity/paniclog.cluster"
    mainlog = "/var/log/ecelerity/mainlog.cluster"
    acctlog = "/var/log/ecelerity/acctlog.cluster"
    bouncelog = "/var/log/ecelerity/bouncelog.cluster"
    fbllog = "/var/log/ecelerity/fbllog.cluster"
    custombounce = "/var/log/ecelerity/custombounce.cluster"
  ]
  ...
}
```

If the `logfile` option in the `Logs` scope is configured as shown in [Section 16.2, “`eccluster.conf` File”](conf.ref.eccluster.conf.php "16.2. eccluster.conf File"), you will have access to the fbl logs of `node1` belonging to subcluster `mysubcluster` in the /var/log/eccluster/*`year/mon/day`*/fbllog/mycluster/node1 directory on the log aggregator.

| [Prev](log_aggregation.php)  | [Up](log_aggregation.php) |  [Next](cluster.config.logging.complex.php) |
| Chapter 26. Log Aggregation  | [Table of Contents](index.php) |  26.3. Complex Centralized Logging Deployments |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)