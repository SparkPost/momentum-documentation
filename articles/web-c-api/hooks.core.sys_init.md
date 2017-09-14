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

| sys_init |
| [Prev](hooks.core.swap_out_multi.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.use_outbound_tls.php) |

<a name="hooks.core.sys_init"></a>
## Name

sys_init

## Synopsis

`#include "hooks/core/sys_init.h"`

| `void **sys_init** (` | <var class="pdparam">closure</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;

| `int **has_core_sys_init_hook** (` | `)`; |   |

| `void **register_core_sys_init_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_sys_init_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_sys_init_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_sys_init_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_core_sys_init_hook** (` | `)`; |   |

<a name="idp15359520"></a>
## Description

**THIS HOOK IS DEPRECATED AND SHOULD NO LONGER BE USED** . The `sys_init` hook allows modules within interpreters (like Perl or Java) to act in the post_conf phase. As the interpreters themselves use the post_conf hook to bootstrap, it is unavailable to their modules. As such, modules with these systems can use the sys_init hook to do initialization that needs to be done prior to system startup (the eventloop).

| [Prev](hooks.core.swap_out_multi.php)  | [Up](hooks.core.php) |  [Next](hooks.core.use_outbound_tls.php) |
| swap_out_multi  | [Table of Contents](index.php) |  use_outbound_tls |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)