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

| Chapter 11. Configuration Functions I (binding/domain) |
| [Prev](apis.cidrrange_val_ipv4_update.php)  | Part II. C API |  [Next](apis.config_get_binding_domain_drop_body_after_trans_fail.php) |

## Chapter 11. Configuration Functions I (binding/domain)

**Table of Contents**

<dl class="toc">

<dt>[config_get_binding_domain_drop_body_after_trans_fail](apis.config_get_binding_domain_drop_body_after_trans_fail.php) — Determine the value of the drop_body_after_trans_fail option</dt>

<dt>[config_get_binding_domain_max_resident_active_queue_size](apis.config_get_binding_domain_max_resident_active_queue_size.php) — Return the value of the max_resident_active_queue_size option</dt>

<dt>[config_get_binding_domain_max_retries](apis.config_get_binding_domain_max_retries.php) — Return the value of the max_retries option</dt>

<dt>[config_get_binding_domain_message_expiration](apis.config_get_binding_domain_message_expiration.php) — Return the value of the message_expiration option</dt>

<dt>[config_get_binding_domain_retry_interval](apis.config_get_binding_domain_retry_interval.php) — Return the value of the max_retry_interval option</dt>

<dt>[config_get_binding_domain_tls_ca](apis.config_get_binding_domain_tls_ca.php) — Determine the value of the tls_ca option</dt>

<dt>[config_get_binding_domain_tls_cert](apis.config_get_binding_domain_tls_cert.php) — Get TLS certification data</dt>

<dt>[config_get_binding_domain_tls_ciphers](apis.config_get_binding_domain_tls_ciphers.php) — Determine the value of the tls_ciphers option</dt>

<dt>[config_get_binding_domain_tls_key](apis.config_get_binding_domain_tls_key.php) — Determine the value of the tls_key option</dt>

<dt>[config_get_binding_domain_tls_verify](apis.config_get_binding_domain_tls_verify.php) — Determine the value of the tls_verify option</dt>

<dt>[config_get_binding_domain_use_tls](apis.config_get_binding_domain_use_tls.php) — Determine the value of the tls option</dt>

</dl>

These functions relate to obtaining the value of various Momentum configuration options. See [Options Summary](https://support.messagesystems.com/docs/web-ref/options-summary.php) for documentation of Momentum configuration options. See also [Section 1.3.5, “Configuration API”](arch.primary.apis.php#arch.configuration "1.3.5. Configuration API") and [Configuration Scopes and Fallback](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.fallback.php).

| [Prev](apis.cidrrange_val_ipv4_update.php)  | [Up](pt.apis.php) |  [Next](apis.config_get_binding_domain_drop_body_after_trans_fail.php) |
| cidrrange_val_ipv4_update  | [Table of Contents](index.php) |  config_get_binding_domain_drop_body_after_trans_fail |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)