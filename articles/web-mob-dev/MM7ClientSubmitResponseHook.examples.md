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

| 19.3. Examples |
| [Prev](MM7ClientSubmitResponseHook.interface.php)  | Chapter 19. MM7 MT Submit Response Hook |  [Next](MM7LogInbandBounceHook.php) |

## 19.3. Examples

The following Lua example temp fails all the MM7 response with StatusCode not equal to 1000, and re-route the message submission:

<a name="MT_Submit_Response_Hook.lua"></a>

**Example 19.1. MT Submit Response Hook: Lua Example**

```
local mod = {};
require("msys.core");
require("msys.extended.message_routing");
require("msys.mms");  -- required module defines return value of msys.mms.MM7_TEMP_FAIL

function mod:mm7_handle_submitRsp(msg)
  local statusCode = msys.core.ec_message_context_get(msg, msys.core.ECMESS_CTX_MESS,
    "MM7_Response_Status");
  print ("MM7 Response status is ", statusCode);
  if (statusCode != 2000) then
    print("rerouting message to example.org");
    msys.core.ec_message_context_set(msg, msys.core.ECMESS_CTX_MESS,
      "MM7_Response_Status_Detail", "Hook force tempfail to re-route the message");
    msg:routing_domain("example.org");              -- reroute to destinate domain example.org
    msg:rcptto("julie@example.org");                -- reroute to recipient julie@example.org
    return msys.mms.MM7_TEMP_FAIL;
  else
    return msys.mms.MM7_CONTINUE;
  end
end

msys.registerModule("mm7_response_hooks_tests", mod);
```

The following C hook does the same as the Lua implementation above:

<a name="MT_Submit_Response_Hook.c"></a>

**Example 19.2. MT Submit Response Hook: C Example**

```
#include "module.h"
#include "modules/mobility/mms/hooks/mm7_message_hooks.h"
#include "modules/mobility/mms/mm7.h"

static int sample_mm7_handle_submitRsp_hook(void *gself, ec_message* m)
{
  const char* status = ec_message_context_get(m, ECMESS_CTX_MESS, VCTX_KEY_MM7_RESPONSE_STATUS);
  if (strcmp(status, "1000")) {
    ec_mod_debug(gself, DDEBUG, "MM7 HOOK TEST: received response status code %s.
      Reroute the message!\n", status);
    ec_message_context_set(m, ECMESS_CTX_MESS, VCTX_KEY_MM7_RESPONSE_STATUS_DETAIL,
      "Hook force tempfail to re-route the message");
    ec_message_assign_domain_by_name(m, "example.org");
    ec_message_set_rcptto(m, "julie@example.org", sizeof("julie@example.org"), 0);
    return MM7_TEMP_FAIL;
  } else
    return MM7_CONTINUE;
}

static int init (generic_module_infrastructure *gself) {
  /* register the hook during module initialization */
  register_mm7_handle_submitRsp_hook_first (sample_mm7_handle_submitRsp_hook, gself);
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

| [Prev](MM7ClientSubmitResponseHook.interface.php)  | [Up](MM7ClientSubmitResponseHook.php) |  [Next](MM7LogInbandBounceHook.php) |
| 19.2. Interface  | [Table of Contents](index.php) |  Chapter 20. MM7 Log Inband Bounce Hook |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)