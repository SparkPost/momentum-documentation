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

| ec_bag_put |
| [Prev](apis.ec_bag_get.php)  | Chapter 5. Bag Functions |  [Next](apis.ec_bag_remove.php) |

<a name="apis.ec_bag_put"></a>
## Name

ec_bag_put — Put something in the specified bag

## Synopsis

`#include "ec_boh.h"`

| `int **ec_bag_put** (` | <var class="pdparam">bag</var>, |   |
|   | <var class="pdparam">typedname</var>, |   |
|   | <var class="pdparam">thing</var>`)`; |   |

`ec_bag * <var class="pdparam">bag</var>`;
`const char * <var class="pdparam">typedname</var>`;
`void * <var class="pdparam">thing</var>`;<a name="idp19902352"></a>
## Description

Put something in the bag.

**Parameters**

<dl class="variablelist">

<dt>bag</dt>

<dd>

The ec_bag.

</dd>

<dt>typedname</dt>

<dd>

The name of the data type that we are placing in the bag. For an explanation of this seemingly redundant parameter see [ec_bag_find](apis.ec_bag_find.php "ec_bag_find").

</dd>

<dt>thing</dt>

<dd>

The item being placed in the bag.

</dd>

</dl>

**Return Value**

On success, this function returns `1`.

**Threading**

It is legal to call this function in any thread.

<a name="idp19913264"></a>
## See Also

[ec_bag_create](apis.ec_bag_create.php "ec_bag_create")

| [Prev](apis.ec_bag_get.php)  | [Up](bag.php) |  [Next](apis.ec_bag_remove.php) |
| ec_bag_get  | [Table of Contents](index.php) |  ec_bag_remove |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)