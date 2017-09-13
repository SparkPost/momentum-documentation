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

| 48.6. Deleting a Template |
| [Prev](web-ui.templates.publish.php)  | Chapter 48. Managing Your Templates in the UI |  [Next](using_template.php) |

## 48.6. Deleting a Template

From the Templates tab, you can select a template to delete. Select the template you wish to delete by clicking its label. The detailed view of the template is displayed.

To delete your template, click the arrow on the right-hand side of the Save Draft button. In the list, click Delete, as shown in [Figure 48.12, “Delete Template”](web-ui.templates.delete.php#figure_delete_template "Figure 48.12. Delete Template").

<a name="figure_delete_template"></a>

**Figure 48.12. Delete Template**

![Delete Template](images/delete_template.png)

The `Delete` option is a "hard delete". ALL versions of the template will be deleted from the system, both published AND draft versions.

If you delete a template DURING the build of a transmission that is currently using that template, you will get an error in the response. You must retry the delete when the template is no longer being used.

| [Prev](web-ui.templates.publish.php)  | [Up](web-ui.templates.php) |  [Next](using_template.php) |
| 48.5. Publishing Your Template  | [Table of Contents](index.php) |  Chapter 49. Using Stored Templates |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)