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

| 11.2. Users |
| [Prev](mc3-administration.php)  | Chapter 11. Administration |  [Next](mc3-administration-permissions.php) |

## 11.2. Users

To view existing users, choose the USERS menu option from the ADMIN menu. You should see something similar to the following:

<a name="figure-users"></a>

**Figure 11.3. Users**

![Users](images/users.jpg)

You can sort the data on any of the available columns. Click the "up" arrow for an ascending sort and click the "down" arrow for a descending sort.

The `admin` user is the superuser created during installation.

### 11.2.1. Creating Users

To add a user, click the CREATE USER button.

The fields associated with users are listed below. In the user interface required fields are indicated by a red asterisk.

*   Username – Text box (required)

*   Email Address – Text box (required)

*   Set User Password – Text box

*   User Password Confirmation – Text box

*   First name – Text box

*   Last name – Text box

*   Company – Text box

*   Title – Text box

*   Department – Text box

*   Primary Phone – Text box

*   Secondary Phone – Text box

*   Active – Check box

*   Assigned Org(s) – Text area (At least one org must be selected.)

At a minimum, you must supply a User name and email address. Note that once you have assigned a User name it cannot be changed.

Once you have added a user, be sure to add roles appropriate to that user. Roles are discussed in [Section 11.2.3, “User Roles”](mc3-administration-users.php#mc3-administration-edit-user-roles "11.2.3. User Roles").

<a name="ui-2"></a>Existing Orgs appear in the Assigned Org(s) text area. To select multiple contiguous Orgs, press the **shift** key while clicking the desired Orgs. To select non-contiguous Orgs use the **control** key. To select non-contiguous Orgs on a Mac, use the **command** key.

**Editing Users. ** To change the information related to a user navigate to the USERS page, click the desired user and follow the same process.

### 11.2.2. LDAP and Users

As of Message Central version 3.6, it is possible to authenticate using LDAP rather than the Message Central database. With this feature enabled, the password input fields are disabled when you create or edit a user and you will see the following message:

<a name="figure-ldap-user"></a>

**Figure 11.4. LDAP user**

![LDAP user](images/ldap_users.jpg)

Be sure to map LDAP users to Message Central users as described in [LDAP Configuration](https://support.messagesystems.com/docs/web-mc/mc3.ldap.php). To log in to the web UI users must be defined in both LDAP and Message Central.

### 11.2.3. User Roles

To change the roles associated with a user click the EDIT USER ROLES button and then select the user you wish to edit. The available roles are shown below:

*   `Advanced Content Manager`

*   `Advanced List Manager`

*   `Advanced Mailing Assembler`

*   `Advanced Template Manager`

*   `All Users`

*   `Attachments Manager`

*   `Campaign Viewer`

*   `Content Deleter`

*   `Content Manager`

*   `Content Viewer`

*   `Exclude Contacts Viewer`

*   `global sysadmin role has access to all orgs`

*   `Header Manager`

*   `List Deleter`

*   `List Manager`

*   `List Tag Deleter`

*   `List Tag Manager`

*   `Mailing Assembler`

*   `Mailing Disabler`

*   `Mailing Sender`

*   `Momentum Manager`

*   `Org-Specific SysAdmin`

*   `Recipient Data Manager`

*   `Recipient Editor`

*   `Report Exporter`

*   `Report Viewer`

*   `superuser role for the system`

*   `Template Deleter`

*   `Template Manager`

The roles that you assign to a user determine where that user can navigate in the web UI and the actions that can be performed. These permissions are documented in [Section 11.3, “Permissions”](mc3-administration-permissions.php "11.3. Permissions").

You can edit the specifics of a role by clicking a role name and adding or removing permissions.

When you first start up Message Central all roles are specific to the Org created during installation with the exception of `root` and `global-sysadmin`. As the names would indicate, these roles are global.

| [Prev](mc3-administration.php)  | [Up](mc3-administration.php) |  [Next](mc3-administration-permissions.php) |
| Chapter 11. Administration  | [Table of Contents](index.php) |  11.3. Permissions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)