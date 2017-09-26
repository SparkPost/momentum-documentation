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

| post_conf |
| [Prev](extending.hooks.core.post_assemble_fwd_message.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.post_dns_handle_a.php) |

<a name="extending.hooks.core.post_conf"></a>
## Name

post_conf

## Synopsis

`#include "hooks/core/post_conf.h"`

| `void **post_conf**(` | <var class="pdparam">closure</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;

| `int **has_core_post_conf_hook**(` | `)`; |   |

| `void **register_core_post_conf_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_conf_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_post_conf_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_conf_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_core_post_conf_hook**(` | `)`; |   |

<a name="idp22195568"></a>
## Description

The `post_conf` hook allows modules to register a function to be called after all modules have gone through their primary configuration. A principal use of this is an extension like the embedded Perl interpreter which uses this to guarantee that it can register callbacks in any other loaded module, regardless of load order.

As the interpreters use this hook to bootstrap, registering methods within the interpreters for this hook will have no effect (it has passed). As such, high-level language module authors should consider the sys_init hook for last minute configuration and setup.

| [Prev](extending.hooks.core.post_assemble_fwd_message.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.post_dns_handle_a.php) |
| post_assemble_fwd_message  | [Table of Contents](index.php) |  post_dns_handle_a |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)