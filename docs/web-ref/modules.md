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

| Chapter 14. Modules Reference |
| [Prev](module_specific_console_commands.using.php)  | Part II. Command Reference |  [Next](modules.ac_auth.php) |

## Chapter 14. Modules Reference

**Table of Contents**

<dl class="toc">

<dt>[14.1\. ac_auth – Authentication Handler](modules.ac_auth.php)</dt>

<dt>[14.2\. adaptive – Adaptive Delivery](modules.adaptive.php)</dt>

<dt>[14.3\. alerting – alerting](modules.alerting.php)</dt>

<dt>[14.4\. alias – Alias Expansion Module](modules.alias.php)</dt>

<dt>[14.5\. antivirus – Antivirus Modules](modules.antivirus.php)</dt>

<dt>[14.6\. as_logger – Audit series logger](modules.as_logger.php)</dt>

<dt>[14.7\. auth_ds – Datasource based SMTP Authentication](modules.auth_ds.php)</dt>

<dt>[14.8\. auth_radius – RADIUS based SMTP Authentication](modules.auth_radius.php)</dt>

<dt>[14.9\. bind_address_secondary – Dual-stack IPv4/IPv6 Support](modules.bind_address_secondary.php)</dt>

<dt>[14.10\. beik – BEIK Module](modules.beik.php)</dt>

<dt>[14.11\. bounce_classifier – Bounce Classifier](modules.bounce_classifier.php)</dt>

<dt>[14.12\. bounce_classifier_override – The Bounce Classifier Override Module](modules.bounce_classifier_override.php)</dt>

<dt>[14.13\. bounce_logger – Momentum-Style Bounce Logging](modules.bounce_logger.php)</dt>

<dt>[14.14\. brightmail – Brightmail Module](modules.brightmail.php)</dt>

<dt>[14.15\. chunk_logger – Asynchronous Logging](modules.chunk_logger.php)</dt>

<dt>[14.16\. cidrdb – CIDRDB](modules.cidrdb.php)</dt>

<dt>[14.17\. clamav – ClamAV](modules.clamav.php)</dt>

<dt>[14.18\. cloudmark – Cloudmark Authority Module](modules.cloudmark.php)</dt>

<dt>[14.19\. commtouch_ctasd – Commtouch_ctasd Module](modules.commtouch.php)</dt>

<dt>[14.20\. compress_spool – Dynamic Spool Compression](modules.compress_spool.php)</dt>

<dt>[14.21\. conntrol – Fine-Grained Connection Control](modules.conntrol.php)</dt>

<dt>[14.22\. csapi – The Content Scanning API Module](modules.csapi.php)</dt>

<dt>[14.23\. custom_bounce_logger – Custom Bounce Logging](modules.custom_bounce_logger.php)</dt>

<dt>[14.24\. custom_logger – Customizable Logging](modules.custom_logger.php)</dt>

<dt>[14.25\. delay_dsn – Delay DSN Generation](modules.delay_dsn.php)</dt>

<dt>[14.26\. disclaimer – Module](modules.disclaimer.php)</dt>

<dt>[14.27\. dkim – DomainKeys Identified Mail Signatures](modules.dkim.php)</dt>

<dt>[14.28\. dnsbuf – Dynamically Set the DNS UDP Buffer Size](modules.dnsbuf.php)</dt>

<dt>[14.29\. domainkeys – Yahoo! DomainKeys](modules.domainkeys.php)</dt>

<dt>[14.30\. ds_core – Datasource Query Core](modules.ds_core.php)</dt>

<dt>[14.31\. ec_logger – Momentum-Style Logging](modules.ec_logger.php)</dt>

<dt>[14.32\. eleven – Module](modules.eleven.php)</dt>

<dt>[14.33\. exim_logger – Exim-Compatible Logging](modules.exim_logger.php)</dt>

<dt>[14.34\. fbl – Feedback Loop Module](modules.fbl.php)</dt>

<dt>[14.35\. fsecure – F-Secure](modules.fsecure.php)</dt>

<dt>[14.36\. fingerprint – Host Fingerprinting](modules.host_fingerprint.php)</dt>

<dt>[14.37\. http_io – HTTP I/O Provider](modules.httpio.php)</dt>

