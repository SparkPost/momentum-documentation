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

| string_init_type |
| [Prev](apis.string_destroy.php)  | Chapter 51. String Functions |  [Next](apis.stringprint_domainname.php) |

<a name="apis.string_init_type"></a>
## Name

string_init_type — Initialize a string and pre-allocate its storage, specifying its backing type

## Synopsis

`#include "misc/ec_string.h"`

| `int **string_init_type** (` | <var class="pdparam">str</var>, |   |
|   | <var class="pdparam">size</var>, |   |
|   | <var class="pdparam">type</var>`)`; |   |

`string * <var class="pdparam">str</var>`;
`size_t <var class="pdparam">size</var>`;
`int <var class="pdparam">type</var>`;<a name="idp35450800"></a>
## Description

Initialize a string and pre-allocate its storage, specifying its backing type.

### Note

Objects created using `string_init_type` should be destroyed using [string_destroy](apis.string_destroy.php "string_destroy").

**Parameters**

<dl class="variablelist">

<dt>str</dt>

<dd>

The string.

</dd>

<dt>size</dt>

<dd>

The size of the initial buffer to allocate (including the terminating NULL); must not be `0`.

</dd>

<dt>type</dt>

<dd>

The string type (one of STRING_TYPE_*). For a listing of the string types see [Section 68.85, “string”](structs.string.php "68.85. string").

Starting with Momentum 3.0, the type parameter may be any valid sized memtype ID, either one from the core product (MEMTYPE_XXX defines) or registered by a module.

</dd>

</dl>

**Return Values**

Returns `1` if the buffer was successfully allocated, otherwise `0`.

**Threading**

It is legal to call this function in any thread.

<a name="idp35465264"></a>
## See Also

[string_destroy](apis.string_destroy.php "string_destroy")

| [Prev](apis.string_destroy.php)  | [Up](string.php) |  [Next](apis.stringprint_domainname.php) |
| string_destroy  | [Table of Contents](index.php) |  stringprint_domainname |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)