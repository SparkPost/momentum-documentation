<a name="lua.ref.msg_raw_replace"></a>
## Name

msg:raw_replace — Streaming interface to a PCRE replacement of message content

<a name="idp16923952"></a>
## Synopsis

`msg:raw_replace(pattern, replacement);`

```
pattern: string
replacement: string
```
<a name="idp16926944"></a>
## Description

Streaming interface to a PCRE replacement of message content. This function has the same semantics as `raw_match`.

Enable this function with the statement `require('msys.extended.message');`.

<a name="idp16930256"></a>
## See Also

[msg:raw_match](lua.ref.msg_raw_match.php "msg:raw_match")

| [Prev](lua.ref.msg_raw_match.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_rcptto.php) |
| msg:raw_match  | [Table of Contents](index.php) |  msg:rcptto |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)