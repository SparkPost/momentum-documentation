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

| 18.3. Examples |
| [Prev](MM7ClientSubmitRequestHook.interface.php)  | Chapter 18. MM7 MT Submit Request Hook |  [Next](MM7ClientSubmitResponseHook.php) |

## 18.3. Examples

The following Lua example enables <DeliveryReport> and <ReadReply> and sets values for <ReplyCharging> variables.

<a name="MM7_MT_Submit_Request_Hook.lua"></a>

**Example 18.1. MM7 MT Submit Request Hook Lua Example**

```
local mod = {};
require("msys.core");

function mod:mm7_pre_submit(msg)
  msys.core.ec_message_context_set(msg, msys.core.ECMESS_CTX_MESS, "MM7_Reply_Charging", 1);
  msys.core.ec_message_context_set(msg, msys.core.ECMESS_CTX_MESS, "MM7_Reply_Charging_Size",
    1024);
  msys.core.ec_message_context_set(msg, msys.core.ECMESS_CTX_MESS, "MM7_Reply_Deadline",
    "2011-05-30T09:30:10-06:00");
  msys.core.ec_message_context_set(msg, msys.core.ECMESS_CTX_MESS, "MM7_Delivery_Report", 1);
  msys.core.ec_message_context_set(msg, msys.core.ECMESS_CTX_MESS, "MM7_Read_Reply", 1);
end

msys.registerModule("mm7_pre_submit_hook_test", mod);
```

The following C hook does the same as the Lua implementation above:

<a name="MM7_MT_Submit_Request_Hook.c"></a>

**Example 18.2. MM7 MT Submit Request Hook: C Example**

```
#include "module.h"
#include "modules/mobility/mms/hooks/mm7_message_hooks.h"
#include "modules/mobility/mms/mm7.h"

static void sample_mm7_submit_req_hook (void  *gself, ec_message * m)
{
  ec_message_context_set(m, ECMESS_CTX_MESS, "MM7_Reply_Charging", "1");
  ec_message_context_set(m, ECMESS_CTX_MESS, "MM7_Reply_Charging_Size", "1024");
  ec_message_context_set(m, ECMESS_CTX_MESS, "MM7_Reply_Deadline",
    "2011-05-30T09:30:10-06:00");
  ec_message_context_set(m, ECMESS_CTX_MESS, "MM7_Delivery_Report", "1");
  ec_message_context_set(m, ECMESS_CTX_MESS, "MM7_Read_Reply", "1");
}

static int init (generic_module_infrastructure *gself) {
  /* register the hook during module initialization */
  register_mm7_pre_submit_hook_first (sample_mm7_submit_req_hook, gself);
  return 0;
}

EC_MODULE_EXPORT
generic_module_infrastructure mm7_hook_test = {
  {
    EC_MODULE_INIT(EC_MODULE_TYPE_GENERIC, 0),
    "mm7_hook_test.c",
    "Sample MM7 Hook",
    NULL,
    NULL,
    NULL,
    init,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
  }
};
```

| [Prev](MM7ClientSubmitRequestHook.interface.php)  | [Up](MM7ClientSubmitRequestHook.php) |  [Next](MM7ClientSubmitResponseHook.php) |
| 18.2. Interface  | [Table of Contents](index.php) |  Chapter 19. MM7 MT Submit Response Hook |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)