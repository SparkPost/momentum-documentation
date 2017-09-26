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

| cidrrange_val_ipv4_free |
| [Prev](apis.cidrrange_val_ipv4_dump.php)  | Chapter 10. CIDR Functions |  [Next](apis.cidrrange_val_ipv4_merge.php) |

<a name="apis.cidrrange_val_ipv4_free"></a>
## Name

cidrrange_val_ipv4_free — Free the resources allocated for a list of CIDR blocks

## Synopsis

`#include "cidrtree/cidrrange.h"`

| `void **cidrrange_val_ipv4_free** (` | <var class="pdparam">node</var>`)`; |   |

`cidrrange_val_ipv4 * <var class="pdparam">node</var>`;<a name="idp20913424"></a>
## Description

Free the resources allocated for a list of CIDR blocks.

**Parameters**

<dl class="variablelist">

<dt>node</dt>

<dd>

The address of the `cidrrange_val_ipv4` list for which you want to free resources.

The following typedef applies to this data type:

`typedef Skiplist cidrrange_val_ipv4;`

</dd>

</dl>

**Return Values**

This function returns `void`.

**Threading**

It is legal to call this function in any thread.

<a name="idp20921760"></a>
## See Also

[cidr_ipv4_delete](apis.cidr_ipv4_delete.php "cidr_ipv4_delete"), [cidrrange_val_ipv4_new](apis.cidrrange_val_ipv4_new.php "cidrrange_val_ipv4_new"), [cidrrange_val_ipv4_query](apis.cidrrange_val_ipv4_query.php "cidrrange_val_ipv4_query"), and [cidrrange_val_ipv4_update](apis.cidrrange_val_ipv4_update.php "cidrrange_val_ipv4_update").

| [Prev](apis.cidrrange_val_ipv4_dump.php)  | [Up](cidr.php) |  [Next](apis.cidrrange_val_ipv4_merge.php) |
| cidrrange_val_ipv4_dump  | [Table of Contents](index.php) |  cidrrange_val_ipv4_merge |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)