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

| rs_next |
| [Prev](apis.rs_getlist.php)  | Chapter 55. Utility Functions |  [Next](validate.php) |

<a name="apis.rs_next"></a>
## Name

rs_next — Move to the next node in the `RSplayTree` and return the data

## Synopsis

`#include "rsplay.h"`

| `void * **rs_next** (` | <var class="pdparam">sl</var>, |   |
|   | <var class="pdparam">iter</var>`)`; |   |

`RSplayTree * <var class="pdparam">sl</var>`;
`struct rsplaynode ** <var class="pdparam">iter</var>`;<a name="idp36810032"></a>
## Description

Move to the next node in the `RSplayTree` and return the data.

**Parameters**

<dl class="variablelist">

<dt>sl</dt>

<dd>

The root of an [Section 68.69, “rsplaytree”](structs.rsplaytree.php "68.69. rsplaytree").

</dd>

<dt>iter</dt>

<dd>

A pointer to the address of a node in the `RSplayTree`. As a side effect, this will be updated to contain the address of the next node in the tree.

</dd>

</dl>

**Return Values**

Returns the data in the next node of the `RSplayTree` or `NULL` if the next node is `NULL`.

**Threading**

It is legal to call this function in any thread.

<a name="idp36820768"></a>
## See Also

[rs_getlist](apis.rs_getlist.php "rs_getlist"), [Section 68.68, “rsplaynode”](structs.rsplaynode.php "68.68. rsplaynode"), and [Section 68.69, “rsplaytree”](structs.rsplaytree.php "68.69. rsplaytree").

| [Prev](apis.rs_getlist.php)  | [Up](utility.php) |  [Next](validate.php) |
| rs_getlist  | [Table of Contents](index.php) |  Chapter 56. Validation Context Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)