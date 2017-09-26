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

| Appendix C. Role Permissions |
| [Prev](mc3-export-data.php)  |   |  [Next](mc3-role-all-permissions.php) |

## Role Permissions

**Table of Contents**

<dl class="toc">

<dt>[C.1\. Built-in Roles](mc3-role-permissions.php#mc3-role-permissions-built-in)</dt>

<dt>[C.2\. All Permissions](mc3-role-all-permissions.php)</dt>

<dt>[C.3\. All Roles and Their Permissions](mc3-role-permissions-list.php)</dt>

</dl>

This appendix documents the various permissions associated with the built-in roles. It lists all roles and all permissions and the permissions that are associated with the various roles.

## C.1. Built-in Roles

The built-in roles (with a brief description) are as follows:

```
rolename          |                 description
----------------------------+---------------------------------------------
 advanced-content-manager   | Advanced Content Manager
 advanced-list-manager      | Advanced List Manager
 advanced-mailing-assembler | Advanced Mailing Assembler
 advanced-template-manager  | Advanced Template Manager
 all-users                  | All Users
 attachments-manager        | Attachments Manager
 campaign-viewer            | Campaign Viewer
 content-deleter            | Content Deleter
 content-manager            | Content Manager
 content-viewer             | Content Viewer
 exclude-contacts-viewer    | Exclude Contacts Viewer
 global-sysadmin            | global sysadmin role has access to all orgs
 header-manager             | Header Manager
 list-deleter               | List Deleter
 list-manager               | List Manager
 list-tag-manager           | List Tag Manager
 mailing-assembler          | Mailing Assembler
 mailing-disabler           | Mailing Disabler
 mailing-sender             | Mailing Sender
 momentum-manager           | Momentum Manager
 org-sysadmin               | Org-Specific SysAdmin
 recipient-data-manager     | Recipient Data Manager
 recipient-editor           | Recipient Editor
 report-exporter            | Report Exporter
 report-viewer              | Report Viewer
 root                       | superuser role for the system
 template-deleter           | Template Deleter
 template-manager           | Template Manager
(29 rows)
```

If you wish to edit a role from the web UI, click the role that you wish to edit. Doing this displays a screen of all available permissions. The permissions that are already assigned to a role are checked. To add or remove a permission, simply check or uncheck it.

| [Prev](mc3-export-data.php)  |   |  [Next](mc3-role-all-permissions.php) |
| Appendix B. Exporting Data from MySQL to PostgreSQL  | [Table of Contents](index.php) |  C.2. All Permissions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)