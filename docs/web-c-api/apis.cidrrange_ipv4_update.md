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

| cidrrange_ipv4_update |
| [Prev](apis.cidrrange_ipv4_query.php)  | Chapter 10. CIDR Functions |  [Next](apis.cidrrange_val_ipv4_dump.php) |

<a name="apis.cidrrange_ipv4_update"></a>
## Name

cidrrange_ipv4_update — Inserts a node

## Synopsis

`#include "cidrtree/cidrrange.h"`

| `void **cidrrange_ipv4_update** (` | <var class="pdparam">root</var>, |   |
|   | <var class="pdparam">ip</var>, |   |
|   | <var class="pdparam">mask</var>, |   |
|   | <var class="pdparam">orientation</var>`)`; |   |

`cidrrange_ipv4 * <var class="pdparam">root</var>`;
`struct in_addr <var class="pdparam">ip</var>`;
`u_int32_t <var class="pdparam">mask</var>`;
`u_int32_t <var class="pdparam">orientation</var>`;<a name="idp20876960"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Inserts a node.

Inserts a node in the range.

**Parameters**

<dl class="variablelist">

<dt>root</dt>

<dd>

the root of the range

</dd>

<dt>ip</dt>

<dd>

the ip of the node

</dd>

<dt>mask</dt>

<dd>

the mask of the node

</dd>

<dt>orientation</dt>

<dd>

CIDRRANGE_NEGATIVE or CIDRRANGE_POSITIVE

</dd>

</dl>

| [Prev](apis.cidrrange_ipv4_query.php)  | [Up](cidr.php) |  [Next](apis.cidrrange_val_ipv4_dump.php) |
| cidrrange_ipv4_query  | [Table of Contents](index.php) |  cidrrange_val_ipv4_dump |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)