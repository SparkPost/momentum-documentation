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

| List_Unarchivev37 |
| [Prev](rest.listv375.php)  | Chapter 24. Changes in Version 3.7 |  [Next](rest.Mailing_Triggerv37.php) |

<a name="rest.List_Unarchivev37"></a>
## Name

List_Unarchivev37 — This API unarchives the specified list and returns its list ID

<a name="idp1069552"></a>
## Description

**API Enhancement. ** This feature is available as of version 3.7.

The List_Unarchive API unarchives the given list and returns its list ID. Upon failure, this API returns `null`. The `orgid` is a required parameter. If *only* an orgid is passed, an exception is thrown.

## Supported Actions

*   The following actions are supported when issuing a POST or PUT request:

    `PUT /v3.7/list/unarchive?orgid=2&lid=123`

    This API unarchives the list specified by the `lid` parameter. On success (indicated by the status code, 200), it returns the list ID. On failure, an error is returned.

    `PUT /v3.7/list/unarchive?orgid=1&lid=1,2,4,9,15`

    This API unarchives all the list IDs passed to it. On success it returns an array of the list IDs of the successfully unarchived lists.

    If an ID is invalid, nothing will be unarchived and an error will be issued identifying the invalid ID.

    `PUT /v3.7/list/archive?orgid=1&whereColName='targetcriteriaid'&whereColValue=3`

    This API unarchives the list selected by the specified WHERE clause and, optionally, the extraWhereClause. Note that the list ID field is the database column named `targetcriteriaid`.

    *Note*: The user can pass both a list ID or IDs and a WHERE or an extraWhereClause. When list IDs are passed to this API the WHERE clause(s) are ignored.

<a name="idp1082064"></a>
## See Also

[Chapter 14, *List*](rest.list.object.php "Chapter 14. List")

| [Prev](rest.listv375.php)  | [Up](rest.version37.php) |  [Next](rest.Mailing_Triggerv37.php) |
| List_Duplicatev37  | [Table of Contents](index.php) |  Mailing_Triggerv37 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)