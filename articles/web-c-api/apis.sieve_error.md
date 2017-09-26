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

| sieve_error |
| [Prev](apis.sieve_delref.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_execute.php) |

<a name="apis.sieve_error"></a>
## Name

sieve_error — Create a Sieve error message

## Synopsis

`#include "sieve/ecsieve.h"`

| `void **sieve_error** (` | <var class="pdparam">sieve</var>, |   |
|   | <var class="pdparam">lineno</var>, |   |
|   | <var class="pdparam">fmt</var>, |   |
|   | <var class="pdparam">...</var>`)`; |   |

`SIEVE * <var class="pdparam">sieve</var>`;
`int <var class="pdparam">lineno</var>`;
`const char * <var class="pdparam">fmt</var>`;
`<var class="pdparam">...</var>`;<a name="idp32441968"></a>
## Description

Write a Sieve error message. This function appends output to the `_sieve_state` error_log if that data member is set.

**Parameters**

<dl class="variablelist">

<dt>sieve</dt>

<dd>

The active script. For more information about this data type see [sieve](structs.sieve.php "68.75. SIEVE (sieve_state)").

</dd>

<dt>lineno</dt>

<dd>

The line number where the error occurred.

</dd>

<dt>fmt</dt>

<dd>

The string with embedded format specifier(s).

</dd>

<dt>...</dt>

<dd>

The variable argument(s) for the format string.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.sieve_delref.php)  | [Up](sieve.php) |  [Next](apis.sieve_execute.php) |
| sieve_delref  | [Table of Contents](index.php) |  sieve_execute |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)