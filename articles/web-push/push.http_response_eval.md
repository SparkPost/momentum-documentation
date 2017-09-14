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

| 9.3. http_response_eval |
| [Prev](push.http_request_eval.php)  | Chapter 9. Callouts and Push Notifications |  [Next](push.gloss.php) |

## 9.3. http_response_eval

Use this callout to process feedback from Google, typically feedback related to token management. An example follows.

<a name="push.http_response_eval.example"></a>

**Example 9.3. http_response_eval example**

```
require("msys.core")
require("msys.delivery")
require("msys.httpclnt")
require("msys.gcm")
require("json")
local mod = {}
function mod:http_response_eval(sess)
  -- get message associated with this response
  local msg = msys.delivery.ob_get_current_message(sess.connh)
  if msg == nil then
    print ("http_response_eval_hook: Associated message missing")
    return msys.delivery.DELIVERY_FAIL;
  end
  -- check response for registration id update info
  if sess.response.status_code.buffer == "200" then
    -- get json response
    local json_response, code, err = json.decode(sess.response.body)
    if (code ~= nil) then
      error(err)
    end
    if json_response.canonical_ids and json_response.canonical_ids > 0 then
      -- Add test entry to log for receipt of canonical response
      print ("canonical_ids = ", json_response.canonical_ids)
      if json_response.results[1].registration_id then
        -- The customer would want to use this updated Registration Feedback and would
        -- insert appropriate logic here.
        print("GCM: Found canonical registration id feedback:",
          json_response.results[1].registration_id)
      else
        print("GCM: Missing canonical registration id value")
      end
    else
      print("GCM: No canonical registration id feedback indicated")
    end
  end
  return msys.delivery.DELIVERY_CONTINUE;
end

msys.registerModule("gcm_hooks", mod);
```

You must use `require("msys.httpclnt")` to enable this hook point and to access the `sess` userdata. This callout accepts as a parameter userdata of the session context type. The [ob_get_current_message](https://support.messagesystems.com/docs/web-ref/lua.ref.msys.delivery.ob_get_current_message.php) function uses this parameter to return a message. See also [json.decode](https://support.messagesystems.com/docs/web-ref/lua.ref.json.decode.php) and [Lua Functions](https://support.messagesystems.com/docs/web-ref/lua.summary_table.php) for more information about the functions used in [Example 9.3, “http_response_eval example”](push.http_response_eval.php#push.http_response_eval.example "Example 9.3. http_response_eval example").

| [Prev](push.http_request_eval.php)  | [Up](push.generic_delivery_lua.php) |  [Next](push.gloss.php) |
| 9.2. http_request_eval  | [Table of Contents](index.php) |  Glossary |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)