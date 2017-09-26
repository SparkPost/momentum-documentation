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

| sieve_create_string |
| [Prev](apis.sieve_create_number.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_create_string_list.php) |

<a name="apis.sieve_create_string"></a>
## Name

sieve_create_string — Create a Sieve string

## Synopsis

`#include "sieve/ecsieve.h"`

| `SIEVEARGS * **sieve_create_string** (` | <var class="pdparam">str</var>, |   |
|   | <var class="pdparam">len</var>`)`; |   |

`const char * <var class="pdparam">str</var>`;
`int <var class="pdparam">len</var>`;<a name="idp32391056"></a>
## Description

Create a Sieve string.

**Parameters**

<dl class="variablelist">

<dt>str</dt>

<dd>

The string you wish to create.

</dd>

<dt>len</dt>

<dd>

The length of the string.

</dd>

</dl>

**Return Values**

This function returns a `SIEVEARGS`. For information about this data type see [sieve_ast](structs.sieve_ast.php "68.76. SIEVEARGS (sieve_ast)").

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.sieve_create_number.php)  | [Up](sieve.php) |  [Next](apis.sieve_create_string_list.php) |
| sieve_create_number  | [Table of Contents](index.php) |  sieve_create_string_list |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)