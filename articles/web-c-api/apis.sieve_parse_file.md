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

| sieve_parse_file |
| [Prev](apis.sieve_parse_args.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_parse_text.php) |

<a name="apis.sieve_parse_file"></a>
## Name

sieve_parse_file — Parse/compile a Sieve script from a file

## Synopsis

`#include "sieve/ecsieve.h"`

| `SIEVE * **sieve_parse_file** (` | <var class="pdparam">filename</var>, |   |
|   | <var class="pdparam">error_log</var>`)`; |   |

`const char * <var class="pdparam">filename</var>`;
`string * <var class="pdparam">error_log</var>`;<a name="idp32948096"></a>
## Description

Parse/compile a Sieve script from a file. The script must be UTF-8 encoded, as per RFC 3028.

**Parameters**

<dl class="variablelist">

<dt>filename</dt>

<dd>

The file name.

</dd>

<dt>error_log</dt>

<dd>

The message to write to the paniclog. This parameter can be `NULL`.

</dd>

</dl>

**Return Value**

This function returns a SIEVE pointer.

**Threading**

It is legal to call this function in any thread.

<a name="idp32956448"></a>
## See Also

[Section 68.75, “SIEVE (sieve_state)”](structs.sieve.php "68.75. SIEVE (sieve_state)")

| [Prev](apis.sieve_parse_args.php)  | [Up](sieve.php) |  [Next](apis.sieve_parse_text.php) |
| sieve_parse_args  | [Table of Contents](index.php) |  sieve_parse_text |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)