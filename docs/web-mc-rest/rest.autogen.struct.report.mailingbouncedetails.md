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

| 25.22. report.mailingbouncedetails |
| [Prev](rest.autogen.struct.recipient3.7.php)  | Chapter 25. REST Structs |  [Next](rest.autogen.struct.report.mailingevents.php) |

## 25.22. report.mailingbouncedetails

Instances of the following object are returned from the bouncedetails API.

*   **domain** – The applicable domain.

    This property is not a key field. Its data type is `string`.

*   **bouncecode** – The underlying bounce code.

    This property is not a key field. Its data type is `int`.

*   **bouncetype** – A human readable interpretation of the bounce code.

    This property is not a key field. Its data type is `string`.

*   **count** – The number of messages that bounced with this bounce code for this domain.

    This property is not a key field. Its data type is `int`.

| [Prev](rest.autogen.struct.recipient3.7.php)  | [Up](rest.autogen.structs.php) |  [Next](rest.autogen.struct.report.mailingevents.php) |
| 25.21. recipient 3.7  | [Table of Contents](index.php) |  25.23. report.mailingevents |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)