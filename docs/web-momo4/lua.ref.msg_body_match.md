<a name="lua.ref.msg_body_match"></a>
## Name

msg:body_match — Streaming interface to a PCRE search of a message body (minus headers)

<a name="idp16694816"></a>
## Synopsis

`msg:body_match(pattern);`

`pattern: string`<a name="idp16697792"></a>
## Description

Streaming interface to a PCRE search of a message body (minus headers). If matches are found, they are returned. Otherwise this function returns `false`.

Enable this function with the statement `require('msys.extended.message');`.

<a name="idp16701152"></a>
## See Also

[msg:body_replace](lua.ref.msg_body_replace.php "msg:body_replace")

| [Prev](lua.ref.msg_body.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_body_replace.php) |
| msg:body  | [Table of Contents](index.php) |  msg:body_replace |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)