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

| Chapter 23. Changes in Version 3.5 |
| [Prev](rest.data.integration.reporting.php)  |   |  [Next](rest.Content_Previewv35.php) |

## Chapter 23. Changes in Version 3.5

**Table of Contents**

<dl class="toc">

<dt>[Content_Previewv35](rest.Content_Previewv35.php) — return a preview object for existing content</dt>

<dt>[Content_Spamcheckv35](rest.Content_Spamcheckv35.php) — return a Spamcheck object for existing content</dt>

<dt>[Mailing_Archivev35](rest.Mailing_Archivev35.php) — The Mailing_Archive API archives the given mailing and returns its mailing ID</dt>

<dt>[Mailing_Cancelv35](rest.Mailing_Cancelv35.php) — The Mailing_Cancel API cancels the given mailing and on success returns `0`.</dt>

<dt>[Mailing_Unarchivev35](rest.Mailing_Unarchivev35.php) — The Mailing_Unarchive API unarchives the given mailing and returns its mailing ID</dt>

<dt>[DBProcess](rest.DBProcess.php) — The DBProcess API allows enumeration, and termination of Database Processes in the Message Central system.</dt>

<dt>[Mailing_Duplicatev35](rest.Mailing_Duplicatev35.php) — The Mailing_Duplicate API creates a duplicate of the given mailing returns the mailing id of the newly created mailing.</dt>

<dt>[Mailing_Suspendv35](rest.Mailing_Suspendv35.php) — The Mailing_Suspend API suspends the given mailing and returns an value greater than 1 if successful.</dt>

</dl>

The REST API has been expanded in Message Central version 3.5\. The following APIs are now available:

*   `/v3.5/content/archive` – See [Mailing_Archivev35](rest.Mailing_Archivev35.php "Mailing_Archivev35")

*   `/v3.5/content/spamcheck` – See [Content_Spamcheckv35](rest.Content_Spamcheckv35.php "Content_Spamcheckv35")

*   `/v3.5/content/preview` – See [Content_Previewv35](rest.Content_Previewv35.php "Content_Previewv35")

*   `/v3.5/mailing/cancel` – See [Mailing_Cancelv35](rest.Mailing_Cancelv35.php "Mailing_Cancelv35")

*   `/v3.5/mailing/unarchive` – See [Mailing_Unarchivev35](rest.Mailing_Unarchivev35.php "Mailing_Unarchivev35")

*   `/v3.5/mailing/duplicate` – See [Mailing_Duplicatev35](rest.Mailing_Duplicatev35.php "Mailing_Duplicatev35")

*   `/v3.5/mailing/suspend` – See [Mailing_Suspendv35](rest.Mailing_Suspendv35.php "Mailing_Suspendv35")

The spamcheck and preview `content` APIs return, respectively, spamcheck and preview objects. These objects are defined at [Section 25.27, “spamcheck 3.5”](rest.autogen.struct.spamcheck3.5.php "25.27. spamcheck 3.5") and [Section 25.17, “preview 3.5”](rest.autogen.struct.preview3.5.php "25.17. preview 3.5"). The cancel API simply returns an integer.

The cancel, duplicate, archive, unarchive and suspend `mailing` APIs perform the operations their names would suggest.

### Note

To invoke the new APIs you must specify `v3.5` or `v3.7` rather than `v1.0`.

| [Prev](rest.data.integration.reporting.php)  |   |  [Next](rest.Content_Previewv35.php) |
| Chapter 22. Data Integration: Reporting  | [Table of Contents](index.php) |  Content_Previewv35 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)