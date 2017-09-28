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

| Recipientv37 |
| [Prev](rest.Mailing_Triggerv37.php)  | Chapter 24. Changes in Version 3.7 |  [Next](rest.autogen.structs.php) |

<a name="rest.Recipientv37"></a>
## Name

Recipientv37 — Use this API to enumerate, create and modify Recipients

<a name="idp1098192"></a>
## Description

**API Enhancement. ** This API is available as of version 3.7.1 and is used with the 3.7 recipient as defined at [Section 25.21, “recipient 3.7”](rest.autogen.struct.recipient3.7.php "25.21. recipient 3.7").

The Recipient API allows enumeration, creation and modification of Recipients in Message Central.

**Supported Actions**

*   The following actions are supported when issuing a GET request:

    `GET /v3.7/recipient?orgid=2`

    Enumerate recipients. Returns an array of Recipient objects based on the specified query restrictions.

    `GET /v3.7/recipient?orgid=2&rid=123`

    Returns a Recipient object representing the specified recipient id. Responds with a 404 error if the recipient does not exist. You may also add "full=true" as a parameter to populate the profileData property of the recipient object.

    `GET /v3.7/recipient?orgid=2&email=john.doe@testdomain.com`

    Returns a Recipient object representing the recipient whose email exactly matches the email parameter. Responds with a 404 error if the recipient does not exist. You may also add "full=true" as a parameter to get a more detailed recipient object.

*   The follow actions are supported when issuing a POST or PUT request:

    `PUT /v3.7/recipient?orgid=2&rid=123`

    Updates the specified recipient. Returns recipient id on success (status 200), issues an error if it fails.

    `PUT /v3.7/recipient?orgid=2`

    Creates a new recipient, returns its recipient id on success (status 200), issues an error if it fails.

    The PUT/POST payload is expected to be a valid Recipient object, either as JSON payload or as HTML-form style parameters.

| [Prev](rest.Mailing_Triggerv37.php)  | [Up](rest.version37.php) |  [Next](rest.autogen.structs.php) |
| Mailing_Triggerv37  | [Table of Contents](index.php) |  Chapter 25. REST Structs |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)