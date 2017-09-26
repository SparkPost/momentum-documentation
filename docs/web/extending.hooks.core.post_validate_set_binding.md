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

| post_validate_set_binding |
| [Prev](extending.hooks.core.post_validate_data_spool_each_rcpt_v1.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.pre_console_release.php) |

<a name="extending.hooks.core.post_validate_set_binding"></a>
## Name

post_validate_set_binding

## Synopsis

`#include "hooks/core/post_validate_set_binding.h"`

| `void **post_validate_set_binding**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">m</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">m</var>`;

| `int **has_core_post_validate_set_binding_hook**(` | `)`; |   |

| `void **register_core_post_validate_set_binding_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_validate_set_binding_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_post_validate_set_binding_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_validate_set_binding_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_core_post_validate_set_binding_hook**(` | <var class="pdparam">m</var>`)`; |   |

`ec_message * <var class="pdparam">m</var>`;<a name="idp22538848"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.

This hook is invoked after the validate_set_binding callouts are invoked. This hook is only called if the binding of a message is actually changed, such that if the binding was already set to a valid binding then the validate_set_binding calls will have no effect and the hook will not be called.

| [Prev](extending.hooks.core.post_validate_data_spool_each_rcpt_v1.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.pre_console_release.php) |
| post_validate_data_spool_each_rcpt_v1  | [Table of Contents](index.php) |  pre_console_release |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)