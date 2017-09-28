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

| casefold |
| [Prev](extending.hooks.sieve.php)  | Chapter 25. Hooks in the sieve scope |  [Next](extending.hooks.sieve.compile_script.php) |

<a name="extending.hooks.sieve.casefold"></a>
## Name

casefold

## Synopsis

`#include "hooks/sieve/casefold.h"`

| `int **casefold**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">folding</var>, |   |
|   | <var class="pdparam">srccharset</var>, |   |
|   | <var class="pdparam">srcstring</var>, |   |
|   | <var class="pdparam">destcharset</var>, |   |
|   | <var class="pdparam">folded</var>, |   |
|   | <var class="pdparam">foldlen</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`int <var class="pdparam">folding</var>`;
`const char * <var class="pdparam">srccharset</var>`;
`const char * <var class="pdparam">srcstring</var>`;
`const char * <var class="pdparam">destcharset</var>`;
`char ** <var class="pdparam">folded</var>`;
`int * <var class="pdparam">foldlen</var>`;

| `int **has_sieve_casefold_hook**(` | `)`; |   |

| `void **register_sieve_casefold_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_sieve_casefold_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_sieve_casefold_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_sieve_casefold_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_sieve_casefold_hook**(` | <var class="pdparam">folding</var>, |   |
|   | <var class="pdparam">srccharset</var>, |   |
|   | <var class="pdparam">srcstring</var>, |   |
|   | <var class="pdparam">destcharset</var>, |   |
|   | <var class="pdparam">folded</var>, |   |
|   | <var class="pdparam">foldlen</var>`)`; |   |

`int <var class="pdparam">folding</var>`;
`const char * <var class="pdparam">srccharset</var>`;
`const char * <var class="pdparam">srcstring</var>`;
`const char * <var class="pdparam">destcharset</var>`;
`char ** <var class="pdparam">folded</var>`;
`int * <var class="pdparam">foldlen</var>`;<a name="idp23726848"></a>
## Description

Parameters:

<dl class="variablelist">

<dt>closure</dt>

<dd>

the implementation specific closure, this is not needed for the hook's caller

</dd>

<dt>folding</dt>

<dd>

the direction to fold in, either EC_FOLD_LOWER for lowercase, EC_FOLD_UPPER or EC_FOLD_TITLE for uppercase

</dd>

<dt>srccharset</dt>

<dd>

the source character set

</dd>

<dt>srcstring</dt>

<dd>

the source string

</dd>

<dt>destcharset</dt>

<dd>

the destination character set

</dd>

<dt>folded</dt>

<dd>

a pointer to a buffer to contain the converted data

</dd>

<dt>foldlen</dt>

<dd>

the length of the converted data

</dd>

</dl>

Invoked when case folding, it will convert a data group to uppercase or lowercase and simultaneously convert to another character set if desired. Returns 0 on success.

| [Prev](extending.hooks.sieve.php)  | [Up](extending.hooks.sieve.php) |  [Next](extending.hooks.sieve.compile_script.php) |
| Chapter 25. Hooks in the sieve scope  | [Table of Contents](index.php) |  compile_script |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)