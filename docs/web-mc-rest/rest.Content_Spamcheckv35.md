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

| Content_Spamcheckv35 |
| [Prev](rest.Content_Previewv35.php)  | Chapter 23. Changes in Version 3.5 |  [Next](rest.Mailing_Archivev35.php) |

<a name="rest.Content_Spamcheckv35"></a>
## Name

Content_Spamcheckv35 — return a Spamcheck object for existing content

<a name="idp793408"></a>
## Description

For details of the Spamcheck object see [Section 25.27, “spamcheck 3.5”](rest.autogen.struct.spamcheck3.5.php "25.27. spamcheck 3.5").

## Supported Actions

*   The following actions are supported when issuing a GET request:.

    `GET /v3.5/content/spamcheck?orgid=2&cid=123&email=test@example.com`

    This API returns the spamcheck object associated with the preview identified by ID 123 and interpolated with test@example.com's data. If no such content exists, a 404 status will be returned. If no such contact exists, the preview will be generated with the systems default user data.

*   The following actions are supported when issuing a POST or PUT request.

    ### Note

    RFC822 content created using this API is only visible in the web UI if you post it as binary data. For example, when using curl, supply the --data-binary switch.

    POST/PUT either a EML or JSON content object.

    `PUT /v3.5/content/spamcheck?orgid=2&email=test@example.com`

    This API returns a spamcheck object with the results from checking a preview received from the POST/PUT data and interpolated with test@example.com's data. If no such contact exists, the preview will be generated with the systems default user data.

| [Prev](rest.Content_Previewv35.php)  | [Up](rest.version35.php) |  [Next](rest.Mailing_Archivev35.php) |
| Content_Previewv35  | [Table of Contents](index.php) |  Mailing_Archivev35 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)