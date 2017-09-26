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

| msys.validate.dkim.get_responsible_domain |
| [Prev](lua.ref.msys.validate.dkim.get_domains.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.validate.dkim.reflect.php) |

<a name="lua.ref.msys.validate.dkim.get_responsible_domain"></a>
## Name

msys.validate.dkim.get_responsible_domain — Return the domain responsible for the current message

<a name="idp27153440"></a>
## Synopsis

`msys.validate.dkim.get_responsible_domain(msg, vctx);`

```
msg: userdata, ec_message type
vctx: userdata, validate_context type
```
<a name="idp27156208"></a>
## Description

This function requires the dkim_validate module. `msg` is a mail message. `vctx` is the validation context. It returns the domain responsible for the current message.

Enable this function with the statement `require('msys.validate.dkim');`.

<a name="idp27159744"></a>
## See Also

[msys.validate.dkim.get_domains](lua.ref.msys.validate.dkim.get_domains.php "msys.validate.dkim.get_domains"), [msys.validate.dkim.reflect](lua.ref.msys.validate.dkim.reflect.php "msys.validate.dkim.reflect"), [msys.validate.dkim.sign](lua.ref.msys.validate.dkim.sign.php "msys.validate.dkim.sign"), [Section 14.27, “dkim – DomainKeys Identified Mail Signatures”](modules.dkim.php "14.27. dkim – DomainKeys Identified Mail Signatures")

| [Prev](lua.ref.msys.validate.dkim.get_domains.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.validate.dkim.reflect.php) |
| msys.validate.dkim.get_domains  | [Table of Contents](index.php) |  msys.validate.dkim.reflect |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)