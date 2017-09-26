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

| Chapter 34. Message Functions |
| [Prev](apis.ec_realloc.php)  | Part II. C API |  [Next](apis.add.php) |

## Chapter 34. Message Functions

**Table of Contents**

<dl class="toc">

<dt>[add](apis.add.php) — Add disclaimer to a message</dt>

<dt>[ec_async_fail](apis.ec_async_fail.php) — Fails a message and removes it from the system</dt>

<dt>[ec_message_addref](apis.ec_message_addref.php) — Create a reference to an existing message</dt>

<dt>[ec_message_assemble_to_legacy_email_message](apis.ec_message_assemble_to_legacy_email_message.php) — glue the parts back together into an in-memory email_message</dt>

<dt>[ec_message_assign_domain](apis.ec_message_assign_domain.php) — Modify the domain record of an ec_message</dt>

<dt>[ec_message_assign_domain_by_name](apis.ec_message_assign_domain_by_name.php) — Assign the domain field of an ec_message based on the domain name string passed in as an argument</dt>

<dt>[ec_message_body_in_core](apis.ec_message_body_in_core.php) — Checks (or arranges) for the message body to be paged in-core</dt>

<dt>[ec_message_builder](apis.ec_message_builder.php) — Convenience routine for building messages in a blocking fashion</dt>

<dt>[ec_message_change_binding_slot](apis.ec_message_change_binding_slot.php) — Set the binding for a message</dt>

<dt>[ec_message_context_clean](apis.ec_message_context_clean.php) — Cleans the appropriate per-message dictionary</dt>

<dt>[ec_message_context_delete](apis.ec_message_context_delete.php) — Delete a key/value pair from the message context or connection context dictionary</dt>

<dt>[ec_message_context_copy](apis.ec_message_context_copy.php) — Copy a context variable from one ec_message to another</dt>

<dt>[ec_message_context_discard](apis.ec_message_context_discard.php) — Discards the context dictionaries. They will be re-fetched on demand</dt>

<dt>[ec_message_context_exists](apis.ec_message_context_exists.php) — Determines whether a provided key exists in the connection context or message context dictionary</dt>

<dt>[ec_message_context_exists_and_get](apis.ec_message_context_exists_and_get.php) — Determines whether a dictionary key exists and, if so, supplies a reference to the value</dt>

<dt>[ec_message_context_firstkey](apis.ec_message_context_firstkey.php) — Returns a pointer to the first key in the appropriate per-message dictionary, NULL if the dictionary is empty</dt>

<dt>[ec_message_context_get](apis.ec_message_context_get.php) — Returns a pointer to the value of the key in the appropriate dictionary, otherwise it returns an empty string</dt>

<dt>[ec_message_context_nextkey](apis.ec_message_context_nextkey.php) — Returns a pointer to the 'next' key in the appropriate per-message dictionary, NULL if there are no more keys</dt>

<dt>[ec_message_context_set](apis.ec_message_context_set.php) — Store a key/value pair in the appropriate context dictionary</dt>

<dt>[ec_message_context_size](apis.ec_message_context_size.php) — Returns the size of the appropriate per-message dictionary</dt>

<dt>[ec_message_copy](apis.ec_message_copy.php) — Create a copy of an existing message</dt>

<dt>[ec_message_cowref](apis.ec_message_cowref.php) — Create a copy-on-write reference to an existing message</dt>

<dt>[ec_message_enqueue](apis.ec_message_enqueue.php) — Enqueue a message</dt>

<dt>[ec_message_extract_part_to_string](apis.ec_message_extract_part_to_string.php) — Extract a message part to a string, decoding transfer encoding</dt>

<dt>[ec_message_extract_part_to_string2](apis.ec_message_extract_part_to_string2.php) — Extract a message part to a string, decoding transfer encoding</dt>

<dt>[ec_message_free](apis.ec_message_free.php) — Release resources held by this message</dt>

<dt>[ec_message_get_body_fd_for_mmap](apis.ec_message_get_body_fd_for_mmap.php) — Requests the file descriptor from the IO layer for the purpose of memory mapping</dt>

<dt>[ec_message_get_body_io_object](apis.ec_message_get_body_io_object.php) — Requests an io_object from the IO layer</dt>

<dt>[ec_message_get_code](apis.ec_message_get_code.php) — Fetches the code set for the message</dt>

<dt>[ec_message_get_delivery_method](apis.ec_message_get_delivery_method.php) — Retrieve the delivery method of a message</dt>

<dt>[ec_message_get_envelope](apis.ec_message_get_envelope.php) — Returns information from the envelope of the message</dt>

<dt>[ec_message_get_envelope2](apis.ec_message_get_envelope2.php) — Return information from the envelope of the message</dt>

<dt>[ec_message_get_first_part](apis.ec_message_get_first_part.php) — Returns the top level mime part of the message</dt>

