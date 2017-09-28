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

| Chapter 17. Using the UI for Reporting |
| [Prev](webhooks.ui.php)  | Part IV. How-To Guides: Reporting and Tracking |  [Next](getting.started.metrics.php) |

## Chapter 17. Using the UI for Reporting

**Introduction**

"How do I know what happened to the email?" Ironically, this question is just as important as "How do I send email?" To run a successful messaging campaign, you need to know that your messages were successfully injected into the MTA and accepted by the recipient's Internet Service Provider (ISP). If they were not, you need to determine how many messages were delayed, bounced, or rejected and retrieve data to analyze and correct these issues. SparkPost Elite logs copious amounts of data to answer these questions.

Reporting data is available in a web-based User Interface (UI) or using the REST API. The UI provides a flexible, easy-to-use interface to evaluate your message deliverability and campaign performance. Using the UI, you can select metrics, filter the metric data, and view detailed reports based on your specific needs. Its drill-down capabilities enable you to focus your reporting on the message events and data that are most important to you.

In this tutorial, you will learn how to view delivery data in the UI. Later tutorials will discuss tracking engagement data and retrieving reporting data using the REST API.

### Note

For this tutorial, you will need a web browser to access the UI. The UI supports Firefox and Internet Explorer, version 9 and 10. All browsers must have cookies and JavaScript enabled.

**Reporting Data Using the UI** 

Follow these steps to view reports in the UI:

1.  Open the UI by pointing your web browser at the appropriate IP address and log in using your credentials. If you do not know the IP address, contact your system administrator.

    <a name="figure_login_2"></a>

    **Figure 17.1. Login**

    ![Login](images/login.png)

    Your UI opens in the SUMMARY section under REPORTS, as shown in [Figure 17.2, “User Interface”](getting.started.reports_ui.php#figure_summary_2 "Figure 17.2. User Interface").

    <a name="figure_summary_2"></a>

    **Figure 17.2. User Interface**

    ![User Interface](images/summary_report.png)

2.  In the SUMMARY section, you can select metrics and filters enabling you to drill down to the specific data that you need for your reporting. The UI updates only when you select a metric or filter. It does not automatically refresh.

    By default, the UI reports how many of your messages were successfully injected or rejected by SparkPost Elite (TARGETED), were accepted by the recipient's email provider or remote domain, minus Out-of-Band Bounces (ACCEPTED), were delivered and opened (RENDERED), and included linked content that was clicked (CLICKS). This data is displayed based on time in the corresponding graph.

    To add additional metrics, click ADD and select from a comprehensive list of metrics, as shown in [Figure 17.3, “Metrics List”](getting.started.reports_ui.php#figure_metrics_list "Figure 17.3. Metrics List"). You can select up to five metrics. For descriptions of the metrics, hover over any metric to display tool-tips or see [SparkPost Deliverability Metrics](https://support.sparkpost.com/customer/portal/articles/1929969-sparkpost-deliverability-metrics).

    <a name="figure_metrics_list"></a>

    **Figure 17.3. Metrics List**

    ![Metrics List](images/metrics_list.png)

    When complete, click DONE ADDING.

3.  To create your custom reports, begin in theSUMMARY section by selecting your metrics and filters. Next, view the summary report provided in the SUMMARY section and the detailed reports provided in the BOUNCES, REJECTIONS, ACCEPTED, and DELAYED sections to evaluate your deliverability and performance. The ENGAGEMENT section includes a specialized report enabling you to drill down to the level of a link within your campaign. Click the section name in the left navigation panel to navigate to the various reports.

    <a name="figure_navigation"></a>

    **Figure 17.4. Navigating the UI**

    ![Navigating the UI](images/navigation_menu.png)

    See the [Reports and Engagement Tracking](https://support.messagesystems.com/docs/web-mmcui/mmc-ui.reports.php) section in the SparkPost Elite User Interface Guide for detailed information about the six reports including screen captures, descriptions of the various metrics, and instructions to create custom reports.

Congratulations! You have successfully logged into SparkPost Elite's UI. You can create custom reports in the UI by selecting the metrics and filters for your specific reporting needs. Become familiar with the UI and explore its capabilities.

| [Prev](webhooks.ui.php)  | [Up](p.reporting_tracking.php) |  [Next](getting.started.metrics.php) |
| Chapter 16. Managing Webhooks using the UI  | [Table of Contents](index.php) |  Chapter 18. Using the Metrics API for Reporting |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)