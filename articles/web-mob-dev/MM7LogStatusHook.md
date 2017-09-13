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

| Chapter 27. MM7 Logger Status Hook |
| [Prev](MM7LogReceptionHook.examples.php)  | Part III. MM7 Hooks |  [Next](MM7LogStatusHook.interface.php) |

## Chapter 27. MM7 Logger Status Hook

**Table of Contents**

<dl class="toc">

<dt>[27.1\. Purpose](MM7LogStatusHook.php#MM7LogStatusHook.purpose)</dt>

<dt>[27.2\. Interface](MM7LogStatusHook.interface.php)</dt>

<dt>[27.3\. Examples](MM7LogStatusHook.examples.php)</dt>

</dl>

## 27.1. Purpose

This hook is used to log the delivery status of an MM7 MT submission. The delivery status is reported in the DeliveryReportReq sent from a remote MMSC regarding a request previously submitted by Mobile Momentum.

| [Prev](MM7LogReceptionHook.examples.php)  | [Up](p.mm7.php) |  [Next](MM7LogStatusHook.interface.php) |
| 26.3. Examples  | [Table of Contents](index.php) |  27.2. Interface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)