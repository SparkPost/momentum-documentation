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

| ec_config_release_scope_instance |
| [Prev](apis.ec_config_register_option.php)  | Chapter 36. Module Configuration Functions |  [Next](apis.ec_config_release_value.php) |

<a name="apis.ec_config_release_scope_instance"></a>
## Name

ec_config_release_scope_instance — Free the memory associated with an ec_config_header struct

## Synopsis

`#include "ec_config.h"`

| `void **ec_config_release_scope_instance** (` | <var class="pdparam">tofree</var>`)`; |   |

`void * <var class="pdparam">tofree</var>`;<a name="idp30283504"></a>
## Description

Use this function to release the [ec_config_header](structs.ec_config_header.php "68.21. ec_config_header") struct acquired via [ec_config_fetch_globalconf](apis.ec_config_fetch_globalconf.php "ec_config_fetch_globalconf"). Do **not** use `free` or [ec_free](apis.ec_free.php "ec_free").

**Parameters**

<dl class="variablelist">

<dt>tofree</dt>

<dd>

A pointer to an [ec_config_header](structs.ec_config_header.php "68.21. ec_config_header") struct.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

<a name="idp30293936"></a>
## See Also

[ec_config_header](structs.ec_config_header.php "68.21. ec_config_header")

| [Prev](apis.ec_config_register_option.php)  | [Up](module.config.php) |  [Next](apis.ec_config_release_value.php) |
| ec_config_register_option  | [Table of Contents](index.php) |  ec_config_release_value |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)