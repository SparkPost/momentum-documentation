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

| 2.8. SMS Conversion Hook Points |
| [Prev](mobility.runtime.php)  | Chapter 2. Mobile Momentum SMPP |  [Next](mobility.smpp.options.php) |

## 2.8. SMS Conversion Hook Points

Use SMS conversion hooks to override the default SMS-email conversions. There are four SMS conversion hooks: two for MT messages and two for MO messages. For each direction, there is an SMS conversion hook invoked prior to the default conversion and one following default conversion. Aside from context variable manipulation, the hooks indicate whether default processing should be suppressed (pre-conversion hooks only), allowed to continue, or if the message should be canceled. These hook points and their Lua function names are as follows:

### Note

In Mobile Momentum version 2.1 and higher, when using Lua code, `require("msys.smpp");` replaces `require("msys.mobility");`.

*   MO_pre_conversion – Inbound pre-conversion. The Lua function name is `smpp_MO_pre_conversion.`

*   MO_post_conversion – Inbound post-conversion. The Lua function name is `smpp_MO_post_conversion`.

*   MT_pre_conversion – Outbound pre-conversion. The Lua function name is `smpp_MT_pre_conversion`.

*   MT_post_conversion – Outboundpost-conversion. The Lua function name is `smpp_MT_post_conversion` .

The hook points return indicators to suppress or continue transcoding. These are:

*   SMPP_CONVERT_CONT – continue normal conversion

*   SMPP_CONVERT_SUPPRESS – suppress additional default conversion and keep processing. This value only makes sense from pre-conversion hook points.

*   SMPP_CONVERT_CANCEL – terminate processing

When returning SMPP_CONVERT_SUPPRESS, all of the respective context variable (MO or MT) should be set by the hook implementation.

### 2.8.1. SMPP Message Conversion Hook Examples

```
local mod = {};
require("msys.core");
require("msys.smpp"); -- use this require statement in version 2.1
-- prior to version 2.1 use require("msys.mobility");
-- prior to version 2.1 return values must also be msys.mobility.XXXX;

function mod:smpp_MT_pre_conversion (msg)
   print("**** Here We Are ---- Made it to the MT pre-convert hook.")
   return msys.smpp.SMPP_CONVERT_CONT;
end

function mod:smpp_MT_post_conversion (msg)
   print("**** ... And we also made it into the MT post-convert hook.")
   print("**** Oops, sorry, your message has been canceled.")
   return msys.smpp.SMPP_CONVERT_CANCEL;
end

function mod:smpp_MO_pre_conversion (msg)
   print("**** Here We Are ---- Made it to the MO pre-convert hook.")
   return msys.smpp.SMPP_CONVERT_CONT;
end

function mod:smpp_MO_post_conversion (msg)
   print("**** ... And we also made it into the MO post-convert hook.")
   print("**** Oops, sorry, your message has been canceled.")
   return msys.smpp.SMPP_CONVERT_CANCEL;
end

msys.registerModule("smpp_conversion_hook_tests", mod);
```

For a description of the `msys.registerModule` function see "[msys.registerModule](https://support.messagesystems.com/docs/web-ref/lua.ref.msys.registerModule.php)".

| [Prev](mobility.runtime.php)  | [Up](momentum.mobility.php) |  [Next](mobility.smpp.options.php) |
| 2.7. Message Context Variables  | [Table of Contents](index.php) |  Chapter 3. Mobile Momentum SMPP Options |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)