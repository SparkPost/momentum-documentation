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

| Chapter 2. Adaptive Functions |
| [Prev](pt.apis.php)  | Part II. C API |  [Next](apis.ec_adaptive_get_backstore_job_class.php) |

## Chapter 2. Adaptive Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_adaptive_get_backstore_job_class](apis.ec_adaptive_get_backstore_job_class.php) — Get the backstore job class</dt>

<dt>[ec_adaptive_get_backstore_job_concurrency](apis.ec_adaptive_get_backstore_job_concurrency.php) — Get the backstore job concurrency semaphore</dt>

<dt>[ec_adaptive_get_configured_sweep_rules](apis.ec_adaptive_get_configured_sweep_rules.php) — Return a list of configured sweep rules</dt>

<dt>[ec_adaptive_get_stats_period](apis.ec_adaptive_get_stats_period.php) — Return the adaptive_stats_period which is the retention period for adaptive stats</dt>

<dt>[ec_adaptive_log](apis.ec_adaptive_log.php) — Log function for AD system to log operational logs</dt>

<dt>[ec_adaptive_log_config](apis.ec_adaptive_log_config.php) — Log function for AD system to log config change to jlog</dt>

<dt>[ec_adaptive_log_status](apis.ec_adaptive_log_status.php) — Log function for AD system to log status change to jlog</dt>

<dt>[ec_adaptive_logf](apis.ec_adaptive_logf.php) — Log function for AD system to log operational logs</dt>

<dt>[ec_adaptive_logv](apis.ec_adaptive_logv.php) — Log function for AD system to log operational logs</dt>

<dt>[ec_adaptive_persist_configurations](apis.ec_adaptive_persist_configurations.php) — function to save suspensions, and optvals for a binding/domain to backstore</dt>

<dt>[ec_adaptive_remove_suspension](apis.ec_adaptive_remove_suspension.php) — function to remove one suspension from backstore</dt>

<dt>[ec_adaptive_restore_configuration](apis.ec_adaptive_restore_configuration.php) — function to refresh parameters from backstore</dt>

<dt>[ec_adaptive_sweep_rules_by_binding_domain](apis.ec_adaptive_sweep_rules_by_binding_domain.php) — Return a list of applicable sweep rules for given binding/domain pair</dt>

<dt>[ec_adaptive_throttle_create_named](apis.ec_adaptive_throttle_create_named.php) — create a named throttle within the adaptive context</dt>

<dt>[ec_adaptive_throttle_delta](apis.ec_adaptive_throttle_delta.php) — adjust the counter for a named throttle</dt>

<dt>[ec_adaptive_throttle_is_exceeded](apis.ec_adaptive_throttle_is_exceeded.php) — check to see if a throttle is over budget</dt>

<dt>[ec_adaptive_throttle_time_until_clear](apis.ec_adaptive_throttle_time_until_clear.php) — check to see how long it will be until a throttle is under budget</dt>

<dt>[is_adaptive_scope_global](apis.is_adaptive_scope_global.php) — check if a binding/domain pair's adaptive scope is global or not</dt>

</dl>

The APIs documented here relate to the [adaptive](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php) module. See the Momentum reference manual for more information about Adaptive Delivery. Also see [Adaptive Delivery User Guide](https://support.messagesystems.com/docs/web-ad/).

| [Prev](pt.apis.php)  | [Up](pt.apis.php) |  [Next](apis.ec_adaptive_get_backstore_job_class.php) |
| Part II. C API  | [Table of Contents](index.php) |  ec_adaptive_get_backstore_job_class |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)