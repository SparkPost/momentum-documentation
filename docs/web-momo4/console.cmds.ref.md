## Chapter 73. Non-Module-Specific Console Commands

**Table of Contents**

<dl class="toc">

<dt>[active](console_commands.active) — show domains with active queue size bigger than threshold</dt>

<dt>[authz id](console_commands.authz_id) — display the id of the current user</dt>

<dt>[authz roles list](console_commands.authz_roles_list) — display the currently defined roles</dt>

<dt>[binding active](console_commands.binding_active) — show domains with active queue size bigger than threshold on a specified binding</dt>

<dt>[binding delayed](console_commands.binding_delayed) — show domains with delayed queue size bigger than threshold on a specified binding</dt>

<dt>[binding fail domain](console_commands.binding_fail_domain) — fail messages for a domain on a binding with a bounce message</dt>

<dt>[binding fail domain quiet](console_commands.binding_fail_domain_quiet) — fail messages for a domain on a binding without generating bounces</dt>

<dt>[binding flush domain](console_commands.binding_flush_domain) — perform delivery attempt on delayed queue of a domain on a binding</dt>

<dt>[binding summary](console_commands.binding_summary) — show binding statistics</dt>

<dt>[cache list](console_commands.cache_list) — list all caches along with their associated attributes</dt>

<dt>[cache stat](console_commands.cache_stat) — show detailed cache statistics for the specified cache</dt>

<dt>[cache stats](console_commands.cache_stats) — show cache statistics</dt>

<dt>[config](console_commands.config) — online configuration tuning for Momentum</dt>

<dt>[count](console_commands.count) — count open connections</dt>

<dt>[counter](console_commands.counter) — manage counters</dt>

<dt>[delayed](console_commands.delayed) — show domains with delayed queue size bigger than threshold</dt>

<dt>[dig](console_commands.dig) — submit a domain for DNS MX query</dt>

<dt>[dns_cache](console_commands.dns_cache) — manage Momentum's DNS cache</dt>

<dt>[domain](console_commands.domain) — show domain statistics</dt>

<dt>[domain all](console_commands.domain_all) — show statistics for all domains</dt>

<dt>[fail domain](console_commands.fail_domain) — fail messages for a domain with a bounce message</dt>

<dt>[fail domain quiet](console_commands.fail_domain_quiet) — fail messages for a domain without generating bounces</dt>

<dt>[fingerprint cache summary](console_commands.fingerprint_cache_summary) — display the current cache size</dt>

<dt>[fingerprint rejection summary](console_commands.fingerprint_rejection_summary) — display details related to the current inbound connection</dt>

<dt>[flush domain](console_commands.flush_domain) — perform delivery attempt on delayed queue of a domain</dt>

<dt>[help](console_commands.help) — show help information for console commands</dt>

<dt>[mailq](console_commands.mailq) — show the status of the mail queues</dt>

<dt>[memory](console_commands.memory) — report detailed memory usage</dt>

<dt>[message details](console_commands.message_details) — show detailed message information</dt>

<dt>[message fail](console_commands.message_fail) — fail a message</dt>

<dt>[message fail quiet](console_commands.message_fail_quiet) — fail a message and do not create a non-delivery receipt (NDR)</dt>

<dt>[message retry](console_commands.message_retry) — perform an immediate delivery attempt on a message</dt>

<dt>[module](console_commands.module) — manage loaded modules online</dt>

<dt>[\pager](console_commands.pager) — Page output of long console commands in the console.</dt>

<dt>[paniclog](console_commands.paniclog) — show last several entries written to paniclog</dt>

<dt>[pid](console_commands.pid) — show process id of Momentum</dt>

<dt>[rebind](console_commands.rebind) — rebind the messages in a binding or domain</dt>

<dt>[refresh domain](console_commands.refresh_domain) — refresh the DNS information for a domain</dt>

<dt>[reopen logs](console_commands.reopen_logs) — close and open log files</dt>

<dt>[reroute queue](console_commands.reroute_queue) — move messages from queues of one domain to queues of the other</dt>

<dt>[show inbound](console_commands.show_inbound) — show all inbound connections</dt>

<dt>[show outbound](console_commands.show_outbound) — show all outbound connections</dt>

<dt>[showqueue](console_commands.showqueue) — show queue information</dt>

<dt>[shutdown](console_commands.shutdown) — shutdown Momentum</dt>

<dt>[signing_stats](console_commands.signing_stats) — show DK/DKIM signing stats</dt>

<dt>[signing_stats reset](console_commands.signing_stats_reset) — reset signing stats</dt>

<dt>[sp_async](console_commands.sp_async) — Access the asynchronous I/O subsystem</dt>

<dt>[spool import](console_commands.spool_import) — import an alternative spool</dt>

<dt>[spool import_poll](console_commands.spool_import_poll) — check the status of a spool that is being imported</dt>

<dt>[spool_in](console_commands.spool_in) — read a message from the spool to the mail queue</dt>

<dt>[summary](console_commands.summary) — show global metrics</dt>

<dt>[summary reset](console_commands.summary_reset) — reset summary statistics</dt>

<dt>[sysinfo](console_commands.sysinfo) — show system information</dt>

<dt>[threads](console_commands.threads) — Display summary statistics for thread pools</dt>

<dt>[tls](console_commands.tls) — manage TLS cache used by Momentum</dt>

<dt>[trace smtp](console_commands.trace_smtp) — trace smtp transactions</dt>

<dt>[unlink stats](console_commands.unlink_stats) — show statistics of removing messages from the disk</dt>

<dt>[version](console_commands.version) — show version information of Momentum</dt>

<dt>[write config](console_commands.write_config) — display current running configuration</dt>

</dl>

This section documents all the non-module-specific console commands. Module-specific console commands are documented with their module. See [Chapter 71, *Modules Reference*](modules "Chapter 71. Modules Reference") .

Preceding a command with `xml` will output the results in XML format.
