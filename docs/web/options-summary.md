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

| 9.1. Options Summary |
| [Prev](conf.ref.php)  | Chapter 9. Ecelerity.conf Configuration Reference |  [Next](conf.ref.files.php) |

## 9.1. Options Summary

This section displays all configuration file options visible in the following scopes; global, domain, host, binding, binding_group, security, listener, threadpool and debug_flags. Module-specific options are documented in the module documentation. Options are sorted alphabetically by name. If an option functions as a scope, this is indicated by `(scope)`.

<a name="All-options-table"></a>

**Table 9.1. All options**

| Option/Description | Type | Default | Version | Scopes |
| --- | --- | --- | --- | --- |
| **[_unsafe_spool](https://support.messagesystems.com/docs/web/conf.ref.unsafe_spool.php)** – Allow dangerous spool semantics to be used | na | false | 2.2 | global |
| **[accept_queue_backlog](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – The accept queue backlog | receiving | 0 | 2.2 | eccluster_listener, listen, listener |
| **[address](https://support.messagesystems.com/docs/web/conf.ref.snmp.php)** – Set the SNMP IP address and port | na |   | 2.2 | snmp |
| **[address_metrics_cleanse_interval](https://support.messagesystems.com/docs/web/conf.ref.address_metrics_cleanse_interval.php)** – The interval for refreshing address metrics | sending | 3600 | 2.2 | global |
| **[address_metrics_lifetime](https://support.messagesystems.com/docs/web/conf.ref.address_metrics_lifetime.php)** – The TTL of address metrics | sending | 1800 | 2.2 | global |
| **[alias_schemes](https://support.messagesystems.com/docs/web/conf.ref.alias_schemes.php)** – Enable named alias expansion schemes | both |   | 2.2.0.17 | domain, global, pathway, pathway_group |
| **[allow_ip_literal](https://support.messagesystems.com/docs/web/conf.ref.allow_ip_literal.php)** – Allow IP addresses in email addresses | receiving | true | 2.2 | global, pathway, pathway_group, peer |
| **[allow_null_envelope_sender](https://support.messagesystems.com/docs/web/conf.ref.allow_null_envelope_sender.php)** – Allow the null envelope sender in email addresses | receiving | true | 2.2 | global, listen, listener, pathway, pathway_group, peer |
| **[allow_whitespace_in_envelope](https://support.messagesystems.com/docs/web/conf.ref.allow_whitespace_in_envelope.php)** – Permit trailing white space before the final CRLF | receiving | false | 2.2.3.46 | rfc2822 |
| **[arp_all_hosts](https://support.messagesystems.com/docs/web/cluster.config.duravip.php#cluster.config.arp_all_hosts)** – Whether or not to aggressively send out ARP information to ensure that the network knows about the IP address assignment (cluster-specific) | na | true | 2.2.2.42 | cluster |
| **[async_bounce_rendering](https://support.messagesystems.com/docs/web/conf.ref.async_bounce_rendering.php)** – Which thread pool to use for bounce rendering | sending | true | 2.2 | global |
| **[async_close_concurrency](https://support.messagesystems.com/docs/web/conf.ref.async_close_concurrency.php)** – Number of threads to use for asynchronous descriptor closing | both | 0 | 2.2 | global |
| **[async_spool_in](https://support.messagesystems.com/docs/web/conf.ref.async_spool_in.php)** – Number of threads to use for spooling from disk | both | 1 | 2.2 | global |
| **[async_swap_in](https://support.messagesystems.com/docs/web/conf.ref.async_swap_in.php)** – Number of threads to use for spooling from disk | both | 1 | 2.2 | global |
| **[async_swap_out](https://support.messagesystems.com/docs/web/conf.ref.async_swap_out.php)** – Number of threads to use for spooling to disk | both | 5 | 2.2 | global |
| **[async_unlink_backlog](https://support.messagesystems.com/docs/web/conf.ref.async_unlink_concurrency.php)** – Asynchronous spool unlinking | both | 100 | 2.2 | global |
| **[async_unlink_concurrency](https://support.messagesystems.com/docs/web/conf.ref.async_unlink_concurrency.php)** – Asynchronous spool unlinking | both | 6 | 2.2 | global |
| **[authorization](https://support.messagesystems.com/docs/web/conf.ref.authorization.php)** *(scope)* – Configure users for access to control listeners | na |   | 2.2 | global, listener |
| **[backlog](https://support.messagesystems.com/docs/web/conf.ref.threadpool.php)** – The maximum number of jobs that can be queued up for a pool | na | 0 | 2.2 | threadpool |
| **[banner_hostname](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – Specifies the banner hostname that will be displayed to the remote client upon connecting | receiving |   | 2.2 | listen, listener, pathway, pathway_group, peer |
| **[bind_address](https://support.messagesystems.com/docs/web/conf.ref.bind_address.php)** – Source address for outbound connections | sending |   | 2.2.1.26 | binding, binding_group, global |
| **[binding](https://support.messagesystems.com/docs/web/conf.ref.binding.php)** *(scope)* – Configure binding-specific options | sending |   | 2.2 | binding_group, global |
| **[binding_group](https://support.messagesystems.com/docs/web/conf.ref.binding_group.php)** *(scope)* – Logically group a set of bindings | sending |   | 2.2 | global |
| **[blackhole](https://support.messagesystems.com/docs/web/conf.ref.blackhole.php)** – Blackhole mail | sending | false | 2.2 | binding, binding_group, domain, global |
| **[body_timeout](https://support.messagesystems.com/docs/web/conf.ref.body_timeout.php)** – Network timeout once the DATA phase is complete | sending | 600 | 2.2 | binding, binding_group, domain, global |
| **[bounce_behavior](https://support.messagesystems.com/docs/web/conf.ref.bounce_behavior.php)** – Configure the action taken when a message is classified as a bounce | sending | pass | 2.2 | domain, global |
| **[bounce_domains](https://support.messagesystems.com/docs/web/conf.ref.bounce_domains.php)** – Configure the list of domains eligible for bounce processing | receiving |   | 2.2 | global, pathway, pathway_group |
| **[bounce_pattern](https://support.messagesystems.com/docs/web/conf.ref.bounce_pattern.php)** – Configure the pattern that inbound email addresses must match to be considered bounces | sending |   | 2.2 | domain, global |
| **[bounce_suppress_list](https://support.messagesystems.com/docs/web/conf.ref.bounce_suppress_list.php)** – Configure a list of email addresses that may not be considered original recipients | sending |   | 2.2 | global |
| **[bounces_inline_original](https://support.messagesystems.com/docs/web/conf.ref.bounces_inline_original.php)** – How much of the original message to include in MDNs | sending | headers | 2.2 | binding, binding_group, domain, global |
| **[capabilities](https://support.messagesystems.com/docs/web/conf.ref.capabilities.php)** – Selectively retain root capabilities | na |   | 2.2 | security |
| **[chroot](https://support.messagesystems.com/docs/web/conf.ref.chroot.php)** – chroot to a secure environment | na |   | 2.2 | security |
| **[cluster_group](https://support.messagesystems.com/docs/web/eccluster.conf.php)** – The duravip system coordinates IP ownership responsibilities via the cluster_group extended virtual synchrony group (cluster-specific) | na | ec_cluster | 2.2 | cluster |
| **[cluster_max_outbound_connections](https://support.messagesystems.com/docs/web/conf.ref.cluster_max_outbound_connections.php)** – Set the maximum number of outbound connections for a domain (cluster-specific) | sending | -1 | 2.2 | binding, domain, global, host |
| **[cluster_outbound_throttle_connections](https://support.messagesystems.com/docs/web/conf.ref.cluster_outbound_throttle_connections.php)** – Limit the rate at which connections are established (cluster-specific) | sending |   | 2.2 | binding, binding_group, global |
| **[cluster_outbound_throttle_messages](https://support.messagesystems.com/docs/web/conf.ref.cluster_outbound_throttle_messages.php)** – Limit the rate at which messages are delivered (cluster-specific) | sending |   | 2.2 | binding, binding_group, domain, global |
| **[cluster_scope_max_outbound_connections](https://support.messagesystems.com/docs/web/conf.ref.cluster_scope_max_outbound_connections.php)** – Provide traffic shaping for outbound connections (cluster-specific) | sending |   | 2.2.2.42 | binding, binding_group, domain, global, host |
| **[cluster_server_max_outbound_connections](https://support.messagesystems.com/docs/web/conf.ref.cluster_server_max_outbound_connections.php)** – Set the maximum number of outbound connections (cluster-specific) | sending |   | 2.2 | binding, binding_group, global |
| **[community](https://support.messagesystems.com/docs/web/conf.ref.snmp.php)** – Set the SNMP Community option value to the desired SNMP community the agent is to join | na | public | 2.2 | snmp |
| **[concurrency](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – Define number of available threads | receiving | 0 | 2.2 | eccluster_listener, listen, listener, threadpool |
| **[connect_timeout](https://support.messagesystems.com/docs/web/conf.ref.connect_timeout.php)** – Set the connection timeout | sending | 300 | 2.2 | binding, binding_group, domain, global |
| **[connect_timeout_to_delay](https://support.messagesystems.com/docs/web/conf.ref.connect_timeout_to_delay.php)** – Time interval before moving mail into the delayed queue | sending | 900 | 2.2 | binding, binding_group, domain, global |
| **[connection_allocation_aggressiveness](https://support.messagesystems.com/docs/web/conf.ref.connection_allocation_aggressiveness.php)** – Tune the aggressiveness for establishing new connections to domains | sending | normal | 2.2 | binding, binding_group, domain, global |
| **[context](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – Use to set arbitrary connection context key value pairs | receiving |   | 2.2 | listen, listener, pathway, pathway_group, peer |
| **[control_cache](https://support.messagesystems.com/docs/web/eccluster.conf.php)** – The name of the cache file storing asynchronous responses | na |   | 2.2 | logs |
| **[control_client_timeout](https://support.messagesystems.com/docs/web/conf.ref.control_client_timeout.php)** – Network timeout for Momentum control client connections | na | 60 | 2.2.1.28 | global |
| **[control_group](https://support.messagesystems.com/docs/web/cluster.php)** – The cluster console manager utilizes this group to issue cluster-wide configuration commands (cluster-specific) | na | ec_console | 2.2 | cluster |
| **[control_listener](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** *(scope)* – The listener for incoming control connections | na |   | 2.2 | global |
| **[control_listener_timeout](https://support.messagesystems.com/docs/web/conf.ref.control_listener_timeout.php)** – Timeout after the specified number of seconds | both | 0 | 2.2 | global |
| **[critical](https://support.messagesystems.com/docs/web/conf.ref.debug_flags.php)** – Set the debug level | na | ALL | 2.2 | debug_flags |
| **[crypto_engine](https://support.messagesystems.com/docs/web/conf.ref.crypto_engine.php)** – Enable hardware cryptography acceleration | both |   | 2.2 | global |
| **[crypto_lock_method](https://support.messagesystems.com/docs/web/conf.ref.crypto_lock_method.php)** – Change the locking method used by the TLS layer | both | EC_SSL_DEFAULTLOCK | 2.2 | global |
| **[date_header](https://support.messagesystems.com/docs/web/conf.ref.date_header.php)** – rfc2822 date header conformance | receiving | ifneeded | 2.2 | rfc2822 |
| **[debug](https://support.messagesystems.com/docs/web/conf.ref.debug_flags.php)** – Set the debug level | na |   | 2.2 | debug_flags |
| **[debug_flags](https://support.messagesystems.com/docs/web/conf.ref.debug_flags.php)** *(scope)* – Configure debug verbosity | na |   | 2.2 | global |
| **[default_binding](https://support.messagesystems.com/docs/web/conf.ref.default_binding.php)** – Control the default binding | sending | normal | 2.2 | global |
| **[default_charset](https://support.messagesystems.com/docs/web/conf.ref.default_charset.php)** – Control the character set | both | us-ascii | 2.2 | global, pathway, pathway_group |
| **[delay_dsn_max_retry_interval](https://support.messagesystems.com/docs/web/conf.ref.delay_dsn_max_retry_interval.php)** – Maximum interval for sending DSNs to the sender of a message that has not yet been delivered | sending | 43200 | 2.2.2.29 | binding, binding_group, domain, global |
| **[delay_dsn_retry_interval](https://support.messagesystems.com/docs/web/conf.ref.delay_dsn_retry_interval.php)** – Base interval for sending DSNs to the sender of a message that has not yet been delivered | sending |   | 2.2 | binding, binding_group, domain, global |
| **[delayed_queue_scan_interval](https://support.messagesystems.com/docs/web/conf.ref.delayed_queue_scan_interval.php)** – How often to call the maintainer for a domain | sending | 15 | 2.2 | global |
| **[delivery_method](https://support.messagesystems.com/docs/web/conf.ref.delivery_method.php)** – Set the delivery method | sending | SMTP | 2.2 | binding, binding_group, domain, global |
| **[dir_mode](https://support.messagesystems.com/docs/web/eccluster.conf.php)** – The octal representation of the file permissions | na |   | 2.2 | logs |
| **[disable_nagle_algorithm](https://support.messagesystems.com/docs/web/conf.ref.disable_nagle_algorithm.php)** – Disable nagle algorithm on sockets | both | false | 2.2 | eccluster_listener, global, listen, listener |
| **[disk_queue_drain_rate](https://support.messagesystems.com/docs/web/conf.ref.disk_queue_drain_rate.php)** – Control the rate at which messages are spooled in on start-up | both | 100 | 2.2 | global |
| **[dkim](https://support.messagesystems.com/docs/web/conf.ref.dkim.php)** – Enable or disable signing messages | sending |   | 2.2 | binding, binding_group, domain, global |
| **[dns_cache_purge_interval](https://support.messagesystems.com/docs/web/conf.ref.dns_cache_purge_interval.php)** – How often the DNS response cache is scanned for stale entries | sending | 60 | 2.2 | global |
| **[dns_expire_interval](https://support.messagesystems.com/docs/web/conf.ref.dns_expire_interval.php)** – How often to check for domains with expired DNS information | sending | 10 | 2.2 | global |
| **[dns_failures_to_purge](https://support.messagesystems.com/docs/web/conf.ref.dns_failures_to_purge.php)** – Configure the maximum number of DNS lookups | sending | 10 | 2.2.2.35 | domain, global |
| **[domain](https://support.messagesystems.com/docs/web/conf.ref.domain.php)** *(scope)* – Configure domain-specific options | sending |   | 2.2 | binding, binding_group, global |
| **[domain_for_unqualified_recipient_addresses](https://support.messagesystems.com/docs/web/conf.ref.domain_for_unqualified_recipient_addresses.php)** – Configure a domain which will be used to resolve delivery for unqualified addresses | receiving |   | 2.2.1.26 | global, listen, listener, pathway, pathway_group, peer |
| **[domain_for_unqualified_sender_address](https://support.messagesystems.com/docs/web/conf.ref.domain_for_unqualified_sender_address.php)** – Configure a domain which will be used to substitute for unqualified sender addresses | receiving |   | 2.2.2.29 | global, listen, listener, pathway, pathway_group, peer |
| **[domainkeys](https://support.messagesystems.com/docs/web/conf.ref.domainkeys.php)** – Enable or disable domainkeys signing | sending |   | 2.2 | binding, binding_group, domain, global |
| **[drop_body_after_trans_fail](https://support.messagesystems.com/docs/web/conf.ref.drop_body_after_trans_fail.php)** – Number of retry attempts before freeing message memory | sending | 3 | 2.2 | binding, binding_group, domain, global |
| **[ecstream_idle_time](https://support.messagesystems.com/docs/web/ecelerity.conf.php#ecelerity.conf.ecstream_listener)** – The number of seconds of inactivity before a client is disconnected (ECStream only) | receiving | 300 | 2.2 | listen, listener, peer |
| **[ecstream_listener](https://support.messagesystems.com/docs/web/ecelerity.conf.php#ecelerity.conf.ecstream_listener)** *(scope)* – The listener for incoming ECSTREAM connections | receiving |   | 2.2 | global |
| **[ecstream_max_batch_size](https://support.messagesystems.com/docs/web/ecelerity.conf.php#ecelerity.conf.ecstream_listener)** – The maximum number of ECStream messages to accept before dropping back into the scheduler (ECStream only) | receiving | 10000 | 2.2 | listen, listener, peer |
| **[ehlo_hostname](https://support.messagesystems.com/docs/web/conf.ref.ehlo_hostname.php)** – Set the hostname used for EHLO in outbound mail | sending | __hostname__ | 2.2 | binding, binding_group, domain, global |
| **[ehlo_timeout](https://support.messagesystems.com/docs/web/conf.ref.ehlo_timeout.php)** – Network timeout for EHLO | sending | 300 | 2.2 | binding, binding_group, domain, global |
| **[enable](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – Enable or disable a listener scope | receiving | true | 2.2 | eccluster_listener, listen, listener |
| **[error](https://support.messagesystems.com/docs/web/conf.ref.debug_flags.php)** – Set the debug level | na | ALL | 2.2 | debug_flags |
| **[esmtp_listener](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** *(scope)* – The listener for incoming SMTP connections | receiving |   | 2.2 | global |
| **[events_per_iter](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – Employ when using a Concurrency greater than 1 | receiving | 0 | 2.2 | eccluster_listener, listen, listener |
| **[exclude_vctx_conn](https://support.messagesystems.com/docs/web/conf.ref.exclude_vctx.php)** – Exclude validation connection context keys from being journaled in the spool metadata | both |   | 2.2.2.30 | binding, binding_group, domain, global |
| **[exclude_vctx_mess](https://support.messagesystems.com/docs/web/conf.ref.exclude_vctx.php)** – Exclude validation message context keys from being journaled in the spool metadata | both |   | 2.2.2.30 | binding, binding_group, domain, global |
| **[expensive_batch_assessment](https://support.messagesystems.com/docs/web/conf.ref.expensive_batch_assessment.php)** – Treat messages as equal even if the bodies or headers have been modified since reception | receiving | false | 2.2 | global |
| **[file_mode](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – File access rights in octal notation | na | 0660 | 2.2 | eccluster_listener, listen, listener |
| **[file_mode](https://support.messagesystems.com/docs/web/eccluster.conf.php)** – The octal representation of the file permissions | na |   | 2.2 | logs |
| **[force_fsync](https://support.messagesystems.com/docs/web/conf.ref.force_fsync.php)** – Ensure that data is synced to disk on reception | receiving | false | 2.2 | global |
| **[fully_resolve_before_smtp](https://support.messagesystems.com/docs/web/conf.ref.fully_resolve_before_smtp.php)** – Resolve all MX and A records before attempting delivery | sending | true | 2.2 | binding, binding_group, domain, global |
| **[gateway](https://support.messagesystems.com/docs/web/conf.ref.gateway.php)** – Configure a static SMTP route for mail | sending |   | 2.2 | binding, binding_group, domain, global |
| **[generate_bounces](https://support.messagesystems.com/docs/web/conf.ref.generate_bounces.php)** – Generate MDNs if mail is failed after reception | sending | true | 2.2 | binding, binding_group, domain, global |
| **[generate_bounces_for_multi_recipient_policy_rejections](https://support.messagesystems.com/docs/web/conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php)** – Generate MDNs after reception for policy rejections | receiving | true | 2.2 | global, pathway, pathway_group |
| **[generate_delay_dsn](https://support.messagesystems.com/docs/web/conf.ref.generate_delay_dsn.php)** – Generate DSNs if mail is delayed | sending | false | 2.2.2.29 | binding, binding_group, domain, global |
| **[group](https://support.messagesystems.com/docs/web/conf.ref.user.php)** – Group identity to assume after startup | na | ecuser | 2.2 | security |
| **[growbuf_size](https://support.messagesystems.com/docs/web/conf.ref.growbuf_size.php)** – The size of an element in a growbuf chain | na | 16384 | 2.2 | global |
| **[host](https://support.messagesystems.com/docs/web/conf.ref.host.php)** *(scope)* – Configure host-specific options | sending |   | 2.2 | binding, binding_group, global |
| **[host_failure_retry](https://support.messagesystems.com/docs/web/conf.ref.host_failure_retry.php)** – Time to wait before attempting a retry | sending | 120 | 2.2 | domain, global |
| **[hostname](https://support.messagesystems.com/docs/web/conf.ref.hostname.php)** – Override the system configured hostname | both |   | 2.2 | global |
| **[idle_time](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – The number of seconds of inactivity before a client is disconnected | receiving | 0 | 2.2 | listen, listener, pathway, pathway_group, peer |
| **[idle_timeout](https://support.messagesystems.com/docs/web/conf.ref.idle_timeout.php)** – Time to maintain idle outbound connections | sending | 5 | 2.2 | binding, binding_group, domain, global |
| **[inbound_throttle_messages](https://support.messagesystems.com/docs/web/conf.ref.inbound_throttle_messages.php)** – Rate limit inbound mail | receiving |   | 2.2 | global, pathway, pathway_group |
| **[info](https://support.messagesystems.com/docs/web/conf.ref.debug_flags.php)** – Set the debug level | na |   | 2.2 | debug_flags |
| **[inline_transfail_processing](https://support.messagesystems.com/docs/web/conf.ref.inline_transfail_processing.php)** – How to handle transient failure processing | sending | 1 | 2.2 | global |
| **[io_system](https://support.messagesystems.com/docs/web/conf.ref.io_system.php)** – Load an IO module | na |   | 2.2 | global |
| **[keep_message_dicts_in_memory](https://support.messagesystems.com/docs/web/conf.ref.keep_message_dicts_in_memory.php)** – Preserve memory representation of metadata when memory is low | both | false | 2.2.2.30 | global |
| **[large_message_threshold](https://support.messagesystems.com/docs/web/conf.ref.large_message_threshold.php)** – Consider a message large when its size exceeds this amount | both | 131072 | 2.2 | global |
| **[legacy_message_threshold](https://support.messagesystems.com/docs/web/conf.ref.legacy_message_threshold.php)** – The maximum size allowed for messages being passed to legacy modules | both | 1048576 | 2.2 | global |
| **[license](https://support.messagesystems.com/docs/web/conf.ref.license.php)** – Specify an alternate license location | na |   | 2.2 | global |
| **[listener_sessions](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – Specifies the maximum number of concurrent sessions that can be established to a listener | receiving | 0 | 2.2 | listen, listener, pathway, pathway_group, peer |
| **[lmtp_port](https://support.messagesystems.com/docs/web/conf.ref.lmtp_port.php)** – Configure the port for LMTP deliveries | sending | 2003 | 2.2 | binding, binding_group, domain, global |
| **[logfile](https://support.messagesystems.com/docs/web/eccluster.conf.php)** – Describe the full path to the log file | na |   | 2.2 | logs |
| **[logger](https://support.messagesystems.com/docs/web/conf.ref.logger.php)** – Load a logging module | both |   | 2.2 | global |
| **[logs](https://support.messagesystems.com/docs/web/eccluster.conf.php)** *(scope)* – Configure centralized log files on the cluster manager | na |   | 2.2 | global |
| **[lone_lf_in_body](https://support.messagesystems.com/docs/web/conf.ref.lone_lf_in_body.php)** – rfc2822 conformance option | both | ignore | 2.2 | rfc2822 |
| **[lone_lf_in_headers](https://support.messagesystems.com/docs/web/conf.ref.lone_lf_in_headers.php)** – rfc2822 conformance option | both | pedantic | 2.2 | rfc2822 |
| **[mail_queue_check_vm_interval](https://support.messagesystems.com/docs/web/conf.ref.mail_queue_check_vm_interval.php)** – How often to apply memory management reduction on mail queues | both | 60 | 2.2 | global |
| **[mailerdaemon](https://support.messagesystems.com/docs/web/conf.ref.mailerdaemon.php)** – Set the From: address for MDNs | sending |   | 2.2 | binding, binding_group, domain, global |
| **[mailfrom_timeout](https://support.messagesystems.com/docs/web/conf.ref.mailfrom_timeout.php)** – Timeout after MAIL FROM | sending | 300 | 2.2 | binding, binding_group, domain, global |
| **[malloc2mmap_threshold](https://support.messagesystems.com/docs/web/conf.ref.malloc2mmap_threshold.php)** – Use mmap when allocations exceed this amount | na | 4092 | 2.2 | global |
| **[masterdb_file](https://support.messagesystems.com/docs/web/conf.ref.masterdb_file.php)** – Specify an alternate path for the statistics permastore | na | /var/log/ecelerity/ecdb | 2.2 | global |
| **[match_cache_life](https://support.messagesystems.com/docs/web/conf.ref.match_cache_life.php)** – Set the maximum number of seconds that the match cache will be valid | na | 0 | 2.2 | global |
| **[match_cache_size](https://support.messagesystems.com/docs/web/conf.ref.match_cache_size.php)** – The size of the cache that holds the results of looking up matching scopes | na | 16384 | 2.2 | global |
| **[match_domain](https://support.messagesystems.com/docs/web/conf.ref.match_domain.php)** – Map sending domains to bindings by domain name | both |   | 2.2 | binding |
| **[max_deliveries_per_connection](https://support.messagesystems.com/docs/web/conf.ref.max_deliveries_per_connection.php)** – Maximum number of messages to deliver before closing a connection | sending | 0 | 2.2 | binding, binding_group, domain, global |
| **[max_dns_ttl](https://support.messagesystems.com/docs/web/conf.ref.max_dns_ttl.php)** – Set the maximum DNS TTL | sending | 4294967295 | 2.2 | global |
| **[max_idle](https://support.messagesystems.com/docs/web/eccluster.conf.php)** – The maximum number of seconds a log file may be left open | na |   | 2.2 | logs |
| **[max_line_length](https://support.messagesystems.com/docs/web/conf.ref.max_line_length.php)** – rfc2822 conformance | both | ignore | 2.2 | rfc2822 |
| **[max_line_length_policy](https://support.messagesystems.com/docs/web/conf.ref.max_line_length_policy.php)** – Determine how non-RFC-compliant line lengths are handled | receiving | none | 2.2.3.46 | global, pathway, pathway_group |
| **[max_open](https://support.messagesystems.com/docs/web/eccluster.conf.php)** – The maximum number of concurrently open log files | na |   | 2.2 | logs |
| **[max_outbound_connections](https://support.messagesystems.com/docs/web/conf.ref.max_outbound_connections.php)** – Set the maximum number of outbound connections | sending | 32 | 2.2 | binding, binding_group, domain, global, host |
| **[max_receptions_per_connection](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – The maximum number of messages allowed in a single session | receiving | 0 | 2.2 | global, listen, listener, pathway, pathway_group, peer |
| **[max_recipients_per_batch](https://support.messagesystems.com/docs/web/conf.ref.max_recipients_per_batch.php)** – The maximum number of recipients to send in a single outbound message transaction | sending | 100 | 2.2.2.29 | binding, binding_group, domain, global |
| **[max_recipients_per_connection](https://support.messagesystems.com/docs/web/conf.ref.max_recipients_per_connection.php)** – The maximum number of recipients to send on a connection | sending | 0 | 2.2.2.29 | binding, binding_group, domain, global, listen, listener, peer |
| **[max_recipients_per_message](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – The maximum number of recipients allowed in a message | receiving | 0 | 2.2 | listen, listener, pathway, pathway_group, peer |
| **[max_resident_active_queue](https://support.messagesystems.com/docs/web/conf.ref.max_resident_active_queue.php)** – Threshold above which messages are not held in memory | sending | 250 | 2.2 | binding, binding_group, domain, global |
| **[max_resident_messages](https://support.messagesystems.com/docs/web/conf.ref.max_resident_messages.php)** – Threshold above which messages are not held in memory | sending | 16384 | 2.2 | binding, binding_group, global |
| **[max_resident_transfails](https://support.messagesystems.com/docs/web/conf.ref.max_resident_transfails.php)** – If the transient failure queue grows beyond this size, messages are swapped out of memory | sending | 100 | 2.2 | global |
| **[max_retries](https://support.messagesystems.com/docs/web/conf.ref.max_retries.php)** – Override the system configured max_retries | sending |   | 2.2 | binding, binding_group, domain, global |
| **[max_retry_interval](https://support.messagesystems.com/docs/web/conf.ref.max_retry_interval.php)** – Maximum retry interval | sending | 43200 | 2.2 | binding, binding_group, domain, global |
| **[mbus_daemon](https://support.messagesystems.com/docs/web/cluster.php)** – The port that the messaging bus listens on (cluster-specific) | na | 4803 | 2.2 | cluster |
| **[mdn_failures_notify](https://support.messagesystems.com/docs/web/conf.ref.mdn_failures_notify.php)** – Mailbox to which to send null recipient MDNs | sending |   | 2.2 | binding, binding_group, domain, global |
| **[memory_goal](https://support.messagesystems.com/docs/web/conf.ref.memory_goal.php)** – Configure physical memory usage goal | na | 90 | 2.2 | global |
| **[memory_hwm](https://support.messagesystems.com/docs/web/conf.ref.memory_hwm.php)** – Configure physical memory usage high-water mark | na | 95 | 2.2 | global |
| **[message_expiration](https://support.messagesystems.com/docs/web/conf.ref.message_expiration.php)** – Time to live for messages | sending | 86400 | 2.2 | binding, binding_group, domain, global |
| **[message_size](https://support.messagesystems.com/docs/web/ecelerity.conf.php#ecelerity.conf.esmtp.personality)** – The maximum number of bytes allowed in a single message before a "resources exhausted" message is returned to the client | sending |   | 2.2 | listener |
| **[messageid_header](https://support.messagesystems.com/docs/web/conf.ref.messageid_header.php)** – rfc2822 conformance | both | ifneeded | 2.2 | rfc2822 |
| **[mime_parse_large_messages_during_reception](https://support.messagesystems.com/docs/web/conf.ref.mime_parse_large_messages_during_reception.php)** – Configure whether large messages are parsed upon reception or just in time | receiving | true | 2.2.2.31 | global |
| **[min_dns_ttl](https://support.messagesystems.com/docs/web/conf.ref.min_dns_ttl.php)** – Override DNS TTLs smaller than this value | sending | 0 | 2.2 | global |
| **[missing_headers](https://support.messagesystems.com/docs/web/conf.ref.missing_headers.php)** – rfc2822 conformance | both | reject | 2.2 | rfc2822 |
| **[module](https://support.messagesystems.com/docs/web/conf.ref.module.php)** – Load a generic module | na |   | 2.2 | global |
| **[mx_failures_fallback_to_a](https://support.messagesystems.com/docs/web/conf.ref.mx_failures_fallback_to_a.php)** – Configure the maximum number of times an MX lookup will be attempted | sending | 3 | 2.2.2.35 | domain, global |
| **[mx_failures_to_delay](https://support.messagesystems.com/docs/web/conf.ref.mx_failures_to_delay.php)** – Number of consecutive failures before a domain is auto-delayed | sending | 50 | 2.2 | domain, global |
| **[never_attempt_expired_messages](https://support.messagesystems.com/docs/web/conf.ref.never_attempt_expired_messages.php)** – Never attempt delivery of expired messages | sending | false | 2.2 | binding, binding_group, domain, global |
| **[never_retry](https://support.messagesystems.com/docs/web/conf.ref.never_retry.php)** – Whether or not to retry delivery of failed messages | sending | false | 2.2 | binding, binding_group, domain, global |
| **[nodeaddr](https://support.messagesystems.com/docs/web/cluster.php)** – The canonical cluster address for the node (cluster-specific) | na |   | 2.2 | cluster |
| **[nodename](https://support.messagesystems.com/docs/web/cluster.php)** – Override the node name that is used to canonically identify this cluster node (cluster-specific) | na |   | 2.2 | cluster |
| **[notice](https://support.messagesystems.com/docs/web/conf.ref.debug_flags.php)** – Set the debug level | na |   | 2.2 | debug_flags |
| **[only_use_best_mx_for_relay_domains](https://support.messagesystems.com/docs/web/conf.ref.only_use_best_mx_for_relay_domains.php)** – If this is set to true only the lowest numerical priority MXs are used | sending | true | 2.2.2.30 | global |
| **[outbound_throttle_connections](https://support.messagesystems.com/docs/web/conf.ref.outbound_throttle_connections.php)** – Limit the rate at which connections are established | sending |   | 2.2 | binding, binding_group, domain, global |
| **[outbound_throttle_messages](https://support.messagesystems.com/docs/web/conf.ref.outbound_throttle_messages.php)** – Limit the rate at which messages are delivered | sending |   | 2.2 | binding, binding_group, domain, global |
| **[pcre_cache_size](https://support.messagesystems.com/docs/web/conf.ref.pcre_cache_size.php)** – Set the maximum size of the ec_pcre_compile cache | na | 100 | 2.2 | global |
| **[pcre_cache_ttl](https://support.messagesystems.com/docs/web/conf.ref.pcre_cache_ttl.php)** – Set the maximum TTL for the ec_pcre_compile cache | na | 300 | 2.2 | global |
| **[pedantic_address_rules](https://support.messagesystems.com/docs/web/conf.ref.pedantic_address_rules.php)** – Allow relaxation of enforcement of the rfc2822 address rules. | both | true | 2.2 | global |
| **[permastore_interval](https://support.messagesystems.com/docs/web/conf.ref.permastore_interval.php)** – The frequency for saving various statistics | na | 300 | 2.2 | global |
| **[pidfile](https://support.messagesystems.com/docs/web/conf.ref.pidfile.php)** – Set the PID file path | na | /var/run/ecelerity.pid | 2.2 | global |
| **[pool_name](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – Associate a threadpool with a listener | receiving |   | 2.2 | eccluster_listener, listen, listener |
| **[privileges](https://support.messagesystems.com/docs/web/conf.ref.capabilities.php)** – Selectively retain root capabilities (Solaris) | na |   | 2.2 | security |
| **[prohibited_hosts](https://support.messagesystems.com/docs/web/conf.ref.prohibited_hosts.php)** – Prevent mail from being delivered to invalid destinations | sending |   | 2.2 | global |
| **[rcptto_timeout](https://support.messagesystems.com/docs/web/conf.ref.rcptto_timeout.php)** – Timeout after RCPT TO | sending | 300 | 2.2 | binding, binding_group, domain, global |
| **[received_hostname](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – The hostname that is placed in the received headers | receiving |   | 2.2 | listen, listener, pathway, pathway_group, peer |
| **[reconfig_message](https://support.messagesystems.com/docs/web/ecelerity.conf.php#reconfig_message)** – The message if the configuration has changed | receiving | 4.3.2 Reconfiguration in progress | 2.2 | listener |
| **[relay_domains](https://support.messagesystems.com/docs/web/conf.ref.relay_domains.php)** – Configure the list of domains for which Momentum relays mail | receiving |   | 2.2 | global, pathway, pathway_group |
| **[relay_for_sending_domains](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – Domains that may use the MTA as a relay | receiving |   | 2.2 | listen, listener, pathway, pathway_group, peer |
| **[relay_hosts](https://support.messagesystems.com/docs/web/conf.ref.relay_hosts.php)** – Configure the list of hosts for which Momentum relays mail | receiving |   | 2.2 | global, listen, listener, pathway, pathway_group, peer |
| **[remote_smtp_port](https://support.messagesystems.com/docs/web/conf.ref.remote_smtp_port.php)** – Set the port to be used for SMTP deliveries | sending | 25 | 2.2 | binding, binding_group, domain, global |
| **[replicate](https://support.messagesystems.com/docs/web/cluster.config.overview.php)** *(scope)* – Define the cluster replication framework (cluster-specific) | na |   | 2.2 | cluster |
| **[require_ehlo](https://support.messagesystems.com/docs/web/conf.ref.require_ehlo.php)** – Reject mail from clients that do not say HELO | receiving | false | 2.2 | global, listen, listener, pathway, pathway_group, peer |
| **[reserve_maintenance_interval](https://support.messagesystems.com/docs/web/conf.ref.reserve_maintenance_interval.php)** – How often to perform mail queue maintenance | sending | 15 | 2.2 | global |
| **[resolv_conf](https://support.messagesystems.com/docs/web/conf.ref.resolv_conf.php)** – Specify a custom resolv.conf file | sending |   | 2.2 | global |
| **[response_transcode_pattern](https://support.messagesystems.com/docs/web/conf.ref.response_transcode_pattern.php)** – The regex pattern for comparison to a server response | sending |   | 2.2.2.38 | binding, binding_group, domain, global |
| **[response_transcode_replace](https://support.messagesystems.com/docs/web/conf.ref.response_transcode_replace.php)** – The replacement string for a server response | sending |   | 2.2.2.38 | binding, binding_group, domain, global |
| **[retry_interval](https://support.messagesystems.com/docs/web/conf.ref.retry_interval.php)** – Base retry interval | sending | 1200 | 2.2 | binding, binding_group, domain, global |
| **[rfc2822](https://support.messagesystems.com/docs/web/conf.ref.rfc2822.php)** *(scope)* – rfc2822 conformance | receiving |   | 2.2 | rfc2822 |
| **[routes](https://support.messagesystems.com/docs/web/conf.ref.routes.php)** – Configure message routing | sending |   | 2.2 | domain, global |
| **[rset_timeout](https://support.messagesystems.com/docs/web/conf.ref.rset_timeout.php)** – Set the timeout after RSET | sending | 30 | 2.2 | binding, binding_group, domain, global |
| **[scheduler](https://support.messagesystems.com/docs/web/conf.ref.scheduler.php)** – Override the default IO scheduler | na |   | 2.2 | global |
| **[scope_max_outbound_connections](https://support.messagesystems.com/docs/web/conf.ref.scope_max_outbound_connections.php)** – Provide traffic shaping for outbound connections | sending |   | 2.2.2.44 | binding, binding_group, domain, global |
| **[security](https://support.messagesystems.com/docs/web/conf.ref.security.php)** *(scope)* – Scope for defining which permissions are retained by which user | na |   | 2.2 | global |
| **[send_8bitmime](https://support.messagesystems.com/docs/web/conf.ref.send_8bitmime.php)** – Enable advertising of 8BITMIME when sending mail | sending | no | 2.2 | binding, binding_group, domain, global |
| **[server_max_file_descriptors](https://support.messagesystems.com/docs/web/conf.ref.server_max_file_descriptors.php)** – Sets the maximum number of file descriptors usable by the system | na | 3000000 | 2.2 | global |
| **[server_max_outbound_connections](https://support.messagesystems.com/docs/web/conf.ref.server_max_outbound_connections.php)** – Sets the maximum number of outbound connections | sending | 20000 | 2.2 | binding, binding_group, global |
| **[server_reserve_outbound_connections](https://support.messagesystems.com/docs/web/conf.ref.server_reserve_outbound_connections.php)** – Sets the server-wide connection limit reserve | sending | 200 | 2.2 | global |
| **[service_sessions](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – The maximum number of concurrent sessions that can be established to all listeners | receiving | 0 | 2.2 | listen, listener, pathway, pathway_group, peer |
| **[signing_stats](https://support.messagesystems.com/docs/web/conf.ref.signing_stats.php)** – Control how signing statistics are recorded | sending | all | 2.2.2.45 | global |
| **[siv_throttle_cache_size](https://support.messagesystems.com/docs/web/conf.ref.siv_throttle_cache_size.php)** – Set the maximum number of named throttles | both | 100 | 2.2 | global |
| **[snmp](https://support.messagesystems.com/docs/web/conf.ref.snmp.php)** *(scope)* – Simple Network Management Protocol Support scope options | na |   | 2.2 | global |
| **[snmp_traps](https://support.messagesystems.com/docs/web/conf.ref.snmp.php)** *(scope)* – Enable and configure generation of SNMP traps | na |   | 2.2 | global |
| **[soft_bounce_drain_rate](https://support.messagesystems.com/docs/web/conf.ref.soft_bounce_drain_rate.php)** – How many soft bounces to place into the mail queues in a single scheduler iteration | sending | 100 | 2.2 | global |
| **[spool_mode](https://support.messagesystems.com/docs/web/conf.ref.spool_mode.php)** – Set the file mode for newly created spool files | na | 0640 | 2.2 | global |
| **[spoolbase](https://support.messagesystems.com/docs/web/conf.ref.spoolbase.php)** – Set the base directory for the spool | na | /var/spool/ecelerity | 2.2 | global |
| **[ssl_lock_method](https://support.messagesystems.com/docs/web/conf.ref.ssl_lock_method.php)** – The SSL lock method | na |   | 2.2 | global |
| **[stack_size](https://support.messagesystems.com/docs/web/conf.ref.threadpool.php)** – The stack space for a threadpool | na | 0 | 2.2 | threadpool |
| **[state](https://support.messagesystems.com/docs/web/conf.ref.snmp.php)** – Whether to enable the SNMP agent | na | 1 | 2.2 | snmp |
| **[state](https://support.messagesystems.com/docs/web/conf.ref.snmp.php)** – Whether to enable generation of SNMP traps | na | 0 | 2.2 | snmp_traps |
| **[static_banner](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – The banner that is displayed to the remote client | receiving |   | 2.2 | listen, listener, pathway, pathway_group, peer |
| **[supplemental_groups](https://support.messagesystems.com/docs/web/conf.ref.supplemental_groups.php)** – Supplemental groups to assume after startup | na |   | 2.2 | security |
| **[suspend_delivery](https://support.messagesystems.com/docs/web/conf.ref.suspend_delivery.php)** – Prevent outbound mail delivery | sending | false | 2.2 | binding, binding_group, domain, global |
| **[syscontact](https://support.messagesystems.com/docs/web/conf.ref.snmp.php)** – Set the SNMP SysContact option value | na |   | 2.2 | snmp |
| **[sysdescription](https://support.messagesystems.com/docs/web/conf.ref.snmp.php)** – Set the SNMP SysDescription option value | na |   | 2.2 | snmp |
| **[syslocation](https://support.messagesystems.com/docs/web/conf.ref.snmp.php)** – Set the SNMP SysLocation option value | na |   | 2.2 | snmp |
| **[tcp_buffer_size](https://support.messagesystems.com/docs/web/conf.ref.tcp_buffer_size.php)** – Maximum tcp buffer size for outbound connections | sending | 32768 | 2.2 | cluster, global |
| **[tcp_recv_buffer_size](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – The size of the TCP receive buffer size | receiving | 4096 | 2.2 | eccluster_listener, listen, listener |
| **[tcp_send_buffer_size](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – The size of the TCP send buffer | receiving | 4096 | 2.2 | eccluster_listener, listen, listener |
| **[threadpool](https://support.messagesystems.com/docs/web/conf.ref.threadpool.php)** *(scope)* – Configure thread pool specific options | na |   | 2.2 | global |
| **[timestampformat](https://support.messagesystems.com/docs/web/conf.ref.timestampformat.php)** – Set the timestamp format used when logging to stderr | na | [%a %d %b %Y %H:%M:%S] | 2.2 | global |
| **[tls](https://support.messagesystems.com/docs/web/conf.ref.tls.php)** – Use a TLS connection for outbound mail | sending | no | 2.2 | binding, binding_group, domain, global |
| **[tls_ca](https://support.messagesystems.com/docs/web/conf.ref.tls_ca.php)** – Certificate authority for outbound mail | sending |   | 2.2 | binding, binding_group, domain, global |
| **[tls_certificate](https://support.messagesystems.com/docs/web/conf.ref.tls_certificate.php)** – Certificate to use for inbound and outbound mail | both |   | 2.2 | binding, binding_group, domain, global, listen, listener, pathway, pathway_group, peer |
| **[tls_ciphers](https://support.messagesystems.com/docs/web/conf.ref.tls_ciphers.php)** – Allowable ciphers for a TLS session | both |   | 2.2 | binding, binding_group, domain, global, listen, listener, pathway, pathway_group, peer |
| **[tls_key](https://support.messagesystems.com/docs/web/conf.ref.tls_key.php)** – the TLS key to use for outbound mail or inbound mail | both |   | 2.2 | binding, binding_group, domain, global, listen, listener, pathway, pathway_group, peer |
| **[tls_verified_peer_can_relay](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – Verification that peer can relay | receiving | false | 2.2 | listen, listener, pathway, pathway_group, peer |
| **[tls_verify](https://support.messagesystems.com/docs/web/conf.ref.tls_verify.php)** – Specify how to handle the remote presented certificate | sending | no | 2.2 | binding, binding_group, domain, global |
| **[trace_headers](https://support.messagesystems.com/docs/web/conf.ref.trace_headers.php)** – rfc2822 conformance | both | true | 2.2 | rfc2822 |
| **[trace_smtp_mode](https://support.messagesystems.com/docs/web/conf.ref.trace_smtp_mode.php)** – Set the default permissions of trace files | sending | 0640 | 2.2 | global |
| **[transfail_drain_rate](https://support.messagesystems.com/docs/web/conf.ref.transfail_drain_rate.php)** – The maximum number of messages to pop off the transient failure queue in a single scheduler iteration | sending | 100 | 2.2 | global |
| **[transform_8bitmime_content](https://support.messagesystems.com/docs/web/conf.ref.transform_8bitmime_content.php)** – Enable 8BITMIME downconversion when sending mail | sending | no | 2.2 | binding, binding_group, domain, global |
| **[trap_destination](https://support.messagesystems.com/docs/web/conf.ref.snmp.php)** – Destination for SNMP trap | na |   | 2.2 | snmp_traps |
| **[trap_interval](https://support.messagesystems.com/docs/web/conf.ref.snmp.php)** – Frequency of SNMP trap generation | na | 60 | 2.2 | snmp_traps |
| **[umem_reap_interval](https://support.messagesystems.com/docs/web/conf.ref.umem_reap_interval.php)** – How often to release unused memory | na | 1800 | 2.2 | global |
| **[unlink_on_spool_in_failure](https://support.messagesystems.com/docs/web/conf.ref.unlink_on_spool_in_failure.php)** – Whether or not to remove malformed messages | receiving | true | 2.2 | global |
| **[use_mmap](https://support.messagesystems.com/docs/web/conf.ref.use_mmap.php)** – Use mmap when spooling messages from disk | na | false | 2.2 | global |
| **[use_sendfile](https://support.messagesystems.com/docs/web/conf.ref.use_sendfile.php)** – Use sendfile() when sending mail | sending | false | 2.2 | global |
| **[use_ssl](https://support.messagesystems.com/docs/web/ecelerity.conf.php)** – Whether to use SSL verification | receiving | false | 2.2 | listen, listener, pathway, pathway_group, peer |
| **[user](https://support.messagesystems.com/docs/web/conf.ref.user.php)** – User identity to assume after startup | na | ecuser | 2.2 | security |
| **[validate](https://support.messagesystems.com/docs/web/conf.ref.validate.php)** – Load a validation module | both |   | 2.2 | global |
| **[warning](https://support.messagesystems.com/docs/web/conf.ref.debug_flags.php)** – Set the debug level | na |   | 2.2 | debug_flags |
| **[watch_interval](https://support.messagesystems.com/docs/web/conf.ref.snmp.php)** – Interval for watched system variables for SNMP traps | na | 10 | 2.2 | snmp_traps |
| **[watch_variables](https://support.messagesystems.com/docs/web/conf.ref.snmp.php)** – SNMP traps watch variables | na |   | 2.2 | snmp_traps |
| **[watchdog_interval](https://support.messagesystems.com/docs/web/conf.ref.watchdog_interval.php)** – If Momentum is unresponsive for this length of time, it will be restarted | na | 60 | 2.2 | global |
| **[worker_cpu_concurrency](https://support.messagesystems.com/docs/web/conf.ref.worker_cpu_concurrency.php)** – Number of threads to use for CPU-bound jobs | both | 4 | 2.2 | global |
| **[worker_io_concurrency](https://support.messagesystems.com/docs/web/conf.ref.worker_io_concurrency.php)** – Number of threads to use for I/O-bound jobs | both | 5 | 2.2 | global |
| **[xclient](https://support.messagesystems.com/docs/web/conf.ref.xclient.php)** – Use the XCLIENT extension to SMTP for outbound mail | sending | no | 2.2 | binding, binding_group, domain, global |

| [Prev](conf.ref.php)  | [Up](conf.ref.php) |  [Next](conf.ref.files.php) |
| Chapter 9. Ecelerity.conf Configuration Reference  | [Table of Contents](index.php) |  9.2. Configuration Files and Option Details |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)