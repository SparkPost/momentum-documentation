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

| post_dns_handle_a |
| [Prev](hooks.core.post_config_commit.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.post_dns_handle_mx.php) |

<a name="hooks.core.post_dns_handle_a"></a>
## Name

post_dns_handle_a

## Synopsis

`#include "hooks/core/post_dns_handle_a.h"`

| `void **post_dns_handle_a** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">mxinfo</var>, |   |
|   | <var class="pdparam">status</var>, |   |
|   | <var class="pdparam">abuf</var>, |   |
|   | <var class="pdparam">alen</var>, |   |
|   | <var class="pdparam">qdomain</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`mx_info_closure * <var class="pdparam">mxinfo</var>`;
`int <var class="pdparam">status</var>`;
`unsigned char * <var class="pdparam">abuf</var>`;
`int <var class="pdparam">alen</var>`;
`const char * <var class="pdparam">qdomain</var>`;

| `int **has_core_post_dns_handle_a_hook** (` | `)`; |   |

| `void **register_core_post_dns_handle_a_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_dns_handle_a_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_post_dns_handle_a_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_dns_handle_a_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_core_post_dns_handle_a_hook** (` | <var class="pdparam">mxinfo</var>, |   |
|   | <var class="pdparam">status</var>, |   |
|   | <var class="pdparam">abuf</var>, |   |
|   | <var class="pdparam">alen</var>, |   |
|   | <var class="pdparam">qdomain</var>`)`; |   |

`mx_info_closure * <var class="pdparam">mxinfo</var>`;
`int <var class="pdparam">status</var>`;
`unsigned char * <var class="pdparam">abuf</var>`;
`int <var class="pdparam">alen</var>`;
`const char * <var class="pdparam">qdomain</var>`;<a name="idp13717136"></a>
## Description

The dns_handle_a is called when DNS query for A record is returned. The post_dns_handle_a hook is called after the query result is handled or the processing logic in dns_handle_a is short circuit when a pre_dns_handle_a hook function returns 1 or 2\. The hook function must check if mxinfo is NULL or not before using it.

| [Prev](hooks.core.post_config_commit.php)  | [Up](hooks.core.php) |  [Next](hooks.core.post_dns_handle_mx.php) |
| post_config_commit  | [Table of Contents](index.php) |  post_dns_handle_mx |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)