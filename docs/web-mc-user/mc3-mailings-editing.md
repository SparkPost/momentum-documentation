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

| 5.3. Editing a Mailing |
| [Prev](mc3-mailings-adding.php)  | Chapter 5. Mailings |  [Next](mc3-recipients.php) |

## 5.3. Editing a Mailing

To manipulate mailings navigate to the MAILINGS page and click the mailing row that you wish to edit. The default view is the OVERVIEW tab with the EDIT tab selected as shown in the following:

<a name="figure-edit-mailing"></a>

**Figure 5.4. Edit mailing**

![Edit mailing](images/edit_mailing.jpg)

### 5.3.1. The Overview Tab

From the OVERVIEW tab you can change the name, description and campaign by clicking on the down arrow to the right of the mailing name. Do this and you should see something similar to the following:

<a name="figure-mailing-class"></a>

**Figure 5.5. Mailing classes**

![Mailing classes](images/mailing_class.jpg)

From this screen, you can also choose to classify your mailing. The classes of mailings are as follows:

*   Mass Mailing

*   Life-Cycle Mailing

*   Transactional Mailing

The default value for the mailing class is `none`. Mailing classifications serve to help identify a mailing; they have no functional purpose. If you choose to classify your mailing, this description shows up on the MAILINGS page under the MAILING CLASS column. For a description of the different mailing classes see [Glossary](mc3-glossary.php "Glossary").

A number of tab options are available from the OVERVIEW tab. These are discussed here in detail.

**5.3.1.1. Edit**

If you have set the recipients for this mailing you can click the Count link to begin a count of the recipients for the current mailing. Once you start a count, it shows up as an event on the dashboard.

From the Overview – Edit page you can also change the content and the recipients. For more information on this topic see [Chapter 6, *Recipients*](mc3-recipients.php "Chapter 6. Recipients") and [Chapter 7, *Content*](mc3-content.php "Chapter 7. Content").

When editing a mailing, from the OVERVIEW tab you can also set additional options as shown in the following:

<a name="figure-additional-mailing"></a>

**Figure 5.6. Additional options**

![Additional options](images/additional_mailing.jpg)

### Note

If you do not have sufficient rights, additional options may not be available.

Use the Additional Options screen to set options that apply to this specific mailing. These include:

*   Binding groups

    The BINDING GROUPS list displays both bindings *and* binding groups. Binding groups are indicated by the prefix `group:` and bindings have no prefix.

*   DKIM and DomainKeys Signing. If these options are not enabled in the parent org, these options will not appear in the `Additional options` frame.

*   Whether recipients can receive more than one copy of a mailing

*   Eligible for Regeneration

*   Momentum Instructions

You can add mailing-level validation context variables using the Momentum Instructions text box. Mailing-level "Momentum Instructions" will override any campaign-level or org-level instructions bearing the same name.

