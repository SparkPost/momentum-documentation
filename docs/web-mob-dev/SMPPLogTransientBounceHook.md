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

| Chapter 5. SMPP Log Transient Bounce Hook |
| [Prev](SMPPLogOutbandBounceHook.examples.php)  | Part II. SMPP Hooks |  [Next](SMPPLogTransientBounceHook.interface.php) |

## Chapter 5. SMPP Log Transient Bounce Hook

**Table of Contents**

<dl class="toc">

<dt>[5.1\. Purpose](SMPPLogTransientBounceHook.php#SMPPLogTransientBounceHook.purpose)</dt>

<dt>[5.2\. Function Interface](SMPPLogTransientBounceHook.interface.php)</dt>

<dt>[5.3\. Examples](SMPPLogTransientBounceHook.examples.php)</dt>

</dl>

## 5.1. Purpose

Because a temporarily failed SMPP MT submission is retried, it is considered a transient or temporary failure. Such a failure will be logged in the bounce log, as well as logged into main log through the default hook implementation of the SMPP log tempfail hook (`smpp_log_tempfail`). This hook is triggered in the same way as the SMPP log tempfail hook. The command_status from a remote response or a hook return value indicates that an SMPP MT submission has temporarily failed. The differences between an SMPP log tempfail hook and an SMPP Log Transient Bounce Hook are as follows:

*   the log destination (one is logged to the main log, the other to the bounce log)

*   the log format (as defined by the configuration).

| [Prev](SMPPLogOutbandBounceHook.examples.php)  | [Up](p.smpp.php) |  [Next](SMPPLogTransientBounceHook.interface.php) |
| 4.3. Examples  | [Table of Contents](index.php) |  5.2. Function Interface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)