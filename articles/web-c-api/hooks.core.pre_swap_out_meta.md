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

| pre_swap_out_meta |
| [Prev](hooks.core.pre_read_smtp.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.premigrate_outbound_connection.php) |

<a name="hooks.core.pre_swap_out_meta"></a>
## Name

pre_swap_out_meta

## Synopsis

`#include "hooks/core/swap_out_meta.h"`

| `int **pre_swap_out_meta** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">flags</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">mess</var>`;
`int <var class="pdparam">flags</var>`;

| `int **has_core_pre_swap_out_meta_hook** (` | `)`; |   |

| `void **register_core_pre_swap_out_meta_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_pre_swap_out_meta_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_pre_swap_out_meta_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_pre_swap_out_meta_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_pre_swap_out_meta_hook** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">flags</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`int <var class="pdparam">flags</var>`;<a name="idp16081040"></a>
## Description

The `pre_swap_out_meta` hook allows modules to perform last minute actions immediately prior to the meta-data file being written to spool. The mess and flags parameters are the parameters of the same names to the ec_message_swap_out_meta() function.

Making body modifications at this point is strongly discouraged, as they may be happening too late to be noticed and may result in those changes not being journalled to spool.

If this hook returns zero, it indicates an error and causes ec_message_swap_out_meta() to fail with the return value EC_MSG_SWAP_RESULT_ERR.

If this hook returns 1, it indicates success. Any other return value is undefined.

| [Prev](hooks.core.pre_read_smtp.php)  | [Up](hooks.core.php) |  [Next](hooks.core.premigrate_outbound_connection.php) |
| pre_read_smtp  | [Table of Contents](index.php) |  premigrate_outbound_connection |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)