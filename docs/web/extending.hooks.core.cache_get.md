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

| cache_get |
| [Prev](extending.hooks.core.bounce_error_classify.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.cache_set.php) |

<a name="extending.hooks.core.cache_get"></a>
## Name

cache_get

## Synopsis

`#include "hooks/core/cache_get.h"`

| `int **cache_get**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">name</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">klen</var>, |   |
|   | <var class="pdparam">value</var>, |   |
|   | <var class="pdparam">vlen</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`const char * <var class="pdparam">name</var>`;
`const void * <var class="pdparam">key</var>`;
`int <var class="pdparam">klen</var>`;
`void ** <var class="pdparam">value</var>`;
`int * <var class="pdparam">vlen</var>`;

| `int **has_core_cache_get_hook**(` | `)`; |   |

| `void **register_core_cache_get_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_cache_get_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_cache_get_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_cache_get_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_cache_get_hook**(` | <var class="pdparam">name</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">klen</var>, |   |
|   | <var class="pdparam">value</var>, |   |
|   | <var class="pdparam">vlen</var>`)`; |   |

`const char * <var class="pdparam">name</var>`;
`const void * <var class="pdparam">key</var>`;
`int <var class="pdparam">klen</var>`;
`void ** <var class="pdparam">value</var>`;
`int * <var class="pdparam">vlen</var>`;<a name="idp20492976"></a>
## Description

Ecelerity exposes the *`cache_get`* hook as a stub for generic, process-wide caching. *`cache_get`* will return zero (miss) or non-zero (hit) if the specficied *`key`* of length *`klen`* exists in the cache named *`name`*. If it is a cache hit, *`*value`* and *`*vlen`* will be set to reflect the value at that key.

| [Prev](extending.hooks.core.bounce_error_classify.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.cache_set.php) |
| bounce_error_classify  | [Table of Contents](index.php) |  cache_set |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)