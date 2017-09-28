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

| Chapter 17. C API Reference |
| [Prev](extending.sieve.php)  | Part III. Extending Momentum |  [Next](extending.C.ref.declare_hook.php) |

## Chapter 17. C API Reference

**Table of Contents**

<dl class="toc">

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

| [Prev](extending.sieve.php)  | [Up](p.extending.php) |  [Next](extending.C.ref.declare_hook.php) |
| 16.7. Extending Sieve  | [Table of Contents](index.php) |  hooks |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)