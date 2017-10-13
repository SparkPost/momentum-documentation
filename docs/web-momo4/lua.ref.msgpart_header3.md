| msgpart:header |
| [Prev](lua.ref.msgpart_header2.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msgpart_insertAfter.php) |

<a name="lua.ref.msgpart_header3"></a>
## Name

msgpart:header — If mode is replace (or unspecified): first deletes all other headers of that name before appending the new value to the message headers

<a name="idp17118816"></a>
## Synopsis

`msgpart:header(name, value, mode);`

```
name: string
value: string
mode: string, optional
```
<a name="idp17121824"></a>
## Description

If the mode is `replace` (or unspecified), first delete all other headers of that name before appending the new value to the message headers. The other modes are `prepend` and `append`.

Enable this function with the statement `require('msys.extended.message');`.

| [Prev](lua.ref.msgpart_header2.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msgpart_insertAfter.php) |
| msgpart:header  | [Table of Contents](index.php) |  msgpart:insertAfter |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)