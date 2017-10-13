<a name="lua.ref.msg_makeBoundary"></a>
## Name

msg:makeBoundary — Generates a unique boundary string

<a name="idp16841568"></a>
## Synopsis

`msg:makeBoundary(...);`

`...: mixed`<a name="idp16844528"></a>
## Description

The MIME specification requires that each boundary be a unique string that is not a common prefix/substring of any other boundary in the complete message. This function generates a unique boundary string by assessing the boundaries defined for all the parts in the current message, in addition to those defined in the mime tree for each mime part passed to it as a parameter. This function is called by `makeContainer` when its boundary parameter is `nil`.

Enable this function with the statement `require('msys.extended.message');`.

The ellipsis (...) in the parameter list indicate that this function has any number of arguments.

<a name="idp16849216"></a>
## See Also

[msg:makeContainer](lua.ref.msg_makeContainer.php "msg:makeContainer")

| [Prev](lua.ref.msg_mailfrom.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_makeContainer.php) |
| msg:mailfrom  | [Table of Contents](index.php) |  msg:makeContainer |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)