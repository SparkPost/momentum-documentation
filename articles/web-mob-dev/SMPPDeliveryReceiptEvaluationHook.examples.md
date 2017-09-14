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

| 2.3. Examples |
| [Prev](SMPPDeliveryReceiptEvaluationHook.interface.php)  | Chapter 2. SMPP Delivery Receipt Evaluation Hook |  [Next](SMPPLogInbandBounceHook.php) |

## 2.3. Examples

<a name="SMPP_Delivery_Receipt_Evaluation_Hook.lua"></a>

**Example 2.1. SMPP Delivery Receipt Evaluation Hook: Lua Example**

```
require("msys.core");
require("msys.smpp");
local mod = {};

function mod:smpp_DR_pdu_eval (pdu)
   local dr = msys.smpp.smpp_get_deliver_mo_msg (pdu)
   print ("******Here is your delivery receipt: " .. dr)

   return msys.smpp.SMPP_CONTINUE
end

msys.registerModule("smpp_dr_eval_example", mod);
```

<a name="SMPP_Delivery_Receipt_Evaluation_Hook.c"></a>

**Example 2.2. SMPP Delivery Receipt Evaluation Hook: C Example**

```
#include "module.h"
#include "modules/mobility/smpp/smpp.h"
#include "modules/mobility/smpp/smpp_pdu.h"
#include "modules/mobility/smpp/hooks/smpp_pdu_evaluation.h"

static int sample_deliver_receipt_eval (generic_module_infrastructure *gself, SMPP_PDU *pdu)
{
  string * text = smpp_get_deliver_mo_msg (pdu);
  printf ("Here is your deliver receipt: %s\n", text->buffer);
  return SMPP_CONTINUE;
}

static int init(generic_module_infrastructure *gself) {
  register_smpp_DR_pdu_eval_hook_first (sample_deliver_receipt_eval, gself);
  return 0;
}

EC_MODULE_EXPORT
generic_module_infrastructure smpp_dr_evaluation_sample = {
  {
    EC_MODULE_INIT(EC_MODULE_TYPE_GENERIC, 0),
    "smpp_dr_evaluation_sample.c",
    "Module demonstrating delivery receipt hook",
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

| [Prev](SMPPDeliveryReceiptEvaluationHook.interface.php)  | [Up](SMPPDeliveryReceiptEvaluationHook.php) |  [Next](SMPPLogInbandBounceHook.php) |
| 2.2. Interface  | [Table of Contents](index.php) |  Chapter 3. SMPP Log Inband Bounce Hook |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)