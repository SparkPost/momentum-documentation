## Chapter 72. Configuration Options Reference

**Table of Contents**

<dl class="toc">

<dt>[adaptive_backstore_leveldb](conf.ref.adaptive_backstore_leveldb.php) — use LevelDB as the backing store for Adaptive Delivery</dt>

<dt>[adaptive_backstore_riak](conf.ref.adaptive_backstore_riak.php) — set characteristics of the Riak backing store</dt>

<dt>[adaptive_enabled](conf.ref.adaptive_enabled.php) — enable or disable the adaptive module</dt>

<dt>[adaptive_scope](conf.ref.adaptive_scope.php) — define the scope applicable to adaptive delivery (AD)</dt>

<dt>[address_metrics_cleanse_interval](conf.ref.address_metrics_cleanse_interval.php) — the interval for refreshing address metrics</dt>

<dt>[address_metrics_lifetime](conf.ref.address_metrics_lifetime.php) — the TTL of address metrics</dt>

<dt>[alias_schemes](conf.ref.alias_schemes.php) — enable named alias expansion schemes</dt>

<dt>[allow_ip_literal](conf.ref.allow_ip_literal.php) — allow IP addresses in email addresses</dt>

<dt>[allow_null_envelope_sender](conf.ref.allow_null_envelope_sender.php) — allow the null envelope sender in e-mail addresses</dt>

<dt>[allow_trailing_whitespace_in_commands](conf.ref.allow_trailing_whitespace_in_commands.php) — permit trailing whitespace at the end of an SMTP command</dt>

<dt>[async_bounce_rendering](conf.ref.async_bounce_rendering.php) — which thread pool to use for bounce rendering</dt>

<dt>[authorization](conf.ref.authorization.php) — configure the console commands applicable to users</dt>

<dt>[bind_address](conf.ref.bind_address.php) — source address for outbound connections</dt>

<dt>[binding](conf.ref.binding.php) — configure binding specific options</dt>

<dt>[binding_auto_replumb](conf.ref.binding_auto_replumb.php) — enable or disable the auto replumber</dt>

<dt>[binding_auto_replumb_interval](conf.ref.binding_auto_replumb_interval.php) — sets the time interval to check the plumbed state of statically plumbed bindings</dt>

<dt>[binding_group](conf.ref.binding_group.php) — logically group a set of bindings</dt>

<dt>[blackhole](conf.ref.blackhole.php) — blackhole mail</dt>

<dt>[body_timeout](conf.ref.body_timeout.php) — network timeout once the DATA phase is complete</dt>

<dt>[bounce_behavior](conf.ref.bounce_behavior.php) — configure the action taken when a message is classified as a bounce</dt>

<dt>[bounce_domains](conf.ref.bounce_domains.php) — configure the list of domains eligible for bounce processing by Momentum.</dt>

<dt>[bounce_pattern](conf.ref.bounce_pattern.php) — configure the pattern that inbound email addresses must match in order to be considered bounces.</dt>

<dt>[bounce_suppress_list](conf.ref.bounce_suppress_list.php) — configure a list of email addresses that may not be considered original recipients.</dt>

<dt>[bounces_inline_original](conf.ref.bounces_inline_original.php) — how much of the original message to include in MDNs</dt>

<dt>[capabilities](conf.ref.capabilities.php) — selectively retain "root" capabilities</dt>

<dt>[chroot](conf.ref.chroot.php) — chroot to a secure environment</dt>

<dt>[clear_mail_queue_maintainers](conf.ref.clear_mail_queue_maintainers.php) — reschedule the mail queue maintainer</dt>

<dt>[click_tracking_enabled](config.click_tracking_enabled.php) — enable or disable click tracking for SMTP injections</dt>

<dt>[click_tracking_scheme](config.click_tracking_scheme.php) — set the hyperlink scheme to use for click tracking links in SMTP injections</dt>

<dt>[cluster_max_outbound_connections](conf.ref.cluster_max_outbound_connections.php) — set the maximum number of outbound connections for a scope and enforce it across a cluster</dt>

