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

| Chapter 6. Recipients |
| [Prev](mc3-mailings-editing.php)  |   |  [Next](mc3-recipients-lists.php) |

## Chapter 6. Recipients

**Table of Contents**

<dl class="toc">

<dt>[6.1\. Recipients](mc3-recipients.php#mc3-recipients-editing)</dt>

<dt>[6.2\. Lists/Segments](mc3-recipients-lists.php)</dt>

<dt>[6.3\. Import Lists](mc3-recipients-importing.php)</dt>

<dt>[6.4\. List Tags](mc3-recipients-list-tags.php)</dt>

<dt>[6.5\. Profile Fields](mc3-administration-profile-fields.php)</dt>

</dl>

From this menu item you can manage all tasks related to recipients:

*   Add or edit recipients.

*   Add or edit lists and segments. For a definition of both these terms see [Glossary](mc3-glossary.php "Glossary").

*   Import recipients and view import lists.

*   Create and view list tags. Tags are indicators that can be associated with recipients.

*   Create profile fields. These are customized data fields.

## 6.1. Recipients

A recipient is a person, inbox, or email address that receives a message.

If you already have recipients in the database, you should see something similar to the following:

<a name="figure-recipients"></a>

**Figure 6.1. Recipients**

![Recipients](images/recipients.jpg)

You can sort the data on any of the available columns. Click the "up" arrow for an ascending sort and click the "down" arrow for a descending sort.

Recipient records are displayed on pages that hold a maximum of fifty records. When results are not sorted, the most recently changed records appear at the top of the list. Navigate to another page by pressing the appropriate page number or by clicking the PREV or NEXT link.

Mousing over a row, highlights that row, and clicking on a row reveals all the details associated with that row.

If you wish to edit a record, click on the appropriate row, make the desired changes and then click SUBMIT.

If your changes are successful, you are returned to recipients page and the message, `The recipient was updated successfully.`, appears at the top of the page.

If you wish, you can quickly unsubscribe a number of users by clicking the check box beside a user and then clicking the UNSUBSCRIBE button. You can duplicate records using the check box and the DUPLICATE button.

Bulk loading recipients is the easiest way to rapidly add recipients to Message Central. This process is described in [Section 6.3, “Import Lists”](mc3-recipients-importing.php "6.3. Import Lists"). If you wish to add recipients individually, navigate to the recipients page by clicking the Recipients menu item.

### 6.1.1. Searching Recipients

You can manipulate the records that are displayed on the recipients page by adding or removing filters. To add a filter, click the FILTERS button. The filters are `Subscribed`, `Unsubscribed` and any tags that you may have defined. For more information about tags see [Section 6.4, “List Tags”](mc3-recipients-list-tags.php "6.4. List Tags").

Clicking the UPDATE button returns you to the recipients page and displays the number of recipients that match the chosen filters. The filter button also changes color and indicates the number of filters that have been applied.

You can also search for text in any of the EMAIL ADDRESS, FIRST NAME or LAST NAME fields by entering your search criterion into the text box to the left of the FILTERS button. Next, press the FILTERS button and the UPDATE button. For example, entering `comcast` finds any recipients with an email address that includes `comcast`. Clear text from the text box by placing the cursor in the text box. Update your search by then clicking the FILTERS button and the UPDATE button.

### 6.1.2. Adding Recipients

To add new recipients use the NEW RECIPIENT button. The fields you may enter are as follows:

*   `First Name` – Text box.

*   `Last name` – Text box.

*   `Email` – Text box.

*   `Gender` – Drop down list box

*   `Birhtdate` – Text box.

*   `Language` – Drop down list box

*   `Address` – Text box.

*   `Address 2` – Text box.

*   `City` – Text box.

*   `Region` – Text box. For U. S. addresses enter the state, for Canadian addresses the province and so on.

*   `Postal Code` – Text box.

*   `Country` – Drop down list box.

*   `Phone` – Text box.

*   `Phone 2` – Text box.

*   `Subscribed` – Drop down list box.

*   `Content Type` – Drop down list box.

*   *`Profile Fields`*         – Any profile fields added to an Org appear after `Content Type`.

*   `Tags` – List box of available tags.

For more information about *`Profile Fields`*         see [Section 6.5, “Profile Fields”](mc3-administration-profile-fields.php "6.5. Profile Fields").

To associate a tag with a recipient, select it when adding or updating a recipient. Tags that are associated with a recipient, are displayed on a grey background.

You can asociate more than one tag with a recipient. To select contiguous tags use the **shift** key and the mouse. To select non-contiguous keys, use the **control** key. (On a Mac use the **command** key.)

You must enter fields that are defined as key fields for the organization that the recipient is associated with. For more information see [Section 11.1.4, “Unique Key Fields”](mc3-administration.php#mc3-administration-orgs-key-fields "11.1.4. Unique Key Fields").

| [Prev](mc3-mailings-editing.php)  |   |  [Next](mc3-recipients-lists.php) |
| 5.3. Editing a Mailing  | [Table of Contents](index.php) |  6.2. Lists/Segments |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)