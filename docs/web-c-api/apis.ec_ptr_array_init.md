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

| ec_ptr_array_init |
| [Prev](apis.ec_ptr_array_get.php)  | Chapter 39. Pointer Array Functions |  [Next](apis.ec_ptr_array_insert.php) |

<a name="apis.ec_ptr_array_init"></a>
## Name

ec_ptr_array_init — Initialize an ec_ptr_array struct

## Synopsis

`#include "misc/ec_ptr_array.h"`

| `(int) **ec_ptr_array_init** (` | <var class="pdparam">array</var>, |   |
|   | <var class="pdparam">prealloc_size</var>, |   |
|   | <var class="pdparam">free_func</var>`)`; |   |

`ec_ptr_array * <var class="pdparam">array</var>`;
`int <var class="pdparam">prealloc_size</var>`;
`ec_ptr_array_free_func <var class="pdparam">free_func</var>`;<a name="idp30767472"></a>
## Description

Initialize an ec_ptr_array struct.

**Parameters**

<dl class="variablelist">

<dt>array</dt>

<dd>

A pointer array. See [ec_ptr_array](structs.ec_ptr_array.php "68.40. ec_ptr_array").

</dd>

<dt>prealloc_size</dt>

<dd>

If this value is less than `EC_PTR_ARRAY_DEFAULT_PREALLOC` (16), it will be set to `EC_PTR_ARRAY_DEFAULT_PREALLOC`.

</dd>

<dt>ec_ptr_array_free_func</dt>

<dd>

Register a function used to free the elements added to the array.

</dd>

</dl>

**Return Values**

On success this function returns `1`; on failure `0`.

**Threading**

It is legal to call this function in any thread.

### Note

While you can use the pointer array functions in any thread, they are not thread safe so use them with caution.

<a name="idp30781104"></a>
## See Also

[Section 68.40, “ec_ptr_array”](structs.ec_ptr_array.php "68.40. ec_ptr_array")

| [Prev](apis.ec_ptr_array_get.php)  | [Up](ptr_array.php) |  [Next](apis.ec_ptr_array_insert.php) |
| ec_ptr_array_get  | [Table of Contents](index.php) |  ec_ptr_array_insert |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)