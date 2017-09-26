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

| post_assemble_fwd_message |
| [Prev](extending.hooks.core.outbound_tls_verify.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.post_conf.php) |

<a name="extending.hooks.core.post_assemble_fwd_message"></a>
## Name

post_assemble_fwd_message

## Synopsis

`#include "hooks/core/post_assemble_fwd_message.h"`

| `void **post_assemble_fwd_message**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">orig</var>, |   |
|   | <var class="pdparam">forwarded</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`email_message * <var class="pdparam">orig</var>`;
`email_message * <var class="pdparam">forwarded</var>`;

| `int **has_core_post_assemble_fwd_message_hook**(` | `)`; |   |

| `void **register_core_post_assemble_fwd_message_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_assemble_fwd_message_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_post_assemble_fwd_message_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_assemble_fwd_message_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_core_post_assemble_fwd_message_hook**(` | <var class="pdparam">orig</var>, |   |
|   | <var class="pdparam">forwarded</var>`)`; |   |

`email_message * <var class="pdparam">orig</var>`;
`email_message * <var class="pdparam">forwarded</var>`;<a name="idp22179568"></a>
## Description

Called after a forwarded message has been created, allowing modules to perform some arbitrary action such as propagating state from the original message to the forwarded message.

| [Prev](extending.hooks.core.outbound_tls_verify.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.post_conf.php) |
| outbound_tls_verify  | [Table of Contents](index.php) |  post_conf |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)