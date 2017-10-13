| Chapter 73. Non-Module-Specific Console Commands |
| [Prev](conf.ref.xclient.php)  | Part X. Reference |  [Next](console_commands.active.php) |

## Chapter 73. Non-Module-Specific Console Commands

**Table of Contents**

<dl class="toc">

<dt>[active](console_commands.active.php) — show domains with active queue size bigger than threshold</dt>

<dt>[authz id](console_commands.authz_id.php) — display the id of the current user</dt>

<dt>[authz roles list](console_commands.authz_roles_list.php) — display the currently defined roles</dt>

<dt>[binding active](console_commands.binding_active.php) — show domains with active queue size bigger than threshold on a specified binding</dt>

<dt>[binding delayed](console_commands.binding_delayed.php) — show domains with delayed queue size bigger than threshold on a specified binding</dt>

<dt>[binding fail domain](console_commands.binding_fail_domain.php) — fail messages for a domain on a binding with a bounce message</dt>

<dt>[binding fail domain quiet](console_commands.binding_fail_domain_quiet.php) — fail messages for a domain on a binding without generating bounces</dt>

<dt>[binding flush domain](console_commands.binding_flush_domain.php) — perform delivery attempt on delayed queue of a domain on a binding</dt>

<dt>[binding summary](console_commands.binding_summary.php) — show binding statistics</dt>

<dt>[cache list](console_commands.cache_list.php) — list all caches along with their associated attributes</dt>

<dt>[cache stat](console_commands.cache_stat.php) — show detailed cache statistics for the specified cache</dt>

<dt>[cache stats](console_commands.cache_stats.php) — show cache statistics</dt>

<dt>[config](console_commands.config.php) — online configuration tuning for Momentum</dt>

<dt>[count](console_commands.count.php) — count open connections</dt>

<dt>[counter](console_commands.counter.php) — manage counters</dt>

<dt>[delayed](console_commands.delayed.php) — show domains with delayed queue size bigger than threshold</dt>

<dt>[dig](console_commands.dig.php) — submit a domain for DNS MX query</dt>

<dt>[dns_cache](console_commands.dns_cache.php) — manage Momentum's DNS cache</dt>

<dt>[domain](console_commands.domain.php) — show domain statistics</dt>

<dt>[domain all](console_commands.domain_all.php) — show statistics for all domains</dt>

<dt>[fail domain](console_commands.fail_domain.php) — fail messages for a domain with a bounce message</dt>

<dt>[fail domain quiet](console_commands.fail_domain_quiet.php) — fail messages for a domain without generating bounces</dt>

<dt>[fingerprint cache summary](console_commands.fingerprint_cache_summary.php) — display the current cache size</dt>

<dt>[fingerprint rejection summary](console_commands.fingerprint_rejection_summary.php) — display details related to the current inbound connection</dt>

<dt>[flush domain](console_commands.flush_domain.php) — perform delivery attempt on delayed queue of a domain</dt>

<dt>[help](console_commands.help.php) — show help information for console commands</dt>

<dt>[mailq](console_commands.mailq.php) — show the status of the mail queues</dt>

<dt>[memory](console_commands.memory.php) — report detailed memory usage</dt>

<dt>[message details](console_commands.message_details.php) — show detailed message information</dt>

<dt>[message fail](console_commands.message_fail.php) — fail a message</dt>

<dt>[message fail quiet](console_commands.message_fail_quiet.php) — fail a message and do not create a non-delivery receipt (NDR)</dt>

<dt>[message retry](console_commands.message_retry.php) — perform an immediate delivery attempt on a message</dt>

<dt>[module](console_commands.module.php) — manage loaded modules online</dt>

<dt>[\pager](console_commands.pager.php) — Page output of long console commands in the console.</dt>

<dt>[paniclog](console_commands.paniclog.php) — show last several entries written to paniclog</dt>

<dt>[pid](console_commands.pid.php) — show process id of Momentum</dt>

<dt>[rebind](console_commands.rebind.php) — rebind the messages in a binding or domain</dt>

<dt>[refresh domain](console_commands.refresh_domain.php) — refresh the DNS information for a domain</dt>

<dt>[reopen logs](console_commands.reopen_logs.php) — close and open log files</dt>

<dt>[reroute queue](console_commands.reroute_queue.php) — move messages from queues of one domain to queues of the other</dt>

<dt>[show inbound](console_commands.show_inbound.php) — show all inbound connections</dt>

<dt>[show outbound](console_commands.show_outbound.php) — show all outbound connections</dt>

<dt>[showqueue](console_commands.showqueue.php) — show queue information</dt>

<dt>[shutdown](console_commands.shutdown.php) — shutdown Momentum</dt>

<dt>[signing_stats](console_commands.signing_stats.php) — show DK/DKIM signing stats</dt>

<dt>[signing_stats reset](console_commands.signing_stats_reset.php) — reset signing stats</dt>

<dt>[sp_async](console_commands.sp_async.php) — Access the asynchronous I/O subsystem</dt>

<dt>[spool import](console_commands.spool_import.php) — import an alternative spool</dt>

<dt>[spool import_poll](console_commands.spool_import_poll.php) — check the status of a spool that is being imported</dt>

<dt>[spool_in](console_commands.spool_in.php) — read a message from the spool to the mail queue</dt>

<dt>[summary](console_commands.summary.php) — show global metrics</dt>

<dt>[summary reset](console_commands.summary_reset.php) — reset summary statistics</dt>

<dt>[sysinfo](console_commands.sysinfo.php) — show system information</dt>

<dt>[threads](console_commands.threads.php) — Display summary statistics for thread pools</dt>

<dt>[tls](console_commands.tls.php) — manage TLS cache used by Momentum</dt>

<dt>[trace smtp](console_commands.trace_smtp.php) — trace smtp transactions</dt>

<dt>[unlink stats](console_commands.unlink_stats.php) — show statistics of removing messages from the disk</dt>

<dt>[version](console_commands.version.php) — show version information of Momentum</dt>

<dt>[write config](console_commands.write_config.php) — display current running configuration</dt>

</dl>

This section documents all the non-module-specific console commands. Module-specific console commands are documented with their module. See [Chapter 71, *Modules Reference*](modules.php "Chapter 71. Modules Reference") .

Preceding a command with `xml` will output the results in XML format.

| [Prev](conf.ref.xclient.php)  | [Up](p.reference.php) |  [Next](console_commands.active.php) |
| xclient  | [Table of Contents](index.php) |  active |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)