<dt>[ec_message_get_headers](apis.ec_message_get_headers.php) — Returns an rfc2822_context struct which stores the headers for the message part</dt>

<dt>[ec_message_get_mailfrom](apis.ec_message_get_mailfrom.php) — Returns the entire protocol-decorated mailfrom string</dt>

<dt>[ec_message_get_message_memory](apis.ec_message_get_message_memory.php) — Returns a pointer to the message memory</dt>

<dt>[ec_message_get_message_size](apis.ec_message_get_message_size.php) — Returns the message size, in bytes</dt>

<dt>[ec_message_get_pathway](apis.ec_message_get_pathway.php) — Get the pathway of a message</dt>

<dt>[ec_message_get_rcptto](apis.ec_message_get_rcptto.php) — returns the entire protocol-decorated rcptto string</dt>

<dt>[ec_message_get_routing_domain](apis.ec_message_get_routing_domain.php) — Get the routing domain of the message</dt>

<dt>[ec_message_get_routing_domain2](apis.ec_message_get_routing_domain2.php) — Get the routing domain of the message</dt>

<dt>[ec_message_is_large](apis.ec_message_is_large.php) — Indicates if a message is large</dt>

<dt>[ec_message_is_mcmt](apis.ec_message_is_mcmt.php) — returns 1 if the message is a MCMT container</dt>

<dt>[ec_message_lock](apis.ec_message_lock.php) — Perform a mutex lock operation</dt>

