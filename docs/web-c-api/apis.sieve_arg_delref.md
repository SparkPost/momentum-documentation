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

| sieve_arg_delref |
| [Prev](apis.sieve_arg_as_string.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_case_fold2.php) |

<a name="apis.sieve_arg_delref"></a>
## Name

sieve_arg_delref — Remove a reference to a Sieve argument

## Synopsis

`#include "sieve/ecsieve.h"`

| `void **sieve_arg_delref** (` | <var class="pdparam">arg</var>`)`; |   |

`SIEVEARGS * <var class="pdparam">arg</var>`;<a name="idp32245280"></a>
## Description

Remove a Sieve argument. Use this function with the values returned by [sieve_hash_first_item](apis.sieve_hash_first_item.php "sieve_hash_first_item"), [sieve_hash_next_item](apis.sieve_hash_next_item.php "sieve_hash_next_item") and [sieve_get_hash_item](apis.sieve_get_hash_item.php "sieve_get_hash_item").

**Parameters**

<dl class="variablelist">

<dt>arg</dt>

<dd>

The argument you wish to remove.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

<a name="idp32253824"></a>
## See Also

[Section 68.76, “SIEVEARGS (sieve_ast)”](structs.sieve_ast.php "68.76. SIEVEARGS (sieve_ast)")

| [Prev](apis.sieve_arg_as_string.php)  | [Up](sieve.php) |  [Next](apis.sieve_case_fold2.php) |
| sieve_arg_as_string  | [Table of Contents](index.php) |  sieve_case_fold2 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)