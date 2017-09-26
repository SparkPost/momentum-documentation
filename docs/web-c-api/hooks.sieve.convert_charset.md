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

| convert_charset |
| [Prev](hooks.sieve.compile_script.php)  | Chapter 67. Hooks in the sieve scope |  [Next](hooks.sieve.fetch_script.php) |

<a name="hooks.sieve.convert_charset"></a>
## Name

convert_charset

## Synopsis

`#include "hooks/sieve/convert_charset.h"`

| `int **convert_charset** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">srccharset</var>, |   |
|   | <var class="pdparam">destcharset</var>, |   |
|   | <var class="pdparam">inbuf</var>, |   |
|   | <var class="pdparam">inbytesleft</var>, |   |
|   | <var class="pdparam">outbuf</var>, |   |
|   | <var class="pdparam">outbytesleft</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`const char * <var class="pdparam">srccharset</var>`;
`const char * <var class="pdparam">destcharset</var>`;
`char ** <var class="pdparam">inbuf</var>`;
`size_t * <var class="pdparam">inbytesleft</var>`;
`char ** <var class="pdparam">outbuf</var>`;
`size_t * <var class="pdparam">outbytesleft</var>`;

| `int **has_sieve_convert_charset_hook** (` | `)`; |   |

| `void **register_sieve_convert_charset_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_sieve_convert_charset_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_sieve_convert_charset_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_sieve_convert_charset_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_sieve_convert_charset_hook** (` | <var class="pdparam">srccharset</var>, |   |
|   | <var class="pdparam">destcharset</var>, |   |
|   | <var class="pdparam">inbuf</var>, |   |
|   | <var class="pdparam">inbytesleft</var>, |   |
|   | <var class="pdparam">outbuf</var>, |   |
|   | <var class="pdparam">outbytesleft</var>`)`; |   |

`const char * <var class="pdparam">srccharset</var>`;
`const char * <var class="pdparam">destcharset</var>`;
`char ** <var class="pdparam">inbuf</var>`;
`size_t * <var class="pdparam">inbytesleft</var>`;
`char ** <var class="pdparam">outbuf</var>`;
`size_t * <var class="pdparam">outbytesleft</var>`;<a name="idp8201440"></a>
## Description

Parameters:

<dl class="variablelist">

<dt>closure</dt>

<dd>

the implementation specific closure, this is not needed for the hook's caller

</dd>

<dt>srccharset</dt>

<dd>

the source character set

</dd>

<dt>destcharset</dt>

<dd>

the destination chaaracter set

</dd>

<dt>inbuf</dt>

<dd>

the buffer containing data to be converted

</dd>

<dt>inbytesleft</dt>

<dd>

the length of the inbuf

</dd>

<dt>outbuf</dt>

<dd>

the buffer containing converted data after the conversion takes place

</dd>

<dt>outbytesleft</dt>

<dd>

space remaining in the output buffer for conversion

</dd>

</dl>

Called on the conversion of one character set to another. Return the number of bytes successfully converted.

| [Prev](hooks.sieve.compile_script.php)  | [Up](hooks.sieve.php) |  [Next](hooks.sieve.fetch_script.php) |
| compile_script  | [Table of Contents](index.php) |  fetch_script |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)