<dt>[14.38\. icu – ICU](modules.icu.php)</dt>

<dt>[14.39\. ilf_logger Module](modules.ilf_logger.php)</dt>

<dt>[14.40\. imageanalyzer – Module](modules.imageanalyzer.php)</dt>

<dt>[14.41\. inbound_audit – Inbound traffic analytics](modules.inbound_audit.php)</dt>

<dt>[14.42\. ipv6_lookup – Multi-address-family MX Records](modules.ipv6_lookup.php)</dt>

<dt>[14.43\. jlog – The jlog Module](modules.jlog.php)</dt>

<dt>[14.44\. Live Bounce Updates – Module](modules.live.bounce.updates.php)</dt>

<dt>[14.45\. mail_loop – Mail Loop Detection](modules.mail_loop.php)</dt>

<dt>[14.46\. maildir – Maildir Delivery Support](modules.maildir.php)</dt>

<dt>[14.47\. msgc – Modules](modules.msgc.php)</dt>

<dt>[14.48\. mxip - IP Addresses In MX Records](modules.mxip.php)</dt>

<dt>[14.49\. opendkim – OpenDKIM module](modules.opendkim.php)</dt>

<dt>[14.50\. outbound_audit – Outbound traffic analytics](modules.outbound_audit.php)</dt>

<dt>[14.51\. outbound_smtp_auth – Module](modules.outbound_smtp_auth.php)</dt>

<dt>[14.52\. pe2_logger – Module](modules.pe2_logger.php)</dt>

<dt>[14.53\. persist_io – Persistent IO Wrapper](modules.persistio.php)</dt>

<dt>[14.54\. pipe_io – Pipe IO Wrapper](modules.pipeio.php)</dt>

<dt>[14.55\. pipe_transport – Module](modules.pipe_transport.php)</dt>

<dt>[14.56\. postfix_logger – Postfix-Compatible Logging](modules.postfix_logger.php)</dt>

<dt>[14.57\. reception_timing - Reception Timing Modules](modules.reception_timing.php)</dt>

<dt>[14.58\. response_transcode – Module](modules.response_transcode.php)</dt>

<dt>[14.59\. sched – The Schedule Module](modules.sched.php)</dt>

<dt>[14.60\. scriptlet – Module](modules.scriptlet.php)</dt>

<dt>[14.61\. securecreds – Module](modules.securecreds.php)</dt>

<dt>[14.62\. seedlist – Seedlist Integration](modules.seedlist.php)</dt>

<dt>[14.63\. sendmail_logger – Sendmail-Compatible Logging](modules.sendmail_logger.php)</dt>

<dt>[14.64\. sieve – The Sieve Module](modules.sieve.php)</dt>

<dt>[14.65\. sievelib – The sievelib Module](modules.sievelib.php)</dt>

<dt>[14.66\. smtp_auth_proxy - SMTP Authentication Proxy](modules.smtp_auth_proxy.php)</dt>

<dt>[14.67\. smtp_cbv – SMTP Callback Verification](modules.smtp_cbv.php)</dt>

<dt>[14.68\. smtp_rcptto_proxy - SMTP Recipient-To Proxy](modules.smtp_rcptto_proxy.php)</dt>

<dt>[14.69\. spf Modules – spf_macros, spf_v1 and senderid (SPF v2)](modules.spf.php)</dt>

<dt>[14.70\. static-routes - Static Routes](modules.static_routes.php)</dt>

<dt>[14.71\. statp – Stats Producer Module](modules.stats_producer.php)</dt>

<dt>[14.72\. suppress_spool – Deferred Message Spooling](modules.suppress_spool.php)</dt>

<dt>[14.73\. syslog_io – The syslog_io Module](modules.syslog_io.php)</dt>

<dt>[14.74\. tls_macros Module](tls_macros.php)</dt>

<dt>[14.75\. url_ripper – URL Extraction](modules.url_ripper.php)</dt>

</dl>

| [Prev](module_specific_console_commands.using.php)  | [Up](p.command.ref.php) |  [Next](modules.ac_auth.php) |
| 13.4. Using Module-Specific Console Commands  | [Table of Contents](index.php) |  14.1. ac_auth – Authentication Handler |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)