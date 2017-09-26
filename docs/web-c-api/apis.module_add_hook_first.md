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

| module_add_hook_first |
| [Prev](apis.ec_module_resolve_capability.php)  | Chapter 37. Module-related Functions |  [Next](apis.module_add_hook_last.php) |

<a name="apis.module_add_hook_first"></a>
## Name

module_add_hook_first — Add a hook as the first hook

## Synopsis

`#include "module-hooks.h"`

| `ec_atomic_t **module_add_hook_first** (` | <var class="pdparam">name</var>, |   |
|   | <var class="pdparam">proto</var>, |   |
|   | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">flags</var>`)`; |   |

`const char * <var class="pdparam">name</var>`;
`const char * <var class="pdparam">proto</var>`;
`void * <var class="pdparam">hook</var>`;
`void * <var class="pdparam">closure</var>`;
`int <var class="pdparam">flags</var>`;<a name="idp30540128"></a>
## Description

### Note

This function is for internal use only. Use the `EC_DECLARE_VOID_HOOK` macro or the `EC_DECLARE_HOOK` macro.

<a name="idp30543184"></a>
## See Also

[Hooking API](arch.primary.apis.php#arch.hooking "1.3.2. Hooking API") and [EC_DECLARE_HOOK](apis.ec_declare_hook.php "EC_DECLARE_HOOK")

| [Prev](apis.ec_module_resolve_capability.php)  | [Up](module.php) |  [Next](apis.module_add_hook_last.php) |
| ec_module_resolve_capability  | [Table of Contents](index.php) |  module_add_hook_last |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)