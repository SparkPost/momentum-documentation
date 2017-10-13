| msys.core.string_new |
| [Prev](lua.ref.msys.core.mail_queue_delay_domain.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msg_code.php) |

<a name="lua.ref.msys.core.string_new"></a>
## Name

msys.core.string_new — Create an ec_string

<a name="idp15734416"></a>
## Synopsis

`msys.core.string_new();`

<a name="idp15736208"></a>
## Description

Create userdata of the ec_string type. Some functions such as `msg:get_envelope2`, require ec_string type userdata, the Lua rendering of the C struct, [string](https://support.messagesystems.com/docs/web-c-api/structs.string.php).

Because this function is in the `msys.core` namespace, an explicit `require('msys.core')` is not necessary.

For a code example see [Example 70.41, “msg:binding example”](lua.ref.msg_binding.php#lua.ref.msg_binding.example "Example 70.41. msg:binding example").

| [Prev](lua.ref.msys.core.mail_queue_delay_domain.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_code.php) |
| msys.core.mail_queue_delay_domain  | [Table of Contents](index.php) |  msg:code |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)