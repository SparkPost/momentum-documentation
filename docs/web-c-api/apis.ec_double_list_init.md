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

| ec_double_list_init |
| [Prev](apis.ec_double_list_destroy.php)  | Chapter 22. ec_double Functions |  [Next](apis.ec_double_list_pop.php) |

<a name="apis.ec_double_list_init"></a>
## Name

ec_double_list_init — Initialize a new list

## Synopsis

`#include "misc/ec_double_list.h"`

| `int **ec_double_list_init** (` | <var class="pdparam">list</var>, |   |
|   | <var class="pdparam">ts</var>`)`; |   |

`ec_double_list * <var class="pdparam">list</var>`;
`int <var class="pdparam">ts</var>`;<a name="idp23547168"></a>
## Description

Initialize a new double linked list.

**Parameters**

<dl class="variablelist">

<dt>list</dt>

<dd>

The list to be initialized.

</dd>

<dt>ts</dt>

<dd>

If non-zero, enables the internal mutex lock.

</dd>

</dl>

**Return Value**

On success, this function returns `0`; on failure `-1` is returned.

**Threading**

It is legal to call this function in any thread.

<a name="idp23555888"></a>
## See Also

[Section 68.29, “ec_double_list”](structs.ec_double_list.php "68.29. ec_double_list") and [ec_double_list_destroy](apis.ec_double_list_destroy.php "ec_double_list_destroy")

| [Prev](apis.ec_double_list_destroy.php)  | [Up](double.php) |  [Next](apis.ec_double_list_pop.php) |
| ec_double_list_destroy  | [Table of Contents](index.php) |  ec_double_list_pop |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)