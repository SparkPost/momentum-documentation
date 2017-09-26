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

| msys.validate.opendkim.verify |
| [Prev](lua.ref.msys.validate.opendkim.sign.php)  | 15.2. Lua Functions |  [Next](lua.ref.thread.mutex.php) |

<a name="lua.ref.msys.validate.opendkim.verify"></a>
## Name

msys.validate.opendkim.verify — Verify a DKIM signature

<a name="idp27807184"></a>
## Synopsis

`msys.validate.opendkim.verify(msg)`

`msg: userdata, ec_message type`<a name="idp27810272"></a>
## Description

**Configuration Change. ** This function is available as of version 3.6.

This function requires the opendkim module. It verifies a DKIM signature and returns a DKIM handle to context-specific information about the message. Typically you would pass the return value of this function to other functions such as `msys.validate.opendkim.get_num_sigs` and `msys.validate.opendkim.get_sig`.

<a name="lua.ref.msys.validate.opendkim.verify.example"></a>

**Example 15.70. msys.validate.opendkim.verify example**

```
require("opendkim.dkim");
require("msys.validate.opendkim");
local mod = {};

function mod:validate_data(msg, accept, vctx)
  local num = 0;
  local stat;
  local dkim_sig;
  local dkim = msys.validate.opendkim.verify(msg);
  num, stat = msys.validate.opendkim.get_num_sigs(dkim);
  -- create loop controlled by num 
  if num > 0 then
    for i = 0, num-1 do
      dkim_sig = msys.validate.opendkim.get_sig(dkim, i);
      -- now do something with the signature
      local size = msys.validate.opendkim.get_sig_keysize(dkim_sig);
      if size < 1024 then
        ...
      end
    end
  end 
  return msys.core.VALIDATE_CONT;
end
msys.registerModule("test_opendkim", mod);
```

### Note

This function should only be invoked in the `validate_data` validation phase.

This function also returns the DKIM status (DKIM_STAT). `DKIM_STAT` can be any one of the following values:

*   `DKIM_STAT_OK` – successful completion

*   `DKIM_STAT_BADSIG` – signature did not match headers and body

*   `DKIM_STAT_NOSIG` – no signature present

*   `DKIM_STAT_NOKEY` – no key available for verifying

*   `DKIM_STAT_CANTVRFY` – can't get key for verifying

*   `DKIM_STAT_SYNTAX` – message is not in valid syntax

*   `DKIM_STAT_NORESOURCE` – resource unavailable

*   `DKIM_STAT_INTERNAL` – internal error

*   `DKIM_STAT_REVOKED` – signing key revoked

*   `DKIM_STAT_INVALID` – invalid parameter(s)

*   `DKIM_STAT_NOTIMPLEMENT` – function not implemented

*   `DKIM_STAT_KEYFAIL` – key retrieval failed (try again later)

*   `DKIM_STAT_CBREJECT` – callback requested message rejection

*   `DKIM_STAT_CBTRYAGAIN` – callback can't complete (try again later)

*   `DKIM_STAT_CBERROR` – unspecified callback error

Enable this function with the statement `require('msys.validate.opendkim');`.

<a name="idp27841344"></a>
## See Also

[msys.validate.opendkim.get_sig_canons](lua.ref.msys.validate.opendkim.get_sig_canons.php "msys.validate.opendkim.get_sig_canons"), [msys.validate.opendkim.sign](lua.ref.msys.validate.opendkim.sign.php "msys.validate.opendkim.sign"), [msys.validate.opendkim.get_num_sigs](lua.ref.msys.validate.opendkim.get_num_sigs.php "msys.validate.opendkim.get_num_sigs"), [msys.validate.opendkim.get_sig](lua.ref.msys.validate.opendkim.get_sig.php "msys.validate.opendkim.get_sig"), [msys.validate.opendkim.get_sig_domain](lua.ref.msys.validate.opendkim.get_sig_domain.php "msys.validate.opendkim.get_sig_domain"), [msys.validate.opendkim.get_sig_selector](lua.ref.msys.validate.opendkim.get_sig_selector.php "msys.validate.opendkim.get_sig_selector"), [msys.validate.opendkim.get_sig_errorstr](lua.ref.msys.validate.opendkim.get_sig_errorstr.php "msys.validate.opendkim.get_sig_errorstr"), [msys.validate.opendkim.get_sig_flags](lua.ref.msys.validate.opendkim.get_sig_flags.php "msys.validate.opendkim.get_sig_flags"), [msys.validate.opendkim.get_sig_identity](lua.ref.msys.validate.opendkim.get_sig_identity.php "msys.validate.opendkim.get_sig_identity"), [msys.validate.opendkim.get_sig_keysize](lua.ref.msys.validate.opendkim.get_sig_keysize.php "msys.validate.opendkim.get_sig_keysize"), [msys.validate.opendkim.get_sig_signalg](lua.ref.msys.validate.opendkim.get_sig_signalg.php "msys.validate.opendkim.get_sig_signalg"), [msys.validate.opendkim.get_sig_hdrsigned](lua.ref.msys.validate.opendkim.get_sig_hdrsigned.php "msys.validate.opendkim.get_sig_hdrsigned"), [msys.validate.opendkim.get_sig_canons](lua.ref.msys.validate.opendkim.get_sig_canons.php "msys.validate.opendkim.get_sig_canons"), [Section 14.49, “opendkim – OpenDKIM module”](modules.opendkim.php "14.49. opendkim – OpenDKIM module") and [Section 14.27, “dkim – DomainKeys Identified Mail Signatures”](modules.dkim.php "14.27. dkim – DomainKeys Identified Mail Signatures")

| [Prev](lua.ref.msys.validate.opendkim.sign.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.thread.mutex.php) |
| msys.validate.opendkim.sign  | [Table of Contents](index.php) |  thread.mutex |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)