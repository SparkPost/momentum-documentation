<a name="lua.ref.msg_makeContainer"></a>
## Name

msg:makeContainer — Creates a new, unlinked, container message part

<a name="idp16856096"></a>
## Synopsis

`msg:makeContainer(mimetype, boundary, add_terminator);`

```
mimetype: string
boundary: string, optional
add_terminator: boolean, optional
```
<a name="idp16859168"></a>
## Description

Creates a new, unlinked, container message part. The `mimetype` parameter specifies the MIME Content-Type that is to be used. If `boundary` is left unspecified, a random boundary will be generated on your behalf.

If add_terminator is `true`, "`CRLF.CFLF`" will be added to the container so that it can be used as the top part of a message. This parameter defaults to `false`.

Enable this function with the statement `require('msys.extended.message');`.

<a name="idp16864880"></a>
## See Also

[msg:makeBoundary](lua.ref.msg_makeBoundary.php "msg:makeBoundary")

| [Prev](lua.ref.msg_makeBoundary.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_makePart.php) |
| msg:makeBoundary  | [Table of Contents](index.php) |  msg:makePart |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)