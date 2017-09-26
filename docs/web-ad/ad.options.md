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

| Appendix A. Adaptive Options |
| [Prev](ad.troubleshooting.console.php)  |   |  [Next](ad.executables.php) |

## Adaptive Options

Find below a table of options valid in the adaptive module scope.

<a name="adaptive-module-options-table"></a>

**Table A.1. adaptive module options**

| Option/Description | Default |
| --- | --- |
| **[ad_response_rule_series_prefix](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.ad_response_rule_series_prefix)** – The suffix for rule series' names | ADRR_series |
| **[adaptive_cache_size](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_cache_size)** – The size of the adaptive cache | 1048576 |
| **[adaptive_cache_ttl](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_cache_ttl)** – The TTL for the adaptive cache | 43200 |
| **[adaptive_manage_options](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_manage_options)** – Define options that will be managed by adaptive |   |
| **[adaptive_stats_period](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_stats_period)** – The size of the sliding window for the audit_series of the adaptive statistics | 3600 |
| **[adaptive_unmanage_options](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_unmanage_options)** – Define options that will be unmanaged by adaptive |   |
| **[backing_store_connect_timeout](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.backing_store_connect_timeout)** – The amount of time that the adaptive module will wait for a connection to the backing store server | 5 |
| **[backing_store_timeout](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.backing_store_timeout)** – The amount of time that the adaptive module will wait for a response from the adaptive backing store | 5 |
| **[binding_domain_cache_max_ttl](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.binding_domain_cache_max_ttl)** – The TTL for the binding::domain cache | 86400 |
| **[binding_domain_cache_size](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.binding_domain_cache_size)** – The number of entries in the binding::domain cache | 999999 |
| **[bounce_sweep_interval](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.bounce_sweep_interval)** – How often to check the binding::domain bounce and FBL rates | 3600 |
| **[data_store](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.data_store)** – The IP/Port of Riak server(s) | ("http://127.0.0.1:8098") |
| **[data_store_sync_interval](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.data_store_sync_interval)** – How often to synchronize the tables stored in memory with the database backing store | 3600 |
| **[enable_bounce_stats](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.enable_bounce_stats)** – Whether or not to consolidate bounce statistics hourly | true |
| **[enable_fbl_stats](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.enable_fbl_stats)** – Whether or not to consolidate FBL statistics hourly | true |
| **[enable_jlog](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.enable_jlog)** – Whether or not to enable logging of changes in status, suspension and other configuration changes | true |
| **[enable_logging](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.enable_logging)** – Whether or not to enable adaptive logging | true |
| **[fbl_stats_monitor](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.fbl_stats_monitor)** – Define FBL statistics monitoring windows | (14400, 6) |
| **[fbl_stats_series](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.fbl_stats_series)** – Specify the name of a persisted named series to be used to hold the FBL statistics | FBL_stats |
| **[fbl_total_series](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.fbl_total_series)** – Specify the name of a persisted named series to be used to hold the FBL total delivery count for all binding::domain combinations | FBL_total |
| **[jlog_file](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.jlog_file)** – Define the location of the adaptive jlog files | jlog:///var/log/adaptive/adaptive.rt=>ad_stats |
| **[log_base](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.log_base)** – Define the location of the adaptive module logs | /var/log/ecelerity/adaptive |
| **[operational_log_level](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.operational_log_level)** – Define the log level of the adaptive module | NOTICE |
| **[outbound_throttle_messages_monitor](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.outbound_throttle_messages_monitor)** – Specify the monitor window(s) for the outbound throttle audit series | (2, 20) |
| **[outbound_throttle_messages_series](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.outbound_throttle_messages_series)** – The name of the outbound throttle messages series | OBTM_Series |
| **[split_logs_by_binding](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.split_logs_by_binding)** – Whether or not to log by binding name | false |
| **[suspend_sweep_interval](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.suspend_sweep_interval)** – How often to perform a sweep that checks for suspended and blackholed domains and re-enable the affected binding::domain | 60 |

Find below a table of non-module options related to Adaptive Delivery. (However, the adaptive module must be present, to configure any of these options).

<a name="adaptive-options-table"></a>

**Table A.2. adaptive options**

