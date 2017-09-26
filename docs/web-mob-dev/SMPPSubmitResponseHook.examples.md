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

| 17.3. Examples |
| [Prev](SMPPSubmitResponseHook.interface.php)  | Chapter 17. SMPP Submit Response Hook |  [Next](p.mm7.php) |

## 17.3. Examples

<a name="SMPP_Submit_Response_Hook.lua"></a>

**Example 17.1. SMPP Submit Response Hook: Lua Example**

```
require("msys.core");
require("msys.smpp");
local mod = {};

function mod:smpp_submit_response (msg, pdu)
   local id = msys.smpp.smpp_get_message_id_from_pdu (pdu)
   print ("Here is your message id: "
	  ..id..
	  ", you can put it in your database for delivery receipt reference")
   return msys.smpp.SMPP_CONTINUE
end

msys.registerModule("sample_smpp_submit_response_demo", mod);
```

<a name="SMPP_Submit_Response_Hook.c"></a>

**Example 17.2. SMPP Submit Response Hook: C Example**

```
#include "module.h"
#include "modules/mobility/smpp/hooks/smpp_pdu_evaluation.h"
#include "modules/mobility/smpp/smpp_pdu.h"
#include "modules/mobility/smpp/smpp.h"

static int test_hook_submit_response (generic_module_infrastructure *gself,
  ec_message* msg, SMPP_PDU *pdu)
{
  string * id = smpp_get_message_id_from_pdu (pdu);
  printf ("Here is your message id: %s ,"
        "you can put it in your database for delivery receipt reference. \n",
        id->buffer);
 return SMPP_CONTINUE;
}

static int init(generic_module_infrastructure *gself) {
  register_smpp_submit_response_hook_first (test_hook_submit_response, gself);
  return 0;
}

EC_MODULE_EXPORT
generic_module_infrastructure sample_submit_response = {
  {
    EC_MODULE_INIT(EC_MODULE_TYPE_GENERIC, 0),
    "sample_smpp_submit_response.c",
    "Sample Submit Response Hook",
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

| [Prev](SMPPSubmitResponseHook.interface.php)  | [Up](SMPPSubmitResponseHook.php) |  [Next](p.mm7.php) |
| 17.2. Interface  | [Table of Contents](index.php) |  Part III. MM7 Hooks |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)