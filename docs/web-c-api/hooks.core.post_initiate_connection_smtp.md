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

| post_initiate_connection_smtp |
| [Prev](hooks.core.post_generate_soft_bounce_message.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.post_mail_queue_maintain_domain.php) |

<a name="hooks.core.post_initiate_connection_smtp"></a>
## Name

post_initiate_connection_smtp

## Synopsis

`#include "hooks/core/post_initiate_connection_smtp.h"`

| `void **post_initiate_connection_smtp** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding_slot</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">conn_fd</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`domain_record * <var class="pdparam">dr</var>`;
`int <var class="pdparam">binding_slot</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`int <var class="pdparam">conn_fd</var>`;

| `int **has_core_post_initiate_connection_smtp_hook** (` | `)`; |   |

| `void **register_core_post_initiate_connection_smtp_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_initiate_connection_smtp_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_post_initiate_connection_smtp_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_initiate_connection_smtp_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_core_post_initiate_connection_smtp_hook** (` | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding_slot</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">conn_fd</var>`)`; |   |

`domain_record * <var class="pdparam">dr</var>`;
`int <var class="pdparam">binding_slot</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`int <var class="pdparam">conn_fd</var>`;<a name="idp8882912"></a>
## Description

Called after an SMTP session initiation has been attempted. The architecture of Momentum is such that a connection is not created for a specific message, but instead for a domain/binding pair. A reasonable guess at which message might have been attempted on that connection would be to look at the active queue for that domain/binding and peek at the first message in the queue.

`dr` is the domain in question. `binding_slot` is the binding in question. `now` is the current time, and `conn_fd` is the return value from `initiate_connection`, either a valid file descriptor or one of the `CONN_ERR` codes from `connection.h`.

| [Prev](hooks.core.post_generate_soft_bounce_message.php)  | [Up](hooks.core.php) |  [Next](hooks.core.post_mail_queue_maintain_domain.php) |
| post_generate_soft_bounce_message  | [Table of Contents](index.php) |  post_mail_queue_maintain_domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)