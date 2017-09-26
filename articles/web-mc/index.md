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

| Message Central 3.x Reference |
|   |   |  [Next](preface.php) |

## Message Central 3.x Reference

### Message Systems, Inc.

Copyright © 2010-2014 Message Systems, Inc.

<a name="idp201136"></a>

Confidential & Proprietary.

**Abstract**

This book documents Message Central version 3.0 and higher.

Document generated on: 2017-Aug-09

* * *

**Table of Contents**

<dl class="toc">

<dt>[Preface](preface.php)</dt>

<dd>

<dl>

<dt>[1\. Typographical Conventions Used in This Document](preface.php#typographical)</dt>

</dl>

</dd>

<dt>[1\. Installing Message Central](mc-installation.php)</dt>

<dd>

<dl>

<dt>[1.1\. System Requirements](mc-installation.php#mc-requirements)</dt>

<dt>[1.2\. Message Central Web UI and REST API Access, Database-centric Mode, Direct Access Mode](mc3-modes.php)</dt>

<dt>[1.3\. Installation Configurations](mc-configurations.php)</dt>

<dt>[1.4\. Installation Overview](mc-installation-overview.php)</dt>

<dt>[1.5\. Upgrading from Message Central version 3.4.1 to version 3.5.1](mc-upgrade-341-to-351.php)</dt>

<dt>[1.6\. Inbound and Outbound MTAs](mc-mtas.php)</dt>

<dt>[1.7\. Services](mc-start-services.php)</dt>

</dl>

</dd>

<dt>[2\. Message Central and PostgreSQL](mc-postgresql.php)</dt>

<dd>

<dl>

<dt>[2.1\. PostgreSQL Version Upgrade](mc-postgresql.php#mc-postgresql.version)</dt>

<dt>[2.2\. The `postgresql.conf` File](mc-postgresql.conf.php)</dt>

<dt>[2.3\. Running the PostgreSQL Server](mc-postgres-server.php)</dt>

<dt>[2.4\. Using the PostgreSQL Client Program](mc-postgres-client.php)</dt>

<dt>[2.5\. Database Maintenance](mc-postgres-maintenance.php)</dt>

<dt>[2.6\. The PostgreSQL Log File](mc-postgres-log-file.php)</dt>

</dl>

</dd>

<dt>[3\. Post-installation Tasks](mc-post-installation.php)</dt>

<dd>

<dl>

<dt>[3.1\. Orgs and Modes](mc-post-installation.php#mc-post-installation-modes)</dt>

<dt>[3.2\. Configuration Options](mc-post-config-options.php)</dt>

<dt>[3.3\. Update the Default Org](mc-post-org.php)</dt>

<dt>[3.4\. Creating Bindings](mc-post-installation-bindings.php)</dt>

<dt>[3.5\. DKIM Signing](mc-post-dkim.php)</dt>

<dt>[3.6\. Adding Roles](mc-creating-roles.php)</dt>

<dt>[3.7\. Creating Users](mc-creating-users.php)</dt>

<dt>[3.8\. Remove Clicktracker Cache](mc-post.click-tracker.cache.php)</dt>

<dt>[3.9\. Using LDAP with Message Central](mc3.ldap.php)</dt>

<dt>[3.10\. Configuring For Intelligent Message Disposition](mc-post-installation.imd.php)</dt>

<dt>[3.11\. Exposing IMD Controls in the Web UI](mc-post-installation.enabling.imd.php)</dt>

<dt>[3.12\. Configuring for SMS](mc-post-installation.sms.php)</dt>

<dt>[3.13\. Installing an Additional Generator](mc-post-installation.second.generator.php)</dt>

</dl>

</dd>

<dt>[4\. Clicktracker](mc-clicktracker-component.php)</dt>

<dd>

<dl>

<dt>[4.1\. Clicktracker Options](mc-clicktracker-component.php#mc-clicktracker-options)</dt>

<dt>[4.2\. Clicktracker Log Rotation](mc-clicktracker-logs.php)</dt>

<dt>[4.3\. Processing clicktracker jlog Files](mc-clicktracker-external-db.php)</dt>

<dt>[4.4\. Debugging the Clicktracker](mc-clicktracker-debug.php)</dt>

</dl>

</dd>

<dt>[5\. Processing the `mc_logger` Log Files](mc-processing-log-files.php)</dt>

<dd>

<dl>

<dt>[5.1\. The `mclog_loader` Script](mc-processing-log-files.php#mc-mc_logger-log-files)</dt>

<dt>[5.2\. The `mclog_loader.conf` File](mc-mcbatch.conf-file.php)</dt>

</dl>

</dd>

<dt>[6\. Configuration Files in Version 3.5 and Higher](mc.conf.3.5.php)</dt>

<dd>

<dl>

<dt>[6.1\. The `mc_sched.conf` File](mc.conf.3.5.php#mc.conf.mc_sched.conf)</dt>

<dt>[6.2\. The `mc_gen.conf` File](mc.conf.mc_gen.conf.php)</dt>

<dt>[6.3\. The `mc_mgr.conf` File](mc.conf.mc_mgr.conf.php)</dt>

<dt>[6.4\. The `mc_auth.conf` File](mc.conf.mc_auth.conf.php)</dt>

<dt>[6.5\. The `pe2.conf` File](mc.conf.pe2.conf.php)</dt>

</dl>

</dd>

<dt>[7\. Message Central Configuration Reference](mc.conf.php)</dt>

<dd>

<dl>

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

</dd>

<dt>[8\. Message Central Commands](executable-commands.php)</dt>

<dd>

<dl>

<dt>[load_contacts_db.pl](load_contacts_db.php) — bulk load contacts into the database</dt>

<dt>[mclog_loader](mclog_loader.php) — process the mc_logger files</dt>

<dt>[pe2-clicktracker](mc-clicktracker.php) — run the clicktracker</dt>

<dt>[pe2batch](mcbatch.php) — process the pe2_logger files</dt>

<dt>[pe2g](mcg.php) — start the generator component</dt>

<dt>[pe2sched](mcsched.php) — start the scheduler</dt>

</dl>

</dd>

<dt>[9\. Files Associated with Message Central](mc-logs-files.php)</dt>

<dd>

<dl>

<dt>[9.1\. Files Used by All Components](mc-logs-files.php#mc-logs-all-components)</dt>

<dt>[9.2\. Message Central `mainlog.ec` Log Entries](mc-logs-mainlog.php)</dt>

<dt>[9.3\. The MC Logger Files](mc-logs-logger-files.php)</dt>

<dt>[9.4\. The `pe2sched` Component File](mc-logs-mcsched.php)</dt>

<dt>[9.5\. PostgreSQL Files](mc-logs-postgres.php)</dt>

<dt>[9.6\. The Web UI Files](mc-logs-web-ui.php)</dt>

<dt>[9.7\. Log Rotation Configuration Files](mc-files-log-rotation.php)</dt>

</dl>

</dd>

<dt>[10\. Template Syntax](mc-template-syntax.php)</dt>

<dd>

<dl>

<dt>[10.1\. Available Objects](mc-template-syntax.php#mc-template-syntax-objects)</dt>

<dt>[10.2\. Macros](mc-template-syntax-macros.php)</dt>

</dl>

</dd>

<dt>[11\. Enhanced Dynamic Content](enhanced.dynamic.content.php)</dt>

<dd>

<dl>

<dt>[11.1\. Personalization in a Dynamic Content Macro](enhanced.dynamic.content.php#enhanced.dynamic.content.fields)</dt>

<dt>[11.2\. Using Lists as Arguments in a Dynamic Content Macro](enhanced.dynamic.content.lists.php)</dt>

<dt>[11.3\. Case-insensitive Comparisons](enhanced.dynamic.content.case.insensitive.php)</dt>

</dl>

</dd>

<dt>[12\. Extending the Base Templating Facilities](extending.message.template.php)</dt>

<dd>

<dl>

<dt>[12.1\. How MessageTemplate Operates](extending.message.template.php#extending.message.template.fundamentals)</dt>

<dt>[12.2\. Extending MessageTemplate](extending.message.template.extending.php)</dt>

<dt>[12.3\. Modifying existing Behavior](extending.message.template.modify.behavior.php)</dt>

<dt>[12.4\. Defined Properties of the MessageTemplate Class](extending.message.template.properties.php)</dt>

<dt>[12.5\. Programmatically Overriding Properties of Tracked Links](extending.message.template.tracked.links.php)</dt>

<dt>[12.6\. Caching Accesses to Expensive Resources](extending.message.template.caching.php)</dt>

<dt>[12.7\. Programmatically Altering Headers](extending.message.template.alter.headers.php)</dt>

</dl>

</dd>

<dt>[13\. Custom Applications](mc3.custom.application.php)</dt>

<dd>

<dl>

<dt>[13.1\. The Hello World App](mc3.custom.application.php#mc3.custom.application.hello-world)</dt>

<dt>[13.2\. Creating Your Own App](mc3.custom.application.create.php)</dt>

</dl>

</dd>

<dt>[A. Point-In-Time Recovery (PITR) for Message Central](mc3-pitr.php)</dt>

<dd>

<dl>

<dt>[A.1\. Replicating the Message Central Database](mc3-pitr.php#mc3-pitr-setup)</dt>

<dt>[A.2\. Failing Over to a Slave Database](mc3-pitr-failing-over.php)</dt>

<dt>[A.3\. Restoring Normal Operations After Database Fail Over](mc3-pitr-restoring.php)</dt>

</dl>

</dd>

<dt>[Glossary](mc-glossary.php)</dt>

<dt>[B. Copyright Notices](copyrights.php)</dt>

<dd>

<dl>

<dt>[B.1\. Acknowledgements](copyrights.php#copyright.ack)</dt>

<dt>[B.2\. Disclaimers for Redistributed Third-Party Software](copyright.3rdparty-disclaimer.php)</dt>

</dl>

</dd>

</dl>

[List of Figures](figure-toc.php)[List of Tables](table-toc.php)[List of Examples](example-toc.php)

|   |   |  [Next](preface.php) |
|   |   |  Preface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)