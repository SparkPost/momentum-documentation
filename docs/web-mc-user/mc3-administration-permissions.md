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

| 11.3. Permissions |
| [Prev](mc3-administration-users.php)  | Chapter 11. Administration |  [Next](mc3-administration-suppression-lists.php) |

## 11.3. Permissions

The PERMISSIONS menu option shows the built-in roles and any roles that you may have added.

The built-in roles are as follows:

*   Recipient Data Manager

*   Recipient Editor

*   List Tag Manager

*   List Tag Deleter

*   List Manager

*   Advanced List Manager

*   List Deleter

*   Content Manager

*   Template Manager

*   Content Viewer

*   Advanced Content Manager

*   Advanced Template Manager

*   Content Deleter

*   Template Deleter

*   Attachments Manager

*   Campaign Viewer

*   Mailing Assembler

*   Advanced Mailing Assembler

*   Momentum Manager

*   Report Viewer

*   Report Exporter

*   Mailing Sender

*   Header Manager

*   Exclude Contacts Viewer

*   Mailing Disabler

*   All Users

To view the permissions associated with a role, click the role.

You can add to the permissions associated with a role by clicking a role and checking the permissions that you wish to add. The only role that cannot be altered is the superuser role.

You can add a new role to the application by clicking the CREATE NEW button. When creating a new role you must supply a role name, a "slug" and associated permissions. For the "slug" provide a word or phrase that readily identifies the role.

### Warning

Do not use `root` or `global-sysadmin` as slug names when creating new roles.

Once newly created roles have been saved, they appear on the PERMISSIONS page.

Custom applications that have been added to Message Central will also show up in the permissions list.

**Disable Access to Org Information**

To disable access to organization information via the REST API you must disable four permissions:

*   `Admin: Edit Orgs`

*   `Admin: Create Orgs`

*   `Admin: View Orgs`

*   `Admin: View Org Details`

This is the only REST API that is controlled by more than one permission.

For a description of the different permissions see [Appendix C, *Role Permissions*](mc3-role-permissions.php "Appendix C. Role Permissions") .

| [Prev](mc3-administration-users.php)  | [Up](mc3-administration.php) |  [Next](mc3-administration-suppression-lists.php) |
| 11.2. Users  | [Table of Contents](index.php) |  11.4. Suppression Lists |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)