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

| sieve_get_num_args |
| [Prev](apis.sieve_get_module_state.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_get_type_of_arg.php) |

<a name="apis.sieve_get_num_args"></a>
## Name

sieve_get_num_args — Return the number of Sieve arguments

## Synopsis

`#include "sieve/ecsieve.h"`

| `int **sieve_get_num_args** (` | <var class="pdparam">args</var>`)`; |   |

`SIEVEARGS * <var class="pdparam">args</var>`;<a name="idp32697872"></a>
## Description

Return the number of Sieve arguments.

**Parameters**

<dl class="variablelist">

<dt>args</dt>

<dd>

The argument list.

</dd>

</dl>

**Return Values**

This function returns the number of Sieve arguments.

**Threading**

It is legal to call this function in any thread.

<a name="idp32704192"></a>
## See Also

[Section 68.76, “SIEVEARGS (sieve_ast)”](structs.sieve_ast.php "68.76. SIEVEARGS (sieve_ast)") and [sieve_parse_args](apis.sieve_parse_args.php "sieve_parse_args")

| [Prev](apis.sieve_get_module_state.php)  | [Up](sieve.php) |  [Next](apis.sieve_get_type_of_arg.php) |
| sieve_get_module_state  | [Table of Contents](index.php) |  sieve_get_type_of_arg |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)