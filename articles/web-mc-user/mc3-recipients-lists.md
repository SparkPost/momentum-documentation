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

| 6.2. Lists/Segments |
| [Prev](mc3-recipients.php)  | Chapter 6. Recipients |  [Next](mc3-recipients-importing.php) |

## 6.2. Lists/Segments

A list is a set of criteria that defines a group of recipients, for example, all recipients that share a specific tag. A segment is a subset of the recipients of a list. For example, you may segment a list by gender. Typically segments are used to send different content to recipients of the same mailing. Mailings do not have to be segmented but every mailing must include at least one list.

To view existing lists and segments, choose the LISTS/SEGMENTS menu option. You should see something similar to the following:

<a name="figure-list-segments"></a>

**Figure 6.2. Lists/segments**

![Lists/segments](images/lists.jpg)

A + sign appears beside list names that have embedded lists. Embedded lists are lists that contain other lists. To view embedded lists click the +.

If the list has been counted, a number will appear in the COUNT column and a date will appear in the LAST COUNTED column. Counts are initiated by checking the check box to the left of a list name and clicking the COUNT button. Counts appear as events on the dashboard page.

The TARGETING column indicates whether or not the Use list for recipient targeting check box is checked. (See [Figure 6.3, “Adding lists”](mc3-recipients-lists.php#figure-new-list-segments "Figure 6.3. Adding lists").)

The CONTENT column indicates whether or not the Use list for mailing content segmentation check box is checked. (See [Figure 6.3, “Adding lists”](mc3-recipients-lists.php#figure-new-list-segments "Figure 6.3. Adding lists").)

If there is a download icon in the CSV column then there is a CSV file ready for download. You create a CSV file by selecting a List and then clicking the EXPORT RECIPIENTS button. Creating a CSV file takes time, so during creation a progress icon is displayed in this column. You can close the browser or navigate away from the LISTS/SEGMENTS page while a CSV file is being created; the job will continue in the background. Note that the ablity to create CSV files is permission dependent.

### Note

If you use the Momentum seedlist module, be sure to review the behavior of that module. (See "[seedlist Module](https://support.messagesystems.com/docs/web-ref/modules.seedlist.php)".) If you want to send customized mail to each recipient in a real-person seed list, then you should create a target list of recipients.

### 6.2.1. Adding a new List

To add a new list click the NEW LIST button. You should see something similar to the following:

<a name="figure-new-list-segments"></a>

**Figure 6.3. Adding lists**

![Adding lists](images/new_list_segment.jpg)

Add an appropriate name and description to the new list. List and segment names are case insensitive. For example, the names `MyList` and `mylist` identify the same list. Be sure to select the appropriate text boxes for segmentation, targeting and creating a test mailing.

### Note

Historical data fields are only available when you are creating a list for recipient targeting. These fields cannot be used for segmentation and do not display if the Use list for mail content segmentation check box is checked. Unchecking this box reveals these fields.

You must assign at least one criterion to a list before attempting to save it otherwise you will see the error message: "This List does not have any criteria and will not generate any Recipients. Please select at least one criterion before saving."

Once a list has been added, you can then edit it in simple or advanced mode as described in [Section 6.2.2, “Editing a List – Simple Mode”](mc3-recipients-lists.php#mc3-recipients-editing-lists "6.2.2. Editing a List – Simple Mode").

The check boxes Use list for recipient targeting and Use list for mailing content segmentation affect the criteria that you can choose when adding a row to a List. For details see [Section 6.2.4, “List Criteria”](mc3-recipients-lists.php#mc3-recipients-list-criteria "6.2.4. List Criteria").

If you wish to personalize content for different segments of a mailing be sure to check the segmentation check box.

### 6.2.2. Editing a List – Simple Mode

To edit a list, navigate to the LISTS/SEGMENTS menu and click the list that you wish to edit. You should see something similar to the following:

<a name="figure-edit-list"></a>

**Figure 6.4. Edit list**

![Edit list](images/edit_list.jpg)

You can change the name or description of a list by clicking the arrow to the right of the list name. You can also change whether the list is used for recipient targeting or content segmentation.

### Note

The Allow editing of Lists/Segments which are currently or were previously used by a Mailing check box on the Org administration page determines whether or not you can edit Lists/Segments that are already in use or have been used. For more information see [Section 11.1, “Organizations”](mc3-administration.php#mc3-administration-orgs "11.1. Organizations").

Begin editing a list by clicking on the green background color. You should see a dialog box such as the following:

<a name="figure-all-not"></a>

**Figure 6.5. List criteria**

![List criteria](images/all_any_not.jpg)

Pictured above are the basic query types. Choose a query type. You can change the query type later if necessary. The type of list you create varies according to circumstances. Some lists will be exclusion lists, some will be all inclusive and others conditionally inclusive. Choose a list type and click the SAVE button.

When editing a list in simple mode, next add a row to the list and choose one of the following options:

*   Embedded List – A pre-existing list

*   Single Criteria – Select a single criterion from the criteria list

*   Criteria Group – Select a number of criteria.

For example, if you are creating a single criterion list of all male recipients, you would choose `gender` and the `is` operator as shown in the following:

<a name="figure-simple-list"></a>

**Figure 6.6. Simple list**

![Simple list](images/simple_list.jpg)

Creating a criteria group list is similar to creating a single criterion list—you just choose more than one criterion.

To create a list from an embedded list, you choose an existing list.

Be sure to save your changes when you are finished.

### 6.2.3. Editing a List – Advanced Mode

For more flexibility, you can add criteria to a list using advanced mode. To do this, select a list to edit and then click ADVANCED MODE at the bottom of the page. For examples of how to build rules in advanced mode, create some rules in simple mode and then switch over to advanced mode to see what was created.

<a name="figure-advanced-list"></a>

**Figure 6.7. Advanced list**

![Advanced list](images/advanced_list.jpg)

In [Figure 6.7, “Advanced list”](mc3-recipients-lists.php#figure-advanced-list "Figure 6.7. Advanced list") the selection criteria are residents of Detroit with the tag that has an id ‘`2`’.

You can use any of the criteria listed in [Section 6.2.4, “List Criteria”](mc3-recipients-lists.php#mc3-recipients-list-criteria "6.2.4. List Criteria"). However, use lowercase letters only; camel case is used for readability only. You can also use any aggregate or relational fields. For more information on setting up relations see the RELATIONAL DATA menu. For more information see [Section 11.5, “Relational Data”](mc3-administration-relations.php "11.5. Relational Data"). (This menu is available as of version 3.2.)

### 6.2.4. List Criteria

As noted earlier, the check boxes Use list for recipient targeting and Use list for mailing content segmentation affect the criteria that you can choose when adding a row to a List.

If you check Use list for recipient targeting only, then the following criteria are available when you add a row:

*   `Address Line 1`

*   `Address Line 2`

*   `Birth Date`

*   `City`

*   `Contact ID`

*   `Content Type`

*   `Country`

*   `Created`

*   `E-mail Address`

*   `E-mail Domain`

*   `First Name`

*   `Gender`

*   `Language`

*   `Last Name`

*   `Phone Number 1`

*   `Phone Numbner 2`

*   `Postal Code`

*   `Region`

*   `anyLinkClicked`

*   `bounced`

*   `bounceType`

*   `delivered`

*   `linkClicked`

*   `linkGrpClicked`

*   `openedMailing`

*   `openedSegement`

*   `receivedSegment`

*   `sent`

If only Use list for mailing content segmentation is checked, the following recipient fields are available:

*   `Address Line 1`

*   `Address Line 2`

*   `Birth Date`

*   `City`

*   `Contact ID`

*   `Content Type`

*   `Country`

*   `Created`

*   `E-mail Address`

*   `E-mail Domain`

*   `First Name`

*   `Gender`

*   `Language`

*   `Last Name`

*   `Phone Number 1`

*   `Phone Numbner 2`

*   `Postal Code`

*   `Region`

Since segments are used to send different content to different segments of the same mailing, only recipient fields are available as segmentation criteria.

If both check boxes are checked, the available items are the same as the Use list for mailing content segmentation list shown above.

### Note

The criteria shown in the lists in this section are the defaults. You can add criteria using the List Builder Criteria menu option. For more information see [Section 11.8, “List Builder Criteria”](mc3-administration-list-builder-criteria.php "11.8. List Builder Criteria").

| [Prev](mc3-recipients.php)  | [Up](mc3-recipients.php) |  [Next](mc3-recipients-importing.php) |
| Chapter 6. Recipients  | [Table of Contents](index.php) |  6.3. Import Lists |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)