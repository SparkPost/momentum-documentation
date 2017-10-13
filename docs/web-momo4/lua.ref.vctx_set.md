<a name="lua.ref.vctx_set"></a>
## Name

vctx:set — Set the value of a context variable

<a name="idp19301568"></a>
## Synopsis

`vctx:set(type, key, value);`

```
type: numeric
key: string
value: mixed
```
<a name="idp19304576"></a>
## Description

Set the value of a context variable. The `type` parameter can be either `msys.core.VCTX_MESS` or `msys.core.VCTX_CONN`.

<a name="lua.ref.vctx_set.example"></a>

**Example 70.71. vctx:set example**

```
require("msys.core");
require("msys.brightmail");

local mod = {};
function mod:validate_data(msg, accept, vctx)
  local verdict, is_default, rules, tracker = msys.brightmail.scan(msg, accept, vctx)
    print("verdict:", verdict, " is_default:", is_default, " rules:", rules, " tracker:", tracker)
    vctx:set(msys.core.VCTX_MESS, 'bm_verdict', verdict)
  return msys.core.VALIDATE_CONT;
end
msys.registerModule("bm", mod);
```

Because this function is in the `msys.core` namespace, an explicit `require('msys.core')` is not necessary.

<a name="idp19312112"></a>
## See Also

[vctx:get](lua.ref.vctx_get.php "vctx:get")

| [Prev](lua.ref.vctx_remove_recipient.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.vctx_set_code.php) |
| vctx:remove_recipient  | [Table of Contents](index.php) |  vctx:set_code |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)