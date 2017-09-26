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

| Part II. SMPP Hooks |
| [Prev](DC.DevelopingApplicationsfortheMM7VASP.php)  |   |  [Next](SMPPDeliveryReceiptEvaluationHook.php) |

## Part II. SMPP Hooks

**Table of Contents**

<dl class="toc">

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

| [Prev](DC.DevelopingApplicationsfortheMM7VASP.php)  |   |  [Next](SMPPDeliveryReceiptEvaluationHook.php) |
| 1.3. Developing Applications for the MM7 VASP  | [Table of Contents](index.php) |  Chapter 2. SMPP Delivery Receipt Evaluation Hook |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)