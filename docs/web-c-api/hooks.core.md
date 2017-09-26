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

| Chapter 60. Hooks in the core scope |
| [Prev](hooks.cluster.update_trans_metrics.php)  | Part III. Hooks |  [Next](hooks.core.__mail_queue_maintain.php) |

## Chapter 60. Hooks in the core scope

**Table of Contents**

<dl class="toc">

<dt>[__mail_queue_maintain](hooks.core.__mail_queue_maintain.php)</dt>

<dt>[aaa_log](hooks.core.aaa_log.php)</dt>

<dt>[annotate_batch](hooks.core.annotate_batch.php) — Allow a module to assume responsibility for batch annotation</dt>

<dt>[assess_batch](hooks.core.assess_batch.php) — Allow a module to assume responsibility for batch assessment</dt>

<dt>[binding_group_choose_binding](hooks.core.binding_group_choose_binding.php)</dt>

<dt>[body_modify](hooks.core.body_modify.php)</dt>

<dt>[bounce_error_classify](hooks.core.bounce_error_classify.php)</dt>

<dt>[cache_get](hooks.core.cache_get.php)</dt>

<dt>[cache_set](hooks.core.cache_set.php)</dt>

<dt>[check_outbound_conn_throttle](hooks.core.check_outbound_conn_throttle.php)</dt>

<dt>[check_outbound_mess_throttle](hooks.core.check_outbound_mess_throttle.php)</dt>

<dt>[config_get_domain_relay](hooks.core.config_get_domain_relay.php)</dt>

<dt>[config_fetch_domain_routes](hooks.core.config_fetch_domain_routes.php) — Override the routes setting</dt>

<dt>[config_get_domain_host_failure_retry](hooks.auto.config_get_domain_host_failure_retry.php) — Determine whether there should be another delivery attempt</dt>

<dt>[config_get_message_routing_domain](hooks.core.config_get_message_routing_domain.php) — Determine where to place a message</dt>

<dt>[config_option_post_set](hooks.core.config_option_post_set.php)</dt>

<dt>[config_option_pre_set](hooks.core.config_option_pre_set.php)</dt>

<dt>[connection_goal](hooks.core.connection_goal.php)</dt>

<dt>[connection_post_bind](hooks.core.connection_post_bind.php)</dt>

<dt>[control_allow_writable_config](hooks.core.control_allow_writable_config.php)</dt>

<dt>[control_allow_writable_config2](hooks.core.control_allow_writable_config2.php)</dt>

<dt>[control_post_command](hooks.core.control_post_command.php)</dt>

<dt>[control_post_control](hooks.core.control_post_control.php)</dt>

<dt>[control_pre_command](hooks.core.control_pre_command.php) — This hook point occurs prior to the execution of a console command</dt>

<dt>[control_shutdown](hooks.core.control_shutdown.php)</dt>

<dt>[control_shutdown_ex](hooks.core.control_shutdown_ex.php) — Invoked when shutdown occurs</dt>

<dt>[dec_inbound_connections](hooks.core.dec_inbound_connections.php)</dt>

<dt>[dec_outbound_connections](hooks.core.dec_outbound_connections.php)</dt>

<dt>[disk_queue_core_inject](hooks.core.disk_queue_core_inject.php)</dt>

<dt>[dns_get_As](hooks.core.dns_get_As.php)</dt>

<dt>[dns_get_MXs](hooks.core.dns_get_MXs.php)</dt>

<dt>[domain_requires_master_scheduler](hooks.core.domain_requires_master_scheduler.php)</dt>

<dt>[ec_bag_find](hooks.core.ec_bag_find.php)</dt>

<dt>[ec_message_enqueue](hooks.core.ec_message_enqueue.php) — This hook is called whenever a message is passed to the `ec_message_enqueue` API</dt>

<dt>[ec_message_mcmt_fixup](hooks.core.ec_message_mcmt_fixup.php)</dt>

<dt>[ec_message_mcmt_pre_fixup](hooks.core.ec_message_mcmt_pre_fixup.php)</dt>

<dt>[ec_message_part_get_content_type](hooks.core.ec_message_part_get_content_type.php)</dt>

<dt>[ec_message_set_next_attempt](hooks.core.ec_message_set_next_attempt.php) — Allows modules to set the next attempt time of a message</dt>

<dt>[ec_mime_component_extract_content_type](hooks.core.ec_mime_component_extract_content_type.php)</dt>

<dt>[ec_ssl_SSL_CTX_fixup](hooks.core.ec_ssl_SSL_CTX_fixup.php) — This hook provides an opportunity for modules to alter the context and add passphrase callbacks via OpenSSL functions</dt>

<dt>[esmtp_message_sp_async_samfunc](hooks.core.esmtp_message_sp_async_samfunc.php)</dt>

<dt>[final_validation](hooks.core.final_validation.php) — This hook is invoked after the normal validation steps</dt>

<dt>[gauge_cache_manip](hooks.core.gauge_cache_manip.php)</dt>

