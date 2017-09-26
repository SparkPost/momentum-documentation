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

| 1.3. Evaluating Your Campaign Performance |
| [Prev](mmc-ui.reports.viewing.reports.php)  | Chapter 1. Reports and Engagement Tracking |   |

## 1.3. Evaluating Your Campaign Performance

Knowing how many of your messages were opened and what links within the messages were selected are critical pieces in evaluating your campaign's success. The UI provides this engagement data in one specialized report. Use this Engagement report to view details about the performance of your messages and links.

### 1.3.1. Engagement Report

The Engagement report is specially designed to enable you to drill down to the level of a link within your message. The only applicable filters for this report are time period, campaign, and template. To select these filters, go to the Summary section, select your time period, and then filter on your campaign and/or template either by selecting the name in the table or by entering it in the Search box. Next, go to the Engagement section.

### Note

Navigating to the Engagement section removes all filters except time period, campaign, and template.

[Figure 1.16, “Engagement Report”](mmc-ui.reports.evaluating.campaign.performance.php#figure_engagement_report "Figure 1.16. Engagement Report") shows an example report with a filter for campaign.

<a name="figure_engagement_report"></a>

**Figure 1.16. Engagement Report**

![Engagement Report](images/engagement_report.png)
**1.3.1.1. Viewing Performance**

The Engagement report includes a graph showing the progress of your campaign’s performance, as shown in [Figure 1.16, “Engagement Report”](mmc-ui.reports.evaluating.campaign.performance.php#figure_engagement_report "Figure 1.16. Engagement Report"). The following metrics are displayed in the graph:

*   Targeted - Messages successfully injected into SparkPost Elite, as well as rejected by it

*   Accepted - Messages an ISP or other remote domain accepted, less Out-of-Band Bounces

*   Unique Confirmed Opens - Approximation (+/- 5%) of the total number of messages that were either rendered or had at least one link selected

*   Unique Clicks - Approximation (+/- 5%) of the total number of messages that had at least one link selected one or more times

From the graph, you can quickly determine what percentage of your messages have been accepted, are being opened, and have had a link selected.

### Note

For an explanation of the approximate values, see [Section 1.1.1, “Selecting Metrics”](mmc-ui.reports.php#mmc-ui.reports.select.metrics "1.1.1. Selecting Metrics").

**1.3.1.2. Identifying Selected Links**

The table included in the lower area of the Engagement report, shown in [Figure 1.16, “Engagement Report”](mmc-ui.reports.evaluating.campaign.performance.php#figure_engagement_report "Figure 1.16. Engagement Report"), enables you to view how many times a link within your message has been clicked.

The following are the columns in the table:

*   Name - Link within a message. If you did not specify a link name in your stored template or inline template content, the name defaults to `Raw URL`. For additional information, see the section on *Link Names*       in the Substitution Reference available at [SparkPost Elite REST API](https://support.messagesystems.com/docs/web-rest/v1_mmcapi.html).

*   Raw Clicks (approx.) - Approximation (+/- 5%) of the number of unique clicks for the given link, e.g., Recipient 1 clicks the link one time and recipient 2 clicks the link three times. Raw Clicks equal two.

*   Clicks - Total number of clicks for the given link, including multiple clicks by the same recipient, e.g., for the previous example, Clicks equals four.

*   Total - Total number of clicks for the given link (i.e., Clicks) divided by Total Clicks for the time period and/or campaign filters applied. Note that Total Clicks is not listed in the report.

You can sort the data by any column to show different arrangements. For example, sorting by Clicks in descending order shows the links that had the most clicks.

| [Prev](mmc-ui.reports.viewing.reports.php)  | [Up](mmc-ui.reports.php) |   |
| 1.2. Viewing Your Reports  | [Table of Contents](index.php) |   |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)