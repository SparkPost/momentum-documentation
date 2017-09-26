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

| dict_next |
| [Prev](apis.dict_key_exists_and_fetch.php)  | Chapter 18. Dictionary Functions |  [Next](apis.dict_serialize.php) |

<a name="apis.dict_next"></a>
## Name

dict_next — Fetch the next key/value pair

## Synopsis

`#include "ecdict.h"`

| `int **dict_next** (` | <var class="pdparam">a</var>, |   |
|   | <var class="pdparam">i</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">val</var>`)`; |   |

`ECDict <var class="pdparam">a</var>`;
`ECDict_Iterator * <var class="pdparam">i</var>`;
`const char ** <var class="pdparam">key</var>`;
`const char ** <var class="pdparam">val</var>`;<a name="idp22604864"></a>
## Description

If there is another key/value pair in the dictionary, fetch it.

**Parameters**

<dl class="variablelist">

<dt>a</dt>

<dd>

The ECDict. An ECDict is a typedef of an [ec_hash_table](structs.ec_hash_table.php "68.31. ec_hash_table").

</dd>

<dt>i</dt>

<dd>

The iterator. An ECDict_Iterator is a typedef of an [ec_hash_iter](structs.ec_hash_iter.php "68.30. ec_hash_iter").

</dd>

<dt>key</dt>

<dd>

The current key.

</dd>

<dt>val</dt>

<dd>

The value associated with the `key`.

</dd>

</dl>

**Return Value**

Returns `1` if there is a next key. Otherwise, `0` is returned. `* key` points to the next key and `* val` to the associated value.

### Warning

When a key or value is returned, the memory is owned by the dictionary. Your memory can become invalid if something else removes an entry from the dictionary after you have queried it.

**Threading**

It is legal to call this function in any thread.

<a name="idp22621200"></a>
## See Also

[Section 68.30, “ec_hash_iter”](structs.ec_hash_iter.php "68.30. ec_hash_iter")

| [Prev](apis.dict_key_exists_and_fetch.php)  | [Up](dict.php) |  [Next](apis.dict_serialize.php) |
| dict_key_exists_and_fetch  | [Table of Contents](index.php) |  dict_serialize |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)