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

| Mailing_Archivev35 |
| [Prev](rest.Content_Spamcheckv35.php)  | Chapter 23. Changes in Version 3.5 |  [Next](rest.Mailing_Cancelv35.php) |

<a name="rest.Mailing_Archivev35"></a>
## Name

Mailing_Archivev35 — The Mailing_Archive API archives the given mailing and returns its mailing ID

<a name="idp805440"></a>
## Description

### Note

This reference page was automatically generated from files found in the development branch. The action described here may not exist in generally available versions of Message Central and may change in behavior when it is generally available. Consult your vendor for definitive advice.

The Mailing_Archive API archives the given mailing and returns its mailing ID or IDs.

As with Cancel, this API returns success when applied to mailings in the Edit, Ready, Completed, or Archive states. If a mailing in the Edit or Completed state is archived then unarchived, it returns to its former status. Archiving of a mailing in the Ready state should not prevent the mailing from being delivered.

It returns null if it fails to archive the mailing. Errors are generated by the Archive action if there are invalid mailing or organization ids. The former returns a response "no such mailing" and name:INVALID_MAILING, while the latter returns "Invalid schema name" and name:"Database Error".

## Supported Actions

*   The following actions are supported when issuing a POST or PUT request:

    `PUT /v3.5/mailing/archive?orgid=2&mid=123`

    Archives the mailing with the specified mailing ID. On success (status 200) it returns the mailing ID of the archived mailing. An error is issued if it fails.

    `PUT /v3.5/mailing/archive?orgid=1&mid=2-10`

    Archives all the mailings in the specified range. This API returns an array containing the mailing IDs of successfully archived mailings.

    `PUT /v3.5/mailing/archive?orgid=1&mid=1,2,4,9-15`

    Archives all the specified mailing IDs including, in this case, 1,2,4 and mailings in the 9 -15 range. This API returns an array with mailing IDs of the successfully archived mails.

    `PUT /v3.5/mailing/archive?orgid=1&whereColName=mailingid&whereColValue=3`

    Archives the mailing specified in the `where` clause. Similar results can be achieved using the `extraWhereClause`.

    ### Note

    The user can pass both a mailing ID and a `where` clause or `extraWhereClause` but when a mailing ID is given the `where` clauses are ignored and only the mailings specified by the `mid` field are archived.

| [Prev](rest.Content_Spamcheckv35.php)  | [Up](rest.version35.php) |  [Next](rest.Mailing_Cancelv35.php) |
| Content_Spamcheckv35  | [Table of Contents](index.php) |  Mailing_Cancelv35 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)