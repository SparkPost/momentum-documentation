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

| compile_script |
| [Prev](hooks.sieve.php)  | Chapter 67. Hooks in the sieve scope |  [Next](hooks.sieve.convert_charset.php) |

<a name="hooks.sieve.compile_script"></a>
## Name

compile_script

## Synopsis

`#include "hooks/sieve/compile_script.h"`

| `int **compile_script** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">uri</var>, |   |
|   | <var class="pdparam">optional_args</var>, |   |
|   | <var class="pdparam">script_ptr</var>, |   |
|   | <var class="pdparam">seng</var>, |   |
|   | <var class="pdparam">error_log</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`const char * <var class="pdparam">uri</var>`;
`SIEVEARGS * <var class="pdparam">optional_args</var>`;
`SIEVE ** <var class="pdparam">script_ptr</var>`;
`SENG * <var class="pdparam">seng</var>`;
`string * <var class="pdparam">error_log</var>`;

| `int **has_sieve_compile_script_hook** (` | `)`; |   |

| `void **register_sieve_compile_script_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_sieve_compile_script_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_sieve_compile_script_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_sieve_compile_script_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_sieve_compile_script_hook** (` | <var class="pdparam">uri</var>, |   |
|   | <var class="pdparam">optional_args</var>, |   |
|   | <var class="pdparam">script_ptr</var>, |   |
|   | <var class="pdparam">seng</var>, |   |
|   | <var class="pdparam">error_log</var>`)`; |   |

`const char * <var class="pdparam">uri</var>`;
`SIEVEARGS * <var class="pdparam">optional_args</var>`;
`SIEVE ** <var class="pdparam">script_ptr</var>`;
`SENG * <var class="pdparam">seng</var>`;
`string * <var class="pdparam">error_log</var>`;<a name="idp10458160"></a>
## Description

This hook allows modules to plug in their own custom Sieve script storage, retrieval and caching mechanism when processing runtime included scripts. The Momentum core doesn't provide this facility by itself; the Sieve validation module registers a compile_script hook of its own to implement this feature. If you need replace storage/caching mechanism provided by Sieve, you can do so by implementing this hook. If you just need to add a new retrieval layer, you should look at the sieve_fetch_script hook instead.

*`uri`* is the URI from the `ec_include` statement in the calling Sieve script, and *`optional_args`* will be either `NULL` or a valid `SIEVEARGS` specifying some kind of optional parameters for the *`uri`*. It is up to your hook implementation to interpret these.

When called, the hook is responsible for resolving the supplied *`uri`* and *`optional_args`* into a compiled Sieve script. On success, it should set *`script_ptr`* to point at a valid `SIEVE*` representing the compiled script, and return `SIV_DONE`.

If an error occurred, the hook should log the reason for the error, set *`script_ptr`* to `NULL` and return SIV_DONE.

If the compilation process is going to block the caller, the hook implementation may arrange for it to complete asynchronously, stashing *`seng`* in an appropriate location and returning `SIV_AGAIN`. When the compilation completes, the implementation may call `sieve_resume` to restart the Sieve engine processing and retry the include. If *`seng`* is `NULL`, or if `sieve_seng_get_can_go_async` returns `0` you **MUST NOT**     run asynchronously.

If the *`uri`* is not understood by the hook implementation, it should return `SIV_CONT` to allow additional hooks the opportunity to handle the compilation.

| [Prev](hooks.sieve.php)  | [Up](hooks.sieve.php) |  [Next](hooks.sieve.convert_charset.php) |
| Chapter 67. Hooks in the sieve scope  | [Table of Contents](index.php) |  convert_charset |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)