<dt>[cluster_outbound_throttle_connections](conf.ref.cluster_outbound_throttle_connections.php) — limit the rate at which connections are established, and enforce it across a cluster of systems</dt>

<dt>[cluster_outbound_throttle_messages](conf.ref.cluster_outbound_throttle_messages.php) — limit the rate at which messages are delivered, and enforce it across the cluster</dt>

<dt>[cluster_scope_max_outbound_connections](conf.ref.cluster_scope_max_outbound_connections.php) — provide traffic shaping for outbound connections in a cluster configuration</dt>

<dt>[cluster_server_max_outbound_connections](conf.ref.cluster_server_max_outbound_connections.php) — set the maximum number of outbound connections, and enforce it across a cluster</dt>

<dt>[connect_timeout](conf.ref.connect_timeout.php) — set the connection timeout</dt>

<dt>[connect_timeout_to_delay](conf.ref.connect_timeout_to_delay.php) — time interval before sweeping mail into the delayed queue</dt>

<dt>[connection_allocation_aggressiveness](conf.ref.connection_allocation_aggressiveness.php) — tune the aggressiveness for establishing new connections to domains</dt>

<dt>[context](conf.ref.context.php) — use to set arbitrary connection context key value pairs.</dt>

<dt>[control_client_timeout](conf.ref.control_client_timeout.php) — network timeout for Momentum control client connections</dt>

<dt>[crypto_engine](conf.ref.crypto_engine.php) — enable hardware cryptography acceleration</dt>

<dt>[crypto_lock_method](config.crypto_lock_method.php) — set the locking method used by the TLS layer</dt>

<dt>[debug_flags](conf.ref.debug_flags.php) — configure debug verbosity</dt>

<dt>[default_binding](conf.ref.default_binding.php) — control usage of the "default" binding</dt>

<dt>[default_charset](conf.ref.default_charset.php) — control usage of the "default" character set</dt>

<dt>[delay_dsn_max_retry_interval](conf.ref.delay_dsn_max_retry_interval.php) — maximum interval for sending DSNs to the sender of a message that has not yet been delivered</dt>

<dt>[delay_dsn_retry_interval](conf.ref.delay_dsn_retry_interval.php) — base interval for sending DSNs to the sender of a message that has not yet been delivered</dt>

<dt>[delayed_binding_domain_fuzz](conf.ref.delayed_binding_domain_fuzz.php) — length of time to spread scheduled messages over when a bulk requeue is necessary</dt>

<dt>[delayed_queue_scan_interval](conf.ref.delayed_queue_scan_interval.php) — how often to call the maintainer for a domain</dt>

<dt>[delivery_method](conf.ref.delivery_method.php) — set the delivery method</dt>

<dt>[delivery_pool](config.ref.delivery_pool.php) — associate a pool of event loops with email delivery to use multiple threads</dt>

<dt>[delivery_response_timeout](conf.ref.delivery_response_timeout.php) — time to wait for a response to an outbound request</dt>

<dt>[disable_nagle_algorithm](conf.ref.disable_nagle_algorithm.php) — disable nagle algorithm on sockets</dt>

<dt>[disk_queue_drain_rate](conf.ref.disk_queue_drain_rate.php) — control the rate at which messages are spooled in on start-up</dt>

<dt>[dns_cache_purge_interval](conf.ref.dns_cache_purge_interval.php) — how often the DNS response cache is scanned for stale entries</dt>

<dt>[dns_expire_interval](conf.ref.dns_expire_interval.php) — how often to check for domains with expired DNS information</dt>

<dt>[dns_failures_to_purge](conf.ref.dns_failures_to_purge.php) — configure the maximum number of DNS lookups</dt>

<dt>[dns_fallback_to_tcp](conf.ref.dns_fallback_to_tcp.php) — whether or not to fail over to TCP in place of UDP</dt>

<dt>[domain_for_unqualified_recipient_addresses](conf.ref.domain_for_unqualified_recipient_addresses.php) — configure a domain which will be used to resolve delivery for unqualified addresses</dt>

<dt>[domain_for_unqualified_sender_address](conf.ref.domain_for_unqualified_sender_address.php) — configure a domain which will be used to substitute for unqualified sender addresses</dt>

