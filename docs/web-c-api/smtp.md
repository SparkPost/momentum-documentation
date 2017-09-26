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

| Chapter 47. SMTP-related Functions |
| [Prev](apis.smpp_write_seg_blob.php)  | Part II. C API |  [Next](apis.esmtp_destroy_message_construct.php) |

## Chapter 47. SMTP-related Functions

**Table of Contents**

<dl class="toc">

<dt>[esmtp_destroy_message_construct](apis.esmtp_destroy_message_construct.php) — Destroy the specified message construct</dt>

<dt>[esmtp_extensions_register](apis.esmtp_extensions_register.php) — Register ESMTP extensions</dt>

<dt>[esmtp_message_factory](apis.esmtp_message_factory.php) — This function is the ESMTP server state machine</dt>

<dt>[esmtp_message_factory_state](apis.esmtp_message_factory_state.php) — Determine the state of a message</dt>

<dt>[read_smtp](apis.read_smtp.php) — Reads the SMTP response from peer</dt>

<dt>[read_smtp2](apis.read_smtp2.php) — Read the SMTP response from peer</dt>

<dt>[register_smtp_client_state](apis.register_smtp_client_state.php) — Register a custom state in the SMTP client state machine</dt>

<dt>[smtp_client_args_add](apis.smtp_client_args_add.php) — Add an argument to an smtp_client_args structure</dt>

<dt>[smtp_client_args_delete](apis.smtp_client_args_delete.php) — Remove an argument from an smtp_client_args structure</dt>

<dt>[smtp_client_args_exists_and_fetch](apis.smtp_client_args_exists_and_fetch.php) — Check for the existence of and fetch an argument from an smtp_client_args structure</dt>

<dt>[smtp_error_classify](apis.smtp_error_classify.php) — Classify the response code given in response to an SMTP command</dt>

<dt>[smtp_error_classify_len](apis.smtp_error_classify_len.php) — Classify the response code given in response to an SMTP command</dt>

<dt>[smtp_error_for_id](apis.smtp_error_for_id.php) — Fetch the details for a given SMTP classification id</dt>

<dt>[smtp_error_register_class](apis.smtp_error_register_class.php) — Register a user-defined SMTP error class</dt>

<dt>[smtp_error_retrieve_class](apis.smtp_error_retrieve_class.php) — Return the name and description for a bounce code</dt>

<dt>[smtp_get_state](apis.smtp_get_state.php) — Fetch a particular SMTP client state</dt>

<dt>[smtp_get_state_machine](apis.smtp_get_state_machine.php) — Fetch the head of the SMTP client state machine</dt>

<dt>[smtp_next_state](apis.smtp_next_state.php) — Change the SMTP state for the current connection to another state</dt>

<dt>[smtp_parse_capabilities](apis.smtp_parse_capabilities.php) — Parse the remote capabilities from the EHLO response</dt>

</dl>

| [Prev](apis.smpp_write_seg_blob.php)  | [Up](pt.apis.php) |  [Next](apis.esmtp_destroy_message_construct.php) |
| smpp_write_seg_blob  | [Table of Contents](index.php) |  esmtp_destroy_message_construct |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)