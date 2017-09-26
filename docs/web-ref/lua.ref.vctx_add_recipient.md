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

| vctx:add_recipient |
| [Prev](lua.ref.thread.mutex.php)  | 15.2. Lua Functions |  [Next](lua.ref.vctx_disconnect.php) |

<a name="lua.ref.vctx_add_recipient"></a>
## Name

vctx:add_recipient — Add an address to the recipient list for the inbound session

<a name="idp27874256"></a>
## Synopsis

`vctx:add_recipient(address);`

`address: string`<a name="idp27876896"></a>
## Description

This function adds an address or a table representing multiple addresses to the recipient list for the inbound session. If it is used in an invalid phase (after rcptlist final), it raises an error. Use this function in the following way:

<a name="lua.ref.vctx_add_recipient.example"></a>

**Example 15.71. vctx_add_recipient example**

```
require("msys.core");
require("msys.extended.message");
require("msys.extended.vctx");

local mod = {};

local function sum_table(tbl)
  if (tbl == nil) then
    return "";
  end
  local sum = "";
  for i=0,#tbl do
    sum = sum..tbl[i].." ";
  end
  return sum;
end

function mod:validate_data(msg, accept, vctx)
  vctx:add_recipient("mailfrom@messagesystems.com");
  local addrs = vctx:recipient_list();
  print ("validate_mailfrom:rcpts: "..sum_table(addrs));
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("validate_data", mod);
```

Enable this function with the statement `require('msys.extended.vctx');`.

| [Prev](lua.ref.thread.mutex.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.vctx_disconnect.php) |
| thread.mutex  | [Table of Contents](index.php) |  vctx:disconnect |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)