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

| echash_delete |
| [Prev](apis.echash_create.php)  | Chapter 23. echash Functions |  [Next](apis.echash_delete_all.php) |

<a name="apis.echash_delete"></a>
## Name

echash_delete — This function removes an item from the hash table and calls the specified keyfree and datafree functions

## Synopsis

`#include "echash.h"`

| `int **echash_delete** (` | <var class="pdparam">ht</var>, |   |
|   | <var class="pdparam">k</var>, |   |
|   | <var class="pdparam">klen</var>, |   |
|   | <var class="pdparam">keyfree</var>, |   |
|   | <var class="pdparam">datafree</var>`)`; |   |

`ec_hash_table * <var class="pdparam">ht</var>`;
`const char * <var class="pdparam">k</var>`;
`int <var class="pdparam">klen</var>`;
`ECHashFreeFunc <var class="pdparam">keyfree</var>`;
`ECHashFreeFunc <var class="pdparam">datafree</var>`;<a name="idp23681648"></a>
## Description

Remove an item from a hash table and call the keyfree and datafree functions passed in.

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

<dt>keyfree</dt>

<dd>

A pointer to the hash table keys function.

</dd>

<dt>datafree</dt>

<dd>

A pointer to the hash table data function.

</dd>

</dl>

### Note

If you wish to use the `ECHashFreeFunc` functions passed in when the hash table was created, use [echash_delete_item](apis.echash_delete_item.php "echash_delete_item") instead of this function.

The keyfree and datafree functions are optional. If they do not exist, no function is invoked when data or keys are freed.

**Return Values**

On success this function returns `1` and on failure `0`.

**Threading**

It is legal to call this function in any thread.

The hash table data structure is not thread safe; any simultaneous access needs to be coordinated by the API consumer.

<a name="idp23700464"></a>
## See Also

[Section 68.31, “ec_hash_table”](structs.ec_hash_table.php "68.31. ec_hash_table"), [echash_delete_item](apis.echash_delete_item.php "echash_delete_item") and [echash_create](apis.echash_create.php "echash_create")

| [Prev](apis.echash_create.php)  | [Up](echash.php) |  [Next](apis.echash_delete_all.php) |
| echash_create  | [Table of Contents](index.php) |  echash_delete_all |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)