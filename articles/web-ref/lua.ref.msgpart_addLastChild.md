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

| msgpart:addLastChild |
| [Prev](lua.ref.msgpart_addFirstChild.php)  | 15.2. Lua Functions |  [Next](lua.ref.msgpart_address_header.php) |

<a name="lua.ref.msgpart_addLastChild"></a>
## Name

msgpart:addLastChild — Adds a child as the last child on this part

<a name="idp25689104"></a>
## Synopsis

`msgpart:addLastChild(child);`

`child: table`<a name="idp25691744"></a>
## Description

Adds a child as the last child on this part. This part must already be a container for the addition to succeed. Returns `true` on success, `false` on error.

<a name="lua.ref.msgpart_addLastChild.example"></a>

**Example 15.44. msgpart:addLastChild example**

```
require("msys.core");
require("msys.extended.message");
require("msys.dumper");

local function add_disclaimer(msg, plain, html)
  local p = msg:mime(false)

  if p == nil then
    return
  elseif p.parts != nil then
    if plain != nil then
      local plain_part = msg:makePart("text/plain", plain)
      plain_part.body_start = 0
      plain_part.body_end = #plain
      p:addLastChild(plain_part)
    end
    if html != nil then
      local html_part = msg:makePart("text/html", html)
      html_part.body_start = 0
      html_part.body_end = #html
      p:addLastChild(html_part)
    end
  else
    if plain != nil then
      msg:text_replace("\r\n.\r\n", plain.."\r\n.\r\n")
    elseif html != nil then
      msg:text_replace("\r\n.\r\n", html.."\r\n.\r\n")
    else
      error("add_disclaimer: both plain and html are nil")
    end
  end
end

local mod = {};

function mod:validate_data(msg, accept, vctx)
  print(msys.dumper.Dumper(msg));
  add_disclaimer(msg, "Disclaimer", "<b>Disclaimer</b>")
  return msys.core.VALIDATE_CONT
end

msys.registerModule("myValid", mod);
```

Enable this function with the statement `require('msys.extended.message');`.

<a name="idp25699520"></a>
## See Also

[msgpart:addFirstChild](lua.ref.msgpart_addFirstChild.php "msgpart:addFirstChild")

| [Prev](lua.ref.msgpart_addFirstChild.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msgpart_address_header.php) |
| msgpart:addFirstChild  | [Table of Contents](index.php) |  msgpart:address_header |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)