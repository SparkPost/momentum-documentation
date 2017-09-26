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

| msys.av.scan |
| [Prev](lua.ref.msys.av.engines.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.av.scan_part.php) |

<a name="lua.ref.msys.av.scan"></a>
## Name

msys.av.scan — Perform a virus scan using the named engine

<a name="idp17478912"></a>
## Synopsis

`msys.av.scan(av_engine_name, msg, validate_context);`

```
av_engine_name: string, optional
msg: userdata, ec_message type, optional
validate_context: userdata, validate_context type, optional
```
<a name="idp17482032"></a>
## Description

Use this function with AV engines that depend on the AV module, such as the clamav module.

This function performs a virus scan. The scan is done using the specified engine or, if no engine is specified, any installed engines that are supported by the AV module. If a virus is detected by an engine, the function will skip the remaining engines and return. For a list of these engines, see [Section 71.6, “antivirus – Antivirus”](modules.antivirus.php "71.6. antivirus – Antivirus").

Enable this function with the statement `require('msys.av');`.

This function takes the following parameters:

*   `av_engine_name` – optional engine name

*   `msg`– optional message (msys.core:_ec_message)

*   `validate_context` – optional validation context

If the `msg` and/or `validate_context` parameters are omitted, they will be inferred from the calling environment, if possible. If no message can be inferred, this function will raise an error.

This function returns four values:

*   The *scan status* , which is one of the following values:

    *   msys.av.EC_AV_PART_IS_CONTAINER – A container was passed to `msys.av.scan`.

    *   msys.av.EC_AV_NAME_TOO_LONG – `av_engine_name` is longer than 40 characters.

    *   msys.av.EC_AV_NO_ENGINE – No AV engine is configured.

    *   msys.av.EC_AV_NOT_SUITABLE_FOR_STREAMING – AV engine cannot scan the message that was passed in as a stream.

    *   msys.av.EC_AV_ERROR – A runtime error occurred. For clamav-specific information, see [Section 71.17.1.1, “clamav Runtime Usage”](modules.clamav.php#modules.clamav.runtime "71.17.1.1. clamav Runtime Usage").

    *   msys.av.EC_AV_CLEAN – Meaning of this status depends on the AV engine.

    *   msys.av.EC_AV_INFECTED – Meaning of this status depends on the AV engine. For engine-specific information, see [Section 71.23.2, “Context Variables”](modules.csapi.php#modules.csapi.context.variables "71.23.2. Context Variables") and [Section 71.17.1.1, “clamav Runtime Usage”](modules.clamav.php#modules.clamav.runtime "71.17.1.1. clamav Runtime Usage").

    *   msys.av.EC_AV_UNSCANNABLE – Message could not be scanned.

*   An *informational string* , which typically contains the virus name; the precise contents of this string depend on the engine.

*   The *name of the AV engine*                  that detected the virus or `nil` if no virus was detected.

*   The *engine scan code*           or `nil` if no engine scan code is available. The scan code returned is specific to the engine reporting the error. For engine-specific information, see [Section 71.23.2, “Context Variables”](modules.csapi.php#modules.csapi.context.variables "71.23.2. Context Variables") and [Section 71.17.1.1, “clamav Runtime Usage”](modules.clamav.php#modules.clamav.runtime "71.17.1.1. clamav Runtime Usage").

<a name="lua.ref.msys.av.scan.example"></a>

**Example 70.47. msys.av.scan example using clamav**

```
require("msys.av");
 local mod = {};

 function mod:validate_data(msg, accept, vctx)
   local rc
   local result
   local eng
   local s_code
   rc, result, eng, s_code = msys.av.scan("clamav", msg, vctx);
   print ("rc: ", rc, map_to_symbol(rc), " result: ", result, " engine: ", eng, " scan code: ", s_code)
   if rc == msys.av.EC_AV_INFECTED then
     vctx:set_code(550, "The mail contains virus: " .. result)
     return msys.core.VALIDATE_DONE;
   end
   return msys.core.VALIDATE_CONT;
 end

 local function map_to_symbol(rc)
   if rc == msys.av.EC_AV_PART_IS_CONTAINER then
     return "EC_AV_PART_IS_CONTAINER"
   elseif rc == msys.av.EC_AV_NAME_TOO_LONG then
     return "EC_AV_NAME_TOO_LONG"
   elseif rc == msys.av.EC_AV_NO_ENGINE then
     return "EC_AV_NO_ENGINE"
   elseif rc == msys.av.EC_AV_NOT_SUITABLE_FOR_STREAMING then
     return "EC_AV_NOT_SUITABLE_FOR_STREAMING"
   elseif rc == msys.av.EC_AV_ERROR then
     return "EC_AV_ERROR"
   elseif rc == msys.av.EC_AV_CLEAN then
     return "EC_AV_CLEAN"
   elseif rc == msys.av.EC_AV_INFECTED then
     return "EC_AV_INFECTED"
   elseif rc == msys.av.EC_AV_UNSCANNABLE then
     return "EC_AV_UNSCANNABLE"
   else
     return "UNKNOWN"
   end
 end

 msys.registerModule("test_av", mod);
```

<a name="idp17516416"></a>
## See Also

[msys.av.scan_part](lua.ref.msys.av.scan_part.php "msys.av.scan_part")

| [Prev](lua.ref.msys.av.engines.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.av.scan_part.php) |
| msys.av.engines  | [Table of Contents](index.php) |  msys.av.scan_part |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)