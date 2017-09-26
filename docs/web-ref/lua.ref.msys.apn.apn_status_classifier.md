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

| msys.apn.apn_status_classifier |
| [Prev](lua.ref.msys.cloudmark.set_af_msi_address.php)  | 15.2. Lua Functions |  [Next](lua.ref.client_do_request.php) |

<a name="lua.ref.msys.apn.apn_status_classifier"></a>
## Name

msys.apn.apn_status_classifier — Determine whether the delivery status code represents a permanent or temporary failure

<a name="idp23631424"></a>
## Synopsis

`require('msys.apn')`

`msys.apn.apn_status_classifier(status);`

`status: numeric`<a name="idp23634768"></a>
## Description

**Configuration Change. ** This function is available as of Momentum version 3.5.5.

Determine the delivery status of the "DLV_Response_Status" variable in the context of an Apple push notification. This function classifies the "DLV_Response_Status" variable and returns one of the following values:

*   `msys.delivery.DELIVERY_SUCCESS`

*   `msys.delivery.DELIVERY_TEMPFAILED`

*   `msys.delivery.DELIVERY_PERMFAILED`

The following code example converts a failed Apple push notification to an SMPP message.

<a name="lua.ref.msys.apn_classify_error.example"></a>

**Example 15.10. msys.apn_classify_error example**

```
require("strict")
require("msys.delivery")
require("msys.apn")
require("msys.extended.message")

local mod = {}

function mod:generic_delivery_msg_dispose(msg)
  local status = msg:context_get(msys.core.ECMESS_CTX_MESS, "DLV_Response_Status")
  if status == "" then
    return msys.delivery.DELIVERY_CONTINUE
    -- "DLV_Response_Status" varies depending upon protocol
    -- but a message is treated as ok or delivered if and
    -- only if the DLV_Response_Status does not exist.
  elseif (msys.apn.apn_status_classifier(tonumber(status))==msys.delivery.DELIVERY_PERMFAILED) or
      (msys.apn.apn_status_classifier(tonumber(status))==msys.delivery.DELIVERY_TEMPFAILED) then
    -- reset context variable for DLV_Response_Status
    msg:context_delete(msys.core.ECMESS_CTX_MESS, "DLV_Response_Status")
    return msys.delivery.DELIVERY_DONE
  else 
    print(status, " unknown disposition!\n")
  end
end

msys.registerModule("convert", mod);
```

<a name="idp23645104"></a>
## See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/) and [msys.gcm.gcm_classify_error](lua.ref.msys.gcm.gcm_classify_error.php "msys.gcm.gcm_classify_error")

| [Prev](lua.ref.msys.cloudmark.set_af_msi_address.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.client_do_request.php) |
| msys.cloudmark.set_af_msi_address  | [Table of Contents](index.php) |  client:do_request |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)