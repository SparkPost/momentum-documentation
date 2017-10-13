| curl.new |
| [Prev](lua.ref.curl.escape.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.curl.unescape.php) |

<a name="lua.ref.curl.new"></a>
## Name

curl.new — Create a cURL object

<a name="idp15663536"></a>
## Synopsis

`require('curl');`

`curl.new();`

<a name="idp15666496"></a>
## Description

Create a new curl object. The curl object serves as the main point of context for managing a session. You must create an object to be able to use any of the networking operations of the cURL library.

<a name="lua.ref.curl.new.example"></a>

**Example 70.18. curl.new example**

```
c = curl.new();
c:setopt(curl.OPT_URL, "http://example.com/path");
c:perform();
```

<a name="idp15670528"></a>
### See Also

[c:close](lua.ref.curl.c_close.php "c:close")

| [Prev](lua.ref.curl.escape.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.curl.unescape.php) |
| curl.escape  | [Table of Contents](index.php) |  curl.unescape |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)