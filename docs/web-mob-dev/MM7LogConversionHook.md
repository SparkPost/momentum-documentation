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

| Chapter 23. MM7 Log Conversion Hook |
| [Prev](MM7LogTransientBounceHook.examples.php)  | Part III. MM7 Hooks |  [Next](MM7LogConversionHook.interface.php) |

## Chapter 23. MM7 Log Conversion Hook

**Table of Contents**

<dl class="toc">

<dt>[23.1\. Purpose](MM7LogConversionHook.php#MM7LogConversionHook.purpose)</dt>

<dt>[23.2\. Interface](MM7LogConversionHook.interface.php)</dt>

<dt>[23.3\. Examples](MM7LogConversionHook.examples.php)</dt>

</dl>

## 23.1. Purpose

This hook logs message conversion from or to an MM7 SOAP message. The default logger implementation will either log the event as "mm7 to ec_message" or "ec_message to mm7", based on the value of `recv_method` in the ec_message. If the ec_message originates from a MM7 endpoint—the `recv_method` equals `P_MM7`—"mm7 to ec_message" is logged. Otherwise, "ec_message to mm7" is logged. Overwrite this hook if you want to log message conversion differently.

| [Prev](MM7LogTransientBounceHook.examples.php)  | [Up](p.mm7.php) |  [Next](MM7LogConversionHook.interface.php) |
| 22.3. Examples  | [Table of Contents](index.php) |  23.2. Interface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)