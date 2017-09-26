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

| Chapter 68. Structs |
| [Prev](pt.structs.php)  | Part IV. Structs |  [Next](structs.abstract_message.php) |

## Chapter 68. Structs

**Table of Contents**

<dl class="toc">

<dt>[68.1\. abstract_message](structs.abstract_message.php)</dt>

<dt>[68.2\. accept_construct](structs.accept_construct.php)</dt>

<dt>[68.3\. address](structs.address.php)</dt>

<dt>[68.4\. address_metrics](structs.address_metrics.php)</dt>

<dt>[68.5\. apn_request](structs.apn_request.php)</dt>

<dt>[68.6\. apn_error_response](structs.apn_error_response.php)</dt>

<dt>[68.7\. cidrnode_ipv4](structs.cidrnode_ipv4.php)</dt>

<dt>[68.8\. command_construct](structs.command_construct.php)</dt>

<dt>[68.9\. connection](structs.connection.php)</dt>

<dt>[68.10\. connection_handle](structs.connection_handle.php)</dt>

<dt>[68.11\. delivery_construct](structs.delivery_construct.php)</dt>

<dt>[68.12\. dns_cache_cachenode](structs.dns_cache_cachenode.php)</dt>

<dt>[68.13\. dns_cache_query](structs.dns_cache_query.php)</dt>

<dt>[68.14\. domain_record](structs.domain_record.php)</dt>

<dt>[68.15\. ec_async_job](structs.ec_async_job.php)</dt>

<dt>[68.16\. ec_bag](structs.ec_bag.php)</dt>

<dt>[68.17\. ec_blobject](structs.ec_blobject.php)</dt>

<dt>[68.18\. ec_blobject_class](structs.ec_blobject_class.php)</dt>

<dt>[68.19\. ec_cache_elt](structs.ec_cache_elt.php)</dt>

<dt>[68.20\. ec_cache_head](structs.ec_cache_head.php)</dt>

<dt>[68.21\. ec_config_header](structs.ec_config_header.php)</dt>

<dt>[68.22\. ec_config_option_def](structs.ec_config_option_def.php)</dt>

<dt>[68.23\. ec_config_value](structs.ec_config_value.php)</dt>

<dt>[68.24\. ec_data_source_query_cache](structs.ec_data_source_query_cache.php)</dt>

<dt>[68.25\. ec_datasource_cache_query](structs.ec_datasource_cache_query.php)</dt>

<dt>[68.26\. ec_datasource_closure](structs.ec_datasource_closure.php)</dt>

<dt>[68.27\. ec_datasource_query_cache_entry](structs.ec_datasource_query_cache_entry.php)</dt>

<dt>[68.28\. ec_datasource_value_iterator](structs.ec_datasource_value_iterator.php)</dt>

<dt>[68.29\. ec_double_list](structs.ec_double_list.php)</dt>

<dt>[68.30\. ec_hash_iter](structs.ec_hash_iter.php)</dt>

<dt>[68.31\. ec_hash_table](structs.ec_hash_table.php)</dt>

<dt>[68.32\. __ec_hook_head](structs.ec_hook_head.php)</dt>

<dt>[68.33\. ec_httpsrv_session](structs.ec_httpsrv_session.php)</dt>

<dt>[68.34\. ec_interpolate_context](structs.ec_interpolate_context.php)</dt>

<dt>[68.35\. ec_mem_stats](structs.ec_mem_stats.php)</dt>

<dt>[68.36\. ec_mem_type_def](structs.ec_mem_type_def.php)</dt>

<dt>[68.37\. ec_mem_type_usage](structs.ec_mem_type_usage.php)</dt>

<dt>[68.38\. ec_message](structs.ec_message.php)</dt>

<dt>[68.39\. ec_message_part](structs.ec_message_part.php)</dt>

<dt>[68.40\. ec_ptr_array](structs.ec_ptr_array.php)</dt>

<dt>[68.41\. ec_scheduler_inst](structs.ec_scheduler_inst.php)</dt>

<dt>[68.42\. ec_spool_ctx](structs.ec_spool_ctx.php)</dt>

