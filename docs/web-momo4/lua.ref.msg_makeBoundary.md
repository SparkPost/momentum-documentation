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

| msg:makeBoundary |
| [Prev](lua.ref.msg_mailfrom.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msg_makeContainer.php) |

<a name="lua.ref.msg_makeBoundary"></a>
## Name

msg:makeBoundary — Generates a unique boundary string

<a name="idp16841568"></a>
## Synopsis

`msg:makeBoundary(...);`

`...: mixed`<a name="idp16844528"></a>
## Description

The MIME specification requires that each boundary be a unique string that is not a common prefix/substring of any other boundary in the complete message. This function generates a unique boundary string by assessing the boundaries defined for all the parts in the current message, in addition to those defined in the mime tree for each mime part passed to it as a parameter. This function is called by `makeContainer` when its boundary parameter is `nil`.

Enable this function with the statement `require('msys.extended.message');`.

The ellipsis (...) in the parameter list indicate that this function has any number of arguments.

<a name="idp16849216"></a>
## See Also

[msg:makeContainer](lua.ref.msg_makeContainer.php "msg:makeContainer")

| [Prev](lua.ref.msg_mailfrom.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_makeContainer.php) |
| msg:mailfrom  | [Table of Contents](index.php) |  msg:makeContainer |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)