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

| msys.brightmail.scan |
| [Prev](lua.ref.msys.bounce.classify_smtp_response.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.cidr.define.php) |

<a name="lua.ref.msys.brightmail.scan"></a>
## Name

msys.brightmail.scan — Use Brightmail to scan messages

<a name="idp26241216"></a>
## Synopsis

`msys.brightmail.scan(msg, accept, vctx);`

```
msg: userdata, ec_message type
accept: userdata, accept_construct type
vctx: userdata, validate_context type
```
<a name="idp26244016"></a>
## Description

In order for this function to work, you must configure the brightmail module. Be sure to set the brightmail module option `sieve_mode` to `on`. This function can be invoked at the data, spool or each_rcpt phases. It will not work at the connect, ehlo, mailfrom or rcptto phases. `msg` is the email to be scanned; `accept` is the accept_construct and `vctx` is the validation context. Use this function to scan the mail. A tuple is returned with the following members:

*   `verdict` the scan result. Possible values include `spam` and `inbox`.

*   `is_default` if true, the mail should be dispatched to original destination.

*   `rules` a list of the brightmail rule numbers used to reach the verdict. The numbers are separated by a space and in string format. This key is available only when the brightmail module is configured and performs the scanning.

*   `tracker` a string suitable for use as the X-Brightmail-Tracker header. This key is available only when the brightmail module is configured and performs the scanning.

### Warning

Do not use `pcall` with this function. Also, note that the brightmail module option, `sieve_mode`, must be set to `on` if you wish to use this function.

<a name="lua.ref.msys.brightmail.scan.example"></a>

**Example 15.51. msys.brightmail.scan example**

```
require("msys");
require("msys.brightmail");

local mod = {};

function mod:validate_data_spool_each_rcpt(msg, accept, vctx)
  local verdict, is_default, rules, tracker =
    msys.brightmail.scan(msg, accept, vctx);
  print("verdict:", verdict, " is_default:", is_default,
    " rules:", rules, " tracker:", tracker);
  vctx:set(msys.core.VCTX_MESS, 'bm_verdict', verdict);
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("test_bm", mod);
```

Enable this function with the statement `require('msys.brightmail');`.

<a name="idp26260736"></a>
## See Also

[Section 14.14, “brightmail – Brightmail Module”](modules.brightmail.php "14.14. brightmail – Brightmail Module")

| [Prev](lua.ref.msys.bounce.classify_smtp_response.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.cidr.define.php) |
| msys.bounce.classify_smtp_response  | [Table of Contents](index.php) |  msys.cidr.define |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)