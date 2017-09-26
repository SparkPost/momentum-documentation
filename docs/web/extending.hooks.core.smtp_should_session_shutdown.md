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

| smtp_should_session_shutdown |
| [Prev](extending.hooks.core.smtp_error_classify.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.swap_out_multi.php) |

<a name="extending.hooks.core.smtp_should_session_shutdown"></a>
## Name

smtp_should_session_shutdown

## Synopsis

`#include "hooks/core/smtp_should_session_shutdown.h"`

| `int **smtp_should_session_shutdown**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">dc</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`delivery_construct * <var class="pdparam">dc</var>`;

| `int **has_core_smtp_should_session_shutdown_hook**(` | `)`; |   |

| `void **register_core_smtp_should_session_shutdown_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_smtp_should_session_shutdown_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_smtp_should_session_shutdown_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_smtp_should_session_shutdown_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_smtp_should_session_shutdown_hook**(` | <var class="pdparam">dc</var>`)`; |   |

`delivery_construct * <var class="pdparam">dc</var>`;<a name="idp22939152"></a>
## Description

The `smtp_should_session_shutdown` hook allows modules to shutdown an SMTP session. This hook is called after a successful SMTP delivery and will allow an alternative mechanism for terminating the session (alternate to exceeding MaxDeliveriesPerConnection). Starting in 2.2.3.47, this hook is also called after a failed SMTP delivery attempt and will allow an alternative mechanism for terminating the session.

| [Prev](extending.hooks.core.smtp_error_classify.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.swap_out_multi.php) |
| smtp_error_classify  | [Table of Contents](index.php) |  swap_out_multi |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)