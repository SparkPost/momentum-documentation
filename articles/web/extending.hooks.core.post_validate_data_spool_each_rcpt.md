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

| post_validate_data_spool_each_rcpt |
| [Prev](extending.hooks.core.post_swap_in_meta.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.post_validate_data_spool_each_rcpt_v1.php) |

<a name="extending.hooks.core.post_validate_data_spool_each_rcpt"></a>
## Name

post_validate_data_spool_each_rcpt

## Synopsis

`#include "hooks/core/post_validate_data_spool_each_rcpt.h"`

| `void **post_validate_data_spool_each_rcpt**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">m</var>, |   |
|   | <var class="pdparam">c</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`email_message * <var class="pdparam">m</var>`;
`validate_context * <var class="pdparam">c</var>`;

| `int **has_core_post_validate_data_spool_each_rcpt_hook**(` | `)`; |   |

| `void **register_core_post_validate_data_spool_each_rcpt_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_validate_data_spool_each_rcpt_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_post_validate_data_spool_each_rcpt_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_validate_data_spool_each_rcpt_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_core_post_validate_data_spool_each_rcpt_hook**(` | <var class="pdparam">m</var>, |   |
|   | <var class="pdparam">c</var>`)`; |   |

`email_message * <var class="pdparam">m</var>`;
`validate_context * <var class="pdparam">c</var>`;<a name="idp22494800"></a>
## Description

### Note

This hook is deprecated starting with Ecelerity 2.2; new code should implement the hook described in [validate_data_spool_each_rcpt](extending.hooks.core.validate_data_spool_each_rcpt.php "validate_data_spool_each_rcpt") instead.

This hook is invoked after the normal `validate_data_spool_each_rcpt` module callback. The only reason to use this hook point instead of a traditional module callback is that you can guarantee an invocation subsequent to all other modules' `validate_data_spool_each_rcpt` callbacks have been performed. The *`mess`* and *`ctx`* parameters are the same used in the traditional `validate_data_spool_each_rcpt` module callback.

| [Prev](extending.hooks.core.post_swap_in_meta.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.post_validate_data_spool_each_rcpt_v1.php) |
| post_swap_in_meta  | [Table of Contents](index.php) |  post_validate_data_spool_each_rcpt_v1 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)