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

| generate_bounces |
| [Prev](extending.hooks.core.finalize_validation.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.generate_rfc3464_message.php) |

<a name="extending.hooks.core.generate_bounces"></a>
## Name

generate_bounces

## Synopsis

`#include "hooks/core/generate_bounces.h"`

| `int **generate_bounces**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">enabled</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">mess</var>`;
`int * <var class="pdparam">enabled</var>`;

| `int **has_core_generate_bounces_hook**(` | `)`; |   |

| `void **register_core_generate_bounces_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_generate_bounces_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_generate_bounces_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_generate_bounces_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_generate_bounces_hook**(` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">enabled</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`int * <var class="pdparam">enabled</var>`;<a name="idp21209280"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

This hook allows you to override whether a bounce message will be generated for a given mail. The default behavior is to fall back to the configured settings. If `GENERATE_BOUNCES_HOOK_CONT` is returned, processing will fallback to other modules and then to the configuration. If `GENERATE_BOUNCES_HOOK_OK` is returned, then processing will terminate and the value passed back via enabled will be used.

| [Prev](extending.hooks.core.finalize_validation.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.generate_rfc3464_message.php) |
| finalize_validation  | [Table of Contents](index.php) |  generate_rfc3464_message |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)