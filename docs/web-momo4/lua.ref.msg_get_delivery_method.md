<a name="lua.ref.msg_get_delivery_method"></a>
## Name

msg:get_delivery_method — Return the delivery method for a message

<a name="idp16784048"></a>
## Synopsis

`msg:get_delivery_method();`

<a name="idp16786256"></a>
## Description

Return the [delivery method](conf.ref.delivery_method.php "delivery_method") for a message, for example "gcm".

<a name="lua.ref.msg_get_delivery_method.example"></a>

**Example 70.42. msg:get_delivery_method example**

```
require("msys.delivery");
require ("msys.httpclnt");

local mod = {};
function mod:http_request_eval(sess)
  -- get the message
  local msg = msys.delivery.ob_get_current_message(sess.connh)
  -- check protocol
  if( msg:get_delivery_method() == "gcm") then
    -- do something with a GCM message
  else 
    -- not our protocol get out
    return msys.delivery.DELIVERY_CONTINUE
  end
end

msys.registerModule("http_delivery", mod);
```

Because this function is in the `msys.core` namespace, an explicit `require('msys.core')` is not necessary.

<a name="idp16792464"></a>
## See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/)

| [Prev](lua.ref.msg_forward.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_get_message_size.php) |
| msg:forward  | [Table of Contents](index.php) |  msg:get_message_size |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)