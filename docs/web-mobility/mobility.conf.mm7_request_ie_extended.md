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

| mm7_request_ie_extended |
| [Prev](mobility.conf.mm7_reply_deadline.php)  | 8.1. MM7 Configuration Option Details |  [Next](mobility.conf.mm7_response_timer.php) |

<a name="mobility.conf.mm7_request_ie_extended"></a>
## Name

mm7_request_ie_extended — this option is used to support future carrier/aggregator integrations

## Synopsis

`mm7_request_ie_extended = "some_value"`

<a name="idp2584192"></a>
## Description

This configuration option is designed to support future carrier/aggregator integrations. It's a string value that will be appended to an outgoing MM7 Request.

For example, the `MM7_Message_Class, MM7_Service_Code` variables can be interchangeably implemented through setting this `MM7_Request_IE_Extended` value. Utilize this configuration option when an optional XML elements is required by remote MMSC but not configurable through other configurable parameters.

A message level value can be set through context variable `MM7_Request_IE_Extended`.

<a name="idp2588752"></a>
## Scope

This option is valid in the binding, binding_group, domain and global scopes.

| [Prev](mobility.conf.mm7_reply_deadline.php)  | [Up](mobility.mm7.options.php#mm7.conf) |  [Next](mobility.conf.mm7_response_timer.php) |
| mm7_reply_deadline  | [Table of Contents](index.php) |  mm7_response_timer |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)