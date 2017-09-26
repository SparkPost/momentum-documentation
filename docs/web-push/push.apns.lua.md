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

| Chapter 4. APNs and Lua |
| [Prev](apns.disabling.php)  | Part I. Configuring Momentum for Apple Push Notification service (APNs) |  [Next](push.maintaining.php) |

## Chapter 4. APNs and Lua

**Table of Contents**

<dl class="toc">

<dt>[4.1\. Lua Callouts](push.apns.lua.php#apns.hooks.lua.callouts)</dt>

</dl>

Support for APNs includes new Lua functionality and Lua callouts. This chapter covers those topics.

### Note

APNs-related changes to the C API and to C hook points are documented in [Hooks in the apn Scope](https://support.messagesystems.com/docs/web-c-api/hooks.apn.php).

For a description of how to use Lua scripts see [The scriptlet Module](https://support.messagesystems.com/docs/web-ref/modules.scriptlet.php) and [Implementing Policy Using Scriptlets](https://support.messagesystems.com/docs/web-ref/implementing.policy.scriptlets.php).

In addition to the callouts documented here, you can also use the [Section 9.1, “generic_delivery_msg_dispose”](push.generic_delivery_lua.php#push.generic_delivery_lua.msg_dispose "9.1. generic_delivery_msg_dispose") callout.

## 4.1. Lua Callouts

<a class="indexterm" name="idp296608"></a>

Basic Lua callouts are defined at [Implementing Policy Using Scriptlets](https://support.messagesystems.com/docs/web-ref/implementing.policy.scriptlets.php). When scripting Apple push notifications you can also use the hook points documented in this section.

### apn_request_eval

The `apn_request_eval(req, msg)` hook will be called before sending to APNs. Use this hook to inspect or modify the request before delivery. The request has been built from the MCMT by extracting the headers and JSON message payload from the MIME part and encoding them into a JSON string. The callout parameters are userdata of the types, `apn_request` and `ec_message`.

An example that shows the elements of an `apn_request` follows.

<a name="apns.hooks.lua.callouts.apn_request_eval"></a>

**Example 4.1. apn_request_eval example**

```
require("msys.apn")
require("json")

local mod = {}

function mod:apn_request_eval(req, msg)
  print("REQ command: ", req.command)
  print("REQ id: ", req.id)
  print("REQ expiry: ", req.expiry)
  print("REQ token: ", req.token)
  print("REQ payload: ", tostring(req.json))
  print("Alert was: ", req.json.aps.alert)
  req.json.aps.alert = "Message Changed!"
end

msys.registerModule("apn_hooks", mod);
```

In order to reference an `apn_request` you must include the line, `require("msys.apn")`.

### apn_response_eval

The `apn_response_eval(resp)` hook will be called when there is a response from APNs. It can be used to inspect this response. The callout parameter is userdata of the type, `apn_error_response`.

An example that shows the elements of an `apn_response` follows.

<a name="apns.hooks.lua.callouts.apn_response_eval"></a>

**Example 4.2. apn_response_eval example**

```
require("msys.apn")

local mod = {}

function mod:apn_response_eval(resp)
  print("RESP command: ", resp.command)
  print("RESP status: ", resp.status)
  print("RESP id: ", resp.id)
  resp.status = msys.apn.APNS_PROCESSING_ERROR
  return 0
end

msys.registerModule("apn_hooks", mod);
```

Possible values for the `status` field are:

*   `msys.apn.APNS_NO_ERROR`

*   `msys.apn.APNS_PROCESSING_ERROR`

*   `msys.apn.APNS_MISSING_DEVICE_TOKEN`

*   `msys.apn.APNS_MISSING_TOPIC`

*   `msys.apn.APNS_MISSING_PAYLOAD`

*   `msys.apn.APNS_INVALID_TOKEN_SIZE`

*   `msys.apn.APNS_INVALID_TOPIC_SIZE`

*   `msys.apn.APNS_INVALID_PAYLOAD_SIZE`

*   `msys.apn.APNS_INVALID_TOKEN`

*   `msys.apn.APNS_SHUTDOWN`

In order to reference an `apn_request` you must include the line, `require("msys.apn")`.

| [Prev](apns.disabling.php)  | [Up](push.apple.php) |  [Next](push.maintaining.php) |
| 3.2. Disabling APNs  | [Table of Contents](index.php) |  Appendix A. Maintaining APNs Recipient Lists |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)