| msys.gcm.gcm_classify_error |
| [Prev](lua.ref.msys.gauge_cache.remove_item.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.gcm.gcm_get_result_error_code.php) |

<a name="lua.ref.msys.gcm.gcm_classify_error"></a>
## Name

msys.gcm.gcm_classify_error — Determine the delivery status of the "DLV_Response_Status" variable

<a name="idp18177488"></a>
## Synopsis

`msys.gcm.gcm_classify_error(status);`

`status: numeric`<a name="idp18180464"></a>
## Description

This function returns the delivery status of the "DLV_Response_Status" variable. It classifies the "DLV_Response_Status" variable as one of the following:

*   `msys.delivery.DELIVERY_SUCCESS`

*   `msys.delivery.DELIVERY_TEMPFAILED`

*   `msys.delivery.DELIVERY_PERMFAILED`

<a name="lua.ref.msys.gcm.gcm_classify_error.example"></a>

**Example 70.59. msys.gcm.gcm_classify_error example**

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

### Note

When a message fails, you can use the generic_delivery_msg_dispose callout and reroute the message to another channel. Use the [msg:get_delivery_method](lua.ref.msg_get_delivery_method.php "msg:get_delivery_method") function to determine the protocol of the message.

Enable this function with the statement `require('msys.gcm');`.

<a name="idp18192640"></a>
## See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/) and [msys.apn.apn_status_classifier](lua.ref.msys.apn.apn_status_classifier.php "msys.apn.apn_status_classifier")

| [Prev](lua.ref.msys.gauge_cache.remove_item.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.gcm.gcm_get_result_error_code.php) |
| msys.gauge_cache.remove_item  | [Table of Contents](index.php) |  msys.gcm.gcm_get_result_error_code |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)