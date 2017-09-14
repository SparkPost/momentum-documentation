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

| Mailing_Suspendv35 |
| [Prev](rest.Mailing_Duplicatev35.php)  | Chapter 23. Changes in Version 3.5 |  [Next](rest.version37.php) |

<a name="rest.Mailing_Suspendv35"></a>
## Name

Mailing_Suspendv35 — The Mailing_Suspend API suspends the given mailing and returns an value greater than 1 if successful.

<a name="idp880336"></a>
## Description

The Mailing_Suspend API suspends the given mailing and returns a value greater than `1` if successful.

On failure this function returns `0`.

## Supported Actions

*   The following actions are supported when issuing a POST or PUT request:.

    `PUT /v3.5/mailing/suspend?orgid=2&mid=123&suspend=true`

    Suspends the mailing with mailingid provided in the input parameters. mailingid of suspended mailing on success (status 200), issues an error if it fails.

    `PUT /v3.5/mailing/suspend?orgid=2&mid=123&suspend=false`

    Resumes a previously suspended mailing with mailingid provided in the input parameters. mailingid of resumed mailing on success (status 200), issues an error if it fails.

    The PUT/POST payload is expected to be either valid mailing object or the required parameters orgid , mid, suspended, either as JSON payload or as HTML-form style parameters.

    It is not possible to issue a GET on /v3.5/mailing/suspend. It is not possible to issue a DELETE on /v3.5/mailing/suspend.

| [Prev](rest.Mailing_Duplicatev35.php)  | [Up](rest.version35.php) |  [Next](rest.version37.php) |
| Mailing_Duplicatev35  | [Table of Contents](index.php) |  Chapter 24. Changes in Version 3.7 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)