<dt>[domain](conf.ref.domain.php) — configure domain specific options</dt>

<dt>[domainkeys](conf.ref.domainkeys.php) — enable or disable domainkeys signing</dt>

<dt>[drop_body_after_trans_fail](conf.ref.drop_body_after_trans_fail.php) — number of retry attempts before freeing message memory</dt>

<dt>[ecstream_port](conf.ref.ecstream_port.php) — configure the port for ecstream deliveries</dt>

<dt>[ecstream_timeout](conf.ref.ecstream_timeout.php) — the amount of time to wait for an ecstream connection to be established</dt>

<dt>[ehlo_hostname](conf.ref.ehlo_hostname.php) — set the hostname used for EHLO in outbound mail</dt>

<dt>[ehlo_timeout](conf.ref.ehlo_timeout.php) — network timeout for EHLO</dt>

<dt>[enable_fbl_header_insertion](conf.ref.enable_fbl_header_insertion.php) — enable or disable fbl header insertion</dt>

<dt>[event_loop](config.ref.event_loop.php) — associate a pool of event loops within a listener scope to use multiple threads</dt>

<dt>[eventloop](config.ref.eventloop.php) — define a pool of event loops to enable multiple event loop configuration</dt>

<dt>[events_per_iter](conf.ref.events_per_iter.php) — employ when using a concurrency greater than 1.</dt>

<dt>[exclude_vctx_conn](conf.ref.exclude_vctx_conn.php) — exclude validation context keys from being journaled in the spool metadata.</dt>

<dt>[exclude_vctx_mess](conf.ref.exclude_vctx_mess.php) — exclude validation context keys from being journaled in the spool metadata.</dt>

<dt>[expensive_batch_assessment](conf.ref.expensive_batch_assessment.php) — only treat messages as different if the headers are rendered differently</dt>

<dt>[force_fsync](conf.ref.force_fsync.php) — ensure that data is synced to disk on reception</dt>

<dt>[fully_resolve_before_smtp](conf.ref.fully_resolve_before_smtp.php) — resolve all MX and A records before attempting delivery</dt>

<dt>[gateway](conf.ref.gateway.php) — configure a static SMTP route for mail</dt>

<dt>[generate_bounces](conf.ref.generate_bounces.php) — generate MDNs if mail is failed after reception</dt>

<dt>[generate_bounces_for_multi_recipient_policy_rejections](conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php) — generate MDNs after reception for policy rejections</dt>

<dt>[generate_delay_dsn](conf.ref.generate_delay_dsn.php) — generate DSNs if mail is delayed</dt>

<dt>[growbuf_size](conf.ref.growbuf_size.php) — The size of an element in a growbuf chain</dt>

<dt>[host](conf.ref.host.php) — configure host specific options</dt>

<dt>[hostname](conf.ref.hostname.php) — override the system configured hostname</dt>

<dt>[host_failure_retry](conf.ref.host_failure_retry.php) — time to wait before attempting a retry</dt>

<dt>[http_basic_auth](conf.ref.http_basic_auth.php) — Define the user credentials when using basic HTTP authentication</dt>

<dt>[http_host](conf.ref.http_host.php) — Define the HTTP host</dt>

<dt>[http_method](conf.ref.http_method.php) — Define the HTTP method to use</dt>

<dt>[http_uri](conf.ref.http_uri.php) — Define the HTTP URI that you wish to connect to</dt>

<dt>[http_version](conf.ref.http_version.php) — Define the HTTP version to use</dt>

<dt>[idle_timeout](conf.ref.idle_timeout.php) — time to maintain idle outbound connections</dt>

<dt>[inbound_throttle_messages](conf.ref.inbound_throttle_messages.php) — rate limit inbound mail</dt>

<dt>[initial_hash_buckets](conf.ref.initial_hash_buckets.php) — Set the number of hash buckets used by the system</dt>

<dt>[inline_transfail_processing](conf.ref.inline_transfail_processing.php) — how to handle transient failure processing</dt>

