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

| Mobile Momentum Developer Guide |
|   |   |  [Next](p.overview.php) |

## Mobile Momentum Developer Guide

### Message Systems, Inc.

Copyright © 2011-2014 Message Systems, Inc.

<a name="idp27587344"></a>

Confidential & Proprietary.

**Abstract**

This book documents the Mobile Momentum C API.

Document generated on: 2017-Aug-09

* * *

**Table of Contents**

<dl class="toc">

<dt>[I. Customization](p.overview.php)</dt>

<dd>

<dl>

<dt>[1\. Overview](DeveloperandCustomization.php)</dt>

<dd>

<dl>

<dt>[1.1\. Developing Applications for Mobile Momentum 2.1](DeveloperandCustomization.php#DC.developapplications)</dt>

<dt>[1.2\. Developing Applications for the SMPP ESME](DC.DevelopingApplicationsfortheSMPPESME.php)</dt>

<dt>[1.3\. Developing Applications for the MM7 VASP](DC.DevelopingApplicationsfortheMM7VASP.php)</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[II. SMPP Hooks](p.smpp.php)</dt>

<dd>

<dl>

<dt>[2\. SMPP Delivery Receipt Evaluation Hook](SMPPDeliveryReceiptEvaluationHook.php)</dt>

<dd>

<dl>

<dt>[2.1\. Purpose](SMPPDeliveryReceiptEvaluationHook.php#SMPPDeliveryReceiptEvaluationHook.purpose)</dt>

<dt>[2.2\. Interface](SMPPDeliveryReceiptEvaluationHook.interface.php)</dt>

<dt>[2.3\. Examples](SMPPDeliveryReceiptEvaluationHook.examples.php)</dt>

</dl>

</dd>

<dt>[3\. SMPP Log Inband Bounce Hook](SMPPLogInbandBounceHook.php)</dt>

<dd>

<dl>

<dt>[3.1\. Purpose](SMPPLogInbandBounceHook.php#SMPPLogInbandBounceHook.purpose)</dt>

<dt>[3.2\. Interface](SMPPLogInbandBounceHook.interface.php)</dt>

<dt>[3.3\. Examples](SMPPLogInbandBounceHook.examples.php)</dt>

</dl>

</dd>

<dt>[4\. SMPP Log Outband Bounce Hook](SMPPLogOutbandBounceHook.php)</dt>

<dd>

<dl>

<dt>[4.1\. Purpose](SMPPLogOutbandBounceHook.php#SMPPLogOutbandBounceHook.purpose)</dt>

<dt>[4.2\. Interface](SMPPLogOutbandBounceHook.interface.php)</dt>

<dt>[4.3\. Examples](SMPPLogOutbandBounceHook.examples.php)</dt>

</dl>

</dd>

<dt>[5\. SMPP Log Transient Bounce Hook](SMPPLogTransientBounceHook.php)</dt>

<dd>

<dl>

<dt>[5.1\. Purpose](SMPPLogTransientBounceHook.php#SMPPLogTransientBounceHook.purpose)</dt>

<dt>[5.2\. Function Interface](SMPPLogTransientBounceHook.interface.php)</dt>

<dt>[5.3\. Examples](SMPPLogTransientBounceHook.examples.php)</dt>

</dl>

</dd>

<dt>[6\. SMPP Log Conversion Hook](SMPPLogConversionHook.php)</dt>

<dd>

<dl>

<dt>[6.1\. Purpose](SMPPLogConversionHook.php#SMPPLogConversionHook.purpose)</dt>

<dt>[6.2\. Interface](SMPPLogConversionHook.interface.php)</dt>

<dt>[6.3\. Examples](SMPPLogConversionHook.examples.php)</dt>

</dl>

</dd>

<dt>[7\. SMPP Log Delivery Hook](SMPPLogDeliveryHook.php)</dt>

<dd>

<dl>

<dt>[7.1\. Purpose](SMPPLogDeliveryHook.php#SMPPLogDeliveryHook.purpose)</dt>

<dt>[7.2\. Interface](SMPPLogDeliveryHook.interface.php)</dt>

<dt>[7.3\. Examples](SMPPLogDeliveryHook.examples.php)</dt>

</dl>

</dd>

<dt>[8\. SMPP Log Permfail Hook](SMPPLogPermfailHook.php)</dt>

<dd>

<dl>

<dt>[8.1\. Purpose](SMPPLogPermfailHook.php#SMPPLogPermfailHook.purpose)</dt>

<dt>[8.2\. Interface](SMPPLogPermfailHook.interface.php)</dt>

<dt>[8.3\. Examples](SMPPLogPermfailHook.examples.php)</dt>

</dl>

</dd>

<dt>[9\. SMPP Log Reception Hook](SMPPLogReceptionHook.php)</dt>

<dd>

<dl>

<dt>[9.1\. Purpose](SMPPLogReceptionHook.php#SMPPLogReceptionHook.purpose)</dt>

<dt>[9.2\. Interface](SMPPLogReceptionHook.interface.php)</dt>

<dt>[9.3\. Examples](SMPPLogReceptionHook.examples.php)</dt>

</dl>

</dd>

<dt>[10\. SMPP Logger Status Hook](SMPPLogStatusHook.php)</dt>

<dd>

<dl>

<dt>[10.1\. Purpose](SMPPLogStatusHook.php#SMPPLogStatusHook.purpose)</dt>

<dt>[10.2\. Interface](SMPPLogStatusHook.interface.php)</dt>

<dt>[10.3\. Examples](SMPPLogStatusHook.examples.php)</dt>

</dl>

</dd>

<dt>[11\. SMPP Log Tempfail Hook](SMPPLogTempfailHook.php)</dt>

<dd>

<dl>

<dt>[11.1\. Purpose](SMPPLogTempfailHook.php#SMPPLogTempfailHook.purpose)</dt>

<dt>[11.2\. Interface](SMPPLogTempfailHook.interface.php)</dt>

<dt>[11.3\. Examples](SMPPLogTempfailHook.examples.php)</dt>

</dl>

</dd>

<dt>[12\. SMPP MO Conversion Hook](SMPPMOConversionHook.php)</dt>

<dd>

<dl>

<dt>[12.1\. Purpose](SMPPMOConversionHook.php#SMPPMOConversionHook.purpose)</dt>

<dt>[12.2\. Interface](SMPPMOConversionHook.interface.php)</dt>

<dt>[12.3\. Examples](SMPPMOConversionHook.examples.php)</dt>

</dl>

</dd>

<dt>[13\. SMPP MT Conversion Hook](SMPPMTConversionHook.php)</dt>

<dd>

<dl>

<dt>[13.1\. Interface](SMPPMTConversionHook.php#SMPPMTConversionHook.interface)</dt>

<dt>[13.2\. Examples](SMPPMTConversionHook.examples.php)</dt>

</dl>

</dd>

<dt>[14\. SMPP PDU MO (Receiver) Evaluation Hook](SMPPPDUMOEvaluationHook.php)</dt>

<dd>

<dl>

<dt>[14.1\. Purpose](SMPPPDUMOEvaluationHook.php#SMPPPDUMOEvaluationHook.purpose)</dt>

<dt>[14.2\. Interface](SMPPPDUMOEvaluationHook.interface.php)</dt>

<dt>[14.3\. Examples](SMPPPDUMOEvaluationHook.examples.php)</dt>

</dl>

</dd>

<dt>[15\. SMPP PDU MT (Transmit) Evaluation Hook](SMPPPDUMTEvaluationHook.php)</dt>

<dd>

<dl>

<dt>[15.1\. Purpose](SMPPPDUMTEvaluationHook.php#SMPPPDUMTEvaluationHook.purpose)</dt>

<dt>[15.2\. Interface](SMPPPDUMTEvaluationHook.interface.php)</dt>

<dt>[15.3\. Examples](SMPPPDUMTEvaluationHook.examples.php)</dt>

</dl>

</dd>

<dt>[16\. SMPP Received Message Validation Hook](SMPPReceivedMessageValidationHook.php)</dt>

<dd>

<dl>

<dt>[16.1\. Purpose](SMPPReceivedMessageValidationHook.php#SMPPReceivedMessageValidationHook.purpose)</dt>

<dt>[16.2\. Interface](SMPPReceivedMessageValidationHook.interface.php)</dt>

<dt>[16.3\. Examples](SMPPReceivedMessageValidationHook.examples.php)</dt>

</dl>

</dd>

<dt>[17\. SMPP Submit Response Hook](SMPPSubmitResponseHook.php)</dt>

<dd>

<dl>

<dt>[17.1\. Purpose](SMPPSubmitResponseHook.php#SMPPSubmitResponseHook.purpose)</dt>

<dt>[17.2\. Interface](SMPPSubmitResponseHook.interface.php)</dt>

<dt>[17.3\. Examples](SMPPSubmitResponseHook.examples.php)</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[III. MM7 Hooks](p.mm7.php)</dt>

<dd>

<dl>

<dt>[18\. MM7 MT Submit Request Hook](MM7ClientSubmitRequestHook.php)</dt>

<dd>

<dl>

<dt>[18.1\. Purpose](MM7ClientSubmitRequestHook.php#MM7ClientSubmitRequestHook.purpose)</dt>

<dt>[18.2\. Interface](MM7ClientSubmitRequestHook.interface.php)</dt>

<dt>[18.3\. Examples](MM7ClientSubmitRequestHook.example.php)</dt>

</dl>

</dd>

<dt>[19\. MM7 MT Submit Response Hook](MM7ClientSubmitResponseHook.php)</dt>

<dd>

<dl>

<dt>[19.1\. Purpose](MM7ClientSubmitResponseHook.php#MM7ClientSubmitResponseHook.purpose)</dt>

<dt>[19.2\. Interface](MM7ClientSubmitResponseHook.interface.php)</dt>

<dt>[19.3\. Examples](MM7ClientSubmitResponseHook.examples.php)</dt>

</dl>

</dd>

<dt>[20\. MM7 Log Inband Bounce Hook](MM7LogInbandBounceHook.php)</dt>

<dd>

<dl>

<dt>[20.1\. Purpose](MM7LogInbandBounceHook.php#MM7LogInbandBounceHook.purpose)</dt>

<dt>[20.2\. Interface](MM7LogInbandBounceHook.interface.php)</dt>

<dt>[20.3\. Examples](MM7LogInbandBounceHook.examples.php)</dt>

</dl>

</dd>

<dt>[21\. MM7 Log Outband Bounce Hook](MM7LogOutbandBounceHook.php)</dt>

<dd>

<dl>

<dt>[21.1\. Purpose](MM7LogOutbandBounceHook.php#MM7LogOutbandBounceHook.purpose)</dt>

<dt>[21.2\. Interface](MM7LogOutbandBounceHook.interface.php)</dt>

<dt>[21.3\. Examples](MM7LogOutbandBounceHook.examples.php)</dt>

</dl>

</dd>

<dt>[22\. MM7 Log Transient Bounce Hook](MM7LogTransientBounceHook.php)</dt>

<dd>

<dl>

<dt>[22.1\. Purpose](MM7LogTransientBounceHook.php#MM7LogTransientBounceHook.purpose)</dt>

<dt>[22.2\. Interface](MM7LogTransientBounceHook.interface.php)</dt>

<dt>[22.3\. Examples](MM7LogTransientBounceHook.examples.php)</dt>

</dl>

</dd>

<dt>[23\. MM7 Log Conversion Hook](MM7LogConversionHook.php)</dt>

<dd>

<dl>

<dt>[23.1\. Purpose](MM7LogConversionHook.php#MM7LogConversionHook.purpose)</dt>

<dt>[23.2\. Interface](MM7LogConversionHook.interface.php)</dt>

<dt>[23.3\. Examples](MM7LogConversionHook.examples.php)</dt>

</dl>

</dd>

<dt>[24\. MM7 Log Delivery Hook](MM7LogDeliveryHook.php)</dt>

<dd>

<dl>

<dt>[24.1\. Purpose](MM7LogDeliveryHook.php#MM7LogDeliveryHook.purpose)</dt>

<dt>[24.2\. Interface](MM7LogDeliveryHook.interface.php)</dt>

<dt>[24.3\. Examples](MM7LogDeliveryHook.examples.php)</dt>

</dl>

</dd>

<dt>[25\. MM7 Log Permfail Hook](MM7LogPermfailHook.php)</dt>

<dd>

<dl>

<dt>[25.1\. Purpose](MM7LogPermfailHook.php#MM7LogPermfailHook.purpose)</dt>

<dt>[25.2\. Interface](MM7LogPermfailHook.interface.php)</dt>

<dt>[25.3\. Examples](MM7LogPermfailHook.examples.php)</dt>

</dl>

</dd>

<dt>[26\. MM7 Log Reception Hook](MM7LogReceptionHook.php)</dt>

<dd>

<dl>

<dt>[26.1\. Purpose](MM7LogReceptionHook.php#MM7LogReceptionHook.purpose)</dt>

<dt>[26.2\. Interface](MM7LogReceptionHook.interface.php)</dt>

<dt>[26.3\. Examples](MM7LogReceptionHook.examples.php)</dt>

</dl>

</dd>

<dt>[27\. MM7 Logger Status Hook](MM7LogStatusHook.php)</dt>

<dd>

<dl>

<dt>[27.1\. Purpose](MM7LogStatusHook.php#MM7LogStatusHook.purpose)</dt>

<dt>[27.2\. Interface](MM7LogStatusHook.interface.php)</dt>

<dt>[27.3\. Examples](MM7LogStatusHook.examples.php)</dt>

</dl>

</dd>

<dt>[28\. MM7 Log Tempfail Hook](MM7LogTempfailHook.php)</dt>

<dd>

<dl>

<dt>[28.1\. Purpose](MM7LogTempfailHook.php#MM7LogTempfailHook.purpose)</dt>

<dt>[28.2\. Interface](MM7LogTempfailHook.interface.php)</dt>

<dt>[28.3\. Examples](MM7LogTempfailHook.examples.php)</dt>

</dl>

</dd>

<dt>[29\. MM7 Server Received Message Hook](MM7ServerReceivedMessageHook.php)</dt>

<dd>

<dl>

<dt>[29.1\. Purpose](MM7ServerReceivedMessageHook.php#MM7ServerReceivedMessageHook.purpose)</dt>

<dt>[29.2\. Interface](MM7ServerReceivedMessageHook.interface.php)</dt>

<dt>[29.3\. Examples](MM7ServerReceivedMessageHook.examples.php)</dt>

</dl>

</dd>

<dt>[30\. MM7 Server Received Message Validation Hook](MM7ServerReceivedMessageValidationHook.php)</dt>

<dd>

<dl>

<dt>[30.1\. Purpose](MM7ServerReceivedMessageValidationHook.php#MM7ServerReceivedMessageValidationHook.purpose)</dt>

<dt>[30.2\. Interface](MM7ServerReceivedMessageValidationHook.interface.php)</dt>

<dt>[30.3\. Examples](MM7_Server_Received_Message_Validation_Hook.examples.php)</dt>

</dl>

</dd>

<dt>[A. The Multi-Channel Message Type (MCMT)](mob.dev.guide.mcmt.php)</dt>

<dd>

<dl>

<dt>[A.1\. The Multi-Channel Message Type (MCMT)](mob.dev.guide.mcmt.php#mobility.mcmt)</dt>

<dt>[A.2\. The MCMT Format](mobility.mcmt.injection.php)</dt>

</dl>

</dd>

</dl>

</dd>

</dl>

[List of Figures](figure-toc.php)[List of Tables](table-toc.php)[List of Examples](example-toc.php)

|   |   |  [Next](p.overview.php) |
|   |   |  Part I. Customization |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)