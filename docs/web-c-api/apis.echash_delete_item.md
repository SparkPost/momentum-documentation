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

| echash_delete_item |
| [Prev](apis.echash_delete_all.php)  | Chapter 23. echash Functions |  [Next](apis.echash_delref.php) |

<a name="apis.echash_delete_item"></a>
## Name

echash_delete_item — Remove the specified item from the hash table

## Synopsis

`#include "echash.h"`

| `int **echash_delete_item** (` | <var class="pdparam">ht</var>, |   |
|   | <var class="pdparam">k</var>, |   |
|   | <var class="pdparam">klen</var>`)`; |   |

`ec_hash_table * <var class="pdparam">ht</var>`;
`const char * <var class="pdparam">k</var>`;
`int <var class="pdparam">klen</var>`;<a name="idp23737520"></a>
## Description

This function removes the specified item from the hash table. If keyfree and datafree functions were specified when the table was created, they will be invoked.

**Parameters**

<dl class="variablelist">

<dt>ht</dt>

<dd>

The hash table.

</dd>

<dt>k</dt>

<dd>

The key to the item that you wish to remove.

</dd>

<dt>klen</dt>

<dd>

The length of the key.

</dd>

</dl>

**Return Values**

On success this function returns `1` and on failure `0`.

**Threading**

It is legal to call this function in any thread.

The hash table data structure is not thread safe; any simultaneous access needs to be coordinated by the API consumer.

<a name="idp23749088"></a>
## See Also

[Section 68.31, “ec_hash_table”](structs.ec_hash_table.php "68.31. ec_hash_table"), [echash_create](apis.echash_create.php "echash_create")

| [Prev](apis.echash_delete_all.php)  | [Up](echash.php) |  [Next](apis.echash_delref.php) |
| echash_delete_all  | [Table of Contents](index.php) |  echash_delref |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)