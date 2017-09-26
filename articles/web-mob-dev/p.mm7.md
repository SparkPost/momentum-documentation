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

| Part III. MM7 Hooks |
| [Prev](SMPPSubmitResponseHook.examples.php)  |   |  [Next](MM7ClientSubmitRequestHook.php) |

## Part III. MM7 Hooks

**Table of Contents**

<dl class="toc">

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

| [Prev](SMPPSubmitResponseHook.examples.php)  |   |  [Next](MM7ClientSubmitRequestHook.php) |
| 17.3. Examples  | [Table of Contents](index.php) |  Chapter 18. MM7 MT Submit Request Hook |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)