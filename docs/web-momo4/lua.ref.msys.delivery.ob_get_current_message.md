<a name="lua.ref.msys.delivery.ob_get_current_message"></a>
## Name

msys.delivery.ob_get_current_message — Get the current message from the session context

<a name="idp17998992"></a>
## Synopsis

`msys.delivery.ob_get_current_message(sess.connh);`

`sess.connh: userdata, session context type`<a name="idp18001568"></a>
## Description

Get the current message from the session context.

Enable this function with the statement `require('msys.delivery');`.

<a name="lua.ref.msys.delivery.ob_get_current_message.example"></a>

**Example 70.57. msys.delivery.ob_get_current_message example**

```
require("msys.delivery");

local mod = {};
function mod:generic_delivery_http_response_eval(sess)
  -- get the message
  local msg = msys.delivery.ob_get_current_message(sess.connh)
  -- check protocol
  if(msg:get_delivery_method() == "gcm") then
    -- do something with a GCM message
    ...
  else 
    -- not our protocol get out
    return msys.delivery.DELIVERY_CONTINUE
  end  
end

msys.registerModule("http_delivery", mod);
```

<a name="idp18006480"></a>
## See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/)

| [Prev](lua.ref.msys.db.query.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.dumper.Dumper.php) |
| msys.db.query  | [Table of Contents](index.php) |  msys.dumper.Dumper |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)