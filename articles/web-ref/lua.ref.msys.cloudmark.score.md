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

| msys.cloudmark.score |
| [Prev](lua.ref.msys.cloudmark.add_af_data.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.cloudmark.score_af.php) |

<a name="lua.ref.msys.cloudmark.score"></a>
## Name

msys.cloudmark.score — Scan messages using Cloudmark

<a name="idp23479840"></a>
## Synopsis

`require('msys.cloudmark')`

`msys.cloudmark.score(msg, accept, vctx)`

```
msg: userdata, ec_message type (optional)
accept: userdata, accept_construct type (optional)
vctx: userdata, validate_context type (optional)
```
<a name="idp23483360"></a>
## Description

You must load and correctly configure the cloudmark module before using this function. Be sure to set the module option `Enabled` to `false`. This function can be invoked at the data, spool or each_rcpt phases. It will not work at the connect, ehlo, mailfrom or rcptto phases. `msg` is the email to be scored; `accept` is the accept_construct and `vctx` is the validation context. If any of these inputs are not provided, they will be inferred from the current context. Use this function to scan mail. A table is returned with the following key/value pairs:

*   `score` – The authority score for the message, a number between 0 and 100\. The higher the number, the more certain the engine is that the mail is spam.

*   `is_spam` – If the cloudmark module option MinimumScore is set, this item is set to `true` indicating that the engine has determined the message is spam. No action is directly taken on the message; that is left to the user to do using a policy script.

*   `category` – The category assigned to the message by the Cloudmark Authority.

*   `category-desc` – The description of the category.

*   `sub-category` – The sub-category assigned to the message by the Cloudmark Authority.

*   `sub-category-desc` – The description of sub-category.

*   `rescan` – If this flag is set to ‘yes’, the email would benefit from a rescan.

*   `analysis` – The Cloudmark Authority analysis header.

The above name value pairs are also set within the validation context (VCTX_MESS).

### Warning

Do not use `pcall` with this function.

<a name="lua.ref.msys.cloudmark.score.example"></a>

**Example 15.4. msys.cloudmark.score example**

```
require("msys");
require("require("msys");
require("msys.cloudmark");

local mod = {};
function mod:validate_data(msg, accept, vctx)
  local result = msys.cloudmark.score(msg, accept, vctx)
  for k,v in pairs(result) do
    print (k, '=', v)
  end
  return msys.core.VALIDATE_CONT;
end
msys.registerModule("test_cm", mod);
```

<a name="idp23504464"></a>
## See Also

[msys.cloudmark.analyze](lua.ref.msys.cloudmark.analyze.php "msys.cloudmark.analyze"), [Section 14.18, “cloudmark – Cloudmark Authority Module”](modules.cloudmark.php "14.18. cloudmark – Cloudmark Authority Module")

| [Prev](lua.ref.msys.cloudmark.add_af_data.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.cloudmark.score_af.php) |
| msys.cloudmark.add_af_data  | [Table of Contents](index.php) |  msys.cloudmark.score_af |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)