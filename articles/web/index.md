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

| Momentum Reference Manual 2.2 |
|   |   |  [Next](preface.php) |

## Momentum Reference Manual 2.2

## Reference for Version 2

### Message Systems, Inc.

Copyright © 2001-2014 Message Systems, Inc.

<a name="idp61168"></a>

Confidential & Proprietary.

Wed, 30 Jul 2014, Document revision 50404

* * *

**Table of Contents**

<dl class="toc">

<dt>[Preface](preface.php)</dt>

<dd>

<dl>

<dt>[1\. Typographical Conventions Used in This Document](typographical.php)</dt>

</dl>

</dd>

<dt>[I. Configuration Guide](p.guide.php)</dt>

<dd>

<dl>

<dt>[1\. Installation](install.php)</dt>

<dd>

<dl>

<dt>[1.1\. System Requirements](install.requirements.php)</dt>

<dt>[1.2\. Ports Used by Momentum](install.ports.php)</dt>

<dt>[1.3\. Preparing the System](install.prepare.php)</dt>

<dt>[1.4\. Operating System Specific Preparation](install.os-specific.php)</dt>

<dt>[1.5\. Converting a System From 32 to 64 Bit](install.3264conversion.php)</dt>

<dt>[1.6\. Installation on Linux](install.linux.php)</dt>

<dt>[1.7\. Installation on Mac OS X/Darwin](install.darwin.php)</dt>

<dt>[1.8\. Installation on Solaris](install.solaris.php)</dt>

<dt>[1.9\. Installer Options](install.options.php)</dt>

<dt>[1.10\. Installation on Microsoft Windows (Deprecated)](install.win32.php)</dt>

</dl>

</dd>

<dt>[2\. Configuration](conf.php)</dt>

<dd>

<dl>

<dt>[2.1\. The `ecelerity.conf` File](conf.ecelerity.conf.php)</dt>

<dt>[2.2\. Authentication, Authorization and Accounting](conf.aaa.php)</dt>

<dt>[2.3\. Options that Must Change](conf.initial.conf.php)</dt>

<dt>[2.4\. Configuration Scopes and Fallback](ecelerity.conf.fallback.php)</dt>

<dt>[2.5\. Starting Momentum](conf.starting.php)</dt>

</dl>

</dd>

<dt>[3\. The Web Console](webconsole.php)</dt>

<dd>

<dl>

<dt>[3.1\. Administering the Web Console](webconsole.admin.php)</dt>

<dt>[3.2\. Web Console Authentication](webconsole.authentication.php)</dt>

<dt>[3.3\. Configuration of Momentum](webconsole.configuration.php)</dt>

<dt>[3.4\. Dashboard, Queue, Log and Bounce Reports](webconsole.reports.php)</dt>

</dl>

</dd>

<dt>[4\. Operations](operations.php)</dt>

<dd>

<dl>

<dt>[4.1\. The Momentum System Console](operations.console.php)</dt>

<dt>[4.2\. Console Commands](operations.console-commands.php)</dt>

<dt>[4.3\. Logging](operations.logging.php)</dt>

<dt>[4.4\. MultiVIP© Interfaces](operations.multivip.php)</dt>

</dl>

</dd>

<dt>[5\. Implementing Policy with Momentum](policy.php)</dt>

<dd>

<dl>

<dt>[5.1\. Validation and the Validation Context](policy.validation.php)</dt>

<dt>[5.2\. Implementing Policy Using Sieve](policy.implementing.php)</dt>

<dt>[5.3\. Setting Context Based on Connecting IP](policy.context-based-on-ip.php)</dt>

<dt>[5.4\. Conclusion](policy.conclusion.php)</dt>

</dl>

</dd>

<dt>[6\. Validation Context Variables](policy.context.variables.php)</dt>

<dd>

<dl>

<dt>[6.1\. Connection Context Variables](policy.predefined-context-conn.php)</dt>

<dt>[6.2\. Message Context Variables](policy.context-mess.php)</dt>

</dl>

</dd>

<dt>[7\. Clustering](cluster.php)</dt>

<dd>

<dl>

<dt>[7.1\. Configuration Overview](cluster.config.overview.php)</dt>

<dt>[7.2\. DuraVIP™](cluster.config.duravip.php)</dt>

<dt>[7.3\. Clustered Logging](cluster.logging.php)</dt>

<dt>[7.4\. Web UI Clustered Logging](cluster.realtime_logging.php)</dt>

<dt>[7.5\. Clustered Data Replication](cluster.replication.php)</dt>

<dt>[7.6\. Installing Momentum Clustering](cluster.installation.php)</dt>

<dt>[7.7\. Using the Momentum Cluster Manager](cluster.operations.php)</dt>

<dt>[7.8\. The `cidr_server`](cluster.cidr_server.php)</dt>

</dl>

</dd>

<dt>[8\. Sieve++](sieve.php)</dt>

<dd>

<dl>

<dt>[8.1\. The differences between Sieve and Sieve++](sieve.differences.php)</dt>

