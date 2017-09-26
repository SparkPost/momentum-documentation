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

| 25.26. report.segmentstatistics |
| [Prev](rest.autogen.struct.report.mailingsummary.php)  | Chapter 25. REST Structs |  [Next](rest.autogen.struct.spamcheck3.5.php) |

## 25.26. report.segmentstatistics

*   **mid** – The mailing ID.

    This property is not a key field. Its data type is `int`.

*   **segmentid** – The id of the segment.

    This property is not a key field. Its data type is `int`.

*   **name** – The name of the segment.

    This property is not a key field. Its data type is `string`.

*   **listcount** – The total count of messages for the lists associated with the mailing.

    This property is not a key field. Its data type is `int`.

*   **generated** – The number of messages that were (are in the process of being) generated.

    This property is not a key field. Its data type is `int`.

*   **suppressed** – The number of messages that were not sent due to suppression.

    This property is not a key field. Its data type is `int`.

*   **invalidaddressed** – The number of messages that were not sent due to invalid address.

    This property is not a key field. Its data type is `int`.

*   **delivered** – The number of messages that were delivered.

    This property is not a key field. Its data type is `int`.

*   **bounced** – The number of messages that failed to be delivered.

    This property is not a key field. Its data type is `int`.

*   **bounced_hard** – The number of non-deliverable messages classified as "hard" bounces.

    This property is not a key field. Its data type is `int`.

*   **bounced_soft** – The number of non-deliverable messages classified as "soft" bounces.

    This property is not a key field. Its data type is `int`.

*   **bouncecode** – The bounce code associated with a bounce.

    This property is not a key field. Its data type is `map`.

    For a description of this mapping see [Section 26.1, “bouncetypes”](rest.autogen.map.php#rest.autogen.map.bouncetypes "26.1. bouncetypes").

*   **opened** – The number of messages that were opened. This does not count the same message being opened multiple times; it is the open count by unique recipient.

    This property is not a key field. Its data type is `int`.

*   **opened_gross** – The total number of opens, including multiple opens by the same recipient.

    This property is not a key field. Its data type is `int`.

*   **first_open** – The time when the first message was opened.

    This property is not a key field. Its data type is `datetime`.

*   **last_open** – The time when a message was most recently opened.

    This property is not a key field. Its data type is `datetime`.

*   **clicked_total** – The total number of clicks, including multiple clicks by the same recipient.

    This property is not a key field. Its data type is `int`.

*   **clicked** – The click count, by unique recipient, not counting duplicates for a given recipient.

    This property is not a key field. Its data type is `int`.

*   **clicked_gross** – The total number of uniques clicks by all users, Equivalent to raw clicks.

    This property is not a key field. Its data type is `int`.

*   **first_click** – The time when the first click was recorded.

    This property is not a key field. Its data type is `datetime`.

*   **last_click** – The time of the most recent click.

    This property is not a key field. Its data type is `datetime`.

*   **unsubscribed** – The total number of unsubscribe links clicked.

    This property is not a key field. Its data type is `int`.

*   **blocked** – The mail blocks, the number of mails that are blocked. blocked message are those that were bounced and classified with bounce codes 50-54 (inclusive).

    This property is not a key field. Its data type is `int`.

*   **restricted** –

    This property is not a key field. Its data type is `int`.

*   **domainid** – The domain id.

    This property is not a key field. Its data type is `int`.

*   **domainname** – The domain name.

    This property is not a key field. Its data type is `string`.

*   **linkid** – If you requested that the data be grouped by link, the linkID

    This property is not a key field. Its data type is `int`.

*   **linkname** – If you requested that the data be grouped by link, the link name

    This property is not a key field. Its data type is `string`.

*   **linkurl** – If you requested that the data be grouped by link, the link URL

    This property is not a key field. Its data type is `string`.

*   **approxcount** –

    This property is not a key field. Its data type is `int`.

*   **approxcountdate** –

    This property is not a key field. Its data type is `datetime`.

*   **startDate** –

    This property is not a key field. Its data type is `datetime`.

*   **endDate** –

    This property is not a key field. Its data type is `datetime`.

| [Prev](rest.autogen.struct.report.mailingsummary.php)  | [Up](rest.autogen.structs.php) |  [Next](rest.autogen.struct.spamcheck3.5.php) |
| 25.25. report.mailingsummary  | [Table of Contents](index.php) |  25.27. spamcheck 3.5 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)