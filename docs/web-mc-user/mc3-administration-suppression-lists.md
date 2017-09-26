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

| 11.4. Suppression Lists |
| [Prev](mc3-administration-permissions.php)  | Chapter 11. Administration |  [Next](mc3-administration-relations.php) |

## 11.4. Suppression Lists

To view existing suppression lists, choose the SUPPRESSION LISTS menu option from the ADMIN menu.

From this page you should see all recipients on suppression lists.

<a name="figure-suppression"></a>

**Figure 11.5. Suppression lists**

![Suppression lists](images/suppression_list.jpg)

By default the suppression list page displays all recipients on suppression lists. You can limit the recipients shown using the search text box. Enter a search criterion and click the search icon to find recipients by name or description.

Depending upon your permissions, you can toggle between global and org-specific views using the VIEW ORG LIST and VIEW GLOBAL LIST buttons. To add a recipient click the ADD NEW CONTACT button. If the current view is org-specific, the recipient that you add will be added to the suppression list for the current org. Likewise with the global view.

When adding to suppression lists you can choose to add a specific email address or, if you click the Advanced button you may enter a PCRE expression.

To remove a recipient from a suppression list check the check box beside the recipient's name and then click the DELETE button. Check multiple buttons to remove multiple recipients.

| [Prev](mc3-administration-permissions.php)  | [Up](mc3-administration.php) |  [Next](mc3-administration-relations.php) |
| 11.3. Permissions  | [Table of Contents](index.php) |  11.5. Relational Data |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)