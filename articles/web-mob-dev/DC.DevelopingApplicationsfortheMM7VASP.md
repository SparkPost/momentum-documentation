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

| 1.3. Developing Applications for the MM7 VASP |
| [Prev](DC.DevelopingApplicationsfortheSMPPESME.php)  | Chapter 1. Overview |  [Next](p.smpp.php) |

## 1.3. Developing Applications for the MM7 VASP

### 1.3.1. MM7 Hook Points

*   [Chapter 29, *MM7 Server Received Message Hook*](MM7ServerReceivedMessageHook.php "Chapter 29. MM7 Server Received Message Hook") 

*   [Chapter 30, *MM7 Server Received Message Validation Hook*](MM7ServerReceivedMessageValidationHook.php "Chapter 30. MM7 Server Received Message Validation Hook") 

*   [Chapter 18, *MM7 MT Submit Request Hook*](MM7ClientSubmitRequestHook.php "Chapter 18. MM7 MT Submit Request Hook") 

*   [Chapter 19, *MM7 MT Submit Response Hook*](MM7ClientSubmitResponseHook.php "Chapter 19. MM7 MT Submit Response Hook") 

### 1.3.2. MM7 Logging Hook Points

As with other Momentum modules such as SMTP and SMPP, the following logger hooks are available for logging MM7 messages at different phases:

*   [Chapter 24, *MM7 Log Delivery Hook*](MM7LogDeliveryHook.php "Chapter 24. MM7 Log Delivery Hook") 

*   [Chapter 26, *MM7 Log Reception Hook*](MM7LogReceptionHook.php "Chapter 26. MM7 Log Reception Hook") 

*   [Chapter 27, *MM7 Logger Status Hook*](MM7LogStatusHook.php "Chapter 27. MM7 Logger Status Hook") 

*   [Chapter 28, *MM7 Log Tempfail Hook*](MM7LogTempfailHook.php "Chapter 28. MM7 Log Tempfail Hook") 

*   [Chapter 25, *MM7 Log Permfail Hook*](MM7LogPermfailHook.php "Chapter 25. MM7 Log Permfail Hook") 

*   [Chapter 23, *MM7 Log Conversion Hook*](MM7LogConversionHook.php "Chapter 23. MM7 Log Conversion Hook") 

*   [Chapter 20, *MM7 Log Inband Bounce Hook*](MM7LogInbandBounceHook.php "Chapter 20. MM7 Log Inband Bounce Hook") 

*   [Chapter 21, *MM7 Log Outband Bounce Hook*](MM7LogOutbandBounceHook.php "Chapter 21. MM7 Log Outband Bounce Hook") 

*   [Chapter 22, *MM7 Log Transient Bounce Hook*](MM7LogTransientBounceHook.php "Chapter 22. MM7 Log Transient Bounce Hook") 

All MM7 logger hooks have a reference to an ec_message as input. For logging purposes, hooks can access any data structures and context variables stored in this ec_message.

### 1.3.3. MM7-related ec_message Context Variables Accessible Through MM7 Hooks

The following ec_message context variables are available to hooks with ec_message input:

<a name="MM7-related_ec_message_Context_Variables"></a>

**Table 1.3. MM7-related ec_message Context Variables**

| Context Key Name | "#define" name | Description / Default usage |
| --- | --- | --- |
| MM7_Source_Address | VCTX_KEY_MM7_SOURCE_ADDRESS | MM7 MT submission's sender address. Used for logging. If not set, use the value of "MM7_Sender_Address". |
| MM7_Transaction_ID | VCTX_KEY_MM7_TRANS_ID | MM7 SOAP <TransactionID>. Used for logging |
| MM7_Reply_Charging | VCTX_KEY_MM7_REPLY_CHARGING | Used in mm7_pre_submit hook to set value of <ReplyCharging> in MM7 MT message |
| MM7_Reply_Charging_Size | VCTX_KEY_MM7_REPLY_CHARGING_SIZE | "replyChargingSize" attribute value in <ReplyCharging> |
| MM7_Reply_Deadline | VCTX_KEY_MM7_REPLY_DEADLINE | "replyDeadline" attribute value in <ReplyCharging> |
| MM7_Delivery_Report | VCTX_KEY_MM7_DELIVERY_REPORT | Used in mm7_pre_submit hook to set value of <DeliveryReport> in MM7 MT message |
| MM7_Read_Reply | VCTX_KEY_MM7_READ_REPLY | Used in mm7_pre_submit hook to set value of <ReadReply> in MM7 MT message |
| MM7_Service_Code | VCTX_KEY_MM7_SERVICE_CODE | Used in mm7_pre_submit hook to set value of <ServiceCode> in MM7 MT message |
| MM7_Sender_Address | VCTX_KEY_MM7_SENDER_ADDRESS | Used in mm7_pre_submit hook to set value of <SenderAddress> elements in a MM7 MT message |
| MM7_Number_Prefix | VCTX_KEY_MM7_NUMBER_PREFIX | Used in mm7_pre_submit hook to be prepended to the MM7 MT recipient address in number format |
| MM7_Response_Status | VCTX_KEY_MM7_RESPONSE_STATUS | 1\. Value of MM7 <StatusCode> in the response to a MT submission (e.g. SubmitRsp).Used in mm7_log_delivery and mm7_handle_submitRsp hook 2. Value of MM7 <MMStatus> in DeliveryReportReq. Used in mm7_log_status and mm7_request_eval hook |
| MM7_Response_Status_Detail | VCTX_KEY_MM7_RESPONSE_STATUS_DETAIL | 1\. Value of MM7 status <Details> in the response to a MT submission (e.g. SubmitRsp).The significance of this value is for logging only, e.g. assign value in mm7_handle_submitRsp, retrieve and log it in mm7_log_delivery. 2\. Value of MM7 <StatusText> in DeliveryReportReq. Used in mm7_log_status and mm7_request_eval hooks |
| MM7_Response_Message_ID | VCTX_KEY_MM7_RESPONSE_MESSAGE_ID | MM7 <MessageID>. It is assigned by the remote MMSC in a response to an MT submission,and present in subsequent DeliverReq or DeliveryReportReq to link to the original MT submission. Used for logging. |
| MM7_MIME_Length | VCTX_KEY_MM7_MIME_LENGTH | the MIME length of the MM7 MT message. Used for logging |
| MM7_MMSC_IP_Address | VCTX_KEY_MM7_MMSC_IP_ADDRESS | the remote MMSC IP address. Used for logging reception |
| #mms_dr_latency |   | delivery report latency string. Used for logging purpose only |
| MM7_Original_Message_ID |   | The ec_message ID of a MM7 SubmitReq MT message. Used by the mms_log_bounce_outband hook for logging purpose. |

| [Prev](DC.DevelopingApplicationsfortheSMPPESME.php)  | [Up](DeveloperandCustomization.php) |  [Next](p.smpp.php) |
| 1.2. Developing Applications for the SMPP ESME  | [Table of Contents](index.php) |  Part II. SMPP Hooks |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)