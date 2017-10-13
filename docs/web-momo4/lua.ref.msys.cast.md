| msys.cast |
| [Prev](lua.ref.msys.core.io_wrapper_open.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.config.php) |

<a name="lua.ref.msys.cast"></a>
## Name

msys.cast — Cast an object to the specified class

<a name="idp16043696"></a>
## Synopsis

`msys.cast(object, classnamestring);`

```
object: mixed
classnamestring: string
```
<a name="idp16046688"></a>
## Description

Forces object to be re-interpreted as the specified class. This is provided primarily to map `void` object proxies to the correct underlying class type. This will result in crashes if the cast is used incorrectly; use with caution.

Because this function is in the `msys` namespace, an explicit `require` is not necessary.

| [Prev](lua.ref.msys.core.io_wrapper_open.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.config.php) |
| msys.core.io_wrapper_open  | [Table of Contents](index.php) |  msys.config |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)