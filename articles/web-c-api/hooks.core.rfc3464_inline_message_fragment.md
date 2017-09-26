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

| rfc3464_inline_message_fragment |
| [Prev](hooks.core.premigrate_outbound_connection.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.server_esmtp_session_abort.php) |

<a name="hooks.core.rfc3464_inline_message_fragment"></a>
## Name

rfc3464_inline_message_fragment

## Synopsis

`#include "hooks/core/rfc3464_inline_message_fragment.h"`

| `int **rfc3464_inline_message_fragment** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">response</var>, |   |
|   | <var class="pdparam">message</var>, |   |
|   | <var class="pdparam">action</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`string * <var class="pdparam">response</var>`;
`ec_message * <var class="pdparam">message</var>`;
`dsn_actype <var class="pdparam">action</var>`;

| `int **has_core_rfc3464_inline_message_fragment_hook** (` | `)`; |   |

| `void **register_core_rfc3464_inline_message_fragment_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_rfc3464_inline_message_fragment_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_rfc3464_inline_message_fragment_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_rfc3464_inline_message_fragment_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_rfc3464_inline_message_fragment_hook** (` | <var class="pdparam">response</var>, |   |
|   | <var class="pdparam">message</var>, |   |
|   | <var class="pdparam">action</var>`)`; |   |

`string * <var class="pdparam">response</var>`;
`ec_message * <var class="pdparam">message</var>`;
`dsn_actype <var class="pdparam">action</var>`;<a name="idp16132400"></a>
## Description

This hook allows the portion of the original message to be included in an RFC 3464 MDN to be customized. When this hook is called the caller can write into `response` any context. The contents there will be the body content of the delivery-status component. The enclosing MIME boundaries will be automatically inserted by the system.

To acknowledge that your hook has taken responsibility for generating the message, you should return a true value from this hook.

| [Prev](hooks.core.premigrate_outbound_connection.php)  | [Up](hooks.core.php) |  [Next](hooks.core.server_esmtp_session_abort.php) |
| premigrate_outbound_connection  | [Table of Contents](index.php) |  server_esmtp_session_abort |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)