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

| module_get_hook_head |
| [Prev](apis.module_get_hook_array_from_transaction.php)  | Chapter 37. Module-related Functions |  [Next](netlistener.php) |

<a name="apis.module_get_hook_head"></a>
## Name

module_get_hook_head — Fetch the arguments for a hook

## Synopsis

`#include "module-hooks.h"`

| `(struct __ec_hook_head *) **module_get_hook_head** (` | <var class="pdparam">hook_name</var>, |   |
|   | <var class="pdparam">proto</var>`)`; |   |

`const char * <var class="pdparam">hook_name</var>`;
`const char * <var class="pdparam">proto</var>`;<a name="idp30595248"></a>
## Description

Retreive an __ec_hook_head which contains the arguments for a hook.

**Parameters**

<dl class="variablelist">

<dt>hook_name</dt>

<dd>

The hook name.

</dd>

<dt>proto</dt>

<dd>

The hook prototype.

</dd>

</dl>

**Return Values**

This function returns a pointer to a __ec_hook_head struct which contains the hook arguments. For more information see [__ec_hook_head](structs.ec_hook_head.php "68.32. __ec_hook_head").

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.module_get_hook_array_from_transaction.php)  | [Up](module.php) |  [Next](netlistener.php) |
| module_get_hook_array_from_transaction  | [Table of Contents](index.php) |  Chapter 38. Netlistener Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)