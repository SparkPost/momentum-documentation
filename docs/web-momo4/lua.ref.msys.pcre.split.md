<a name="lua.ref.msys.pcre.split"></a>
## Name

msys.pcre.split — Perform a PCRE split operation

<a name="idp18271728"></a>
## Synopsis

`msys.pcre.split(subject, pattern);`

```
subject: string
pattern: string
```
<a name="idp18274720"></a>
## Description

Perform a PCRE split operation.

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

Enable this function with the statement `require('msys.pcre')`.

<a name="idp18278736"></a>
## See Also

[msys.pcre.match](lua.ref.msys.pcre.match.php "msys.pcre.match"), [msys.pcre.replace](lua.ref.msys.pcre.replace.php "msys.pcre.replace")

| [Prev](lua.ref.msys.pcre.replace.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.os.statvfs_read.php) |
| msys.pcre.replace  | [Table of Contents](index.php) |  msys.os.statvfs_read |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)