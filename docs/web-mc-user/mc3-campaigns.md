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

| Chapter 4. Campaigns |
| [Prev](mc3-monitor.php)  |   |  [Next](mc3-campaign-editing.php) |

## Chapter 4. Campaigns

**Table of Contents**

<dl class="toc">

<dt>[4.1\. Adding a Campaign](mc3-campaigns.php#mc3-campaign-adding)</dt>

<dt>[4.2\. Editing a Campaign](mc3-campaign-editing.php)</dt>

</dl>

To manipulate campaigns, choose the CAMPAIGNS menu. The campaigns page displays campaigns in tabular format showing statistics related to those campaigns. You should see something similar to the following:

<a name="figure-campaigns"></a>

**Figure 4.1. Campaigns**

![Campaigns](images/campaigns.jpg)

You can sort the data on any of the available columns. Click the up arrow for an ascending sort and click the down arrow for a descending sort.

The DELIVERED column shows the emails delivered as a percentage of those sent. Opens and clicks are shown as a percentage of those delivered.

The DATE CREATED column shows the date the campaign started generating or the first message if the mailing is recurring or triggered.

The DATE ENDING column shows the date the last message was delivered for that campaign.

By default the campaigns page displays all existing campaigns. You can limit the campaigns shown using the search text box. Enter a search criterion and click the search icon to find campaigns by name or description.

To view the specific mailings associated with a campaign, click the + button to the left of the campaign name. Doing this displays detailed information related to the mailing.

### Note

Currently, the OPENS, DELIVERED and CLICKS columns do not display accurate imformation. Regardless of the statistcs, `n/a` is displayed. This will be corrected in a future release. For accurate information about opens, delivered and clicks see [Chapter 8, *Reports*](mc3-reports.php "Chapter 8. Reports").

You can edit a campaign by clicking on the row associated with a mailing. Editing a campaign is described in [Section 4.2, “Editing a Campaign”](mc3-campaign-editing.php "4.2. Editing a Campaign").

## 4.1. Adding a Campaign

To add a new campaign, click the NEW CAMPAIGN button on the CAMPAIGNS home page. Simply enter a name and description and click the CREATE button.

<a name="figure-new-campaign"></a>

**Figure 4.2. New campaign**

![New campaign](images/new_campaign.jpg)

The Web UI was designed to support only one locale in the browser: English (United States). You must use US format for date and time values. These values are converted internally by a library that uses the web browser's localization setting to determine the expected format. The behavior of Message Central is undefined if you use a locale other than English (United States).

Note that you cannot have duplicate campaign names. Putting the cursor in the Start Date or the End Date opens a "Date Chooser" widget. When entering the time use one or two digits for the hour and, if you enter the minutes, separate them from the hour using a ‘`:`’. You may use one or two digits when specifying the minutes.

Once a campaign has been created, you can then edit its details.

| [Prev](mc3-monitor.php)  |   |  [Next](mc3-campaign-editing.php) |
| Chapter 3. Monitor  | [Table of Contents](index.php) |  4.2. Editing a Campaign |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)