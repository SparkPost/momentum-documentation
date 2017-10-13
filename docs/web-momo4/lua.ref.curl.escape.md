<a name="lua.ref.curl.escape"></a>
## Name

curl.escape — URL encode a string

<a name="idp15648032"></a>
## Synopsis

`require('curl');`

`curl.escape(str);`

`str: string`<a name="idp15651712"></a>
## Description

URL encode a string; useful when building an URL.

<a name="lua.ref.curl.escape.example"></a>

**Example 70.17. curl.escape example**

`print(curl.escape("abcd$%^&*()"))`

[Example 70.17, “curl.escape example”](lua.ref.curl.escape.php#lua.ref.curl.escape.example "Example 70.17. curl.escape example") outputs the following:

`abcd%24%25%5E%26%2A%28%29`<a name="idp15656992"></a>
### See Also

[curl.unescape](lua.ref.curl.unescape.php "curl.unescape")

| [Prev](lua.ref.curl.c_setopt.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.curl.new.php) |
| c:setopt  | [Table of Contents](index.php) |  curl.new |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)