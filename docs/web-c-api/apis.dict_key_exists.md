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

| dict_key_exists |
| [Prev](apis.dict_key_delete.php)  | Chapter 18. Dictionary Functions |  [Next](apis.dict_key_exists_and_fetch.php) |

<a name="apis.dict_key_exists"></a>
## Name

dict_key_exists — Determine whether the specified key exists

## Synopsis

`#include "ecdict.h"`

| `int **dict_key_exists** (` | <var class="pdparam">a</var>, |   |
|   | <var class="pdparam">b</var>`)`; |   |

`ECDict <var class="pdparam">a</var>`;
`const char * <var class="pdparam">b</var>`;<a name="idp22559136"></a>
## Description

Determine whether the specified key exists.

**Parameters**

<dl class="variablelist">

<dt>a</dt>

<dd>

The ECDict. An ECDict is a typedef of an [ec_hash_table](structs.ec_hash_table.php "68.31. ec_hash_table").

</dd>

<dt>key</dt>

<dd>

The key.

</dd>

</dl>

**Return Value**

Returns `1` if the key exists otherwise `0` is returned.

**Threading**

It is legal to call this function in any thread.

<a name="idp22568528"></a>
## See Also

[Section 68.31, “ec_hash_table”](structs.ec_hash_table.php "68.31. ec_hash_table")

| [Prev](apis.dict_key_delete.php)  | [Up](dict.php) |  [Next](apis.dict_key_exists_and_fetch.php) |
| dict_key_delete  | [Table of Contents](index.php) |  dict_key_exists_and_fetch |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)