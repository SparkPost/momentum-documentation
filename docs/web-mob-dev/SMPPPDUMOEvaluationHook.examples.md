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

| 14.3. Examples |
| [Prev](SMPPPDUMOEvaluationHook.interface.php)  | Chapter 14. SMPP PDU MO (Receiver) Evaluation Hook |  [Next](SMPPPDUMTEvaluationHook.php) |

## 14.3. Examples

<a name="SMPP_PDU_MO_Evaluation_Hook.lua"></a>

**Example 14.1. SMPP PDU MO (Receiver) Evaluation Hook: Lua Example**

```
require("msys.core");
require("msys.smpp");
local mod = {};

function mod:smpp_MO_pdu_eval (pdu)
  if string.find(pdu.u.deliver_sm.short_message.buffer, "viagra") then
    print("$$$$$ Rejecting spam...");
    return 0x66; --SMPP_ESME_RX_R_APPN
  end
end

msys.registerModule("smpp_MO_eval_demo", mod);
```

<a name="SMPP_PDU_MO_Evaluation_Hook.c"></a>

**Example 14.2. SMPP PDU MO (Receiver) Evaluation Hook: C Example**

```
#include "module.h"
#include "modules/mobility/smpp/hooks/smpp_pdu_evaluation.h"
#include "modules/mobility/smpp/smpp_pdu.h"
#include "modules/mobility/smpp/smpp.h"

static int sample_MO_pdu_eval (generic_module_infrastructure *gself,
             SMPP_PDU *pdu)
{
  if (pdu->type == deliver_sm) {
    if (strstr(pdu->u.deliver_sm.short_message->buffer,
         "viagra")) {
      printf ("Rejecting Spam SMS\n");
      return SMPP_ESME_RX_R_APPN;
    }
  }
  return 0;
}

static int init(generic_module_infrastructure *gself) {
  register_smpp_MO_pdu_eval_hook_first (sample_MO_pdu_eval,gself);
  return 0;
}

EC_MODULE_EXPORT
generic_module_infrastructure samp_MO_pdu_eval = {
  {
    EC_MODULE_INIT(EC_MODULE_TYPE_GENERIC, 0),
    "doc_smpp_mo_eval.c",
    "Demo MO PDU eval hook",
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

| [Prev](SMPPPDUMOEvaluationHook.interface.php)  | [Up](SMPPPDUMOEvaluationHook.php) |  [Next](SMPPPDUMTEvaluationHook.php) |
| 14.2. Interface  | [Table of Contents](index.php) |  Chapter 15. SMPP PDU MT (Transmit) Evaluation Hook |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)