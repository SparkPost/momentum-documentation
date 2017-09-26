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

| Appendix C. Adaptive Logs |
| [Prev](ad.executables.php)  |   |  [Next](ad.appendix.adaptive_rules.php) |

## Adaptive Logs

The following table shows the log entries at the various debug levels.

<a name="ad.adaptive.log.entries.table"></a>

**Table C.1. adaptive log entries**

| Error Level | Error Message | Action |
| --- | --- | --- |
| DEBUG | closing *`io_wrapper_path`* | See message |
| DEBUG | opened:*`filename`* | See message |
| DEBUG | ec_adaptive_sweep_rules_by_binding_domain: find *`instances`* scope for domain *`domain_name`* within binding *`binding_name`* bdname); | See message |
| DEBUG | adaptive: singleton module: *`name`* is found |   |
| INFO | ec_adaptive_sweep_rules_by_binding_domain: no stats available | See message |
| INFO | adaptive: Created persisted cluster-wide series *`fbl_stats_series`* with windows size/number= *`size/number`*n" | See message |
| INFO | adaptive: cluster is detected | See message |
| ERROR | unable to finding retry state for *`binding`*:*`domain`* | See message |
| ERROR | adaptive: unable to open *`datastore`*: *`error`* | See message |
| ERROR | adaptive: error executing query: *`error`* | See message |
| ERROR | adaptive: suspensions_cb called with argc *`number`* (expected 5) | See message |
| ERROR | adaptive: binding_age_cb called with argc *`number`* (expected 3) | See message |
| ERROR | adaptive: binding_age_cb called with NULL argv | See message |
| ERROR | adaptive: optvals_cb called with argc *`number`* (expected 5) | See message |
| ERROR | adaptive: optvals_cb called with NULL argv | See message |
| ERROR | adaptive: unable to open *`datastore error`*        | See message |
| ERROR | adaptive: error executing query: *`error`* | See message |
| ERROR | adaptive: fail to increment key *`fbl_buffer`* of series *`fbl_stats_series`* | See message |
| ERROR | adaptive: ill-formed fbl_stats_monitor: *`name`* Use 86400 as window size | See message |
| ERROR | adaptive: ill-formed fbl_stats_monitor: *`name`*. Use 6 as window count | See message |
| ERROR | failed to open: *`filename`* | See message |
| ERROR | ec_adaptive_sweep_rules_by_binding_domain: missing domain | See message |
| ERROR | ec_adaptive_sweep_rules_by_binding_domain: cannot find scope for binding *`bdname`* | See message |
| ERROR | adaptive: fail to fetch singleton modules, assume cluster is not configured | See message |
| ERROR | adaptive: Failed to create persisted cluster-wide series *`fbl_stats_series`* with windows size/number= *`size/number`* | See message |
| ERROR | Could not resize *`stats_cache_name`* | See message |
| CRITICAL | ec_adaptive_new_suspension called with NULL binding | Check binding configurations. |
| CRITICAL | ec_adaptive_new_suspension called with NULL domain | Check domain configurations. |
| CRITICAL | adaptive_lookup_value hook not found; AD is effectively disabled. Did you forget to load the msys.adaptive module. | See message. |
| CRITICAL | Cannot create adaptive thread pool. | See message |
| CRITICAL | Cannot create option cache. | See message |
| CRITICAL | Cannot create suspensions table. | See message |
| CRITICAL | Cannot create binding ages table. | See message |
| CRITICAL | Cannot create optvals table. | See message |

| [Prev](ad.executables.php)  |   |  [Next](ad.appendix.adaptive_rules.php) |
| Appendix B. Adaptive Executables and Console Commands  | [Table of Contents](index.php) |  Appendix D. The `adaptive_rules.lua` File |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)