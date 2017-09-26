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

| msys.pcre.replace |
| [Prev](lua.ref.msys.pcre.match.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.pcre.split.php) |

<a name="lua.ref.msys.pcre.replace"></a>
## Name

msys.pcre.replace — Perform a PCRE replace operation

<a name="idp18257600"></a>
## Synopsis

`msys.pcre.replace(subject, pattern, replacement);`

```
subject: string
pattern: string
replacement: string
```
<a name="idp18260640"></a>
## Description

Perform a PCRE replace operation.

```
...
  local orig = self:text();
  if orig == nil then
    return false
  end
  local rep = msys.pcre.replace(orig, pattern, replacement);
  if rep ~= orig then
    self:text(rep, ct.mimetype, ct.charset);
    return true;
  end
```

Enable this function with the statement `require('msys.pcre')`.

<a name="idp18264336"></a>
## See Also

[msys.pcre.match](lua.ref.msys.pcre.match.php "msys.pcre.match"), [msys.pcre.split](lua.ref.msys.pcre.split.php "msys.pcre.split")

| [Prev](lua.ref.msys.pcre.match.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.pcre.split.php) |
| msys.pcre.match  | [Table of Contents](index.php) |  msys.pcre.split |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)