<dt>[keep_message_dicts_in_memory](conf.ref.keep_message_dicts_in_memory.php) — preserve memory representation of metadata when memory is low</dt>

<dt>[large_message_threshold](conf.ref.large_message_threshold.php) — Consider a message large when its size exceeds this amount</dt>

<dt>[legacy_message_threshold](conf.ref.legacy_message_threshold.php) — The maximum size allowed for messages being passed to legacy modules</dt>

<dt>[license](conf.ref.license.php) — specify an alternate license location</dt>

<dt>[lmtp_port](conf.ref.lmtp_port.php) — configure the port for LMTP deliveries</dt>

<dt>[local_changes_file](conf.ref.local_changes_file.php) — the file for writing local configuration changes</dt>

<dt>[local_changes_only](conf.ref.local_changes_only.php) — whether there is a file for writing local configuration changes</dt>

<dt>[mail_queue_check_vm_interval](conf.ref.mail_queue_check_vm_interval.php) — how often to apply memory management reduction on mail queues</dt>

<dt>[mailerdaemon](conf.ref.mailerdaemon.php) — set the From: address for MDNs</dt>

<dt>[mailfrom_timeout](conf.ref.mailfrom_timeout.php) — timeout after MAIL FROM</dt>

<dt>[maintainer_pool](config.ref.maintainer_pool.php) — associate a pool of event loops with mail queues, DNS lookup, and module events to use multiple threads</dt>

<dt>[malloc2mmap_threshold](conf.ref.malloc2mmap_threshold.php) — use mmap when allocations exceed this amount</dt>

<dt>[masterdb_file](conf.ref.masterdb_file.php) — specify an alternate path for the statistics permastore</dt>

<dt>[match_cache_life](conf.ref.match_cache_life.php) — set the maximum number of seconds that the match cache will be valid</dt>

<dt>[match_cache_size](conf.ref.match_cache_size.php) — the size of the cache that holds the results of looking up matching scopes</dt>

<dt>[max_deliveries_per_connection](conf.ref.max_deliveries_per_connection.php) — maximum number of messages to deliver before closing a connection</dt>

<dt>[max_dns_ttl](conf.ref.max_dns_ttl.php) — set the maximum DNS TTL</dt>

<dt>[max_outbound_connections](conf.ref.max_outbound_connections.php) — set the maximum number of outbound connections for a domain</dt>

<dt>[max_recipients_per_batch](conf.ref.max_recipients_per_batch.php) — maximum number of recipients to send in a single outbound message transaction</dt>

<dt>[max_request_size](config.max_request_size.php) — maximum size of an HTTP request</dt>

<dt>[max_resident_active_queue](conf.ref.max_resident_active_queue.php) — threshold above which messages are not held in memory</dt>

<dt>[max_resident_messages](conf.ref.max_resident_messages.php) — threshold above which messages are not held in memory</dt>

<dt>[max_resident_transfails](conf.ref.max_resident_transfails.php) — the threshold for swapping transient failures out of memory</dt>

<dt>[max_retries](conf.ref.max_retries.php) — override the system configured max_retries</dt>

<dt>[max_retry_interval](conf.ref.max_retry_interval.php) — maximum retry interval</dt>

<dt>[max_timed_events_per_iter](conf.ref.max_timed_events_per_iter.php) — the maximum numer of timed events per scheduler iteration</dt>

<dt>[mdn_failures_notify](conf.ref.mdn_failures_notify.php) — mailbox to which to send null recipient MDNs</dt>

<dt>[memory_goal](conf.ref.memory_goal.php) — configure physical memory usage goal</dt>

<dt>[memory_hwm](conf.ref.memory_hwm.php) — configure physical memory usage high-water mark</dt>

<dt>[message_expiration](conf.ref.message_expiration.php) — the time to live for messages</dt>

<dt>[migrate_connections_between_sibling_domains](conf.ref.migrate_connections_between_sibling_domains.php) — optimize connections for sibling domains</dt>

<dt>[mime_parse_large_messages_during_reception](conf.ref.mime_parse_large_messages_during_reception.php) — configure whether large messages are parsed upon reception or just in time.</dt>

