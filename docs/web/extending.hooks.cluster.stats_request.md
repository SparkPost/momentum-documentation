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

| stats_request |
| [Prev](extending.hooks.cluster.nodename.php)  | Chapter 20. Hooks in the cluster scope |  [Next](extending.hooks.cluster.update_trans_metrics.php) |

<a name="extending.hooks.cluster.stats_request"></a>
## Name

stats_request

## Synopsis

`#include "hooks/cluster/stats_request.h"`

| `void **stats_request**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">cclosure</var>, |   |
|   | <var class="pdparam">sender</var>, |   |
|   | <var class="pdparam">group</var>, |   |
|   | <var class="pdparam">command_type</var>, |   |
|   | <var class="pdparam">which</var>, |   |
|   | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">len</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`void * <var class="pdparam">cclosure</var>`;
`char * <var class="pdparam">sender</var>`;
`char * <var class="pdparam">group</var>`;
`int <var class="pdparam">command_type</var>`;
`int <var class="pdparam">which</var>`;
`char * <var class="pdparam">mess</var>`;
`int <var class="pdparam">len</var>`;

| `int **has_cluster_stats_request_hook**(` | `)`; |   |

| `void **register_cluster_stats_request_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_cluster_stats_request_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_cluster_stats_request_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_cluster_stats_request_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_cluster_stats_request_hook**(` | <var class="pdparam">cclosure</var>, |   |
|   | <var class="pdparam">sender</var>, |   |
|   | <var class="pdparam">group</var>, |   |
|   | <var class="pdparam">command_type</var>, |   |
|   | <var class="pdparam">which</var>, |   |
|   | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">len</var>`)`; |   |

`void * <var class="pdparam">cclosure</var>`;
`char * <var class="pdparam">sender</var>`;
`char * <var class="pdparam">group</var>`;
`int <var class="pdparam">command_type</var>`;
`int <var class="pdparam">which</var>`;
`char * <var class="pdparam">mess</var>`;
`int <var class="pdparam">len</var>`;<a name="idp23516080"></a>
## Description

Functions registered with this hook are called whenever a EC_CLUSTER_STATS_REQUEST message is received on the shared message bus. The expected behavior is for the called function to respond with a private message to the sender with the requested stats information.

| [Prev](extending.hooks.cluster.nodename.php)  | [Up](extending.hooks.cluster.php) |  [Next](extending.hooks.cluster.update_trans_metrics.php) |
| nodename  | [Table of Contents](index.php) |  update_trans_metrics |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)