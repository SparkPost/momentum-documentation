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

| time_series_add_data_at |
| [Prev](apis.time_series_add_data.php)  | Chapter 54. Time Series Functions |  [Next](apis.time_series_clear.php) |

<a name="apis.time_series_add_data_at"></a>
## Name

time_series_add_data_at — Add data to all monitors in a time series

## Synopsis

`#include "misc/time_series.h"`

| `void **time_series_add_data_at** (` | <var class="pdparam">ts</var>, |   |
|   | <var class="pdparam">data</var>, |   |
|   | <var class="pdparam">whence</var>`)`; |   |

`time_series * <var class="pdparam">ts</var>`;
`void * <var class="pdparam">data</var>`;
`time_t <var class="pdparam">whence</var>`;<a name="idp36092640"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Add data to all monitors in a time series.

The data will be added to the bucket corresponding to a given time stamp.

**Parameters**

<dl class="variablelist">

<dt>ts</dt>

<dd>

- the time series.

</dd>

<dt>data</dt>

<dd>

- the data to be added.

</dd>

<dt>whence</dt>

<dd>

- the time stamp when data should be added. If 0 or in a future time, then current time is to used. If too old to be within a monitor windows, the request will be skiped for that monitor.

</dd>

</dl>

**Return Values**

void.

| [Prev](apis.time_series_add_data.php)  | [Up](time_series.php) |  [Next](apis.time_series_clear.php) |
| time_series_add_data  | [Table of Contents](index.php) |  time_series_clear |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)