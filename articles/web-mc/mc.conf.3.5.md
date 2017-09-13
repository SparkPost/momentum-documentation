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

| Chapter 6. Configuration Files in Version 3.5 and Higher |
| [Prev](mc-mcbatch.conf-file.php)  |   |  [Next](mc.conf.mc_gen.conf.php) |

## Chapter 6. Configuration Files in Version 3.5 and Higher

**Table of Contents**

<dl class="toc">

<dt>[6.1\. The `mc_sched.conf` File](mc.conf.3.5.php#mc.conf.mc_sched.conf)</dt>

<dt>[6.2\. The `mc_gen.conf` File](mc.conf.mc_gen.conf.php)</dt>

<dt>[6.3\. The `mc_mgr.conf` File](mc.conf.mc_mgr.conf.php)</dt>

<dt>[6.4\. The `mc_auth.conf` File](mc.conf.mc_auth.conf.php)</dt>

<dt>[6.5\. The `pe2.conf` File](mc.conf.pe2.conf.php)</dt>

</dl>

In Message Central version 3.5 new configuration files and options are introduced with the aim of creating more granular and discrete logging.

Prior to version 3.5, the following options configured logging levels:

*   pe2.log.debug_facilities

*   pe2.log.warning_facilities

*   pe2.log.info_facilities

*   pe2.log.notice_facilities

These options applied to all logs, including the scheduler log, manager log and generator logs.

As of version 3.5, logging for the scheduler, manager and generators is configured separately using separate configuration files. The new configuration files are:

*   `/opt/msys/pe2/etc/mc_mgr.conf` the configuration file for the manager component

*   `/opt/msys/pe2/etc/mc_gen.conf` the configuration file for the generator component

*   `/opt/msys/pe2/etc/mc_sched.conf` the configuration file for the scheduler component

These configuration files are found in the `/opt/msys/pe2/etc` directory. These files are rotated in same way as other log files. For more information see [Section 9.7, “Log Rotation Configuration Files”](mc-files-log-rotation.php "9.7. Log Rotation Configuration Files").

This chapter documents the configuration options that can be set using these files.

## 6.1. The `mc_sched.conf` File

This configuration file configures logging for the scheduler. The default `mc_sched.conf` file is as follows:

<a name="idp550448"></a>

**Example 6.1. The `mc_sched.conf` file**

```
mc_sched {
  # The only option available is shown below
  debug_level = "INFO"
}

mc_db {
  debug_level = "INFO"
}

mc_log {
  log_filename = "/var/log/pe2/sched.log"
}
```

The `debug_level` option of the `mc_sched` module determines the log level of the manager component. The default for this option is `INFO`. As with any Momentum module, the logging levels are:

*   DEBUG

*   INFO

*   NOTICE

*   WARNING

*   ERROR

*   CRITICAL

### Warning

The `DEBUG` log level can be very verbose. If disk space is a consideration, take care when using this log level.

The `mc_db` module determines the log level for the database interaction with the component associated with the file it appears in, in this case, the scheduler logs. Setting `debug_level` in the mc_db module to `debug` in `mc_sched.conf` only turns on the debug level logging for the interaction between the database and the scheduler.

The `mc_log` module defines the location of the log files for the component associated with the file it appears in, in this case, the scheduler logs. If you change the value of this option you must also change the log rotation configuration files. For more information see [Section 9.7, “Log Rotation Configuration Files”](mc-files-log-rotation.php "9.7. Log Rotation Configuration Files").

### 6.1.1. Changes in Version 3.7

the `mc_eccluster` scope

```
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
# debug_level = "info"
#}
```

| [Prev](mc-mcbatch.conf-file.php)  |   |  [Next](mc.conf.mc_gen.conf.php) |
| 5.2. The `mclog_loader.conf` File  | [Table of Contents](index.php) |  6.2. The `mc_gen.conf` File |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)