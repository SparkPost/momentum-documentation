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

| Chapter 18. Hooks in the core scope |
| [Prev](extending.C.genref.send_command.php)  | Part III. Extending Momentum |  [Next](extending.hooks.core.__mail_queue_maintain.php) |

## Chapter 18. Hooks in the core scope

**Table of Contents**

<dl class="toc">

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

| [Prev](extending.C.genref.send_command.php)  | [Up](p.extending.php) |  [Next](extending.hooks.core.__mail_queue_maintain.php) |
| send_command  | [Table of Contents](index.php) |  __mail_queue_maintain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)