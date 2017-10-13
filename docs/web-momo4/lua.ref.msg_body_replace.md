<a name="lua.ref.msg_body_replace"></a>
## Name

msg:body_replace — Streaming interface to a PCRE replacement of a message body (minus headers)

<a name="idp16708128"></a>
## Synopsis

`msg:body_replace(pattern, replacement);`

```
pattern: string
replacement: string
```
<a name="idp16711072"></a>
## Description

Streaming interface to a PCRE replacement of a message body (minus headers). This function has the same semantics as `msg:body_match`. If no match is found, `false` is returned.

Enable this function with the statement `require('msys.extended.message');`.

<a name="idp16714864"></a>
## See Also

[msg:body_match](lua.ref.msg_body_match.php "msg:body_match")

| [Prev](lua.ref.msg_body_match.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_build.php) |
| msg:body_match  | [Table of Contents](index.php) |  msg:build |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)