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

| Chapter 3. SMPP Log Inband Bounce Hook |
| [Prev](SMPPDeliveryReceiptEvaluationHook.examples.php)  | Part II. SMPP Hooks |  [Next](SMPPLogInbandBounceHook.interface.php) |

## Chapter 3. SMPP Log Inband Bounce Hook

**Table of Contents**

<dl class="toc">

<dt>[3.1\. Purpose](SMPPLogInbandBounceHook.php#SMPPLogInbandBounceHook.purpose)</dt>

<dt>[3.2\. Interface](SMPPLogInbandBounceHook.interface.php)</dt>

<dt>[3.3\. Examples](SMPPLogInbandBounceHook.examples.php)</dt>

</dl>

## 3.1. Purpose

An SMS MT message submitted by Mobile Momentum is treated as an inband message. When such a submission is failed permanently, it will be logged in the SMPP bounce log, as well as the SMPP mainlog through default hook implementation of the SMPP log permfail hook (`smpp_log_permfail`). This hook is triggered in the same way as the SMPP log permfail hook. The command_status from a remote response or a hook return value indicates that an SMS MT submission submission has permanently failed. The differences between the inband bounce and the permanent failure hooks are:

*   log destination (one to mainlog, one to bounce log)

*   log format (defined by the configuration)

| [Prev](SMPPDeliveryReceiptEvaluationHook.examples.php)  | [Up](p.smpp.php) |  [Next](SMPPLogInbandBounceHook.interface.php) |
| 2.3. Examples  | [Table of Contents](index.php) |  3.2. Interface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)