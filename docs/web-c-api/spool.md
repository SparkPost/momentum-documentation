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

| Chapter 49. Spool-related Functions |
| [Prev](apis.sockaddr_to_string_opt.php)  | Part II. C API |  [Next](apis.ec_spool_ctx_construct_filename.php) |

## Chapter 49. Spool-related Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_spool_ctx_construct_filename](apis.ec_spool_ctx_construct_filename.php) — Create a file name for the specified message</dt>

<dt>[ec_spool_ctx_create](apis.ec_spool_ctx_create.php) — Create a spool context for a location on disk</dt>

<dt>[ec_spool_ctx_enum_messages](apis.ec_spool_ctx_enum_messages.php) — Enumerate messages in a spool</dt>

<dt>[ec_spool_ctx_filter_open](apis.ec_spool_ctx_filter_open.php) — Access the spool in the specified way</dt>

<dt>[ec_spool_ctx_get_spool_base](apis.ec_spool_ctx_get_spool_base.php) — Returns the spool base for a given spool context</dt>

<dt>[ec_spool_ctx_import_message](apis.ec_spool_ctx_import_message.php) — import a message from a spool context into the system spool</dt>

<dt>[ec_spool_ctx_lock](apis.ec_spool_ctx_lock.php) — Lock a spool context</dt>

<dt>[ec_spool_ctx_remove_mid](apis.ec_spool_ctx_remove_mid.php) — Remove the specified message part</dt>

<dt>[ec_spool_ctx_set_always_regenerate_message_ids](apis.ec_spool_ctx_set_always_regenerate_message_ids.php) — Determine whether a spool context regenerates message ids on import</dt>

<dt>[ec_spool_ctx_set_max_retention](apis.ec_spool_ctx_set_max_retention.php) — set the maximum retention time for a spool context</dt>

<dt>[ec_spool_ctx_set_suppress_trace_headers](apis.ec_spool_ctx_set_suppress_trace_headers.php) — Sets a spool context to disable the addition of trace headers</dt>

<dt>[ec_spool_ctx_spool_in](apis.ec_spool_ctx_spool_in.php) — spool in a message with a given id, from a spool context</dt>

<dt>[ec_spool_ctx_swap_out_met](apis.ec_spool_ctx_swap_out_met.php) — Swap out everything about the message except for the body</dt>

<dt>[ec_spool_ctx_unlock](apis.ec_spool_ctx_unlock.php) — Unlock a spool context. Note that it is not safe to unlock the global spool context</dt>

<dt>[ec_spool_in](apis.ec_spool_in.php) — Spool in message meta data from disk (deprecated)</dt>

<dt>[ec_spool_in2](apis.ec_spool_in2.php) — spool in message meta data from disk</dt>

<dt>[ec_spool_in_depfd](apis.ec_spool_in_depfd.php) — Spool in message meta data from disk (deprecated)</dt>

<dt>[ec_swap_remove](apis.ec_swap_remove.php) — removes the message from the spool</dt>

<dt>[ec_swap_remove_meta](apis.ec_swap_remove_meta.php) — removes meta data for the message from the IO layer</dt>

<dt>[get_disk_queue_size](apis.get_disk_queue_size.php) — Gets the number of messages on the disk queue</dt>

<dt>[get_spool_name](apis.get_spool_name.xml.php) — Get the spool name from the message ID</dt>

<dt>[mid_to_spool_name](apis.mid_to_spool_name.xml.php) — Get the spool name from the message ID</dt>

<dt>[spool_disk_queue_state](apis.spool_disk_queue_state.php) — Show the state of the queue on disk</dt>

<dt>[spool_in](apis.spool_in.php) — Spool in message meta data from disk (deprecated)</dt>

<dt>[spool_in_depfd](apis.spool_in_depfd.php) — Spool in message meta data from disk (deprecated)</dt>

<dt>[spool_name_to_mid](apis.spool_name_to_mid.php) — Create a message ID</dt>

<dt>[swap_out_multi](apis.swap_out_multi.php) — Swap out multiple messages</dt>

</dl>

| [Prev](apis.sockaddr_to_string_opt.php)  | [Up](pt.apis.php) |  [Next](apis.ec_spool_ctx_construct_filename.php) |
| sockaddr_to_string_opt  | [Table of Contents](index.php) |  ec_spool_ctx_construct_filename |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)