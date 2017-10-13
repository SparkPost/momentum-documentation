| vctx:get |
| [Prev](lua.ref.vctx_disconnect.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.vctx_recipient_list.php) |

<a name="lua.ref.vctx_get"></a>
## Name

vctx:get — Get the value of a context variable

<a name="idp19265232"></a>
## Synopsis

`vctx:get(type, key);`

```
type: numeric
key: string
```
<a name="idp19268208"></a>
## Description

Get the value of a context variable. The `type` parameter can be either `msys.core.VCTX_MESS` or `msys.core.VCTX_CONN`. The `key` parameter is the name of the context variable that you wish to retrieve.

Because this function is in the `msys.core` namespace, an explicit `require('msys.core')` is not necessary.

<a name="idp19273328"></a>
## See Also

[vctx:set](lua.ref.vctx_set.php "vctx:set")

| [Prev](lua.ref.vctx_disconnect.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.vctx_recipient_list.php) |
| vctx:disconnect  | [Table of Contents](index.php) |  vctx:recipient_list |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)