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

| REST API for Message Central 3.x |
|   |   |  [Next](rest.api.php) |

## REST API for Message Central 3.x

### Message Systems, Inc.

Copyright © 2010-2014 Message Systems, Inc.

<a name="idp146720"></a>

Confidential & Proprietary.

**Abstract**

This book documents the REST API for Message Central 3.0 and higher.

Document generated on: 2017-Aug-09

* * *

**Table of Contents**

<dl class="toc">

<dt>[1\. The REST API](rest.api.php)</dt>

<dt>[2\. Accessing the API](rest.accessing.php)</dt>

<dd>

<dl>

<dt>[2.1\. Security](rest.accessing.php#rest.security)</dt>

<dt>[2.2\. LDAP and The REST API](rest.security.ldap.php)</dt>

<dt>[2.3\. Accessing with SSL](rest.accessing.ssl.php)</dt>

</dl>

</dd>

<dt>[3\. Versioning](rest.versioning.php)</dt>

<dt>[4\. Common HTTP Status/Response Codes](rest.response.codes.php)</dt>

<dt>[5\. Authentication](rest.authentication.php)</dt>

<dd>

<dl>

<dt>[5.1\. HTTP Digest Authentication](rest.authentication.php#rest.digest.authentication)</dt>

</dl>

</dd>

<dt>[6\. Roles, Permissions and Security](rest.roles.php)</dt>

<dt>[7\. Using the API](rest.using.php)</dt>

<dd>

<dl>

<dt>[7.1\. Requests](rest.using.php#rest.using.requests)</dt>

<dt>[7.2\. HTTP Methods](rest.http.methods.php)</dt>

<dt>[7.3\. cURL as a Testing Tool](rest.curl.php)</dt>

<dt>[7.4\. Input Parameters](rest.input.parameters.php)</dt>

<dt>[7.5\. Response Formats](rest.response.formats.php)</dt>

<dt>[7.6\. General Conventions](rest.conventions.php)</dt>

<dt>[7.7\. Query Restrictions](rest.query.restrictions.php)</dt>

</dl>

</dd>

<dt>[8\. Orgs](rest.orgs.object.php)</dt>

<dt>[9\. Campaigns](rest.campaigns.php)</dt>

<dt>[10\. Mailing](rest.mailing.overview.php)</dt>

<dt>[11\. Triggered Mailings](rest.triggered.mailing.php)</dt>

<dt>[12\. Recipients](rest.recipients.overview.php)</dt>

<dd>

<dl>

<dt>[12.1\. Updating Recipients](rest.recipients.overview.php#rest.recipients.update)</dt>

<dt>[12.2\. The `email` Field](rest.recipients.email.php)</dt>

</dl>

</dd>

<dt>[13\. ProfileField](rest.ProfileField.php)</dt>

<dt>[14\. List](rest.list.object.php)</dt>

<dt>[15\. ListTag](rest.ListTag.php)</dt>

<dt>[16\. Content](rest.content.overview.php)</dt>

<dt>[17\. Assets](rest.Assests.php)</dt>

<dt>[18\. Links](rest.links.php)</dt>

<dt>[19\. Reports](rest.reporting.php)</dt>

<dd>

<dl>

<dt>[19.1\. Reporting: Mailing Statistics](rest.reporting.php#idp608256)</dt>

<dt>[19.2\. Report: Bounce Breakdown](rest.report.bounce.breakdown.php)</dt>

<dt>[19.3\. Report_Mailing_Summary](rest.Report_Mailing_Summary.php)</dt>

</dl>

</dd>

<dt>[20\. Accessing External Data](rest.external.data.php)</dt>

<dd>

<dl>

<dt>[20.1\. Creating Mass Mailings](rest.external.data.php#rest.external.data.mass.mailings)</dt>

<dt>[20.2\. External Data: Overview](rest.external.data.overview.php)</dt>

<dt>[20.3\. Retention of External Data](rest.external.data.retention.php)</dt>

</dl>

</dd>

<dt>[21\. Data Drivers](rest.data.integration.php)</dt>

<dd>

<dl>

<dt>[21.1\. Mailing Data: Accessing External Data](rest.data.integration.php#rest.mailing.data)</dt>

</dl>

</dd>

<dt>[22\. Data Integration: Reporting](rest.data.integration.reporting.php)</dt>

<dt>[23\. Changes in Version 3.5](rest.version35.php)</dt>

<dd>

<dl>

<dt>[Content_Previewv35](rest.Content_Previewv35.php) — return a preview object for existing content</dt>

<dt>[Content_Spamcheckv35](rest.Content_Spamcheckv35.php) — return a Spamcheck object for existing content</dt>

<dt>[Mailing_Archivev35](rest.Mailing_Archivev35.php) — The Mailing_Archive API archives the given mailing and returns its mailing ID</dt>

<dt>[Mailing_Cancelv35](rest.Mailing_Cancelv35.php) — The Mailing_Cancel API cancels the given mailing and on success returns `0`.</dt>

<dt>[Mailing_Unarchivev35](rest.Mailing_Unarchivev35.php) — The Mailing_Unarchive API unarchives the given mailing and returns its mailing ID</dt>

<dt>[DBProcess](rest.DBProcess.php) — The DBProcess API allows enumeration, and termination of Database Processes in the Message Central system.</dt>

<dt>[Mailing_Duplicatev35](rest.Mailing_Duplicatev35.php) — The Mailing_Duplicate API creates a duplicate of the given mailing returns the mailing id of the newly created mailing.</dt>

<dt>[Mailing_Suspendv35](rest.Mailing_Suspendv35.php) — The Mailing_Suspend API suspends the given mailing and returns an value greater than 1 if successful.</dt>

</dl>

</dd>

<dt>[24\. Changes in Version 3.7](rest.version37.php)</dt>

<dd>

<dl>

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

</dd>

<dt>[25\. REST Structs](rest.autogen.structs.php)</dt>

<dd>

<dl>

<dt>[25.1\. assets](rest.autogen.structs.php#rest.autogen.struct.assets)</dt>

<dt>[25.2\. campaign](rest.autogen.struct.campaign.php)</dt>

<dt>[25.3\. content.attachment](rest.autogen.struct.content.attachment.php)</dt>

<dt>[25.4\. content.sms 3.7](rest.autogen.struct.content.sms3.7.php)</dt>

<dt>[25.5\. content](rest.autogen.struct.content.php)</dt>

<dt>[25.6\. content 3.7](rest.autogen.struct.content3.7.php)</dt>

<dt>[25.7\. dbprocess](rest.autogen.struct.dbprocess.php)</dt>

<dt>[25.8\. dict:profileData](rest.autogen.struct.dict.profileData.php)</dt>

<dt>[25.9\. dict:vctx](rest.autogen.struct.dict.vctx.php)</dt>

<dt>[25.10\. link](rest.autogen.struct.link.php)</dt>

<dt>[25.11\. list](rest.autogen.struct.list.php)</dt>

<dt>[25.12\. listtag](rest.autogen.struct.listtag.php)</dt>

<dt>[25.13\. mailing.lists](rest.autogen.struct.mailing.lists.php)</dt>

<dt>[25.14\. mailing.segment](rest.autogen.struct.mailing.segment.php)</dt>

<dt>[25.15\. mailing](rest.autogen.struct.mailing.php)</dt>

<dt>[25.16\. org](rest.autogen.struct.org.php)</dt>

<dt>[25.17\. preview 3.5](rest.autogen.struct.preview3.5.php)</dt>

<dt>[25.18\. preview 3.7](rest.autogen.struct.preview3.7.php)</dt>

<dt>[25.19\. profilefield](rest.autogen.struct.profilefield.php)</dt>

<dt>[25.20\. recipient](rest.autogen.struct.recipient.php)</dt>

<dt>[25.21\. recipient 3.7](rest.autogen.struct.recipient3.7.php)</dt>

<dt>[25.22\. report.mailingbouncedetails](rest.autogen.struct.report.mailingbouncedetails.php)</dt>

<dt>[25.23\. report.mailingevents](rest.autogen.struct.report.mailingevents.php)</dt>

<dt>[25.24\. report.mailingstatistics](rest.autogen.struct.report.mailingstatistics.php)</dt>

<dt>[25.25\. report.mailingsummary](rest.autogen.struct.report.mailingsummary.php)</dt>

<dt>[25.26\. report.segmentstatistics](rest.autogen.struct.report.segmentstatistics.php)</dt>

<dt>[25.27\. spamcheck 3.5](rest.autogen.struct.spamcheck3.5.php)</dt>

</dl>

</dd>

<dt>[26\. REST Mappings](rest.autogen.map.php)</dt>

<dd>

<dl>

<dt>[26.1\. bouncetypes](rest.autogen.map.php#rest.autogen.map.bouncetypes)</dt>

<dt>[26.2\. contactstatus](rest.autogen.map.contactstatus.php)</dt>

<dt>[26.3\. contenttypes](rest.autogen.map.contenttypes.php)</dt>

<dt>[26.4\. datatypes](rest.autogen.map.datatypes.php)</dt>

<dt>[26.5\. linkgroups](rest.autogen.map.linkgroups.php)</dt>

<dt>[26.6\. linktypes](rest.autogen.map.linktypes.php)</dt>

<dt>[26.7\. mailingrules](rest.autogen.map.mailingrules.php)</dt>

<dt>[26.8\. mailingstates](rest.autogen.map.mailingstates.php)</dt>

<dt>[26.9\. mailingtypes](rest.autogen.map.mailingtypes.php)</dt>

<dt>[26.10\. recordstatustypes](rest.autogen.map.recordstatustypes.php)</dt>

<dt>[26.11\. targetcriteriaclass](rest.autogen.map.targetcriteriaclass.php)</dt>

<dt>[26.12\. targetcriteriatypes](rest.autogen.map.targetcriteriatypes.php)</dt>

<dt>[26.13\. typeofmailings](rest.autogen.map.typeofmailings.php)</dt>

</dl>

</dd>

<dt>[A. Acronyms](acronyms.php)</dt>

<dt>[Glossary](mc3-glossary.php)</dt>

</dl>

[List of Tables](table-toc.php)[List of Examples](example-toc.php)

|   |   |  [Next](rest.api.php) |
|   |   |  Chapter 1. The REST API |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)