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

| 25.11. list |
| [Prev](rest.autogen.struct.link.php)  | Chapter 25. REST Structs |  [Next](rest.autogen.struct.listtag.php) |

## 25.11. list

Message Central uses Lists to manage query criteria both for targeting recipients and for segmentation. The list objects exposed via the REST API contain two (possibly three!) representations of the criteria. For targeting purposes, the List object holds a SQL WHERE clause. For segmentation purposes, it also contains a Perl expression. The Message Central web UI also stores a third representation, which is a structured data object from which it is able to create the SQL and Perl representations.

*   **lid** – Unique ID of the List.

    This property is a key field. Its data type is `int`.

*   **name** – The name of the List.

    This property is not a key field. Its data type is `string`.

*   **description** – A more detailed description for the List.

    This property is not a key field. Its data type is `string`.

*   **class** – The List Class, indicates how the list was created - created by core WebUI, created by "api" , etc. The Class , can be one of: 'core-ui', 'loader', 'customer-ui', 'direct-access', 'api' If omitted during creation, it will be set to 'api'.

    This property is not a key field. Its data type is `map`. The default value for this property is `5`.

    For a description of this mapping see [Section 26.11, “targetcriteriaclass”](rest.autogen.map.targetcriteriaclass.php "26.11. targetcriteriaclass").

*   **type** – The List Type, indicates type of the list The Type, can be one of: 'mailing', 'seed', 'test' If omitted during creation, it will be set to 'mailing'.

    This property is not a key field. Its data type is `map`. The default value for this property is `1`.

    For a description of this mapping see [Section 26.12, “targetcriteriatypes”](rest.autogen.map.targetcriteriatypes.php "26.12. targetcriteriatypes").

*   **count** – This is a Read-only field Holds an approximate count of the number of recipients that list targets, as of countEndDate.

    This property is not a key field. This property is readonly. Its data type is `int`.

*   **countStartDate** – The time at which the last count started. This is a Read-only field.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **countEndDate** – The time at which the last count completed. This is a Read-only field.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **countError** – The error message (if any) that was encountered when a count was attempted. An error has occurred when the count is a negative number. This is a Read-only field.

    This property is not a key field. This property is readonly. Its data type is `string`.

*   **buildSQL** – The SQL compatible criterion for selecting Recipients. If this is null, the perl property must be set.

    This property is not a key field. Its data type is `string`.

*   **generateCount** – The boolean variable is used to say if a count should be started on the Count once it is created. Can be set only when List is being created.

    This property is not a key field. Its data type is `boolean`.

*   **isTarget** – The boolean variable indicates whether the List is used for targeting or not. This is a readonly field.

    This property is not a key field. This property is readonly. Its data type is `boolean`.

*   **isSegment** – The boolean variable indicates whether the List is a segment or not. This is a readonly field.

    This property is not a key field. This property is readonly. Its data type is `boolean`.

*   **usedInMailing** – The boolean variable indicates whether the List was used for targeting in a mailing or not This value would be used to decide if the application should allow deleting of List or Not A List which has already been used in a mailing can not be deleted.

    This property is not a key field. This property is readonly. Its data type is `boolean`.

*   **parent** – The ID of the parent List, If this is part of a nested set of criteria, the parent property references the container, otherwise it is null or missing.

    This property is not a key field. Its data type is `listid`.

*   **webUIData** – Holds structured data that has meaning to the webUI, but it otherwise unspecified and subject to change. See comments above. You should set it to null when you change a list via the API.

    This property is not a key field. Its data type is `string`.

*   **perl** – Holds the perl representation of the criterion. This must be semantically equivalent to the buildSQL criterion. You may set this to null to indicate that this List cannot be used for segmentation; in that case buildSQL must be set. Example: "$gender eq 'm'" .

    This property is not a key field. Its data type is `string`.

*   **lastUsedDate** – The date when this was used last for targeting in a mailing.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **createdDate** – The date when the list record is created.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **modifiedDate** – The date when the list record is modified.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

| [Prev](rest.autogen.struct.link.php)  | [Up](rest.autogen.structs.php) |  [Next](rest.autogen.struct.listtag.php) |
| 25.10. link  | [Table of Contents](index.php) |  25.12. listtag |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)