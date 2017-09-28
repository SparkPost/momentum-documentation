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

| 5.4. Remediation |
| [Prev](msc.ui.flag.message.php)  | Chapter 5. Message Scope Web UI |  [Next](msc.ui.exports.php) |

## 5.4. Remediation

A user can make near real-time changes to Momentum policy by adding items to lists. Users have the ability to manage and review their Remediation Lists by searching current Remediation Lists, creating new Remediation Lists, and managing entries for each Remediation List.

Remediation lists let you control the flow of mail in the following ways:

*   By adding a given recipient with a particular source IP to specific white or black list for a configurable length of time

*   By adding a given sender to a list for a configurable length of time

*   By adding a given source IP, and putting it on a named list for a configurable length of time

Remediation actions are audited so that the user who created or edited a rule is recorded along with a reason for the edit.

To manage remediation lists, click the REMEDIATION LISTS menu option. On the left hand side of the page you should see something similar to the following:

<a name="figure_remediation_list1"></a>

**Figure 5.7. Remediation list**

![Remediation list](images/remediation_list1.jpg)

When you mouse over a remediation list, a pop-up hint displays a description of the list.

On the right are details related to the currently selected list:

<a name="figure_remediation_list2"></a>

**Figure 5.8. Remediation list details**

![Remediation list details](images/remediation_list2.jpg)

To create a new remediation list click the New Remediation List button. You should see something similar to the following:

<a name="figure_add_list"></a>

**Figure 5.9. Adding a remediation list**

![Adding a remediation list](images/add_list.jpg)

Select a type from the radio buttons. The types are:

*   From/To

*   IP

*   IP/To

You can also choose an expiration setting and use that setting as a default.

### Note

IP addresses can use either IPv4 or IPv6 format.

Be careful when creating a list. Lists cannot be edited nor can they be deleted.

### 5.4.1. Adding an Entry to a List

To add a new entry to a list, select the list (see [Figure 5.7, “Remediation list”](msc.ui.remediation.php#figure_remediation_list1 "Figure 5.7. Remediation list")) that you wish to add an entry to. Then click the New List Entry button. Doing this opens a pop-up window as shown below:

<a name="figure_add_list_entry"></a>

**Figure 5.10. Adding an entry to a list**

![Adding an entry to a list](images/add_list_entry.jpg)

Complete the entry form. The Notes field is optional. Save your new entry by clicking the Add button and you should see a new entry in the list detail column on the right. This example shows a From/To list.

### Note

When adding an entry to a list the appearance of the pop-up window varies with the list type. [Figure 5.10, “Adding an entry to a list”](msc.ui.remediation.php#figure_add_list_entry "Figure 5.10. Adding an entry to a list") shows a screen appropriate to a From/To list. An IP/To list would ask for an IP address and not a sender's address.

To edit an entry, click it. You should see something similar to the following:

<a name="figure_list_entry_details"></a>

**Figure 5.11. List entry details**

![List entry details](images/list_entry_details.jpg)

You can extend or reduce the expiration date.

### 5.4.2. Search

Use the search text box pictured in [Figure 5.8, “Remediation list details”](msc.ui.remediation.php#figure_remediation_list2 "Figure 5.8. Remediation list details") to search for specific remediation list entries.

Using the search text box you can search for values in the From/IP or the To/IP/Mask columns. Partial values are allowed but wild cards are not.

| [Prev](msc.ui.flag.message.php)  | [Up](msc.ui.php) |  [Next](msc.ui.exports.php) |
| 5.3. Adding a Message to a List  | [Table of Contents](index.php) |  5.5. Exports |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)