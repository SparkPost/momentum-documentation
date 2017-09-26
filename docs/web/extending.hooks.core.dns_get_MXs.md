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

| dns_get_MXs |
| [Prev](extending.hooks.core.dns_get_As.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.ec_bag_find.php) |

<a name="extending.hooks.core.dns_get_MXs"></a>
## Name

dns_get_MXs

## Synopsis

`#include "hooks/core/dns_get_MXs.h"`

| `int **dns_get_MXs**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">domain</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`const char * <var class="pdparam">domain</var>`;

| `int **has_core_dns_get_MXs_hook**(` | `)`; |   |

| `void **register_core_dns_get_MXs_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_dns_get_MXs_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_dns_get_MXs_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_dns_get_MXs_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_dns_get_MXs_hook**(` | <var class="pdparam">domain</var>`)`; |   |

`const char * <var class="pdparam">domain</var>`;<a name="idp21032576"></a>
## Description

The dns_get_MXs command requests the name resolution subsystem to resolve the provided domain name to a set of mail exchanges. Upon successful resolution, the domain's mx list should be registered with the system (from the main thread) by calling dns_add_domain() and dns_domain_add_mx(). Afterwards, lookuptable_flushdomain() and mail_queue_maintain_domain() should be called on the resulting domain_record to initiate delivery. In case of failure, dns_add_mx_broken can be used to add an unrouteble domain container; it calls the flush and maintain functions, so doing so manually is unnecessary.

| [Prev](extending.hooks.core.dns_get_As.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.ec_bag_find.php) |
| dns_get_As  | [Table of Contents](index.php) |  ec_bag_find |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)