<dt>[min_dns_ttl](conf.ref.min_dns_ttl.php) — override DNS TTLs smaller than this value</dt>

<dt>[mx_failures_fallback_to_a](conf.ref.mx_failures_fallback_to_a.php) — configure the maximum number of times an MX lookup will be attempted</dt>

<dt>[mx_failures_to_delay](conf.ref.mx_failures_to_delay.php) — number of consecutive failures before a domain is auto-delayed</dt>

<dt>[never_attempt_expired_messages](conf.ref.never_attempt_expired_messages.php) — Never attempt delivery of expired messages</dt>

<dt>[never_retry](conf.ref.never_retry.php) — whether or not to retry delivery of failed messages</dt>

<dt>[only_use_best_mx_for_relay_domains](conf.ref.only_use_best_mx_for_relay_domains.php) — If this is set to `true`, only the lowest numerical priority MXs are used when sending to domains listed in `bounce_domains` or `relay_domains`.</dt>

<dt>[open_relay](conf.ref.open_relay.php) — whether the MTA is an open relay or not</dt>

<dt>[open_tracking_enabled](config.open_tracking_enabled.php) — enable or disable open tracking for SMTP injections</dt>

<dt>[open_tracking_scheme](config.open_tracking_scheme.php) — set the hyperlink scheme to use for open tracking links in SMTP injections</dt>

<dt>[opendkim_sign](conf.ref.opendkim_sign.php) — whether or not to enable OpenDKIM signing</dt>

<dt>[outbound_throttle_connections](conf.ref.outbound_throttle_connections.php) — limit the rate at which connections are established</dt>

<dt>[outbound_throttle_messages](conf.ref.outbound_throttle_messages.php) — limit the rate at which messages are delivered</dt>

<dt>[pathway](conf.ref.pathway.php) — a grouping of inbound configuration options</dt>

<dt>[pathway_group](conf.ref.pathway_group.php) — a container for pathways</dt>

<dt>[pcre_cache_size](conf.ref.pcre_cache_size.php) — set the maximum size of the ec_pcre_compile cache</dt>

<dt>[pcre_cache_ttl](conf.ref.pcre_cache_ttl.php) — set the maximum TTL for the ec_pcre_compile cache</dt>

<dt>[permastore_interval](conf.ref.permastore_interval.php) — the frequency for saving various statistics</dt>

<dt>[pidfile](conf.ref.pidfile.php) — set the PID file path</dt>

<dt>[prohibited_hosts](conf.ref.prohibited_hosts.php) — prevent mail from being delivered to invalid destinations</dt>

<dt>[rcptto_timeout](conf.ref.rcptto_timeout.php) — timeout after RCPT TO</dt>

<dt>[relay_for_sending_domains](conf.ref.relay_for_sending_domains.php) — domains that may use the MTA as a relay.</dt>

<dt>[relay_domains](conf.ref.relay_domains.php) — configure the list of domains for which Momentum relays mail</dt>

<dt>[relay_hosts](conf.ref.relay_hosts.php) — configure the list of hosts for which Momentum relays mail</dt>

<dt>[remote_smtp_port](conf.ref.remote_smtp_port.php) — set the port to be used for SMTP deliveries</dt>

<dt>[require_ehlo](conf.ref.require_ehlo.php) — reject mail from clients that don't say HELO</dt>

<dt>[reserve_maintenance_interval](conf.ref.reserve_maintenance_interval.php) — how often to perform mail queue maintenance</dt>

<dt>[resolv_conf](conf.ref.resolv_conf.php) — specify a custom resolv.conf</dt>

<dt>[response_transcode_pattern](conf.ref.response_transcode_pattern.php) — the regex pattern for comparison to a server response</dt>

<dt>[response_transcode_replace](conf.ref.response_transcode_replace.php) — the replacement string for a server response</dt>

<dt>[retry_interval](conf.ref.retry_interval.php) — base retry interval</dt>

<dt>[rfc2821_allow_whitespace_in_envelope](conf.ref.rfc2821_allow_whitespace_in_envelope.php) — permit trailing whitespace before the final CRLF</dt>

