| msg:context_get |
| [Prev](lua.ref.msg_context_exists_and_get.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msg_context_set.php) |

<a name="lua.ref.msg_context_get"></a>
## Name

msg:context_get — Get a context variable

<a name="idp15958368"></a>
## Synopsis

`msg:context_get(type, key);`

```
type: numeric
key: string
```
<a name="idp15961360"></a>
## Description

Get a context variable. Legal values for `type` are:

*   `msys.core.ECMESS_CTX_MESS`

*   `msys.core.ECMESS_CTX_CONN`

```
local val = 1
msg:context_set(msys.core.ECMESS_CTX_MESS, 'key', 'val')
local messval = msg:context_get(msys.core.ECMESS_CTX_MESS, 'key')
```

### Note

This function always returns a string. In the code example given above, the context variable `key` is returned as the string value `'1'` and not as a numeric value.

Because this function is in the `msys.core` namespace, an explicit `require('msys.core')` is not necessary.

<a name="idp15970992"></a>
## See Also

[msg:context_set](lua.ref.msg_context_set.php "msg:context_set"), [msg:context_exists](lua.ref.msg_context_exists.php "msg:context_exists"), and [msg:context_exists_and_get](lua.ref.msg_context_exists_and_get.php "msg:context_exists_and_get")

| [Prev](lua.ref.msg_context_exists_and_get.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_context_set.php) |
| msg:context_exists_and_get  | [Table of Contents](index.php) |  msg:context_set |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)