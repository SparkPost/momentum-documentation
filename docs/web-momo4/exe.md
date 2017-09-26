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

| Chapter 68. Executable Command Summary |
| [Prev](console_commands.php)  | Part X. Reference |  [Next](hooks.php) |

## Chapter 68. Executable Command Summary

This table lists all executable commands alphabetically giving a brief description. Click the command name to see detailed information.

<a name="exe.commands-all"></a>

**Table 68.1. Executable commands**

| Command/Description | Class |
| --- | --- |
| [ad_summary](executable.ad_summary.php "ad_summary") – Summarize the adaptive module actions | adaptive |
| [create_ssl_cert](executable.create_ssl_cert.php "create_ssl_cert") – Create a self-signed SSL certificate | security |
| [credmgr](executable.credmgr.php "credmgr") – Manipulate credentials used with the securecreds module | security |
| [ec_adtool](executable.ec_adtool.php "ec_adtool") – Adjust adaptive parameters in a cluster configuration | adaptive |
| [ec_console](executable.ec_console.php "ec_console") – Connect to Momentum to perform introspection and administration | console |
| [ec_ctl](executable.ec_ctl.php "ec_ctl") – Start, stop, or restart the Momentum Application Server | service |
| [ec_dkim_ctl](executable.ec_dkim_ctl.php "ec_dkim_ctl") – Manipulate the DK/DKIM database | module |
| [ec_dump_config](executable.ec_dump_config.php "ec_dump_config") – Output the ecelerity.conf file as XML | config |
| [ec_lic](executable.ec_lic.php "ec_lic") – Fetch a new license file from Message Systems | misc |
| [ec_log_trace](executable.ec_log_trace.php "ec_log_trace") – Parse Momentum log files | logs |
| [ec_md5passwd](executable.ec_md5passwd.php "ec_md5passwd") – Change the password for a system user's password | security |
| [ec_rotate](executable.ec_rotate.php "ec_rotate") – Rotate Momentum logfiles | logs |
| [ec_sendmail](executable.ec_sendmail.php "ec_sendmail") – A sendmail compatibility interface | misc |
| [ec_show](executable.ec_show.php "ec_show") – Show spool or message information | messages |
| [eccfg](executable.eccfg.php "eccfg") – Subversion repository management | config |
| [eccmgr](executable.eccmgr.php "eccmgr") – Momentum Cluster Manager | service |
| [eccmgr_ctl](executable.eccmgr_ctl.php "eccmgr_ctl") – Start, stop, or restart the Momentum Cluster Manager | service |
| [ecconfigd](executable.ecconfigd.php "ecconfigd") – Momentum Configuration Server | service |
| [ecconfigd_ctl](executable.ecconfigd_ctl.php "ecconfigd_ctl") – Start, stop or restart the Momentum Configuration Server | service |
| [ecelerity](executable.ecelerity.php "ecelerity") – Momentum Application Server | service |
| [jlog_change_endian](executable.jlog_change_endian.php "jlog_change_endian") – Change the endianness of a jlog | logs |
| [jlog_sanity_check](executable.jlog_sanity_check.php "jlog_sanity_check") – Validate that a jlog is free of errors | logs |
| [jlogctl](executable.jlogctl.php "jlogctl") – Analyze and maintain jlogs | logs |
| [lu_pull](executable.lu_pull.php "lu_pull") – Update the Live Updates database | adaptive |
| [validate_config](executable.validate_config.php "validate_config") – Check the validity of the configuration files | config |

| [Prev](console_commands.php)  | [Up](p.reference.php) |  [Next](hooks.php) |
| Chapter 67. Console Commands Summary  | [Table of Contents](index.php) |  Chapter 69. Hook Points and C Functions Reference |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)