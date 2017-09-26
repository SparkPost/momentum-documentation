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

| DBProcess |
| [Prev](rest.Mailing_Unarchivev35.php)  | Chapter 23. Changes in Version 3.5 |  [Next](rest.Mailing_Duplicatev35.php) |

<a name="rest.DBProcess"></a>
## Name

DBProcess — The DBProcess API allows enumeration, and termination of Database Processes in the Message Central system.

<a name="idp853104"></a>
## Description

### Note

This API was introduced in version 3.5 but uses version 1.0 syntax.

The DBProcess API allows enumeration, and termination of Database Processes in the Message Central system.

### Warning

Killing tasks is a last-resort and may leave some things in an indeterminate state. Only use this API on the advice of Technical Support

For details of the DBProcess object see [Section 25.7, “dbprocess”](rest.autogen.struct.dbprocess.php "25.7. dbprocess").

## Supported Actions

*   The orgid is a required parameter.

    The following actions are supported when issuing a GET request:

    `GET /v1.0/dbprocess`

    Enumerate db processes. This API returns an array of DBProcess objects based on the specified query restrictions.

    `GET /v1.0/dbprocess?procpid=4534`

    This API returns a DBProcess object representing the specified dbprocess id. Responds with a 404 error if the dbprocess does not exist.

*   PUT/POST operation is not supported.

*   The following actions are supported when issuing a DELETE request.

    `DELETE /v1.0/dbprocess?procpid=4534`

    In order to delete a dbprocess, you may issue the above DELETE request.

### Note

Fast processes may go unnoticed. Mailings, counts, and imports must be cancelled by the monitor. If a database process is killed through the process manager, it may get stuck on the monitor.

| [Prev](rest.Mailing_Unarchivev35.php)  | [Up](rest.version35.php) |  [Next](rest.Mailing_Duplicatev35.php) |
| Mailing_Unarchivev35  | [Table of Contents](index.php) |  Mailing_Duplicatev35 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)