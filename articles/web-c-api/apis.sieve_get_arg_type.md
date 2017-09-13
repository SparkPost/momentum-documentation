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

| sieve_get_arg_type |
| [Prev](apis.sieve_get_arg_lineno.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_get_bag.php) |

<a name="apis.sieve_get_arg_type"></a>
## Name

sieve_get_arg_type — Return the type of the specified Sieve argument

## Synopsis

`#include "sieve/ecsieve.h"`

| `enum sieve_arg_type **sieve_get_arg_type** (` | <var class="pdparam">args</var>, |   |
|   | <var class="pdparam">n</var>`)`; |   |

`SIEVEARGS * <var class="pdparam">args</var>`;
`int <var class="pdparam">n</var>`;<a name="idp32596496"></a>
## Description

Return the type of the specified Sieve argument.

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

The type of a Sieve argument may not be known at compile time. Use this with caution during compile callbacks in extensions.

If you want to find out the type of argument returned by `sieve_parse_args` and its "%", "@" or "*" placeholders, use [sieve_get_type_of_arg](apis.sieve_get_type_of_arg.php "sieve_get_type_of_arg") instead.

**Return Values**

This function returns one of the `SIEVEARG_*` constants. These constants are:

```
/* accessors for sieve args */
enum sieve_arg_type {
  SIEVEARG_BOGUS = 0,
  SIEVEARG_IS_STRING,
  SIEVEARG_IS_NUMBER,
  SIEVEARG_IS_STRINGLIST,
  SIEVEARG_IS_HASH,
  SIEVEARG_IS_TAG
};
```
**Threading**

It is legal to call this function in any thread.

<a name="idp32608000"></a>
## See Also

[Section 68.76, “SIEVEARGS (sieve_ast)”](structs.sieve_ast.php "68.76. SIEVEARGS (sieve_ast)")

| [Prev](apis.sieve_get_arg_lineno.php)  | [Up](sieve.php) |  [Next](apis.sieve_get_bag.php) |
| sieve_get_arg_lineno  | [Table of Contents](index.php) |  sieve_get_bag |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)