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

| smtp_client_mailfrom_args |
| [Prev](hooks.core.set_delayed_queue_event.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.smtp_client_rcptto_args.php) |

<a name="hooks.core.smtp_client_mailfrom_args"></a>
## Name

smtp_client_mailfrom_args

## Synopsis

`#include "hooks/core/smtp_client_mailfrom_args.h"`

| `int **smtp_client_mailfrom_args** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">dc</var>, |   |
|   | <var class="pdparam">args</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`delivery_construct * <var class="pdparam">dc</var>`;
`smtp_client_args * <var class="pdparam">args</var>`;

| `int **has_core_smtp_client_mailfrom_args_hook** (` | `)`; |   |

| `void **register_core_smtp_client_mailfrom_args_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_smtp_client_mailfrom_args_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_smtp_client_mailfrom_args_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_smtp_client_mailfrom_args_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_smtp_client_mailfrom_args_hook** (` | <var class="pdparam">dc</var>, |   |
|   | <var class="pdparam">args</var>`)`; |   |

`delivery_construct * <var class="pdparam">dc</var>`;
`smtp_client_args * <var class="pdparam">args</var>`;<a name="idp18796224"></a>
## Description

This hook is called before the MAIL FROM phase in the SMTP client. The called function may add entries to smtp_client_args using the functions smtp_client_args_add(), delete with smtp_client_args_delete() and query entries using smtp_client_args_exists_and_fetch(). The called function is responsible for verifying that the remote SMTP server is capable of supporting the desired extension. If the smtp_client_args_add() call returns non-zero then the add failed and the hook should act appropriately. Returning 0 to the caller will cause subsequent hooks to be called and the message continue on its way. Returning non-zero will cause the message to transiently fail.

| [Prev](hooks.core.set_delayed_queue_event.php)  | [Up](hooks.core.php) |  [Next](hooks.core.smtp_client_rcptto_args.php) |
| set_delayed_queue_event  | [Table of Contents](index.php) |  smtp_client_rcptto_args |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)