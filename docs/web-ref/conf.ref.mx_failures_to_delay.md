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

| mx_failures_to_delay |
| [Prev](conf.ref.mx_failures_fallback_to_a.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.never_attempt_expired_messages.php) |

<a name="conf.ref.mx_failures_to_delay"></a>
## Name

mx_failures_to_delay — number of consecutive failures before a domain is auto-delayed

## Synopsis

`MX_Failures_To_Delay = 50`

<a name="idp10448432"></a>
## Description

When Momentum detects that a domain has no contactable MXs, it will move all that domain's active messages into the delayed queue. This setting allows you to configure the sensitivity of Momentum to consecutive connection failures. Momentum will need MX_Failures_To_Delay consecutive failures for every MX in a domain to trigger a delay event. The default value is 50\. This is configurable both at a global and per-domain level. Setting this value to zero will disable the auto-delay feature.

### Warning

This is an advanced option. Making Momentum too sensitive to transient network connection problems will cause unnecessary delays in message delivery. Thorough testing is recommended prior to deployment in a production environment.

<a name="idp10451584"></a>
## Scope

mx_failures_to_delay is valid in the domain and global scopes.

| [Prev](conf.ref.mx_failures_fallback_to_a.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.never_attempt_expired_messages.php) |
| mx_failures_fallback_to_a  | [Table of Contents](index.php) |  never_attempt_expired_messages |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)