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

| 9.3. Examples |
| [Prev](SMPPLogReceptionHook.interface.php)  | Chapter 9. SMPP Log Reception Hook |  [Next](SMPPLogStatusHook.php) |

## 9.3. Examples

<a name="SMPP_Log_Reception_Hook.lua"></a>

**Example 9.1. SMPP Log Reception Hook: Lua Example**

```
require("msys.core");

local mod = {};

function mod:smpp_log_reception(conn, msg, error)
  print("sample_smpp_log_reception_hook received message with error: ", error);
end

msys.registerModule("smpp_hooks_test", mod);
```

<a name="SMPP_Log_Reception_Hook.c"></a>

**Example 9.2. SMPP Log Reception Hook: C Example**

```
#include "module.h"
#include "modules/mobility/smpp/hooks/smpp_logging.h"
#include "modules/mobility/smpp/smpp.h"

static void sample_smpp_log_reception_hook(void *closure, smpp_conn* conn, ec_message *m,
  const char* error)
{
  printf("sample_smpp_log_reception_hook received message with error: %s\n", error);
}

static int init (generic_module_infrastructure *gself) {
  struct mbl_config *conf = gself->module_private_data;

  /* register the hook during module initialization */
  register_smpp_log_reception_hook_first (sample_smpp_log_reception_hook, conf);
  return 0;
}

EC_MODULE_EXPORT
generic_module_infrastructure smpp_hook_test = {
  {
    EC_MODULE_INIT(EC_MODULE_TYPE_GENERIC, 0),
    "smpp_hook_test.c",
    "Sample SMPP Hook",
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

| [Prev](SMPPLogReceptionHook.interface.php)  | [Up](SMPPLogReceptionHook.php) |  [Next](SMPPLogStatusHook.php) |
| 9.2. Interface  | [Table of Contents](index.php) |  Chapter 10. SMPP Logger Status Hook |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)