## Chapter 71. Modules Reference

**Table of Contents**

<dl class="toc">

<dt>[71.1\. Introduction](modules.php#idp12311472)</dt>

<dt>[71.2\. ac_auth – Authentication Handler](modules.ac_auth.php)</dt>

<dt>[71.3\. adaptive – Adaptive Delivery](modules.adaptive.php)</dt>

<dt>[71.4\. alerting – Send Alerting Emails](modules.alerting.php)</dt>

<dt>[71.5\. alias – Alias Expansion](modules.alias.php)</dt>

<dt>[71.6\. antivirus – Antivirus](modules.antivirus.php)</dt>

<dt>[71.7\. as_logger – Audit Series Logger](modules.as_logger.php)</dt>

<dt>[71.8\. auth_ds – Datasource based SMTP Authentication](modules.auth_ds.php)</dt>

<dt>[71.9\. auth_radius – RADIUS based SMTP Authentication](modules.auth_radius.php)</dt>

<dt>[71.10\. beik – Symantec Brightmail™ Engine Integration Kit](modules.beik.php)</dt>

<dt>[71.11\. bind_address_secondary – Dual-stack IPv4/IPv6 Support](modules.bind_address_secondary.php)</dt>

<dt>[71.12\. bounce_classifier_override – Override/Augment Bounce Classifications](modules.bounce_classifier_override.php)</dt>

<dt>[71.13\. bounce_logger – Momentum-Style Bounce Logging](modules.bounce_logger.php)</dt>

<dt>[71.14\. brightmail – Symantec Brightmail™ Content Scanning Support](modules.brightmail.php)</dt>

<dt>[71.15\. chunk_logger Module](modules.chunk_logger.php)</dt>

<dt>[71.16\. cidrdb – CIDRDB](modules.cidrdb.php)</dt>

<dt>[71.17\. clamav – ClamAV](modules.clamav.php)</dt>

<dt>[71.18\. cloudmark – Cloudmark Authority® Content Scanning](modules.cloudmark.php)</dt>

<dt>[71.19\. cluster – Cluster](modules.cluster.php)</dt>

<dt>[71.20\. commtouch_ctasd – Commtouch Spam Protection](modules.commtouch.php)</dt>

<dt>[71.21\. compress_spool – Dynamic Spool Compression](modules.compress_spool.php)</dt>

<dt>[71.22\. conntrol – Fine-Grained Connection Control](modules.conntrol.php)</dt>

<dt>[71.23\. csapi – Symantec CSAPI Antivirus Support](modules.csapi.php)</dt>

<dt>[71.24\. custom_bounce_logger – Custom Bounce Logging](modules.custom_bounce_logger.php)</dt>

<dt>[71.25\. custom_logger – User-defined Logging](modules.custom_logger.php)</dt>

<dt>[71.26\. delay_dsn – Delay DSN Generation](modules.delay_dsn.php)</dt>

<dt>[71.27\. dnsbuf – Dynamically Set the DNS UDP Buffer Size](modules.dnsbuf.php)</dt>

<dt>[71.28\. domainkeys – Yahoo! DomainKeys](modules.domainkeys.php)</dt>

<dt>[71.29\. ds_core - Datasource Query Core](modules.ds_core.php)</dt>

<dt>[71.30\. EC_logger – Momentum-Style Logging](modules.ec_logger.php)</dt>

<dt>[71.31\. eleven – Eleven eXpurgate Content Scanning](modules.eleven.php)</dt>

<dt>[71.32\. engagement_tracker – HTTP Engagement Tracking](modules.engage_tracker.php)</dt>

<dt>[71.33\. event_hydrant – Message Tracking](modules.event_hydrant.php)</dt>

<dt>[71.34\. exim_logger – Exim Logging](modules.exim_logger.php)</dt>

<dt>[71.35\. fbl - Feedback Loop](modules.fbl.php)</dt>

<dt>[71.36\. fingerprint – Host Fingerprinting](modules.host_fingerprint.php)</dt>

<dt>[71.37\. http_logger – HTTP Requests and Responses](modules.http_logger.php)</dt>

<dt>[71.38\. httpsrv – HTTP Server](modules.httpsrv.php)</dt>

<dt>[71.39\. icu – ICU](modules.icu.php)</dt>

<dt>[71.40\. ilf_logger – Incremental License Fee Logging](modules.ilf_logger.php)</dt>

<dt>[71.41\. inbound_audit – Inbound traffic analytics](modules.inbound_audit.php)</dt>

<dt>[71.42\. ipv6_lookup – Multi-address-family MX Records](modules.ipv6_lookup.php)</dt>

<dt>[71.43\. jlog – jlog-Formatted Logging](modules.jlog.php)</dt>

<dt>[71.44\. Live Bounce Updates – Live Bounce Updates Service](modules.live.bounce.updates.php)</dt>

<dt>[71.45\. mail_loop – Mail Loop Detection](modules.mail_loop.php)</dt>

<dt>[71.46\. maildir – Maildir Delivery Support](modules.maildir.php)</dt>

<dt>[71.47\. msgc – Message Systems Group Communication](modules.msgc.php)</dt>

<dt>[71.48\. msg_gen – Message Generation](modules.msg_gen.php)</dt>

<dt>[71.49\. mxip - IP Addresses In MX Records](modules.mxip.php)</dt>

<dt>[71.50\. opendkim – Open Source DKIM](modules.opendkim.php)</dt>

<dt>[71.51\. outbound_audit – Outbound traffic analytics](modules.outbound_audit.php)</dt>

<dt>[71.52\. outbound_smtp_auth](modules.outbound_smtp_auth.php)</dt>

<dt>[71.53\. persist_io – Persistent IO Wrapper](modules.persistio.php)</dt>

<dt>[71.54\. pipe_io – Pipe IO Wrapper](modules.pipeio.php)</dt>

<dt>[71.55\. pipe_transport – Module](modules.pipe_transport.php)</dt>

<dt>[71.56\. postfix_logger – Postfix Logging](modules.postfix_logger.php)</dt>

<dt>[71.57\. reception_timing - Reception Timing Modules](modules.reception_timing.php)</dt>

<dt>[71.58\. response_transcode – Module](modules.response_transcode.php)</dt>

<dt>[71.59\. sched – The Schedule Module](modules.sched.php)</dt>

<dt>[71.60\. scriptlet - Lua Policy Scripts](modules.scriptlet.php)</dt>

<dt>[71.61\. securecreds – Password Encryption/Credential Retrieval](modules.securecreds.php)</dt>

<dt>[71.62\. seedlist – Seedlist Integration](modules.seedlist.php)</dt>

<dt>[71.63\. sendmail_logger – Sendmail Logging](modules.sendmail_logger.php)</dt>

<dt>[71.64\. smtp_auth_proxy - SMTP Authentication Proxy](modules.smtp_auth_proxy.php)</dt>

<dt>[71.65\. smtp_cbv – SMTP Callback Verification](modules.smtp_cbv.php)</dt>

<dt>[71.66\. smtp_rcptto_proxy - SMTP Recipient-To Proxy](modules.smtp_rcptto_proxy.php)</dt>

<dt>[71.67\. smtpapi – SMTP Engagement Tracking](modules.smtpapi.php)</dt>

<dt>[71.68\. spf Modules – spf_macros, spf_v1, and senderid (SPF v2)](modules.spf.php)</dt>

<dt>[71.69\. static-routes - Static Routes](modules.static_routes.php)</dt>

<dt>[71.70\. suppress_spool – Deferred Message Spooling](modules.suppress_spool.php)</dt>

<dt>[71.71\. syslog_io – The syslog_io Module](modules.syslog_io.php)</dt>

<dt>[71.72\. tls_macros – TLS-related Logging](tls_macros.php)</dt>

<dt>[71.73\. url_ripper – URL Extraction](modules.url_ripper.php)</dt>

</dl>

## 71.1. Introduction

This chapter includes module reference material that is specific to Momentum 4.

| [Prev](lua.ref.xml.parsexml.php)  | [Up](p.reference.php) |  [Next](modules.ac_auth.php) |
| xml.parsexml  | [Table of Contents](index.php) |  71.2. ac_auth – Authentication Handler |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)