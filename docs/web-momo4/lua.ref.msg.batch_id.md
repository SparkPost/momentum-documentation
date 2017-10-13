| msg.batch_id |
| [Prev](lua.ref.json.strerror.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msg.conn_id.php) |

<a name="lua.ref.msg.batch_id"></a>
## Name

msg.batch_id — Return the human-readable ec_message.batch_id

<a name="idp16599248"></a>
## Synopsis

`msg.batch_id;`

<a name="idp16601488"></a>
## Description

When used in a string context, or explicitly forced into a string via `tostring(msg.batch_id)`, this function returns the human-readable ec_message.batch_id.

Enable this function with the statement `require('msys.extended.message');`.

<a name="lua.ref.msg.batch_id.example"></a>

**Example 70.40. msg.batch_id example**

```
require("msys.core");
require("msys.extended.message");

local mod = {};

function mod:validate_data(msg, ac, vctx)
  print(msg.batch_id);
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("validate_data", mod);
```

| [Prev](lua.ref.json.strerror.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg.conn_id.php) |
| json.strerror  | [Table of Contents](index.php) |  msg.conn_id |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)