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

| fetch_script |
| [Prev](extending.hooks.sieve.convert_charset.php)  | Chapter 25. Hooks in the sieve scope |  [Next](extending.hooks.sievelib.php) |

<a name="extending.hooks.sieve.fetch_script"></a>
## Name

fetch_script

## Synopsis

`#include "hooks/sieve/fetch_script.h"`

| `int **fetch_script**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">uri</var>, |   |
|   | <var class="pdparam">optional_args</var>, |   |
|   | <var class="pdparam">script</var>, |   |
|   | <var class="pdparam">seng</var>, |   |
|   | <var class="pdparam">error_log</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`const char * <var class="pdparam">uri</var>`;
`SIEVEARGS * <var class="pdparam">optional_args</var>`;
`string * <var class="pdparam">script</var>`;
`SENG * <var class="pdparam">seng</var>`;
`string * <var class="pdparam">error_log</var>`;

| `int **has_sieve_fetch_script_hook**(` | `)`; |   |

| `void **register_sieve_fetch_script_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_sieve_fetch_script_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_sieve_fetch_script_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_sieve_fetch_script_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_sieve_fetch_script_hook**(` | <var class="pdparam">uri</var>, |   |
|   | <var class="pdparam">optional_args</var>, |   |
|   | <var class="pdparam">script</var>, |   |
|   | <var class="pdparam">seng</var>, |   |
|   | <var class="pdparam">error_log</var>`)`; |   |

`const char * <var class="pdparam">uri</var>`;
`SIEVEARGS * <var class="pdparam">optional_args</var>`;
`string * <var class="pdparam">script</var>`;
`SENG * <var class="pdparam">seng</var>`;
`string * <var class="pdparam">error_log</var>`;<a name="idp23832672"></a>
## Description

This hook allows modules to plug in their own custom sieve script storage and retrieval mechanism when processing runtime included scripts. The ecelerity core doesn't provide this facility by itself; the sieve validation module registers a compile_script hook of its own to implement this feature, which in turns calls out to the fetch_script hooks. If you need to add a storage mechanism that isn't supported via the sieve validation module, you can do so by implementing this hook.

*`uri`* is the URI from the `ec_include` statement in the calling sieve script, and *`optional_args`* will be either `NULL` or a valid `SIEVEARGS` specifying some kind of optional parameters for the *`uri`*. It is up to your hook implementation to interpret these.

When called, the hook is responsible for resolving the supplied *`uri`* and *`optional_args`* into a UTF-8 encoded sieve script. On success, it should populate *`script`* with the text for the script, and then return `SIV_DONE`. The hook implementation must only add content to *`script`* once it has fully retrieved the script text; it MUST NOT cache the string pointer for later use; it is a transient resource that will become invalidated as soon as the hook function returns. *`script`* is supplied uninitialized; the hook implementation is responsible for allocating the string buffer, by calling the `STRING_INIT` macro or through some other means.

If an error occurred, the hook should log the reason for the error and return SIV_DONE.

If the retrieval process is going to block the caller, the hook implementation may arrange for it to complete asynchronously, stashing *`seng`* in an appropriate location and returning `SIV_AGAIN`. When the retrieval completes, the implementation may call `sieve_resume` to restart the sieve engine processing and retry the include. If *`seng`* is `NULL`, or if `sieve_seng_get_can_go_async` returns `0` you **MUST NOT**     run asynchronously.

If the *`uri`* is not understood by the hook implementation, it should return `SIV_CONT` to allow additional hooks the opportunity to handle the compilation.

| [Prev](extending.hooks.sieve.convert_charset.php)  | [Up](extending.hooks.sieve.php) |  [Next](extending.hooks.sievelib.php) |
| convert_charset  | [Table of Contents](index.php) |  Chapter 26. Hooks in the sievelib scope |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)