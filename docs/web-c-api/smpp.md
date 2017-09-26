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

| Chapter 46. SMPP Functions |
| [Prev](apis.sli_remove.php)  | Part II. C API |  [Next](apis.smpp_append_encoded_integer.php) |

## Chapter 46. SMPP Functions

**Table of Contents**

<dl class="toc">

<dt>[smpp_append_encoded_integer](apis.smpp_append_encoded_integer.php) — Encode an integer into an octet string</dt>

<dt>[smpp_async_fail_ec_message](apis.smpp_async_fail_ec_message.php) — Fail an asynchronous SMPP message</dt>

<dt>[smpp_config_fetch_using_connection](apis.smpp_config_fetch_using_connection.php) — Fetch the specified SMPP configuration option</dt>

<dt>[smpp_data_coding_name](apis.smpp_data_coding_name.php) — Retrieve the data coding name from the PDU</dt>

<dt>[smpp_date_to_long](apis.smpp_date_to_long.php) — Convert date string to time_t value</dt>

<dt>[smpp_decode_integer](apis.smpp_decode_integer.php) — Decode an octet string into integer</dt>

<dt>[smpp_find_segmentation_break](apis.smpp_find_segmentation_break.php) — Return a pointer to the break between two message segments within the complete text string</dt>

<dt>[smpp_fail_ec_message](apis.smpp_fail_ec_message.php) — Fail an SMPP message</dt>

<dt>[smpp_free](apis.smpp_free.php) — Free memory of the memtype_smpp type</dt>

<dt>[smpp_get_deliver_mo_msg](apis.smpp_get_deliver_mo_msg.php) — Retrieve the text message in received MO request</dt>

<dt>[smpp_get_message_id_from_pdu](apis.smpp_get_message_id_from_pdu.php) — Retrieve the Message ID from the PDU</dt>

<dt>[smpp_get_string_and_buffer](apis.smpp_get_string_and_buffer.php) — Create a string object using memory type of memtype_smpp</dt>

<dt>[smpp_get_submit_status_from_pdu](apis.smpp_get_submit_status_from_pdu.php) — Retrieve the status code from submit response PDU</dt>

<dt>[smpp_get_vals_from_dr](apis.smpp_get_vals_from_dr.php) — Extract delivery receipt from the SMS text</dt>

<dt>[smpp_free_string_and_buffer](apis.smpp_free_string_and_buffer.php) — Free a string object created using smpp_get_string_and_buffer</dt>

<dt>[smpp_malloc](apis.smpp_malloc.php) — Allocate memory of memtype_smpp type</dt>

<dt>[smpp_read_msg_text_blob](apis.smpp_read_msg_text_blob.php) — Retrieve text blob context variable from an ec_message</dt>

<dt>[smpp_read_seg_blob](apis.smpp_read_seg_blob.php) — Return the data for the current segment</dt>

<dt>[smpp_realloc](apis.smpp_realloc.php) — Free message (*mem), and realloc new memtype_smpp memory</dt>

<dt>[smpp_strdup](apis.smpp_strdup.php) — Duplicate a string</dt>

<dt>[smpp_wrap_in_string](apis.smpp_wrap_in_string.php) — Wrap a char string into a string object</dt>

<dt>[smpp_wrap_in_string_with_len](apis.smpp_wrap_in_string_with_len.php) — Wrap a char string into a string object</dt>

<dt>[smpp_write_msg_text_blob](apis.smpp_write_msg_text_blob.php) — Write a text blob to an SMPP message</dt>

<dt>[smpp_write_seg_blob](apis.smpp_write_seg_blob.php) — Change or write the text content of the current segment</dt>

</dl>

The APIs documented here relate to the [SMPP](https://support.messagesystems.com/docs/web-mobility/momentum.mobility.php) module.

| [Prev](apis.sli_remove.php)  | [Up](pt.apis.php) |  [Next](apis.smpp_append_encoded_integer.php) |
| sli_removet  | [Table of Contents](index.php) |  smpp_append_encoded_integer |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)