<dt>[generate_bounces](hooks.core.generate_bounces.php)</dt>

<dt>[generate_rfc3464_message](hooks.core.generate_rfc3464_message.php)</dt>

<dt>[generate_rfc3464_message_preamble](hooks.core.generate_rfc3464_message_preamble.php)</dt>

<dt>[generate_soft_bounce_message](hooks.core.generate_soft_bounce_message.php)</dt>

<dt>[generate_soft_bounce_message_preamble](hooks.core.generate_soft_bounce_message_preamble.php)</dt>

<dt>[get_inbound_tls_parameters](hooks.core.get_inbound_tls_parameters.php) — Allows implementors to override and control the usage of TLS on a per-message basis when accepting mail into the system</dt>

<dt>[get_msg_expiration_params](hooks.core.get_msg_expiration_params.php) — Allows modules to customize the expiration parameters on a per-message basis</dt>

<dt>[get_outbound_tls_parameters](hooks.core.get_outbound_tls_parameters.php) — Allows implementors to override and control the usage of TLS on a per-message basis when delivering mail out of the system</dt>

<dt>[get_protocol_string_for_trace_headers](hooks.core.get_protocol_string_for_trace_headers.php)</dt>

<dt>[get_received_header_text](hooks.core.get_received_header_text.php) — Use this hook to set the text of the `Received` header in a message</dt>

<dt>[inbound_smtp_tls_verify_callback](hooks.core.inbound_smtp_tls_verify_callback.php)</dt>

<dt>[inc_inbound_connections](hooks.core.inc_inbound_connections.php)</dt>

<dt>[inc_outbound_conn_throttle](hooks.core.inc_outbound_conn_throttle.php)</dt>

<dt>[inc_outbound_connections](hooks.core.inc_outbound_connections.php)</dt>

<dt>[inc_outbound_mess_throttle](hooks.core.inc_outbound_mess_throttle.php)</dt>

<dt>[is_adaptive_scope_global](hooks.core.is_adaptive_scope_global.php)</dt>

<dt>[log_attempt_v1](hooks.core.log_attempt_v1.php) — Register a function with this hook whenever a message attempt event should be logged</dt>

<dt>[log_client_connection_failure](hooks.core.log_client_connection_failure.php) — Register a function with this hook that will be invoked whenever an outbound connection attempt fails</dt>

<dt>[log_client_connection_success](hooks.core.log_client_connection_success.php) — Register a function with this hook that will be invoked whenever an outbound connection attempt succeeds</dt>

<dt>[log_delivery_v1](hooks.core.log_delivery_v1.php) — Register a function with this hook whenever a delivery event should be logged.</dt>

<dt>[log_error](hooks.core.log_error.php)</dt>

<dt>[log_permanent_failure_v1](hooks.core.log_permanent_failure_v1.php) — Register a function with this hook whenever a permanent failure event should be logged.</dt>

<dt>[log_reception_v1](hooks.core.log_reception_v1.php) — Register a function with this hook whenever a reception event should be logged.</dt>

<dt>[log_rejection](hooks.core.log_rejection.php) — Register a function with this hook that will be called whenever a logging event due to message rejection occurs</dt>

<dt>[log_reopen](hooks.core.log_reopen.php) — This is invoked when "reopen logs" is issued though ec_console.</dt>

<dt>[log_spool_import](hooks.core.log_spool_import.php)</dt>

<dt>[log_transient_failure_v1](hooks.core.log_transient_failure_v1.php) — Register a function with this hook whenever a transient failure event should be logged.</dt>

<dt>[mail_queue_get_next_active](hooks.core.mail_queue_get_next_active.php)</dt>

<dt>[mail_queue_insert_active](hooks.core.mail_queue_insert_active.php)</dt>

<dt>[mail_queue_maintain_domain](hooks.core.mail_queue_maintain_domain.php)</dt>

<dt>[mailq_get_next_active](hooks.core.mailq_get_next_active.php)</dt>

<dt>[mailq_insert_active](hooks.core.mailq_insert_active.php)</dt>

<dt>[message_body_in_core](hooks.core.message_body_in_core.php)</dt>

<dt>[outbound_smtp_tls_verify_callback](hooks.core.outbound_smtp_tls_verify_callback.php) — This hook allows you to augment the built-in TLS verification process for outbound SMTP sessions.</dt>

<dt>[outbound_tls_ca](hooks.core.outbound_tls_ca.php)</dt>

<dt>[outbound_tls_cert](hooks.core.outbound_tls_cert.php)</dt>

<dt>[outbound_tls_ciphers](hooks.core.outbound_tls_ciphers.php)</dt>

<dt>[outbound_tls_key](hooks.core.outbound_tls_key.php)</dt>

<dt>[outbound_tls_verify](hooks.core.outbound_tls_verify.php)</dt>

<dt>[post_assemble_fwd_message](hooks.core.post_assemble_fwd_message.php)</dt>

<dt>[post_config_commit](hooks.core.post_config_commit.php)</dt>

<dt>[post_dns_handle_a](hooks.core.post_dns_handle_a.php)</dt>

