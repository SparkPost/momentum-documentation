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

| mm7_inactivity_timer |
| [Prev](mobility.conf.mm7_http_auth_user.php)  | 8.1. MM7 Configuration Option Details |  [Next](mobility.conf.mm7_message_class.php) |

<a name="mobility.conf.mm7_inactivity_timer"></a>
## Name

mm7_inactivity_timer — define the idle time before tearing down an MM7 connection

## Synopsis

`mm7_inactivity_timer = 300`

<a name="idp2439552"></a>
## Description

This option defines the idle time before tearing down an MM7 connection. This timer starts when an MM7 connection is established. If there is no any activities on this connection for the specified period of time, the timer will timeout and the ecelerity will initiate a connection tear down.

The default value for this option is `300` seconds.

**Configuration Change. ** This option is valid in all versions of Momentum *prior* to 3.5.6 and in Momentum 3.6\. It is deprecated in Momentum version 3.5.6; use [idle_timeout](https://support.messagesystems.com/docs/web-ref/conf.ref.idle_timeout.php) instead.

<a name="idp2445600"></a>
## Scope

This option is valid in the binding, binding_group, domain and global scopes.

| [Prev](mobility.conf.mm7_http_auth_user.php)  | [Up](mobility.mm7.options.php#mm7.conf) |  [Next](mobility.conf.mm7_message_class.php) |
| mm7_http_auth_user  | [Table of Contents](index.php) |  mm7_message_class |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)