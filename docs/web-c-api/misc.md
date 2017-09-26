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

| Chapter 35. Miscellaneous Functions |
| [Prev](apis.ob_get_current_message.php)  | Part II. C API |  [Next](apis.apn_status_classifier.php) |

## Chapter 35. Miscellaneous Functions

**Table of Contents**

<dl class="toc">

<dt>[apn_status_classifier](apis.apn_status_classifier.php) — Determine the meaning of the delivery status code</dt>

<dt>[ec_converter_close](apis.ec_converter_close.php) — closes a converter</dt>

<dt>[ec_converter_convert](apis.ec_converter_convert.php) — Convert a chunk of data</dt>

<dt>[ec_converter_open](apis.ec_converter_open.php) — open a converter</dt>

<dt>[ec_if_list](apis.ec_if_list.php) — Retrieve a list of interfaces</dt>

<dt>[ec_md_enabled](apis.ec_md_enabled.php) — Determines if hand-tuned assembly optimizations are turned on</dt>

<dt>[ec_md_probe](apis.ec_md_probe.php) — The probe routine must be implemented by any supported architecture</dt>

<dt>[ec_messagescope_query](apis.ec_messagescope_query.php) — Query for reputation record</dt>

<dt>[gcm_classify_error](apis.gcm_classify_error.php) — Determine the meaning of the delivery status code</dt>

<dt>[gcm_get_result_error_code](apis.gcm_get_result_error_code.php) — Get the error code from the response results error</dt>

<dt>[if_arp_cache](apis.if_arp_cache.php) — Return the ARP cache</dt>

<dt>[msc_thread_id](apis.msc_thread_id.php) — Generate a thread_id according the following format: [msg_id in spool name format]::[node name]:[suffix]</dt>

</dl>

| [Prev](apis.ob_get_current_message.php)  | [Up](pt.apis.php) |  [Next](apis.apn_status_classifier.php) |
| ob_get_current_message  | [Table of Contents](index.php) |  apn_status_classifier |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)