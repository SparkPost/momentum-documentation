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

| sieve_get_arg |
| [Prev](apis.sieve_get_accept_construct.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_get_arg_as_numeric.php) |

<a name="apis.sieve_get_arg"></a>
## Name

sieve_get_arg — Get the argument at the specified index

## Synopsis

`#include "sieve/ecsieve.h"`

| `SIEVEARGS * **sieve_get_arg** (` | <var class="pdparam">args</var>, |   |
|   | <var class="pdparam">n</var>`)`; |   |

`SIEVEARGS * <var class="pdparam">args</var>`;
`int <var class="pdparam">n</var>`;<a name="idp32512832"></a>
## Description

Get the argument at the specified zero-based index.

You must call [sieve_arg_delref](apis.sieve_arg_delref.php "sieve_arg_delref") when you are done using the item.

**Parameters**

<dl class="variablelist">

<dt>args</dt>

<dd>

The argument list.

</dd>

<dt>n</dt>

<dd>

Which argument to examine, indexed from 0.

</dd>

</dl>

**Return Values**

The argument at the specified index is returned.

**Threading**

It is legal to call this function in any thread.

<a name="idp32522224"></a>
## See Also

[Section 68.76, “SIEVEARGS (sieve_ast)”](structs.sieve_ast.php "68.76. SIEVEARGS (sieve_ast)")

| [Prev](apis.sieve_get_accept_construct.php)  | [Up](sieve.php) |  [Next](apis.sieve_get_arg_as_numeric.php) |
| sieve_get_accept_construct  | [Table of Contents](index.php) |  sieve_get_arg_as_numeric |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)