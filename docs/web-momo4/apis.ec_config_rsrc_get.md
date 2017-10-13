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

| ec_config_rsrc_get |
| [Prev](hooks.config_rsrc_setup.php)  | Chapter 69. Hook Points and C Functions Reference |  [Next](apis.ec_httpsrv_register_auth.php) |

<a name="apis.ec_config_rsrc_get"></a>
## Name

ec_config_rsrc_get — Return a resource list blobject from the configuration system

## Synopsis

`#include "configuration.h"`

| `ec_blobject * **ec_config_rsrc_get** (` | <var class="pdparam">id</var>, |   |
|   | <var class="pdparam">registering</var>`)`; |   |

`ec_atomic_t <var class="pdparam">id</var>`;
`int <var class="pdparam">registering</var>`;<a name="idp8663440"></a>
## Description

This function returns a resource list blobject from the configuration system.

### Warning

When you are finished with the returned object, you must call [ec_blobject_delref](https://support.messagesystems.com/docs/web-c-api/apis.ec_blobject_delref.php) to dispose of it.

When the `registering` parameter is `EC_CFG_RSRC_REGISTERING`, the configuration system will return the resource list from the currently-being-assembled configuration transaction. If the resource list does not exist in the currently-being-assembled transaction, then it will be created.

When the `registering` parameter is `EC_CFG_RSRC_CONSUMING`, the configuration system will return the resource list from the currently active configuration transaction. If the resource list does not exist in the active transaction, NULL will be returned.

The configuration system semantics are such that there will be a new instance of the resource list for each new configuration generation. That means that modules that register resources against this list will need to ensure that they register them explicitly from their ext_init module function each time it is invoked with `EC_MODULE_INIT_INIT`.

**Parameters**

<dl class="variablelist">

<dt>id</dt>

<dd>

Resource list identifier returned by `ec_config_rsrc_create`

</dd>

<dt>registering</dt>

<dd>

Constant that indicates either a read or a write operation.

It can be one of the following values:

```
/** Indicates that the caller is consuming the existing, committed resource */
#define EC_CFG_RSRC_CONSUMING   0
/** Indicates that the caller is modifying the pending resource */
#define EC_CFG_RSRC_REGISTERING 1
```
</dd>

</dl>

**Return Values**

This function returns a [ec_blobject](https://support.messagesystems.com/docs/web-c-api/structs.ec_blobject.php) or `NULL`.

**Threading**

This hook can be called in any thread.

<a name="idp7808848"></a>
## See Also

[config_rsrc_setup](hooks.config_rsrc_setup.php "config_rsrc_setup")

| [Prev](hooks.config_rsrc_setup.php)  | [Up](hooks.php) |  [Next](apis.ec_httpsrv_register_auth.php) |
| config_rsrc_setup  | [Table of Contents](index.php) |  ec_httpsrv_register_auth |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)