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

| 5.2. Function Interface |
| [Prev](SMPPLogTransientBounceHook.php)  | Chapter 5. SMPP Log Transient Bounce Hook |  [Next](SMPPLogTransientBounceHook.examples.php) |

## 5.2. Function Interface

This function has exactly the same input and return value as [Chapter 11, *SMPP Log Tempfail Hook*](SMPPLogTempfailHook.php "Chapter 11. SMPP Log Tempfail Hook") . It must be named "mod::smpp_log_bounce_transient" in Lua or registered as "smpp_log_bounce_transient" in C. Please refer to [Chapter 11, *SMPP Log Tempfail Hook*                  ](SMPPLogTempfailHook.php "Chapter 11. SMPP Log Tempfail Hook") for details.

| [Prev](SMPPLogTransientBounceHook.php)  | [Up](SMPPLogTransientBounceHook.php) |  [Next](SMPPLogTransientBounceHook.examples.php) |
| Chapter 5. SMPP Log Transient Bounce Hook  | [Table of Contents](index.php) |  5.3. Examples |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)