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

| Part III. Extending Momentum |
| [Prev](sieve.ref.vctx_mess_set.php)  |   |  [Next](c.sdk.php) |

## Part III. Extending Momentum

**Table of Contents**

<dl class="toc">

<dt>[16\. Extending Momentum using C](c.sdk.php)</dt>

<dd>

<dl>

<dt>[16.1\. Momentum Data Structures](extending.structures.php)</dt>

<dt>[16.2\. The Module](extending.module.php)</dt>

<dt>[16.3\. Extensible Logging Infrastructure](extending.logging.php)</dt>

<dt>[16.4\. Extensible IO Infrastructure](extending.io.php)</dt>

<dt>[16.5\. Extensible Validation Infrastructure](extending.validation.php)</dt>

<dt>[16.6\. Registerable Hooks](extending.hooks.php)</dt>

<dt>[16.7\. Extending Sieve](extending.sieve.php)</dt>

</dl>

</dd>

<dt>[17\. C API Reference](extending.C.ref.php)</dt>

<dd>

<dl>

<dt>[hooks](extending.C.ref.declare_hook.php) — runtime hooking</dt>

<dt>[ec_cache](extending.C.ref.ec_cache.php) — generic caching facility</dt>

<dt>[events](extending.C.ref.events.php) — The IO Event system</dt>

<dt>[pcre_cache](extending.C.ref.pcre_cache.php) — pcre caching facility</dt>

<dt>[timed events](extending.C.ref.timed-events.php) — Timed Events</dt>

<dt>[API_EXPORT](extending.C.genref.API_EXPORT.php) — releases resources held in an event_io_state structure.</dt>

<dt>[cli_conn](extending.C.genref.cli_conn.php) — Establish an ec_console control connection.</dt>

<dt>[connection_used_for_email_message](extending.C.genref.connection_used_for_email_message.php)</dt>

<dt>[controls_func_cc](extending.C.genref.controls_func_cc.php)</dt>

<dt>[dict_serialize](extending.C.genref.dict_serialize.php) — Serialize a dictionary, for writing to disk or network.</dt>

<dt>[dict_unserialize](extending.C.genref.dict_unserialize.php) — Deserialize a dictionary.</dt>

<dt>[dns_add_mx_nodata](extending.C.genref.dns_add_mx_nodata.php)</dt>

<dt>[dns_cache_free_node](extending.C.genref.dns_cache_free_node.php) — Release a reference on a dns cache node.</dt>

<dt>[dns_cache_lookup](extending.C.genref.dns_cache_lookup.php) — Check to see if the results for a given query are in the DNS cache.</dt>

<dt>[dns_cache_lookup_wait](extending.C.genref.dns_cache_lookup_wait.php) — Perform a blocking DNS lookup, utilizing the cache.</dt>

<dt>[dns_cache_submit](extending.C.genref.dns_cache_submit.php) — Submit a query to the dns cache.</dt>

<dt>[dns_cache_submit2](extending.C.genref.dns_cache_submit2.php) — Submit a query to the dns cache.</dt>

<dt>[dns_cache_submit3](extending.C.genref.dns_cache_submit3.php) — Submit a query to the dns cache, asking an alternative ares channel.</dt>

<dt>[ec_bag_addref](extending.C.genref.ec_bag_addref.php) — add a reference to the bag.</dt>

<dt>[ec_bag_create](extending.C.genref.ec_bag_create.php) — create a bag.</dt>

<dt>[ec_bag_delref](extending.C.genref.ec_bag_delref.php) — delete a reference to the bag.</dt>

<dt>[ec_bag_empty](extending.C.genref.ec_bag_empty.php) — empty out the bag.</dt>

<dt>[ec_bag_find](extending.C.genref.ec_bag_find.php) — Find something in the bag.</dt>

<dt>[ec_bag_get](extending.C.genref.ec_bag_get.php) — get a specific something out of the bag.</dt>

<dt>[ec_bag_put](extending.C.genref.ec_bag_put.php) — put something in the bag.</dt>

<dt>[ec_bag_remove](extending.C.genref.ec_bag_remove.php) — remove a specific something from the bag.</dt>

<dt>[ec_control_context_append](extending.C.genref.ec_control_context_append.php)</dt>

<dt>[ec_control_context_free_list](extending.C.genref.ec_control_context_free_list.php)</dt>

