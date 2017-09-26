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

| Chapter 7. Message Central Configuration Reference |
| [Prev](mc.conf.pe2.conf.php)  |   |  [Next](conf.clicktrack_cache.php) |

## Chapter 7. Message Central Configuration Reference

**Table of Contents**

<dl class="toc">

<dt>[clicktrack_cache](conf.clicktrack_cache.php) — the path to the link cache SQLite database</dt>

<dt>[clicktrack_decouple](conf.clicktrack_decouple.php) — determine how clicktrack records clicks or opens</dt>

<dt>[clicktrack_errors](conf.clicktrack_errors.php) — the filename for logging clicktrack errors</dt>

<dt>[clicktrack_jlog](conf.clicktrack_jlog.php) — the path to clicktrack jlogs</dt>

<dt>[pe2.log.critical_facilities](conf.pe2.log.critical_facilities.php) — set the log level of the specified facility to critical</dt>

<dt>[pe2.dbpool.idle_reap_expire_after](conf.mc.dbpool.idle_reap_expire_after.php) — when to expire an idle database connection</dt>

<dt>[pe2.dbpool.idle_reap_run_every](conf.mc.dbpool.idle_reap_run_every.php) — how often to check for idle database connections</dt>

<dt>[pe2.log.debug_facilities](conf.pe2.log.debug_facilities.php) — set the log level of the specified facility to debug</dt>

<dt>[pe2.debug_to_stderr](conf.mc.debug_to_stderr.php) — whether pe2 executable files will dump output to stderr</dt>

<dt>[pe2.default_timezone](conf.mc.default_timezone.php) — set the default time zone</dt>

<dt>[pe2.log.error_facilities](conf.pe2.log.error_facilities.php) — set the log level of the specified facility to error</dt>

<dt>[pe2.extensions_dir](conf.mc.extensions_dir.php) — where Message Central components look for shared objects</dt>

<dt>[pe2.log.info_facilities](conf.pe2.log.info_facilities.php) — set the log level of the specified facility to info</dt>

<dt>[pe2.log.db_level](conf.mc.log.db_level.php) — set the database log level</dt>

<dt>[pe2.log_level](conf.mc.log_level.php) — set the debug log level</dt>

<dt>[pe2.log.profile_level](conf.mc.log.profile_level.php) — set the profile log level</dt>

<dt>[pe2.log.sched_level](conf.mc.log.sched_level.php) — set the scheduler log level</dt>

<dt>[pe2.log.notice_facilities](conf.pe2.log.notice_facilities.php) — set the log level of the specified facility to</dt>

<dt>[pe2.log.warning_facilities](conf.pe2.log.warning_facilities.php) — set the log level of the specified facility to</dt>

<dt>[pe2g.block_not_finished_sleep](conf.mcg.block_not_finished_sleep.php) — set the delay between checking queue size and continuing a mailing generation</dt>

<dt>[pe2g.db_pool_size](conf.mcg.db_pool_size.php) — number of database handles to cache</dt>

<dt>[pe2g.gimli.beat_every](conf.mcg.pe2.gimli.beat_every.php) — how often to send a heartbeat to the watchdog</dt>

<dt>[pe2g.gimli.enable_heartbeats](conf.mcg.pe2g.gimli.enable_heartbeats.php) — enable watchdog behavior</dt>

<dt>[pe2g.relay_queue_backlog](conf.mcg.relay_queue_backlog.php) — the number of emails that can be waiting in the queue for delivery</dt>

<dt>[pe2g.relay_urls](conf.mcg.relay_urls.php) — the MTAs to start delivery threads for</dt>

<dt>[pe2g.template_class](conf.mcg.pe2g.template_class.php) — specify the templatization module to be used</dt>

<dt>[pe2g.template_driver_name](conf.mcg.template_driver_name.php) — the name of the Perl library</dt>

<dt>[pe2g.templatizer_concurrency](conf.mcg.templatizer_concurrency.php) — the number of templating threads</dt>

<dt>[pe2g.verpdomain](conf.mcg.pe2g.verpdomain.php) — define the domain to send mail from if no segment-level sending domains are configured</dt>

<dt>[pe2g.write_jlogs](conf.mcg.pe2g.write_jlogs.php) — whether or not to write jlogs for the generator</dt>

<dt>[pe2m.call_period](conf.pe2m.call_period.php) — how often the manager should poll the scheduler</dt>

<dt>[pe2m.loop_period](conf.pe2m.loop_period.php) — improve the efficiency of communication between the manager and the scheduler</dt>

<dt>[pe2m.max_generators_per_poll](conf.pe2m.max_generators_per_poll.php) — the maximum number of generators that can be created</dt>

<dt>[pe2m.max_silence](conf.pe2m.max_silence.php) — how long the scheduler should wait for a response from the manager</dt>

<dt>[pe2m.update_period](conf.pe2m.update_period.php) — how often the manager should poll the scheduler regarding the CPU load</dt>

<dt>[pe2prof.outbound_profiler_interval](conf.mcprof.outbound_profiler_interval.php) — Report profiling information after delivering the specified number of emails</dt>

<dt>[pe2prof.templatizer_profiler_interval](conf.mcprof.templatizer_profiler_interval.php) — Report profiling information after rendering the specified number of emails</dt>

<dt>[pe2sched.concurrency](conf.mcsched.concurrency.php) — the number of scheduler worker threads to start</dt>

<dt>[pe2sched.debug_log](conf.mcsched.debug_log.php) — the absolute path to the scheduler activity log</dt>

<dt>[pe2sched.default_dbserverid](conf.mcsched.default_dbserverid.php) — the default value for dbserverid</dt>

<dt>[pe2sched.hostname](conf.mcsched.hostname.php) — the default hostname for the scheduler component</dt>

<dt>[pe2sched.max_generator_limit](conf.pe2sched.max_generator_limit.php) — the maximum number of generators created at any one time</dt>

<dt>[pe2sched.max_generator_per_mailing](conf.pe2sched.max_generator_per_mailing.php) — the maximum number of generators that can be created for a mailing</dt>

<dt>[pe2sched.spawn_interval_by_client](conf.pe2sched.spawn_interval_by_client.php) — how often a generator can be spawned</dt>

<dt>[pe2sched.spawn_interval_by_mailing](conf.pe2sched.spawn_interval_by_mailing.php) — how often the manager will launch a generator to work on a mailing</dt>

<dt>[perl.lib_dir](conf.perl.lib_dir.php) — the location of Perl modules</dt>

<dt>[postgres.connect_string](conf.postgres.connect_string.php) — specify the parameters for connecting to the PostgreSQL database</dt>

<dt>[postgres.reconnect_delay](conf.postgres.reconnect_delay.php) — the number of seconds to sleep before attempting to reconnect to a PostgreSQL database</dt>

<dt>[soap.relay_url](conf.soap.relay_url.php) — the MTA to send test messages to</dt>

<dt>[soap.verpdomain](conf.soap.verpdomain.php) — the domain to be used in VERP generation</dt>

<dt>[webui.cookiekey](conf.webui.cookiekey.php) — a key for encrypting cookies</dt>

</dl>

| [Prev](mc.conf.pe2.conf.php)  |   |  [Next](conf.clicktrack_cache.php) |
| 6.5. The `pe2.conf` File  | [Table of Contents](index.php) |  clicktrack_cache |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)