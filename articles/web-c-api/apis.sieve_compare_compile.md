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

| sieve_compare_compile |
| [Prev](apis.sieve_charset_converter_string_string.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_compare_operands.php) |

<a name="apis.sieve_compare_compile"></a>
## Name

sieve_compare_compile — pre-compile matching state for a sieve comparator

## Synopsis

`#include "sieve/ecsieve.h"`

| `int **sieve_compare_compile** (` | <var class="pdparam">sieve</var>, |   |
|   | <var class="pdparam">comp</var>, |   |
|   | <var class="pdparam">right</var>`)`; |   |

`SIEVE * <var class="pdparam">sieve</var>`;
`struct sieve_compare_info * <var class="pdparam">comp</var>`;
`SIEVEARGS * <var class="pdparam">right</var>`;<a name="idp32334000"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

pre-compile matching state for a sieve comparator.

Intended to be used from an extension compilation callback, this function will compile a standard sieve matching operand for faster execution.

**Return Values**

Returns 0 in the case of a fatal compilation error, 1 otherwise. A successful return does not imply that the match could be accelerated, just that everything is ok.

| [Prev](apis.sieve_charset_converter_string_string.php)  | [Up](sieve.php) |  [Next](apis.sieve_compare_operands.php) |
| sieve_charset_converter_string_string  | [Table of Contents](index.php) |  sieve_compare_operands |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)