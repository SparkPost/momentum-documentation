<a name="lua.ref.vctx_disconnect"></a>
## Name

vctx:disconnect — Disconnect the session associated with the current validation context

<a name="idp19252768"></a>
## Synopsis

`vctx:disconnect(code, message);`

```
code: string
message: string
```
<a name="idp19255760"></a>
## Description

This function disconnects the current session associated with the validation context. Pass in a code and a message. Use this function in the following way:

<a name="lua.ref.vctx_disconnect.example"></a>

**Example 70.70. vctx:disconnect example**

```
require("msys.core");
require("msys.extended.message");
require("msys.extended.vctx");

local mod = {};

function mod:validate_mailfrom(str, accept, vctx)
  str = tostring(str);
  if (string.find(str, "disconnect@example.com") != nil) then
    print("Disconnecting " .. str);
    vctx:disconnect(421, "Go away dude");
  return msys.core.VALIDATE_DONE;
end

return msys.core.VALIDATE_CONT;
end

msys.registerModule("vctx_disconnect", mod);
```

Because this function is in the `msys.core` namespace, an explicit `require('msys.core')` is not necessary.

| [Prev](lua.ref.vctx_add_recipient.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.vctx_get.php) |
| vctx:add_recipient  | [Table of Contents](index.php) |  vctx:get |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)