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

| User Guide for Message Central 3.x Web UI |
|   |   |  [Next](mc3-preface.php) |

## User Guide for Message Central 3.x Web UI

### Message Systems, Inc.

Copyright © 2010-2014 Message Systems, Inc.

<a name="idp198784"></a>

Confidential & Proprietary.

**Abstract**

This book documents using the Message Central web UI version 3.0 and higher.

Document generated on: 2017-Aug-09

* * *

**Table of Contents**

<dl class="toc">

<dt>[Preface](mc3-preface.php)</dt>

<dd>

<dl>

<dt>[1\. Typographical Conventions Used in This Document](mc3-preface.php#typographical)</dt>

</dl>

</dd>

<dt>[1\. Introduction](mc3-introduction.php)</dt>

<dd>

<dl>

<dt>[1.1\. Installing the web Role](mc3-introduction.php#mc3-web-role)</dt>

<dt>[1.2\. Logging in to the Web UI](mc3-logging-in.php)</dt>

</dl>

</dd>

<dt>[2\. Dashboard](mc3-dashboard.php)</dt>

<dd>

<dl>

<dt>[2.1\. Viewing Events](mc3-dashboard.php#mc3-dashboard-viewing-events)</dt>

</dl>

</dd>

<dt>[3\. Monitor](mc3-monitor.php)</dt>

<dt>[4\. Campaigns](mc3-campaigns.php)</dt>

<dd>

<dl>

<dt>[4.1\. Adding a Campaign](mc3-campaigns.php#mc3-campaign-adding)</dt>

<dt>[4.2\. Editing a Campaign](mc3-campaign-editing.php)</dt>

</dl>

</dd>

<dt>[5\. Mailings](mc3-mailings.php)</dt>

<dd>

<dl>

<dt>[5.1\. Mailing Controls](mc3-mailings.php#mc3-mailings-controls)</dt>

<dt>[5.2\. Creating a Mailing](mc3-mailings-adding.php)</dt>

<dt>[5.3\. Editing a Mailing](mc3-mailings-editing.php)</dt>

</dl>

</dd>

<dt>[6\. Recipients](mc3-recipients.php)</dt>

<dd>

<dl>

<dt>[6.1\. Recipients](mc3-recipients.php#mc3-recipients-editing)</dt>

<dt>[6.2\. Lists/Segments](mc3-recipients-lists.php)</dt>

<dt>[6.3\. Import Lists](mc3-recipients-importing.php)</dt>

<dt>[6.4\. List Tags](mc3-recipients-list-tags.php)</dt>

<dt>[6.5\. Profile Fields](mc3-administration-profile-fields.php)</dt>

</dl>

</dd>

<dt>[7\. Content](mc3-content.php)</dt>

<dd>

<dl>

<dt>[7.1\. Adding New Content](mc3-content.php#mc3-content-adding)</dt>

<dt>[7.2\. Editing New Content](mc3-content-editing.php)</dt>

<dt>[7.3\. Using SOURCE Mode](mc3-content-source-mode.php)</dt>

<dt>[7.4\. Previewing Content](mc3-content-previewing.php)</dt>

<dt>[7.5\. Content Link Tracking](mc3-content-link-tracking.php)</dt>

<dt>[7.6\. Content Attachments](mc3-content-attachments.php)</dt>

</dl>

</dd>

<dt>[8\. Reports](mc3-reports.php)</dt>

<dd>

<dl>

<dt>[8.1\. Mailing Summary](mc3-reports.php#mc3-reports-mailing-summary)</dt>

<dt>[8.2\. Report Columns](mc3-report-columns.php)</dt>

<dt>[8.3\. Domain Stats](mc3-reports-domain-stats.php)</dt>

<dt>[8.4\. Bounce Details](mc3-reports-bounce-details.php)</dt>

<dt>[8.5\. Click Details](mc3-reports-click-details.php)</dt>

<dt>[8.6\. Direct Access](mc3-reports-direct-access.php)</dt>

</dl>

</dd>

<dt>[9\. Help](mc3-help.php)</dt>

<dt>[10\. Custom Apps](mc3-custom.php)</dt>

<dt>[11\. Administration](mc3-administration.php)</dt>

<dd>

<dl>

<dt>[11.1\. Organizations](mc3-administration.php#mc3-administration-orgs)</dt>

<dt>[11.2\. Users](mc3-administration-users.php)</dt>

<dt>[11.3\. Permissions](mc3-administration-permissions.php)</dt>

<dt>[11.4\. Suppression Lists](mc3-administration-suppression-lists.php)</dt>

<dt>[11.5\. Relational Data](mc3-administration-relations.php)</dt>

<dt>[11.6\. Link Groups](mc3-administration-link-groups.php)</dt>

<dt>[11.7\. Link Types](mc3-administration-link-types.php)</dt>

<dt>[11.8\. List Builder Criteria](mc3-administration-list-builder-criteria.php)</dt>

<dt>[11.9\. Process Manager](mc3-administration-process-manager.php)</dt>

</dl>

</dd>

<dt>[Glossary](mc3-glossary.php)</dt>

<dt>[A. Fields Used in Conditional Content](mc3-content-conditional-fields.php)</dt>

<dt>[B. Exporting Data from MySQL to PostgreSQL](mc3-export-data.php)</dt>

<dt>[C. Role Permissions](mc3-role-permissions.php)</dt>

<dd>

<dl>

<dt>[C.1\. Built-in Roles](mc3-role-permissions.php#mc3-role-permissions-built-in)</dt>

<dt>[C.2\. All Permissions](mc3-role-all-permissions.php)</dt>

<dt>[C.3\. All Roles and Their Permissions](mc3-role-permissions-list.php)</dt>

</dl>

</dd>

</dl>

[List of Figures](figure-toc.php)

|   |   |  [Next](mc3-preface.php) |
|   |   |  Preface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)