Campaigns inherit binding groups from orgs. Mailings only inherited binding groups that are activate in their parent campaign. For example, in [Figure 5.6, “Additional options”](mc3-mailings-editing.php#figure-additional-mailing "Figure 5.6. Additional options"), the `MyBinding` binding group must be set up in the org (as described in [Section 11.1.2, “The Permitted Bindings”](mc3-administration.php#mc3-administration-orgs-permitted-bindings "11.1.2. The Permitted Bindings")) *and* added to the parent campaign. Within the mailing, you can choose to use this binding or not as suits your purpose.

Like binding groups, campaigns inherit signing characteristics from their org. However, even when signing characteristics are not turned on for a campaign, you can turn them on or off for a specific mailing in a campaign. If both DomainKeys and DKIM signing are active for this mailing's campaign then both are active for a child mailing. However, you can turn them off if necessary. (Note that signing options do not appear in [Figure 5.6, “Additional options”](mc3-mailings-editing.php#figure-additional-mailing "Figure 5.6. Additional options") because these options are not enabled in the parent org.)

If you wish to use Intelligent Message Disposition (IMD), check the Eligible for regeneration check box. For more information about IMD see [Intelligent Message Disposition](https://support.messagesystems.com/docs/web-mc/mc-post-installation.imd.php).

Momentum instructions are also inherited from the parent campaign or org. However, unlike bindings, additional Momentum instructions can also be added at this level. Click the + button to add a Momentum instruction.

You can only permanently remove Momentum instructions that belong to the mailing. The UI will allow you to select an inherited instruction and click the - button but inherited instructions cannot be permanently removed except at the level they were created. You may only remove an org-level instruction from the org itself or a campaign-level instruction from the campaign.

### Note

If a mailing is moved to a different campaign, that mailing inherits the new campaign settings but keeps any mailing overrides. For example, `CampaignA` has "Sign with DKIM" set to "`off`" and `MailingA` is part of this campaign. However, in `MailingA` "Sign with DKIM" is set to "`on`". `CampaignB` also has "Sign with DKIM" set to "`off`". If MailingA is moved to CampaignB it retains the "`on`" setting for DKIM signing.

Save any changes by clicking the UPDATE button.

From the Additional Options frame, you can also unarchive a mailing and export recipients. The buttons for performing these operations are disabled if the operations are not applicable.

**5.3.1.2. Ready**

Use the READY tab when you wish to change the status of the mailing to ready. This tab is only enabled if contents and recipients have be associated with the mailing.

### 5.3.2. The Schedule Tab

The appearance of the SCHEDULE tab varies depending upon the scheduling option of the mailing. For more information see [Figure 5.3, “New mailing”](mc3-mailings-adding.php#figure-new-mailing "Figure 5.3. New mailing").

If your mailing is for immediate delivery, this screen simply displays the scheduled delivery. If you created a scheduled mailing, you should see something similar to the following

<a name="figure-schedule-mailing"></a>

**Figure 5.7. Scheduling**

![Scheduling](images/scheduling.jpg)

The Web UI was designed to support only one encoding in the browser: English (United States). Scheduling a mailing requires US format for date and time values. These values are converted internally by a library that uses the web browser's localization setting to determine the expected format. The behavior of Message Central is undefined if you use a locale other than English (United States).

From this window you can only adjust the start date of the mailing if the mailing is a scheduled mailing. For a recurring mailing you can set the start time, the end time and the interval.

### Warning

When creating a recurring mailing choose the interval carefully. If a mailing takes longer to generate than the occurence interval, you *may* generate duplicate messages for a recipient.

Once a schedule has be set, the SCHEDULED DELIVERIES text box will be populated.

**Note About Daylight Savings Time**

Please note the following behavior for mailings scheduled for delivery on the day that Daylight Savings Time (DST) begins or ends.

When DST starts the clock goes from 1:59:59 AM to 3:00:00 AM. Any items scheduled for 2:00:00 AM to 2:59:59 AM will not be executed during the DST shift.

When DST ends the clock goes from 1:59:59 AM to 1:00:00 AM. Any items scheduled for 1:00:00 AM to 1:59:59 AM will be executed twice, once during the first hour (1:00 to 1:59 AM) and then again during the second hour instance of the 1:00 AM hour.

### 5.3.3. The Recipients Tab

When no filter is applied to the AVAILABLE CONTACTS column, this column shows all the existing lists.

Use this tab to associate recipients with a mailing. Mouse over the lists in the left hand column for detailed information about a list. Move lists to the included or excluded columns by picking up lists.

<a name="figure-recipients-mailing"></a>

**Figure 5.8. Adding recipients to a mailing**

![Adding recipients to a mailing](images/recipients_mailing.jpg)

You may need to create a new list of recipients for your mailing. For instructions on doing this see [Section 6.2, “Lists/Segments”](mc3-recipients-lists.php "6.2. Lists/Segments").

When your mailing is a direct access mailing the appearance of this tab is markedly different. The following section describes these differences.

**5.3.3.1. Direct Access Mailing**

Direct access mailings are available for installations of Message Central that can run in Direct Access mode. For a description of this mode see [Modes](https://support.messagesystems.com/docs/web-mc/mc3-modes.php).

### Note

If you are running a direct access mailing and restart the database, the [pe2sched](https://support.messagesystems.com/docs/web-mc/mcsched.php) process must be restarted manually in order for the listener to reconnect to the database. This is also applicable to api-triggered mailings.

The only option available for a direct access mailing is ODBC. To use CSV data with a direct access mailing you must use the REST API.

When the mailing type is set to `Direct Access` the Recipients tab shows the following screen:

<a name="figure-direct-access-mailing"></a>

**Figure 5.9. Direct access mailing**

![Direct access mailing](images/direct_access_mailing.jpg)

As indicated in [Figure 5.9, “Direct access mailing”](mc3-mailings-editing.php#figure-direct-access-mailing "Figure 5.9. Direct access mailing"), the `ODBC` driver requires the following options:

*   Database Driver (required)

*   Host (required)

*   Port (required)

*   Username (required)

*   Password

*   Database name (required)

*   Extra Connection String Data

*   Data Query (required)

*   Column Names (required)

*   Column Defaults (required)

The Database Driver text box defaults to `MsysFreeTDS`. Mousing over the text box reveals additional information about this driver. Mousing over the other text boxes also yields further information.

### Warning

When creating a direct-access mailing you must have a field that identifies the email address and you must use the name `emailaddress` for this field.

If, for example, the email address field is identified as `email` in the source table, you must change the column name to `emailaddress`.

Also note that no validation rules are applied to direct-access mailings initiated through the web UI.

Because no validation rules are applied, it is possible to misidentify the server hosting an ODBC database. If you then set the mailing to the ready state, you cannot alter it; you have no recourse but to cancel the mailing and then recreate it.

Note that when creating a direct-access mailing from the REST API the validation code makes it impossible to create a mailing misconfigured in this way.

When a direct access mailing is in the `Run` state you cannot edit the mailing—the Edit button is disabled.

**5.3.3.1.1. Retention of External Data**

Currently, when creating a direct access mailing the retention period for the transient data imported into Message Central is hard coded to `14` days. If you must change this value you will have to alter the `purge_external_contact_data` function found in the `maincontrol` schema. Change the value of "days" in the following declaration:

`v_expire_after interval := coalesce(p_expire_after, '14 days');`
### Note

This is a temporary workaround only. In future versions of Message Central, data retention will be controlled by a configuration option.

The `purge_external_contact_data` runs every Wednesday at 11 PM in the org's time zone. This means that if a direct access mailing is run on a Thursday, the transient data will be removed twenty days later.

### 5.3.4. The Content Tab

Use the CONTENT tab to associate content with a mailing. From the CONTENT tab you can assign content and also split your configuration.

If you do not already have content associated with a mailing, you can add it by clicking the center of the content assignment tab. Doing this lets you choose from existing content. Click any content that you wish to associate with the current mailing. You may choose as many different contents as you like.

When you are finished selecting content, click the CHOOSE button and the content you have chosen appears in the CONTENT ASSIGNMENT tab.

The content you have chosen should appear as follows:

<a name="figure-choosing-content"></a>

**Figure 5.10. Choosing content**

![Choosing content](images/choosing_content.jpg)

A thumbnail of the content is shown beside the name of the content.

For more information about creating content see [Chapter 7, *Content*](mc3-content.php "Chapter 7. Content").

**5.3.4.1. Splitting Configuration**

When splitting your configuration you have the choices shown in the following image:

<a name="figure-splitting-content"></a>

**Figure 5.11. Splitting content**

![Splitting content](images/splitting_content.jpg)

You can choose not to split your mailing, or to split it by:

*   Segment – choose the applicable segments and a priority for each segment. See [Figure 5.12, “Splitting by segment”](mc3-mailings-editing.php#figure-splitting-segments "Figure 5.12. Splitting by segment").

*   By percentage – define which percentage of the recipient list should receive which content. There must always be at least two splits and all split percentages must add up to 100%. If the splits do not add up correctly, the new configuration will not be saved.

<a name="figure-splitting-segments"></a>

**Figure 5.12. Splitting by segment**

![Splitting by segment](images/splitting_segments.jpg)

When you split a mailing by segment this means that each segment will receive a different piece of content. This is different from *personalizing* content by segment. For more information on this topic see ["Using a List as an Argument in a Dynamic Content Macro"](https://support.messagesystems.com/docs/web-mc/enhanced.dynamic.content.lists.php) and [Section 7.2.4, “Conditional Content”](mc3-content-editing.php#mc3-content-conditional "7.2.4. Conditional Content").

### 5.3.5. A/B Split Test

To create a split mailing you must choose the `A/B Split Mailing` type when you add a mailing as described in [Section 5.2, “Creating a Mailing”](mc3-mailings-adding.php "5.2. Creating a Mailing"). If you do not choose this mailing type when the mailing is added, the tab, SPLITTING CONFIGURATION, as shown in [Figure 5.13, “A/B split test”](mc3-mailings-editing.php#figure-splitting-ab-split "Figure 5.13. A/B split test"), will not be available from the CONTENT tab.

### Note

A/B Splits do not apply to recurring mailings.

**5.3.5.1. Splitting Configuration**

This type of split mailing defines a sampling test of at least two segments. A small portion of each segment will receive separate content. After a defined period of time (in hours), the content which registers the most interaction (either opens or clicks) is sent to the rest of the recipient list.

<a name="figure-splitting-ab-split"></a>

**Figure 5.13. A/B split test**

![A/B split test](images/splitting_ab_split.jpg)

Choose either `Clicks` or `Opens` from the list box following "Track". You can add yet another split by clicking the Add Split To Test link.

**5.3.5.2. Content Assignment – Split Mailing**

To assign different content to the different segments of a split mailing click the CONTENT ASSIGNMENT tab. You should see something similar to the following:

<a name="figure-splitting-content-assignment"></a>

**Figure 5.14. Splitting content**

![Splitting content](images/splitting_content_assignment.jpg)

There should be a content frame for each segment assigned under the SPLITTING CONFIGURATION tab.

To assign content to a segment, click the desired content frame. This opens a pop-up window showing defined content. Click the desired content to assign it to a segment.

| [Prev](mc3-mailings-adding.php)  | [Up](mc3-mailings.php) |  [Next](mc3-recipients.php) |
| 5.2. Creating a Mailing  | [Table of Contents](index.php) |  Chapter 6. Recipients |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)