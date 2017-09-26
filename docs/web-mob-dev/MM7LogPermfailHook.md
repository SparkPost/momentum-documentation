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

| Chapter 25. MM7 Log Permfail Hook |
| [Prev](MM7LogDeliveryHook.examples.php)  | Part III. MM7 Hooks |  [Next](MM7LogPermfailHook.interface.php) |

## Chapter 25. MM7 Log Permfail Hook

**Table of Contents**

<dl class="toc">

<dt>[25.1\. Purpose](MM7LogPermfailHook.php#MM7LogPermfailHook.purpose)</dt>

<dt>[25.2\. Interface](MM7LogPermfailHook.interface.php)</dt>

<dt>[25.3\. Examples](MM7LogPermfailHook.examples.php)</dt>

</dl>

## 25.1. Purpose

This hook is similar to the mms_log_permfail hook and is used to log MM7 MT submissions which are permanently failed based on the remote response to the MT submission or the hook return value from `mm7_handle_submitRsp`. A permanently failed message will not be requeued or retried; it will be discarded and no further action will be taken.

| [Prev](MM7LogDeliveryHook.examples.php)  | [Up](p.mm7.php) |  [Next](MM7LogPermfailHook.interface.php) |
| 24.3. Examples  | [Table of Contents](index.php) |  25.2. Interface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)