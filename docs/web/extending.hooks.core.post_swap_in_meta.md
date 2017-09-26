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

| post_swap_in_meta |
| [Prev](extending.hooks.core.post_smtp_command.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.post_validate_data_spool_each_rcpt.php) |

<a name="extending.hooks.core.post_swap_in_meta"></a>
## Name

post_swap_in_meta

## Synopsis

`#include "hooks/core/swap_in_meta.h"`

| `int **post_swap_in_meta**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">flags</var>, |   |
|   | <var class="pdparam">serror</var>, |   |
|   | <var class="pdparam">rv</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">mess</var>`;
`int <var class="pdparam">flags</var>`;
`int <var class="pdparam">serror</var>`;
`int * <var class="pdparam">rv</var>`;

| `int **has_core_post_swap_in_meta_hook**(` | `)`; |   |

| `void **register_core_post_swap_in_meta_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_swap_in_meta_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_post_swap_in_meta_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_swap_in_meta_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_post_swap_in_meta_hook**(` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">flags</var>, |   |
|   | <var class="pdparam">serror</var>, |   |
|   | <var class="pdparam">rv</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`int <var class="pdparam">flags</var>`;
`int <var class="pdparam">serror</var>`;
`int * <var class="pdparam">rv</var>`;<a name="idp22466288"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.34.

The `post_swap_in_meta` hook allows modules to perform actions immediately after the meta-data file has been read from the spool. This hook is called even when the meta-data fetch failed.

*`mess`* is the message whose meta-data has been swapped in. *`flags`* is one of the `METAF_*` constants. *`rv`* will be set to one of the `IO_*` constants, indiciating whether the meta-data fetch succeeded (`IO_DONE`) or failed (`IO_TRANS_FAIL` or `IO_FAIL`). On failure, *`serror`* will contain the `errno` value.

If this hook returns 1, then any further processing for the meta-data swap-in will be skipped. The hook should only return 1 if it fails, and it should set *`rv`* to `IO_FAIL`.

| [Prev](extending.hooks.core.post_smtp_command.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.post_validate_data_spool_each_rcpt.php) |
| post_smtp_command  | [Table of Contents](index.php) |  post_validate_data_spool_each_rcpt |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)