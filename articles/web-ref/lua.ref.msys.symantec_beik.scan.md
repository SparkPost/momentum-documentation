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

| msys.symantec_beik.scan |
| [Prev](lua.ref.msys.rfc3464.send_mdn.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.threadpool.count.php) |

<a name="lua.ref.msys.symantec_beik.scan"></a>
## Name

msys.symantec_beik.scan — Scan using BEIK

<a name="idp26960784"></a>
## Synopsis

`msys.symantec_beik.scan(msg, vctx);`

```
msg: userdata, ec_message type
vctx: userdata, validate_context type
```
<a name="idp26963472"></a>
## Description

In order for this function to work, you must configure the beik module. Be sure to load the module in passive mode by setting `Enabled` to `false`. This function can be invoked in the data, spool or each_rcpt phases. It will not work at the connect, ehlo, mailfrom or rcptto phases. `msg` is the email to be scanned. Use this function to scan email.

A tuple is returned with the following members:

*   `code` – the scan result. Returned values are numeric BEIK codes.

*   `beik_destination` – where the email should go. Returned values are `tracker`, `inbox` and `is-spam`.

*   `is_default` – The returned value is `0` or `1`. When `1` is returned, the mail should be dispatched to its original destination.

*   `tracker` a string suitable for use as a header.

<a name="lua.ref.msys.symantec_beik.scan.example"></a>

**Example 15.61. msys.symantec_beik_scan example**

```
require("msys")
require("msys.core")
require("msys.symantec_beik")

local mod = {}
function mod:validate_data(msg, accept, vctx)
  print ("type(msg)", msys.type(msg))
  print ("type(accept)", msys.type(accept))
  print ("type(vctx)", msys.type(vctx))
  local a, b, is_default, tracker = msys.symantec_beik.scan(msg, vctx)
  if a == 0 then
    print("Error found: ", b)
    return msys.core.VALIDATE_DONE
  else
    print("return code:", a)
    print("beik_destination:", b)
    print ("beik_is_default:", is_default)
    print("beik_tracker:", tracker)
    return msys.core.VALIDATE_CONT
  end
end
msys.registerModule("test_beik", mod);
```

*Note*: When the first returned value is `0`, an error has occurred. The second return value contains the error message.

Enable this function with the statement `require('msys.symantec_beik');`.

<a name="idp26980656"></a>
## See Also

[Section 14.10, “beik – BEIK Module”](modules.beik.php "14.10. beik – BEIK Module")

| [Prev](lua.ref.msys.rfc3464.send_mdn.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.threadpool.count.php) |
| msys.rfc3464.send_mdn  | [Table of Contents](index.php) |  msys.threadpool.count |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)