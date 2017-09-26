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

| mm7_reply_deadline |
| [Prev](mobility.conf.mm7_reply_charging_size.php)  | 8.1. MM7 Configuration Option Details |  [Next](mobility.conf.mm7_request_ie_extended.php) |

<a name="mobility.conf.mm7_reply_deadline"></a>
## Name

mm7_reply_deadline — specify the attribute value of ReplyDeadline in the element Reply-Charging in a SubmitReq

## Synopsis

`mm7_reply_deadline = "P10D" # relative time of 10 Days`

<a name="idp2571488"></a>
## Description

Specify the attribute value of ReplyDeadline in element ReplyCharging in a SubmitReq. The value of this option must be in the XML schema format of "dataTime" or "duration", as described in [http://www.w3schools.com/Schema/schema_dtypes_date.asp](http://www.w3schools.com/Schema/schema_dtypes_date.asp). Find two examples below:

```
MM7_Reply_Deadline = "2012-05-30T09:30:10-06:00" # absolute time of 2012-05-30 09:30:10-06:00" timezone UTC-06:00
MM7_Reply_Deadline = "P10D" # relative time of 10 Days
```

A message level value can be set through the context variable `MM7_Reply_Deadline`.

There is no default value for this option.

SubmitReq is a submit request as defined in the MM7 schema on the 3GPPP website and likewise with ReplyCharging. For more information see [http://www.3gpp.org/ftp/Specs/archive/23_series/23.140/schema/REL-6-MM7-1-4](http://www.3gpp.org/ftp/Specs/archive/23_series/23.140/schema/REL-6-MM7-1-4).

<a name="idp2577760"></a>
## Scope

This option is valid in the binding, binding_group, domain and global scopes.

| [Prev](mobility.conf.mm7_reply_charging_size.php)  | [Up](mobility.mm7.options.php#mm7.conf) |  [Next](mobility.conf.mm7_request_ie_extended.php) |
| mm7_reply_charging_size  | [Table of Contents](index.php) |  mm7_request_ie_extended |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)