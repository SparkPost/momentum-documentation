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

| smpp_bind_response_timer |
| [Prev](mobility.smpp.options.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_bind_type.php) |

<a name="mobility.conf.smpp_bind_response_timer"></a>
## Name

smpp_bind_response_timer — the amount of time that SMPP will wait for a response to an SMPP BIND request

## Synopsis

`smpp_bind_response_timer = 0`

<a name="idp293872"></a>
## Description

SMPP_Bind_Response_Timer specifies the amount of time (in seconds and fractions of seconds) that SMPP will wait for a response to an SMPP BIND request. An SMPP BIND request is considered to have failed beyond this time frame. If this option is not defined, the value of SMPP_Response_Timer applies.

The default value for this option is `0`.

<a name="idp296928"></a>
## Scope

SMPP_Bind_Response_Timer is valid in the binding, binding_group, domain and global scopes.

<a name="idp298816"></a>
## See Also

[smpp_response_timer](mobility.conf.smpp_response_timer.php "smpp_response_timer")

| [Prev](mobility.smpp.options.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_bind_type.php) |
| Chapter 3. Mobile Momentum SMPP Options  | [Table of Contents](index.php) |  smpp_bind_type |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)