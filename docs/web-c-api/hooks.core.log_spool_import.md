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

| log_spool_import |
| [Prev](hooks.core.log_reopen.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.log_transient_failure_v1.php) |

<a name="hooks.core.log_spool_import"></a>
## Name

log_spool_import

## Synopsis

`#include "hooks/core/log_spool_import.h"`

| `void **log_spool_import** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">m</var>, |   |
|   | <var class="pdparam">orig_id</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">result</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">m</var>`;
`message_id * <var class="pdparam">orig_id</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`ec_spool_ctx * <var class="pdparam">ctx</var>`;
`int <var class="pdparam">result</var>`;

| `int **has_core_log_spool_import_hook** (` | `)`; |   |

| `void **register_core_log_spool_import_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_log_spool_import_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_log_spool_import_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_log_spool_import_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_core_log_spool_import_hook** (` | <var class="pdparam">m</var>, |   |
|   | <var class="pdparam">orig_id</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">result</var>`)`; |   |

`ec_message * <var class="pdparam">m</var>`;
`message_id * <var class="pdparam">orig_id</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`ec_spool_ctx * <var class="pdparam">ctx</var>`;
`int <var class="pdparam">result</var>`;<a name="idp13787584"></a>
## Description

This hook allows a module to be notified when a message is imported from a spool context. Note that m->id may differ from orig_id, as spool imports may cause the message id to be regenerated. msg may also be NULL. result is one of LOG_SPOOL_IMPORT_SUCCESS, LOG_SPOOL_IMPORT_SPOOL_IN_FAIL, LOG_SPOOL_IMPORT_SWAP_IN_FAIL, LOG_SPOOL_IMPORT_SWAP_OUT_FAIL.

| [Prev](hooks.core.log_reopen.php)  | [Up](hooks.core.php) |  [Next](hooks.core.log_transient_failure_v1.php) |
| log_reopen  | [Table of Contents](index.php) |  log_transient_failure_v1 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)