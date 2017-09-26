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

| multicast_publish |
| [Prev](hooks.msgc.membership_subscribe.php)  | Chapter 64. Hooks in the msgc Scope |  [Next](hooks.msgc.multicast_subscribe.php) |

<a name="hooks.msgc.multicast_publish"></a>
## Name

multicast_publish

## Synopsis

`#include "hooks/msgc/multicast_publish.h"`

| `void **multicast_publish** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">group</var>, |   |
|   | <var class="pdparam">group_len</var>, |   |
|   | <var class="pdparam">data</var>, |   |
|   | <var class="pdparam">data_len</var>, |   |
|   | <var class="pdparam">result</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`const char * <var class="pdparam">group</var>`;
`u_int16_t <var class="pdparam">group_len</var>`;
`const unsigned char * <var class="pdparam">data</var>`;
`u_int32_t <var class="pdparam">data_len</var>`;
`int * <var class="pdparam">result</var>`;

| `int **has_msgc_multicast_publish_hook** (` | `)`; |   |

| `void **register_msgc_multicast_publish_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_msgc_multicast_publish_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_msgc_multicast_publish_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_msgc_multicast_publish_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_msgc_multicast_publish_hook** (` | <var class="pdparam">group</var>, |   |
|   | <var class="pdparam">group_len</var>, |   |
|   | <var class="pdparam">data</var>, |   |
|   | <var class="pdparam">data_len</var>, |   |
|   | <var class="pdparam">result</var>`)`; |   |

`const char * <var class="pdparam">group</var>`;
`u_int16_t <var class="pdparam">group_len</var>`;
`const unsigned char * <var class="pdparam">data</var>`;
`u_int32_t <var class="pdparam">data_len</var>`;
`int * <var class="pdparam">result</var>`;<a name="idp11718016"></a>
## Description

This hook is registered by the MSGC infrastructure. Call it to publish data to the defined group. result is 0 on success, non-zero on failure to publish.

| [Prev](hooks.msgc.membership_subscribe.php)  | [Up](hooks.msgc.php) |  [Next](hooks.msgc.multicast_subscribe.php) |
| membership_subscribe  | [Table of Contents](index.php) |  multicast_subscribe |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)