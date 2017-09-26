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

| smpp_sms_segment_size |
| [Prev](mobility.conf.smpp_sms_data_no_bom.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_smsc_default_alphabet.php) |

<a name="mobility.conf.smpp_sms_segment_size"></a>
## Name

smpp_sms_segment_size — defines the maximum size of each SMS segment when converted from an email

## Synopsis

`smpp_sms_segment_size = 140`

<a name="idp2084768"></a>
## Description

This option specifies the maximum size of each SMS segment when converted from an email.

The default value for this option is `140`. You can set the value of the SMS segment size on a per message basis using the context variable. `vctx_key_smpp_sms_segment_size`.

You can set this option at runtime using `VCTX_KEY_SMS_SEGMENT_SIZE`.

**Configuration Change. ** As of version 3.3.3, the default value for this option is `160`. When upgrading, if required, explicitly set this option to `140` in the appropriate scope or scopes.

Find below examples for setting the segment size when when a Short Message Service Center (SMSC) is serving a GSM network which expects up to 140 octets of 7-bit GSM encoded data

*   For a single SMS message, there is no UDH so the number of characters accepted by the GSM network would be: `140 * 8/7 = 160`. In this case, set `smpp_sms_segment_size` to `160`.

*   For CSMS, when `smpp_csms_refnum` = 2, the UDH will occupy 7 bytes, the number of valid characters accepted by the GSM would be: (140-7) * 8/7 = 152\. In this case, `smpp_sms_segment_size` should be set to `159` (152+7).

*   When `smpp_csms_refnum_length = 1`, the UDH is 6 bytes and the number of characters accepted by the GSM is `(140-6) * 8/7 = 153` for a total segment size of `159`. In this case, `smpp_sms_segment_size` should be set to `159`.

In version 3.3.3 you might use this option in a domain stanza in the following way:

<a name="mobility.conf.smpp_sms_segment_size.example"></a>

**Example 3.1. smpp_sms_segment_size example (3.3.3)**

```
smpp_esme_udh_segment = true
smpp_max_sms_message_size = 3200 #max 20 segments
smpp_sms_data_coding = "Default"
smpp_smcs_default_alphabet = "GSM"
smpp_sms_segment_size = 160
smpp_sms_segment_boundary = false
smpp_csms_refnum_length = 2
```

Adjust `smpp_sms_segment_size` on the fly using Lua in the following way:

```
require("msys.core");
require("msys.smpp");
require("msys.extended.message");
local mod = {};

function mod:smpp_MT_conversion(msg)
  local data_coding = msys.config("eval", "domain", msg:routing_domain(),
    "SMPP_SMS_DATA_Coding")
  if (data_coding == 0) then -- SMPP_SMS_DATA_Coding = "default" or "0"
    local alphabet = msys.config("eval", "domain" msg_routing_domaina(),
      "SMPP_SMSC_Defaul_Alphabet")
    if alphabet == "GSM" then -- SMPP_SMSC_Default_Alphabet = "GSM"
      local msg_length = string.len(msg:text()) -- get plain/text part of message
      if msg_length > 160 then
        print ("Set SMPP_SMS_Segment_Size to 159!\n");
        msg:context_set(msys.core.ECMESS_CTX_MESS,
          msys.smpp.VCTX_KEY_SMS_SEGMENT_SIZE, "159");
      else
        print("Keep SMPP_SMS_Segment_size of 160!\n");
      end
    end
  end
  return msys.smpp.SMPP_CONVERT_CONT;
end

msys.registerModule("smpp_hook_test", mod);
```
<a name="idp2107184"></a>
## Scope

`smpp_sms_segment_size` is valid in the binding, binding_group, domain and global scopes.

<a name="idp2109488"></a>
## See Also

[smpp_max_sms_from_size](mobility.conf.smpp_max_sms_from_size.php "smpp_max_sms_from_size"), [smpp_max_sms_message_size](mobility.conf.smpp_max_sms_message_size.php "smpp_max_sms_message_size"), [smpp_max_sms_subject_size](mobility.conf.smpp_max_sms_subject_size.php "smpp_max_sms_subject_size"), [Section 2.8, “SMS Conversion Hook Points”](mobility.runtime.hooks.php "2.8. SMS Conversion Hook Points")

| [Prev](mobility.conf.smpp_sms_data_no_bom.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_smsc_default_alphabet.php) |
| smpp_sms_data_no_bom  | [Table of Contents](index.php) |  smpp_smsc_default_alphabet |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)