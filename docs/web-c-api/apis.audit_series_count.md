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

| audit_series_count |
| [Prev](apis.audit_series_add.php)  | Chapter 4. Audit Series Functions |  [Next](apis.audit_series_define.php) |

<a name="apis.audit_series_count"></a>
## Name

audit_series_count — Get the accumulated counts from a named series for a given key

## Synopsis

`#include "modules/validate/audit_series.h"`

| `int **audit_series_count** (` | <var class="pdparam">name</var>, |   |
|   | <var class="pdparam">start</var>, |   |
|   | <var class="pdparam">end</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">ac</var>`)`; |   |

`const char * <var class="pdparam">name</var>`;
`int <var class="pdparam">start</var>`;
`int <var class="pdparam">end</var>`;
`char * <var class="pdparam">key</var>`;
`accept_construct * <var class="pdparam">ac</var>`;<a name="idp19664048"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Get the accumulated counts from a named series for a given key.

**Parameters**

<dl class="variablelist">

<dt>name</dt>

<dd>

- name of the series.

</dd>

<dt>start</dt>

<dd>

- the starting time window.

</dd>

<dt>end</dt>

<dd>

- the ending time window (inclusive).

</dd>

<dt>key</dt>

<dd>

- the key for which the counts is desired. For series of type "cidr", key is of the form "ip/mask". to use the remote IP of current session, caller can pass in "ac" instead.

</dd>

<dt>ac</dt>

<dd>

- accept construct. This is the alternative for passing in an IP for cidr series.

</dd>

</dl>

**Return Values**

counts summed over the given time windows. -1 in case of error.

**Configuration Change. ** This feature is available starting from Momentum 3.1.

| [Prev](apis.audit_series_add.php)  | [Up](audit_series.php) |  [Next](apis.audit_series_define.php) |
| audit_series_add  | [Table of Contents](index.php) |  audit_series_define |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)