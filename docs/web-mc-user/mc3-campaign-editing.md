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

| 4.2. Editing a Campaign |
| [Prev](mc3-campaigns.php)  | Chapter 4. Campaigns |  [Next](mc3-mailings.php) |

## 4.2. Editing a Campaign

To manipulate an existing campaign, navigate to the CAMPAIGNS page and click the campaign row that you wish to edit. You should see something similar to the following:

<a name="figure-edit-campaign"></a>

**Figure 4.3. Edit a campaign**

![Edit a campaign](images/edit_campaign.jpg)

The BINDING GROUPS frame displays both bindings *and* binding groups. Binding groups are indicated by the prefix `group:` and bindings have no prefix.

To change a campaign name or description, click the arrow to the right of the campaign name. Make the desired changes and click the UPDATE button.

When editing a campaign you can also set the signing characteristics, bindings, binding groups, Intelligent Message Disposition (IMD) status and Momentum Instructions of the campaign.

If you wish to use IMD, set the the Eligible for Regeneration? list box to `Yes`. Use `Inherit` if you want the campaign to inherit the Org's setting. For more information about IMD see [Intelligent Message Disposition](https://support.messagesystems.com/docs/web-mc/mc-post-installation.imd.php).

Binding groups are inherited from the org that the mailing is associated with. Only bindings set up for the org will be displayed. For more information see [Section 11.1.2, “The Permitted Bindings”](mc3-administration.php#mc3-administration-orgs-permitted-bindings "11.1.2. The Permitted Bindings").

Signing characteristics are also inherited from the org. In [Figure 4.3, “Edit a campaign”](mc3-campaign-editing.php#figure-edit-campaign "Figure 4.3. Edit a campaign"), only DomainKeys signing has been set up for this org. For more information about signing and orgs see [Section 11.1, “Organizations”](mc3-administration.php#mc3-administration-orgs "11.1. Organizations").

Variables inherited from the org appear in Momentum Instructions text box but this text box is also used to define validation context variables that apply to the current campaign. Click the + button to add a new campaign-level Momentum instruction.

From this screen, you can only permanently remove Momentum instructions that belong to the campaign. The UI will allow you to select an inherited instruction and click the - button but inherited instructions can only permanently be removed by removing them from the org.

Save any changes by clicking the UPDATE button.

| [Prev](mc3-campaigns.php)  | [Up](mc3-campaigns.php) |  [Next](mc3-mailings.php) |
| Chapter 4. Campaigns  | [Table of Contents](index.php) |  Chapter 5. Mailings |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)