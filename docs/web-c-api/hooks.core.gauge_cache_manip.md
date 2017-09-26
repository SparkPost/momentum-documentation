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

| gauge_cache_manip |
| [Prev](hooks.core.final_validation.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.generate_bounces.php) |

<a name="hooks.core.gauge_cache_manip"></a>
## Name

gauge_cache_manip

## Synopsis

`#include "hooks/core/gauge_cache.h"`

| `void **gauge_cache_manip** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">cache</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">keylen</var>, |   |
|   | <var class="pdparam">addend</var>, |   |
|   | <var class="pdparam">expiry_time</var>, |   |
|   | <var class="pdparam">maxitems</var>, |   |
|   | <var class="pdparam">replicated</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`const char * <var class="pdparam">cache</var>`;
`const char * <var class="pdparam">key</var>`;
`int <var class="pdparam">keylen</var>`;
`int <var class="pdparam">addend</var>`;
`uint64_t <var class="pdparam">expiry_time</var>`;
`int <var class="pdparam">maxitems</var>`;
`int <var class="pdparam">replicated</var>`;

| `int **has_core_gauge_cache_manip_hook** (` | `)`; |   |

| `void **register_core_gauge_cache_manip_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_gauge_cache_manip_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_gauge_cache_manip_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_gauge_cache_manip_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_core_gauge_cache_manip_hook** (` | <var class="pdparam">cache</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">keylen</var>, |   |
|   | <var class="pdparam">addend</var>, |   |
|   | <var class="pdparam">expiry_time</var>, |   |
|   | <var class="pdparam">maxitems</var>, |   |
|   | <var class="pdparam">replicated</var>`)`; |   |

`const char * <var class="pdparam">cache</var>`;
`const char * <var class="pdparam">key</var>`;
`int <var class="pdparam">keylen</var>`;
`int <var class="pdparam">addend</var>`;
`uint64_t <var class="pdparam">expiry_time</var>`;
`int <var class="pdparam">maxitems</var>`;
`int <var class="pdparam">replicated</var>`;<a name="idp364272"></a>
## Description

This hook is called when the sieve command "ec_gauge_cache_inc" or "ec_gauge_cache_dec" is invoked. The arguments are the cache name and the key name, the addend (1 for an increment or -1 for a decrement), and an expiry time. The expiry time specifies the unix time when the element expires. The maxitems is the max number of elements in the cache.

| [Prev](hooks.core.final_validation.php)  | [Up](hooks.core.php) |  [Next](hooks.core.generate_bounces.php) |
| final_validation  | [Table of Contents](index.php) |  generate_bounces |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)