<dt>[ec_control_context_next](extending.C.genref.ec_control_context_next.php)</dt>

<dt>[ec_control_context_set_type](extending.C.genref.ec_control_context_set_type.php)</dt>

<dt>[ec_control_get_command_construct](extending.C.genref.ec_control_get_command_construct.php) — gets the command_construct for the currently dispatched session.</dt>

<dt>[ec_control_register_command](extending.C.genref.ec_control_register_command.php)</dt>

<dt>[ec_control_register_type](extending.C.genref.ec_control_register_type.php)</dt>

<dt>[ec_control_send_command](extending.C.genref.ec_control_send_command.php) — Send a command over an ec_console control connection.</dt>

<dt>[ec_message_addref](extending.C.genref.ec_message_addref.php) — Create a reference to an existing message.</dt>

<dt>[ec_message_assemble_to_legacy_email_message](extending.C.genref.ec_message_assemble_to_legacy_email_message.php) — glue the parts back together into an in-memory email_message.</dt>

<dt>[ec_message_blobject_get](extending.C.genref.ec_message_blobject_get.php) — Retrieve a blobject tag.</dt>

<dt>[ec_message_blobject_remove](extending.C.genref.ec_message_blobject_remove.php) — Remove a blobject tag.</dt>

<dt>[ec_message_blobject_store](extending.C.genref.ec_message_blobject_store.php) — tag a message with a blobject</dt>

<dt>[ec_message_builder](extending.C.genref.ec_message_builder.php) — Convenience routine for building messages in a blocking fashion.</dt>

<dt>[ec_message_change_binding_slot](extending.C.genref.ec_message_change_binding_slot.php) — Set the binding for a message.</dt>

<dt>[ec_message_context_clean](extending.C.genref.ec_message_context_clean.php) — Cleans the appropriate per-message dictionary.</dt>

<dt>[ec_message_context_delete](extending.C.genref.ec_message_context_delete.php) — Delete a key/value pair from the appropriate per-message dictionary.</dt>

<dt>[ec_message_context_discard](extending.C.genref.ec_message_context_discard.php) — Discards the per-message dictionaries; they will be re-fetched on demand.</dt>

<dt>[ec_message_context_exists](extending.C.genref.ec_message_context_exists.php) — Return true if the provided key exists in the appropriate per-message dictionary.</dt>

<dt>[ec_message_context_exists_and_get](extending.C.genref.ec_message_context_exists_and_get.php) — Return true if the provided key exists in the appropriate per-message dictionary.</dt>

<dt>[ec_message_context_firstkey](extending.C.genref.ec_message_context_firstkey.php) — Returns a pointer to the first key in the appropriate per-message dictionary, NULL if the dictionary is empty.</dt>

<dt>[ec_message_context_get](extending.C.genref.ec_message_context_get.php) — Returns a pointer to the value for the provided key in the appropriate per-message dictionary, otherwise it returns an empty string.</dt>

<dt>[ec_message_context_nextkey](extending.C.genref.ec_message_context_nextkey.php) — Returns a pointer to the 'next' key in the appropriate per-message dictionary, NULL if there are no more keys.</dt>

<dt>[ec_message_context_set](extending.C.genref.ec_message_context_set.php) — Store a key/value pair in the appropriate per-message dictionary.</dt>

<dt>[ec_message_context_size](extending.C.genref.ec_message_context_size.php) — Returns the size of the appropriate per-message dictionary.</dt>

<dt>[ec_message_copy](extending.C.genref.ec_message_copy.php) — Create a copy of an existing message.</dt>

<dt>[ec_message_cowref](extending.C.genref.ec_message_cowref.php) — Create a copy-on-write reference to an existing message.</dt>

<dt>[ec_message_extract_part_to_string](extending.C.genref.ec_message_extract_part_to_string.php) — Extract a message part to a string, decoding transfer encoding.</dt>

<dt>[ec_message_get_body_fd_for_mmap](extending.C.genref.ec_message_get_body_fd_for_mmap.php) — Requests the file descriptor from the IO layer for the purpose of memory mapping.</dt>

<dt>[ec_message_get_body_io_object](extending.C.genref.ec_message_get_body_io_object.php) — Requests an io_object from the IO layer.</dt>

<dt>[ec_message_get_code](extending.C.genref.ec_message_get_code.php) — fetches the code set for the message.</dt>

