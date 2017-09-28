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

| time_series_init_series |
| [Prev](apis.time_series_init2.php)  | Chapter 54. Time Series Functions |  [Next](apis.time_series_maintain_arrays.php) |

<a name="apis.time_series_init_series"></a>
## Name

time_series_init_series — Add a monitor to the series

## Synopsis

`#include "misc/time_series.h"`

| `int **time_series_init_series** (` | <var class="pdparam">ts</var>, |   |
|   | <var class="pdparam">base_interval</var>, |   |
|   | <var class="pdparam">num_intervals</var>`)`; |   |

`time_series * <var class="pdparam">ts</var>`;
`time_t <var class="pdparam">base_interval</var>`;
`unsigned short <var class="pdparam">num_intervals</var>`;<a name="idp36401344"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Add a monitor to the series.

**Parameters**

<dl class="variablelist">

<dt>ts</dt>

<dd>

- the time series.

</dd>

<dt>base_interval</dt>

<dd>

- the size of the monitor's interval.

</dd>

<dt>num_intervals</dt>

<dd>

- the number of the intervals.

</dd>

</dl>

**Return Values**

total count of monitors.

| [Prev](apis.time_series_init2.php)  | [Up](time_series.php) |  [Next](apis.time_series_maintain_arrays.php) |
| time_series_init2  | [Table of Contents](index.php) |  time_series_maintain_arrays |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)