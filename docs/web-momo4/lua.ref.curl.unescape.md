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

| curl.unescape |
| [Prev](lua.ref.curl.new.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.core.dns_get_domain.php) |

<a name="lua.ref.curl.unescape"></a>
## Name

curl.unescape — Unescape URL encoding in strings

<a name="idp15677040"></a>
## Synopsis

`require('curl');`

`curl.unescape(str);`

`str: string`<a name="idp15680720"></a>
## Description

This function unescapes URL encoding in strings and is suitable for use when decomposing URLs.

<a name="lua.ref.curl.unescape.example"></a>

**Example 70.19. curl.unescape example**

`print(curl.unescape("abcd%24%25%5E%26%2A%28%29"));`

[Example 70.19, “curl.unescape example”](lua.ref.curl.unescape.php#lua.ref.curl.unescape.example "Example 70.19. curl.unescape example") outputs:

`abcd$%^&*()`<a name="idp15686032"></a>
### See Also

[curl.escape](lua.ref.curl.escape.php "curl.escape")

| [Prev](lua.ref.curl.new.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.core.dns_get_domain.php) |
| curl.new  | [Table of Contents](index.php) |  msys.core.dns_get_domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)