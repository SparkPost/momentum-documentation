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

| Chapter 19. MM7 MT Submit Response Hook |
| [Prev](MM7ClientSubmitRequestHook.example.php)  | Part III. MM7 Hooks |  [Next](MM7ClientSubmitResponseHook.interface.php) |

## Chapter 19. MM7 MT Submit Response Hook

**Table of Contents**

<dl class="toc">

<dt>[19.1\. Purpose](MM7ClientSubmitResponseHook.php#MM7ClientSubmitResponseHook.purpose)</dt>

<dt>[19.2\. Interface](MM7ClientSubmitResponseHook.interface.php)</dt>

<dt>[19.3\. Examples](MM7ClientSubmitResponseHook.examples.php)</dt>

</dl>

## 19.1. Purpose

The MM7 MT Submit Response Hook is invoked following the parsing of an MM7 response to an MM7 MT message and before regular processing of the response. It enables inspection of message submission response status for the purposes of initiating requeue/retry of failed message submissions and other business logic if required. This hook has ec_message as input and therefore has full access to the context variables such as `MM7_Response_Message_ID`. The following context variables are assigned or modified by this hook in order to affect subsequent processes:

<a name="MM7_MT_Submit_Response_Context_Variables"></a>

**Table 19.1. MM7 MT Submit Response Context Variables**

| Context Key Name | "#define" name | Description |
| --- | --- | --- |
| MM7_Response_Status | VCTX_KEY_MM7_RESPONSE_STATUS | value of MM7 <StatusCode> in the response |
| MM7_Response_Status_Detail | VCTX_KEY_MM7_RESPONSE_STATUS_DETAIL | value of MM7 status <Details> in the response.The significance of this value is for logging only |
| MM7_Response_Message_ID | VCTX_KEY_MM7_RESPONSE_MESSAGE_ID | the remote MM7 <MessageID> in the response.It will be logged and used to identify the linked request (e.g. DeliveryReport from remote MMSC) |

| [Prev](MM7ClientSubmitRequestHook.example.php)  | [Up](p.mm7.php) |  [Next](MM7ClientSubmitResponseHook.interface.php) |
| 18.3. Examples  | [Table of Contents](index.php) |  19.2. Interface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)