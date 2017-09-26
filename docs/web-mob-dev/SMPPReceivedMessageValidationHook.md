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

| Chapter 16. SMPP Received Message Validation Hook |
| [Prev](SMPPPDUMTEvaluationHook.examples.php)  | Part II. SMPP Hooks |  [Next](SMPPReceivedMessageValidationHook.interface.php) |

## Chapter 16. SMPP Received Message Validation Hook

**Table of Contents**

<dl class="toc">

<dt>[16.1\. Purpose](SMPPReceivedMessageValidationHook.php#SMPPReceivedMessageValidationHook.purpose)</dt>

<dt>[16.2\. Interface](SMPPReceivedMessageValidationHook.interface.php)</dt>

<dt>[16.3\. Examples](SMPPReceivedMessageValidationHook.examples.php)</dt>

</dl>

## 16.1. Purpose

The SMPP Received Message Validation Hook utilizes Momentum's `validate_data_spool_each_rcpt` hook point to enable inspection of the incoming SMPP request and to do content validation such as running an anti-virus scan. This can be done for each recipient. This hook is invoked once during ec_message generation for each intended recipient. To implement this hook, implement the validate_data_spool_each_rcpt hook and put all the validation logic for an SMPP inbound message into a control block for SMPP protocol only as show in [Section 16.3, “Examples”](SMPPReceivedMessageValidationHook.examples.php "16.3. Examples"). Logic outside of the protocol check block will affect all the incoming requests in other protocols.

| [Prev](SMPPPDUMTEvaluationHook.examples.php)  | [Up](p.smpp.php) |  [Next](SMPPReceivedMessageValidationHook.interface.php) |
| 15.3. Examples  | [Table of Contents](index.php) |  16.2. Interface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)