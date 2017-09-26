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

| 23.3. Examples |
| [Prev](MM7LogConversionHook.interface.php)  | Chapter 23. MM7 Log Conversion Hook |  [Next](MM7LogDeliveryHook.php) |

## 23.3. Examples

<a name="MM7_Log_Conversion_Hook.lua"></a>

**Example 23.1. MM7 Log Conversion Hook: Lua Example**

```
require("msys.core");

local mod = {};

function mod:mms_log_conversion(msg)
  if msg.recv_method == msys.core.P_MM7 then
    print("sample_mm7_log_conversion_hook log conversion: convert MM7 message to ec_message");
  else
    print("sample_mm7_log_conversion_hook log conversion: message is originated from protocol: ",
        msys.core.protocol_string(msg.recv_method));
  end
end

msys.registerModule("mm7_hooks_test", mod);
```

<a name="MM7_Log_Conversion_Hook.c"></a>

**Example 23.2. MM7 Log Conversion Hook: C Example**

```
#include "module.h"
#include "modules/mobility/mms/hooks/mms_logging.h"
#include "modules/mobility/mms/mm7.h"

static void sample_mm7_log_conversion_hook(void *closure, ec_message *m)
{
  if (m->recv_method == P_MM7)
    printf("sample_mm7_log_conversion_hook log conversion: convert MM7 message to 
      ec_message\n");
  else
    printf("sample_mm7_log_conversion_hook log conversion: message is originated 
      from protocol: %s\n",
         protocol_string(m->recv_method));
}

static int init (generic_module_infrastructure *gself) {
  /* register the hook during module initialization */
  register_mms_log_conversion_hook_first (sample_mm7_log_conversion_hook, gself);
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

| [Prev](MM7LogConversionHook.interface.php)  | [Up](MM7LogConversionHook.php) |  [Next](MM7LogDeliveryHook.php) |
| 23.2. Interface  | [Table of Contents](index.php) |  Chapter 24. MM7 Log Delivery Hook |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)