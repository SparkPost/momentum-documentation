| msg:inject |
| [Prev](lua.ref.msg_get_message_size.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msg_is_mcmt.php) |

<a name="lua.ref.msg_inject"></a>
## Name

msg:inject — Use this function to send mail

<a name="idp16806384"></a>
## Synopsis

`msg:inject(mailfrom, rcptto);`

```
mailfrom: string
rcptto: string
```
<a name="idp16809376"></a>
## Description

Use this function to send mail. `mailfrom` is the address of the sender in the form of "`localpart@domain`". `rcptto` is the address of the recipient in the form of `localpart@domain`. If you want to send this mail to multiple addresses, separate the addresses using a ‘`,`’.

Enable this function with the statement `require('msys.extended.message');`.

<a name="idp16814592"></a>
## See Also

[msg:build](lua.ref.msg_build.php "msg:build")

| [Prev](lua.ref.msg_get_message_size.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_is_mcmt.php) |
| msg:get_message_size  | [Table of Contents](index.php) |  msg:is_mcmt |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)