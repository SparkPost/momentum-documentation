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

| Mailing_Triggerv37 |
| [Prev](rest.List_Unarchivev37.php)  | Chapter 24. Changes in Version 3.7 |  [Next](rest.Recipientv37.php) |

<a name="rest.Mailing_Triggerv37"></a>
## Name

Mailing_Triggerv37 — This API is used to add recipients to an api-triggered mailing

<a name="idp1087392"></a>
## Description

**API Enhancement. ** This API is available as of version 3.7.1 and accommodates recipients with active SMS fields.

This API is used to add recipients to an api-triggered mailing. For more detail about this API see [Chapter 11, *Triggered Mailings*](rest.triggered.mailing.php "Chapter 11. Triggered Mailings") .

```
PUT /v3.7/mailing/trigger?orgid=2&mid=1
Content-Type: application/json

[{email: "user@domain.com", firstname: "John", lastname: "Doe", context: "XYZ-123"}]
```
**Supported Actions**

*   When a PUT or POST is invoked, the specified mailing will have the specified recipient (or batch of recipients, as detailed above) added to the list of recipients that will be mailed.

    New recipients will be sent messages the next time the mailing is invoked.

    On success, this API returns an array listing the IDs of recipients added to the mailing. On error, an error response is returned.

| [Prev](rest.List_Unarchivev37.php)  | [Up](rest.version37.php) |  [Next](rest.Recipientv37.php) |
| List_Unarchivev37  | [Table of Contents](index.php) |  Recipientv37 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)