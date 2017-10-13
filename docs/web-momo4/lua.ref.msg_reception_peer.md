| msg:reception_peer |
| [Prev](lua.ref.msg_listener_addr.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msg_context_delete.php) |

<a name="lua.ref.msg_reception_peer"></a>
## Name

msg:reception_peer — Get the `recv_from` IP and/or PORT.

<a name="idp15869744"></a>
## Synopsis

`require('msys.extended.message')`

`msg:reception_peer(flag);`

`flag: string (optional)`<a name="idp15873472"></a>
## Description

This function returns the IP and/or PORT of the remote injection source. In particular, it returns the component of the sockaddr, in human-readable form, as indicated by the flag. The value of the flag parameter can be `ip`, `port` or `all`. The default input parameter is `all`. That is, if `flag` is `nil`, then this returns the same string as if `all` was passed as the parameter.

<a name="lua.ref.msg_reception_peer.example"></a>

**Example 70.28. msg:reception_peer example**

```
require("msys.extended.message");

local mod = {};

function mod:validate_data(msg, ac, vctx)
  print(msg:reception_peer('ip'));
    -- "10.1.2.3"
  print(msg:reception_peer('port'));
      -- "25"
  print(msg:reception_peer('all'));
      -- "10.1.2.3:25"
  print(msg:reception_peer()); -- defaults to 'all'
      -- "10.1.2.3:25"
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("myMod", mod);
```

<a name="idp15881632"></a>
## See Also

[msg:listener_addr](lua.ref.msg_listener_addr.php "msg:listener_addr")

| [Prev](lua.ref.msg_listener_addr.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_context_delete.php) |
| msg:listener_addr  | [Table of Contents](index.php) |  msg:context_delete |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)