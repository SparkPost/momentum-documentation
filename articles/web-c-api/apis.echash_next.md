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

| echash_next |
| [Prev](apis.echash_init.php)  | Chapter 23. echash Functions |  [Next](apis.echash_replace.php) |

<a name="apis.echash_next"></a>
## Name

echash_next — Move to the next item in the hash table

## Synopsis

`#include "echash.h"`

| `int **echash_next** (` | <var class="pdparam">h</var>, |   |
|   | <var class="pdparam">iter</var>, |   |
|   | <var class="pdparam">k</var>, |   |
|   | <var class="pdparam">klen</var>, |   |
|   | <var class="pdparam">data</var>`)`; |   |

`ec_hash_table * <var class="pdparam">h</var>`;
`ec_hash_iter * <var class="pdparam">iter</var>`;
`const char ** <var class="pdparam">k</var>`;
`int * <var class="pdparam">klen</var>`;
`void ** <var class="pdparam">data</var>`;<a name="idp23825760"></a>
## Description

Move to the next item found after the specified key. If a next item exists, the data associated with this position is found in `* data`.

### Note

Do not write to a hash table while iterating over its contents.

**Parameters**

<dl class="variablelist">

<dt>h</dt>

<dd>

The hash table

</dd>

<dt>iter</dt>

<dd>

The hash iterator. For a description of this struct see [ec_hash_iter](structs.ec_hash_iter.php "68.30. ec_hash_iter").

</dd>

<dt>k</dt>

<dd>

The key.

</dd>

<dt>klen</dt>

<dd>

The length of the key `k`.

</dd>

<dt>data</dt>

<dd>

Upon successful execution data * contains the the data associated with the next key.

</dd>

</dl>

**Return Values**

On success this function returns `1`.

**Threading**

It is legal to call this function in any thread.

### Warning

When a key or value is returned, the memory is owned by the hash table. Your memory can become invalid if something else removes an entry from the table after you have queried it.

The hash table data structure is not thread safe; any simultaneous access needs to be coordinated by the API consumer.

<a name="idp23844240"></a>
## See Also

[Section 68.30, “ec_hash_iter”](structs.ec_hash_iter.php "68.30. ec_hash_iter")

| [Prev](apis.echash_init.php)  | [Up](echash.php) |  [Next](apis.echash_replace.php) |
| echash_init  | [Table of Contents](index.php) |  echash_replace |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)