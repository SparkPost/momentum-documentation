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

| sieve_charset_converter_buffer_string |
| [Prev](apis.sieve_case_fold2.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_charset_converter_string_string.php) |

<a name="apis.sieve_charset_converter_buffer_string"></a>
## Name

sieve_charset_converter_buffer_string — perform character encoding conversion

## Synopsis

`#include "util.h"`

| `int int **sieve_charset_converter_buffer_string** (` | <var class="pdparam">srccharset</var>, |   |
|   | <var class="pdparam">destcharset</var>, |   |
|   | <var class="pdparam">inbuf</var>, |   |
|   | <var class="pdparam">inbuflen</var>, |   |
|   | <var class="pdparam">outstr</var>`)`; |   |

`const char * <var class="pdparam">srccharset</var>`;
`const char * <var class="pdparam">destcharset</var>`;
`char * <var class="pdparam">inbuf</var>`;
`int <var class="pdparam">inbuflen</var>`;
`string * <var class="pdparam">outstr</var>`;<a name="idp32284016"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

perform character encoding conversion.

**Parameters**

<dl class="variablelist">

<dt>srccharset</dt>

<dd>

the source character set.

</dd>

<dt>destcharset</dt>

<dd>

the character set to be converted to.

</dd>

<dt>inbuf</dt>

<dd>

the pointer source string.

</dd>

<dt>inbufleft</dt>

<dd>

the number of chars to convert from the source.

</dd>

<dt>outstr</dt>

<dd>

the string containing the converted text.

</dd>

</dl>

**Return Values**

0 if failed.

**Configuration Change. ** This feature is available starting from Momentum 3.1.

| [Prev](apis.sieve_case_fold2.php)  | [Up](sieve.php) |  [Next](apis.sieve_charset_converter_string_string.php) |
| sieve_case_fold2  | [Table of Contents](index.php) |  sieve_charset_converter_string_string |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)