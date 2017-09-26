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
| [Prev](lua.ref.msys.bounce.classify_smtp_response.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.cidr.define.php) |

<a name="lua.ref.msys.brightmail.scan"></a>
## Name

msys.brightmail.scan — Use Brightmail to scan messages

<a name="idp17623184"></a>
## Synopsis

`msys.brightmail.scan(msg, accept, vctx);`

```
msg: userdata, ec_message type
accept: userdata, accept_construct type
vctx: userdata, validate_context type
```
<a name="idp17626272"></a>
## Description

Use this function to scan the mail. You must load and correctly configure the brightmail module before using this function. Be sure to set the brightmail module option `sieve_mode` to `on`. For details, see [Section 71.14, “brightmail – Symantec Brightmail™ Content Scanning Support”](modules.brightmail.php "71.14. brightmail – Symantec Brightmail™ Content Scanning Support").

This function can be invoked at the data, spool, or each_rcpt phases, and it will not work at the connect, ehlo, mailfrom, or rcptto phases.

Enable this function with the statement `require('msys.brightmail');`.

It takes the following parameters:

*   `msg` – Email to be scanned

*   `accept` – accept_construct

*   `vctx` – Validation context

This function returns a tuple with the following members:

*   `verdict` – Scan result. Possible values include `spam` and `inbox`.

*   `is_default` – If true, the mail should be dispatched to original destination.

*   `rules` – List of the brightmail rule numbers used to reach the verdict. The numbers are separated by a space and in string format. This key is available only when the brightmail module is configured and performs the scanning.

*   `tracker` – String suitable for use as the X-Brightmail-Tracker header. This key is available only when the brightmail module is configured and performs the scanning.

### Warning

Do not use `pcall` with this function.

<a name="lua.ref.msys.brightmail.scan.example"></a>

**Example 70.50. msys.brightmail.scan example**

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

| [Prev](lua.ref.msys.bounce.classify_smtp_response.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.cidr.define.php) |
| msys.bounce.classify_smtp_response  | [Table of Contents](index.php) |  msys.cidr.define |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)