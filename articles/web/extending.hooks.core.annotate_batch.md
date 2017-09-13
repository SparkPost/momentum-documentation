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

| annotate_batch |
| [Prev](extending.hooks.core.aaa_log.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.assess_batch.php) |

<a name="extending.hooks.core.annotate_batch"></a>
## Name

annotate_batch

## Synopsis

`#include "hooks/core/annotate_batch.h"`

| `int **annotate_batch**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">head</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`sp_async_message * <var class="pdparam">head</var>`;

| `int **has_core_annotate_batch_hook**(` | `)`; |   |

| `void **register_core_annotate_batch_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_annotate_batch_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_annotate_batch_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_annotate_batch_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_annotate_batch_hook**(` | <var class="pdparam">head</var>`)`; |   |

`sp_async_message * <var class="pdparam">head</var>`;<a name="idp20369296"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.40.

This hook allows a module to assume responsibility for batch annotation. Must be used in conjunction with the `core_assess_batch`.

*`head`* is the `sp_async_message` head pointer that contains the whole batch.

If this hook returns 1, then any further batch processing is stopped.

| [Prev](extending.hooks.core.aaa_log.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.assess_batch.php) |
| aaa_log  | [Table of Contents](index.php) |  assess_batch |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)