<dt>[rfc2821_pedantic_address_rules](conf.ref.rfc2821_pedantic_address_rules.php) — Allow relaxation of enforcement of the rfc2821 address rules.</dt>

<dt>[rfc2822_date_header](conf.ref.rfc2822_date_header.php) — rfc2822 conformance</dt>

<dt>[rfc2822_lone_lf_in_body](conf.ref.rfc2822_lone_lf_in_body.php) — rfc2822 conformance</dt>

<dt>[rfc2822_lone_lf_in_headers](conf.ref.rfc2822_lone_lf_in_headers.php) — rfc2822 conformance</dt>

<dt>[rfc2822_max_line_length](conf.ref.rfc2822_max_line_length.php) — rfc2822 conformance</dt>

<dt>[rfc2822_max_line_length_policy](conf.ref.rfc2822_max_line_length_policy.php) — determine how non-RFC-compliant line lengths are handled</dt>

<dt>[rfc2822_messageid_header](conf.ref.rfc2822_messageid_header.php) — rfc2822 conformance</dt>

<dt>[rfc2822_missing_headers](conf.ref.rfc2822_missing_headers.php) — rfc2822 conformance</dt>

<dt>[rfc2822_trace_headers](conf.ref.rfc2822_trace_headers.php) — rfc2822 conformance</dt>

<dt>[routes](conf.ref.routes.php) — configure message routing</dt>

<dt>[rset_timeout](conf.ref.rset_timeout.php) — set the timeout after RSET</dt>

<dt>[scope_max_outbound_connections](conf.ref.scope_max_outbound_connections.php) — provide traffic shaping for outbound connections</dt>

<dt>[scheduler](conf.ref.scheduler.php) — override the default IO scheduler</dt>

<dt>[security](conf.ref.security.php) — Scope for defining which permissions are retained by which user</dt>

<dt>[send_8bitmime](conf.ref.send_8bitmime.php) — Enable advertising of 8BITMIME when sending mail</dt>

<dt>[server_max_file_descriptors](conf.ref.server_max_file_descriptors.php) — sets the maximum number of file descriptors usable by the system</dt>

<dt>[server_max_outbound_connections](conf.ref.server_max_outbound_connections.php) — sets the maximum number of outbound connections</dt>

<dt>[server_reserve_outbound_connections](conf.ref.server_reserve_outbound_connections.php) — sets the server-wide connection limit reserve</dt>

<dt>[signing_stats](conf.ref.signing_stats.php) — control how signing statistics are recorded</dt>

<dt>[siv_throttle_cache_size](conf.ref.siv_throttle_cache_size.php) — set the maximum number of named throttles</dt>

<dt>[skip_hosts](conf.ref.skip_hosts.php) — skip the specified host, but consider other hosts in the domain</dt>

<dt>[SNMP](conf.ref.snmp.php) — Simple Network Management Protocol Support</dt>

<dt>[soft_bounce_drain_rate](conf.ref.soft_bounce_drain_rate.php) — how many soft bounces to place into the mail queues in a single scheduler iteration</dt>

<dt>[spool_mode](conf.ref.spool_mode.php) — set the file mode for newly created spool files</dt>

<dt>[spoolbase](conf.ref.spoolbase.php) — set the base directory for the spool</dt>

<dt>[ssl_lock_method](config.ssl_lock_method.php) — the SSL lock method</dt>

<dt>[starttls_injection_policy](config.starttls_injection_policy.php) — protect against SMTP injections prior to TLS</dt>

<dt>[supplemental_groups](conf.ref.supplemental_groups.php) — security: supplemental groups to assume after startup</dt>

<dt>[suspend_delivery](conf.ref.suspend_delivery.php) — prevent outbound mail delivery</dt>

<dt>[tcp_buffer_size](conf.ref.tcp_buffer_size.php) — maximum tcp buffer size for outbound connections</dt>

<dt>[threadpool](conf.ref.threadpool.php) — configure thread pool specific options</dt>

<dt>[timestampformat](conf.ref.timestampformat.php) — set the timestamp format used when logging to stderr</dt>

