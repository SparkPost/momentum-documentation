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

| Chapter 13. SMPP MT Conversion Hook |
| [Prev](SMPPMOConversionHook.examples.php)  | Part II. SMPP Hooks |  [Next](SMPPMTConversionHook.examples.php) |

## Chapter 13. SMPP MT Conversion Hook

**Table of Contents**

<dl class="toc">

<dt>[13.1\. Interface](SMPPMTConversionHook.php#SMPPMTConversionHook.interface)</dt>

<dt>[13.2\. Examples](SMPPMTConversionHook.examples.php)</dt>

</dl>

The SMPP MT Conversion Hook enables customization of the conversion of an ec_message to an SMPP message. The SMPP MT Conversion Hook exposes many of the information elements used to create SMPP messages, such as message text and recipient addresses. Applications may inspect and/or modify information elements using ec_message context variables.

## 13.1. Interface

### 13.1.1. Function Interface and Parameters

**13.1.1.1. Function Interface for Lua**

Lua implementations use the following interface:

`function mod:smpp_MT_conversion (msg)`

The"msg" parameter is an ec_message. Lua implementations must use the function name "`mod:smpp_MT_conversion`".

**13.1.1.2. Function Interface for C**

C implementations use the following interface:

```
static int sample_smpp_MT_conversion_hook (void  *gself,
ec_message * m)
```

Note that unlike Lua, the function name is not significant since the function is registered during module initialization as shown in [Example 13.2, “SMPP MT Conversion Hook: C Example”](SMPPMTConversionHook.examples.php#SMPP_MT_Conversion_Hook.c "Example 13.2. SMPP MT Conversion Hook: C Example").

### 13.1.2. Message Context Variables and Blobjects

The table below describes the message context variable and blobject keys significant to SMPP MT Conversion Hook processing. The first column is the context variable key name for getting and setting context variable values. The second column is the C "#define" name. The "#define" name may be used as an alternate specification for the key name not only in C programs, but also in Lua when properly scoped in the respective name space.

<a name="SMPP_MT_Conversion_ec_message_Context_Variables"></a>

**Table 13.1. SMPP MT Conversion ec_message Context Variables**

| Context Key Name | "#define" name | Description |
| --- | --- | --- |
| SMS_Destination_Flag | VCTX_KEY_SMS_DST_FLAG | SMS destination flag to indicate the address type of dst_addr.1 for SME address, 2 for Distribution List NameThis context variable is only significant when using submit_multi. |
| SMS_Destination_Address | VCTX_KEY_SMS_DST_ADDRESS | SMS destination address to set in SMPP message submission |
| SMS_Destination_NPI | VCTX_KEY_SMS_DST_NPI | SMS destination numbering plan indicator to set in SMPP message submission |
| SMS_Destination_TON | VCTX_KEY_SMS_DST_TON | SMS destination type of number to set in SMPP message submission |
| SMS_Source_Address | VCTX_KEY_SMS_SRC_ADDRESS | SMS source address to set in SMPP message submission |
| SMS_Source_NPI | VCTX_KEY_SMS_SRC_NPI | SMS source numbering plan indicator to set in SMPP message submission |
| SMS_Source_TON | VCTX_KEY_SMS_SRC_TON | SMS source type of number to set in SMPP message submission |
| SMS_Registered_Delivery | VCTX_KEY_SMS_REGISTERED_DELIVERY | registered delivery to set the type of delivery report on a per message basis |
| SMS_Data_Coding | VCTX_KEY_SMS_DATA_CODING | data coding of the SMS message text to set in SMPP message submission (not pre-populated) |
| SMS_Text | BLOB_KEY_SMS_TEXT | blob of the SMS message text to set in SMPP submission (not pre-populated) |

**13.1.2.1. Usage Notes**

*   Hook implementations may specify the message text by setting the SMS_Text blobject. Those hooks **must**also ensure that encoding of the new text is also set in the `SMS_Data_Coding` message context variable.

*   The ec_message text may be inspected using the Momentum core `msg:text()` function.

### 13.1.3. Return Values

*   SMPP_CONTINUE - continue normal message processing. Changes to context variables are in effect.

*   SMPP_DELIVERED - Terminate message processing and treat the message as "delivered".

*   SMPP_PERMFAILED - Process the message as permanent failure.

*   SMPP_TEMPFAILED - Process the message as a temporary failure. The message will be retried subject to configuration parameters for retry times and limits.

| [Prev](SMPPMOConversionHook.examples.php)  | [Up](p.smpp.php) |  [Next](SMPPMTConversionHook.examples.php) |
| 12.3. Examples  | [Table of Contents](index.php) |  13.2. Examples |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)