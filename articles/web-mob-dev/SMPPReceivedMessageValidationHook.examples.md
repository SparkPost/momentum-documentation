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

| 16.3. Examples |
| [Prev](SMPPReceivedMessageValidationHook.interface.php)  | Chapter 16. SMPP Received Message Validation Hook |  [Next](SMPPSubmitResponseHook.php) |

## 16.3. Examples

<a name="SMPP_Received_Message_Validation_Hook.lua"></a>

**Example 16.1. SMPP Received Message Validation Hook: Lua Example**

```
require('msys.core');
require('msys.extended.message');
require('msys.av');

local mod = {};
function mod:validate_data_spool_each_rcpt(msg, ac, vctx)
  -- for SMPP Messages only
  if msg.recv_method == msys.core.P_SMPP then
    local rc, result, eng = msys.av.scan('eicar', msg, vctx);
    print("av:", rc, result, eng);
  end
  return msys.core.VALIDATE_CONT;
end
msys.registerModule('validation', mod);
```

| [Prev](SMPPReceivedMessageValidationHook.interface.php)  | [Up](SMPPReceivedMessageValidationHook.php) |  [Next](SMPPSubmitResponseHook.php) |
| 16.2. Interface  | [Table of Contents](index.php) |  Chapter 17. SMPP Submit Response Hook |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)