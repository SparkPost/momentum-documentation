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

| 11.1. Executable Command Summary |
| [Prev](exe.php)  | Chapter 11. Momentum Command Line Reference |  [Next](exe.commands.details.php) |

## 11.1. Executable Command Summary

This table lists all executable commands alphabetically giving a brief description. Click the command name to see detailed information.

<a name="executables-table"></a>

**Table 11.1. Executable commands**

| Command/Description | Class |
| --- | --- |
| [ec_console](executable.ec_console.php "ec_console") – Connect to Momentum to perform introspection and administration | console |
| [ec_ctl](executable.ec_ctl.php "ec_ctl") – Start, stop or restart the Momentum Application Server | service |
| [ec_dbupgrade](executable.ec_dbupgrade.php "ec_dbupgrade") – Upgrade a SQLite database version 2 to version 3 | misc |
| [ec_dkim_ctl](executable.ec_dkim_ctl.php "ec_dkim_ctl") – Manipulate the DK/DKIM database | module |
| [ec_dump_config](executable.ec_dump_config.php "ec_dump_config") – Output the ecelerity.conf file as XML | config |
| [ec_grapher2](executable.ec_grapher2.php "ec_grapher2") – Produce graph based on information stored in multiple RRDs | misc |
| [ec_grapher](executable.ec_grapher.php "ec_grapher") – Produce graph based on information stored in RRD | misc |
| [ec_jre_setup](executable.ec_jre_setup.php "ec_jre_setup") – Maintain the Momentum Java Runtime Environment (JRE) installation location as a symlink to the system JRE | misc |
| [ec_lic](executable.ec_lic.php "ec_lic") – Fetch a new license file from Message Systems | misc |
| [ec_log_trace](executable.ec_log_trace.php "ec_log_trace") – Parse Momentum log files | logs |
| [ec_md5passwd](executable.ec_md5passwd.php "ec_md5passwd") – Maintain digest password file(s) for Momentum | security |
| [ec_rotate](executable.ec_rotate.php "ec_rotate") – Rotate Momentum ec_logger log files | logs |
| [ec_rrdd](executable.ec_rrdd.php "ec_rrdd") – Receive and store Momentum statistics in Round Robin database (RRD) format | misc |
| [ec_running](executable.ec_running.php "ec_running") – Check whether Momentum is running | misc |
| [ec_sendmail](executable.ec_sendmail.php "ec_sendmail") – A sendmail(1) compatibility interface | misc |
| [ec_show](executable.ec_show.php "ec_show") – Show spool or message information | messages |
| [ec_spp](executable.ec_spp.php "ec_spp") – Use this command to invoke a Sieve script | sieve |
| [ec_stat_ctl](executable.ec_stat_ctl.php "ec_stat_ctl") – Control ec_stat_watcher and ec_rrdd | misc |
| [ec_stat_watcher](executable.ec_stat_watcher.php "ec_stat_watcher") – Collect Momentum statistics and send to ec_rrdd | misc |
| [ec_stats](executable.ec_stats.php "ec_stats") – Analyze Momentum logs and generate reports | misc |
| [eccluster_pull_config](executable.eccluster_pull_config.php "eccluster_pull_config") – Copy the configuration file from the cluster manager | misc |
| [eccmgr](executable.eccmgr.php "eccmgr") – Momentum cluster manager | service |
| [eccmgr_ctl](executable.eccmgr_ctl.php "eccmgr_ctl") – Start, stop or restart the Momentum cluster manager | service |
| [ecelerity](executable.ecelerity.php "ecelerity") – The Momentum Application Server process | service |
| [jlog_change_endian](executable.jlog_change_endian.php "jlog_change_endian") – Change the endianness of a jlog | logs |
| [jlog_sanity_check](executable.jlog_sanity_check.php "jlog_sanity_check") – Validate that a jlog is free of errors | logs |
| [mbuscfg](executable.mbuscfg.php "mbuscfg") *(deprecated)* – Cluster messaging bus configuration tool | service |
| [mbusd](executable.mbusd.php "mbusd") *(deprecated)* – Momentum cluster messaging bus | service |
| [mbusd_monitor](executable.mbusd_monitor.php "mbusd_monitor") *(deprecated)* – Momentum cluster messaging bus monitor | service |
| [upgrade-advisor](executable.upgrade-advisor.php "upgrade-advisor") – Determine whether you are taking full advantage of the real-time logging capabilities of Momentum | misc |

| [Prev](exe.php)  | [Up](exe.php) |  [Next](exe.commands.details.php) |
| Chapter 11. Momentum Command Line Reference  | [Table of Contents](index.php) |  11.2. Executable Commands |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)