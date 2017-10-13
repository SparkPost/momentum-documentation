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