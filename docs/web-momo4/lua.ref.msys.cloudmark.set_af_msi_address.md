<a name="lua.ref.msys.cloudmark.set_af_msi_address"></a>
## Name

msys.cloudmark.set_af_msi_address — Set the address for the Cloudmark ActiveFilter MSI Messages.

<a name="idp15146768"></a>
## Synopsis

`require('msys.cloudmark')`

`msys.cloudmark.set_af_msi_address(addr)`

`addr: string`<a name="idp15150480"></a>
## Description

Set the address for the ActiveFilter MSI Messages. This address needs to correspond to the maildir that was defined in the `maildir` module declaration when you configured Momentum to use the Cloudmark ActiveFilter.

<a name="lua.ref.msys.cloudmark.set_af_msi_address.example"></a>

**Example 70.9. msys.cloudmark.set_af_msi_address Example**

```
require("msys.cloudmark");

local mod = {};

function mod:init()

  msys.cloudmark.set_af_mode_movemsg("Inbox", "Spam", "no");
  msys.cloudmark.set_af_msi_address("msi@msi.local");  -- Uses same address configured in the maildir module
  return 0;
end

msys.registerModule("af_test", mod);
```

<a name="idp15155728"></a>
## See Also

[msys.cloudmark.score_af](lua.ref.msys.cloudmark.score_af.php "msys.cloudmark.score_af"), [msys.cloudmark.add_af_data](lua.ref.msys.cloudmark.add_af_data.php "msys.cloudmark.add_af_data"), [msys.cloudmark.set_af_mode_discard](lua.ref.msys.cloudmark.set_af_mode_discard.php "msys.cloudmark.set_af_mode_discard"), [msys.cloudmark.set_af_mode_keep](lua.ref.msys.cloudmark.set_af_mode_keep.php "msys.cloudmark.set_af_mode_keep"), [msys.cloudmark.set_af_mode_movemsg](lua.ref.msys.cloudmark.set_af_mode_movemsg.php "msys.cloudmark.set_af_mode_movemsg"), [msys.cloudmark.analyze](lua.ref.msys.cloudmark.analyze.php "msys.cloudmark.analyze"), [msys.cloudmark.score](lua.ref.msys.cloudmark.score.php "msys.cloudmark.score"), [Section 71.18, “cloudmark – Cloudmark Authority® Content Scanning”](modules.cloudmark.php "71.18. cloudmark – Cloudmark Authority® Content Scanning")

| [Prev](lua.ref.msys.cloudmark.set_af_mode_movemsg.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.apn.apn_status_classifier.php) |
| msys.cloudmark.set_af_mode_movemsg  | [Table of Contents](index.php) |  msys.apn.apn_status_classifier |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)