<dt>[tls](config.ref.tls.php) — determine whether to use TLS connection for outbound mail</dt>

<dt>[tls_allow_renegotiation](config.tls_allow_renegotiation.php) — determine whether to enable TLS renegotiation</dt>

<dt>[tls_ca](config.tls_ca.php) — certificate authority for outbound mail</dt>

<dt>[tls_certificate](config.tls_certificate.php) — certificate to use for inbound and outbound mail</dt>

<dt>[tls_ciphers](config.tls_ciphers.php) — specify allowable ciphers for TLS inbound and outbound sessions</dt>

<dt>[tls_client_ca](config.tls_client_ca.php) — certificate authority for inbound mail</dt>

<dt>[tls_dhparams_file](conf.ref.tls_dhparams_file.php) — specifies the file of Diffie Hellman (DHE) parameters that add per-session randomness to the encryption. Default parameters are built in the product if none are specified.</dt>

<dt>[tls_enable_dhe_ciphers](conf.ref.tls_enable_dhe_ciphers.php) — controls whether or not Diffie Hellman (DHE) ciphers are available</dt>

<dt>[tls_engine](config.tls_engine.php) — specify the TLS library to use</dt>

<dt>[tls_ifavailable_fallback](config.tls_ifavailable_fallback.php) — determine the behavior if TLS negotiation fails</dt>

<dt>[tls_key](config.tls_key.php) — TLS key to use for outbound or inbound mail</dt>

<dt>[tls_protocols](config.tls_protocols.php) — allowable ciphers for TLS inbound and outbound sessions</dt>

<dt>[tls_verified_peer_is_authorized](config.tls_verified_peer_is_authorized.php) — Marks requests that use a verified SSL Client certificate as being authorized</dt>

<dt>[tls_verify](config.tls_verify.php) — specify how to handle the remote presented certificate</dt>

<dt>[tls_verify_mode](config.tls_verify_mode.php) — determine whether a TLS certificate is required</dt>

<dt>[trace_smtp_mode](conf.ref.trace_smtp_mode.php) — set the default permissions of trace files</dt>

<dt>[tracking_domain](config.tracking_domain.php) — set the tracking domain to use for engagement tracking in SMTP injections</dt>

<dt>[tracking_link_expiry](config.tracking_link_expiry.php) — set the expiration time for engagement tracking for SMTP injections</dt>

<dt>[transfail_drain_rate](conf.ref.transfail_drain_rate.php) — the maximum number of messages to pop off the transient failure queue in a single scheduler iteration</dt>

<dt>[transform_8bitmime_content](conf.ref.transform_8bitmime_content.php) — Enable 8BITMIME downconversion when sending mail</dt>

<dt>[umem_reap_interval](conf.ref.umem_reap_interval.php) — how often to release unused memory</dt>

<dt>[unlink_on_spool_in_failure](conf.ref.unlink_on_spool_in_failure.php) — Whether or not to remove malformed messages</dt>

<dt>[_unsafe_spool](conf.ref.unsafe_spool.php) — allow dangerous spool semantics to be used</dt>

<dt>[use_iflist_cache](conf.ref.use_iflist_cache.php) — Whether or not to cache the list of network interfaces configured by the system</dt>

<dt>[use_ipv6](conf.ref.use_ipv6.php) — Affects the selection of IPv6 hosts in the SMTP client</dt>

<dt>[use_mmap](conf.ref.use_mmap.php) — use mmap when spooling messages from disk</dt>

<dt>[use_sendfile](conf.ref.use_sendfile.php) — use sendfile() when sending mail</dt>

<dt>[user](conf.ref.user.php) — security: user identity to assume after startup</dt>

<dt>[xclient](conf.ref.xclient.php) — use the xclient extension to SMTP for outbound mail</dt>

</dl>

This chapter provides the definitions of the configuration options for the configuration files that are referenced in this document.

Most options that are common to Momentum 4 and Momentum 3 are documented in the Momentum 3.x Reference Manual. See the [Chapter 66, *Configuration Options Summary*](config.options.summary.php "Chapter 66. Configuration Options Summary") .
