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

| 25.3. content.attachment |
| [Prev](rest.autogen.struct.campaign.php)  | Chapter 25. REST Structs |  [Next](rest.autogen.struct.content.sms3.7.php) |

## 25.3. content.attachment

Represents an attachment within the "attachments" property of its containing "Content" object.

*   **id** – Attachments are numbered starting from 1\. The numbers are scoped to the containing Content object, meaning that multiple attachments may exist with id=1, but they are attachments to different content objects.

    This property is not a key field. This property is readonly. Its data type is `int`.

*   **type** – The MIME content-type for this attachment. This is typically a string of the form "image/jpeg", listing just the MIME-type, but the "text/plain; charset=iso-8859-1" form is acceptable. If the attachment is a text type and the charset is omitted from this value, the composed MIME message will indicate that it is UTF-8, as that is the system default. You may use any charset you wish, but it is your responsibility to ensure that the value of the "binary" property, when base64 decoded, is encoded using that character set, and that the charset portion of the "type" property is consistent with that choice.

    This property is not a key field. Its data type is `string`.

*   **name** – The filename of the attachment (for example, "document.doc"). This is inserted into Content-Type and Content-Disposition headers.

    This property is not a key field. Its data type is `string`.

*   **headers** – Holds additional headers for this attachment. This is an array of strings of the form: "X-Something: a value". It is valid for multiple headers with the same name to exist, but this is rather rare for attachments.

    This property is not a key field. Its data type is `string`.

*   **binary** – If the Content object was requested with binary=true, then the binary field is present and contains the binary data from that part of the message, represented here as a base64 encoded string. When updating a Content object, if the binary property is not present, then the payload portion of the attachment is not modified or removed. The string MUST be a base64 encoded string. This base64 content is used as-is in the generated attachment (the system will insert a Content-Transfer-Encoding header to indicate this). You may use any charset you wish, but it is your responsibility to ensure that the value of the "binary" property, when base64 decoded, is encoded using that character set, and that the charset portion of the "type" property is consistent with that choice.

    This property is not a key field. Its data type is `string`.

| [Prev](rest.autogen.struct.campaign.php)  | [Up](rest.autogen.structs.php) |  [Next](rest.autogen.struct.content.sms3.7.php) |
| 25.2. campaign  | [Table of Contents](index.php) |  25.4. content.sms 3.7 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)