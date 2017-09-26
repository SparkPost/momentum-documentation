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

| vctx:disconnect |
| [Prev](lua.ref.vctx_add_recipient.php)  | 15.2. Lua Functions |  [Next](lua.ref.vctx_get.php) |

<a name="lua.ref.vctx_disconnect"></a>
## Name

vctx:disconnect — Disconnect the session associated with the current validation context

<a name="idp27885456"></a>
## Synopsis

`vctx:disconnect(code, message);`

```
code: string
message: string
```
<a name="idp27888160"></a>
## Description

This function disconnects the current session associated with the validation context. Pass in a code and a message. Use this function in the following way:

<a name="lua.ref.vctx_disconnect.example"></a>

**Example 15.72. vctx:disconnect example**

```
require("msys.core");
require("msys.extended.message");
require("msys.extended.vctx");

local mod = {};

function mod:validate_mailfrom(str, accept, vctx)
  str = tostring(str);
  if (string.find(str, "disconnect@example.com") != nil) then
    print("Disconnecting " .. str);
    vctx:disconnect(421, "Go away dude");
  return msys.core.VALIDATE_DONE;
end

return msys.core.VALIDATE_CONT;
end

msys.registerModule("vctx_disconnect", mod);
```

Because this function is in the `msys.core` namespace, an explicit `require('msys.core')` is not necessary.

| [Prev](lua.ref.vctx_add_recipient.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.vctx_get.php) |
| vctx:add_recipient  | [Table of Contents](index.php) |  vctx:get |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)