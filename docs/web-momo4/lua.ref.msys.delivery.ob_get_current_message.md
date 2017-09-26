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

| msys.delivery.ob_get_current_message |
| [Prev](lua.ref.msys.db.query.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.dumper.Dumper.php) |

<a name="lua.ref.msys.delivery.ob_get_current_message"></a>
## Name

msys.delivery.ob_get_current_message — Get the current message from the session context

<a name="idp17998992"></a>
## Synopsis

`msys.delivery.ob_get_current_message(sess.connh);`

`sess.connh: userdata, session context type`<a name="idp18001568"></a>
## Description

Get the current message from the session context.

Enable this function with the statement `require('msys.delivery');`.

<a name="lua.ref.msys.delivery.ob_get_current_message.example"></a>

**Example 70.57. msys.delivery.ob_get_current_message example**

```
require("msys.delivery");

local mod = {};
function mod:generic_delivery_http_response_eval(sess)
  -- get the message
  local msg = msys.delivery.ob_get_current_message(sess.connh)
  -- check protocol
  if(msg:get_delivery_method() == "gcm") then
    -- do something with a GCM message
    ...
  else 
    -- not our protocol get out
    return msys.delivery.DELIVERY_CONTINUE
  end  
end

msys.registerModule("http_delivery", mod);
```

<a name="idp18006480"></a>
## See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/)

| [Prev](lua.ref.msys.db.query.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.dumper.Dumper.php) |
| msys.db.query  | [Table of Contents](index.php) |  msys.dumper.Dumper |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)