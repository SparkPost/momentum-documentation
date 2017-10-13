<a name="lua.ref.msg_body"></a>
## Name

msg:body — Set the message body (minus headers) if provided

<a name="idp16681296"></a>
## Synopsis

`msg:body(...);`

`...: mixed, optional`<a name="idp16684256"></a>
## Description

This function sets the message body (minus headers) if it is provided and returns the message body (minus headers). This applies to the body (not headers), without decoding transfer encoding.

### Note

When called without parameters, this function returns content that does not have the end-of-data marker (`CRLF.CRLF`). However, when setting the message body you must append the end-of-data marker to the content.

If you are modifying content be sure set readonly to `false` using the [msg:mime](lua.ref.msg_mime.php "msg:mime") function.

Enable this function with the statement `require('msys.extended.message');`.

| [Prev](lua.ref.msg_binding_group.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_body_match.php) |
| msg:binding_group  | [Table of Contents](index.php) |  msg:body_match |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)