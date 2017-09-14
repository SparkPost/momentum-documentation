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

| Chapter 22. MM7 Log Transient Bounce Hook |
| [Prev](MM7LogOutbandBounceHook.examples.php)  | Part III. MM7 Hooks |  [Next](MM7LogTransientBounceHook.interface.php) |

## Chapter 22. MM7 Log Transient Bounce Hook

**Table of Contents**

<dl class="toc">

<dt>[22.1\. Purpose](MM7LogTransientBounceHook.php#MM7LogTransientBounceHook.purpose)</dt>

<dt>[22.2\. Interface](MM7LogTransientBounceHook.interface.php)</dt>

<dt>[22.3\. Examples](MM7LogTransientBounceHook.examples.php)</dt>

</dl>

## 22.1. Purpose

A temporarily failed MM7 submission will be requeued and retried and is considered a transient failure. Such a failure will be logged to the bounce log and the main log through the default hook implementation of the MM7 log tempfail hook, `mms_log_tempfail`. This hook is triggered in the same way as the MM7 log tempfail hook. The <StatusCode> from a remote response or hook return value indicates that a MM7 submission has been temporarily failed. The differences between the MM7 Log Transient Bounce Hook and the MM7 log tempfail hook are as follows: default implementation of these two hooks are:

*   the log destination; one logs to the main log, the other to the bounce log

*   the log format

| [Prev](MM7LogOutbandBounceHook.examples.php)  | [Up](p.mm7.php) |  [Next](MM7LogTransientBounceHook.interface.php) |
| 21.3. Examples  | [Table of Contents](index.php) |  22.2. Interface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)