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

| 29.3. Examples |
| [Prev](MM7ServerReceivedMessageHook.interface.php)  | Chapter 29. MM7 Server Received Message Hook |  [Next](MM7ServerReceivedMessageValidationHook.php) |

## 29.3. Examples

<a name="MM7_Server_Received_Message_Hook.lua"></a>

**Example 29.1. MM7 Server Received Message Hook: Lua Example**

```
require("msys.core");
require("msys.mms");

local mod = {};

function mod:mm7_request_eval(trx)
  print("***mm7_request_eval hook get called!!!");

  print ("****Transaction type: " .. trx.trx_type .. "\n");

  -- inspect the soap envelope in received request
  print ("****Soap envelope:\n" .. trx.soap_envelope .. "\n");

  -- inspect the soap attachment part in received request
  print ("****Soap attachment:\n" .. trx.soap_attachment .. "\n");

  -- inspect the ec_dict structure which contains the soap envelope parsed results,
  -- and put them into the <Details> in the response
  print ("****Tags:\n");
  msys.core.dict_stringprint (trx.status_details, trx.tags, 0, "     ");
  print ("\n" .. trx.status_details);

  -- modify the sender address
  msys.core.dict_key_delete (trx.tags, "RFC2822Address")
  msys.core.dict_add_key_value (trx.tags, "RFC2822Address", "fred@barney.com")

  -- print the recipients
  local recip = msys.cast(msys.core.ec_double_list_shift(trx.recipients),
    'msys.mms:mm7_recipient');
  print ("******Recipient: " .. recip.disposition .. ": " .. recip.address .. "
    " .. recip.type);

  -- set the <StatusCode> in response to 1100
  trx.status_code = 1100;

  -- set the <ServiceCode> in response
  msys.core.stringwrite (trx.service_code, "789-4560-321", 12);

  return MM7_CONTINUE;
end

msys.registerModule("mm7_request_eval_tests", mod);
```

<a name="MM7_Server_Received_Message_Hook.c"></a>

**Example 29.2. MM7 Server Received Message Hook: C Example**

```
#include "module.h"
#include "modules/mobility/mms/hooks/mm7_message_hooks.h"
#include "modules/mobility/mms/mm7.h"

static int sample_mm7s_request_eval_hook(void* gself, mm7_transaction* trx)
{
  ec_mod_debug(gself, DDEBUG, "***mm7_request_eval hook get called!!!");

  ec_mod_debug(gself, DDEBUG, "****Transaction type: %d\n", trx->trx_type);

  /* inspect the soap envelope in received request */
  ec_mod_debug(gself, DDEBUG, "****Soap envelope:\n%s\n", trx->soap_envelope.buffer);

  /* inspect the soap attachment part in received request */
  ec_mod_debug(gself, DDEBUG, "****Soap attachment:\n%s\n", trx->soap_attachment.buffer);

  /* inspect the ec_dict structure which contains the soap envelope parsed results,
    and put them into <Details> in response */
  ec_mod_debug(gself, DDEBUG, "****Tags:\n");
  dict_stringprint (&(trx->status_details), trx->tags, 0, "     ");
  ec_mod_debug(gself, DDEBUG, "\n%s\n", trx->status_details.buffer);

  /* modify the sender address */
  dict_key_delete (trx->tags, "RFC2822Address");
  dict_add_key_value (trx->tags, "RFC2822Address", "fred@barney.com");

  /* print the recipients */
  mm7_recipient* recip = (mm7_recipient*)ec_double_list_shift(&(trx->recipients));
  ec_mod_debug(gself, DDEBUG, "******Recipient: %d: %s %d\n", recip->disposition,
    recip->address.buffer, recip->type);

  /* set the <StatusCode> in response to 1100 */
  trx->status_code = 1100;

  /* set the <ServiceCode> in response */
  stringwrite(&trx->service_code, "789-4560-321", strlen("789-4560-321"));

  return MM7_CONTINUE;
}

static int init (generic_module_infrastructure *gself) {
  /* register the hook during module initialization */
  register_mm7_request_eval_hook_first (sample_mm7s_request_eval_hook, gself);
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

| [Prev](MM7ServerReceivedMessageHook.interface.php)  | [Up](MM7ServerReceivedMessageHook.php) |  [Next](MM7ServerReceivedMessageValidationHook.php) |
| 29.2. Interface  | [Table of Contents](index.php) |  Chapter 30. MM7 Server Received Message Validation Hook |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)