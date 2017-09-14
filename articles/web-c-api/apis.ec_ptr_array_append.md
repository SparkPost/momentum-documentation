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

| ec_ptr_array_append |
| [Prev](ptr_array.php)  | Chapter 39. Pointer Array Functions |  [Next](apis.ec_ptr_array_destroy.php) |

<a name="apis.ec_ptr_array_append"></a>
## Name

ec_ptr_array_append — Append to an ec_ptr_array

## Synopsis

`#include "misc/ec_ptr_array.h"`

| `int **ec_ptr_array_append** (` | <var class="pdparam">array</var>, |   |
|   | <var class="pdparam">element</var>`)`; |   |

`ec_ptr_array * <var class="pdparam">array</var>`;
`void * <var class="pdparam">element</var>`;<a name="idp30712064"></a>
## Description

Append an item to an ec_ptr_array.

**Parameters**

<dl class="variablelist">

<dt>array</dt>

<dd>

An ec_ptr_array. See [ec_ptr_array](structs.ec_ptr_array.php "68.40. ec_ptr_array").

</dd>

<dt>element</dt>

<dd>

The pointer that you wish to append.

</dd>

</dl>

**Return Values**

On success this function returns the index of the appended item. On failure, `-1` is returned.

**Threading**

It is legal to call this function in any thread.

### Note

While you can use the pointer array functions in any thread, they are not thread safe so use them with caution.

<a name="idp30722448"></a>
## See Also

[Section 68.40, “ec_ptr_array”](structs.ec_ptr_array.php "68.40. ec_ptr_array")

| [Prev](ptr_array.php)  | [Up](ptr_array.php) |  [Next](apis.ec_ptr_array_destroy.php) |
| Chapter 39. Pointer Array Functions  | [Table of Contents](index.php) |  ec_ptr_array_destroy |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)