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

| set_delayed_queue_event |
| [Prev](hooks.core.server_esmtp_session_abort.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.smtp_client_mailfrom_args.php) |

<a name="hooks.core.set_delayed_queue_event"></a>
## Name

set_delayed_queue_event

## Synopsis

`#include "hooks/core/set_delayed_queue_event.h"`

| `int **set_delayed_queue_event** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">mq</var>, |   |
|   | <var class="pdparam">now</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`mail_queue * <var class="pdparam">mq</var>`;
`struct timeval * <var class="pdparam">now</var>`;

| `int **has_core_set_delayed_queue_event_hook** (` | `)`; |   |

| `void **register_core_set_delayed_queue_event_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_set_delayed_queue_event_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_set_delayed_queue_event_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_set_delayed_queue_event_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_set_delayed_queue_event_hook** (` | <var class="pdparam">mq</var>, |   |
|   | <var class="pdparam">now</var>`)`; |   |

`mail_queue * <var class="pdparam">mq</var>`;
`struct timeval * <var class="pdparam">now</var>`;<a name="idp18773024"></a>
## Description

This hook is called to schedule a mail queue maintainer for a mail queue. The default implementation will cancel the maintainer if the queue is empty, else if there are messages in the active queue it will schedule for now + delayed_queue_scan_interval, else (delayed messages only) it will schedule for the next attempt time of the first delayed message or now + delayed_queue_scan_interval, whichever is sooner. You can override this behavior by registering this hook and returning nonzero when you are done; returning 0 will cause the default implementation to run. To cancel an existing maintainer event, you may call mail_queue_stop_maintainer. When creating a mailtainer, the timed event worker must be mail_queue_maintainer, and the closure must be the domain name, which you allocate as a MEMTYPE_STRING. *`now`* may be NULL, in which case you should call get_now to get the time.

| [Prev](hooks.core.server_esmtp_session_abort.php)  | [Up](hooks.core.php) |  [Next](hooks.core.smtp_client_mailfrom_args.php) |
| server_esmtp_session_abort  | [Table of Contents](index.php) |  smtp_client_mailfrom_args |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)