<dt>[post_dns_handle_mx](hooks.core.post_dns_handle_mx.php)</dt>

<dt>[post_drop_privileges](hooks.core.post_drop_privileges.php)</dt>

<dt>[post_event_read](hooks.core.post_event_read.php)</dt>

<dt>[post_event_write](hooks.core.post_event_write.php)</dt>

<dt>[post_generate_rfc3464_message](hooks.core.post_generate_rfc3464_message.php)</dt>

<dt>[post_generate_soft_bounce_message](hooks.core.post_generate_soft_bounce_message.php)</dt>

<dt>[post_initiate_connection_smtp](hooks.core.post_initiate_connection_smtp.php)</dt>

<dt>[post_mail_queue_maintain_domain](hooks.core.post_mail_queue_maintain_domain.php)</dt>

<dt>[post_read_smtp](hooks.core.post_read_smtp.php) — This hook is invoked immediately following data that has been read from the remote server during an **outbound** SMTP connection.</dt>

<dt>[post_smtp_command](hooks.core.post_smtp_command.php)</dt>

<dt>[post_swap_in_meta](hooks.core.post_swap_in_meta.php) — Allows modules to perform actions immediately after the metadata file has been read from the spool. This hook is called even when the metadata fetch fails.</dt>

<dt>[post_validate_data_spool_each_rcpt_v1](hooks.core.post_validate_data_spool_each_rcpt_v1.php)</dt>

<dt>[post_validate_set_binding](hooks.core.post_validate_set_binding.php)</dt>

<dt>[pre_console_release](hooks.core.pre_console_release.php)</dt>

<dt>[pre_dns_handle_a](hooks.core.pre_dns_handle_a.php)</dt>

<dt>[pre_dns_handle_mx](hooks.core.pre_dns_handle_mx.php)</dt>

<dt>[pre_drop_privileges](hooks.core.pre_drop_privileges.php)</dt>

<dt>[pre_ec_can_relay_to](hooks.core.pre_ec_can_relay_to.php)</dt>

<dt>[pre_esmtp_auth](hooks.core.pre_esmtp_auth.php)</dt>

<dt>[pre_event_close](hooks.core.pre_event_close.php)</dt>

<dt>[pre_mail_queue_maintain_domain](hooks.core.pre_mail_queue_maintain_domain.php)</dt>

<dt>[pre_mail_queue_message_requeue](hooks.core.pre_mail_queue_message_requeue.php)</dt>

<dt>[pre_mailq_message_requeue](hooks.core.pre_mailq_message_requeue.php) — Invoked immediately prior to a message requeue action caused by a delivery failure.</dt>

<dt>[pre_read_smtp](hooks.core.pre_read_smtp.php)</dt>

<dt>[pre_swap_out_meta](hooks.core.pre_swap_out_meta.php)</dt>

<dt>[premigrate_outbound_connection](hooks.core.premigrate_outbound_connection.php)</dt>

<dt>[rfc3464_inline_message_fragment](hooks.core.rfc3464_inline_message_fragment.php)</dt>

<dt>[server_esmtp_session_abort](hooks.core.server_esmtp_session_abort.php)</dt>

<dt>[set_delayed_queue_event](hooks.core.set_delayed_queue_event.php)</dt>

<dt>[smtp_client_mailfrom_args](hooks.core.smtp_client_mailfrom_args.php)</dt>

<dt>[smtp_client_rcptto_args](hooks.core.smtp_client_rcptto_args.php)</dt>

<dt>[smtp_client_xclient_args](hooks.core.smtp_client_xclient_args.php)</dt>

<dt>[smtp_error_classify](hooks.core.smtp_error_classify.php)</dt>

<dt>[smtp_should_session_shutdown](hooks.core.smtp_should_session_shutdown.php) — Determine whether an SMTP session should be shut down</dt>

<dt>[swap_out_multi](hooks.core.swap_out_multi.php) — Override or augment the internal call to swap_out_multi</dt>

<dt>[sys_init](hooks.core.sys_init.php)</dt>

<dt>[use_outbound_tls](hooks.core.use_outbound_tls.php)</dt>

<dt>[validate_accept](hooks.core.validate_accept.php)</dt>

<dt>[validate_auth](hooks.core.validate_auth.php)</dt>

<dt>[validate_connect](hooks.core.validate_connect.php)</dt>

<dt>[validate_data_spool_each_rcpt](hooks.core.validate_data_spool_each_rcpt.php) — This hook is invoked after the normal `validate_data_spool_each_rcpt` module callback.</dt>

<dt>[validate_expand_string](hooks.core.validate_expand_string.php)</dt>

<dt>[veto_host_connection](hooks.core.veto_host_connection.php)</dt>

</dl>

| [Prev](hooks.cluster.update_trans_metrics.php)  | [Up](hooks.php) |  [Next](hooks.core.__mail_queue_maintain.php) |
| update_trans_metrics  | [Table of Contents](index.php) |  __mail_queue_maintain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)