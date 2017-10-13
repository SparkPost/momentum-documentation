<a name="lua.ref.msys.dumper.Dumper"></a>
## Name

msys.dumper.Dumper — Dump information about an object

<a name="idp18014432"></a>
## Synopsis

`msys.dumper.Dumper(res);`

`res: mixed`<a name="idp18017408"></a>
## Description

Dump information about an object. This function is typically used for debugging purposes.

Enable this function with the statement `require('msys.dumper')`.

```
require("msys.core");
require("msys.pcre");
require("msys.dumper");
local mod = {};

function mod:validate_connect(accept, vctx)
  local res, err = msys.dnsLookup('messagesystems.com', 'A');
  if res then
    if type(res[1]) == "string" then
      table.sort(res);
    end
    local i;
    local l = msys.pcre.split(msys.dumper.Dumper(res), "\\n");
    for i=1, #l do
      print("OK:", l[i]);
    end
  else
    print("ERROR:", msys.dumper.Dumper(err));
  end
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("dns-test", mod);
```

| [Prev](lua.ref.msys.delivery.ob_get_current_message.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.expurgate.scan.php) |
| msys.delivery.ob_get_current_message  | [Table of Contents](index.php) |  msys.expurgate.scan |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)