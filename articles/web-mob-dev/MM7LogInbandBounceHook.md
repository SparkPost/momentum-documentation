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

| Chapter 20. MM7 Log Inband Bounce Hook |
| [Prev](MM7ClientSubmitResponseHook.examples.php)  | Part III. MM7 Hooks |  [Next](MM7LogInbandBounceHook.interface.php) |

## Chapter 20. MM7 Log Inband Bounce Hook

**Table of Contents**

<dl class="toc">

<dt>[20.1\. Purpose](MM7LogInbandBounceHook.php#MM7LogInbandBounceHook.purpose)</dt>

<dt>[20.2\. Interface](MM7LogInbandBounceHook.interface.php)</dt>

<dt>[20.3\. Examples](MM7LogInbandBounceHook.examples.php)</dt>

</dl>

## 20.1. Purpose

An MM7 MT message submitted by Mobile Momentum is treated as an inband message. When such a submission permanently fails it will be logged to the bounce log, as well as the main log using the hook implementation of the MM7 log permfail hook, `mms_log_permfail`.

This hook is triggered in the same way as the MM7 log permfail hook. The <StatusCode> from a remote response or hook return value indicates when an MM7 submission is considered permanently failed. The only differences between the M7 Log Inband Bounce Hook and the MM7 log permfail hook are as follows:

*   The log destination. A permanent failure is logged to the main log and a bounce to the bounce log.

*   The log format

| [Prev](MM7ClientSubmitResponseHook.examples.php)  | [Up](p.mm7.php) |  [Next](MM7LogInbandBounceHook.interface.php) |
| 19.3. Examples  | [Table of Contents](index.php) |  20.2. Interface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)