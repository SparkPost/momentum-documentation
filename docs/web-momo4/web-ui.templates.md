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

| Chapter 48. Managing Your Templates in the UI |
| [Prev](stored_template.php)  | Part VII. Message Generation (HTTP) |  [Next](web-ui.templates.create.php) |

## Chapter 48. Managing Your Templates in the UI

**Table of Contents**

<dl class="toc">

<dt>[48.1\. Viewing Your Templates](web-ui.templates.php#web-ui.templates.view)</dt>

<dt>[48.2\. Creating a Template](web-ui.templates.create.php)</dt>

<dt>[48.3\. Previewing and Testing Your Template](web-ui.templates.preview.php)</dt>

<dt>[48.4\. Updating Your Template](web-ui.update.template.php)</dt>

<dt>[48.5\. Publishing Your Template](web-ui.templates.publish.php)</dt>

<dt>[48.6\. Deleting a Template](web-ui.templates.delete.php)</dt>

</dl>

<a class="indexterm" name="idp4664224"></a>

**Configuration Change. ** Version 4.1 and later support managing your templates using the UI.

You can manage your templates using the Templates API or the Templates section in the UI. The UI enables you to easily view details about your templates, create new templates, preview, test, and update existing templates, publish your templates, and delete templates you no longer need.

## 48.1. Viewing Your Templates

The Templates tab provides a tabular view of your existing templates, as shown in [Figure 48.1, “Templates Table”](web-ui.templates.php#figure_templates_list "Figure 48.1. Templates Table"). The following information is displayed in the table for each template:

*   Label - Label specified when you created the template

    To view the description of a template, hover over the label.

*   ID - ID specified when you created the template

*   Status - Whether the template is a draft or has been published

<a name="figure_templates_list"></a>

**Figure 48.1. Templates Table**

![Templates Table](images/templates_list.png)

Use the controls located above and below the table to select the number of items per page. You can sort by any column in ascending or descending order by clicking the sorting icon in the column header. This icon is visible in the header of the currently sorted column. If the icon is not visible, hover over the name in the header, and the icon will appear. You can also filter the templates by Draft or Published to display only the templates in each category. Click the filter icon in the header of the Status column to select a filter from the drop-down list.

You can export your template list to a CSV file. Click the Save as CSV button to export the data.

### Note

Internet Explorer, version 9 does not support exporting data to a CSV file. If you need this function, upgrade Internet Explorer or use Firefox.

To view the details of a template, click its label to open a detailed view.

| [Prev](stored_template.php)  | [Up](p.http_rest.php) |  [Next](web-ui.templates.create.php) |
| Chapter 47. Creating Stored Templates  | [Table of Contents](index.php) |  48.2. Creating a Template |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)