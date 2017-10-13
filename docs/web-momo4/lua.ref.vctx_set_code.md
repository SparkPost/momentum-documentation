| vctx:set_code |
| [Prev](lua.ref.vctx_set.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.vctx_tarpit.php) |

<a name="lua.ref.vctx_set_code"></a>
## Name

vctx:set_code — Set the inbound disposition and response message

<a name="idp19317616"></a>
## Synopsis

`vctx:set_code(codenum, message);`

```
codenum: string
message: string
```
<a name="idp19320608"></a>
## Description

Sets the inbound disposition and response message. This can cause the current message to be rejected if the `codenum` is set to an appropriate value.

Because this function is in the `msys.core` namespace, an explicit `require('msys.core')` is not necessary.

| [Prev](lua.ref.vctx_set.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.vctx_tarpit.php) |
| vctx:set  | [Table of Contents](index.php) |  vctx:tarpit |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)