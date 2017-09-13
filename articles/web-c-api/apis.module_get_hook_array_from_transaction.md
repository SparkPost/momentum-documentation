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

| module_get_hook_array_from_transaction |
| [Prev](apis.module_add_hook_last.php)  | Chapter 37. Module-related Functions |  [Next](apis.module_get_hook_head.php) |

<a name="apis.module_get_hook_array_from_transaction"></a>
## Name

module_get_hook_array_from_transaction — Get the hooks associated with the current transaction

## Synopsis

`#include "module-hooks.h"`

| `ec_ptr_array * **module_get_hook_array_from_transaction** (` | <var class="pdparam">transaction</var>, |   |
|   | <var class="pdparam">head</var>`)`; |   |

`ec_config_header * <var class="pdparam">transaction</var>`;
`struct __ec_hook_head * <var class="pdparam">head</var>`;<a name="idp30572112"></a>
## Description

Get the hooks associated with the current transaction.

**Parameters**

<dl class="variablelist">

<dt>transaction</dt>

<dd>

For a description of this data type see [ec_config_header](structs.ec_config_header.php "68.21. ec_config_header").

</dd>

<dt>head</dt>

<dd>

The __ec_hook_head. Use [module_get_hook_head](apis.module_get_hook_head.php "module_get_hook_head") to retrieve this struct.

</dd>

</dl>

**Return Values**

On success, this function returns an array of pointers to hooks. For more information about the ec_ptr_array data type see [ec_ptr_array](structs.ec_ptr_array.php "68.40. ec_ptr_array"). On failure this function returns NULL.

**Threading**

It is legal to call this function in any thread.

<a name="idp30582640"></a>
## See Also

[module_get_hook_head](apis.module_get_hook_head.php "module_get_hook_head"), [Section 68.32, “__ec_hook_head”](structs.ec_hook_head.php "68.32. __ec_hook_head"), [ec_ptr_array_init](apis.ec_ptr_array_init.php "ec_ptr_array_init") and [ec_config_fetch_globalconf](apis.ec_config_fetch_globalconf.php "ec_config_fetch_globalconf")

| [Prev](apis.module_add_hook_last.php)  | [Up](module.php) |  [Next](apis.module_get_hook_head.php) |
| module_add_hook_last  | [Table of Contents](index.php) |  module_get_hook_head |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)