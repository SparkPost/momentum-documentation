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

| 9.2. http_request_eval |
| [Prev](push.generic_delivery_lua.php)  | Chapter 9. Callouts and Push Notifications |  [Next](push.http_response_eval.php) |

## 9.2. http_request_eval

This callout occurs prior to sending a generic HTTP request. An example of updating the HTTP request follows. You can use code such as this to set authorization keys on a per-message basis.

<a name="push.http_request_eval.example"></a>

**Example 9.2. http_request_eval example**

```
require("msys.core")
require("msys.delivery")
require("msys.httpclnt")
require("msys.gcm")
require("json")

function mod:http_request_eval(sess)
  -- get message associated with this request
  local msg = msys.delivery.ob_get_current_message(sess.connh)
  if msg == nil then
    print ("http_request_eval_hook: Associated message missing")
    return msys.delivery.DELIVERY_FAIL
  end

  -- print http request built by gcm
  print ("http request = ", sess.request.data)

  local reg_id = "APA91bHAUcDAJP-cQJuwQaHYGK6hGU4G4NTUPJT4zI6f2o4sl1S0-zOlPlq »
    JUFTSvHBmudvhMLrkGR1sQMc5qYBVjcNIpzyXoC2CIEj_1FeFKmNBDYX2LBp_zG-rj2hVA2-t7Fm40tQY2 »
    DzyjAI8maYIogujSPtq-jSUG0WybCQ0mT1eGOZsgy0"
  local request = "{ \"registration_ids\": [ \"" .. reg_id .. "\" ], \"dry_run\": true, »
    \"data\": { \"message\": \"Push message to send over GCM\" } }"
  local auth_key = "AIzaSyA09R1jflwVV4T79OIuLtTxQyXKFlOVQfs"

  -- print new json request to paniclog.ec for ref
  print ("new json request = ", request)

  sess:request_add_header("Accept", "text/plain", 1)
  sess:request_add_header("Accept", "application/json", 0)
  sess:request_add_header("Connection", "Keep-Alive", 1)
  sess:request_add_header("Authorization", "key=" .. auth_key, 1)
  sess:request_add_header("Content-Length", #request, 1)
  sess:request_set_body(request)

  -- have http client build (update) the request
  sess:request_finalize(1);
  -- print new request to paniclog.ec for ref
  print ("new http request = ", sess.request.data)

  -- update context variables
  msg:context_set(msys.core.ECMESS_CTX_MESS, "DLV_Dest_ID", reg_id)
  msg:context_set(msys.core.ECMESS_CTX_MESS, "DLV_Msg_Length", #sess.request.data)
  print ("new HTTP notification length = ", #sess.request.data)
  return msys.delivery.DELIVERY_CONTINUE;
end

msys.registerModule("gcm_hooks", mod);
```

You must use require `("msys.httpclnt")` to enable this hook point and to access the `sess` userdata. Like `http_response_eval`, this callout accepts as a parameter userdata of the session context type and this allows manipulation of the HTTP request using the following functions:

*   [sess:request_finalize](https://support.messagesystems.com/docs/web-ref/lua.ref.sess_request_finalize.php)

*   [sess:request_set_body](https://support.messagesystems.com/docs/web-ref/lua.ref.sess_request_set_body.php)

*   [sess:request_add_header](https://support.messagesystems.com/docs/web-ref/lua.ref.sess_request_add_header.php)

After changing HTTP session data, be sure to use the `sess:request_finalize` function.

The [ob_get_current_message](https://support.messagesystems.com/docs/web-ref/lua.ref.msys.delivery.ob_get_current_message.php) function uses this parameter to return a message. See also [Lua Functions](https://support.messagesystems.com/docs/web-ref/lua.summary_table.php) for more information about the functions used in [Example 9.3, “http_response_eval example”](push.http_response_eval.php#push.http_response_eval.example "Example 9.3. http_response_eval example").

| [Prev](push.generic_delivery_lua.php)  | [Up](push.generic_delivery_lua.php) |  [Next](push.http_response_eval.php) |
| Chapter 9. Callouts and Push Notifications  | [Table of Contents](index.php) |  9.3. http_response_eval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)