<dt>[ec_message_mcmt_fixup](apis.ec_message_mcmt_fixup.php) — This function is to be called by a listener when an injected message is a MCMT container (i.e</dt>

<dt>[ec_message_new](apis.ec_message_new.php) — Create a new message</dt>

<dt>[ec_message_parser_defaults](apis.ec_message_parser_defaults.php) — Obtain message parsing/validation defaults</dt>

<dt>[ec_message_parser_defaults2](apis.ec_message_parser_defaults2.php) — Obtain message parsing/validation defaults</dt>

<dt>[ec_message_parser_strerror](apis.ec_message_parser_strerror.php) — Returns a string representation of a message parsing error code</dt>

<dt>[ec_message_part_add_child_first](apis.ec_message_part_add_child_first.php) — Add part as the first child of another part</dt>

<dt>[ec_message_part_add_child_last](apis.ec_message_part_add_child_last.php) — Add part as the last child of another part</dt>

<dt>[ec_message_part_copy_to_io_object](apis.ec_message_part_copy_to_io_object.php) — Render/Copy a message part to an io_object</dt>

<dt>[ec_message_part_create_multipart](apis.ec_message_part_create_multipart.php) — Create a new multipart container part</dt>

<dt>[ec_message_part_create_singleton](apis.ec_message_part_create_singleton.php) — Create a new singleton message part</dt>

<dt>[ec_message_part_extract](apis.ec_message_part_extract.php) — Prepare to extract a message part in a streaming fashion</dt>

<dt>[ec_message_part_extract2](apis.ec_message_part_extract2.php) — Prepare to extract a message part in a streaming fashion</dt>

<dt>[ec_message_part_get_content_type](apis.ec_message_part_get_content_type.php) — Returns the content type and charset for a given part</dt>

<dt>[ec_message_part_get_content_type2](apis.ec_message_part_get_content_type2.php) — Returns the content type and charset for a given part using strings</dt>

<dt>[ec_message_part_get_content_type3](apis.ec_message_part_get_content_type3.php) — Returns the content type and charset for a given part</dt>

<dt>[ec_message_part_insert_after](apis.ec_message_part_insert_after.php) — Insert a part after another part</dt>

<dt>[ec_message_part_insert_before](apis.ec_message_part_insert_before.php) — Insert a part ahead of another part</dt>

<dt>[ec_message_part_touch](apis.ec_message_part_touch.php) — Flags a message part as having been modified</dt>

<dt>[ec_message_part_unlink](apis.ec_message_part_unlink.php) — Unlink part from the mime tree</dt>

<dt>[ec_message_refetch_meta](apis.ec_message_refetch_meta.php) — refetch extended meta information from the spool</dt>

<dt>[ec_message_register_parser](apis.ec_message_register_parser.php) — Replaces the core message parser</dt>

<dt>[ec_message_release_body_io_object](apis.ec_message_release_body_io_object.php) — Releases the body io_object</dt>

<dt>[ec_message_render_headers_to_string](apis.ec_message_render_headers_to_string.php) — Renders the headers of the first part of a message to a string</dt>

<dt>[ec_message_render_meta_to_string](apis.ec_message_render_meta_to_string.php) — Renders meta information about the message to a string</dt>

<dt>[ec_message_render_part_headers_to_string](apis.ec_message_render_part_headers_to_string.php) — Render the headers of a message part to a string</dt>

<dt>[ec_message_render_part_to_string](apis.ec_message_render_part_to_string.php) — Render a message part to a string</dt>

<dt>[ec_message_render_to_string](apis.ec_message_render_to_string.php) — Renders a message, swapping it in if needed</dt>

<dt>[ec_message_rsrc_copy](apis.ec_message_rsrc_copy.php) — Duplicate resource identifiers from source into destination</dt>

<dt>[ec_message_rsrc_create](apis.ec_message_rsrc_create.php) — This creates an empty container for a resource identified with name</dt>

<dt>[ec_message_rsrc_destroy](apis.ec_message_rsrc_destroy.php) — Removes the resource with the given name from the message in-memory resource list and then passes the resource to ec_message_rsrc_free</dt>

<dt>[ec_message_rsrc_flush](apis.ec_message_rsrc_flush.php) — Explicitly flush the resource name to its relevant backing store</dt>

<dt>[ec_message_rsrc_free](apis.ec_message_rsrc_free.php) — Allows the underlying operating system to reclaim memory and objects associated with the given resource</dt>

<dt>[ec_message_rsrc_get](apis.ec_message_rsrc_get.php) — This will return the I/O object associated with the resource name as well as the state</dt>

<dt>[ec_message_rsrc_remove](apis.ec_message_rsrc_remove.php) — This will set the resource name in message to state EC_MESSAGE_RSRC_DELETED</dt>

<dt>[ec_message_rsrc_set](apis.ec_message_rsrc_set.php) — This function associates I/O object source with the resource name for message</dt>

<dt>[ec_message_rsrc_state](apis.ec_message_rsrc_state.php) — This will return a state hint of a given resource</dt>

<dt>[ec_message_rsrc_string](apis.ec_message_rsrc_string.php) — Returns a string representation of the resources associated with the message</dt>

<dt>[ec_message_select_binding_by_group](apis.ec_message_select_binding_by_group.php) — Select a binding from a binding group</dt>

<dt>[ec_message_separate](apis.ec_message_separate.php) — Separate references to an existing message</dt>

<dt>[ec_message_set__object](apis.ec_message_set__object.php) — set the _object for a message, maintaining appropriate accounting</dt>

<dt>[ec_message_set_code](apis.ec_message_set_code.php) — Set the message delivery code meta information</dt>

<dt>[ec_message_set_envelope](apis.ec_message_set_envelope.php) — Sets envelope information for the message</dt>

<dt>[ec_message_set_first_part](apis.ec_message_set_first_part.php) — Accessor function for changing the top level mime part for a message</dt>

<dt>[ec_message_set_mailfrom](apis.ec_message_set_mailfrom.php) — sets the entire protocol decorated mailfrom string</dt>

<dt>[ec_message_set_next_attempt](apis.ec_message_set_next_attempt.php) — Determines and sets the next attempt time for the message</dt>

<dt>[ec_message_set_parser_defaults](apis.ec_message_set_parser_defaults.php) — Set message parsing/validation defaults</dt>

<dt>[ec_message_set_rcptto](apis.ec_message_set_rcptto.php) — sets the entire protocol decorated rcptto string</dt>

<dt>[ec_message_should_reduce_resources](apis.ec_message_should_reduce_resources.php) — Determines whether or not a message should be removed from memory</dt>

<dt>[ec_message_snapshot](apis.ec_message_snapshot.php) — Create a snapshot of an existing message</dt>

<dt>[ec_message_swap_in](apis.ec_message_swap_in.php) — causes the message content to be read in from disk</dt>

<dt>[ec_message_swap_out](apis.ec_message_swap_out.php) — cause a message to be written to disk</dt>

<dt>[ec_message_swap_out_meta](apis.ec_message_swap_out_meta.php) — Write message meta data to disk</dt>

<dt>[ec_message_unlink_on_free](apis.ec_message_unlink_on_free.php) — Marks the message as to be removed from disk when the last reference is dropped</dt>

<dt>[ec_message_unlock](apis.ec_message_unlock.php) — Perform a message unlock operation</dt>

<dt>[ec_retry_state_delref](apis.ec_retry_state_delref.php) — Removes a reference from a retry state, and destroys it if no more exist</dt>

<dt>[ec_retry_state_get](apis.ec_retry_state_get.php) — Retrieves or allocates a retry state associated with the given binding and domain</dt>

<dt>[ec_retry_state_next](apis.ec_retry_state_next.php) — Return next offset associated with a retry state distribution, bounded to ceiling</dt>

<dt>[ec_retry_state_reset](apis.ec_retry_state_reset.php) — Resets a retry state</dt>

<dt>[ob_get_current_message](apis.ob_get_current_message.php) — Utility function to return the current ec_message</dt>

</dl>

The `ec_message` data structure is documented at [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message").

| [Prev](apis.ec_realloc.php)  | [Up](pt.apis.php) |  [Next](apis.add.php) |
| ec_realloc  | [Table of Contents](index.php) |  add |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)