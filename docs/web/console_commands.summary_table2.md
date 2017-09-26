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
| **[\pager](https://support.messagesystems.com/docs/web/console_commands.pager.php)** – Page output of long console commands in the console | 2.2 |   | misc |
| **[active](https://support.messagesystems.com/docs/web/console_commands.active.php)** – Show domains with active queue size bigger than threshold | 2.2 |   | queue size |
| **[av_module_name cache set size](https://support.messagesystems.com/docs/web/modules.antivirus.php#modules.antivirus.console)** – Cache the most recent virus signatures | 2.2 | ✓ | module |
| **[av_module_name cache show](https://support.messagesystems.com/docs/web/modules.antivirus.php#modules.antivirus.console)** – Show the virus cache | 2.2 | ✓ | module |
| **[av_module_name help](https://support.messagesystems.com/docs/web/modules.antivirus.php#modules.antivirus.console)** – Show help for av console commands | 2.2 | ✓ | module |
| **[av_module_name reload](https://support.messagesystems.com/docs/web/modules.antivirus.php#modules.antivirus.console)** – Reload the virus module if it supports reloading | 2.2 | ✓ | module |
| **[av_module_name set file_base](https://support.messagesystems.com/docs/web/modules.antivirus.php#modules.antivirus.console)** – Set the directory where temporary files are written | 2.2 | ✓ | module |
| **[av_module_name stats](https://support.messagesystems.com/docs/web/modules.antivirus.php#modules.antivirus.console)** – Show virus statistics | 2.2 | ✓ | module |
| **[beik:instance_name reload](https://support.messagesystems.com/docs/web/modules.beik.php#modules.beik.console)** – Reload the beik module | 2.2.3.46 | ✓ | module |
| **[binding active](https://support.messagesystems.com/docs/web/console_commands.binding_active.php)** – Show domains with active queue size bigger than threshold on a specified binding | 2.2 |   | queue size |
| **[binding delayed](https://support.messagesystems.com/docs/web/console_commands.binding_delayed.php)** – Show domains with delayed queue size bigger than threshold on a specified binding | 2.2 |   | queue size |
| **[binding fail domain quiet](https://support.messagesystems.com/docs/web/console_commands.binding_fail_domain_quiet.php)** – Fail messages for a domain on a binding without generating bounces | 2.2 |   | queue admin |
| **[binding fail domain](https://support.messagesystems.com/docs/web/console_commands.binding_fail_domain.php)** – Fail messages for a domain on a binding with a bounce message | 2.2 |   | queue admin |
| **[binding flush domain](https://support.messagesystems.com/docs/web/console_commands.binding_flush_domain.php)** – Perform delivery attempt on delayed queue of a domain on a binding | 2.2 |   | queue admin |
| **[binding summary](https://support.messagesystems.com/docs/web/console_commands.binding_summary.php)** – Show binding statistics | 2.2 |   | stats |
| **[bounce_classifier reload](https://support.messagesystems.com/docs/web/modules.bounce_classifier.php#modules.bounce_classifier.console)** – Trigger a manual reload of the bounce classification overrides | 2.2 | ✓ | module |
| **[bounce_classifier set user_mdn_classification_overide](https://support.messagesystems.com/docs/web/modules.bounce_classifier.php#modules.bounce_classifier.console)** – Set the file used to override MDN bounces | 2.2 | ✓ | module |
| **[bounce_classifier set user_smtp_classification_overide](https://support.messagesystems.com/docs/web/modules.bounce_classifier.php#modules.bounce_classifier.console)** – Set the file used to override SMTP bounces | 2.2 | ✓ | module |
| **[bounce_logger reopen logs](https://support.messagesystems.com/docs/web/modules.bounce_logger.php#modules.bounce_logger.console)** – Reopen the logs | 2.2 | ✓ | module |
| **[bounce_logger set log_inband_bounces](https://support.messagesystems.com/docs/web/modules.bounce_logger.php#modules.bounce_logger.console)** – Set inband bounces on or off | 2.2 | ✓ | module |
| **[bounce_logger set log_outofband_bounces](https://support.messagesystems.com/docs/web/modules.bounce_logger.php#modules.bounce_logger.console)** – Set out-of-band bounces on or off | 2.2 | ✓ | module |
| **[cache stats](https://support.messagesystems.com/docs/web/console_commands.cache_stats.php)** – Show cache statistics | 2.2 |   | stats |
| **[cidrdb list](https://support.messagesystems.com/docs/web/modules.cidrdb.php#modules.cidrdb.console)** – List configured CIDR databases | 2.2 | ✓ | module |
| **[cidrdb reload](https://support.messagesystems.com/docs/web/modules.cidrdb.php#modules.cidrdb.console)** – Reload a cidrdb list | 2.2 | ✓ | module |
| **[cloudmark version](https://support.messagesystems.com/docs/web/modules.cloudmark.php#modules.cloudmark.console)** – utput version information for the Cloudmark engine | 2.2 | ✓ | module |
| **[cluster abort](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)** – Abort the specified job | 2.2 | ✓ | module |
| **[cluster arp show](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)** – Resolve the MAC addresses of the cluster | 2.2 | ✓ | module |
| **[cluster duravip announce view](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)** – Announce a view update using the current local view | 2.2 | ✓ | module |
| **[cluster duravip debug](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)** – Turn DuraVIP™ debugging on or off | 2.2 | ✓ | module |
| **[cluster duravip move](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)** – Move a binding from one node to another | 2.2 | ✓ | module |
| **[cluster duravip show tables](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)** – Display the DuraVIP™ state tables in XML format | 2.2 | ✓ | module |
| **[cluster duravip show](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)** – Show the current state of DuraVIP™ bindings | 2.2 | ✓ | module |
| **[cluster help](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)** – Display the cluster console commands | 2.2 | ✓ | module |
| **[cluster info](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)** – Display the current operating status and parameters | 2.2 | ✓ | module |
| **[cluster membership](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)**                                                                                                          – Display the current cluster nodes | 2.2 | ✓ | module |
| **[cluster nodename](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)** – Show the name of the local node | 2.2 | ✓ | module |
| **[cluster reset](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)** – Reset the node cluster membership | 2.2 | ✓ | module |
| **[cluster shared list](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)** – This command displays the currently managed objects | 2.2 | ✓ | module |
| **[cluster shared show](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)** – Display shared objects | 2.2 | ✓ | module |
| **[cluster show logs](https://support.messagesystems.com/docs/web/cluster.replication.php#cluster.logging.console)** – Show the size, name and location of the cluster logs | 2.2 | ✓ | module |
| **[commtouch_ctasd pending](https://support.messagesystems.com/docs/web/modules.commtouch.php#modules.commtouch.console)** – Output the number of pending jobs | 2.2 | ✓ | module |
| **[compress_spool set read_only](https://support.messagesystems.com/docs/web/modules.compress_spool.php#modules.compress_spool.console)** – Set compression off or on | 2.2 | ✓ | module |
| **[compress_spool set](https://support.messagesystems.com/docs/web/modules.compress_spool.php#modules.compress_spool.console)** – Set the minimum size of the spool | 2.2 | ✓ | module |
| **[config eval](https://support.messagesystems.com/docs/web/console_commands.config.php)** – Determine configuration value | 2.2 |   | config |
| **[config get](https://support.messagesystems.com/docs/web/console_commands.config.php)** – Get configuration setting | 2.2 |   | config |
| **[config set](https://support.messagesystems.com/docs/web/console_commands.config.php)** – Set configuration option | 2.2 |   | config |
| **[config unset](https://support.messagesystems.com/docs/web/console_commands.config.php)** – Unset configuration option | 2.2 |   | config |
| **[count](https://support.messagesystems.com/docs/web/console_commands.count.php)** – Count open connections | 2.2 |   | connections |
| **[custom_logger custom_logger concurrency](https://support.messagesystems.com/docs/web/modules.custom_logger.php#custom_logger.console)** – Configure the number of threads to use | 2.2 | ✓ | module |
| **[custom_logger help](https://support.messagesystems.com/docs/web/modules.custom_logger.php#modules.custom_logger.console)** – Display the available console commands | 2.2 | ✓ | module |
| **[custom_logger log_deliveries](https://support.messagesystems.com/docs/web/modules.custom_logger.php#custom_logger.console)** – Enable or disable logging of deliveries | 2.2 | ✓ | module |
| **[custom_logger log_errors](https://support.messagesystems.com/docs/web/modules.custom_logger.php#custom_logger.console)** – Enable or disable logging of errors | 2.2 | ✓ | module |
| **[custom_logger log_permanent_failures](https://support.messagesystems.com/docs/web/modules.custom_logger.php#custom_logger.console)** – Enable or disable logging of permanent failures | 2.2 | ✓ | module |
| **[custom_logger log_receptions](https://support.messagesystems.com/docs/web/modules.custom_logger.php#custom_logger.console)** – Enable or disable logging of receptions | 2.2 | ✓ | module |
| **[custom_logger log_transient_failures](https://support.messagesystems.com/docs/web/modules.custom_logger.php#custom_logger.console)** – Enable or disable logging of transient failures | 2.2 | ✓ | module |
| **[debug smtp](https://support.messagesystems.com/docs/web/console_commands.debug_smtp.php)** – SMTP transaction debugging | 2.2 |   | misc |
| **[debug](https://support.messagesystems.com/docs/web/console_commands.debug.php)** – Retrieve and optionally set debug flags | 2.2 |   | misc |
| **[delay_dsn show pending events](https://support.messagesystems.com/docs/web/modules.delay_dsn.php#modules.delay_dsn.console)** – List all pending events | 2.2 | ✓ | module |
| **[delayed](https://support.messagesystems.com/docs/web/console_commands.delayed.php)** – Show domains with delayed queue size bigger than threshold | 2.2 |   | queue admin |
| **[dig](https://support.messagesystems.com/docs/web/console_commands.dig.php)** – Submit a domain for dns MX query | 2.2 |   | dns |
| **[dkim flush keycache](https://support.messagesystems.com/docs/web/modules.dkim.php#modules.dkim.console)** – Flush all entries from the keycache | 2.2 | ✓ | module |
| **[dns cache lookup](https://support.messagesystems.com/docs/web/console_commands.dns_cache.php)** – Manage Momentum's DNS cache | 2.2 |   | dns |
| **[dns cache refcnts](https://support.messagesystems.com/docs/web/console_commands.dns_cache.php)** – Manage Momentum's DNS cache | 2.2 |   | dns |
| **[dns cache stats](https://support.messagesystems.com/docs/web/console_commands.dns_cache.php)** – Manage Momentum's DNS cache | 2.2 |   | stats |
| **[dns cache submit](https://support.messagesystems.com/docs/web/console_commands.dns_cache.php)** – Manage Momentum's DNS cache | 2.2 |   | dns |
| **[domain](https://support.messagesystems.com/docs/web/console_commands.domain.php)** – Show domain statistics | 2.2 |   | stats |
| **[dk_sign flush keycache](https://support.messagesystems.com/docs/web/modules.domainkeys.php#modules.domainkeys.console)** – Flush all entries from the keycache | 2.2 | ✓ | module |
| **[dk_sign stats](https://support.messagesystems.com/docs/web/modules.domainkeys.php#modules.domainkeys.console)** – Display statistics relating to domain key signing | 2.2 | ✓ | module |
| **[ds_core flush cache_name](https://support.messagesystems.com/docs/web/modules.ds_core.php#modules.ds_core.console)** – Flush a specific cache | 2.2 | ✓ | module |
| **[ds_core flush](https://support.messagesystems.com/docs/web/modules.ds_core.php#modules.ds_core.console)** – Flush entries from the specified cache | 2.2 | ✓ | module |
| **[ds_core stats](https://support.messagesystems.com/docs/web/modules.ds_core.php#modules.ds_core.console)** – Show statistics related to the datasource caches | 2.2 | ✓ | module |
| **[ds_core stats](https://support.messagesystems.com/docs/web/modules.ds_core.php#modules.ds_core.console)** – Print stats for each cache | 2.2 | ✓ | module |
| **[ds_ldap flush connection cache](https://support.messagesystems.com/docs/web/modules.ds_core.php#modules.ds_ldap.console)** – Remove all entries from the connection cache | 2.2 | ✓ | module |
| **[ds_ldap show connection cache stats](https://support.messagesystems.com/docs/web/modules.ds_core.php#modules.ds_ldap.console)** – Output statistics relating to the connection cache | 2.2 | ✓ | module |
| **[ec_logger help](https://support.messagesystems.com/docs/web/modules.ec_logger.php#modules.ec_logger.console)** – Display the available console commands | 2.2 | ✓ | module |
| **[ec_logger reopen logs](https://support.messagesystems.com/docs/web/modules.ec_logger.php#modules.ec_logger.console)** – >Close and reopen the log files | 2.2 | ✓ | module |
| **[ec_logger set log_deliveries](https://support.messagesystems.com/docs/web/modules.ec_logger.php#modules.ec_logger.console)** – Enable or disable logging of deliveries | 2.2 | ✓ | module |
| **[ec_logger set log_errors](https://support.messagesystems.com/docs/web/modules.ec_logger.php#modules.ec_logger.console)** – >Enable or disable logging of errors | 2.2 | ✓ | module |
| **[ec_logger set log_permanent_failures](https://support.messagesystems.com/docs/web/modules.ec_logger.php#modules.ec_logger.console)** – Enable or disable logging of permanent failures | 2.2 | ✓ | module |
| **[ec_logger set log_receptions](https://support.messagesystems.com/docs/web/modules.ec_logger.php#modules.ec_logger.console)** – Enable or disable logging of receptions | 2.2 | ✓ | module |
| **[ec_logger set log_transient_failures](https://support.messagesystems.com/docs/web/modules.ec_logger.php#modules.ec_logger.console)** – Enable or disable logging of transient failures | 2.2 | ✓ | module |
| **[ec_logger xml description](https://support.messagesystems.com/docs/web/modules.ec_logger.php#modules.ec_logger.console)** – >Output a description of the console commands in XML format | 2.2 | ✓ | module |
| **[fail domain quiet](https://support.messagesystems.com/docs/web/console_commands.fail_domain_quiet.php)** – Fail messages for a domain without generating bounces | 2.2 |   | misc |
| **[fail domain](https://support.messagesystems.com/docs/web/console_commands.fail_domain.php)** – Fail messages for a domain with a bounce message | 2.2 |   | misc |
| **[fingerprint cache summary](https://support.messagesystems.com/docs/web/console_commands.fingerprint_cache_summary.php)** – Display the current cache size | 2.2.3.46 |   | policy |
| **[fingerprint rejection summary](https://support.messagesystems.com/docs/web/console_commands.fingerprint_rejection_summary.php)** – Display details related to the current inbound connection | 2.2.3.46 |   | policy |
| **[flush domain](https://support.messagesystems.com/docs/web/console_commands.flush_domain.php)** – Perform delivery attempt on delayed queue of a domain | 2.2 |   | queue admin |
| **[help](https://support.messagesystems.com/docs/web/console_commands.help.php)** – Show help information for console commands | 2.2 |   | misc |
| **[inbound_audit add](https://support.messagesystems.com/docs/web/modules.inbound_audit.php#modules.inbound_audit.console)** – Add a value to a CIDR in a named series | 2.2 | ✓ | module |
| **[inbound_audit count_cidr](https://support.messagesystems.com/docs/web/modules.inbound_audit.php#modules.inbound_audit.console)** – Count a CIDR in a named series | 2.2 | ✓ | module |
| **[inbound_audit delete_ip](https://support.messagesystems.com/docs/web/modules.inbound_audit.php#modules.inbound_audit.console)** – Delete an IP from a defined named series | 2.2 | ✓ | module |
| **[inbound_audit help](https://support.messagesystems.com/docs/web/modules.inbound_audit.php#modules.inbound_audit.console)** – Show available commands | 2.2 | ✓ | module |
| **[inbound_audit load](https://support.messagesystems.com/docs/web/modules.inbound_audit.php#modules.inbound_audit.console)** – Load a series from a file | 2.2 | ✓ | module |
| **[inbound_audit show all](https://support.messagesystems.com/docs/web/modules.inbound_audit.php#modules.inbound_audit.console)** – Display verbose statistics for all domains as a CSV list | 2.2 | ✓ | module |
| **[inbound_audit show ip](https://support.messagesystems.com/docs/web/modules.inbound_audit.php#modules.inbound_audit.console)** – Display verbose statistics for the specified ip | 2.2 | ✓ | module |
| **[inbound_audit subtract](https://support.messagesystems.com/docs/web/modules.inbound_audit.php#modules.inbound_audit.console)** – Subtract a value from a CIDR in a named series | 2.2 | ✓ | module |
| **[memory](https://support.messagesystems.com/docs/web/console_commands.memory.php)** – Report detailed memory usage | 2.2 |   | stats |
| **[message details](https://support.messagesystems.com/docs/web/console_commands.message_details.php)** – Show detailed message information | 2.2 |   | message |
| **[message fail quiet](https://support.messagesystems.com/docs/web/console_commands.message_fail_quiet.php)** – Fail a message and do not create a non-delivery receipt (NDR) | 2.2 |   | message |
| **[message fail](https://support.messagesystems.com/docs/web/console_commands.message_fail.php)** – Fail a message | 2.2 |   | message |
| **[message retry](https://support.messagesystems.com/docs/web/console_commands.message_retry.php)** – Perform an immediate delivery attempt on a message | 2.2 |   | message |
| **[module hooks](https://support.messagesystems.com/docs/web/console_commands.module.php)** – Manage loaded module hooks | 2.2 |   | module |
| **[module list](https://support.messagesystems.com/docs/web/console_commands.module.php)** – Show loaded modules | 2.2 |   | module |
| **[outbound_audit clear all](https://support.messagesystems.com/docs/web/modules.outbound_audit.php#modules.outbound_audit.console)** – Zero-out all statistics | 2.2 | ✓ | module |
| **[outbound_audit clear domain](https://support.messagesystems.com/docs/web/modules.outbound_audit.php#modules.outbound_audit.console)** – Zero-out a domain's statistics | 2.2 | ✓ | module |
| **[outbound_audit domain_list](https://support.messagesystems.com/docs/web/modules.outbound_audit.php#modules.outbound_audit.console)** – Runtime addition/deletion of a domain in the monitoring list | 2.2 | ✓ | module |
| **[outbound_audit monitor domains](https://support.messagesystems.com/docs/web/modules.outbound_audit.php#modules.outbound_audit.console)** – Runtime enablement/disablement of tracking | 2.2 | ✓ | module |
| **[outbound_audit show all](https://support.messagesystems.com/docs/web/modules.outbound_audit.php#modules.outbound_audit.console)** – Dump all collected time-series data for all collected domains | 2.2 | ✓ | module |
| **[outbound_audit show domain](https://support.messagesystems.com/docs/web/modules.outbound_audit.php#modules.outbound_audit.console)** – Dump all collected time-series data for the specified domain | 2.2 | ✓ | module |
| **[outbound_audit show domains](https://support.messagesystems.com/docs/web/modules.outbound_audit.php#modules.outbound_audit.console)** – List the names of all domains which have collected data | 2.2 | ✓ | module |
| **[outbound_audit show global](https://support.messagesystems.com/docs/web/modules.outbound_audit.php#modules.outbound_audit.console)** – Show the global (aggregated) time-series data | 2.2 | ✓ | module |
| **[outbound_audit threshold](https://support.messagesystems.com/docs/web/modules.outbound_audit.php#modules.outbound_audit.console)** – Set a minimum number of receptions before cataloging will commence | 2.2 | ✓ | module |
| **[paniclog](https://support.messagesystems.com/docs/web/console_commands.paniclog.php)** – Show last several entries written to paniclog | 2.2 |   | logs |
| **[pid](https://support.messagesystems.com/docs/web/console_commands.pid.php)** – Show process id of Momentum | 2.2 |   | misc |
| **[rebind](https://support.messagesystems.com/docs/web/console_commands.rebind.php)** – Rebind the messages in a binding or domain | 2.2 |   | queue admin |
| **[refresh domain](https://support.messagesystems.com/docs/web/console_commands.refresh_domain.php)** – Refresh the DNS information for a domain | 2.2 |   | dns |
| **[rejection counts](https://support.messagesystems.com/docs/web/console_commands.rejection_counts.php)** – Show counts of rejected messages by module and phase | 2.2 |   | misc |
| **[reopen logs](https://support.messagesystems.com/docs/web/console_commands.reopen_logs.php)** – Close and open log files | 2.2 |   | logs |
| **[reroute queue](https://support.messagesystems.com/docs/web/console_commands.reroute_queue.php)** – Move messages from queues of one domain to queues of the other | 2.2 |   | queue admin |
| **[sched at](https://support.messagesystems.com/docs/web/modules.sched.php#modules.sched.console)** – Create a recurrent command that repeats at the specified interval | 2.2 | ✓ | module |
| **[sched delete](https://support.messagesystems.com/docs/web/modules.sched.php#modules.sched.console)** – Delete a scheduled job | 2.2 | ✓ | module |
| **[sched every](https://support.messagesystems.com/docs/web/modules.sched.php#modules.sched.console)** – Create a recurrent command that repeats at the specified interval | 2.2 | ✓ | module |
| **[sched in](https://support.messagesystems.com/docs/web/modules.sched.php#modules.sched.console)** – Run a command at the specified number of seconds from the current time | 2.2 | ✓ | module |
| **[sched list](https://support.messagesystems.com/docs/web/modules.sched.php#modules.sched.console)** – List any scheduled tasks | 2.2 | ✓ | module |
| **[show inbound](https://support.messagesystems.com/docs/web/console_commands.show_inbound.php)** – Show all inbound connections | 2.2 |   | connections |
| **[show outbound](https://support.messagesystems.com/docs/web/console_commands.show_outbound.php)** – Show all outbound connections | 2.2 |   | connections |
| **[showqueue](https://support.messagesystems.com/docs/web/console_commands.showqueue.php)** – Show queue information | 2.2 |   | queue admin |
| **[shutdown](https://support.messagesystems.com/docs/web/console_commands.shutdown.php)** – Shutdown Momentum | 2.2 |   | misc |
| **[sieve flush cache](https://support.messagesystems.com/docs/web/modules.sieve.php#modules.sieve.console)** – Remove all Sieve scripts from the cache | 2.2 | ✓ | module |
| **[sieve reset](https://support.messagesystems.com/docs/web/modules.sieve.php#modules.sieve.console)** – Reset the counters displayed by the stats command | 2.2 | ✓ | module |
| **[sieve set cache_life](https://support.messagesystems.com/docs/web/modules.sieve.php#modules.sieve.console)** – Set the cache life | 2.2 | ✓ | module |
| **[sieve set cache_size](https://support.messagesystems.com/docs/web/modules.sieve.php#modules.sieve.console)** – Set the cache size | 2.2 | ✓ | module |
| **[sieve set](https://support.messagesystems.com/docs/web/modules.sieve.php#modules.sieve.console)** – Replace any script that is currently configured to run in the specified phase | 2.2 | ✓ | module |
| **[sieve stats](https://support.messagesystems.com/docs/web/modules.sieve.php#modules.sieve.console)** – Displays current Sieve statistics | 2.2 | ✓ | module |
| **[sieve test](https://support.messagesystems.com/docs/web/modules.sieve.php#modules.sieve.console)** – Check that the script content will compile and run | 2.2 | ✓ | module |
| **[sieve testfile](https://support.messagesystems.com/docs/web/modules.sieve.php#modules.sieve.console)** – Verify that the script in the specified file will compile and run in the phase specified | 2.2 | ✓ | module |
| **[sieve unset](https://support.messagesystems.com/docs/web/modules.sieve.php#modules.sieve.console)** – Unset the specified phase disabling any scripts set to run in that phase | 2.2 | ✓ | module |
| **[sievelib gauge_cache add](https://support.messagesystems.com/docs/web/modules.sievelib.php#modules.sievelib.console)** – Add a number to the key in the specified cache | 2.2 | ✓ | module |
| **[sievelib gauge_cache delete](https://support.messagesystems.com/docs/web/modules.sievelib.php#modules.sievelib.console)** – Delete the key in the specified cache | 2.2 | ✓ | module |
| **[sievelib gauge_cache show](https://support.messagesystems.com/docs/web/modules.sievelib.php#modules.sievelib.console)** – Show the key in the specified cache | 2.2 | ✓ | module |
| **[sievelib gauge_cache sub](https://support.messagesystems.com/docs/web/modules.sievelib.php#modules.sievelib.console)** – Subtract a number from the key in the specified cache | 2.2 | ✓ | module |
| **[signing stats reset](https://support.messagesystems.com/docs/web/console_commands.signing_stats_reset.php)** – Reset signing stats | 2.2 |   | stats |
| **[signing stats](https://support.messagesystems.com/docs/web/console_commands.signing_stats.php)** – Show DK/DKIM signing stats | 2.2 |   | stats |
| **[sp_async](https://support.messagesystems.com/docs/web/console_commands.sp_async.php)** – Access the asynchronous I/O subsystem | 2.2 |   | misc |
| **[spool import poll](https://support.messagesystems.com/docs/web/console_commands.spool_import_poll.php)** – Check the status of a spool that is being imported | 2.2 |   | misc |
| **[spool import](https://support.messagesystems.com/docs/web/console_commands.spool_import.php)** – Import an alternative spool | 2.2 |   | resource |
| **[spool in](https://support.messagesystems.com/docs/web/console_commands.spool_in.php)** – Read a message from the spool to the mail queue | 2.2 |   | message |
| **[summary reset](https://support.messagesystems.com/docs/web/console_commands.summary_reset.php)** – Reset summary statistics | 2.2 |   | stats |
| **[summary](https://support.messagesystems.com/docs/web/console_commands.summary.php)** – Show global metrics | 2.2 |   | stats |
| **[sysinfo](https://support.messagesystems.com/docs/web/console_commands.sysinfo.php)** – Show system information | 2.2 |   | misc |
| **[threads cpu queue](https://support.messagesystems.com/docs/web/console_commands.threads.php)** – Display summary statistics for thread pools | 2.2 |   | stats |
| **[threads io queue](https://support.messagesystems.com/docs/web/console_commands.threads.php)** – Display summary statistics for thread pools | 2.2 |   | stats |
| **[threads stats](https://support.messagesystems.com/docs/web/console_commands.threads.php)** – Display summary statistics for thread pools | 2.2 |   | stats |
| **[tls flush cache](https://support.messagesystems.com/docs/web/console_commands.tls.php)** – Manage TLS cache used by Momentum | 2.2 |   | tls |
| **[tls rekey](https://support.messagesystems.com/docs/web/console_commands.tls.php)** – Manage TLS cache used by Momentum | 2.2 |   | tls |
| **[tls show cache](https://support.messagesystems.com/docs/web/console_commands.tls.php)** – Manage TLS cache used by Momentum | 2.2 |   | tls |
| **[trace smtp add](https://support.messagesystems.com/docs/web/console_commands.trace_smtp.php)** – Trace smtp transactions | 2.2 |   | misc |
| **[trace smtp list](https://support.messagesystems.com/docs/web/console_commands.trace_smtp.php)** – Trace smtp transactions | 2.2 |   | misc |
| **[trace smtp remove](https://support.messagesystems.com/docs/web/console_commands.trace_smtp.php)** – Trace smtp transactions | 2.2 |   | misc |
| **[unlink stats](https://support.messagesystems.com/docs/web/console_commands.unlink_stats.php)** – Show statistics of removing messages from the disk | 2.2 |   | stats |
| **[version](https://support.messagesystems.com/docs/web/console_commands.version.php)** – Show version information of Momentum | 2.2 |   | misc |
| **[write config](https://support.messagesystems.com/docs/web/console_commands.write_config.php)** – Display current running configuration | 2.2 |   | config |

| [Prev](console_commands.php)  | [Up](console_commands.php) |  [Next](console.commands.non-module.php) |
| Chapter 12. Momentum System Console Commands Reference  | [Table of Contents](index.php) |  12.2. System Console Commands |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)