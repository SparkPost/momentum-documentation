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

| sieve_next_string_arg |
| [Prev](apis.sieve_inc_counter.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_parse_args.php) |

<a name="apis.sieve_next_string_arg"></a>
## Name

sieve_next_string_arg — Return the next string argument

## Synopsis

`#include "sieve/ecsieve.h"`

| `int **sieve_next_string_arg** (` | <var class="pdparam">arg</var>, |   |
|   | <var class="pdparam">iter</var>, |   |
|   | <var class="pdparam">str</var>, |   |
|   | <var class="pdparam">len</var>`)`; |   |

`SIEVEARGS * <var class="pdparam">arg</var>`;
`sieve_string_arg_iterator * <var class="pdparam">iter</var>`;
`char ** <var class="pdparam">str</var>`;
`int * <var class="pdparam">len</var>`;<a name="idp32864240"></a>
## Description

Return the next string argument.

**Parameters**

<dl class="variablelist">

<dt>arg</dt>

<dd>

The argument list.

</dd>

<dt>iter</dt>

<dd>

The iterator. The data type of this parameter is defined as follows: `typedef int sieve_string_arg_iterator;`

</dd>

<dt>str</dt>

<dd>

The pointer that will point to the next string argument.

</dd>

<dt>len</dt>

<dd>

The length of the returned string.

</dd>

</dl>

**Return Values**

On success this function returns `1`; on failure, `0`.

**Threading**

It is legal to call this function in the thread.

<a name="idp32877744"></a>
## See Also

[sieve_parse_args](apis.sieve_parse_args.php "sieve_parse_args")

| [Prev](apis.sieve_inc_counter.php)  | [Up](sieve.php) |  [Next](apis.sieve_parse_args.php) |
| sieve_inc_counter  | [Table of Contents](index.php) |  sieve_parse_args |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)