<dt>[ec_message_get_envelope](extending.C.genref.ec_message_get_envelope.php) — Returns information from the envelope of the message.</dt>

<dt>[ec_message_get_first_part](extending.C.genref.ec_message_get_first_part.php) — Returns the top level mime part from the message.</dt>

<dt>[ec_message_get_mailfrom](extending.C.genref.ec_message_get_mailfrom.php) — returns the entire protocol decorated mailfrom string.</dt>

<dt>[ec_message_get_message_memory](extending.C.genref.ec_message_get_message_memory.php) — Returns a pointer to the message memory.</dt>

<dt>[ec_message_get_message_size](extending.C.genref.ec_message_get_message_size.php) — Returns the message size.</dt>

<dt>[ec_message_get_rcptto](extending.C.genref.ec_message_get_rcptto.php) — returns the entire protocol decorated rcptto string.</dt>

<dt>[ec_message_is_large](extending.C.genref.ec_message_is_large.php) — Indicates if a message is large.</dt>

<dt>[ec_message_new](extending.C.genref.ec_message_new.php) — Create a new message.</dt>

<dt>[ec_message_parse_and_set_memory_buffer](extending.C.genref.ec_message_parse_and_set_memory_buffer.php) — This API is semantically equivalent to the following: int ret = ec_message_parse(mess, mem, len, 1); ec_message_set_io_object(mess, io_wrapper_open_memory(mem, len, .</dt>

<dt>[ec_message_parser_defaults](extending.C.genref.ec_message_parser_defaults.php) — Obtain message parsing/validation defaults.</dt>

<dt>[ec_message_parser_strerror](extending.C.genref.ec_message_parser_strerror.php) — Returns a readable representation of a message parsing error code.</dt>

<dt>[ec_message_part_extract](extending.C.genref.ec_message_part_extract.php) — Prepare to extract a message part in a streaming fashion.</dt>

<dt>[ec_message_part_get_content_type](extending.C.genref.ec_message_part_get_content_type.php) — Returns the content type and charset for a given part.</dt>

<dt>[ec_message_part_touch](extending.C.genref.ec_message_part_touch.php) — Flags a message part as being modified.</dt>

<dt>[ec_message_refetch_meta](extending.C.genref.ec_message_refetch_meta.php) — refetch extended meta information from the spool</dt>

<dt>[ec_message_register_parser](extending.C.genref.ec_message_register_parser.php) — Replaces the core message parser.</dt>

<dt>[ec_message_release_body_io_object](extending.C.genref.ec_message_release_body_io_object.php) — Releases the body io_object.</dt>

<dt>[ec_message_render_headers_to_string](extending.C.genref.ec_message_render_headers_to_string.php) — renders the headers of the first part of a message to a string.</dt>

<dt>[ec_message_render_meta_to_string](extending.C.genref.ec_message_render_meta_to_string.php) — Renders meta information about the message to a string.</dt>

<dt>[ec_message_render_part_headers_to_string](extending.C.genref.ec_message_render_part_headers_to_string.php) — Render the headers of a message part to a string.</dt>

<dt>[ec_message_render_part_to_string](extending.C.genref.ec_message_render_part_to_string.php) — Render a message part to a string.</dt>

<dt>[ec_message_render_to_string](extending.C.genref.ec_message_render_to_string.php) — renders a message, swapping it in if needed.</dt>

<dt>[ec_message_select_binding_by_group](extending.C.genref.ec_message_select_binding_by_group.php) — Select a binding from a binding group.</dt>

<dt>[ec_message_set__object](extending.C.genref.ec_message_set__object.php) — set the _object for a message, maintaining appropriate accounting.</dt>

<dt>[ec_message_set_envelope](extending.C.genref.ec_message_set_envelope.php) — Sets envelope information for the message.</dt>

<dt>[ec_message_set_first_part](extending.C.genref.ec_message_set_first_part.php) — Accessor for changing the top level mime part for a message.</dt>

<dt>[ec_message_set_mailfrom](extending.C.genref.ec_message_set_mailfrom.php) — sets the entire protocol decorated mailfrom string.</dt>

<dt>[ec_message_set_next_attempt](extending.C.genref.ec_message_set_next_attempt.php) — Determines and sets the next attempt time for the message.</dt>

<dt>[ec_message_set_rcptto](extending.C.genref.ec_message_set_rcptto.php) — sets the entire protocol decorated rcptto string.</dt>

<dt>[ec_message_snapshot](extending.C.genref.ec_message_snapshot.php) — Create a snapshot of an existing message.</dt>

<dt>[ec_message_swap_in](extending.C.genref.ec_message_swap_in.php) — causes the message content to be read in from disk.</dt>

<dt>[ec_message_swap_out](extending.C.genref.ec_message_swap_out.php) — cause a message to be written to disk.</dt>

<dt>[ec_message_swap_out_meta](extending.C.genref.ec_message_swap_out_meta.php) — cause message meta data to be written to disk.</dt>

<dt>[ec_message_unlink_on_free](extending.C.genref.ec_message_unlink_on_free.php) — Arranges for the message to be unlinked from spool when its refcount falls to zero.</dt>

<dt>[ec_messagescope_query](extending.C.genref.ec_messagescope_query.php) — Query for reputation record.</dt>

<dt>[ec_ssl_set_ctx_param](extending.C.genref.ec_ssl_set_ctx_param.php) — sets an ec_ssl_ctx_param member.</dt>

<dt>[ec_ssl_set_ctx_verify_mode](extending.C.genref.ec_ssl_set_ctx_verify_mode.php) — sets the tls_verify ec_ssl_ctx_param member.</dt>

<dt>[ec_ssl_set_verify_errmsg](extending.C.genref.ec_ssl_set_verify_errmsg.php) — set the verify error message and code.</dt>

<dt>[ec_thread_pool_auto_shrink](extending.C.genref.ec_thread_pool_auto_shrink.php) — set a thread pool to auto shrink.</dt>

<dt>[ec_thread_pool_defer_spawn](extending.C.genref.ec_thread_pool_defer_spawn.php) — set a thread pool to defer thread creation.</dt>

<dt>[ec_thread_pool_set_backlog](extending.C.genref.ec_thread_pool_set_backlog.php) — set the maximum backlog for an existing thread pool.</dt>

<dt>[ec_thread_pool_set_stack_size](extending.C.genref.ec_thread_pool_set_stack_size.php) — set the stack size for an existing thread pool.</dt>

<dt>[echash_track_versioning](extending.C.genref.echash_track_versioning.php) — Enable versioning on a hash table.</dt>

<dt>[jlog_file_close](extending.C.genref.jlog_file_close.php) — closes a jlog_file</dt>

<dt>[jlog_file_lock](extending.C.genref.jlog_file_lock.php) — exclusively locks a jlog_file against other processes and threads</dt>

<dt>[jlog_file_map_read](extending.C.genref.jlog_file_map_read.php) — maps the entirety of a jlog_file into memory for reading</dt>

<dt>[jlog_file_open](extending.C.genref.jlog_file_open.php) — opens a jlog_file</dt>

<dt>[jlog_file_pread](extending.C.genref.jlog_file_pread.php) — preads from a jlog_file, retries EINTR</dt>

<dt>[jlog_file_pwrite](extending.C.genref.jlog_file_pwrite.php) — pwrites to a jlog_file, retries EINTR</dt>

<dt>[jlog_file_size](extending.C.genref.jlog_file_size.php) — gives the size of a jlog_file</dt>

<dt>[jlog_file_sync](extending.C.genref.jlog_file_sync.php) — calls fdatasync (if avalable) or fsync on the underlying filehandle</dt>

<dt>[jlog_file_truncate](extending.C.genref.jlog_file_truncate.php) — truncates a jlog_file, retries EINTR</dt>

<dt>[jlog_file_unlock](extending.C.genref.jlog_file_unlock.php) — unlocks a jlog_file</dt>

<dt>[jlog_idx_details](extending.C.genref.jlog_idx_details.php) — fetches the last marker in the index and the closedness thereof</dt>

<dt>[jlog_inspect_datafile](extending.C.genref.jlog_inspect_datafile.php) — prints detailed info about the log segment to stderr</dt>

<dt>[jlog_repair_datafile](extending.C.genref.jlog_repair_datafile.php) — repairs a damaged datafile</dt>

<dt>[msc_thread_id](extending.C.genref.msc_thread_id.php) — Generate a thread_id according the following format: [msg_id in spool name format]::[node name]:[suffix].</dt>

<dt>[register_smtp_client_state](extending.C.genref.register_smtp_client_state.php) — Register a custom state in the SMTP client state machine.</dt>

<dt>[run_command](extending.C.genref.run_command.php)</dt>

<dt>[run_command2](extending.C.genref.run_command2.php) — Execute the console command referenced by a command_construct.</dt>

<dt>[send_command](extending.C.genref.send_command.php) — Send a command over an ec_console control connection.</dt>

</dl>

</dd>

<dt>[18\. Hooks in the core scope](extending.hooks.core.php)</dt>

<dd>

<dl>

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

</dd>

<dt>[19\. Hooks in the checklist scope](extending.hooks.checklist.php)</dt>

<dd>

<dl>

<dt>[add_address](extending.hooks.checklist.add_address.php)</dt>

<dt>[add_ip](extending.hooks.checklist.add_ip.php)</dt>

<dt>[add_user_address](extending.hooks.checklist.add_user_address.php)</dt>

<dt>[add_user_ip](extending.hooks.checklist.add_user_ip.php)</dt>

<dt>[check_address](extending.hooks.checklist.check_address.php)</dt>

<dt>[check_ip](extending.hooks.checklist.check_ip.php)</dt>

<dt>[check_user_address](extending.hooks.checklist.check_user_address.php)</dt>

<dt>[check_user_ip](extending.hooks.checklist.check_user_ip.php)</dt>

<dt>[remove_address](extending.hooks.checklist.remove_address.php)</dt>

<dt>[remove_ip](extending.hooks.checklist.remove_ip.php)</dt>

<dt>[remove_user_address](extending.hooks.checklist.remove_user_address.php)</dt>

<dt>[remove_user_ip](extending.hooks.checklist.remove_user_ip.php)</dt>

</dl>

</dd>

<dt>[20\. Hooks in the cluster scope](extending.hooks.cluster.php)</dt>

<dd>

<dl>

<dt>[mbus_daemon](extending.hooks.cluster.mbus_daemon.php)</dt>

<dt>[membership_update](extending.hooks.cluster.membership_update.php)</dt>

<dt>[nodename](extending.hooks.cluster.nodename.php)</dt>

<dt>[stats_request](extending.hooks.cluster.stats_request.php)</dt>

<dt>[update_trans_metrics](extending.hooks.cluster.update_trans_metrics.php)</dt>

</dl>

</dd>

<dt>[21\. Hooks in the delay_dsn scope](extending.hooks.delay_dsn.php)</dt>

<dd>

<dl>

<dt>[generate_delay_dsn](extending.hooks.delay_dsn.generate_delay_dsn.php)</dt>

<dt>[next_delay_dsn](extending.hooks.delay_dsn.next_delay_dsn.php)</dt>

<dt>[send_notification](extending.hooks.delay_dsn.send_notification.php)</dt>

</dl>

</dd>

<dt>[22\. Hooks in the inbound_audit scope](extending.hooks.inbound_audit.php)</dt>

<dd>

<dl>

<dt>[series_add](extending.hooks.inbound_audit.series_add.php)</dt>

</dl>

</dd>

<dt>[23\. Hooks in the publish scope](extending.hooks.publish.php)</dt>

<dd>

<dl>

<dt>[packet](extending.hooks.publish.packet.php)</dt>

</dl>

</dd>

<dt>[24\. Hooks in the quarantine scope](extending.hooks.quarantine.php)</dt>

<dd>

<dl>

<dt>[message2](extending.hooks.quarantine.message2.php)</dt>

<dt>[notification2](extending.hooks.quarantine.notification2.php)</dt>

</dl>

</dd>

<dt>[25\. Hooks in the sieve scope](extending.hooks.sieve.php)</dt>

<dd>

<dl>

<dt>[casefold](extending.hooks.sieve.casefold.php)</dt>

<dt>[compile_script](extending.hooks.sieve.compile_script.php)</dt>

<dt>[convert_charset](extending.hooks.sieve.convert_charset.php)</dt>

<dt>[fetch_script](extending.hooks.sieve.fetch_script.php)</dt>

</dl>

</dd>

<dt>[26\. Hooks in the sievelib scope](extending.hooks.sievelib.php)</dt>

<dd>

<dl>

<dt>[gauge_cache_manip](extending.hooks.sievelib.gauge_cache_manip.php)</dt>

</dl>

</dd>

</dl>

| [Prev](sieve.ref.vctx_mess_set.php)  |   |  [Next](c.sdk.php) |
| vctx_mess_set  | [Table of Contents](index.php) |  Chapter 16. Extending Momentum using C |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)