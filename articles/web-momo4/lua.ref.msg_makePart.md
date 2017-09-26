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

| msg:makePart |
| [Prev](lua.ref.msg_makeContainer.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msg_mime.php) |

<a name="lua.ref.msg_makePart"></a>
## Name

msg:makePart — Creates a new, unlinked, singleton (or leaf) message part

<a name="idp16871760"></a>
## Synopsis

`msg:makePart(mimetype, body, encoding);`

```
mimetype: string
body: userdata, io_object, optional
encoding: string, optional
```
<a name="idp16874800"></a>
## Description

Creates a new, unlinked, singleton (or leaf) message part. `mimetype` specifies the MIME Content-Type that is to be used, and `body` is an optional io_object that contains the raw message body excluding headers. `encoding` is one of:

*   `msys.core.EC_MIME_TE_7BIT` (this is the default if left unspecified)

*   `msys.core.EC_MIME_TE_8BIT`

*   `msys.core.EC_MIME_TE_BASE64`

*   `msys.core.EC_MIME_TE_QUOTED_PRINTABLE`

Enable this function with the statement `require('msys.extended.message');`.

| [Prev](lua.ref.msg_makeContainer.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_mime.php) |
| msg:makeContainer  | [Table of Contents](index.php) |  msg:mime |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)