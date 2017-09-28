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

| C.3. All Roles and Their Permissions |
| [Prev](mc3-role-all-permissions.php)  | Appendix C. Role Permissions |   |

## C.3. All Roles and Their Permissions

Find below the actions associated with each of the built-in roles. Note that no actions are associated with the root role since all actions are enabled for this role.

Permissions associated with the `global sysadmin role` are global permissions. All other permissions are org-specific.

Find below a list of all roles and their permissions organized alphabetically by role. An alphabetical list by action follows.

```
role                                        |                actions
 ---------------------------------------------+----------------------------------------
  Advanced Content Manager                    | Content: Edit Plain Text
  Advanced Content Manager                    | Content: Duplicate
  Advanced Content Manager                    | Content: Edit
  Advanced Content Manager                    | View Content
  Advanced Content Manager                    | Content: Track Links
  Advanced Content Manager                    | Content: Preview
  Advanced Content Manager                    | Content: Edit Source Code
  Advanced List Manager                       | Advanced List Builder
  Advanced List Manager                       | Lists: Duplicate
  Advanced List Manager                       | Lists: Create
  Advanced List Manager                       | Lists: View Listing
  Advanced List Manager                       | Recipients: View Listing
  Advanced List Manager                       | Lists: Schedule Count
  Advanced List Manager                       | Access List Builder
  Advanced List Manager                       | Lists: Access Action Buttons
  Advanced Mailing Assembler                  | Campaigns: Edit
  Advanced Mailing Assembler                  | Campaigns: View
  Advanced Mailing Assembler                  | Mailings: Count Recipients
  Advanced Mailing Assembler                  | Mailings: Duplicate
  Advanced Mailing Assembler                  | Mailings: Add Extra Information
  Advanced Mailing Assembler                  | Mailings: Schedule A Mailing
  Advanced Mailing Assembler                  | Mailings: Direct Access Configuration
  Advanced Mailing Assembler                  | Mailings: Assign Recipients
  Advanced Mailing Assembler                  | Mailings: Overview
  Advanced Mailing Assembler                  | Mailings: Archive
  Advanced Mailing Assembler                  | Mailings: View Listing
  Advanced Mailing Assembler                  | Campaigns: Create
  Advanced Template Manager                   | Templates: Edit
  Advanced Template Manager                   | Templates: Track Links
  Advanced Template Manager                   | Templates: Edit Source Code
  Advanced Template Manager                   | View Content
  Advanced Template Manager                   | Templates: Edit Plain Text
  Advanced Template Manager                   | Templates: Preview
  Advanced Template Manager                   | Templates: Duplicate
  All Users                                   | Recipients: Editor Data
  All Users                                   | User Account
  All Users                                   | Help Section
  All Users                                   | Job Monitor
  All Users                                   | Dashboard (All Users)
  All Users                                   | Custom Apps
  Attachments Manager                         | Content: Add Attachments
  Attachments Manager                         | View Content
  Attachments Manager                         | Templates: Preview
  Attachments Manager                         | Templates: Add Attachments
  Attachments Manager                         | Content: Preview
  Campaign Viewer                             | Campaigns: View
  Content Deleter                             | Content: Delete
  Content Deleter                             | Content: Preview
  Content Deleter                             | Templates: Preview
  Content Deleter                             | View Content
  Content Manager                             | Content: Edit Plain Text
  Content Manager                             | Content: Duplicate
  Content Manager                             | Content: Edit
  Content Manager                             | View Content
  Content Manager                             | Content: Track Links
  Content Manager                             | Content: Use WYSIWYG
  Content Manager                             | Content: Preview
  Content Viewer                              | Content: Preview
  Content Viewer                              | View Content
  Content Viewer                              | Templates: Preview
  Exclude Contacts Viewer                     | Mailings: Direct Access Configuration
  Exclude Contacts Viewer                     | Mailings: Schedule A Mailing
  Exclude Contacts Viewer                     | Mailings: Exclude Contacts
  Exclude Contacts Viewer                     | Mailings: Duplicate
  Exclude Contacts Viewer                     | Campaigns: Create
  Exclude Contacts Viewer                     | Mailings: View Listing
  Exclude Contacts Viewer                     | Mailings: Count Recipients
  Exclude Contacts Viewer                     | Campaigns: View
  Exclude Contacts Viewer                     | Mailings: Archive
  Exclude Contacts Viewer                     | Campaigns: Edit
  Exclude Contacts Viewer                     | Mailings: Overview
  Exclude Contacts Viewer                     | Mailings: Assign Recipients
  global sysadmin role has access to all orgs | Admin: Index
  global sysadmin role has access to all orgs | Admin: Create Link Groups
  global sysadmin role has access to all orgs | Admin: View Link Groups
  global sysadmin role has access to all orgs | Admin: View Field Assignments
  global sysadmin role has access to all orgs | Admin: Assign Field Assignments
  global sysadmin role has access to all orgs | Lists: View Listing
  global sysadmin role has access to all orgs | Admin: Delete Field Assignemnts
  Header Manager                              | Templates: Add Headers
  Header Manager                              | Content: Add Headers
  List Deleter                                | Lists: Delete
  List Deleter                                | Recipients: View Listing
  List Deleter                                | Lists: Access Action Buttons
  List Deleter                                | Lists: View Listing
  List Manager                                | Recipients: View Listing
  List Manager                                | Lists: Duplicate
  List Manager                                | Lists: Create
  List Manager                                | Lists: Schedule Count
  List Manager                                | Lists: View Listing
  List Manager                                | Lists: Access Action Buttons
  List Manager                                | Access List Builder
  List Tag Deleter                            | List Tags: Delete
  List Tag Deleter                            | Recipients: View Listing
  List Tag Deleter                            | List Tags: View
  List Tag Manager                            | List Tags: View
  List Tag Manager                            | Recipients: View Listing
  List Tag Manager                            | List Tags: Create
  Mailing Assembler                           | Mailings: Overview
  Mailing Assembler                           | Campaigns: Create
  Mailing Assembler                           | Mailings: View Listing
  Mailing Assembler                           | Mailings: Schedule A Mailing
  Mailing Assembler                           | Mailings: Direct Access Configuration
  Mailing Assembler                           | Mailings: Assign Recipients
  Mailing Assembler                           | Mailings: Create New
  Mailing Assembler                           | Mailings: Assign Content
  Mailing Assembler                           | Mailings: Archive
  Mailing Assembler                           | Mailings: Count Recipients
  Mailing Assembler                           | Campaigns: View
  Mailing Assembler                           | Mailings: Duplicate
  Mailing Assembler                           | Campaigns: Edit
  Mailing Disabler                            | Mailings: Schedule A Mailing
  Mailing Disabler                            | Campaigns: Create
  Mailing Disabler                            | Mailings: Direct Access Configuration
  Mailing Disabler                            | Campaigns: Edit
  Mailing Disabler                            | Mailings: Assign Recipients
  Mailing Disabler                            | Mailings: View Listing
  Mailing Disabler                            | Mailings: Overview
  Mailing Disabler                            | Campaigns: View
  Mailing Disabler                            | Mailings: Count Recipients
  Mailing Disabler                            | Mailings: Change State
  Mailing Disabler                            | Mailings: Archive
  Mailing Disabler                            | Mailings: Duplicate
  Mailing Sender                              | Campaigns: Create
  Mailing Sender                              | Mailings: Overview
  Mailing Sender                              | Mailings: Change State
  Mailing Sender                              | Campaigns: Edit
  Mailing Sender                              | Mailings: Count Recipients
  Mailing Sender                              | Mailings: Archive
  Mailing Sender                              | Campaigns: View
  Mailing Sender                              | Mailings: Direct Access Configuration
  Mailing Sender                              | Mailings: Schedule A Mailing
  Mailing Sender                              | Mailings: Assign Recipients
  Mailing Sender                              | Mailings: Duplicate
  Mailing Sender                              | Mailings: View Listing
  Momentum Manager                            | Campaigns: View
  Momentum Manager                            | Mailings: Overview
  Momentum Manager                            | Campaigns: Create
  Momentum Manager                            | Mailings: Direct Access Configuration
  Momentum Manager                            | Mailings: View Listing
  Momentum Manager                            | Mailings: Duplicate
  Momentum Manager                            | Campaigns: Edit
  Momentum Manager                            | Mailings: Count Recipients
  Momentum Manager                            | Mailings: Assign Momentum Instructions
  Momentum Manager                            | Mailings: Archive
  Momentum Manager                            | Mailings: Assign Recipients
  Momentum Manager                            | Mailings: Schedule A Mailing
  Org-Specific SysAdmin                       | Admin: View Field Assignments
  Org-Specific SysAdmin                       | Admin: Index
  Org-Specific SysAdmin                       | Admin: Delete Users
  Org-Specific SysAdmin                       | Admin: View Users
  Org-Specific SysAdmin                       | Admin: Edit Users
  Org-Specific SysAdmin                       | Admin: Create Users
  Org-Specific SysAdmin                       | Admin: View User Roles
  Org-Specific SysAdmin                       | Admin: Edit User Roles
  Org-Specific SysAdmin                       | Admin: Delete Suppression Records
  Org-Specific SysAdmin                       | Admin: View Suppresion Lists
  Org-Specific SysAdmin                       | Admin: Edit Suppression Records
  Org-Specific SysAdmin                       | Admin: Create Suppression Records
  Org-Specific SysAdmin                       | Admin: View Synthetic Relations
  Org-Specific SysAdmin                       | Admin: View Relations
  Org-Specific SysAdmin                       | Admin: Edit Synthetic Relations
  Org-Specific SysAdmin                       | Admin: Edit Relations
  Org-Specific SysAdmin                       | Admin: Create Synthetic Relations
  Org-Specific SysAdmin                       | Admin: Create Relations
  Org-Specific SysAdmin                       | Admin: Assign Relations
  Org-Specific SysAdmin                       | Admin: Edit Roles
  Org-Specific SysAdmin                       | Admin: Create Roles
  Org-Specific SysAdmin                       | Admin: View Roles
  Org-Specific SysAdmin                       | Admin: View Org Details
  Org-Specific SysAdmin                       | Admin: Edit Orgs
  Org-Specific SysAdmin                       | Admin: Create Orgs
  Org-Specific SysAdmin                       | Admin: View Orgs
  Org-Specific SysAdmin                       | Admin: View Link Type Details
  Org-Specific SysAdmin                       | Admin: Create Link Types
  Org-Specific SysAdmin                       | Admin: View Link Types
  Org-Specific SysAdmin                       | Admin: View Link Group Details
  Org-Specific SysAdmin                       | Admin: Create Link Groups
  Org-Specific SysAdmin                       | Admin: View Link Groups
  Org-Specific SysAdmin                       | Admin: Assign Field Assignments
  Org-Specific SysAdmin                       | Admin: Delete Field Assignemnts
  Recipient Data Manager                      | Recipients: View Recipient
  Recipient Data Manager                      | Recipients: Edit Profile Fields
  Recipient Data Manager                      | Recipients: Delete Profile Fields
  Recipient Data Manager                      | Lists: Access Action Buttons
  Recipient Data Manager                      | Lists: Export as CSV
  Recipient Data Manager                      | Recipient Import: Assign
  Recipient Data Manager                      | Recipient Import: View Importer
  Recipient Data Manager                      | Recipient Import: Execute Import
  Recipient Data Manager                      | Recipient Import: Tag Recipients
  Recipient Data Manager                      | Recipient Import: Upload
  Recipient Data Manager                      | Lists: View Listing
  Recipient Data Manager                      | Recipients: Create
  Recipient Data Manager                      | Recipients: Use Action Buttons
  Recipient Data Manager                      | Recipients: View Listing
  Recipient Data Manager                      | Lists: Imported Lists View
  Recipient Data Manager                      | Recipients: Duplicate
  Recipient Data Manager                      | Recipients: Unsubscribe
  Recipient Data Manager                      | Recipients: View Profile Fields
  Recipient Data Manager                      | Recipients: Create Profile Fields
  Recipient Editor                            | Recipients: View Listing
  Recipient Editor                            | Recipients: Edit Recipient
  Report Exporter                             | Reports: Export
  Report Exporter                             | Reports: Access
  Report Viewer                               | Reports: Access
  Recipient Data Manager                      | Lists: Imported Lists View
  Recipient Data Manager                      | Recipients: Duplicate
  Recipient Data Manager                      | Recipients: Unsubscribe
  Recipient Data Manager                      | Recipients: View Profile Fields
  Recipient Data Manager                      | Recipients: Create Profile Fields
  Recipient Editor                            | Recipients: View Listing
  Recipient Editor                            | Recipients: Edit Recipient
  Report Exporter                             | Reports: Export
  Report Exporter                             | Reports: Access
  Report Viewer                               | Reports: Access
  Template Deleter                            | Templates: Preview
  Template Deleter                            | Content: Preview
  Template Deleter                            | View Content
  Template Deleter                            | Templates: Delete
  Template Manager                            | Templates: Edit
  Template Manager                            | View Content
  Template Manager                            | Templates: Edit Plain Text
  Template Manager                            | Templates: Duplicate
  Template Manager                            | Templates: Preview
  Template Manager                            | Templates: Track Links
  Template Manager                            | Templates: Use WYSIWYG
 (216 rows)
```

