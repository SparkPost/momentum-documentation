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

| cidr_ipv4_count2 |
| [Prev](cidr.php)  | Chapter 10. CIDR Functions |  [Next](apis.cidr_ipv4_delete.php) |

<a name="apis.cidr_ipv4_count2"></a>
## Name

cidr_ipv4_count2 — Similar to cidr_ipv4_count but takes ec_sockaddr/mask or string representation cidr

## Synopsis

`#include "cidrtree/cidrtree.h"`

| `u_int32_t **cidr_ipv4_count2** (` | <var class="pdparam">root</var>, |   |
|   | <var class="pdparam">addr</var>, |   |
|   | <var class="pdparam">bit_len</var>, |   |
|   | <var class="pdparam">cidr</var>`)`; |   |

`cidrnode_ipv4 * <var class="pdparam">root</var>`;
`ec_sockaddr * <var class="pdparam">addr</var>`;
`u_int32_t <var class="pdparam">bit_len</var>`;
`const char * <var class="pdparam">cidr</var>`;<a name="idp20706272"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Similar to cidr_ipv4_count but takes ec_sockaddr/mask or string representation cidr.

If addr is given, it will take precedence over cidr. This function is mainly for Lua scripting.

**Parameters**

<dl class="variablelist">

<dt>root</dt>

<dd>

-- cidr tree

</dd>

<dt>addr</dt>

<dd>

-- Address

</dd>

<dt>bit_len</dt>

<dd>

-- should be from 0 to 32.

</dd>

<dt>cidr</dt>

<dd>

-- takes the form of "IP/[0-9]+".

</dd>

</dl>

**Return Values**

connection count.

| [Prev](cidr.php)  | [Up](cidr.php) |  [Next](apis.cidr_ipv4_delete.php) |
| Chapter 10. CIDR Functions  | [Table of Contents](index.php) |  cidr_ipv4_delete |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)