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

| msg:code |
| [Prev](lua.ref.msys.core.string_new.php)  | 15.2. Lua Functions |  [Next](lua.ref.msg_get_envelope2.php) |

<a name="lua.ref.msg_code"></a>
## Name

msg:code — Get or set the message code

<a name="idp24154192"></a>
## Synopsis

`require('msys.extended.message')`

`msg:code(number, str);`

```
number: number (optional)
str: string (optional)
```
<a name="idp24157600"></a>
## Description

Get or set the message code. In the case of a "get call", the parameter list is left empty. In the case of "set call", if `number` is `0`, then the number is taken from `str`, otherwise, the number is prefixed to `str`. If the string passed to `str` is multi-line and/or the number needs to be prefixed, then the string will be adjusted so that it forms a valid (potentially multi-line) response string.

### Warning

Do not call this function from `validate_set_binding`.

<a name="lua.ref.msg_code.example.get"></a>

**Example 15.20. Getting a Code**

`local codestr = msg:code();`
<a name="lua.ref.msg_code.example.set"></a>

**Example 15.21. Setting a Code**

`msg:code("421", "Too much spam.");`

Enable this function with the statement `require('msys.extended.message');`.

### Note

During reception, you will likely want to set the code by using [vctx:set_code](lua.ref.vctx_set_code.php "vctx:set_code").

<a name="idp24169952"></a>
## See Also

[vctx:set_code](lua.ref.vctx_set_code.php "vctx:set_code")

| [Prev](lua.ref.msys.core.string_new.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_get_envelope2.php) |
| msys.core.string_new  | [Table of Contents](index.php) |  msg:get_envelope2 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)