Find below a list of all roles ordered alphabetically by action.

```
role                                   |                actions
 ----------------------------------------+----------------------------------------
  List Manager                           | Access List Builder
  Advanced List Manager                  | Access List Builder
  Org-Specific SysAdmin                  | Admin: Assign Field Assignments
  global sysadmin role has access to all | Admin: Assign Field Assignments
  Org-Specific SysAdmin                  | Admin: Assign Relations
  global sysadmin role has access to all | Admin: Create Link Groups
  Org-Specific SysAdmin                  | Admin: Create Link Groups
  Org-Specific SysAdmin                  | Admin: Create Link Types
  Org-Specific SysAdmin                  | Admin: Create Orgs
  Org-Specific SysAdmin                  | Admin: Create Relations
  Org-Specific SysAdmin                  | Admin: Create Roles
  Org-Specific SysAdmin                  | Admin: Create Suppression Records
  Org-Specific SysAdmin                  | Admin: Create Synthetic Relations
  Org-Specific SysAdmin                  | Admin: Create Users
  Org-Specific SysAdmin                  | Admin: Delete Field Assignemnts
  global sysadmin role has access to all | Admin: Delete Field Assignemnts
  Org-Specific SysAdmin                  | Admin: Delete Suppression Records
  Org-Specific SysAdmin                  | Admin: Delete Users
  Org-Specific SysAdmin                  | Admin: Edit Orgs
  Org-Specific SysAdmin                  | Admin: Edit Relations
  Org-Specific SysAdmin                  | Admin: Edit Roles
  Org-Specific SysAdmin                  | Admin: Edit Suppression Records
  Org-Specific SysAdmin                  | Admin: Edit Synthetic Relations
  Org-Specific SysAdmin                  | Admin: Edit User Roles
  Org-Specific SysAdmin                  | Admin: Edit Users
  global sysadmin role has access to all | Admin: Index
  Org-Specific SysAdmin                  | Admin: Index
  Org-Specific SysAdmin                  | Admin: View Field Assignments
  global sysadmin role has access to all | Admin: View Field Assignments
  Org-Specific SysAdmin                  | Admin: View Link Group Details
  Org-Specific SysAdmin                  | Admin: View Link Groups
  global sysadmin role has access to all | Admin: View Link Groups
  Org-Specific SysAdmin                  | Admin: View Link Type Details
  Org-Specific SysAdmin                  | Admin: View Link Types
  Org-Specific SysAdmin                  | Admin: View Org Details
  Org-Specific SysAdmin                  | Admin: View Orgs
  Org-Specific SysAdmin                  | Admin: View Relations
  Org-Specific SysAdmin                  | Admin: View Roles
  Org-Specific SysAdmin                  | Admin: View Suppresion Lists
  Org-Specific SysAdmin                  | Admin: View Synthetic Relations
  Org-Specific SysAdmin                  | Admin: View User Roles
  Org-Specific SysAdmin                  | Admin: View Users
  Advanced List Manager                  | Advanced List Builder
  Advanced Mailing Assembler             | Campaigns: Create
  Mailing Assembler                      | Campaigns: Create
  Momentum Manager                       | Campaigns: Create
  Exclude Contacts Viewer                | Campaigns: Create
  Mailing Sender                         | Campaigns: Create
  Mailing Disabler                       | Campaigns: Create
  Mailing Assembler                      | Campaigns: Edit
  Advanced Mailing Assembler             | Campaigns: Edit
  Momentum Manager                       | Campaigns: Edit
  Exclude Contacts Viewer                | Campaigns: Edit
  Mailing Sender                         | Campaigns: Edit
  Mailing Disabler                       | Campaigns: Edit
  Mailing Sender                         | Campaigns: View
  Mailing Disabler                       | Campaigns: View
  Campaign Viewer                        | Campaigns: View
  Mailing Assembler                      | Campaigns: View
  Advanced Mailing Assembler             | Campaigns: View
  Momentum Manager                       | Campaigns: View
  Exclude Contacts Viewer                | Campaigns: View
  Attachments Manager                    | Content: Add Attachments
  Header Manager                         | Content: Add Headers
  Content Deleter                        | Content: Delete
  Content Manager                        | Content: Duplicate
  Advanced Content Manager               | Content: Duplicate
  Content Manager                        | Content: Edit
  Advanced Content Manager               | Content: Edit
  Advanced Content Manager               | Content: Edit Plain Text
  Content Manager                        | Content: Edit Plain Text
  Advanced Content Manager               | Content: Edit Source Code
  Content Viewer                         | Content: Preview
  Template Deleter                       | Content: Preview
  Content Deleter                        | Content: Preview
  Attachments Manager                    | Content: Preview
  Advanced Content Manager               | Content: Preview
  Content Manager                        | Content: Preview
  Advanced Content Manager               | Content: Track Links
  Content Manager                        | Content: Track Links
  Content Manager                        | Content: Use WYSIWYG
  All Users                              | Custom Apps
  All Users                              | Dashboard (All Users)
  All Users                              | Help Section
  All Users                              | Job Monitor
  List Manager                           | Lists: Access Action Buttons
  Recipient Data Manager                 | Lists: Access Action Buttons
  Advanced List Manager                  | Lists: Access Action Buttons
  List Deleter                           | Lists: Access Action Buttons
  List Manager                           | Lists: Create
  Advanced List Manager                  | Lists: Create
  List Deleter                           | Lists: Delete
  Advanced List Manager                  | Lists: Duplicate
  List Manager                           | Lists: Duplicate
  Recipient Data Manager                 | Lists: Export as CSV
  Recipient Data Manager                 | Lists: Imported Lists View
  Advanced List Manager                  | Lists: Schedule Count
  List Manager                           | Lists: Schedule Count
  List Deleter                           | Lists: View Listing
  Advanced List Manager                  | Lists: View Listing
  Recipient Data Manager                 | Lists: View Listing
  global sysadmin role has access to all | Lists: View Listing
  List Manager                           | Lists: View Listing
  List Tag Manager                       | List Tags: Create
  List Tag Deleter                       | List Tags: Delete
  List Tag Manager                       | List Tags: View
  List Tag Deleter                       | List Tags: View
  Advanced Mailing Assembler             | Mailings: Add Extra Information
  Mailing Disabler                       | Mailings: Archive
  Mailing Sender                         | Mailings: Archive
  Mailing Assembler                      | Mailings: Archive
  Momentum Manager                       | Mailings: Archive
  Exclude Contacts Viewer                | Mailings: Archive
  Advanced Mailing Assembler             | Mailings: Archive
  Mailing Assembler                      | Mailings: Assign Content
  Momentum Manager                       | Mailings: Assign Momentum Instructions
  Advanced Mailing Assembler             | Mailings: Assign Recipients
  Mailing Assembler                      | Mailings: Assign Recipients
  Momentum Manager                       | Mailings: Assign Recipients
  Exclude Contacts Viewer                | Mailings: Assign Recipients
  Mailing Sender                         | Mailings: Assign Recipients
  Mailing Disabler                       | Mailings: Assign Recipients
  Mailing Disabler                       | Mailings: Change State
  Mailing Sender                         | Mailings: Change State
  Momentum Manager                       | Mailings: Count Recipients
  Mailing Sender                         | Mailings: Count Recipients
  Mailing Disabler                       | Mailings: Count Recipients
  Mailing Assembler                      | Mailings: Count Recipients
  Advanced Mailing Assembler             | Mailings: Count Recipients
  Exclude Contacts Viewer                | Mailings: Count Recipients
  Mailing Assembler                      | Mailings: Create New
  Advanced Mailing Assembler             | Mailings: Direct Access Configuration
  Mailing Assembler                      | Mailings: Direct Access Configuration
  Momentum Manager                       | Mailings: Direct Access Configuration
  Mailing Disabler                       | Mailings: Direct Access Configuration
  Mailing Sender                         | Mailings: Direct Access Configuration
  Exclude Contacts Viewer                | Mailings: Direct Access Configuration
  Momentum Manager                       | Mailings: Duplicate
  Advanced Mailing Assembler             | Mailings: Duplicate
  Mailing Assembler                      | Mailings: Duplicate
  Mailing Disabler                       | Mailings: Duplicate
  Mailing Sender                         | Mailings: Duplicate
  Exclude Contacts Viewer                | Mailings: Duplicate
  Exclude Contacts Viewer                | Mailings: Exclude Contacts
  Advanced Mailing Assembler             | Mailings: Overview
  Momentum Manager                       | Mailings: Overview
  Exclude Contacts Viewer                | Mailings: Overview
  Mailing Sender                         | Mailings: Overview
  Mailing Disabler                       | Mailings: Overview
  Mailing Assembler                      | Mailings: Overview
  Momentum Manager                       | Mailings: Schedule A Mailing
  Mailing Assembler                      | Mailings: Schedule A Mailing
  Mailing Disabler                       | Mailings: Schedule A Mailing
  Mailing Sender                         | Mailings: Schedule A Mailing
  Exclude Contacts Viewer                | Mailings: Schedule A Mailing
  Advanced Mailing Assembler             | Mailings: Schedule A Mailing
  Momentum Manager                       | Mailings: View Listing
  Mailing Disabler                       | Mailings: View Listing
  Mailing Sender                         | Mailings: View Listing
  Exclude Contacts Viewer                | Mailings: View Listing
  Advanced Mailing Assembler             | Mailings: View Listing
  Mailing Assembler                      | Mailings: View Listing
  Recipient Data Manager                 | Recipient Import: Assign
  Recipient Data Manager                 | Recipient Import: Execute Import
  Recipient Data Manager                 | Recipient Import: Tag Recipients
  Recipient Data Manager                 | Recipient Import: Upload
  Recipient Data Manager                 | Recipient Import: View Importer
  Recipient Data Manager                 | Recipients: Create
  Recipient Data Manager                 | Recipients: Create Profile Fields
  Recipient Data Manager                 | Recipients: Delete Profile Fields
  Recipient Data Manager                 | Recipients: Duplicate
  All Users                              | Recipients: Editor Data
  Recipient Data Manager                 | Recipients: Edit Profile Fields
  Recipient Editor                       | Recipients: Edit Recipient
  Recipient Data Manager                 | Recipients: Unsubscribe
  Recipient Data Manager                 | Recipients: Use Action Buttons
  List Deleter                           | Recipients: View Listing
  List Tag Deleter                       | Recipients: View Listing
  List Tag Manager                       | Recipients: View Listing
  List Manager                           | Recipients: View Listing
  Recipient Data Manager                 | Recipients: View Listing
  Recipient Editor                       | Recipients: View Listing
  Advanced List Manager                  | Recipients: View Listing
  Recipient Data Manager                 | Recipients: View Profile Fields
  Recipient Data Manager                 | Recipients: View Recipient
  Report Exporter                        | Reports: Access
  Report Viewer                          | Reports: Access
  Report Exporter                        | Reports: Export
  Attachments Manager                    | Templates: Add Attachments
  Header Manager                         | Templates: Add Headers
  Template Deleter                       | Templates: Delete
  Advanced Template Manager              | Templates: Duplicate
  Template Manager                       | Templates: Duplicate
  Advanced Template Manager              | Templates: Edit
  Template Manager                       | Templates: Edit
  Advanced Template Manager              | Templates: Edit Plain Text
  Template Manager                       | Templates: Edit Plain Text
  Advanced Template Manager              | Templates: Edit Source Code
  Attachments Manager                    | Templates: Preview
  Content Viewer                         | Templates: Preview
  Advanced Template Manager              | Templates: Preview
  Content Deleter                        | Templates: Preview
  Template Deleter                       | Templates: Preview
  Template Manager                       | Templates: Preview
  Advanced Template Manager              | Templates: Track Links
  Advanced Template Manager              | Templates: Edit Plain Text
  Template Manager                       | Templates: Edit Plain Text
  Advanced Template Manager              | Templates: Edit Source Code
  Attachments Manager                    | Templates: Preview
  Content Viewer                         | Templates: Preview
  Advanced Template Manager              | Templates: Preview
  Content Deleter                        | Templates: Preview
  Template Deleter                       | Templates: Preview
  Template Manager                       | Templates: Preview
  Advanced Template Manager              | Templates: Track Links
  Template Manager                       | Templates: Track Links
  Template Manager                       | Templates: Use WYSIWYG
  All Users                              | User Account
  Advanced Content Manager               | View Content
  Content Viewer                         | View Content
  Advanced Template Manager              | View Content
  Template Manager                       | View Content
  Content Deleter                        | View Content
  Template Deleter                       | View Content
  Content Manager                        | View Content
  Attachments Manager                    | View Content
 (216 rows)
```

| [Prev](mc3-role-all-permissions.php)  | [Up](mc3-role-permissions.php) |   |
| C.2. All Permissions  | [Table of Contents](index.php) |   |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)