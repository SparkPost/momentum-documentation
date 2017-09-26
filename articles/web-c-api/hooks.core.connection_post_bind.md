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

| connection_post_bind |
| [Prev](hooks.core.connection_goal.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.control_allow_writable_config.php) |

<a name="hooks.core.connection_post_bind"></a>
## Name

connection_post_bind

## Synopsis

`#include "hooks/core/connection_post_bind.h"`

| `int **connection_post_bind** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding_slot</var>, |   |
|   | <var class="pdparam">fd</var>, |   |
|   | <var class="pdparam">addr</var>, |   |
|   | <var class="pdparam">addr_len</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`domain_record * <var class="pdparam">dr</var>`;
`int <var class="pdparam">binding_slot</var>`;
`int <var class="pdparam">fd</var>`;
`struct sockaddr * <var class="pdparam">addr</var>`;
`int <var class="pdparam">addr_len</var>`;

| `int **has_core_connection_post_bind_hook** (` | `)`; |   |

| `void **register_core_connection_post_bind_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_connection_post_bind_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_connection_post_bind_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_connection_post_bind_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_connection_post_bind_hook** (` | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding_slot</var>, |   |
|   | <var class="pdparam">fd</var>, |   |
|   | <var class="pdparam">addr</var>, |   |
|   | <var class="pdparam">addr_len</var>`)`; |   |

`domain_record * <var class="pdparam">dr</var>`;
`int <var class="pdparam">binding_slot</var>`;
`int <var class="pdparam">fd</var>`;
`struct sockaddr * <var class="pdparam">addr</var>`;
`int <var class="pdparam">addr_len</var>`;<a name="idp4026272"></a>
## Description

This hook is invoked subsequent to the bind() call perform prior to any outbound connection attempt. *`dr`* is the domain record whose queue will be attempted on this connection if the connection should be established successfully. *`binding_slot`* is the MultiVIP™ binding slot on which the outbound connection was made. *`fd`* is the file descriptor of the socket itself. *`addr`* and *`addr_len`* represent the destination address that wil be used in a subsequent call to *`connect()`*.

Return 0 on success. Returning non-zero will cause the connection attempt to aborted entirely.

| [Prev](hooks.core.connection_goal.php)  | [Up](hooks.core.php) |  [Next](hooks.core.control_allow_writable_config.php) |
| connection_goal  | [Table of Contents](index.php) |  control_allow_writable_config |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)