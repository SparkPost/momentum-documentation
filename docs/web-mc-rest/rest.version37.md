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

| Chapter 24. Changes in Version 3.7 |
| [Prev](rest.Mailing_Suspendv35.php)  |   |  [Next](rest.Contentv37.php) |

## Chapter 24. Changes in Version 3.7

**Table of Contents**

<dl class="toc">

<dt>[Contentv37](rest.Contentv37.php) — Content objects represent message content</dt>

<dt>[Content_Archivev37](rest.Content_Archivev37.php) — The Content_Archive API archives the specified content and returns its contentid.</dt>

<dt>[Content_Duplicatev37](rest.Content_Duplicatev37.php) — This API duplicates existing content</dt>

<dt>[Content_Previewv37](rest.Content_Previewv37.php) — This API is used to preview content</dt>

<dt>[Content_Spamcheckv37](rest.Content_Spamcheckv37.php) — This API returns a Spamcheck object</dt>

<dt>[Content_Unarchivev37](rest.Content_Unarchivev37.php) — The Content_Unarchive API unarchives the specified content and returns its contentid.</dt>

<dt>[List_Archivev37](rest.List_Archivev37.php) — This API archives the specified list and returns its list ID</dt>

<dt>[List_Duplicatev37](rest.listv375.php) — Use this API to create duplicates of a List</dt>

<dt>[List_Unarchivev37](rest.List_Unarchivev37.php) — This API unarchives the specified list and returns its list ID</dt>

<dt>[Mailing_Triggerv37](rest.Mailing_Triggerv37.php) — This API is used to add recipients to an api-triggered mailing</dt>

<dt>[Recipientv37](rest.Recipientv37.php) — Use this API to enumerate, create and modify Recipients</dt>

</dl>

The REST API has been expanded in Message Central version 3.7\. The following APIs are now available:

*   `/v3.7/content` – See [Contentv37](rest.Contentv37.php "Contentv37")

*   `/v3.7/content/archive` – See [Content_Archivev37](rest.Content_Archivev37.php "Content_Archivev37")

*   `/v3.7/content/duplicate` – See [Content_Duplicatev37](rest.Content_Duplicatev37.php "Content_Duplicatev37")

*   `/v3.7/content/preview` – See [Content_Previewv37](rest.Content_Previewv37.php "Content_Previewv37")

*   `/v3.7/content/spamcheck` – See [Content_Spamcheckv37](rest.Content_Spamcheckv37.php "Content_Spamcheckv37")

*   `/v3.7/content/unarchive` – See [Content_Unarchivev37](rest.Content_Unarchivev37.php "Content_Unarchivev37")

*   `/v3.7/list/archive` – See [List_Archivev37](rest.List_Archivev37.php "List_Archivev37")

*   `/v3.7/list/unarchive` – See [List_Unarchivev37](rest.List_Unarchivev37.php "List_Unarchivev37")

*   `/v3.7/list/duplicate` – See [List_Duplicatev37](rest.listv375.php "List_Duplicatev37")

### Note

To invoke a version 3.7 API you must specify `v3.7` rather than `v1.0` or `v3.5`.

| [Prev](rest.Mailing_Suspendv35.php)  |   |  [Next](rest.Contentv37.php) |
| Mailing_Suspendv35  | [Table of Contents](index.php) |  Contentv37 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)