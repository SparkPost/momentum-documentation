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

| Chapter 9. Callouts and Push Notifications |
| [Prev](push.generic_delivery.php)  | Part III. Generic HTTP Delivery and Push |  [Next](push.http_request_eval.php) |

## Chapter 9. Callouts and Push Notifications

**Table of Contents**

<dl class="toc">

<dt>[9.1\. generic_delivery_msg_dispose](push.generic_delivery_lua.php#push.generic_delivery_lua.msg_dispose)</dt>

<dt>[9.2\. http_request_eval](push.http_request_eval.php)</dt>

<dt>[9.3\. http_response_eval](push.http_response_eval.php)</dt>

</dl>

In addition to the APNs and GCM callouts, there are callouts directly related to push notifications. These callouts are all applicable to managing Google Push notifications (and MM7 message types). The `generic_delivery_msg_dispose` callout can also be used with APNs.

### Note

Documentation of the C API and C hook points relevant to push notifications are found in [Hooks in the generic_delivery and httpclnt Scope](https://support.messagesystems.com/docs/web-c-api/hooks.generic_delivery.php).

## 9.1. generic_delivery_msg_dispose

This callout occurs immediately prior to disposing of an ec_message. If you wished to convert a failed push notification to an SMPP message use this callout in the following way:

<a name="push.generic_delivery_lua.msg_dispose.example"></a>

**Example 9.1. generic_delivery_msg_dispose example**

```
require("strict")
require("msys.delivery")
require("msys.gcm")
require("msys.extended.message")

local mod = {}

function mod:generic_delivery_msg_dispose(msg)
  local status = msg:context_get(msys.core.ECMESS_CTX_MESS, "DLV_Response_Status")
  if status == "" then
    return msys.delivery.DELIVERY_CONTINUE
  -- "DLV_Response_Status" varies depending upon protocol
  -- but a message is treated as ok or delivered if and
  -- only if the DLV_Response_Status does not exist.
  elseif (msys.gcm.gcm_classify_error(tonumber(status))==msys.delivery.DELIVERY_PERMFAILED) or
      (msys.gcm.gcm_classify_error(tonumber(status))==msys.delivery.DELIVERY_TEMPFAILED) then
    -- reset context variable for DLV_Response_Status
    msg:context_delete(msys.core.ECMESS_CTX_MESS, "DLV_Response_Status")
    msg:inject(msg:mailfrom(), "defaultNumber@deliverSMPP")
    return msys.delivery.DELIVERY_DONE
  else 
    print(status, " unknown disposition!\n")
  end
end

msys.registerModule("convert", mod);
```

**Message Conversion**

You can use the `generic_delivery_msg_dispose` callout for Google or Apple push notifications and for MM7 message types. Note that the value of "DLV_Response_Status" depends upon the protocol used. Inspect the context variable `DLV_Response_Status` using the [msg:context_get](https://support.messagesystems.com/docs/web-ref/lua.ref.msg_context_get.php) function. In the context of a GCM notification, this variable gives you the value of the GCM error status. If it is an empty string, then no error occurred. You can use [msys.gcm.gcm_classify_error](https://support.messagesystems.com/docs/web-ref/lua.ref.msys.gcm.gcm_classify_error.php) to determine the classification of "DLV_Response_Status". This function translates the protocol-specific error code to either a permanent or a temporary failure. For a list of Google error codes see [Appendix C, *GCM Status Codes*](push.gcm.error.php "Appendix C. GCM Status Codes") . See [Appendix B, *Apple Status Codes*             ](push.apple.error.php "Appendix B. Apple Status Codes") for APNs error codes.

If you need to determine the type of notification before taking action, call the [msg:get_delivery_method](https://support.messagesystems.com/docs/web-ref/lua.ref.msg_get_delivery_method.php) function. This function returns the value of the [delivery_method](https://support.messagesystems.com/docs/web-ref/conf.ref.delivery_method.php) option. For more information about all Lua functions see [Lua Functions](https://support.messagesystems.com/docs/web-ref/lua.summary_table.php).

The code shown in [Example 9.1, “generic_delivery_msg_dispose example”](push.generic_delivery_lua.php#push.generic_delivery_lua.msg_dispose.example "Example 9.1. generic_delivery_msg_dispose example") converts a push notification to an SMPP message. For more information about sending SMPP messages using Momentum see [Mobile Momentum Reference Manual](https://support.messagesystems.com/docs/web-mobility/). You can also use this hook point to convert to other message channels.

[Example 9.1, “generic_delivery_msg_dispose example”](push.generic_delivery_lua.php#push.generic_delivery_lua.msg_dispose.example "Example 9.1. generic_delivery_msg_dispose example") uses the constants `msys.delivery.DELIVERY_CONTINUE`, `msys.delivery.DELIVERY_PERMFAILED` and `msys.delivery.DELIVERY_TEMPFAILED`. The other delivery constants are:

*   `msys.delivery.DELIVERY_SUCCESS`

*   `msys.delivery.DELIVERY_DONE`

The `DLV_Response_Status` variable is referenced in [Example 9.1, “generic_delivery_msg_dispose example”](push.generic_delivery_lua.php#push.generic_delivery_lua.msg_dispose.example "Example 9.1. generic_delivery_msg_dispose example"). Note that *an empty `DLV_Response_Status` variable indicates a successful message delivery.*                                                                               All the context variables related to push notifications are as follows:

*   `DLV_Source_ID` – The ID, this is protocol-specific.

*   `DLV_Dest_Addr` – The "to" address.

*   `DLV_Dest_ID` – This variable is protocol-specific. For GCM it is the registration ID and for APNs it is the device token.

*   `DLV_Transaction_ID` – This is protocol-specific and applies only to the APNs identifier.

*   `DLV_Response_Status` – The response status code.

*   `DLV_Response_Status_Detail` – The response description.

*   `DLV_Msg_Length` – The total number of bytes in the message.

*   `DLV_Remote_IP_Address` – The IP address of connected remote entity.

| [Prev](push.generic_delivery.php)  | [Up](push.generic_delivery.php) |  [Next](push.http_request_eval.php) |
| Part III. Generic HTTP Delivery and Push  | [Table of Contents](index.php) |  9.2. http_request_eval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)