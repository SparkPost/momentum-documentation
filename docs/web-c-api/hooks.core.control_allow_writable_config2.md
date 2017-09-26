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

| control_allow_writable_config2 |
| [Prev](hooks.core.control_allow_writable_config.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.control_post_command.php) |

<a name="hooks.core.control_allow_writable_config2"></a>
## Name

control_allow_writable_config2

## Synopsis

`#include "hooks/core/control_allow_writable_config2.h"`

| `int **control_allow_writable_config2** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">cc</var>, |   |
|   | <var class="pdparam">argc</var>, |   |
|   | <var class="pdparam">argv[]</var>, |   |
|   | <var class="pdparam">input</var>, |   |
|   | <var class="pdparam">output</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`command_construct * <var class="pdparam">cc</var>`;
`int <var class="pdparam">argc</var>`;
`const char * <var class="pdparam">argv[]</var>`;
`ec_control_context * <var class="pdparam">input</var>`;
`ec_control_context * <var class="pdparam">output</var>`;

| `int **has_core_control_allow_writable_config2_hook** (` | `)`; |   |

| `void **register_core_control_allow_writable_config2_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_control_allow_writable_config2_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_control_allow_writable_config2_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_control_allow_writable_config2_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_control_allow_writable_config2_hook** (` | <var class="pdparam">cc</var>, |   |
|   | <var class="pdparam">argc</var>, |   |
|   | <var class="pdparam">argv[]</var>, |   |
|   | <var class="pdparam">input</var>, |   |
|   | <var class="pdparam">output</var>`)`; |   |

`command_construct * <var class="pdparam">cc</var>`;
`int <var class="pdparam">argc</var>`;
`const char * <var class="pdparam">argv[]</var>`;
`ec_control_context * <var class="pdparam">input</var>`;
`ec_control_context * <var class="pdparam">output</var>`;<a name="idp6048720"></a>
## Description

This hook allows a module to disable "writability" or "run-time reconfiguration" of the command in question. The hook parameters are identical to the parameters to an ec_control_function callback.

Return 1 from this hook to allow the operation to continue, return 0 to prevent it.

| [Prev](hooks.core.control_allow_writable_config.php)  | [Up](hooks.core.php) |  [Next](hooks.core.control_post_command.php) |
| control_allow_writable_config  | [Table of Contents](index.php) |  control_post_command |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)