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

| Chapter 18. MM7 MT Submit Request Hook |
| [Prev](p.mm7.php)  | Part III. MM7 Hooks |  [Next](MM7ClientSubmitRequestHook.interface.php) |

## Chapter 18. MM7 MT Submit Request Hook

**Table of Contents**

<dl class="toc">

<dt>[18.1\. Purpose](MM7ClientSubmitRequestHook.php#MM7ClientSubmitRequestHook.purpose)</dt>

<dt>[18.2\. Interface](MM7ClientSubmitRequestHook.interface.php)</dt>

<dt>[18.3\. Examples](MM7ClientSubmitRequestHook.example.php)</dt>

</dl>

## 18.1. Purpose

The MM7 MT Submit Request Hook enables custom applications to inspect and modify an ec_message before it is converted to an MM7 SubmitReq sent out by Mobile Momentum. This hook is invoked once for each outgoing ec_message sent to a MM7 domain. The main purpose of this hook is to allow a custom script to request a delivery report, a read reply report and/or reply charging. Also use this hook to set a vender-specific ServiceCode and SenderAddress on the fly. The following context variables carried in the ec_message are significant to this hook process. These context variables can be assigned or modified in this hook so that the corresponding elements in an eventual MM7 SubmitReq can be assigned or modified:

<a name="MM7_MT_Submit_Request_Context_variables"></a>

**Table 18.1. MM7 MT Submit Request Context variables**

| Context Key Name | "#define" name | Description / Information Element in MM7 SubmitReq |
| --- | --- | --- |
| MM7_Reply_Charging | VCTX_KEY_MM7_REPLY_CHARGING | <ReplyCharging> |
| MM7_Reply_Charging_Size | VCTX_KEY_MM7_REPLY_CHARGING_SIZE | "replyChargingSize" attribute value in <ReplyCharging> |
| MM7_Reply_Deadline | VCTX_KEY_MM7_REPLY_DEADLINE | "replyDeadline" attribute value in <ReplyCharging> |
| MM7_Delivery_Report | VCTX_KEY_MM7_DELIVERY_REPORT | <DeliveryReport> |
| MM7_Read_Reply | VCTX_KEY_MM7_READ_REPLY | <ReadReply> |
| MM7_Service_Code | VCTX_KEY_MM7_SERVICE_CODE | <ServiceCode> |
| MM7_Sender_Address | VCTX_KEY_MM7_SENDER_ADDRESS | <SenderAddress> inside <SenderIdentification> |
| MM7_Source_Address | VCTX_KEY_MM7_SOURCE_ADDRESS | Used for logging purpose only. Defines the value for the source_address in the log.If not set, use the value of "MM7_Sender_Address". |
| MM7_Message_Class | VCTX_KEY_MM7_MESSAGE_CLASS | <MessageClass> |
| MM7_Request_IE_Extended | VCTX_KEY_MM7_REQUEST_IE_EXTENDED | XML tag and values for extra Information Elements |

| [Prev](p.mm7.php)  | [Up](p.mm7.php) |  [Next](MM7ClientSubmitRequestHook.interface.php) |
| Part III. MM7 Hooks  | [Table of Contents](index.php) |  18.2. Interface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)