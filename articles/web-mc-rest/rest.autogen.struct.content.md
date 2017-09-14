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

| 25.5. content |
| [Prev](rest.autogen.struct.content.sms3.7.php)  | Chapter 25. REST Structs |  [Next](rest.autogen.struct.content3.7.php) |

## 25.5. content

*   **name** – A short, memorable name for this piece of content.

    This property is not a key field. Its data type is `string`.

*   **cid** – Unique identifier for this Content.

    This property is a key field. Its data type is `int`.

*   **description** – A more detailed description for this Content.

    This property is not a key field. Its data type is `string`.

*   **spamscore** – The computed spam rating, as determined by SpamAssassin.

    This property is not a key field. This property is readonly. Its data type is `numeric`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

*   **isMaster** – Whether this content is a master template or a regular content.

    This property is not a key field. Its data type is `boolean`.

*   **metaData** – Stores additional metadata that is used by the web UI. The format of that metadata is not published at this time. If you modify (using this API), a content piece that was created via the web UI, then you must clear the metaData property.

    This property is not a key field. Its data type is `json`.

*   **usedInMailing** – Indicates whether the content has been used in a mailing (and thus cannot be altered) or not.

    This property is not a key field. This property is readonly. Its data type is `boolean`.

*   **status** – Indicates the status of the Content

    This property is not a key field. Its data type is `map`.

    For a description of this mapping see [Section 26.10, “recordstatustypes”](rest.autogen.map.recordstatustypes.php "26.10. recordstatustypes").

*   **createdDate** – Records when the content was created.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **modifiedDate** – Records when the content was last modified.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **html** – Holds the "text/html" portion of the content.

    This property is not a key field. Its data type is `string`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

*   **text** – Holds the "text/plain" portion of the content.

    This property is not a key field. Its data type is `string`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

*   **headers** – Holds additional headers for the content. This is an array of strings of the form: "X-Something: a value". It is valid for multiple headers with the same name to exist. If a header value contains 8-bit text, then the value will be encoded per RFC 2047 such that non-ASCII text will render correctly in MIME compliant MUA applications; this encoding is handled transparently by the API server, so you should only pass in UTF-8 and expect to receive UTF-8 text.

    This property is not a key field. Its data type is `string`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

*   **attachments** – MIME parts other than the text and html parts broken out above are enumerated here. The ordering is significant; the first element of this array will be the first attachment after the text and html portions.

    This property is not a key field. Its data type is `content.attachment`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

*   **macroHTMLJson** – Holds the parsed JSON data structure representaion of Content. The JSON data would contain parsed representation of all the Macros from the HTML part of the content. The Content Api would not return the macroHTMLJSON unless parseMacroHTML parameter is set to true.

    This property is not a key field. Its data type is `string`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

*   **macroTextJson** – Holds the parsed JSON data structure representaion of Content. The JSON data would contain parsed representation of all the Macros from the Text part of the content. The Content Api would not return the macroTextJSON unless either parseMacroText parameter is set to true.

    This property is not a key field. Its data type is `string`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

| [Prev](rest.autogen.struct.content.sms3.7.php)  | [Up](rest.autogen.structs.php) |  [Next](rest.autogen.struct.content3.7.php) |
| 25.4. content.sms 3.7  | [Table of Contents](index.php) |  25.6. content 3.7 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)