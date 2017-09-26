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

| vctx:recipient_list |
| [Prev](lua.ref.vctx_get.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.vctx_remove_recipient.php) |

<a name="lua.ref.vctx_recipient_list"></a>
## Name

vctx:recipient_list — Return or set the current recipient list

<a name="idp19278912"></a>
## Synopsis

`vctx:recipient_list(addresses);`

`addresses: string, optional`<a name="idp19281856"></a>
## Description

If called with no arguments, this function returns the current recipient list. If passed an `addresses` parameter, this replaces the current recipient list. The parameter may be a single address or a table of addresses.

### Warning

This function should **not** be called in the validate_rcptto phase.

Enable this function with the statement `require('msys.extended.vctx');`.

<a name="idp19286960"></a>
## See Also

[Example 70.69, “vctx_add_recipient example”](lua.ref.vctx_add_recipient.php#lua.ref.vctx_add_recipient.example "Example 70.69. vctx_add_recipient example")

| [Prev](lua.ref.vctx_get.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.vctx_remove_recipient.php) |
| vctx:get  | [Table of Contents](index.php) |  vctx:remove_recipient |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)