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

| pre_dns_handle_mx |
| [Prev](hooks.core.pre_dns_handle_a.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.pre_drop_privileges.php) |

<a name="hooks.core.pre_dns_handle_mx"></a>
## Name

pre_dns_handle_mx

## Synopsis

`#include "hooks/core/pre_dns_handle_mx.h"`

| `int **pre_dns_handle_mx** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">routes</var>, |   |
|   | <var class="pdparam">status</var>, |   |
|   | <var class="pdparam">abuf</var>, |   |
|   | <var class="pdparam">alen</var>, |   |
|   | <var class="pdparam">qdomain</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`mx_routes * <var class="pdparam">routes</var>`;
`int <var class="pdparam">status</var>`;
`unsigned char * <var class="pdparam">abuf</var>`;
`int <var class="pdparam">alen</var>`;
`const char * <var class="pdparam">qdomain</var>`;

| `int **has_core_pre_dns_handle_mx_hook** (` | `)`; |   |

| `void **register_core_pre_dns_handle_mx_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_pre_dns_handle_mx_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_pre_dns_handle_mx_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_pre_dns_handle_mx_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_pre_dns_handle_mx_hook** (` | <var class="pdparam">routes</var>, |   |
|   | <var class="pdparam">status</var>, |   |
|   | <var class="pdparam">abuf</var>, |   |
|   | <var class="pdparam">alen</var>, |   |
|   | <var class="pdparam">qdomain</var>`)`; |   |

`mx_routes * <var class="pdparam">routes</var>`;
`int <var class="pdparam">status</var>`;
`unsigned char * <var class="pdparam">abuf</var>`;
`int <var class="pdparam">alen</var>`;
`const char * <var class="pdparam">qdomain</var>`;<a name="idp1658512"></a>
## Description

The dns_handle_mx is called when DNS query for MX record is returned. The pre_dns_handle_mx hook is called before the query result is handled. If a hook function returns 0, the remaining hook functions will be called. If all hook functions return 0, the processing of query result will continue. If 1 or 2 is returned from a hook function, the remaining hook functions and the processing of query result within dns_handle_mx will be skipped. If 2 is returned by a hook function, that hook function should free mx_routes structure. A hook function should not return any value other than 0, 1 and 2.

| [Prev](hooks.core.pre_dns_handle_a.php)  | [Up](hooks.core.php) |  [Next](hooks.core.pre_drop_privileges.php) |
| pre_dns_handle_a  | [Table of Contents](index.php) |  pre_drop_privileges |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)