<dt>[8.2\. Sieve's Basic Syntax](sieve.syntax.basic.php)</dt>

<dt>[8.3\. RFC Standard Sieve Enhancements](sieve.enhancements.php)</dt>

<dt>[8.4\. Sieve++, Momentum-specific extensions](sieve.ecaddons.php)</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[II. Command Reference](p.command.ref.php)</dt>

<dd>

<dl>

<dt>[9\. Ecelerity.conf Configuration Reference](conf.ref.php)</dt>

<dd>

<dl>

<dt>[9.1\. Options Summary](options-summary.php)</dt>

<dt>[9.2\. Configuration Files and Option Details](conf.ref.files.php)</dt>

</dl>

</dd>

<dt>[10\. Cluster Configuration Reference](cluster.ref.php)</dt>

<dd>

<dl>

<dt>[eccluster.conf](eccluster.conf.php) — Momentum Cluster Manager configuration file</dt>

<dt>[eccluster-client.conf](eccluster-client.conf.php) — Momentum Cluster Messaging Bus configuration file</dt>

<dt>[mbus.conf](mbus.conf.php) — Momentum Cluster Messaging Bus configuration file</dt>

</dl>

</dd>

<dt>[11\. Momentum Command Line Reference](exe.php)</dt>

<dd>

<dl>

<dt>[11.1\. Executable Command Summary](exe.summary_table2.php)</dt>

<dt>[11.2\. Executable Commands](exe.commands.details.php)</dt>

</dl>

</dd>

<dt>[12\. Momentum System Console Commands Reference](console_commands.php)</dt>

<dd>

<dl>

<dt>[12.1\. System Console Command Summary](console_commands.summary_table2.php)</dt>

<dt>[12.2\. System Console Commands](console.commands.non-module.php)</dt>

</dl>

</dd>

<dt>[13\. Modules](modules.overview.php)</dt>

<dd>

<dl>

<dt>[13.1\. Module-Specific Console Commands](module_specific_console_commands.php)</dt>

</dl>

</dd>

<dt>[14\. Modules Reference](modules.php)</dt>

<dd>

<dl>

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

</dd>

<dt>[15\. Sieve++ Function Reference](sieve.ref.php)</dt>

<dd>

<dl>

<dt>[add_recipient](sieve.ref.add_recipient.php) — add a new envelope recipient to the mail</dt>

<dt>[address](sieve.ref.address.php) — return the address from a header</dt>

<dt>[advertize_esmtp_capability](sieve.ref.advertize_esmtp_capability.php) — add a string to the EHLO response</dt>

<dt>[antivirus](sieve.ref.antivirus.php) — antivirus functions for Sieve</dt>

<dt>[audit_connections_on_listener](sieve.ref.audit_connections_on_listener.php) — Return the number of connections currently established from a CIDR block</dt>

<dt>[audit_connections_on_service](sieve.ref.audit_connections_on_service.php) — Return the number of connections currently established from a CIDR block</dt>

<dt>[audit_series](sieve.ref.audit_series.php) — Return the audit series count associated with an IP address or CIDR block over a window range</dt>

<dt>[audit_series_add](sieve.ref.audit_series_add.php) — Add to a named series</dt>

<dt>[audit_service](sieve.ref.audit_service.php) — Return how many connections currently are established from a CIDR block to an arbitrary service</dt>

<dt>[brightmail](sieve.ref.brightmail.php) — brightmail functions for Sieve</dt>

<dt>[cidrdb](sieve.ref.cidrdb.php) — cidr functions for Sieve</dt>

<dt>[cloudmark_score](sieve.ref.cloudmark_score.php) — Analyze a message with Cloudmark Authority</dt>

<dt>[commtouch_scan](sieve.ref.commtouch_scan.php) — email virus scan</dt>

<dt>[disable_esmtp_capability](sieve.ref.disable_esmtp_capability.php) — remove a string from the EHLO response</dt>

<dt>[discard](sieve.ref.discard.php) — discard the current message; it will not be delivered</dt>

<dt>[disclaimer_add](sieve.ref.disclaimer_add.php) — add a disclaimer to an email</dt>

<dt>[ds_execute](sieve.ref.ds_execute.php) — execute a query on a datasource</dt>

<dt>[ds_fetch](sieve.ref.ds_fetch.php) — query and fetch a row from a datasource</dt>

<dt>[ds_fetch_flat](sieve.ref.ds_fetch_flat.php) — query and fetch all rows from a datasource</dt>

<dt>[ds_fetch_hash](sieve.ref.ds_fetch_hash.php) — query and fetch a row from a datasource, as a hash</dt>

<dt>[ec_action](sieve.ref.ec_action.php) — set SMTP status code</dt>

<dt>[ec_add](sieve.ref.ec_add.php) — perform addition of two numbers</dt>

<dt>[ec_base64_decode](sieve.ref.ec_base64_decode.php) — decode base64 encoded text</dt>

<dt>[ec_base64_encode](sieve.ref.ec_base64_encode.php) — base64 encode text</dt>

<dt>[ec_bounce_classify](sieve.ref.ec_bounce_classify.php) — perform bounce classification on the message</dt>

<dt>[ec_ceil](sieve.ref.ec_ceil.php) — round up to the nearest integer</dt>

<dt>[ec_cluster_cache_get](sieve.ref.ec_cluster_cache_get.php) — Retrieve a value from a cluster-wide replicated cache</dt>

<dt>[ec_cluster_cache_set](sieve.ref.ec_cluster_cache_set.php) — Set a value in a cluster-wide replicated cache</dt>

<dt>[ec_config](sieve.ref.ec_config.php) — get Momentum configuration from Sieve</dt>

<dt>[ec_disconnect](sieve.ref.ec_disconnect.php) — set SMTP status and close the SMTP connection</dt>

<dt>[ec_div](sieve.ref.ec_div.php) — perform division of two numbers</dt>

<dt>[ec_dk_responsible_domain](sieve.ref.ec_dk_responsible_domain.php) — Return the responsible domain for the current message</dt>

<dt>[ec_dk_sign](sieve.ref.ec_dk_sign.php) — Sign a message with the DomainKeys protocol</dt>

<dt>[ec_dkim_domains](sieve.ref.ec_dkim_domains.php) — Return a list of valid signing domains</dt>

<dt>[ec_dkim_responsible_domain](sieve.ref.ec_dkim_responsible_domain.php) — Return the responsible domain for the current message</dt>

<dt>[ec_dkim_sign](sieve.ref.ec_dkim_sign.php) — Sign a message with the DKIM protocol</dt>

<dt>[ec_dns_lookup](sieve.ref.ec_dns_lookup.php) — perform a DNS record lookup</dt>

<dt>[ec_error_mode](sieve.ref.ec_error_mode.php) — set the error mode to "fail" or "continue"</dt>

<dt>[ec_floor](sieve.ref.ec_floor.php) — round down to the nearest integer</dt>

<dt>[ec_forward](sieve.ref.ec_forward.php) — forward a message</dt>

<dt>[ec_gauge_cache](sieve.ref.ec_gauge_cache.php) — gauge cache functions for Sieve</dt>

<dt>[ec_get_message_code](sieve.ref.ec_get_message_code.php) — Returns the current SMTP status code for a message</dt>

<dt>[ec_get_message_creation_time](sieve.ref.ec_get_message_creation_time.php) — Return the creation_time of the current message.</dt>

<dt>[ec_get_message_id](sieve.ref.ec_get_message_id.php) — Returns the message's unique ID.</dt>

<dt>[ec_get_message_mailfrom](sieve.ref.ec_get_message_mailfrom.php) — Return the mailfrom of the current message.</dt>

<dt>[ec_get_message_num_retries](sieve.ref.ec_get_message_num_retries.php) — Return the num_retries of the current message.</dt>

<dt>[ec_get_message_protocol](sieve.ref.ec_get_message_protocol.php) — Return the protocol of the current message.</dt>

<dt>[ec_get_message_rcptto](sieve.ref.ec_get_message_rcptto.php) — Return the rcptto of the current message.</dt>

<dt>[ec_get_message_received_from](sieve.ref.ec_get_message_received_from.php) — Return the IP address that the message was received from</dt>

<dt>[ec_get_message_received_from_port](sieve.ref.ec_get_message_received_from_port.php) — Return the port that the message was received from.</dt>

<dt>[ec_get_message_received_via](sieve.ref.ec_get_message_received_via.php) — Return the IP address that the message was received via</dt>

<dt>[ec_get_message_received_via_port](sieve.ref.ec_get_message_received_via_port.php) — Return the local port that the message was received on.</dt>

<dt>[ec_get_message_size](sieve.ref.ec_get_message_size.php) — Return the size of the current message.</dt>

<dt>[ec_get_message_spool_name](sieve.ref.ec_get_message_spool_name.php) — Returns the message's spool filename.</dt>

<dt>[ec_header_add](sieve.ref.ec_header_add.php) — prepend a header to the current message</dt>

<dt>[ec_header_delete](sieve.ref.ec_header_delete.php) — remove a header from the current message</dt>

<dt>[ec_header_get](sieve.ref.ec_header_get.php) — obtain the values for a particular header</dt>

<dt>[ec_header_postfix](sieve.ref.ec_header_postfix.php) — append to a header of the current message</dt>

<dt>[ec_header_prefix](sieve.ref.ec_header_prefix.php) — prepend to a header in the current message</dt>

<dt>[ec_host_fingerprint](sieve.ref.ec_host_fingerprint.php) — return genre and detail of the passive host fingerprinting operation</dt>

<dt>[ec_inc_counter](sieve.ref.ec_inc_counter.php) — increment a Sieve counter</dt>

<dt>[ec_include](sieve.ref.ec_include.php) — include and run a Sieve script</dt>

<dt>[ec_interfaces](sieve.ref.ec_interfaces.php) — obtain a list of network interfaces</dt>

<dt>[ec_ip_connections](sieve.ref.ec_ip_connections.php) — Audit how many connections an IP address has made</dt>

<dt>[ec_ip_connections_cluster](sieve.ref.ec_ip_connections_cluster.php) — Audit how many connections an IP address has made cluster-wide</dt>

<dt>[ec_ip_receptions](sieve.ref.ec_ip_receptions.php) — Audit how many receptions an IP address has made</dt>

<dt>[ec_ip_receptions_cluster](sieve.ref.ec_ip_receptions_cluster.php) — Audit how many receptions an IP address has made cluster-wide</dt>

<dt>[ec_ip_rejections](sieve.ref.ec_ip_rejections.php) — Audit how many rejections an IP address has made</dt>

<dt>[ec_ip_rejections_cluster](sieve.ref.ec_ip_rejections_cluster.php) — Audit how many rejections an IP address has made cluster-wide</dt>

<dt>[ec_log](sieve.ref.ec_log.php) — log to the paniclog</dt>

<dt>[ec_log_file](sieve.ref.ec_log_file.php) — log to a file/io wrapper</dt>

<dt>[ec_maildir](sieve.ref.ec_maildir.php) — write the current message into a maildir mailbox</dt>

<dt>[ec_mem_usage](sieve.ref.ec_mem_usage.php) — Return the amount of memory used by Momentum</dt>

<dt>[ec_mime_boundary_create](sieve.ref.ec_mime_boundary_create.php) — return a string to be used as a boundary when creating a MIME message</dt>

<dt>[ec_mime_parts](sieve.ref.ec_mime_parts.php) — test against metadata for each MIME part in a message</dt>

<dt>[ec_mod](sieve.ref.ec_mod.php) — calculate the modulus of two numbers</dt>

<dt>[ec_mul](sieve.ref.ec_mul.php) — perform multiplication of two numbers</dt>

<dt>[ec_nearbyint](sieve.ref.ec_nearbyint.php) — round to the nearest integer based on rounding direction</dt>

<dt>[ec_pcre_match](sieve.ref.ec_pcre_match.php) — perform a regular expression match</dt>

<dt>[ec_rand](sieve.ref.ec_rand.php) — generate a random number no larger than max -1 or a random string from a list.</dt>

<dt>[ec_rewrite_mailfrom](sieve.ref.ec_rewrite_mailfrom.php) — change the envelope sender</dt>

<dt>[ec_rfc2047_encode_addresses](sieve.ref.ec_rfc2047_encode_addresses.php) — create an RFC2047-compliant address</dt>

<dt>[ec_rfc2047_encode_header](sieve.ref.ec_rfc2047_encode_header.php) — encode a header to be RFC2047 compliant</dt>

<dt>[ec_rfc3464_delivery_status](sieve.ref.ec_rfc3464_delivery_status.php) — return a string containing fields for a RFC3464 DSN</dt>

<dt>[ec_round](sieve.ref.ec_round.php) — round away from zero</dt>

<dt>[ec_set_binding](sieve.ref.ec_set_binding.php) — Assign a message to a MultiVIP© binding</dt>

<dt>[ec_set_routing_gateway](sieve.ref.ec_set_routing_gateway.php) — dynamically change the gateway based on recipient</dt>

<dt>[ec_shared_throttle](sieve.ref.ec_shared_throttle.php) — Shared Named Throttling</dt>

<dt>[ec_spool_space](sieve.ref.ec_spool_space.php) — Return information about the free space on the spool partition</dt>

<dt>[ec_sub](sieve.ref.ec_sub.php) — perform subtraction of two numbers</dt>

<dt>[ec_tarpit](sieve.ref.ec_tarpit.php) — impose a time penalty</dt>

<dt>[ec_test](sieve.ref.ec_test.php) — generic test</dt>

<dt>[ec_thread_pool_get_queue_size](sieve.ref.ec_thread_pool_get_queue_size.php) — get the number of jobs queued against a jobclass</dt>

<dt>[ec_throttle](sieve.ref.ec_throttle.php) — Named Throttling</dt>

<dt>[ec_tolower](sieve.ref.ec_tolower.php) — change all characters to lower case</dt>

<dt>[ec_trace_context](sieve.ref.ec_trace_context.php) — add X-Trace-Context header to the current message</dt>

<dt>[ec_trunc](sieve.ref.ec_trunc.php) — round toward zero</dt>

<dt>[ec_url_ripper](sieve.ref.ec_url_ripper.php) — Extract domains and urls for lookup in DNSBL</dt>

<dt>[ec_valid_binding](sieve.ref.ec_valid_binding.php) — Check whether a named MultiVIP© binding exists</dt>

<dt>[ec_valid_mime](sieve.ref.ec_valid_mime.php) — determine if the message is valid MIME</dt>

<dt>[envelope](sieve.ref.envelope.php) — return the envelope sender or recipient</dt>

<dt>[generate_mail_raw](sieve.ref.generate_mail_raw.php) — generate and send out a message</dt>

<dt>[hash_create](sieve.ref.hash_create.php) — create a hash</dt>

<dt>[hash_dump](sieve.ref.hash_dump.php) — dump the contents of the hash to the paniclog</dt>

<dt>[hash_get](sieve.ref.hash_get.php) — get the value associated with the specified key</dt>

<dt>[hash_keys](sieve.ref.hash_keys.php) — return all the keys of a hash as a stringlist</dt>

<dt>[hash_set](sieve.ref.hash_set.php) — set an element in a hash</dt>

<dt>[hash_values](sieve.ref.hash_values.php) — return all the string values of a hash as a stringlist</dt>

<dt>[is_true](sieve.ref.is_true.php) — test if a value is "true"</dt>

<dt>[join](sieve.ref.join.php) — join stringlist elements into a single string</dt>

<dt>[keep](sieve.ref.keep.php) — keep the current message; stop processing further rules</dt>

<dt>[qp_encode](sieve.ref.qp_encode.php) — quoted-printable encode a string</dt>

<dt>[redirect](sieve.ref.redirect.php) — change the envelope recipient</dt>

<dt>[reject](sieve.ref.reject.php) — reject the message, returning an MDN to the sender</dt>

<dt>[reverse](sieve.ref.reverse.php) — reverse a string or a stringlist</dt>

<dt>[reverse_delim](sieve.ref.reverse_delim.php) — reverse a string based on a delimiter</dt>

<dt>[smtp_callback_verify](sieve.ref.smtp_callback_verify.php) — Perform smtp callback on an email address</dt>

<dt>[snmp_trap](sieve.ref.snmp_trap.php) — Send SNMP traps from a Sieve script</dt>

<dt>[split](sieve.ref.split.php) — split a string into a stringlist</dt>

<dt>[stop](sieve.ref.stop.php) — stop processing the current script</dt>

<dt>[thread_pool_stats](sieve.ref.thread_pool_stats.php) — Obtain information about thread pools</dt>

<dt>[type](sieve.ref.type.php) — test the type of the value in a Sieve variable</dt>

<dt>[vctx_conn_delete](sieve.ref.vctx_conn_delete.php) — delete a key from the connection context</dt>

<dt>[vctx_conn_get](sieve.ref.vctx_conn_get.php) — obtain the value of a connection context key</dt>

<dt>[vctx_conn_set](sieve.ref.vctx_conn_set.php) — set a value in the connection context</dt>

<dt>[vctx_mess_delete](sieve.ref.vctx_mess_delete.php) — delete a key from the message context</dt>

<dt>[vctx_mess_get](sieve.ref.vctx_mess_get.php) — obtain the value of a message context key</dt>

<dt>[vctx_mess_set](sieve.ref.vctx_mess_set.php) — set a value in the message context</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[III. Extending Momentum](p.extending.php)</dt>

<dd>

<dl>

<dt>[16\. Extending Momentum using C](c.sdk.php)</dt>

<dd>

<dl>

<dt>[16.1\. Momentum Data Structures](extending.structures.php)</dt>

<dt>[16.2\. The Module](extending.module.php)</dt>

<dt>[16.3\. Extensible Logging Infrastructure](extending.logging.php)</dt>

<dt>[16.4\. Extensible IO Infrastructure](extending.io.php)</dt>

<dt>[16.5\. Extensible Validation Infrastructure](extending.validation.php)</dt>

<dt>[16.6\. Registerable Hooks](extending.hooks.php)</dt>

<dt>[16.7\. Extending Sieve](extending.sieve.php)</dt>

</dl>

</dd>

<dt>[17\. C API Reference](extending.C.ref.php)</dt>

<dd>

<dl>

<dt>[hooks](extending.C.ref.declare_hook.php) — runtime hooking</dt>

<dt>[ec_cache](extending.C.ref.ec_cache.php) — generic caching facility</dt>

<dt>[events](extending.C.ref.events.php) — The IO Event system</dt>

<dt>[pcre_cache](extending.C.ref.pcre_cache.php) — pcre caching facility</dt>

<dt>[timed events](extending.C.ref.timed-events.php) — Timed Events</dt>

<dt>[API_EXPORT](extending.C.genref.API_EXPORT.php) — releases resources held in an event_io_state structure.</dt>

<dt>[cli_conn](extending.C.genref.cli_conn.php) — Establish an ec_console control connection.</dt>

<dt>[connection_used_for_email_message](extending.C.genref.connection_used_for_email_message.php)</dt>

<dt>[controls_func_cc](extending.C.genref.controls_func_cc.php)</dt>

<dt>[dict_serialize](extending.C.genref.dict_serialize.php) — Serialize a dictionary, for writing to disk or network.</dt>

<dt>[dict_unserialize](extending.C.genref.dict_unserialize.php) — Deserialize a dictionary.</dt>

<dt>[dns_add_mx_nodata](extending.C.genref.dns_add_mx_nodata.php)</dt>

<dt>[dns_cache_free_node](extending.C.genref.dns_cache_free_node.php) — Release a reference on a dns cache node.</dt>

<dt>[dns_cache_lookup](extending.C.genref.dns_cache_lookup.php) — Check to see if the results for a given query are in the DNS cache.</dt>

<dt>[dns_cache_lookup_wait](extending.C.genref.dns_cache_lookup_wait.php) — Perform a blocking DNS lookup, utilizing the cache.</dt>

<dt>[dns_cache_submit](extending.C.genref.dns_cache_submit.php) — Submit a query to the dns cache.</dt>

<dt>[dns_cache_submit2](extending.C.genref.dns_cache_submit2.php) — Submit a query to the dns cache.</dt>

<dt>[dns_cache_submit3](extending.C.genref.dns_cache_submit3.php) — Submit a query to the dns cache, asking an alternative ares channel.</dt>

<dt>[ec_bag_addref](extending.C.genref.ec_bag_addref.php) — add a reference to the bag.</dt>

<dt>[ec_bag_create](extending.C.genref.ec_bag_create.php) — create a bag.</dt>

<dt>[ec_bag_delref](extending.C.genref.ec_bag_delref.php) — delete a reference to the bag.</dt>

<dt>[ec_bag_empty](extending.C.genref.ec_bag_empty.php) — empty out the bag.</dt>

<dt>[ec_bag_find](extending.C.genref.ec_bag_find.php) — Find something in the bag.</dt>

<dt>[ec_bag_get](extending.C.genref.ec_bag_get.php) — get a specific something out of the bag.</dt>

<dt>[ec_bag_put](extending.C.genref.ec_bag_put.php) — put something in the bag.</dt>

<dt>[ec_bag_remove](extending.C.genref.ec_bag_remove.php) — remove a specific something from the bag.</dt>

<dt>[ec_control_context_append](extending.C.genref.ec_control_context_append.php)</dt>

<dt>[ec_control_context_free_list](extending.C.genref.ec_control_context_free_list.php)</dt>

<dt>[ec_control_context_next](extending.C.genref.ec_control_context_next.php)</dt>

<dt>[ec_control_context_set_type](extending.C.genref.ec_control_context_set_type.php)</dt>

<dt>[ec_control_get_command_construct](extending.C.genref.ec_control_get_command_construct.php) — gets the command_construct for the currently dispatched session.</dt>

<dt>[ec_control_register_command](extending.C.genref.ec_control_register_command.php)</dt>

<dt>[ec_control_register_type](extending.C.genref.ec_control_register_type.php)</dt>

<dt>[ec_control_send_command](extending.C.genref.ec_control_send_command.php) — Send a command over an ec_console control connection.</dt>

<dt>[ec_message_addref](extending.C.genref.ec_message_addref.php) — Create a reference to an existing message.</dt>

<dt>[ec_message_assemble_to_legacy_email_message](extending.C.genref.ec_message_assemble_to_legacy_email_message.php) — glue the parts back together into an in-memory email_message.</dt>

<dt>[ec_message_blobject_get](extending.C.genref.ec_message_blobject_get.php) — Retrieve a blobject tag.</dt>

<dt>[ec_message_blobject_remove](extending.C.genref.ec_message_blobject_remove.php) — Remove a blobject tag.</dt>

<dt>[ec_message_blobject_store](extending.C.genref.ec_message_blobject_store.php) — tag a message with a blobject</dt>

<dt>[ec_message_builder](extending.C.genref.ec_message_builder.php) — Convenience routine for building messages in a blocking fashion.</dt>

<dt>[ec_message_change_binding_slot](extending.C.genref.ec_message_change_binding_slot.php) — Set the binding for a message.</dt>

<dt>[ec_message_context_clean](extending.C.genref.ec_message_context_clean.php) — Cleans the appropriate per-message dictionary.</dt>

<dt>[ec_message_context_delete](extending.C.genref.ec_message_context_delete.php) — Delete a key/value pair from the appropriate per-message dictionary.</dt>

<dt>[ec_message_context_discard](extending.C.genref.ec_message_context_discard.php) — Discards the per-message dictionaries; they will be re-fetched on demand.</dt>

<dt>[ec_message_context_exists](extending.C.genref.ec_message_context_exists.php) — Return true if the provided key exists in the appropriate per-message dictionary.</dt>

<dt>[ec_message_context_exists_and_get](extending.C.genref.ec_message_context_exists_and_get.php) — Return true if the provided key exists in the appropriate per-message dictionary.</dt>

<dt>[ec_message_context_firstkey](extending.C.genref.ec_message_context_firstkey.php) — Returns a pointer to the first key in the appropriate per-message dictionary, NULL if the dictionary is empty.</dt>

<dt>[ec_message_context_get](extending.C.genref.ec_message_context_get.php) — Returns a pointer to the value for the provided key in the appropriate per-message dictionary, otherwise it returns an empty string.</dt>

<dt>[ec_message_context_nextkey](extending.C.genref.ec_message_context_nextkey.php) — Returns a pointer to the 'next' key in the appropriate per-message dictionary, NULL if there are no more keys.</dt>

<dt>[ec_message_context_set](extending.C.genref.ec_message_context_set.php) — Store a key/value pair in the appropriate per-message dictionary.</dt>

<dt>[ec_message_context_size](extending.C.genref.ec_message_context_size.php) — Returns the size of the appropriate per-message dictionary.</dt>

<dt>[ec_message_copy](extending.C.genref.ec_message_copy.php) — Create a copy of an existing message.</dt>

<dt>[ec_message_cowref](extending.C.genref.ec_message_cowref.php) — Create a copy-on-write reference to an existing message.</dt>

<dt>[ec_message_extract_part_to_string](extending.C.genref.ec_message_extract_part_to_string.php) — Extract a message part to a string, decoding transfer encoding.</dt>

<dt>[ec_message_get_body_fd_for_mmap](extending.C.genref.ec_message_get_body_fd_for_mmap.php) — Requests the file descriptor from the IO layer for the purpose of memory mapping.</dt>

<dt>[ec_message_get_body_io_object](extending.C.genref.ec_message_get_body_io_object.php) — Requests an io_object from the IO layer.</dt>

<dt>[ec_message_get_code](extending.C.genref.ec_message_get_code.php) — fetches the code set for the message.</dt>

<dt>[ec_message_get_envelope](extending.C.genref.ec_message_get_envelope.php) — Returns information from the envelope of the message.</dt>

<dt>[ec_message_get_first_part](extending.C.genref.ec_message_get_first_part.php) — Returns the top level mime part from the message.</dt>

<dt>[ec_message_get_mailfrom](extending.C.genref.ec_message_get_mailfrom.php) — returns the entire protocol decorated mailfrom string.</dt>

<dt>[ec_message_get_message_memory](extending.C.genref.ec_message_get_message_memory.php) — Returns a pointer to the message memory.</dt>

<dt>[ec_message_get_message_size](extending.C.genref.ec_message_get_message_size.php) — Returns the message size.</dt>

<dt>[ec_message_get_rcptto](extending.C.genref.ec_message_get_rcptto.php) — returns the entire protocol decorated rcptto string.</dt>

<dt>[ec_message_is_large](extending.C.genref.ec_message_is_large.php) — Indicates if a message is large.</dt>

<dt>[ec_message_new](extending.C.genref.ec_message_new.php) — Create a new message.</dt>

<dt>[ec_message_parse_and_set_memory_buffer](extending.C.genref.ec_message_parse_and_set_memory_buffer.php) — This API is semantically equivalent to the following: int ret = ec_message_parse(mess, mem, len, 1); ec_message_set_io_object(mess, io_wrapper_open_memory(mem, len, .</dt>

<dt>[ec_message_parser_defaults](extending.C.genref.ec_message_parser_defaults.php) — Obtain message parsing/validation defaults.</dt>

<dt>[ec_message_parser_strerror](extending.C.genref.ec_message_parser_strerror.php) — Returns a readable representation of a message parsing error code.</dt>

<dt>[ec_message_part_extract](extending.C.genref.ec_message_part_extract.php) — Prepare to extract a message part in a streaming fashion.</dt>

<dt>[ec_message_part_get_content_type](extending.C.genref.ec_message_part_get_content_type.php) — Returns the content type and charset for a given part.</dt>

<dt>[ec_message_part_touch](extending.C.genref.ec_message_part_touch.php) — Flags a message part as being modified.</dt>

<dt>[ec_message_refetch_meta](extending.C.genref.ec_message_refetch_meta.php) — refetch extended meta information from the spool</dt>

<dt>[ec_message_register_parser](extending.C.genref.ec_message_register_parser.php) — Replaces the core message parser.</dt>

<dt>[ec_message_release_body_io_object](extending.C.genref.ec_message_release_body_io_object.php) — Releases the body io_object.</dt>

<dt>[ec_message_render_headers_to_string](extending.C.genref.ec_message_render_headers_to_string.php) — renders the headers of the first part of a message to a string.</dt>

<dt>[ec_message_render_meta_to_string](extending.C.genref.ec_message_render_meta_to_string.php) — Renders meta information about the message to a string.</dt>

<dt>[ec_message_render_part_headers_to_string](extending.C.genref.ec_message_render_part_headers_to_string.php) — Render the headers of a message part to a string.</dt>

<dt>[ec_message_render_part_to_string](extending.C.genref.ec_message_render_part_to_string.php) — Render a message part to a string.</dt>

<dt>[ec_message_render_to_string](extending.C.genref.ec_message_render_to_string.php) — renders a message, swapping it in if needed.</dt>

<dt>[ec_message_select_binding_by_group](extending.C.genref.ec_message_select_binding_by_group.php) — Select a binding from a binding group.</dt>

<dt>[ec_message_set__object](extending.C.genref.ec_message_set__object.php) — set the _object for a message, maintaining appropriate accounting.</dt>

<dt>[ec_message_set_envelope](extending.C.genref.ec_message_set_envelope.php) — Sets envelope information for the message.</dt>

<dt>[ec_message_set_first_part](extending.C.genref.ec_message_set_first_part.php) — Accessor for changing the top level mime part for a message.</dt>

<dt>[ec_message_set_mailfrom](extending.C.genref.ec_message_set_mailfrom.php) — sets the entire protocol decorated mailfrom string.</dt>

<dt>[ec_message_set_next_attempt](extending.C.genref.ec_message_set_next_attempt.php) — Determines and sets the next attempt time for the message.</dt>

<dt>[ec_message_set_rcptto](extending.C.genref.ec_message_set_rcptto.php) — sets the entire protocol decorated rcptto string.</dt>

<dt>[ec_message_snapshot](extending.C.genref.ec_message_snapshot.php) — Create a snapshot of an existing message.</dt>

<dt>[ec_message_swap_in](extending.C.genref.ec_message_swap_in.php) — causes the message content to be read in from disk.</dt>

<dt>[ec_message_swap_out](extending.C.genref.ec_message_swap_out.php) — cause a message to be written to disk.</dt>

<dt>[ec_message_swap_out_meta](extending.C.genref.ec_message_swap_out_meta.php) — cause message meta data to be written to disk.</dt>

<dt>[ec_message_unlink_on_free](extending.C.genref.ec_message_unlink_on_free.php) — Arranges for the message to be unlinked from spool when its refcount falls to zero.</dt>

<dt>[ec_messagescope_query](extending.C.genref.ec_messagescope_query.php) — Query for reputation record.</dt>

<dt>[ec_ssl_set_ctx_param](extending.C.genref.ec_ssl_set_ctx_param.php) — sets an ec_ssl_ctx_param member.</dt>

<dt>[ec_ssl_set_ctx_verify_mode](extending.C.genref.ec_ssl_set_ctx_verify_mode.php) — sets the tls_verify ec_ssl_ctx_param member.</dt>

<dt>[ec_ssl_set_verify_errmsg](extending.C.genref.ec_ssl_set_verify_errmsg.php) — set the verify error message and code.</dt>

<dt>[ec_thread_pool_auto_shrink](extending.C.genref.ec_thread_pool_auto_shrink.php) — set a thread pool to auto shrink.</dt>

<dt>[ec_thread_pool_defer_spawn](extending.C.genref.ec_thread_pool_defer_spawn.php) — set a thread pool to defer thread creation.</dt>

<dt>[ec_thread_pool_set_backlog](extending.C.genref.ec_thread_pool_set_backlog.php) — set the maximum backlog for an existing thread pool.</dt>

<dt>[ec_thread_pool_set_stack_size](extending.C.genref.ec_thread_pool_set_stack_size.php) — set the stack size for an existing thread pool.</dt>

<dt>[echash_track_versioning](extending.C.genref.echash_track_versioning.php) — Enable versioning on a hash table.</dt>

<dt>[jlog_file_close](extending.C.genref.jlog_file_close.php) — closes a jlog_file</dt>

<dt>[jlog_file_lock](extending.C.genref.jlog_file_lock.php) — exclusively locks a jlog_file against other processes and threads</dt>

<dt>[jlog_file_map_read](extending.C.genref.jlog_file_map_read.php) — maps the entirety of a jlog_file into memory for reading</dt>

<dt>[jlog_file_open](extending.C.genref.jlog_file_open.php) — opens a jlog_file</dt>

<dt>[jlog_file_pread](extending.C.genref.jlog_file_pread.php) — preads from a jlog_file, retries EINTR</dt>

<dt>[jlog_file_pwrite](extending.C.genref.jlog_file_pwrite.php) — pwrites to a jlog_file, retries EINTR</dt>

<dt>[jlog_file_size](extending.C.genref.jlog_file_size.php) — gives the size of a jlog_file</dt>

<dt>[jlog_file_sync](extending.C.genref.jlog_file_sync.php) — calls fdatasync (if avalable) or fsync on the underlying filehandle</dt>

<dt>[jlog_file_truncate](extending.C.genref.jlog_file_truncate.php) — truncates a jlog_file, retries EINTR</dt>

<dt>[jlog_file_unlock](extending.C.genref.jlog_file_unlock.php) — unlocks a jlog_file</dt>

<dt>[jlog_idx_details](extending.C.genref.jlog_idx_details.php) — fetches the last marker in the index and the closedness thereof</dt>

<dt>[jlog_inspect_datafile](extending.C.genref.jlog_inspect_datafile.php) — prints detailed info about the log segment to stderr</dt>

<dt>[jlog_repair_datafile](extending.C.genref.jlog_repair_datafile.php) — repairs a damaged datafile</dt>

<dt>[msc_thread_id](extending.C.genref.msc_thread_id.php) — Generate a thread_id according the following format: [msg_id in spool name format]::[node name]:[suffix].</dt>

<dt>[register_smtp_client_state](extending.C.genref.register_smtp_client_state.php) — Register a custom state in the SMTP client state machine.</dt>

<dt>[run_command](extending.C.genref.run_command.php)</dt>

<dt>[run_command2](extending.C.genref.run_command2.php) — Execute the console command referenced by a command_construct.</dt>

<dt>[send_command](extending.C.genref.send_command.php) — Send a command over an ec_console control connection.</dt>

</dl>

</dd>

<dt>[18\. Hooks in the core scope](extending.hooks.core.php)</dt>

<dd>

<dl>

<dt>[__mail_queue_maintain](extending.hooks.core.__mail_queue_maintain.php)</dt>

<dt>[aaa_log](extending.hooks.core.aaa_log.php)</dt>

<dt>[annotate_batch](extending.hooks.core.annotate_batch.php)</dt>

<dt>[assess_batch](extending.hooks.core.assess_batch.php)</dt>

<dt>[binding_group_choose_binding](extending.hooks.core.binding_group_choose_binding.php)</dt>

<dt>[body_modify](extending.hooks.core.body_modify.php)</dt>

<dt>[bounce_error_classify](extending.hooks.core.bounce_error_classify.php)</dt>

<dt>[cache_get](extending.hooks.core.cache_get.php)</dt>

<dt>[cache_set](extending.hooks.core.cache_set.php)</dt>

<dt>[check_outbound_conn_throttle](extending.hooks.core.check_outbound_conn_throttle.php)</dt>

<dt>[check_outbound_mess_throttle](extending.hooks.core.check_outbound_mess_throttle.php)</dt>

<dt>[config_get_domain_relay](extending.hooks.core.config_get_domain_relay.php)</dt>

<dt>[config_get_domain_routes_data_copy](extending.hooks.core.config_get_domain_routes_data_copy.php)</dt>

<dt>[config_get_message_gateway_into_buffer](extending.hooks.core.config_get_message_gateway_into_buffer.php)</dt>

<dt>[config_get_message_routing_domain](extending.hooks.core.config_get_message_routing_domain.php)</dt>

<dt>[config_get_routes_data_copy](extending.hooks.core.config_get_routes_data_copy.php)</dt>

<dt>[config_option_post_set](extending.hooks.core.config_option_post_set.php)</dt>

<dt>[config_option_pre_set](extending.hooks.core.config_option_pre_set.php)</dt>

<dt>[connection_goal](extending.hooks.core.connection_goal.php)</dt>

<dt>[connection_post_bind](extending.hooks.core.connection_post_bind.php)</dt>

<dt>[control_allow_writable_config](extending.hooks.core.control_allow_writable_config.php)</dt>

<dt>[control_allow_writable_config2](extending.hooks.core.control_allow_writable_config2.php)</dt>

<dt>[control_post_command](extending.hooks.core.control_post_command.php)</dt>

<dt>[control_post_control](extending.hooks.core.control_post_control.php)</dt>

<dt>[control_pre_command](extending.hooks.core.control_pre_command.php)</dt>

<dt>[control_pre_control](extending.hooks.core.control_pre_control.php)</dt>

<dt>[control_shutdown](extending.hooks.core.control_shutdown.php)</dt>

<dt>[control_shutdown_ex](extending.hooks.core.control_shutdown_ex.php)</dt>

<dt>[dec_inbound_connections](extending.hooks.core.dec_inbound_connections.php)</dt>

<dt>[dec_outbound_connections](extending.hooks.core.dec_outbound_connections.php)</dt>

<dt>[disk_queue_core_inject](extending.hooks.core.disk_queue_core_inject.php)</dt>

<dt>[dns_get_As](extending.hooks.core.dns_get_As.php)</dt>

<dt>[dns_get_MXs](extending.hooks.core.dns_get_MXs.php)</dt>

<dt>[ec_bag_find](extending.hooks.core.ec_bag_find.php)</dt>

<dt>[ec_message_enqueue](extending.hooks.core.ec_message_enqueue.php)</dt>

<dt>[ec_message_set_next_attempt](extending.hooks.core.ec_message_set_next_attempt.php)</dt>

<dt>[ec_ssl_SSL_CTX_fixup](extending.hooks.core.ec_ssl_SSL_CTX_fixup.php)</dt>

<dt>[esmtp_message_sp_async_samfunc](extending.hooks.core.esmtp_message_sp_async_samfunc.php)</dt>

<dt>[final_validation](extending.hooks.core.final_validation.php)</dt>

<dt>[finalize_validation](extending.hooks.core.finalize_validation.php)</dt>

<dt>[generate_bounces](extending.hooks.core.generate_bounces.php)</dt>

<dt>[generate_rfc3464_message](extending.hooks.core.generate_rfc3464_message.php)</dt>

<dt>[generate_rfc3464_message_preamble](extending.hooks.core.generate_rfc3464_message_preamble.php)</dt>

<dt>[generate_soft_bounce_message](extending.hooks.core.generate_soft_bounce_message.php)</dt>

<dt>[generate_soft_bounce_message_preamble](extending.hooks.core.generate_soft_bounce_message_preamble.php)</dt>

<dt>[get_inbound_tls_parameters](extending.hooks.core.get_inbound_tls_parameters.php)</dt>

<dt>[get_message_expiration_params](extending.hooks.core.get_message_expiration_params.php)</dt>

<dt>[get_msg_expiration_params](extending.hooks.core.get_msg_expiration_params.php)</dt>

<dt>[get_outbound_tls_parameters](extending.hooks.core.get_outbound_tls_parameters.php)</dt>

<dt>[get_protocol_string_for_trace_headers](extending.hooks.core.get_protocol_string_for_trace_headers.php)</dt>

<dt>[get_received_header_text](extending.hooks.core.get_received_header_text.php)</dt>

<dt>[inbound_smtp_tls_verify_callback](extending.hooks.core.inbound_smtp_tls_verify_callback.php)</dt>

<dt>[inc_inbound_connections](extending.hooks.core.inc_inbound_connections.php)</dt>

<dt>[inc_outbound_conn_throttle](extending.hooks.core.inc_outbound_conn_throttle.php)</dt>

<dt>[inc_outbound_connections](extending.hooks.core.inc_outbound_connections.php)</dt>

<dt>[inc_outbound_mess_throttle](extending.hooks.core.inc_outbound_mess_throttle.php)</dt>

<dt>[log_attempt](extending.hooks.core.log_attempt.php)</dt>

<dt>[log_attempt_v1](extending.hooks.core.log_attempt_v1.php)</dt>

<dt>[log_client_connection_failure](extending.hooks.core.log_client_connection_failure.php)</dt>

<dt>[log_client_connection_success](extending.hooks.core.log_client_connection_success.php)</dt>

<dt>[log_delivery](extending.hooks.core.log_delivery.php)</dt>

<dt>[log_delivery_v1](extending.hooks.core.log_delivery_v1.php)</dt>

<dt>[log_error](extending.hooks.core.log_error.php)</dt>

<dt>[log_permanent_failure](extending.hooks.core.log_permanent_failure.php)</dt>

<dt>[log_permanent_failure_v1](extending.hooks.core.log_permanent_failure_v1.php)</dt>

<dt>[log_reception](extending.hooks.core.log_reception.php)</dt>

<dt>[log_reception_v1](extending.hooks.core.log_reception_v1.php)</dt>

<dt>[log_rejection](extending.hooks.core.log_rejection.php)</dt>

<dt>[log_reopen](extending.hooks.core.log_reopen.php)</dt>

<dt>[log_spool_import](extending.hooks.core.log_spool_import.php)</dt>

<dt>[log_transient_failure](extending.hooks.core.log_transient_failure.php)</dt>

<dt>[log_transient_failure_v1](extending.hooks.core.log_transient_failure_v1.php)</dt>

<dt>[mail_queue_get_next_active](extending.hooks.core.mail_queue_get_next_active.php)</dt>

<dt>[mail_queue_insert_active](extending.hooks.core.mail_queue_insert_active.php)</dt>

<dt>[mail_queue_maintain_domain](extending.hooks.core.mail_queue_maintain_domain.php)</dt>

<dt>[mailq_get_next_active](extending.hooks.core.mailq_get_next_active.php)</dt>

<dt>[mailq_insert_active](extending.hooks.core.mailq_insert_active.php)</dt>

<dt>[message_body_in_core](extending.hooks.core.message_body_in_core.php)</dt>

<dt>[outbound_smtp_tls_verify_callback](extending.hooks.core.outbound_smtp_tls_verify_callback.php)</dt>

<dt>[outbound_tls_ca](extending.hooks.core.outbound_tls_ca.php)</dt>

<dt>[outbound_tls_cert](extending.hooks.core.outbound_tls_cert.php)</dt>

<dt>[outbound_tls_ciphers](extending.hooks.core.outbound_tls_ciphers.php)</dt>

<dt>[outbound_tls_key](extending.hooks.core.outbound_tls_key.php)</dt>

<dt>[outbound_tls_verify](extending.hooks.core.outbound_tls_verify.php)</dt>

<dt>[post_assemble_fwd_message](extending.hooks.core.post_assemble_fwd_message.php)</dt>

<dt>[post_conf](extending.hooks.core.post_conf.php)</dt>

<dt>[post_dns_handle_a](extending.hooks.core.post_dns_handle_a.php)</dt>

<dt>[post_dns_handle_mx](extending.hooks.core.post_dns_handle_mx.php)</dt>

<dt>[post_drop_privileges](extending.hooks.core.post_drop_privileges.php)</dt>

<dt>[post_event_read](extending.hooks.core.post_event_read.php)</dt>

<dt>[post_event_write](extending.hooks.core.post_event_write.php)</dt>

<dt>[post_generate_rfc3464_message](extending.hooks.core.post_generate_rfc3464_message.php)</dt>

<dt>[post_generate_soft_bounce_message](extending.hooks.core.post_generate_soft_bounce_message.php)</dt>

<dt>[post_initiate_connection_smtp](extending.hooks.core.post_initiate_connection_smtp.php)</dt>

<dt>[post_mail_queue_maintain_domain](extending.hooks.core.post_mail_queue_maintain_domain.php)</dt>

<dt>[post_read_smtp](extending.hooks.core.post_read_smtp.php)</dt>

<dt>[post_smtp_command](extending.hooks.core.post_smtp_command.php)</dt>

<dt>[post_swap_in_meta](extending.hooks.core.post_swap_in_meta.php)</dt>

<dt>[post_validate_data_spool_each_rcpt](extending.hooks.core.post_validate_data_spool_each_rcpt.php)</dt>

<dt>[post_validate_data_spool_each_rcpt_v1](extending.hooks.core.post_validate_data_spool_each_rcpt_v1.php)</dt>

<dt>[post_validate_set_binding](extending.hooks.core.post_validate_set_binding.php)</dt>

<dt>[pre_console_release](extending.hooks.core.pre_console_release.php)</dt>

<dt>[pre_dns_handle_a](extending.hooks.core.pre_dns_handle_a.php)</dt>

<dt>[pre_dns_handle_mx](extending.hooks.core.pre_dns_handle_mx.php)</dt>

<dt>[pre_drop_privileges](extending.hooks.core.pre_drop_privileges.php)</dt>

<dt>[pre_ec_can_relay_to](extending.hooks.core.pre_ec_can_relay_to.php)</dt>

<dt>[pre_event_close](extending.hooks.core.pre_event_close.php)</dt>

<dt>[pre_mail_queue_maintain_domain](extending.hooks.core.pre_mail_queue_maintain_domain.php)</dt>

<dt>[pre_mail_queue_message_requeue](extending.hooks.core.pre_mail_queue_message_requeue.php)</dt>

<dt>[pre_mailq_message_requeue](extending.hooks.core.pre_mailq_message_requeue.php)</dt>

<dt>[pre_read_smtp](extending.hooks.core.pre_read_smtp.php)</dt>

<dt>[pre_swap_out_meta](extending.hooks.core.pre_swap_out_meta.php)</dt>

<dt>[premigrate_outbound_connection](extending.hooks.core.premigrate_outbound_connection.php)</dt>

<dt>[rfc3464_inline_message_fragment](extending.hooks.core.rfc3464_inline_message_fragment.php)</dt>

<dt>[server_esmtp_session_abort](extending.hooks.core.server_esmtp_session_abort.php)</dt>

<dt>[smtp_client_mailfrom_args](extending.hooks.core.smtp_client_mailfrom_args.php)</dt>

<dt>[smtp_client_rcptto_args](extending.hooks.core.smtp_client_rcptto_args.php)</dt>

<dt>[smtp_client_xclient_args](extending.hooks.core.smtp_client_xclient_args.php)</dt>

<dt>[smtp_error_classify](extending.hooks.core.smtp_error_classify.php)</dt>

<dt>[smtp_should_session_shutdown](extending.hooks.core.smtp_should_session_shutdown.php)</dt>

<dt>[swap_out_multi](extending.hooks.core.swap_out_multi.php)</dt>

<dt>[sys_init](extending.hooks.core.sys_init.php)</dt>

<dt>[use_outbound_tls](extending.hooks.core.use_outbound_tls.php)</dt>

<dt>[validate_accept](extending.hooks.core.validate_accept.php)</dt>

<dt>[validate_auth](extending.hooks.core.validate_auth.php)</dt>

<dt>[validate_connect](extending.hooks.core.validate_connect.php)</dt>

<dt>[validate_data_spool_each_rcpt](extending.hooks.core.validate_data_spool_each_rcpt.php)</dt>

<dt>[validate_expand_string](extending.hooks.core.validate_expand_string.php)</dt>

<dt>[veto_host_connection](extending.hooks.core.veto_host_connection.php)</dt>

</dl>

</dd>

<dt>[19\. Hooks in the checklist scope](extending.hooks.checklist.php)</dt>

<dd>

<dl>

<dt>[add_address](extending.hooks.checklist.add_address.php)</dt>

<dt>[add_ip](extending.hooks.checklist.add_ip.php)</dt>

<dt>[add_user_address](extending.hooks.checklist.add_user_address.php)</dt>

<dt>[add_user_ip](extending.hooks.checklist.add_user_ip.php)</dt>

<dt>[check_address](extending.hooks.checklist.check_address.php)</dt>

<dt>[check_ip](extending.hooks.checklist.check_ip.php)</dt>

<dt>[check_user_address](extending.hooks.checklist.check_user_address.php)</dt>

<dt>[check_user_ip](extending.hooks.checklist.check_user_ip.php)</dt>

<dt>[remove_address](extending.hooks.checklist.remove_address.php)</dt>

<dt>[remove_ip](extending.hooks.checklist.remove_ip.php)</dt>

<dt>[remove_user_address](extending.hooks.checklist.remove_user_address.php)</dt>

<dt>[remove_user_ip](extending.hooks.checklist.remove_user_ip.php)</dt>

</dl>

</dd>

<dt>[20\. Hooks in the cluster scope](extending.hooks.cluster.php)</dt>

<dd>

<dl>

<dt>[mbus_daemon](extending.hooks.cluster.mbus_daemon.php)</dt>

<dt>[membership_update](extending.hooks.cluster.membership_update.php)</dt>

<dt>[nodename](extending.hooks.cluster.nodename.php)</dt>

<dt>[stats_request](extending.hooks.cluster.stats_request.php)</dt>

<dt>[update_trans_metrics](extending.hooks.cluster.update_trans_metrics.php)</dt>

</dl>

</dd>

<dt>[21\. Hooks in the delay_dsn scope](extending.hooks.delay_dsn.php)</dt>

<dd>

<dl>

<dt>[generate_delay_dsn](extending.hooks.delay_dsn.generate_delay_dsn.php)</dt>

<dt>[next_delay_dsn](extending.hooks.delay_dsn.next_delay_dsn.php)</dt>

<dt>[send_notification](extending.hooks.delay_dsn.send_notification.php)</dt>

</dl>

</dd>

<dt>[22\. Hooks in the inbound_audit scope](extending.hooks.inbound_audit.php)</dt>

<dd>

<dl>

<dt>[series_add](extending.hooks.inbound_audit.series_add.php)</dt>

</dl>

</dd>

<dt>[23\. Hooks in the publish scope](extending.hooks.publish.php)</dt>

<dd>

<dl>

<dt>[packet](extending.hooks.publish.packet.php)</dt>

</dl>

</dd>

<dt>[24\. Hooks in the quarantine scope](extending.hooks.quarantine.php)</dt>

<dd>

<dl>

<dt>[message2](extending.hooks.quarantine.message2.php)</dt>

<dt>[notification2](extending.hooks.quarantine.notification2.php)</dt>

</dl>

</dd>

<dt>[25\. Hooks in the sieve scope](extending.hooks.sieve.php)</dt>

<dd>

<dl>

<dt>[casefold](extending.hooks.sieve.casefold.php)</dt>

<dt>[compile_script](extending.hooks.sieve.compile_script.php)</dt>

<dt>[convert_charset](extending.hooks.sieve.convert_charset.php)</dt>

<dt>[fetch_script](extending.hooks.sieve.fetch_script.php)</dt>

</dl>

</dd>

<dt>[26\. Hooks in the sievelib scope](extending.hooks.sievelib.php)</dt>

<dd>

<dl>

<dt>[gauge_cache_manip](extending.hooks.sievelib.gauge_cache_manip.php)</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[IV. Appendices](p.appendices.php)</dt>

<dd>

<dl>

<dt>[A. Frequently Asked Questions](faq.php)</dt>

<dt>[B. SMTP Response Codes](smtp-response-codes.php)</dt>

<dt>[C. Log Formats](log_formats.php)</dt>

<dd>

<dl>

<dt>[C.1\. Log Formats for Version 2.1 and 2.2](log_formats.version_2.php)</dt>

<dt>[C.2\. Bounce Classification Codes](bounce_logger.classification.codes.php)</dt>

<dt>[C.3\. Connection Stages](log_formats.connection.stages.php)</dt>

</dl>

</dd>

<dt>[D. Panic Log Errors](error-messages.php)</dt>

<dd>

<dl>

<dt>[D.1\. All Panic Log Errors](all-panic-log-errors.php)</dt>

<dt>[D.2\. The DB Errors](DB-panic-log-errors.php)</dt>

<dt>[D.3\. The DNS Errors](DNS-panic-log-errors.php)</dt>

<dt>[D.4\. The DNSDS Errors](DNSDS-panic-log-errors.php)</dt>

<dt>[D.5\. The FD Errors](FD-panic-log-errors.php)</dt>

<dt>[D.6\. The LIC Errors](LIC-panic-log-errors.php)</dt>

<dt>[D.7\. The LOG1 Errors](LOG1-panic-log-errors.php)</dt>

<dt>[D.8\. The MEM Errors](MEM-panic-log-errors.php)</dt>

<dt>[D.9\. The MOD Errors](MOD-panic-log-errors.php)</dt>

<dt>[D.10\. The NET Errors](NET-panic-log-errors.php)</dt>

<dt>[D.11\. The SMTP Errors](SMTP-panic-log-errors.php)</dt>

<dt>[D.12\. The SSL Errors](SSL-panic-log-errors.php)</dt>

<dt>[D.13\. The START Errors](START-panic-log-errors.php)</dt>

<dt>[D.14\. The TIME Errors](TIME-panic-log-errors.php)</dt>

</dl>

</dd>

<dt>[E. Message Responses](responses.php)</dt>

<dd>

<dl>

<dt>[E.1\. Responses Sorted By Codes](responses-by-code.php)</dt>

<dt>[E.2\. Responses Sorted by Message](responses-by-message.php)</dt>

</dl>

</dd>

<dt>[F. Key Binding Reference for ec_console](libedit.php)</dt>

<dd>

<dl>

<dt>[F.1\. Default emacs key bindings](libedit.keys.emacs.php)</dt>

<dt>[F.2\. Editor Commands](libedit.editor.commands.php)</dt>

<dt>[F.3\. Extended Commands](libedit.extended.php)</dt>

</dl>

</dd>

<dt>[G. Disclaimer](disclaimer.php)</dt>

<dt>[H. Copyrights](copyrights.php)</dt>

<dd>

<dl>

<dt>[H.1\. Acknowledgements](copyright.ack.php)</dt>

<dt>[H.2\. Disclaimers for Redistributed Third-Party Software](copyright.3rdparty-disclaimer.php)</dt>

</dl>

</dd>

<dt>[I. Acronyms](acronyms.php)</dt>

</dl>

</dd>

<dt>[Glossary](glossary.php)</dt>

</dl>

[List of Figures](figure-toc.php)[List of Tables](table-toc.php)[List of Examples](example-toc.php)

|   |   |  [Next](preface.php) |
|   |   |  Preface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)