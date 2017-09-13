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

| domain_requires_master_scheduler |
| [Prev](hooks.core.dns_get_MXs.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.ec_bag_find.php) |

<a name="hooks.core.domain_requires_master_scheduler"></a>
## Name

domain_requires_master_scheduler

## Synopsis

`#include "hooks/core/domain_requires_master_scheduler.h"`

| `int **domain_requires_master_scheduler** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">domain</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`const char * <var class="pdparam">domain</var>`;

| `int **has_core_domain_requires_master_scheduler_hook** (` | `)`; |   |

| `void **register_core_domain_requires_master_scheduler_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_domain_requires_master_scheduler_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_domain_requires_master_scheduler_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_domain_requires_master_scheduler_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_domain_requires_master_scheduler_hook** (` | <var class="pdparam">domain</var>`)`; |   |

`const char * <var class="pdparam">domain</var>`;<a name="idp11194496"></a>
## Description

This hook is called whenever a scheduler is not defined for a given domain and one needs to be selected. Providers returning 1 will cause the listed domain to always be assigned to the master scheduler. This is for purposes of mail queue maintenance.

| [Prev](hooks.core.dns_get_MXs.php)  | [Up](hooks.core.php) |  [Next](hooks.core.ec_bag_find.php) |
| dns_get_MXs  | [Table of Contents](index.php) |  ec_bag_find |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)