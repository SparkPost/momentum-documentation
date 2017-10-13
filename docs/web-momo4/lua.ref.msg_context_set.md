| msg:context_set |
| [Prev](lua.ref.msg_context_get)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msgpart_unlink) |

<a name="lua.ref.msg_context_set"></a>
## Name

msg:context_set — Sets a context variable

<a name="idp15980464"></a>
## Synopsis

`msg:context_set(type, key, value);`

```
type: numeric
key: string
value: string
```
<a name="idp15983472"></a>
## Description

Set a context variable. Legal values for `type` are:

*   `msys.core.ECMESS_CTX_MESS`

*   `msys.core.ECMESS_CTX_CONN`

`msg:context_set(msys.core.ECMESS_CTX_MESS, "MyVariable", "MyValue")`
### Note

The companion function, `msg:context_get`, always returns a string. If, for example, `MyValue` is a local numeric variable, `msg:context_get` will still return a string.

Because this function is in the `msys.core` namespace, an explicit `require('msys.core')` is not necessary.

<a name="idp15993408"></a>
## See Also

[msg:context_get](lua.ref.msg_context_get "msg:context_get")

| [Prev](lua.ref.msg_context_get)  | [Up](lua.function.details) |  [Next](lua.ref.msgpart_unlink) |
| msg:context_get  | [Table of Contents](index) |  msgpart:unlink |

