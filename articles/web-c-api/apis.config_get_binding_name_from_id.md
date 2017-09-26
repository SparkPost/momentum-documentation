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

| config_get_binding_name_from_id |
| [Prev](apis.config_get_binding_id_from_name.php)  | Chapter 12. Configuration Functions II |  [Next](apis.config_get_connect_timeout.php) |

<a name="apis.config_get_binding_name_from_id"></a>
## Name

config_get_binding_name_from_id — Get the binding name associated with the specified identifier

## Synopsis

`#include "ec_config.h"`

| `char * **config_get_binding_name_from_id** (` | <var class="pdparam">slot</var>`)`; |   |

`ec_binding_slot <var class="pdparam">slot</var>`;<a name="idp21377024"></a>
## Description

Get the binding name associated with the specified identifier.

**Parameters**

<dl class="variablelist">

<dt>slot</dt>

<dd>

This parameter is an `ec_binding_slot` which is defined as: `typedef int ec_binding_slot;`.

</dd>

</dl>

**Return Values**

This function returns the binding name associated with the specified slot.

**Threading**

It is legal to call this function in any thread.

<a name="idp21384336"></a>
## See Also

[config_get_binding_id_from_name](apis.config_get_binding_id_from_name.php "config_get_binding_id_from_name")

| [Prev](apis.config_get_binding_id_from_name.php)  | [Up](config_get.other.php) |  [Next](apis.config_get_connect_timeout.php) |
| config_get_binding_id_from_name  | [Table of Contents](index.php) |  config_get_connect_timeout |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)