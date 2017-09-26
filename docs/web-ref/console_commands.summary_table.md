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

| 12.1. System Console Command Summary |
| [Prev](console_commands.php)  | Chapter 12. Momentum System Console Commands Reference |  [Next](console.commands.non-module.php) |

## 12.1. System Console Command Summary

This table lists all system console commands alphabetically giving a brief description. Click the command name to see detailed information. A check mark appears in the `Module` column for commands that are module-specific. For module-specific commands to work, you must have the module loaded.

<a name="All-console-table"></a>

**Table 12.1. All console commands**

| Command/Description | Version | Module | Class |
| --- | --- | --- | --- |
| [\pager](console_commands.pager.php "\pager") – Page output of long console commands in the console | 3.0 |   | misc |
| [active](console_commands.active.php "active") – Show domains with active queue size bigger than threshold | 3.0 |   | queue size |
| [adaptive list](modules.adaptive.php#modules.adaptive.console "14.2.9. adaptive Management Using System Console Commands") – Display the value of shaping parameters | 3.0 | ✓ | module |
| [adaptive override](modules.adaptive.php#modules.adaptive.console "14.2.9. adaptive Management Using System Console Commands") – Override a suspension | 3.0 | ✓ | module |
| [adaptive reset](modules.adaptive.php#modules.adaptive.console "14.2.9. adaptive Management Using System Console Commands") – Clear the values of the shaping parameters | 3.0 | ✓ | module |
| [adaptive rules](modules.adaptive.php#modules.adaptive.console "14.2.9. adaptive Management Using System Console Commands") – Display the adaptive rules that are in effect for the specified domain/binding pair | 3.0 | ✓ | module |
| [adaptive suspensions](modules.adaptive.php#modules.adaptive.console "14.2.9. adaptive Management Using System Console Commands") – Summarize the suspensions that are currently in effect | 3.0 | ✓ | module |
| [adaptive warmup](modules.adaptive.php#modules.adaptive.console "14.2.9. adaptive Management Using System Console Commands") – Display the age of bindings from the perspective of the IP Warmup component | 3.0 | ✓ | module |
| [authz id](console_commands.authz_id.php "authz id") – Display the id of the current user | 3.0 |   | misc |
| [authz roles list](console_commands.authz_roles_list.php "authz roles list") – Display the currently defined roles | 3.0 |   | misc |
| [beik:instance_name reload](modules.beik.php#modules.beik.console "14.10.4. beik Management Using Console Commands") – Reload the beik module | 3.0.26 | ✓ | module |
| [binding active](console_commands.binding_active.php "binding active") – Show domains with active queue size bigger than threshold on a specified binding | 3.0 |   | queue size |
| [binding delayed](console_commands.binding_delayed.php "binding delayed") – Show domains with delayed queue size bigger than threshold on a specified binding | 3.0 |   | queue size |
| [binding fail domain quiet](console_commands.binding_fail_domain_quiet.php "binding fail domain quiet") – Fail messages for a domain on a binding without generating bounces | 3.0 |   | queue admin |
| [binding fail domain](console_commands.binding_fail_domain.php "binding fail domain") – Fail messages for a domain on a binding with a bounce message | 3.0 |   | queue admin |
| [binding flush domain](console_commands.binding_flush_domain.php "binding flush domain") – Perform delivery attempt on delayed queue of a domain on a binding | 3.0 |   | queue admin |
| [binding summary](console_commands.binding_summary.php "binding summary") – Show binding statistics | 3.0 |   | stats |
| [bounce_classifier:instance_name reload](modules.bounce_classifier.php#modules.bounce_classifier.console "14.11.2. bounce_classifier Management Using Console Commands") – Reload the bounce classification overrides | 3.0 | ✓ | module |
| [bounce_classifier_override reload](modules.bounce_classifier_override.php#modules.bounce_classifier_override.console "14.12.2. bounce_classifier Management Using Console Commands") – Reload the bounce classification overrides | 3.1 | ✓ | module |
| [bounce_classifier_override test](modules.bounce_classifier_override.php#modules.bounce_classifier_override.console "14.12.2. bounce_classifier Management Using Console Commands") – Test the classification of an SMTP reply | 3.5.7 | ✓ | module |
| [bounce_logger:instance_name reopen logs](modules.bounce_logger.php#modules.bounce_logger.console3 "14.13.3. bounce_logger Management Using System Console Commands") – Reopen the log files | 3.0 | ✓ | module |
| [cache list](console_commands.cache_list.php "cache list") – List all caches along with their associated attributes | 3.0.26 |   | stats |
| [cache stat](console_commands.cache_stat.php "cache stat") – Show detailed cache statistics for the specified cache | 3.0.26 |   | stats |
| [cache stats](console_commands.cache_stats.php "cache stats") – Show cache statistics | 3.0 |   | stats |
| [cidrdb list](modules.cidrdb.php#modules.cidrdb.console "14.16.2. cidrdb Management Using Console Commands") – List configured CIDR databases | 3.0 | ✓ | module |
| [cidrdb reload](modules.cidrdb.php#modules.cidrdb.console "14.16.2. cidrdb Management Using Console Commands") – Reload a cidrdb list | 3.0 | ✓ | module |
| [cloudmark:instance_name version](modules.cloudmark.php#modules.cloudmark.console "14.18.4. cloudmark Management Using Console Commands") – Output the Cloudmark version | 3.0 | ✓ | module |
| [cluster abort](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Abort the specified job | 3.0 | ✓ | module |
| [cluster arp show](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Resolve the MAC addresses of the cluster | 3.0 | ✓ | module |
| [cluster duravip announce view](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Announce a view update using the current local view | 3.0 | ✓ | module |
| [cluster duravip debug](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Turn DuraVIP™ debugging on or off | 3.0 | ✓ | module |
| [cluster duravip move](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Move a binding from one node to another | 3.0 | ✓ | module |
| [cluster duravip show tables](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Display the DuraVIP™ state tables in XML format | 3.0 | ✓ | module |
| [cluster duravip show](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Show the current state of DuraVIP™ bindings | 3.0 | ✓ | module |
| [cluster help](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Display the cluster console commands | 3.0 | ✓ | module |
| [cluster info](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Display the current operating status and parameters | 3.0 | ✓ | module |
| [cluster membership](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Display the current cluster nodes | 3.0 | ✓ | module |
| [cluster nodeaddr](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Show the cluster protocol service address | 3.0 | ✓ | module |
| [cluster nodename](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Show the name of the local node | 3.0 | ✓ | module |
| [cluster reset](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Reset the node cluster membership | 3.0 | ✓ | module |
| [cluster shared list](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – This command displays the currently managed objects | 3.0 | ✓ | module |
| [cluster shared show](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Display shared objects | 3.0 | ✓ | module |
| [cluster show logs](cluster.config.replication.php#cluster.logging.console "7.7.2. Cluster Management Using Console Commands") – Show the size, name and location of the cluster logs | 3.0 | ✓ | module |
| [commtouch_ctasd:instance_name pending](modules.commtouch.php#modules.commtouch.console "14.19.3. commtouch_ctasd Management Using Console Commands") – Output the number of pending jobs | 3.0 | ✓ | module |
| [config begin from scratch](console_commands.config.php "config") – Begin a transaction from scratch | 3.0 |   | config |
| [config begin](console_commands.config.php "config") – Begin a transaction | 3.0 |   | config |
| [config commit](console_commands.config.php "config") – Commit a transaction | 3.0 |   | config |
| [config eval](console_commands.config.php "config") – Determine configuration value | 3.0 |   | config |
| [config get](console_commands.config.php "config") – Get configuration setting | 3.0 |   | config |
| [config locate](console_commands.config.php "config") – Locate a specific scope | 3.0 |   | config |
| [config reload](console_commands.config.php "config") – Reload configuration options from file | 3.0 |   | config |
| [config replay](console_commands.config.php "config") – Show changes in a transaction | 3.0 |   | config |
| [config rollback](console_commands.config.php "config") – Rollback a transaction | 3.0 |   | config |
| [config set](console_commands.config.php "config") – Set configuration option | 3.0 |   | config |
| [config show](console_commands.config.php "config") – Show a specific scope | 3.0 |   | config |
| [config showrecurse](console_commands.config.php "config") – Show a specific scope and its child scopes | 3.0 |   | config |
| [config unset](console_commands.config.php "config") – Unset configuration option | 3.0 |   | config |
| [config writeback](console_commands.config.php "config") – Write configuration changes to ecelerity.conf | 3.0 |   | config |
| [count](console_commands.count.php "count") – Count open connections | 3.0 |   | connections |
| [counter add](console_commands.counter.php "counter") – Add the specified amount to a counter | 3.1 |   | policy |
| [counter help](console_commands.counter.php "counter") – Display help for the counter command | 3.1 |   | policy |
| [counter increment](console_commands.counter.php "counter") – Increment a counter | 3.1 |   | policy |
| [counter list](console_commands.counter.php "counter") – List all counters counter | 3.1 |   | policy |
| [counter reset](console_commands.counter.php "counter") – Reset a counter to zero | 3.1 |   | policy |
| [counter unlink](console_commands.counter.php "counter") – Unlink a counter | 3.1 |   | policy |
| [delay_dsn:instance_name show pending events](modules.delay_dsn.php#modules.delay_dsn.console "14.25.2. delay_dsn Management Using Console Commands") – List all pending events | 3.0 | ✓ | module |
| [delayed](console_commands.delayed.php "delayed") – Show domains with delayed queue size bigger than threshold | 3.0 |   | queue admin |
| [dig](console_commands.dig.php "dig") – Submit a domain for dns MX query | 3.0 |   | dns |
| [dk_sign:instance_name flush keycache](modules.domainkeys.php#modules.domainkeys.console "14.29.6. domainkeys Management Using Console Commands") – Flush all entries from the keycache | 3.0 | ✓ | module |
| [dk_sign:instance_name stats](modules.domainkeys.php#modules.domainkeys.console "14.29.6. domainkeys Management Using Console Commands") – Display statistics relating to domain key signing | 3.0 | ✓ | module |
| [dkim_sign:instance_name flush keycache](modules.dkim.php#modules.dkim.console "14.27.4. dkim Management Using Console Commands") – Flush all entries from the keycache | 3.0 | ✓ | module |
| [dns_cache lookup](console_commands.dns_cache.php "dns_cache") – Look up a query in the DNS cache | 3.0 |   | dns |
| [dns_cache refcnts](console_commands.dns_cache.php "dns_cache") – Show the references in the DNS cache | 3.0 |   | dns |
| [dns_cache stats](console_commands.dns_cache.php "dns_cache") – Show summary stats for the DNS cache | 3.0 |   | dns |
| [dns_cache submit](console_commands.dns_cache.php "dns_cache") – Submit a DNS query | 3.0 |   | dns |
| [dnsbuf interval](modules.dnsbuf.php#modules.dnsbuf.console "14.28.2. dnsbuf Management Using Console Commands") – Change how often setsockopt() operations are performed | 3.6.5 | ✓ | module |
| [dnsbuf rcvbuf_size](modules.dnsbuf.php#modules.dnsbuf.console "14.28.2. dnsbuf Management Using Console Commands") – Change the rcvbuf_size value on the fly | 3.6.5 | ✓ | module |
| [dnsbuf sndbuf_size](modules.dnsbuf.php#modules.dnsbuf.console "14.28.2. dnsbuf Management Using Console Commands") – Change the sndbuf_size value on the fly | 3.6.5 | ✓ | module |
| [dnsbuf verify](modules.dnsbuf.php#modules.dnsbuf.console "14.28.2. dnsbuf Management Using Console Commands") – Query active sockets for current buffer sizes and report the results | 3.6.5 |   | module |
| [domain all](console_commands.domain_all.php "domain all") – Show statistics for all domains | 3.0 |   | stats |
| [domain](console_commands.domain.php "domain") – Show domain statistics | 3.0 |   | stats |
| [ds_core flush cache_name](modules.ds_core.php#modules.ds_core.console "14.30.2. ds_core Management Using Console Commands") – Flush a specific cache | 3.0 | ✓ | module |
| [ds_core stats](modules.ds_core.php#modules.ds_core.console "14.30.2. ds_core Management Using Console Commands") – Print stats for each cache | 3.0 | ✓ | module |
| [ds_ldap flush connection cache](modules.ds_core.php#modules.ds_ldap.console "14.30.3.5. ds_ldap Management Using Console Commands") – Remove all entries from the connection cache | 3.0 | ✓ | module |
| [ds_ldap show connection cache stats](modules.ds_core.php#modules.ds_ldap.console "14.30.3.5. ds_ldap Management Using Console Commands") – Output statistics relating to the connection cache | 3.0 | ✓ | module |
| [ec_logger:instance_name help](modules.ec_logger.php#modules.ec_logger.console "14.31.3. ec_logger Management Using Console Commands") – Display the available commands | 3.0 | ✓ | module |
| [ec_logger:instance_name reopen logs](modules.ec_logger.php#modules.ec_logger.console "14.31.3. ec_logger Management Using Console Commands") – Close and reopen the logs | 3.0 | ✓ | module |
| [fail domain quiet](console_commands.fail_domain_quiet.php "fail domain quiet") – Fail messages for a domain without generating bounces | 3.0 |   | misc |
| [fail domain](console_commands.fail_domain.php "fail domain") – Fail messages for a domain with a bounce message | 3.0 |   | misc |
| [fingerprint cache summary](console_commands.fingerprint_cache_summary.php "fingerprint cache summary") – Display the current cache size | 3.0.26 | ✓ | policy |
| [fingerprint rejection summary](console_commands.fingerprint_rejection_summary.php "fingerprint rejection summary") – Display details related to the current inbound connection | 3.0.26 | ✓ | policy |
| [flush domain](console_commands.flush_domain.php "flush domain") – Perform delivery attempt on delayed queue of a domain | 3.0 |   | queue admin |
| [help](console_commands.help.php "help") – Show help information for console commands | 3.0 |   | misc |
| [inbound_audit:instance_name add](modules.inbound_audit.php#modules.inbound_audit.console "14.41.4. inbound_audit Management Using Console Commands") – Add a value to a CIDR in a named series | 3.0 | ✓ | module |
| [inbound_audit:instance_name delete_ip](modules.inbound_audit.php#modules.inbound_audit.console "14.41.4. inbound_audit Management Using Console Commands") – Delete an IP from a defined named series | 3.0 | ✓ | module |
| [inbound_audit:instance_name help](modules.inbound_audit.php#modules.inbound_audit.console "14.41.4. inbound_audit Management Using Console Commands") – Display the available commands | 3.0 | ✓ | module |
| [inbound_audit:instance_name ip](modules.inbound_audit.php#modules.inbound_audit.console "14.41.4. inbound_audit Management Using Console Commands") – Count a CIDR in a named series | 3.0 | ✓ | module |
| [inbound_audit:instance_name show all](modules.inbound_audit.php#modules.inbound_audit.console "14.41.4. inbound_audit Management Using Console Commands") – Display verbose statistics for all domains as a CSV list | 3.0 | ✓ | module |
| [inbound_audit:instance_name subtract](modules.inbound_audit.php#modules.inbound_audit.console "14.41.4. inbound_audit Management Using Console Commands") – Subtract a value from a CIDR in a named series | 3.0 | ✓ | module |
| [mailq](console_commands.mailq.php "mailq") – Show the status of the mail queues | 3.0 |   | stats |
| [memory](console_commands.memory.php "memory") – Report detailed memory usage | 3.0 |   | stats |
| [message details](console_commands.message_details.php "message details") – Show detailed message information | 3.0 |   | message |
| [message fail quiet](console_commands.message_fail_quiet.php "message fail quiet") – Fail a message and do not create a non-delivery receipt (NDR) | 3.0 |   | message |
| [message fail](console_commands.message_fail.php "message fail") – Fail a message | 3.0 |   | message |
| [message retry](console_commands.message_retry.php "message retry") – Perform an immediate delivery attempt on a message | 3.0 |   | message |
| [module hooks](console_commands.module.php "module") – Manage loaded module hooks | 3.0 |   | module |
| [module list](console_commands.module.php "module") – Show loaded modules | 3.0 |   | module |
| [outbound_audit:instance_name clear all](modules.outbound_audit.php#modules.outbound_audit.console "14.50.3. outbound_audit: System Console Commands") – Zero-out all statistics | 3.0 | ✓ | module |
| [outbound_audit:instance_name clear domain](modules.outbound_audit.php#modules.outbound_audit.console "14.50.3. outbound_audit: System Console Commands") – Zero-out a domain's statistics | 3.0 | ✓ | module |
| [outbound_audit:instance_name domain_list](modules.outbound_audit.php#modules.outbound_audit.console "14.50.3. outbound_audit: System Console Commands") – Runtime addition/deletion of a domain in the monitoring list | 3.0 | ✓ | module |
| [outbound_audit:instance_name show all](modules.outbound_audit.php#modules.outbound_audit.console "14.50.3. outbound_audit: System Console Commands") – Dump all collected time-series data for all collected domains | 3.0 | ✓ | module |
| [outbound_audit:instance_name show domain](modules.outbound_audit.php#modules.outbound_audit.console "14.50.3. outbound_audit: System Console Commands") – Dump all collected time-series data for the specified domain | 3.0 | ✓ | module |
| [outbound_audit:instance_name show domains](modules.outbound_audit.php#modules.outbound_audit.console "14.50.3. outbound_audit: System Console Commands") – List the names of all domains which have collected data | 3.0 | ✓ | module |
| [outbound_audit:instance_name show global](modules.outbound_audit.php#modules.outbound_audit.console "14.50.3. outbound_audit: System Console Commands") – Show the global (aggregated) time-series data | 3.0 | ✓ | module |
| [paniclog](console_commands.paniclog.php "paniclog") – Show last several entries written to paniclog | 3.0 |   | logs |
| [pid](console_commands.pid.php "pid") – Show process id of Momentum | 3.0 |   | misc |
| [rebind](console_commands.rebind.php "rebind") – Rebind the messages in a binding or domain | 3.0 |   | queue admin |
| [refresh domain](console_commands.refresh_domain.php "refresh domain") – Refresh the DNS information for a domain | 3.0 |   | dns |
| [reopen logs](console_commands.reopen_logs.php "reopen logs") – Close and open log files | 3.0 |   | logs |
| [reroute queue](console_commands.reroute_queue.php "reroute queue") – Move messages from queues of one domain to queues of the other | 3.0 |   | queue admin |
| [sched at](modules.sched.php#modules.sched.console "14.59.1. sched Management Using Console Commands") – Create a recurrent command that repeats at the specified interval | 3.0 | ✓ | module |
| [sched delete](modules.sched.php#modules.sched.console "14.59.1. sched Management Using Console Commands") – Delete a scheduled job | 3.0 | ✓ | module |
| [sched every](modules.sched.php#modules.sched.console "14.59.1. sched Management Using Console Commands") – Create a recurrent command that repeats at the specified interval | 3.0 | ✓ | module |
| [sched in](modules.sched.php#modules.sched.console "14.59.1. sched Management Using Console Commands") – Run a command at the specified number of seconds from the current time | 3.0 | ✓ | module |
| [sched list](modules.sched.php#modules.sched.console "14.59.1. sched Management Using Console Commands") – List any scheduled tasks | 3.0 | ✓ | module |
| [show inbound](console_commands.show_inbound.php "show inbound") – Show all inbound connections | 3.0 |   | connections |
| [show outbound](console_commands.show_outbound.php "show outbound") – Show all outbound connections | 3.0 |   | connections |
| [showqueue](console_commands.showqueue.php "showqueue") – Show queue information | 3.0 |   | queue admin |
| [shutdown](console_commands.shutdown.php "shutdown") – Shutdown Momentum | 3.0 |   | misc |
| [signing_stats reset](console_commands.signing_stats_reset.php "signing_stats reset") – Reset signing stats | 3.0 | ✓ | stats |
| [signing_stats](console_commands.signing_stats.php "signing_stats") – Show DK/DKIM signing stats | 3.0 | ✓ | stats |
| [sp_async](console_commands.sp_async.php "sp_async") – Access the asynchronous I/O subsystem | 3.0 |   | misc |
| [spool import_poll](console_commands.spool_import_poll.php "spool import_poll") – Check the status of a spool that is being imported | 3.0 |   | misc |
| [spool import](console_commands.spool_import.php "spool import") – Import an alternative spool | 3.0 |   | resource |
| [spool_in](console_commands.spool_in.php "spool_in") – Read a message from the spool to the mail queue | 3.0 |   | message |
| [summary reset](console_commands.summary_reset.php "summary reset") – Reset summary statistics | 3.0 |   | stats |
| [summary](console_commands.summary.php "summary") – Show global metrics | 3.0 |   | stats |
| [sysinfo](console_commands.sysinfo.php "sysinfo") – Show system information | 3.0 |   | misc |
| [threads cpu queue](console_commands.threads.php "threads") – Display summary statistics for the CPU thread pools | 3.0 |   | stats |
| [threads io queue](console_commands.threads.php "threads") – Display summary statistics for the IO thread pools | 3.0 |   | stats |
| [threads stats](console_commands.threads.php "threads") – Display summary statistics for thread pools | 3.0 |   | stats |
| [tls flush cache](console_commands.tls.php "tls") – Flush the TLS cache | 3.0 |   | tls |
| [tls rekey](console_commands.tls.php "tls") – Remove the temporary RSA key | 3.0 |   | tls |
| [tls show cache](console_commands.tls.php "tls") – Show the TLS cache | 3.0 |   | tls |
| [trace smtp add](console_commands.trace_smtp.php "trace smtp") – Add an SMTP trace | 3.0 |   | misc |
| [trace smtp list](console_commands.trace_smtp.php "trace smtp") – List smtp traces | 3.0 |   | misc |
| [trace smtp remove](console_commands.trace_smtp.php "trace smtp") – Remove an SMTP trace | 3.0 |   | misc |
| [unlink stats](console_commands.unlink_stats.php "unlink stats") – Show statistics of removing messages from the disk | 3.0 |   | stats |
| [version](console_commands.version.php "version") – Show version information of Momentum | 3.0 |   | misc |
| [write config](console_commands.write_config.php "write config") – Display current running configuration | 3.0 |   | config |

| [Prev](console_commands.php)  | [Up](console_commands.php) |  [Next](console.commands.non-module.php) |
| Chapter 12. Momentum System Console Commands Reference  | [Table of Contents](index.php) |  12.2. System Console Commands |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)