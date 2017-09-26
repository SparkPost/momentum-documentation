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

| 13.2. Summary Module Information |
| [Prev](modules.overview.implicit.php)  | Chapter 13. Modules |  [Next](module_specific_console_commands.php) |

## 13.2. Summary Module Information

### 13.2.1. All Modules

In this table all modules are listed alphabetically with a brief description. Singleton and deprecated modules are identified. If a singleton module is followed by a version number, that number identifies when that module became a singleton. The `Auto` column indicates whether a module is loaded automatically as required. Note: this applies only to modules in version 3.x. The `Type` column indicates the MTA type of a given option. Options of type `na` do not directly apply to either a sending or receiving MTA. The `Cluster` column indicates whether a module is cluster-specific. The "valid" column indicates whether a module is a validation module.

<a name="table-all"></a>

**Table 13.1. Modules: all**

| Name | Version | Description | Auto | Cluster | Valid | See Also |
| --- | --- | --- | --- | --- | --- | --- |
| [Section 14.44, “Live Bounce Updates – Module”](modules.live.bounce.updates.php "14.44. Live Bounce Updates – Module") | 3.0 | Canonicalizes bounce messages into a number of categories |   |   |   |   |
| [Section 14.1, “ac_auth – Authentication Handler”](modules.ac_auth.php "14.1. ac_auth – Authentication Handler") | 3.6.5 | Enable a Lua module to hook into the authentication mechanism |   |   |   |   |
| [Section 14.2, “adaptive – Adaptive Delivery”](modules.adaptive.php "14.2. adaptive – Adaptive Delivery") (*singleton*) | 3.0 | Dynamically tune delivery options |   |   |   |   |
| [Section 14.3, “alerting – alerting”](modules.alerting.php "14.3. alerting – alerting") (*singleton*) | 3.0 | Enable Lua policy scripts and alerts |   |   |   | [Section 14.60, “scriptlet – Module”](modules.scriptlet.php "14.60. scriptlet – Module") |
| [Section 14.4, “alias – Alias Expansion Module”](modules.alias.php "14.4. alias – Alias Expansion Module") | 3.0 | Rewrite recipient addresses |   |   |  ✓ | [Section 14.30, “ds_core – Datasource Query Core”](modules.ds_core.php "14.30. ds_core – Datasource Query Core") |
| [Section 14.5, “antivirus – Antivirus Modules”](modules.antivirus.php "14.5. antivirus – Antivirus Modules") | 3.0 | The antivirus framework |  ✓ |   |  ✓ | [Section 14.17, “clamav – ClamAV”](modules.clamav.php "14.17. clamav – ClamAV"), [Section 14.22, “csapi – The Content Scanning API Module”](modules.csapi.php "14.22. csapi – The Content Scanning API Module") |
| [apn](https://support.messagesystems.com/docs/web-push/apns.modules.php) (*singleton*) | 3.5.4 | Use this module to configure the Apple Push Notification service |   |   |   |   |
| [apn_logger](https://support.messagesystems.com/docs/web-push/apns.modules.apn_logger.php) | 3.5.4 | Use this module to log Apple Push notifications |   |   |   |   |
| [Section 14.6, “as_logger – Audit series logger”](modules.as_logger.php "14.6. as_logger – Audit series logger") (*singleton 3.1* ) | 3.0 | Replicate audit series to disk |   |  ✓ |   |   |
| [Section 14.7, “auth_ds – Datasource based SMTP Authentication”](modules.auth_ds.php "14.7. auth_ds – Datasource based SMTP Authentication") (*singleton*) | 3.0 | Use a data source to authenticate an SMTP session |  ✓ |   |   | [Section 14.30, “ds_core – Datasource Query Core”](modules.ds_core.php "14.30. ds_core – Datasource Query Core") |
| [Section 14.8, “auth_radius – RADIUS based SMTP Authentication”](modules.auth_radius.php "14.8. auth_radius – RADIUS based SMTP Authentication") (*singleton*) | 3.0 | Authenticate SMTP sessions via SMTP AUTH using RADIUS servers |   |   |   |   |
| [Section 14.10, “beik – BEIK Module”](modules.beik.php "14.10. beik – BEIK Module") (*singleton*) | 3.0 | This module provides an in-process version of the brightmail module |   |   |  ✓ | [Section 14.14, “brightmail – Brightmail Module”](modules.brightmail.php "14.14. brightmail – Brightmail Module") |
| [Section 14.9, “bind_address_secondary – Dual-stack IPv4/IPv6 Support”](modules.bind_address_secondary.php "14.9. bind_address_secondary – Dual-stack IPv4/IPv6 Support") | 3.6.10 | Dual-stack IPv4/IPv6 Support |   |   |   |   |
| [Section 14.11, “bounce_classifier – Bounce Classifier”](modules.bounce_classifier.php "14.11. bounce_classifier – Bounce Classifier") *(deprecated)* | 3.0 | Override the built-in bounce classification |   |   |   |   |
| [Section 14.12, “bounce_classifier_override – The Bounce Classifier Override Module”](modules.bounce_classifier_override.php "14.12. bounce_classifier_override – The Bounce Classifier Override Module") (*singleton*) | 3.1 | Override the built-in bounce classification |   |   |   | [Section 14.11, “bounce_classifier – Bounce Classifier”](modules.bounce_classifier.php "14.11. bounce_classifier – Bounce Classifier") |
| [Section 14.13, “bounce_logger – Momentum-Style Bounce Logging”](modules.bounce_logger.php "14.13. bounce_logger – Momentum-Style Bounce Logging") | 3.0 | Log bounced messages |   |   |   |   |
| [Section 14.14, “brightmail – Brightmail Module”](modules.brightmail.php "14.14. brightmail – Brightmail Module") | 3.0 | Check inbound mail against a Brightmail server |   |   |  ✓ |   |
| [bzip2io](modules.compress_spool.php "14.20. compress_spool – Dynamic Spool Compression") (*singleton*) | 3.0 | bzip compression algorithm |  ✓ |   |   | [Section 14.20, “compress_spool – Dynamic Spool Compression”](modules.compress_spool.php "14.20. compress_spool – Dynamic Spool Compression") |
| [Section 14.15, “chunk_logger – Asynchronous Logging”](modules.chunk_logger.php "14.15. chunk_logger – Asynchronous Logging") | 3.6.5 | Provide an interface for logging asynchronously from Lua, C, and C++ |   |   |   |   |
| [Section 14.16, “cidrdb – CIDRDB”](modules.cidrdb.php "14.16. cidrdb – CIDRDB") (*singleton*) | 3.0 | Expose scripting functions for checking IP addresses |  ✓ |   |  ✓ |   |
| [Section 14.17, “clamav – ClamAV”](modules.clamav.php "14.17. clamav – ClamAV") | 3.0 | Support for Clam AV |   |   |  ✓ | [Section 14.5, “antivirus – Antivirus Modules”](modules.antivirus.php "14.5. antivirus – Antivirus Modules") |
| [Section 14.18, “cloudmark – Cloudmark Authority Module”](modules.cloudmark.php "14.18. cloudmark – Cloudmark Authority Module") (*singleton 3.4* ) | 3.0 | Support for the Cloudmark spam technology |   |   |  ✓ |   |
| [cluster](https://support.messagesystems.com/docs/web-ref/ecelerity-cluster.conf.php) (*singleton*) | 3.0 | The cluster configuration module |   |  ✓ |   | [Chapter 7, *Clustering*](cluster.php "Chapter 7. Clustering") |
| [Section 14.19, “commtouch_ctasd – Commtouch_ctasd Module”](modules.commtouch.php "14.19. commtouch_ctasd – Commtouch_ctasd Module") | 3.0 | Spam protection technology |   |   |  ✓ |   |
| [Section 14.20, “compress_spool – Dynamic Spool Compression”](modules.compress_spool.php "14.20. compress_spool – Dynamic Spool Compression") (*singleton*) | 3.0 | Compress large messages before writing them to disk |  ✓ |   |   |   |
| [Section 14.21, “conntrol – Fine-Grained Connection Control”](modules.conntrol.php "14.21. conntrol – Fine-Grained Connection Control") | 3.0 | Control how inbound connections are established |   |   |  ✓ |   |
| [Section 14.22, “csapi – The Content Scanning API Module”](modules.csapi.php "14.22. csapi – The Content Scanning API Module") | 3.0 | Integration for Symantec content scanners |   |   |  ✓ |   |
| [Section 14.23, “custom_bounce_logger – Custom Bounce Logging”](modules.custom_bounce_logger.php "14.23. custom_bounce_logger – Custom Bounce Logging") | 3.6.5 | Append a "User_String" to the end of each bounce record |  ✓ |   |   | [Section 14.13, “bounce_logger – Momentum-Style Bounce Logging”](modules.bounce_logger.php "14.13. bounce_logger – Momentum-Style Bounce Logging") |
| [Section 14.24, “custom_logger – Customizable Logging”](modules.custom_logger.php "14.24. custom_logger – Customizable Logging") | 3.0 | Create custom logs |   |   |   |   |
| [Section 14.25, “delay_dsn – Delay DSN Generation”](modules.delay_dsn.php "14.25. delay_dsn – Delay DSN Generation") | 3.0 | Configure and send delay DSNs |   |   |   |   |
| [dk_sign](modules.domainkeys.php "14.29. domainkeys – Yahoo! DomainKeys") | 3.0 | Attach domain keys signatures to outbound mail |   |   |  ✓ |   |
| [dk_validate](modules.domainkeys.php "14.29. domainkeys – Yahoo! DomainKeys") | 3.0 | Validate inbound mail checking domain keys signatures |   |   |  ✓ |   |
| [dkim_sign](modules.dkim.php "14.27. dkim – DomainKeys Identified Mail Signatures") | 3.0 | Attach DKIM signatures to outbound mail |   |   |  ✓ |   |
| [dkim_validate](modules.dkim.php "14.27. dkim – DomainKeys Identified Mail Signatures") | 3.0 | Validate inbound mail checking DKIM signatures |   |   |  ✓ |   |
| [Section 14.28, “dnsbuf – Dynamically Set the DNS UDP Buffer Size”](modules.dnsbuf.php "14.28. dnsbuf – Dynamically Set the DNS UDP Buffer Size") | 3.6.5 | Manipulate DNS buffer sizes on demand |   |   |   |   |
| [Section 14.30, “ds_core – Datasource Query Core”](modules.ds_core.php "14.30. ds_core – Datasource Query Core") (*singleton*) | 3.0 | Provide modular data access and caching for use by other modules |  ✓ |   |   |   |
| [Section 14.31, “ec_logger – Momentum-Style Logging”](modules.ec_logger.php "14.31. ec_logger – Momentum-Style Logging") | 3.0 | Log the status of messages |   |   |   |   |
| [Section 14.32, “eleven – Module”](modules.eleven.php "14.32. eleven – Module") (*singleton*) | 3.1 | This module implements the eleven spam filter and categorization service |   |   |  ✓ |   |
| [Section 14.33, “exim_logger – Exim-Compatible Logging”](modules.exim_logger.php "14.33. exim_logger – Exim-Compatible Logging") | 3.0 | Support for Exim style logs |   |   |   |   |
| [Section 14.34, “fbl – Feedback Loop Module”](modules.fbl.php "14.34. fbl – Feedback Loop Module") (*singleton*) | 3.0 | Manage feedback loop services |   |   |   |   |
| [Section 14.36, “fingerprint – Host Fingerprinting”](modules.host_fingerprint.php "14.36. fingerprint – Host Fingerprinting") | 3.0 | Perform passive OS fingerprinting |   |   |  ✓ |   |
| [gcm](https://support.messagesystems.com/docs/web-push/push.gcm.modules.php#push.modules.gcm) (*singleton*) | 3.5.4 | Use this module to configure Google Cloud messaging |   |   |   |   |
| [gcm_logger](https://support.messagesystems.com/docs/web-push/push.modules.gcm_logger.php) | 3.5.4 | Use this module to log Google Cloud messages |   |   |   |   |
| [gzipio](modules.compress_spool.php "14.20. compress_spool – Dynamic Spool Compression") (*singleton*) | 3.0 | gzip compression algorithm |  ✓ |   |   | [Section 14.20, “compress_spool – Dynamic Spool Compression”](modules.compress_spool.php "14.20. compress_spool – Dynamic Spool Compression") |
| [Section 14.37, “http_io – HTTP I/O Provider”](modules.httpio.php "14.37. http_io – HTTP I/O Provider") (*singleton*) | 3.0 | Read content at a URI |  ✓ |   |   |   |
| [httpsrv](https://support.messagesystems.com/docs/web-rest-injector/rest.configuring.php) (*singleton*) | 3.1 | The HTTP server required for using the REST injection API |   |   |   |   |
| [Section 14.38, “icu – ICU”](modules.icu.php "14.38. icu – ICU") (*singleton*) | 3.0 | Unicode support |  ✓ |   |   |   |
| [Section 14.39, “ilf_logger Module”](modules.ilf_logger.php "14.39. ilf_logger Module") (*singleton*) | 3.5.6 | Use this module if you have usage-based licenses |   |   |   |   |
| [Section 14.40, “imageanalyzer – Module”](modules.imageanalyzer.php "14.40. imageanalyzer – Module") | 3.0 | Support for the Image Analyzer engine |   |   |  ✓ |   |
| [Section 14.41, “inbound_audit – Inbound traffic analytics”](modules.inbound_audit.php "14.41. inbound_audit – Inbound traffic analytics") (*singleton 3.0.23* ) | 3.0 | Provide analytics on sending IPs |   |  ✓ |  ✓ | [Section 14.50, “outbound_audit – Outbound traffic analytics”](modules.outbound_audit.php "14.50. outbound_audit – Outbound traffic analytics") |
| [Section 14.42, “ipv6_lookup – Multi-address-family MX Records”](modules.ipv6_lookup.php "14.42. ipv6_lookup – Multi-address-family MX Records") | 3.6.10 | Multi-address-family MX Records |   |   |   |   |
| [Section 14.43, “jlog – The jlog Module”](modules.jlog.php "14.43. jlog – The jlog Module") (*singleton*) | 3.0 | Create jlog formatted logs |  ✓ |   |   |   |
| [Section 14.45, “mail_loop – Mail Loop Detection”](modules.mail_loop.php "14.45. mail_loop – Mail Loop Detection") | 3.0 | Automatic suppression of potential mail loops |   |   |  ✓ |   |
| [Section 14.46, “maildir – Maildir Delivery Support”](modules.maildir.php "14.46. maildir – Maildir Delivery Support") | 3.0 | Store messages in maildir format as specified by qmail |   |   |   |   |
| [mm7](https://support.messagesystems.com/docs/web-mobility/mobility.mm7.mms_bounce_logger.php) (*singleton*) | 3.1 | Enable MM7 |  ✓ |   |   |   |
| [mm7_serv](https://support.messagesystems.com/docs/web-mobility/mobility.mm7.php) (*singleton*) | 3.1 | Enable the MM7 Value Added Service Provider |   |   |   |   |
| [mms_bounce_logger](https://support.messagesystems.com/docs/web-mobility/mobility.mm7.mms_bounce_logger.php) | 3.1 | Enable MMS bounce logging |   |   |   |   |
| [mms_logger](https://support.messagesystems.com/docs/web-mobility/mobility.mm7.mms_logger.php) | 3.1 | Enable MMS logging |   |   |   |   |
| [msgc_client](modules.msgc.php "14.47. msgc – Modules") (*singleton*) | 3.4 | The client component of MSGC |   |  ✓ |   |   |
| [msgc_server](modules.msgc.php "14.47. msgc – Modules") (*singleton*) | 3.4 | The server component of MSGC |   |  ✓ |   |   |
| [Section 14.48, “mxip - IP Addresses In MX Records”](modules.mxip.php "14.48. mxip - IP Addresses In MX Records") | 3.6.5 | Enable Momentum 3.0 to deliver to domains with a textual IP address |   |   |   |   |
| [opendkim](modules.opendkim.php "14.49. opendkim – OpenDKIM module") | 3.6 | Validate/sign mail using DKIM signatures |   |   |  ✓ |   |
| [Section 14.50, “outbound_audit – Outbound traffic analytics”](modules.outbound_audit.php "14.50. outbound_audit – Outbound traffic analytics") | 3.0 | Provides time-series analytics on the behavior of receiving domains |   |  ✓ |   |   |
| [Section 14.51, “outbound_smtp_auth – Module”](modules.outbound_smtp_auth.php "14.51. outbound_smtp_auth – Module") | 3.6.12 | Enables users to specify authentication parameters for a given set of messages |   |   |   |   |
| [Section 14.53, “persist_io – Persistent IO Wrapper”](modules.persistio.php "14.53. persist_io – Persistent IO Wrapper") (*singleton*) | 3.0 | Provides a non-volatile cache wrapper for any other IO wrapper |  ✓ |   |   | [Section 14.37, “http_io – HTTP I/O Provider”](modules.httpio.php "14.37. http_io – HTTP I/O Provider") |
| [Section 14.54, “pipe_io – Pipe IO Wrapper”](modules.pipeio.php "14.54. pipe_io – Pipe IO Wrapper") (*singleton*) | 3.0 | Provides ability to writing content via an arbitrary program |  ✓ |   |   |   |
| [Section 14.55, “pipe_transport – Module”](modules.pipe_transport.php "14.55. pipe_transport – Module") | 3.0 | Pipe messages to a local program |   |   |   |   |
| [Section 14.56, “postfix_logger – Postfix-Compatible Logging”](modules.postfix_logger.php "14.56. postfix_logger – Postfix-Compatible Logging") | 3.0 | Log in Postfix format |   |   |   |   |
| [Section 14.57, “reception_timing - Reception Timing Modules”](modules.reception_timing.php "14.57. reception_timing - Reception Timing Modules") | 3.6.6 | Track how long it takes to receive or reject messages over SMTP |   |   |  ✓ | [Section 14.15, “chunk_logger – Asynchronous Logging”](modules.chunk_logger.php "14.15. chunk_logger – Asynchronous Logging") |
| [Section 14.58, “response_transcode – Module”](modules.response_transcode.php "14.58. response_transcode – Module") (*singleton*) | 3.0 | Work around broken remote servers |  ✓ |   |   |   |
| [restinjector](https://support.messagesystems.com/docs/web-rest-injector/rest.configuring.php) (*singleton*) | 3.1 | Activate the REST injection API |   |   |   |   |
| [Section 14.59, “sched – The Schedule Module”](modules.sched.php "14.59. sched – The Schedule Module") (*singleton*) | 3.0 | Schedule tasks to be run from the console |   |   |   | [Section 14.30, “ds_core – Datasource Query Core”](modules.ds_core.php "14.30. ds_core – Datasource Query Core") |
| [Section 14.60, “scriptlet – Module”](modules.scriptlet.php "14.60. scriptlet – Module") | 3.0 | Enable scriptlets for enforcing policy |   |   |   | [Section 14.3, “alerting – alerting”](modules.alerting.php "14.3. alerting – alerting") |
| [Section 14.61, “securecreds – Module”](modules.securecreds.php "14.61. securecreds – Module") (*singleton*) | 3.2 | Use encrypted credentials throughout Momentum |   |   |   | [credmgr](executable.credmgr.php "credmgr") |
| [Section 14.62, “seedlist – Seedlist Integration”](modules.seedlist.php "14.62. seedlist – Seedlist Integration") | 3.0 | Deliverability monitoring service |   |   |  ✓ |   |
| [senderid](modules.spf.php "14.69. spf Modules – spf_macros, spf_v1 and senderid (SPF v2)") | 3.0 | Use Sender Policy Framework (spf_v2) |   |   |  ✓ | [Section 14.60, “scriptlet – Module”](modules.scriptlet.php "14.60. scriptlet – Module") |
| [Section 14.63, “sendmail_logger – Sendmail-Compatible Logging”](modules.sendmail_logger.php "14.63. sendmail_logger – Sendmail-Compatible Logging") | 3.0 | Create Sendmail formatted logs |   |   |   |   |
| [smpp](https://support.messagesystems.com/docs/web-mobility/momentum.mobility.php#modules.mobility.smpp_logger) (*singleton*) | 3.0 | Enable SMPP |   |   |   |   |
| [smpp_bounce_logger](https://support.messagesystems.com/docs/web-mobility/modules.mobility.smpp_bounce_logger.php) | 3.0 | Enable SMPP bounce logging |   |   |   |   |
| [smpp_logger](https://support.messagesystems.com/docs/web-mobility/mobility.configuration.smpp.php) | 3.0 | Log SMPP events |   |   |   |   |
| [Section 14.66, “smtp_auth_proxy - SMTP Authentication Proxy”](modules.smtp_auth_proxy.php "14.66. smtp_auth_proxy - SMTP Authentication Proxy") | 3.6.5 | Allow edge SMTP servers to forward SMTP AUTH requests to SMTP servers |  ✓ |   |   |   |
| [Section 14.67, “smtp_cbv – SMTP Callback Verification”](modules.smtp_cbv.php "14.67. smtp_cbv – SMTP Callback Verification") | 3.0 | Perform SMTP Callback Verification |   |   |  ✓ |   |
| [Section 14.68, “smtp_rcptto_proxy - SMTP Recipient-To Proxy”](modules.smtp_rcptto_proxy.php "14.68. smtp_rcptto_proxy - SMTP Recipient-To Proxy") | 3.6.5 | Validate a Lua recipient by doing an SMTP call-forward |   |   |   |   |
| [spf_macros](modules.spf.php "14.69. spf Modules – spf_macros, spf_v1 and senderid (SPF v2)") (*singleton*) | 3.0 | Generic macro service for SPF |  ✓ |   |   |   |
| [spf_v1](modules.spf.php "14.69. spf Modules – spf_macros, spf_v1 and senderid (SPF v2)") | 3.0 | Use Sender Policy Framework |   |   |   | [Section 14.60, “scriptlet – Module”](modules.scriptlet.php "14.60. scriptlet – Module") |
| [Section 14.70, “static-routes - Static Routes”](modules.static_routes.php "14.70. static-routes - Static Routes") | 3.6.5 | Route traffic to a given server by IP address and port |  ✓ |   |   |   |
| [Section 14.72, “suppress_spool – Deferred Message Spooling”](modules.suppress_spool.php "14.72. suppress_spool – Deferred Message Spooling") | 3.0 | Defer spool attempts |   |   |   |   |
| [Section 14.73, “syslog_io – The syslog_io Module”](modules.syslog_io.php "14.73. syslog_io – The syslog_io Module") (*singleton*) | 3.0 | Use the syslog wrapper to write entries to the log |  ✓ |   |   |   |
| [Section 14.74, “tls_macros Module”](tls_macros.php "14.74. tls_macros Module") | 3.6.5 | Provide several macros supporting custom logging of TLS-related data |   |   |   |   |
| [Section 14.75, “url_ripper – URL Extraction”](modules.url_ripper.php "14.75. url_ripper – URL Extraction") | 3.0 | A toolkit for DNS-based content correlation |   |   |  ✓ |   |

### 13.2.2. Receiving Modules

This section shows inbound modules. Modules are listed alphabetically with a brief description and with singleton and deprecated modules identified. If a singleton module is followed by a version number, that number identifies when that module became a singleton. The `Auto` column indicates whether a module is loaded automatically as required. Note: this applies only to modules in version 3.x. The `Cluster` column indicates whether a module is cluster-specific.

<a name="table-receiving"></a>

**Table 13.2. Modules: receiving**

| Name | Version | Description | Auto | Cluster | Valid | See Also |
| --- | --- | --- | --- | --- | --- | --- |
| [Section 14.5, “antivirus – Antivirus Modules”](modules.antivirus.php "14.5. antivirus – Antivirus Modules") | 3.0 | The antivirus framework |  ✓ |   |  ✓ | [Section 14.17, “clamav – ClamAV”](modules.clamav.php "14.17. clamav – ClamAV"), [Section 14.22, “csapi – The Content Scanning API Module”](modules.csapi.php "14.22. csapi – The Content Scanning API Module") |
| [Section 14.7, “auth_ds – Datasource based SMTP Authentication”](modules.auth_ds.php "14.7. auth_ds – Datasource based SMTP Authentication") (*singleton*) | 3.0 | Use a data source to authenticate an SMTP session |  ✓ |   |   | [Section 14.30, “ds_core – Datasource Query Core”](modules.ds_core.php "14.30. ds_core – Datasource Query Core") |
| [Section 14.8, “auth_radius – RADIUS based SMTP Authentication”](modules.auth_radius.php "14.8. auth_radius – RADIUS based SMTP Authentication") (*singleton*) | 3.0 | Authenticate SMTP sessions via SMTP AUTH using RADIUS servers |   |   |   |   |
| [Section 14.10, “beik – BEIK Module”](modules.beik.php "14.10. beik – BEIK Module") (*singleton*) | 3.0 | This module provides an in-process version of the brightmail module |   |   |  ✓ | [Section 14.14, “brightmail – Brightmail Module”](modules.brightmail.php "14.14. brightmail – Brightmail Module") |
| [Section 14.14, “brightmail – Brightmail Module”](modules.brightmail.php "14.14. brightmail – Brightmail Module") | 3.0 | Check inbound mail against a Brightmail server |   |   |  ✓ |   |
| [bzip2io](modules.compress_spool.php "14.20. compress_spool – Dynamic Spool Compression") (*singleton*) | 3.0 | bzip compression algorithm |  ✓ |   |   | [Section 14.20, “compress_spool – Dynamic Spool Compression”](modules.compress_spool.php "14.20. compress_spool – Dynamic Spool Compression") |
| [Section 14.16, “cidrdb – CIDRDB”](modules.cidrdb.php "14.16. cidrdb – CIDRDB") (*singleton*) | 3.0 | Expose scripting functions for checking IP addresses |  ✓ |   |  ✓ |   |
| [Section 14.17, “clamav – ClamAV”](modules.clamav.php "14.17. clamav – ClamAV") | 3.0 | Support for Clam AV |   |   |  ✓ | [Section 14.5, “antivirus – Antivirus Modules”](modules.antivirus.php "14.5. antivirus – Antivirus Modules") |
| [Section 14.18, “cloudmark – Cloudmark Authority Module”](modules.cloudmark.php "14.18. cloudmark – Cloudmark Authority Module") (*singleton 3.4* ) | 3.0 | Support for the Cloudmark spam technology |   |   |  ✓ |   |
| [Section 14.19, “commtouch_ctasd – Commtouch_ctasd Module”](modules.commtouch.php "14.19. commtouch_ctasd – Commtouch_ctasd Module") | 3.0 | Spam protection technology |   |   |  ✓ |   |
| [Section 14.20, “compress_spool – Dynamic Spool Compression”](modules.compress_spool.php "14.20. compress_spool – Dynamic Spool Compression") (*singleton*) | 3.0 | Compress large messages before writing them to disk |  ✓ |   |   |   |
| [Section 14.21, “conntrol – Fine-Grained Connection Control”](modules.conntrol.php "14.21. conntrol – Fine-Grained Connection Control") | 3.0 | Control how inbound connections are established |   |   |  ✓ |   |
| [Section 14.22, “csapi – The Content Scanning API Module”](modules.csapi.php "14.22. csapi – The Content Scanning API Module") | 3.0 | Integration for Symantec content scanners |   |   |  ✓ |   |
| [Section 14.25, “delay_dsn – Delay DSN Generation”](modules.delay_dsn.php "14.25. delay_dsn – Delay DSN Generation") | 3.0 | Configure and send delay DSNs |   |   |   |   |
| [dk_validate](modules.domainkeys.php "14.29. domainkeys – Yahoo! DomainKeys") | 3.0 | Validate inbound mail checking domain keys signatures |   |   |  ✓ |   |
| [dkim_validate](modules.dkim.php "14.27. dkim – DomainKeys Identified Mail Signatures") | 3.0 | Validate inbound mail checking DKIM signatures |   |   |  ✓ |   |
| [Section 14.32, “eleven – Module”](modules.eleven.php "14.32. eleven – Module") (*singleton*) | 3.1 | This module implements the eleven spam filter and categorization service |   |   |  ✓ |   |
| [Section 14.36, “fingerprint – Host Fingerprinting”](modules.host_fingerprint.php "14.36. fingerprint – Host Fingerprinting") | 3.0 | Perform passive OS fingerprinting |   |   |  ✓ |   |
| [gzipio](modules.compress_spool.php "14.20. compress_spool – Dynamic Spool Compression") (*singleton*) | 3.0 | gzip compression algorithm |  ✓ |   |   | [Section 14.20, “compress_spool – Dynamic Spool Compression”](modules.compress_spool.php "14.20. compress_spool – Dynamic Spool Compression") |
| [Section 14.40, “imageanalyzer – Module”](modules.imageanalyzer.php "14.40. imageanalyzer – Module") | 3.0 | Support for the Image Analyzer engine |   |   |  ✓ |   |
| [Section 14.41, “inbound_audit – Inbound traffic analytics”](modules.inbound_audit.php "14.41. inbound_audit – Inbound traffic analytics") (*singleton 3.0.23* ) | 3.0 | Provide analytics on sending IPs |   |  ✓ |  ✓ | [Section 14.50, “outbound_audit – Outbound traffic analytics”](modules.outbound_audit.php "14.50. outbound_audit – Outbound traffic analytics") |
| [Section 14.46, “maildir – Maildir Delivery Support”](modules.maildir.php "14.46. maildir – Maildir Delivery Support") | 3.0 | Store messages in maildir format as specified by qmail |   |   |   |   |
| [Section 14.55, “pipe_transport – Module”](modules.pipe_transport.php "14.55. pipe_transport – Module") | 3.0 | Pipe messages to a local program |   |   |   |   |
| [Section 14.57, “reception_timing - Reception Timing Modules”](modules.reception_timing.php "14.57. reception_timing - Reception Timing Modules") | 3.6.6 | Track how long it takes to receive or reject messages over SMTP |   |   |  ✓ | [Section 14.15, “chunk_logger – Asynchronous Logging”](modules.chunk_logger.php "14.15. chunk_logger – Asynchronous Logging") |
| [senderid](modules.spf.php "14.69. spf Modules – spf_macros, spf_v1 and senderid (SPF v2)") | 3.0 | Use Sender Policy Framework (spf_v2) |   |   |  ✓ | [Section 14.60, “scriptlet – Module”](modules.scriptlet.php "14.60. scriptlet – Module") |
| [Section 14.67, “smtp_cbv – SMTP Callback Verification”](modules.smtp_cbv.php "14.67. smtp_cbv – SMTP Callback Verification") | 3.0 | Perform SMTP Callback Verification |   |   |  ✓ |   |
| [spf_macros](modules.spf.php "14.69. spf Modules – spf_macros, spf_v1 and senderid (SPF v2)") (*singleton*) | 3.0 | Generic macro service for SPF |  ✓ |   |   |   |
| [spf_v1](modules.spf.php "14.69. spf Modules – spf_macros, spf_v1 and senderid (SPF v2)") | 3.0 | Use Sender Policy Framework |   |   |   | [Section 14.60, “scriptlet – Module”](modules.scriptlet.php "14.60. scriptlet – Module") |
| [Section 14.72, “suppress_spool – Deferred Message Spooling”](modules.suppress_spool.php "14.72. suppress_spool – Deferred Message Spooling") | 3.0 | Defer spool attempts |   |   |   |   |

### 13.2.3. Sending Modules

This section shows outbound modules. Modules are listed alphabetically with a brief description and with singleton and deprecated modules identified. If a singleton module is followed by a version number, that number identifies when that module became a singleton. The `Auto` column indicates whether a module is loaded automatically as required. Note: this applies only to modules in version 3.x. The `Cluster` column indicates whether a module is cluster-specific.

<a name="table-sending"></a>

**Table 13.3. Modules: sending**

| Name | Version | Description | Auto | Cluster | Valid | See Also |
| --- | --- | --- | --- | --- | --- | --- |
| [Section 14.2, “adaptive – Adaptive Delivery”](modules.adaptive.php "14.2. adaptive – Adaptive Delivery") (*singleton*) | 3.0 | Dynamically tune delivery options |   |   |   |   |
| [Section 14.4, “alias – Alias Expansion Module”](modules.alias.php "14.4. alias – Alias Expansion Module") | 3.0 | Rewrite recipient addresses |   |   |  ✓ | [Section 14.30, “ds_core – Datasource Query Core”](modules.ds_core.php "14.30. ds_core – Datasource Query Core") |
| [apn](https://support.messagesystems.com/docs/web-push/apns.modules.php) (*singleton*) | 3.5.4 | Use this module to configure the Apple Push Notification service |   |   |   |   |
| [apn_logger](https://support.messagesystems.com/docs/web-push/apns.modules.apn_logger.php) | 3.5.4 | Use this module to log Apple Push notifications |   |   |   |   |
| [Section 14.13, “bounce_logger – Momentum-Style Bounce Logging”](modules.bounce_logger.php "14.13. bounce_logger – Momentum-Style Bounce Logging") | 3.0 | Log bounced messages |   |   |   |   |
| [dk_sign](modules.domainkeys.php "14.29. domainkeys – Yahoo! DomainKeys") | 3.0 | Attach domain keys signatures to outbound mail |   |   |  ✓ |   |
| [dkim_sign](modules.dkim.php "14.27. dkim – DomainKeys Identified Mail Signatures") | 3.0 | Attach DKIM signatures to outbound mail |   |   |  ✓ |   |
| [Section 14.34, “fbl – Feedback Loop Module”](modules.fbl.php "14.34. fbl – Feedback Loop Module") (*singleton*) | 3.0 | Manage feedback loop services |   |   |   |   |
| [gcm](https://support.messagesystems.com/docs/web-push/push.gcm.modules.php#push.modules.gcm) (*singleton*) | 3.5.4 | Use this module to configure Google Cloud messaging |   |   |   |   |
| [gcm_logger](https://support.messagesystems.com/docs/web-push/push.modules.gcm_logger.php) | 3.5.4 | Use this module to log Google Cloud messages |   |   |   |   |
| [httpsrv](https://support.messagesystems.com/docs/web-rest-injector/rest.configuring.php) (*singleton*) | 3.1 | The HTTP server required for using the REST injection API |   |   |   |   |
| [Section 14.45, “mail_loop – Mail Loop Detection”](modules.mail_loop.php "14.45. mail_loop – Mail Loop Detection") | 3.0 | Automatic suppression of potential mail loops |   |   |  ✓ |   |
| [Section 14.50, “outbound_audit – Outbound traffic analytics”](modules.outbound_audit.php "14.50. outbound_audit – Outbound traffic analytics") | 3.0 | Provides time-series analytics on the behavior of receiving domains |   |  ✓ |   |   |
| [Section 14.51, “outbound_smtp_auth – Module”](modules.outbound_smtp_auth.php "14.51. outbound_smtp_auth – Module") | 3.6.12 | Enables users to specify authentication parameters for a given set of messages |   |   |   |   |
| [Section 14.58, “response_transcode – Module”](modules.response_transcode.php "14.58. response_transcode – Module") (*singleton*) | 3.0 | Work around broken remote servers |  ✓ |   |   |   |
| [restinjector](https://support.messagesystems.com/docs/web-rest-injector/rest.configuring.php) (*singleton*) | 3.1 | Activate the REST injection API |   |   |   |   |
| [Section 14.62, “seedlist – Seedlist Integration”](modules.seedlist.php "14.62. seedlist – Seedlist Integration") | 3.0 | Deliverability monitoring service |   |   |  ✓ |   |

| [Prev](modules.overview.implicit.php)  | [Up](modules.overview.php) |  [Next](module_specific_console_commands.php) |
| 13.1. Module Overview  | [Table of Contents](index.php) |  13.3. Module-Specific Console Commands |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)