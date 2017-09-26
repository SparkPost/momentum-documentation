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

| adaptive_update |
| [Prev](hooks.cluster.php)  | Chapter 59. Hooks in the cluster Scope |  [Next](hooks.cluster.membership_update.php) |

<a name="hooks.cluster.adaptive_update"></a>
## Name

adaptive_update

## Synopsis

`#include "hooks/cluster/adaptive_update.h"`

| `void **adaptive_update** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">buf</var>, |   |
|   | <var class="pdparam">buflen</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`const char * <var class="pdparam">buf</var>`;
`int <var class="pdparam">buflen</var>`;

| `int **has_cluster_adaptive_update_hook** (` | `)`; |   |

| `void **register_cluster_adaptive_update_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_cluster_adaptive_update_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_cluster_adaptive_update_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_cluster_adaptive_update_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_cluster_adaptive_update_hook** (` | <var class="pdparam">buf</var>, |   |
|   | <var class="pdparam">buflen</var>`)`; |   |

`const char * <var class="pdparam">buf</var>`;
`int <var class="pdparam">buflen</var>`;<a name="idp293952"></a>
## Description

Adaptive call this hook to inform the cluster that global parameter has been updated. Cluster module should implement this hook to broadcast this event.

| [Prev](hooks.cluster.php)  | [Up](hooks.cluster.php) |  [Next](hooks.cluster.membership_update.php) |
| Chapter 59. Hooks in the cluster Scope  | [Table of Contents](index.php) |  membership_update |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)