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

| mailq_get_next_active |
| [Prev](hooks.core.mail_queue_maintain_domain.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.mailq_insert_active.php) |

<a name="hooks.core.mailq_get_next_active"></a>
## Name

mailq_get_next_active

## Synopsis

`#include "hooks/core/mailq_get_next_active.h"`

| `ec_message * **mailq_get_next_active** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding_slot</var>, |   |
|   | <var class="pdparam">connh</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`domain_record * <var class="pdparam">dr</var>`;
`int <var class="pdparam">binding_slot</var>`;
`connection_handle * <var class="pdparam">connh</var>`;

| `int **has_core_mailq_get_next_active_hook** (` | `)`; |   |

| `void **register_core_mailq_get_next_active_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_mailq_get_next_active_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_mailq_get_next_active_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_mailq_get_next_active_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `ec_message * **call_core_mailq_get_next_active_hook** (` | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding_slot</var>, |   |
|   | <var class="pdparam">connh</var>`)`; |   |

`domain_record * <var class="pdparam">dr</var>`;
`int <var class="pdparam">binding_slot</var>`;
`connection_handle * <var class="pdparam">connh</var>`;<a name="idp11931888"></a>
## Description

When Momentum attempts to deliver a message via SMTP, it will fetch the next message off the active queue for the domain in question *`dr`*. The *`binding_slot`* and *`connh`* describe the current connection over which the returned message will be delivered.

Invocation will stop at the first registered function to return a non-NULL *`ec_message`*. If all functions return NULL, the connection in question will either go into the idle pool or be reassociated with a "sibling" domain that shares an MX the current domain.

| [Prev](hooks.core.mail_queue_maintain_domain.php)  | [Up](hooks.core.php) |  [Next](hooks.core.mailq_insert_active.php) |
| mail_queue_maintain_domain  | [Table of Contents](index.php) |  mailq_insert_active |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)