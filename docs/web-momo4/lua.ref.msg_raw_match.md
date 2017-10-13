<a name="lua.ref.msg_raw_match"></a>
## Name

msg:raw_match — Streaming interface to a PCRE search of the message content

<a name="idp16910672"></a>
## Synopsis

`msg:raw_match(pattern);`

`pattern: string`<a name="idp16913632"></a>
## Description

Streaming interface to a PCRE search of the message content. This applies to the entire message content, headers through body, without decoding transfer encoding. This function returns all matches. If no match is found, `false` is returned.

Enable this function with the statement `require('msys.extended.message');`.

<a name="idp16917088"></a>
## See Also

[msg:raw_replace](lua.ref.msg_raw_replace.php "msg:raw_replace")

| [Prev](lua.ref.msg_raw.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_raw_replace.php) |
| msg:raw  | [Table of Contents](index.php) |  msg:raw_replace |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)