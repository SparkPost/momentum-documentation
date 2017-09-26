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
| [ad_summary](executable.ad_summary.php "ad_summary") – Summarize the adaptive module actions | adaptive |
| [adaptivedb](executable.adaptivedb.php "adaptivedb") *(deprecated)* – Create the SQLite database used by the adaptive module | adaptive |
| [create_ssl_cert](executable.create_ssl_cert.php "create_ssl_cert") – Create a new SSL certificate | security |
| [credmgr](executable.credmgr.php "credmgr") – Manipulate credentials used with the securecreds module | security |
| [ec_admigrate](executable.ec_admigrate.php "ec_admigrate") – Migrate from the SQLite adaptive database to Riak | adaptive |
| [ec_adtool](executable.ec_adtool.php "ec_adtool") – Manipulate adaptive parameters in a Riak database | adaptive |
| [ec_cmd](executable.ec_cmd.php "ec_cmd") – Allow the web UI to manage nodes | service |
| [ec_console](executable.ec_console.php "ec_console") – Connect to Momentum to perform introspection and administration | console |
| [ec_ctl](executable.ec_ctl.php "ec_ctl") – Start, stop or restart the Momentum Application Server | service |
| [ec_dkim_ctl](executable.ec_dkim_ctl.php "ec_dkim_ctl") – Manipulate the DK/DKIM database | module |
| [ec_dump_config](executable.ec_dump_config.php "ec_dump_config") – Output the ecelerity.conf file as XML | config |
| [ec_lic](executable.ec_lic.php "ec_lic") – Fetch a new license file from Message Systems | misc |
| [ec_log_trace](executable.ec_log_trace.php "ec_log_trace") – Parse Momentum log files | logs |
| [ec_md5passwd](executable.ec_md5passwd.php "ec_md5passwd") – Maintain digest password file(s) for Momentum | security |
| [ec_migrate_conf](executable.ec_migrate_conf.php "ec_migrate_conf") – Migrate from Momentum version 2.2 to version 3.0 | config |
| [ec_rotate](executable.ec_rotate.php "ec_rotate") – Rotate Momentum ec_logger log files | logs |
| [ec_sendmail](executable.ec_sendmail.php "ec_sendmail") – A sendmail(1) compatibility interface | misc |
| [ec_show](executable.ec_show.php "ec_show") – Show spool or message information | messages |
| [ec_spp](executable.ec_spp.php "ec_spp") – Use this command to invoke a Sieve script | sieve |
| [ec_uipasswd](executable.ec_uipasswd.php "ec_uipasswd") – Manage users and groups for authentication | security |
| [eccfg](executable.eccfg.php "eccfg") – Subversion repository management | config |
| [eccmgr](executable.eccmgr.php "eccmgr") – Momentum cluster manager | service |
| [eccmgr_ctl](executable.eccmgr_ctl.php "eccmgr_ctl") – Start, stop or restart the Momentum cluster manager | service |
| [ecconfigd](executable.ecconfigd.php "ecconfigd") – The Momentum Configuration Server | service |
| [ecconfigd_ctl](executable.ecconfigd_ctl.php "ecconfigd_ctl") – Start, stop or restart the Momentum Configuration Server | service |
| [ecelerity](executable.ecelerity.php "ecelerity") – The Momentum Application Server process | service |
| [ecelerity_send](executable.ecelerity.php "ecelerity") – Alias for the Momentum Application Server process | service |
| [jlog_change_endian](executable.jlog_change_endian.php "jlog_change_endian") – Change the endianness of a jlog | logs |
| [jlog_sanity_check](executable.jlog_sanity_check.php "jlog_sanity_check") – Validate that a jlog is free of errors | logs |
| [jlogctl](executable.jlogctl.php "jlogctl") – Maintain and analyze jlogs | logs |
| [lu_pull](executable.lu_pull.php "lu_pull") – Update the Live Updates database | adaptive |
| [mbuscfg](executable.mbuscfg.php "mbuscfg") *(deprecated)* – Cluster messaging bus configuration tool | service |
| [mbusd](executable.mbusd.php "mbusd") *(deprecated)* – Momentum cluster messaging bus | service |
| [mbusd_monitor](executable.mbusd_monitor.php "mbusd_monitor") *(deprecated)* – Momentum cluster messaging bus monitor | service |
| [migrate_regex_binding2](executable.migrate_regex_binding2.php "migrate_regex_binding2") – Migrate regex_binding2 bindings from version 2.2 to version 3.0 | config |
| [validate_config](executable.validate_config.php "validate_config") – Check the validity of the configuration files | config |

| [Prev](exe.php)  | [Up](exe.php) |  [Next](exe.commands.details.php) |
| Chapter 11. Momentum Command Line Reference  | [Table of Contents](index.php) |  11.2. Executable Commands |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)