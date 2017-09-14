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

| Mailing_Unarchivev35 |
| [Prev](rest.Mailing_Cancelv35.php)  | Chapter 23. Changes in Version 3.5 |  [Next](rest.DBProcess.php) |

<a name="rest.Mailing_Unarchivev35"></a>
## Name

Mailing_Unarchivev35 — The Mailing_Unarchive API unarchives the given mailing and returns its mailing ID

<a name="idp836320"></a>
## Description

### Note

This reference page was automatically generated from files found in the development branch. The action described here may not exist in generally available versions of Message Central and may change in behavior when it is generally available. Consult your vendor for definitive advice.

The Mailing_Unarchive API unarchives the given mailing and returns its mailing ID.

It returns null if it fails to unarchive the mailing.

## Supported Actions

*   The following actions are supported when issuing a POST or PUT request:

    `PUT /v3.5/mailing/unarchive?orgid=2&mid=123`

    Unarchive the mailing with the specified mailing ID. On success (status 200)return the mailing ID of unarchived mailing. On failure, an error is issued.

    `PUT /v3.5/mailing/unarchive?orgid=1&mid=2-10`

    Unarchives all the mailings in the specified range. On success an array containing the mailing IDs of unarchived mailings is returned.

    `PUT /v3.5/mailing/unarchive?orgid=1&mid=1,2,4,9-15`

    Unarchives all the mailing IDs passed including, in this case, 1,2,4 and mailings in the range 9 -15\. On success an array of unarchived mailing IDs is returned.

    `PUT /v3.5/mailing/unarchive?orgid=1&whereColName=mailingid&whereColValue=3`

    Unarchives the mailing specified by the `where` clause. Similar results can be achieved using the `extraWhereClause`.

    ### Note

    The user can pass both a mailing ID and a `where` clause or `extraWhereClause` but when a mailing ID is given the `where` clauses are ignored and only the mailings specified by the `mid` field are unarchived.

| [Prev](rest.Mailing_Cancelv35.php)  | [Up](rest.version35.php) |  [Next](rest.DBProcess.php) |
| Mailing_Cancelv35  | [Table of Contents](index.php) |  DBProcess |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)