| Option/Description | Default | Scopes |
| --- | --- | --- |
| **[adaptive_adjustment_interval](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_adjustment_interval)** – Throttle the adaptive adjustment interval | 60 | binding, binding_group, domain, global |
| **[adaptive_alert_email_destination](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_alert_email_destination)** – The address where adaptive alerts should be sent |   | binding, binding_group, domain, global |
| **[adaptive_alert_email_sender](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_alert_email_sender)** – Set the sender address of the alert email | NULL | binding, binding_group, domain, global |
| **[adaptive_attempt_threshold](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_attempt_threshold)** – The minimum delivery attempts over a period during which bounce stats are collected and suspensions attempted | 2000 | binding, binding_group, domain, global |
| **[adaptive_backstore_leveldb](https://support.messagesystems.com/docs/web-ref/conf.ref.adaptive_backstore_leveldb.php)** – Use LevelDB as the backing store for Adaptive Delivery *(scope)* |   | global |
| **[adaptive_backstore_riak](https://support.messagesystems.com/docs/web-ref/conf.ref.adaptive_backstore_riak.php)** – Define the characteristics of the Riak backing store *(scope)* |   | global |
| **[adaptive_body_timeout](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_default_suspension](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_default_suspension)** – The amount of time to suspend a domain | 4 hours | binding, binding_group, domain, global |
| **[adaptive_default_suspension_enabled](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_default_suspension_enabled)** – Enables and disables adaptive_rejection_rate_suspension_percentage | false | binding, binding_group, domain, global |
| **[adaptive_ehlo_timeout](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_enabled](https://support.messagesystems.com/docs/web-ref/conf.ref.adaptive_enabled.php)** – Whether to enable the adaptive module for a specific scope | false | binding, binding_group, domain, global |
| **[adaptive_fbl_volume_threshold](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_fbl_volume_threshold)** – The minimum total delivered mail count over a period during which FBL stats are collected | 20000 | binding, binding_group, domain, global |
| **[adaptive_idle_timeout](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_mailfrom_timeout](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_max_deliveries_per_connection](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_max_outbound_connections](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_max_recipients_per_batch](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_max_recipients_per_connection](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_max_resident_active_queue](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_max_retries](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_max_retry_interval](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_notification_events](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_notification_events)** – Configure the events that will trigger an email notification | throttle suspension blackhole | binding, binding_group, domain, global |
| **[adaptive_notification_interval](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_notification_interval)** – The throttle for adaptive alert notification emails | 3600 | binding, binding_group, domain, global |
| **[adaptive_outbound_throttle_messages](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_positive_adjustment_interval](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_positive_adjustment_interval)** – Throttle positive adjustments to adaptive changes | 3600 | binding, binding_group, domain, global |
| **[adaptive_rcptto_timeout](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_rejection_rate_suspension_percentage](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_rejection_rate_suspension_percentage)** – The rate at which messages are rejected | 20 | binding, binding_group, domain, global |
| **[adaptive_retry_fuzz](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_retry_fuzz)** – Allow greater control over bulk message retries in cases where all messages for a domain have to be retried | 4096 | binding, binding_group, domain, global |
| **[adaptive_retry_interval](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_rset_timeout](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options)** – Set the bounds for the adaptive option |   | binding, binding_group, domain, global |
| **[adaptive_scope](https://support.messagesystems.com/docs/web-ref/conf.ref.adaptive_scope.php)** – Define the scope applicable to adaptive delivery | auto | binding, binding_group, domain, global |
| **[adaptive_sweep_rule](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_sweep_rule)** – Set the thresholds and actions for adaptive fbl and bounce rules *(scope)* |   | binding, binding_group, domain, global |
| **[adaptive_sweep_rule_enabled](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.adaptive_sweep_rule_enabled)** – Enable or disable adaptive_sweep_rule in a specified scope | 1 | binding, binding_group, domain, global |
| **[codes](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.codes)** – adaptive_sweep_rule bounce or fbl codes |   | adaptive_sweep_rule |
| **[high_action](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.high_action)** – The action when the high threshold is met and the number of delivery attempts exceeds the adaptive_attempt_threshold | "suspend" "4 hours" | adaptive_sweep_rule |
| **[high_threshold](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.high_threshold)** – The high threshold value for the sum of the rates of the bounce codes or FBL categories | 10 | adaptive_sweep_rule |
| **[low_action](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.low_action)** – The action when the high threshold is not met but the low threshold is met | "throttle" "down" | adaptive_sweep_rule |
| **[low_threshold](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.low_threshold)** – The low threshold value for the sum of the rates of the bounce codes or FBL categories | 5 | adaptive_sweep_rule |

| [Prev](ad.troubleshooting.console.php)  |   |  [Next](ad.executables.php) |
| 8.2. Using the System Console  | [Table of Contents](index.php) |  Appendix B. Adaptive Executables and Console Commands |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)