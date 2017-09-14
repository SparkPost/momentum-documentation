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
| [Prev](module_specific_console_commands.php)  | Part II. Command Reference |  [Next](modules.alias.php) |

## Chapter 14. Modules Reference

**Table of Contents**

<dl class="toc">

<dt>[14.1\. alias – Alias Expansion Module](modules.alias.php)</dt>

<dt>[14.2\. antivirus – Antivirus Modules](modules.antivirus.php)</dt>

<dt>[14.3\. as_logger – Audit series logger](modules.as_logger.php)</dt>

<dt>[14.4\. auth_ds – Datasource based SMTP Authentication](modules.auth_ds.php)</dt>

<dt>[14.5\. auth_ldap – LDAP Based SMTP Authentication](modules.auth_ldap.php)</dt>

<dt>[14.6\. auth_mysql – MySQL Based SMTP Authentication](modules.auth_mysql.php)</dt>

<dt>[14.7\. auth_radius – RADIUS based SMTP Authentication](modules.auth_radius.php)</dt>

<dt>[14.8\. beik – BEIK Module](modules.beik.php)</dt>

<dt>[14.9\. bounce_classifier – Bounce Classifier](modules.bounce_classifier.php)</dt>

<dt>[14.10\. bounce_logger – Momentum-Style Bounce Logging](modules.bounce_logger.php)</dt>

<dt>[14.11\. brightmail – Brightmail Module](modules.brightmail.php)</dt>

<dt>[14.12\. cidrdb – CIDRDB](modules.cidrdb.php)</dt>

<dt>[14.13\. clamav – ClamAV](modules.clamav.php)</dt>

<dt>[14.14\. cloudmark – Cloudmark Authority Module](modules.cloudmark.php)</dt>

<dt>[14.15\. commtouch_ctasd – Commtouch_ctasd Module](modules.commtouch.php)</dt>

<dt>[14.16\. compress_spool – Dynamic Spool Compression](modules.compress_spool.php)</dt>

<dt>[14.17\. conntrol – Fine-Grained Connection Control](modules.conntrol.php)</dt>

<dt>[14.18\. csapi – The Content Scanning API Module](modules.csapi.php)</dt>

<dt>[14.19\. custom_logger – Customizable Logging](modules.custom_logger.php)</dt>

<dt>[14.20\. delay_dsn – Delay DSN Generation](modules.delay_dsn.php)</dt>

<dt>[14.21\. disclaimer – Module](modules.disclaimer.php)</dt>

<dt>[14.22\. dkim – DomainKeys Identified Mail Signatures](modules.dkim.php)</dt>

<dt>[14.23\. dns_rbl – DNS Blocklists](modules.dns_rbl.php)</dt>

<dt>[14.24\. domainkeys – Yahoo! DomainKeys](modules.domainkeys.php)</dt>

<dt>[14.25\. ds_core – Datasource Query Core](modules.ds_core.php)</dt>

<dt>[14.26\. ec_logger – Momentum-Style Logging](modules.ec_logger.php)</dt>

<dt>[14.27\. eleven – Module](modules.eleven.php)</dt>

<dt>[14.28\. exim_logger – Exim-Compatible Logging](modules.exim_logger.php)</dt>

<dt>[14.29\. fsecure – F-Secure](modules.fsecure.php)</dt>

<dt>[14.30\. fingerprint – Host Fingerprinting](modules.host_fingerprint.php)</dt>

<dt>[14.31\. http_io – HTTP I/O Provider](modules.httpio.php)</dt>

<dt>[14.32\. icu – ICU](modules.icu.php)</dt>

<dt>[14.33\. inbound_audit – Inbound traffic analytics](modules.inbound_audit.php)</dt>

<dt>[14.34\. jlog – The jlog Module](modules.jlog.php)</dt>

<dt>[14.35\. kaspersky – Kaspersky](modules.kaspersky.php)</dt>

<dt>[14.36\. mail_loop – Mail Loop Detection](modules.mail_loop.php)</dt>

<dt>[14.37\. maildir – Maildir Delivery Support](modules.maildir.php)</dt>

<dt>[14.38\. mtamark – MTAMARK](modules.mtamark.php)</dt>

<dt>[14.39\. outbound_audit – Outbound traffic analytics](modules.outbound_audit.php)</dt>

<dt>[14.40\. persist_io – Persistent IO Wrapper](modules.persistio.php)</dt>

<dt>[14.41\. pickup – MS SMTP Service Style "Pickup" module (Windows only, now deprecated)](modules.pickup.php)</dt>

<dt>[14.42\. pipe_io – Pipe IO Wrapper](modules.pipeio.php)</dt>

<dt>[14.43\. pipe_transport – Module](modules.pipe_transport.php)</dt>

<dt>[14.44\. postfix_logger – Postfix-Compatible Logging](modules.postfix_logger.php)</dt>

<dt>[14.45\. regex_binding – Regular Expression Based Bindings](modules.regex_binding.php)</dt>

<dt>[14.46\. regex_binding2 – Regular Expression Based Bindings (II)](modules.regex_binding2.php)</dt>

<dt>[14.47\. response_transcode – Module](modules.response_transcode.php)</dt>

<dt>[14.48\. sched – The Schedule Module](modules.sched.php)</dt>

<dt>[14.49\. seedlist – Seedlist Integration](modules.seedlist.php)</dt>

<dt>[14.50\. sendmail_logger – Sendmail-Compatible Logging](modules.sendmail_logger.php)</dt>

<dt>[14.51\. sieve – The Sieve Module](modules.sieve.php)</dt>

<dt>[14.52\. sievelib – The sievelib Module](modules.sievelib.php)</dt>

<dt>[14.53\. smtp_cbv – SMTP Callback Verification](modules.smtp_cbv.php)</dt>

<dt>[14.54\. spf Modules – spf_macros, spf_v1 and senderid (SPF v2)](modules.spf.php)</dt>

<dt>[14.55\. stats_producer – Stats Producer Module](modules.stats_producer.php)</dt>

<dt>[14.56\. suppress_spool – Deferred Message Spooling](modules.suppress_spool.php)</dt>

<dt>[14.57\. syslog_io – The syslog_io Module](modules.syslog_io.php)</dt>

<dt>[14.58\. url_ripper – URL Extraction](modules.url_ripper.php)</dt>

</dl>

| [Prev](module_specific_console_commands.php)  | [Up](p.command.ref.php) |  [Next](modules.alias.php) |
| 13.1. Module-Specific Console Commands  | [Table of Contents](index.php) |  14.1. alias – Alias Expansion Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)