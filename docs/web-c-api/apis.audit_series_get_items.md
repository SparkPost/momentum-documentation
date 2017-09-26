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

| audit_series_get_items |
| [Prev](apis.audit_series_define.php)  | Chapter 4. Audit Series Functions |  [Next](apis.audit_series_get_type.php) |

<a name="apis.audit_series_get_items"></a>
## Name

audit_series_get_items — Return the item of the named series

## Synopsis

`#include "modules/validate/audit_series.h"`

| `audit_series_item * **audit_series_get_items** (` | <var class="pdparam">series</var>, |   |
|   | <var class="pdparam">start</var>, |   |
|   | <var class="pdparam">end</var>`)`; |   |

`const char * <var class="pdparam">series</var>`;
`int <var class="pdparam">start</var>`;
`int <var class="pdparam">end</var>`;<a name="idp19723584"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Return the item of the named series.

The series must be of type "string".

**Parameters**

<dl class="variablelist">

<dt>series</dt>

<dd>

- the name of the series.

</dd>

<dt>start</dt>

<dd>

- The start window to compute the count (inclusive).

</dd>

<dt>end</dt>

<dd>

- The end window to compute the count (inclusive).

</dd>

</dl>

**Return Values**

linked list of audit_series_item which should be released by audit_series_item_delref.

**Configuration Change. ** This feature is available starting from Momentum 3.2.

| [Prev](apis.audit_series_define.php)  | [Up](audit_series.php) |  [Next](apis.audit_series_get_type.php) |
| audit_series_define  | [Table of Contents](index.php) |  audit_series_get_type |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)