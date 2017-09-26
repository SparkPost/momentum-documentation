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

| body_modify |
| [Prev](hooks.core.binding_group_choose_binding.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.bounce_error_classify.php) |

<a name="hooks.core.body_modify"></a>
## Name

body_modify

## Synopsis

`#include "hooks/core/body_modify.h"`

| `void **body_modify** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">iop</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`const ec_message * <var class="pdparam">mess</var>`;
`io_object ** <var class="pdparam">iop</var>`;

| `int **has_core_body_modify_hook** (` | `)`; |   |

| `void **register_core_body_modify_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_body_modify_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_body_modify_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_body_modify_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_core_body_modify_hook** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">iop</var>`)`; |   |

`const ec_message * <var class="pdparam">mess</var>`;
`io_object ** <var class="pdparam">iop</var>`;<a name="idp246848"></a>
## Description

The `body_modify` hook allows modules to make arbitrary changes or transforms to the message body. The provided message should not be modified directly. Instead, the hook should create an io_object representing the new message body and set iop to this value. If, upon entrance to the hook, *iop is not the NULL pointer, it points to a message body modified by another instance of the hook (to allow chaining). If *iop is NULL, no other modules have modified the body and the contents of mess can be used instead. On return from the hook, if *iop is set, the specified io_object will be sent to the remote host instead of the message body present in the spool.

| [Prev](hooks.core.binding_group_choose_binding.php)  | [Up](hooks.core.php) |  [Next](hooks.core.bounce_error_classify.php) |
| binding_group_choose_binding  | [Table of Contents](index.php) |  bounce_error_classify |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)