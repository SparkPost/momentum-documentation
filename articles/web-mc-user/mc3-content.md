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

| Chapter 7. Content |
| [Prev](mc3-administration-profile-fields.php)  |   |  [Next](mc3-content-editing.php) |

## Chapter 7. Content

**Table of Contents**

<dl class="toc">

<dt>[7.1\. Adding New Content](mc3-content.php#mc3-content-adding)</dt>

<dt>[7.2\. Editing New Content](mc3-content-editing.php)</dt>

<dt>[7.3\. Using SOURCE Mode](mc3-content-source-mode.php)</dt>

<dt>[7.4\. Previewing Content](mc3-content-previewing.php)</dt>

<dt>[7.5\. Content Link Tracking](mc3-content-link-tracking.php)</dt>

<dt>[7.6\. Content Attachments](mc3-content-attachments.php)</dt>

</dl>

To manipulate content, choose the CONTENT menu. You should see something similar to the following:

<a name="figure-content"></a>

**Figure 7.1. Content**

![Content](images/content.jpg)

You can sort the data on any of the available columns. Click the "up" arrow for an ascending sort and click the "down" arrow for a descending sort.

By default the content page displays all existing content. You can limit what is shown by using the search text box. Enter a search criterion and click the search icon to find content by name or description.

The padlock icon indicates that content cannot be edited—for example when a mailing is in progress or has completed. However, as of version 3.6 you can view content in source mode even when a mailing is locked. This also applies to the content of archived mailings.

The CONTENT TYPE column indicates whether the content is an email or an email template.

You can also filter what is displayed using the FILTER button. Select the Show Archived check box to display only archived content.

### Note

RFC822 content created using the content REST API is only visible in the web UI if you post it as binary data. For example, when using curl, supply the `--data-binary` switch.

You can delete, archive or duplicate content by selecting the check box on the left and clicking the appropriate button.

## 7.1. Adding New Content

To add new content, click the NEW CONTENT button on the CONTENT home page.

<a name="figure-new-content"></a>

**Figure 7.2. New content**

![New content](images/new_content.jpg)

You can choose to create new content, create a new content template or, if you have already created a template, create content from an existing template.

Once new content is created, you can edit it.

| [Prev](mc3-administration-profile-fields.php)  |   |  [Next](mc3-content-editing.php) |
| 6.5. Profile Fields  | [Table of Contents](index.php) |  7.2. Editing New Content |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)