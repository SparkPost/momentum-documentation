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

| msg:binding_group |
| [Prev](lua.ref.msg_binding.php)  | 15.2. Lua Functions |  [Next](lua.ref.msg_body.php) |

<a name="lua.ref.msg_binding_group"></a>
## Name

msg:binding_group — Sets the binding_group to the named binding, if one is provided.

<a name="idp25356688"></a>
## Synopsis

`msg:binding_group(value);`

`value: string, optional`<a name="idp25359344"></a>
## Description

Sets the binding to one in the named binding_group, if one is provided, using logic similar to the Sieve function `ec_set_binding_group`. Returns the current or new value for the binding_group.

If the [adaptive module](modules.adaptive.php "14.2. adaptive – Adaptive Delivery") is enabled the logic for choosing a binding is as follows:

1.  An unsuspended binding local to the MTA

2.  A non-local unsuspended binding

3.  If all bindings are suspended, a local binding is randomly chosen

Enable this function with the statement `require('msys.extended.message');`.

<a name="idp25366656"></a>
## See Also

[msg:binding](lua.ref.msg_binding.php "msg:binding")

| [Prev](lua.ref.msg_binding.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_body.php) |
| msg:binding  | [Table of Contents](index.php) |  msg:body |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)