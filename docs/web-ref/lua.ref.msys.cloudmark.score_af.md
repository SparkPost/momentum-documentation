Logged in as: OmniTI, Inc.  ([logout](https://support.messagesystems.com/logout.php))

[![Message Systems](https://support.messagesystems.com/images/ms-white205.png)](https://support.messagesystems.com/start.php) 

*   [Changelog](https://support.messagesystems.com/start.php?show=changelog)
*   [Documentation](https://support.messagesystems.com/docs/)
*   [Downloads](https://support.messagesystems.com/start.php)

*   [Licenses](https://support.messagesystems.com/license_summary.php)
*   <a href="">Clients</a>
    *   [Support](https://support.messagesystems.com/cs.php)
    *   [Add/Edit](https://support.messagesystems.com/edit_client.php)
    *   [Legal/Products](https://support.messagesystems.com/edit_products.php)
*   [Users](https://support.messagesystems.com/edit_customer.php)

## Search Help

Search for a single word or perform multi-word searches by enclosing your search in quotation marks.

Where you have multiple words but no quotation marks, an **OR** search is performed. For example, **"REST Injection"** searches for the phrase **"REST Injection"**, and, without quotation marks, searches for **REST OR Injection**--the operator is understood.

### Warning

You must escape the following special characters: **+ - && || ! ( ) { } [ ] ^ " ~ * ? : \**. Use the **\** character as the escape character. For example: **B0/00-11719-46C328D4\:default\:**

You can also perform **AND** searches, for example, **rest AND port** (no quotation marks) finds pages where both these words occur.

Terms used in searches are case-insensitive but operators are not. Alphabetic operators **must** be in uppercase.

Other operators can also be used. For more information see "[Query Parser Syntax](https://lucene.apache.org/core/old_versioned_docs/versions/3_0_0/queryparsersyntax.html)". Use of fields in searches is not currently supported.

| msys.cloudmark.score_af |
| [Prev](lua.ref.msys.cloudmark.score.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.cloudmark.set_af_mode_discard.php) |

<a name="lua.ref.msys.cloudmark.score_af"></a>
## Name

msys.cloudmark.score_af — Set the Cloudmark ActiveFilter score threshold

<a name="idp23510640"></a>
## Synopsis

`require('msys.cloudmark')`

`msys.cloudmark.score_af(msg, accept, vctx, af_threshold)`

```
msg: userdata, ec_message
accept: userdata, accept_construct
vctx: userdata, validate_context
af_threshold: string
```
<a name="idp23514112"></a>
## Description

Set the ActiveFilter score threshold as part of the fourth argument in this function. If a message is originally marked as "not-spam" and later the message fingerprint exceeds this score, then it will trigger an ActiveFilter update. Similarly, if a message is marked as spam and later is re-classified as "not spam", then ActiveFilter will be updated as well. Note that the latter case is only significant in the `MOVEMSG` ActiveFilter mode. Why? If you are discarding messages then there is no action to take in the false positive case.

**Configuration Change. ** This feature is available starting from Momentum 3.5.4.

<a name="lua.ref.msys.cloudmark.score_af.example"></a>

**Example 15.5. msys.cloudmark.score_af Example**

```
require("msys.core");
require("msys.cloudmark");

local mod = {};

function mod:init()

  msys.cloudmark.set_af_mode_movemsg("Inbox", "Spam", "no");
  msys.cloudmark.set_af_msi_address("msi@msi.local"); 

  return 0;
end

function mod:validate_data(msg, ac, vctx)

  -- Set the ActiveFilter score threshold

  local score = msys.cloudmark.score_af(msg, ac, vctx, 90);
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("af_test", mod);
```

<a name="idp23521840"></a>
## See Also

[msys.cloudmark.score_af](lua.ref.msys.cloudmark.score_af.php "msys.cloudmark.score_af"), [msys.cloudmark.add_af_data](lua.ref.msys.cloudmark.add_af_data.php "msys.cloudmark.add_af_data"), [msys.cloudmark.set_af_mode_discard](lua.ref.msys.cloudmark.set_af_mode_discard.php "msys.cloudmark.set_af_mode_discard"), [msys.cloudmark.set_af_mode_keep](lua.ref.msys.cloudmark.set_af_mode_keep.php "msys.cloudmark.set_af_mode_keep"), [msys.cloudmark.set_af_mode_movemsg](lua.ref.msys.cloudmark.set_af_mode_movemsg.php "msys.cloudmark.set_af_mode_movemsg"), [msys.cloudmark.set_af_msi_address](lua.ref.msys.cloudmark.set_af_msi_address.php "msys.cloudmark.set_af_msi_address"), [msys.cloudmark.analyze](lua.ref.msys.cloudmark.analyze.php "msys.cloudmark.analyze"), [msys.cloudmark.score](lua.ref.msys.cloudmark.score.php "msys.cloudmark.score"), [Section 14.18, “cloudmark – Cloudmark Authority Module”](modules.cloudmark.php "14.18. cloudmark – Cloudmark Authority Module")

| [Prev](lua.ref.msys.cloudmark.score.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.cloudmark.set_af_mode_discard.php) |
| msys.cloudmark.score  | [Table of Contents](index.php) |  msys.cloudmark.set_af_mode_discard |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)