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

| msys.validate.dk.get_responsible_domain |
| [Prev](lua.ref.msys.timer.every.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.validate.dk.sign.php) |

<a name="lua.ref.msys.validate.dk.get_responsible_domain"></a>
## Name

msys.validate.dk.get_responsible_domain — Return the domain responsible for the current message

<a name="idp18576240"></a>
## Synopsis

`msys.validate.dk.get_responsible_domain(msg, vctx);`

```
msg: userdata, ec_message type
vctx: userdata, validate_context type
```
<a name="idp18579296"></a>
## Description

This function returns the domain responsible for the current message. This function requires the [`dk_validate`](modules.domainkeys.php "71.28. domainkeys – Yahoo! DomainKeys") module.

Enable this function with the statement `require('msys.validate.dk');`.

It takes the following parameters:

*   `msg` – mail message

*   `vctx` – validation context

<a name="idp18586656"></a>
## See Also

[msys.validate.dk.sign](lua.ref.msys.validate.dk.sign.php "msys.validate.dk.sign")

| [Prev](lua.ref.msys.timer.every.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.validate.dk.sign.php) |
| msys.timer.every  | [Table of Contents](index.php) |  msys.validate.dk.sign |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)