<dt>[68.43\. ec_ssl_ctx](structs.ec_ssl_ctx.php)</dt>

<dt>[68.44\. ec_ssl_ctx_params](structs.ec_ssl_ctx_params.php)</dt>

<dt>[68.45\. ec_statvfs](structs.ec_statvfs.php)</dt>

<dt>[68.46\. ec_url_details](structs.ec_url_details.php)</dt>

<dt>[68.47\. ecdata_value](structs.ecdata_value.php)</dt>

<dt>[68.48\. eclist_node](structs.eclist_node.php)</dt>

<dt>[68.49\. Event](structs.event.php)</dt>

<dt>[68.50\. event_io_state](structs.event_io_state.php)</dt>

<dt>[68.51\. gcm_request](structs.gcm_request.php)</dt>

<dt>[68.52\. gcm_message_response](structs.gcm_message_response.php)</dt>

<dt>[68.53\. generic_module_infrastructure](structs.generic_module_infrastructure.php)</dt>

<dt>[68.54\. http_session](structs.http_session.php)</dt>

<dt>[68.55\. io_object](structs.io_object.php)</dt>

<dt>[68.56\. io_wrapper](structs.io_wrapper.php)</dt>

<dt>[68.57\. logging_infrastructure_1](structs.logging_infrastructure_1.php)</dt>

<dt>[68.58\. mail_queue](structs.mail_queue.php)</dt>

<dt>[68.59\. message_construct](structs.message_construct.php)</dt>

<dt>[68.60\. message_id](structs.message_id.php)</dt>

<dt>[68.61\. minimal_tryread_construct](structs.minimal_tryread_construct.php)</dt>

<dt>[68.62\. mx_routes](structs.mx_routes.php)</dt>

<dt>[68.63\. netlistener_def](structs.netlistener_def.php)</dt>

<dt>[68.64\. rfc2821_ctx](structs.rfc2821_ctx.php)</dt>

<dt>[68.65\. rfc2822_address_context](structs.rfc2822_address_context.php)</dt>

<dt>[68.66\. rfc2822_context](structs.rfc2822_context.php)</dt>

<dt>[68.67\. rfc2822_field](structs.rfc2822_field.php)</dt>

<dt>[68.68\. rsplaynode](structs.rsplaynode.php)</dt>

<dt>[68.69\. rsplaytree](structs.rsplaytree.php)</dt>

<dt>[68.70\. scpt_callout](structs.scpt_callout.php)</dt>

<dt>[68.71\. scpt_objtype](structs.scpt_objtype.php)</dt>

<dt>[68.72\. scpt_thread](structs.scpt_thread.php)</dt>

<dt>[68.73\. SENG (sieve_engine)](structs.seng.php)</dt>

<dt>[68.74\. shared_module_infrastructure_8](structs.shared_module_infrastructure_8.php)</dt>

<dt>[68.75\. SIEVE (sieve_state)](structs.sieve.php)</dt>

<dt>[68.76\. SIEVEARGS (sieve_ast)](structs.sieve_ast.php)</dt>

<dt>[68.77\. Skiplist](structs.skiplist.php)</dt>

<dt>[68.78\. smpp_conn](structs.smpp_conn.php)</dt>

<dt>[68.79\. SMPP_PDU](structs.smpp_pdu.php)</dt>

<dt>[68.80\. smpp_seg_data](structs.smpp_seg_data.php)</dt>

<dt>[68.81\. smtp_client_args](structs.smtp_client_args.php)</dt>

<dt>[68.82\. _smtp_error_class](structs.smtp_error_class.php)</dt>

<dt>[68.83\. smtp_state](structs.smtp_state.php)</dt>

<dt>[68.84\. sp_async_message](structs.sp_async_message.php)</dt>

<dt>[68.85\. string](structs.string.php)</dt>

<dt>[68.86\. validate_context](structs.validate_context.php)</dt>

</dl>

| [Prev](pt.structs.php)  | [Up](pt.structs.php) |  [Next](structs.abstract_message.php) |
| Part IV. Structs  | [Table of Contents](index.php) |  68.1. abstract_message |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)