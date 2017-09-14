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

| 5.7. Managing Users |
| [Prev](msc.ui.roles.overview.php)  | Chapter 5. Message Scope Web UI |  [Next](msc.ui.roles.php) |

## 5.7. Managing Users

Navigate to the users page by mousing over the Administration tab and then selecting the USERS submenu.

### Note

When regular users navigate to this page, only the MY ACCOUNT option is available. From this menu users can change their own passwords.

To create a new user choose the New User button from the USERS page. Do this and you should see something similar to the following:

<a name="figure_add_users"></a>

**Figure 5.14. Adding users**

![Adding users](images/add_users.jpg)

Enter a username and password. Select a role for the new user. The built-in options are:

*   `User`

*   `Supervisor`

*   `Administrator`

The different roles have the capabilities described in [Section 5.6, “Overview”](msc.ui.roles.overview.php "5.6. Overview"). If you wish, you can add other roles. To do this see [Section 5.8, “Roles & Permissions”](msc.ui.roles.php "5.8. Roles & Permissions").

### 5.7.1. Editing Users or Supervisors

If you wish to edit an existing user, you can search for that user by entering the username or a partial username in the search text box on the USERS page. View the details of any search by clicking the desired result.

When editing a regular user or a supervisor you should see something similar to the following:

<a name="figure_edit_user"></a>

**Figure 5.15. Editing users**

![Editing users](images/edit_user.jpg)

Change the details related to a user by clicking the Edit link. You can then change a user's password or role.

### Note

Editing a Supervisor or Administrator is identical to editing a regular user.

No users of any type can be deleted.

To audit a user's actions choose the View Audit Trail link. This displays changes made by the user as shown below.

<a name="figure_audit"></a>

**Figure 5.16. Audit logs**

![Audit logs](images/audit.jpg)

By default the audit trail is ordered based on the Date/Time field. Reverse this by clicking the up or down arrow. You can also sort on other columns in the same way.

| [Prev](msc.ui.roles.overview.php)  | [Up](msc.ui.php) |  [Next](msc.ui.roles.php) |
| 5.6. Overview  | [Table of Contents](index.php) |  5.8. Roles & Permissions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)