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

| 5.8. Roles & Permissions |
| [Prev](msc.ui.add.users.php)  | Chapter 5. Message Scope Web UI |  [Next](msc.server.php) |

## 5.8. Roles & Permissions

Roles define the search permissions that are applicable. The administrator role has all permissions and cannot be altered. Where built-in roles are concerned, you can only change the characteristics of the `Supervisor` or the `User` roles. or any roles that you have created.

Navigate to the Roles page by choosing Roles & Permissions from the Administration menu. If you choose the `Supervisor` role you should see something similar to the following:

<a name="figure_supervisor_role"></a>

**Figure 5.17. Supervisor role**

![Editing Users](images/supervisor_role.jpg)

Roles define the characteristics that are applicable to *all* users assigned that role. The fields applicable to a Supervisor are shown in [Figure 5.17, “Supervisor role”](msc.ui.roles.php#figure_supervisor_role "Figure 5.17. Supervisor role").

Clicking the Remediation Lists tab displays something similar to the following:

<a name="figure_supervisor_remediation"></a>

**Figure 5.18. Remediation lists**

![Remediation lists](images/supervisor_remediation.jpg)

When Show all is selected, this screen shows any remediation lists that have been created.

To associate a remediation list with the supervisor role, select the desired list and click the Save button. Deselect a list to remove it.

Click the Search Restriction tab to see any search restrictions applied to this role.

<a name="figure_supervisor_search_restrictions"></a>

**Figure 5.19. Search restrictions**

![Search restrictions](images/supervisor_search_restrictions.jpg)

To add a restriction to the search capabilities of the Supervisory role select a search criterion and enter the desired restriction. In [Figure 5.19, “Search restrictions”](msc.ui.roles.php#figure_supervisor_search_restrictions "Figure 5.19. Search restrictions") the Supervisory role is limited to searching the `gold1` binding only. Add as many restrictions as desired.

Clicking the Actions tab displays the actions associated with the Supervisor role:

<a name="figure_supervisor_action"></a>

**Figure 5.20. Actions**

![Actions](images/supervisor_actions.jpg)

You can add or remove actions be selecting or deselecting them. Any new roles that you have added will appear in the Roles found section. The `DriverExample` buttons are custom buttons that were added as described in [Section A.6, “Adding Buttons”](msc.custom.behavior.add.buttons.php "A.6. Adding Buttons").

The fields associated with the `User` role are shown below:

<a name="figure_user_role"></a>

**Figure 5.21. User role**

![User role](images/user_role.jpg)

By default, the only differences between the user role and the supervisory role are the actions each can perform. A user can only add an entry to a remediation list three times and has no other permissions selected on the Action tab.

You can edit the User role in exactly the same way that the Supervisory role is edited.

All selected permissions apply to all holders of a role. For example, if you remove the `From Header` permission from the `User` role, no user with the `User` role will have this permission.

### Note

If you do not have the `Thread ID` permission, you cannot perform a search.

### 5.8.1. Adding Roles

Roles are added from the Roles & Permissions page by clicking the New Role button or by copying an existing role.

When adding a new role all permissions and remediation lists are selected by default and no search restrictions are applied. By default the new role can add entries to a remediation list any number of times. The only action selected is `Add Messages to Remediation List`. Edit these settings as desired.

Be sure to also add a role name and description.

If a new role closely resembles an existing role the easiest way to create the new role may be to copy an existing role. To do this click the Copy link associated with an existing role. Give the role a name and description and edit the permissions as desired.

Once a role has been saved it will appear in the list on the Roles & Permissions page.

| [Prev](msc.ui.add.users.php)  | [Up](msc.ui.php) |  [Next](msc.server.php) |
| 5.7. Managing Users  | [Table of Contents](index.php) |  Chapter 6. Message Scope Server |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)