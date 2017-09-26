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

| audit_series_define |
| [Prev](apis.audit_series_count.php)  | Chapter 4. Audit Series Functions |  [Next](apis.audit_series_get_items.php) |

<a name="apis.audit_series_define"></a>
## Name

audit_series_define — Define an named audit series

## Synopsis

`#include "modules/validate/audit_series.h"`

| `int **audit_series_define** (` | <var class="pdparam">name</var>, |   |
|   | <var class="pdparam">type</var>, |   |
|   | <var class="pdparam">interval</var>, |   |
|   | <var class="pdparam">num_windows</var>, |   |
|   | <var class="pdparam">serialize</var>, |   |
|   | <var class="pdparam">replicate</var>, |   |
|   | <var class="pdparam">persisted</var>`)`; |   |

`const char * <var class="pdparam">name</var>`;
`const char * <var class="pdparam">type</var>`;
`int <var class="pdparam">interval</var>`;
`int <var class="pdparam">num_windows</var>`;
`int <var class="pdparam">serialize</var>`;
`char * <var class="pdparam">replicate</var>`;
`int <var class="pdparam">persisted</var>`;<a name="idp19692720"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Define an named audit series.

It should be called only once for a named series.

**Parameters**

<dl class="variablelist">

<dt>name</dt>

<dd>

- name of the series.

</dd>

<dt>type</dt>

<dd>

- type of the series. It should be "cidr", "cidr_ipv6", or "string".

</dd>

<dt>interval</dt>

<dd>

- the time window size in seconds.

</dd>

<dt>num_windows</dt>

<dd>

- the number of windows in the series.

</dd>

<dt>serialize</dt>

<dd>

- if != 0, the series will be written to log.

</dd>

<dt>replicate</dt>

<dd>

- if = "cluster", the series will be replicated across cluster. if = "manager", the series will be replicated to manager only.

</dd>

<dt>persisted</dt>

<dd>

- if != 0, the series will will be persisted and survive the restart.

</dd>

</dl>

**Return Values**

one of the audit_series_return_code.

**Configuration Change. ** This feature is available starting from Momentum 3.1.

| [Prev](apis.audit_series_count.php)  | [Up](audit_series.php) |  [Next](apis.audit_series_get_items.php) |
| audit_series_count  | [Table of Contents](index.php) |  audit_series_get_items |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)