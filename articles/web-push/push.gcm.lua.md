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

| Chapter 8. GCM and Lua |
| [Prev](push.gcm.disabling.php)  | Part II. Configuring Momentum for Google Cloud Messages (GCM) |  [Next](push.gcm.error.php) |

## Chapter 8. GCM and Lua

**Table of Contents**

<dl class="toc">

<dt>[8.1\. Lua Callouts](push.gcm.lua.php#gcm.hooks.lua.callouts)</dt>

</dl>

Support for GCM includes new Lua functionality and Lua callouts. This chapter covers these topics.

### Note

GCM-related changes to the C API and to C hook points are documented in [Hooks in the gcm Scope](https://support.messagesystems.com/docs/web-c-api/hooks.gcm.php).

In addition to the callouts documented here, you can also use the callouts documented at [Chapter 9, *Callouts and Push Notifications*](push.generic_delivery_lua.php "Chapter 9. Callouts and Push Notifications") .

For a description of how to use Lua scripts see [The scriptlet Module](https://support.messagesystems.com/docs/web-ref/modules.scriptlet.php) and [Implementing Policy Using Scriptlets](https://support.messagesystems.com/docs/web-ref/implementing.policy.scriptlets.php).

## 8.1. Lua Callouts

<a class="indexterm" name="idp565360"></a>

The basic Lua callouts are defined at [Implementing Policy Using Scriptlets](https://support.messagesystems.com/docs/web-ref/implementing.policy.scriptlets.php). When scripting GCM push notifications you can also use the hook points described here.

### gcm_request_eval

The `gcm_request_eval(req, msg)` hook will be called immediately before sending to GCM. Use this hook to inspect or modify the request before delivery to Google. The request has been built from the MCMT by extracting the headers and JSON message payload from the MIME part and encoding them into a JSON string suitable for injection. At this hook point, feedback from Google GCM Servers can be handled, including maintenance related to the Registration ID. Feedback is provided for messages that were rejected as well as messages that were accepted. The callout parameters are userdata of the types, `gcm_request` and `ec_message`.

An example that shows the elements of a `gcm_request` and changes the Registration ID follows.

<a name="gcm.hooks.lua.callouts.gcm_request_eval"></a>

**Example 8.1. gcm_request_eval example**

```
require("msys.gcm")
require("json")

local mod = {}

function mod:gcm_request_eval(req, msg)
  print("registration id =", req.json.registration_ids[1])
  print("package = ", req.json.restricted_package_name)
  print("time to live = ", req.json.time_to_live)
  print("data = ", tostring(req.json.data))
  print("message = ", req.json.data.message)

  -- assign registration id
  req.json.registration_ids[1] = "APA91bHAUcDAJP-cQJuwQaHYGK6hGU4G4NTUPJT4zI6f2 »
  o4sl1S0-zOlPlqJUFTSvHBmudvhMLrkGR1sQMc5qYBVjcNIpzyXoC2CIEj_1FeFKmNBDYX2LBp_zG-rj2hVA2 »
  -t7Fm40tQY2DzyjAI8maYIogujSPtq-jSUG0WybCQ0mT1eGOZsgy0"
  -- modify message
  req.json.data.message = "We are changing the message to this!"
end

msys.registerModule("gcm_hooks", mod);
```

In order to reference a `gcm_request` you must include the line, `require("msys.gcm")`. For more information about the Lua functions used in [Example 8.1, “gcm_request_eval example”](push.gcm.lua.php#gcm.hooks.lua.callouts.gcm_request_eval "Example 8.1. gcm_request_eval example") see [Lua Functions List](https://support.messagesystems.com/docs/web-ref/lua.summary_table.php).

### gcm_response_eval

The `gcm_response_eval(resp, msg)` hook will be called when there is a response from GCM. It can be used to inspect this response before delivery to GCM. The request has been built from the MCMT by extracting the headers and JSON message payload from the MIME part and encoding into a JSON string suitable for injection.

### Note

This hook is only called if the HTTP status code is `200`. You should not modify the gcm_message_response at this hook point.

<a name="gcm.hooks.lua.callouts.gcm_response_eval"></a>

**Example 8.2. gcm_response_eval example**

```
require("msys.core")
require("msys.gcm")
require("json")
local mod = {}
function mod:gcm_response_eval(message_response, msg)
  -- get original message id
  local reg_id = msg:context_get(msys.core.ECMESS_CTX_MESS, "DLV_Dest_ID")
  if(reg_id != "") then
    print("Registration ID = ", reg_id)
  end
  -- check response for registration id update info
  if message_response.canonical_ids > 0 then
    -- Add test entry to log for receipt of canonical response
    print ("canonical_ids = ", message_response.canonical_ids)
    if message_response.results.registration_id then
      -- The customer would want to use this updated Registration Feedback and would
      -- insert appropriate logic here.
      print("GCM: Found canonical registration id feedback:", »
        message_response.results.registration_id)
    else
      print("GCM: Missing canonical registration id value")
    end
  else
    print("GCM: No canonical registration id feedback indicated")
  end
end
msys.registerModule("gcm_hooks", mod);
```

In order to reference a `gcm_request` you must include the line, `require("msys.gcm")`. For more information about the Lua functions used in [Example 8.2, “gcm_response_eval example”](push.gcm.lua.php#gcm.hooks.lua.callouts.gcm_response_eval "Example 8.2. gcm_response_eval example") see [Lua Functions List](https://support.messagesystems.com/docs/web-ref/lua.summary_table.php).

| [Prev](push.gcm.disabling.php)  | [Up](push.google.php) |  [Next](push.gcm.error.php) |
| 7.2. Disabling GCM  | [Table of Contents](index.php) |  Appendix C. GCM Status Codes |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)