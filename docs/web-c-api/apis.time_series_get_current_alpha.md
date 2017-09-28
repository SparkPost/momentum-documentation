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

| time_series_get_current_alpha |
| [Prev](apis.time_series_get.php)  | Chapter 54. Time Series Functions |  [Next](apis.time_series_get_last.php) |

<a name="apis.time_series_get_current_alpha"></a>
## Name

time_series_get_current_alpha — When getting the counts from current bucket of a monitor, the raw value does not reflect the truth since the value from current bucket is only partial value

## Synopsis

`#include "misc/time_series.h"`

| `float **time_series_get_current_alpha** (` | <var class="pdparam">ts</var>, |   |
|   | <var class="pdparam">series_id</var>`)`; |   |

`time_series * <var class="pdparam">ts</var>`;
`int <var class="pdparam">series_id</var>`;<a name="idp95168"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

When getting the counts from current bucket of a monitor, the raw value does not reflect the truth since the value from current bucket is only partial value.

To illustrate the problem, look at the following:

buckets: 0 1 ... number-of-interval-1 |----|----|...|----| ^ now here, now (the moment when counts are used) is still in the middle of the current bucket (interval). The value from current interval will not reflect the actual when "now" is at the end of current bucket. Therefore, to guess the "true value" for current bucket, we can use the weighted value of previous bucket. The guessed value of current interval is computed as follow:

(value of current bucket) + (1 - alpha) * (value of previous bucket).

This function returns the alpha. You can consider alpha as the percentage of time passed since the beginning of current interval.

NOTE: this function should be used together with [time_series_get](apis.time_series_get.php "time_series_get") and called immediately after [time_series_get](apis.time_series_get.php "time_series_get").

**Parameters**

<dl class="variablelist">

<dt>ts</dt>

<dd>

- the time series.

</dd>

<dt>series_id</dt>

<dd>

- sequence number of the monitor.

</dd>

</dl>

**Return Values**

alpha.

| [Prev](apis.time_series_get.php)  | [Up](time_series.php) |  [Next](apis.time_series_get_last.php) |
| time_series_get  | [Table of Contents](index.php) |  time_series_get_last |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)