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

| post_smtp_command |
| [Prev](extending.hooks.core.post_read_smtp.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.post_swap_in_meta.php) |

<a name="extending.hooks.core.post_smtp_command"></a>
## Name

post_smtp_command

## Synopsis

`#include "hooks/core/post_smtp_command.h"`

| `void **post_smtp_command**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">b</var>, |   |
|   | <var class="pdparam">c</var>, |   |
|   | <var class="pdparam">d</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`int * <var class="pdparam">b</var>`;
`message_construct * <var class="pdparam">c</var>`;
`validate_context * <var class="pdparam">d</var>`;

| `int **has_core_post_smtp_command_hook**(` | `)`; |   |

| `void **register_core_post_smtp_command_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_smtp_command_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_post_smtp_command_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_post_smtp_command_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_core_post_smtp_command_hook**(` | <var class="pdparam">b</var>, |   |
|   | <var class="pdparam">c</var>, |   |
|   | <var class="pdparam">d</var>`)`; |   |

`int * <var class="pdparam">b</var>`;
`message_construct * <var class="pdparam">c</var>`;
`validate_context * <var class="pdparam">d</var>`;<a name="idp22442192"></a>
## Description

This hook is invoked immediately after receiving a complete network command on an SMTP session. It will be invoked regardless of the validity of the command.

The data of the command itself is stored in *`c->subcon.gb_donebuffer`* and its length in *`c->subcon.gb_donesize`*. The command itself may not be null terminated, **respect the size** . The validate context is passed as a parameter for convenience as *`&c->ctx == ctx`*        .

| [Prev](extending.hooks.core.post_read_smtp.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.post_swap_in_meta.php) |
| post_read_smtp  | [Table of Contents](index.php) |  post_swap_in_meta |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)