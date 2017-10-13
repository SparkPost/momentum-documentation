<a name="lua.ref.msgpart_text2"></a>
## Name

msgpart:text — The entire message body part is replaced by the supplied text

<a name="idp17174512"></a>
## Synopsis

`msgpart:text(value, type, charset);`

```
value: string
type: string, optional
charset: string, optional
```
<a name="idp17177536"></a>
## Description

This function has the same semantics and purpose as the Message equivalent (see [msg:text](lua.ref.msg_text.php "msg:text")), except that it is scoped to the message part currently being referenced instead of the entire message.

This function does not always return a string. It can return `nil` on message parts where there is no body content.

### Warning

In the current design, this function applies encoding and MIME headers but **does not dot stuff** .

Enable this function with the statement `require('msys.extended.message');`.

| [Prev](lua.ref.msgpart_raw_replace.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msgpart_text.php) |
| msgpart:raw_replace  | [Table of Contents](index.php) |  msgpart:text |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)