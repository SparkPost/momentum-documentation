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

| ec_config_free_mx_routes |
| [Prev](apis.ec_config_fetch_globalconf.php)  | Chapter 36. Module Configuration Functions |  [Next](apis.ec_config_null_value.php) |

<a name="apis.ec_config_free_mx_routes"></a>
## Name

ec_config_free_mx_routes — Free the memory associated with an mx_routes struct

## Synopsis

`#include "ec_config.h"`

| `void **ec_config_free_mx_routes** (` | <var class="pdparam">r</var>`)`; |   |

`mx_routes * <var class="pdparam">r</var>`;<a name="idp30208256"></a>
## Description

Free the memory associated with an mx_routes struct. Be sure to use this function to free memory of the `MEMTYPE_MX_ROUTES` type. Do **not** use `free` or [ec_free](apis.ec_free.php "ec_free"). For more information about memory types see [Memory Types](arch.primary.apis.php#arch.memory.types "1.3.6.1. Memory Types").

**Parameters**

<dl class="variablelist">

<dt>r</dt>

<dd>

A pointer to an [mx_routes](structs.mx_routes.php "68.62. mx_routes") struct.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

<a name="idp30218432"></a>
## See Also

[ec_malloc](apis.ec_malloc.php "ec_malloc")

| [Prev](apis.ec_config_fetch_globalconf.php)  | [Up](module.config.php) |  [Next](apis.ec_config_null_value.php) |
| ec_config_fetch_globalconf  | [Table of Contents](index.php) |  ec_config_null_value |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)