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

| disk_queue_core_inject |
| [Prev](hooks.core.dec_outbound_connections.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.dns_get_As.php) |

<a name="hooks.core.disk_queue_core_inject"></a>
## Name

disk_queue_core_inject

## Synopsis

`#include "hooks/core/disk_queue_core_inject.h"`

| `void **disk_queue_core_inject** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">em</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`email_message * <var class="pdparam">em</var>`;

| `int **has_core_disk_queue_core_inject_hook** (` | `)`; |   |

| `void **register_core_disk_queue_core_inject_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_disk_queue_core_inject_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_disk_queue_core_inject_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_disk_queue_core_inject_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_core_disk_queue_core_inject_hook** (` | <var class="pdparam">em</var>`)`; |   |

`email_message * <var class="pdparam">em</var>`;<a name="idp10824736"></a>
## Description

Functions registered in at this hook will be invoked within disk_queue_core_inject immediately before the message is put into the in-memory queue. This hook will not be called if the message fails to spool in or gets expired within disk_queue_core_inject. The argument em is a message that has just been spooled in from disk.

This Hook is not supported currently.

| [Prev](hooks.core.dec_outbound_connections.php)  | [Up](hooks.core.php) |  [Next](hooks.core.dns_get_As.php) |
| dec_outbound_connections  | [Table of Contents](index.php) |  dns_get_As |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)