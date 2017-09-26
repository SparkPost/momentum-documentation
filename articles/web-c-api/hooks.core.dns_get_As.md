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

| dns_get_As |
| [Prev](hooks.core.disk_queue_core_inject.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.dns_get_MXs.php) |

<a name="hooks.core.dns_get_As"></a>
## Name

dns_get_As

## Synopsis

`#include "hooks/core/dns_get_As.h"`

| `int **dns_get_As** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">name</var>, |   |
|   | <var class="pdparam">mxinfo</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`const char * <var class="pdparam">name</var>`;
`mx_info_closure * <var class="pdparam">mxinfo</var>`;

| `int **has_core_dns_get_As_hook** (` | `)`; |   |

| `void **register_core_dns_get_As_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_dns_get_As_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_dns_get_As_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_dns_get_As_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_dns_get_As_hook** (` | <var class="pdparam">name</var>, |   |
|   | <var class="pdparam">mxinfo</var>`)`; |   |

`const char * <var class="pdparam">name</var>`;
`mx_info_closure * <var class="pdparam">mxinfo</var>`;<a name="idp3397648"></a>
## Description

The dns_get_As command requests the name resolution subsystem to resolve the provided hostname to a set of IP addresses. Upon successful resolution, the mail exchange's IP addresses should be registered via dns_domain_add_failed_a() or dns_set_mx_addresses(). If the mxinfo->refresh is non-zero, then dns_replace_host_in_timeheap() should be called. After updating or inserting, mail_queue_maintiain_domain() should be called to initiate delivery.

| [Prev](hooks.core.disk_queue_core_inject.php)  | [Up](hooks.core.php) |  [Next](hooks.core.dns_get_MXs.php) |
| disk_queue_core_inject  | [Table of Contents](index.php) |  dns_get_MXs |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)