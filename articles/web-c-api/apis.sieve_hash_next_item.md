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

| sieve_hash_next_item |
| [Prev](apis.sieve_hash_first_item.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_inc_counter.php) |

<a name="apis.sieve_hash_next_item"></a>
## Name

sieve_hash_next_item — Get the next item from a hash argument and add a reference to it

## Synopsis

`#include "sieve/ecsieve.h"`

| `int **sieve_hash_first_item** (` | <var class="pdparam">hash</var>, |   |
|   | <var class="pdparam">iter</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">item</var>`)`; |   |

`SIEVEARGS * <var class="pdparam">hash</var>`;
`ec_hash_iter * <var class="pdparam">iter</var>`;
`const char ** <var class="pdparam">key</var>`;
`SIEVEARGS ** <var class="pdparam">item</var>`;<a name="idp32808768"></a>
## Description

Get the next item from a hash argument and add a reference to it.

You must call [sieve_arg_delref](apis.sieve_arg_delref.php "sieve_arg_delref") when you are done using the item.

**Parameters**

<dl class="variablelist">

<dt>hash</dt>

<dd>

A pointer to the ec_hash_table of the `SIEVETOKEN value` of the specified `SIEVEARG`.

</dd>

<dt>iter</dt>

<dd>

The hash iterator. For more information about this data type see [ec_hash_iter](structs.ec_hash_iter.php "68.30. ec_hash_iter").

</dd>

<dt>key</dt>

<dd>

The key to the hash item you wish to return.

</dd>

<dt>item</dt>

<dd>

The value of the specified `key`.

</dd>

</dl>

**Return Value**

On success this function returns `1`; on failure, `0`.

**Threading**

It is legal to call this function in any thread.

<a name="idp32824560"></a>
## See Also

[Section 68.31, “ec_hash_table”](structs.ec_hash_table.php "68.31. ec_hash_table"), [sieve_get_hash_item](apis.sieve_get_hash_item.php "sieve_get_hash_item") and [Section 68.76, “SIEVEARGS (sieve_ast)”](structs.sieve_ast.php "68.76. SIEVEARGS (sieve_ast)")

| [Prev](apis.sieve_hash_first_item.php)  | [Up](sieve.php) |  [Next](apis.sieve_inc_counter.php) |
| sieve_hash_first_item  | [Table of Contents](index.php) |  sieve_inc_counter |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)