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

| 25.17. preview 3.5 |
| [Prev](rest.autogen.struct.org.php)  | Chapter 25. REST Structs |  [Next](rest.autogen.struct.preview3.7.php) |

## 25.17. preview 3.5

*   **headers** – Holds additional headers for the content. This is an array of strings of the form: "X-Something: a value". It is valid for multiple headers with the same name to exist. If a header value contains 8-bit text, then the value will be encoded per RFC 2047 such that non-ASCII text will render correctly in MIME compliant MUA applications; this encoding is handled transparently by the API server, so you should only pass in UTF-8 and expect to receive UTF-8 text.

    This property is not a key field. Its data type is `string`.

*   **html** – Holds the "text/html" portion of the content.

    This property is not a key field. Its data type is `string`.

*   **text** – Holds the "text/plain" portion of the content.

    This property is not a key field. Its data type is `string`.

*   **spamcheck** – Holds the Spamcheck object

    This property is not a key field. Its data type is `spamcheck`.

*   **attachments** – MIME parts other than the text and html parts broken out above are enumerated here. The ordering is significant; the first element of this array will be the first attachment after the text and html portions.

    This property is not a key field. Its data type is `content.attachment`.

| [Prev](rest.autogen.struct.org.php)  | [Up](rest.autogen.structs.php) |  [Next](rest.autogen.struct.preview3.7.php) |
| 25.16. org  | [Table of Contents](index.php) |  25.18. preview 3.7 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)