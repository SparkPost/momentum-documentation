| msys.cloudmark.set_af_mode_discard |
| [Prev](lua.ref.msys.cloudmark.score_af.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.cloudmark.set_af_mode_keep.php) |

<a name="lua.ref.msys.cloudmark.set_af_mode_discard"></a>
## Name

msys.cloudmark.set_af_mode_discard — Set the Cloudmark ActiveFilter mode to DISCARD.

<a name="idp15067168"></a>
## Synopsis

`require('msys.cloudmark')`

`msys.cloudmark.set_af_mode_discard()`

<a name="idp15069712"></a>
## Description

Set the Cloudmark ActiveFilter mode to DISCARD.

### Note

You must set the ActiveFilter mode by invoking one of the following functions:

*   `msys.cloudmark.set_af_mode_discard`

*   `msys.cloudmark.set_af_mode_keep`

*   `msys.cloudmark.set_af_mode_movemsg`

<a name="lua.ref.msys.cloudmark.set_af_mode_discard.example"></a>

**Example 70.6. msys.cloudmark.set_af_mode_discard Example**

```
require("msys.cloudmark");

local mod = {};

function mod:init()

  msys.cloudmark.set_af_mode_discard();
  msys.cloudmark.set_af_msi_address("msi@msi.local");
  return 0;
end

msys.registerModule("af_test", mod);
```

<a name="idp15079712"></a>
## See Also

[msys.cloudmark.score_af](lua.ref.msys.cloudmark.score_af.php "msys.cloudmark.score_af"), [msys.cloudmark.add_af_data](lua.ref.msys.cloudmark.add_af_data.php "msys.cloudmark.add_af_data"), [msys.cloudmark.set_af_mode_keep](lua.ref.msys.cloudmark.set_af_mode_keep.php "msys.cloudmark.set_af_mode_keep"), [msys.cloudmark.set_af_mode_movemsg](lua.ref.msys.cloudmark.set_af_mode_movemsg.php "msys.cloudmark.set_af_mode_movemsg"), [msys.cloudmark.set_af_msi_address](lua.ref.msys.cloudmark.set_af_msi_address.php "msys.cloudmark.set_af_msi_address"), [msys.cloudmark.analyze](lua.ref.msys.cloudmark.analyze.php "msys.cloudmark.analyze"), [msys.cloudmark.score](lua.ref.msys.cloudmark.score.php "msys.cloudmark.score"), [Section 71.18, “cloudmark – Cloudmark Authority® Content Scanning”](modules.cloudmark.php "71.18. cloudmark – Cloudmark Authority® Content Scanning")

| [Prev](lua.ref.msys.cloudmark.score_af.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.cloudmark.set_af_mode_keep.php) |
| msys.cloudmark.score_af  | [Table of Contents](index.php) |  msys.cloudmark.set_af_mode_keep |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)