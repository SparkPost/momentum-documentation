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

| 25.14. mailing.segment |
| [Prev](rest.autogen.struct.mailing.lists.php)  | Chapter 25. REST Structs |  [Next](rest.autogen.struct.mailing.php) |

## 25.14. mailing.segment

A segment is used to assign content to a subset (or perhaps all) recipients in a mailing.

*   **name** – label for this segment.

    This property is not a key field. Its data type is `string`.

*   **content** – references the associated content; if it is an integer, it is assumed to be the content ID, if it is a string, it is assumed to be the content name.

    This property is not a key field. Its data type is `contentid`.

*   **list** – most mailings will set the "list" property; when it is set, it identifies the list by ID or name. The list indicates the criteria that are used to determine whether this segment is applicable. For example, if you have a list that targets the "male" demographic, you might reference that here.

    This property is not a key field. Its data type is `listid`.

*   **size** – Instead of using "list" for segmentation, you may opt to segment by percentages. This type of segmentation works by determining a random number from 1-100 for each recipient in this mailing. If this number is less than or equal to the value of the "size" property, then this segment is selected. Otherwise the number is compared with the "size" property of subsequent segments until a match is found. Percentage based segmentation is enabled by setting the size to a string of the form "X%d" where X is an integer value. For example, "20%" means that 20% of the recipients will be associated with this segment. If the mailing type is "ab-split", it is invalid to set size to a percentage value; see below. For mailings of type "ab-split", it is invalid to populate the "list" property or to set the size property to a percentage value. Instead, "ab-split" mailings are used to select A/B testing. For A/B testing, the "size" property indicates the "ab-split" size for the segment. The system will generate messages up to the specified size limit and wait for the "splitperiod" interval to elapse. After this time, the segment with the most clicks or opens (depending on the "rule" property) will be selected as the winner, and the rest of the mailing will be sent using the winning segment (and its associated content). A/B Split mailings can have any number of segments defined, so you may perform A/B/C testing by defining three segments, or A/B/C/D testing by defining four and so on.

    This property is not a key field. Its data type is `string`.

| [Prev](rest.autogen.struct.mailing.lists.php)  | [Up](rest.autogen.structs.php) |  [Next](rest.autogen.struct.mailing.php) |
| 25.13. mailing.lists  | [Table of Contents](index.php) |  25.15. mailing |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)