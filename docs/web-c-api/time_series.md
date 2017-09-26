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

| Chapter 54. Time Series Functions |
| [Prev](apis.ec_throttle_time_until_clear.php)  | Part II. C API |  [Next](apis.time_series_add_data.php) |

## Chapter 54. Time Series Functions

**Table of Contents**

<dl class="toc">

<dt>[time_series_add_data](apis.time_series_add_data.php) — Add data to all monitors in a time series</dt>

<dt>[time_series_add_data_at](apis.time_series_add_data_at.php) — Add data to all monitors in a time series</dt>

<dt>[time_series_clear](apis.time_series_clear.php) — Remove a bucket (specified by bucket number) in a monitor and return the removed bucket</dt>

<dt>[time_series_del_data](apis.time_series_del_data.php) — Delete data from all monitors in a time series</dt>

<dt>[time_series_del_data_at](apis.time_series_del_data_at.php) — Delete data from all monitors in a time series</dt>

<dt>[time_series_destroy](apis.time_series_destroy.php) — Destroy a time series</dt>

<dt>[time_series_destroy_series](apis.time_series_destroy_series.php) — Destroy a monitor identified by a sequence number</dt>

<dt>[time_series_get](apis.time_series_get.php) — Return specified bucket of a monitor</dt>

<dt>[time_series_get_current_alpha](apis.time_series_get_current_alpha.php) — When getting the counts from current bucket of a monitor, the raw value does not reflect the truth since the value from current bucket is only partial value</dt>

<dt>[time_series_get_last](apis.time_series_get_last.php) — Remove the bucket before the current one</dt>

<dt>[time_series_has_data](apis.time_series_has_data.php) — Returns true if at least one monitor of a time series contains data</dt>

<dt>[time_series_init](apis.time_series_init.php) — Function to allocate and initialize a time series data structure</dt>

<dt>[time_series_init2](apis.time_series_init2.php) — Similar to time_series_init() and supporting deleting item from a bucket</dt>

<dt>[time_series_init_series](apis.time_series_init_series.php) — Add a monitor to the series</dt>

<dt>[time_series_maintain_arrays](apis.time_series_maintain_arrays.php) — Remove the staled data from all monitors of a time series</dt>

<dt>[time_series_series_has_data](apis.time_series_series_has_data.php) — Returns true if a given monitor in a time series contains data</dt>

</dl>

| [Prev](apis.ec_throttle_time_until_clear.php)  | [Up](pt.apis.php) |  [Next](apis.time_series_add_data.php) |
| ec_throttle_time_until_clear  | [Table of Contents](index.php) |  time_series_add_data |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)