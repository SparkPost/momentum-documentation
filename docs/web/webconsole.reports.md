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

| 3.4. Dashboard, Queue, Log and Bounce Reports |
| [Prev](webconsole.configuration.php)  | Chapter 3. The Web Console |  [Next](operations.php) |

## 3.4. Dashboard, Queue, Log and Bounce Reports

### 3.4.1. Dashboard

The dashboard screen displays a high-level overview of your Momentum server. It has a variety of text and graphical displays that provide real-time and historical representations of the status of your Momentum server.

**3.4.1.1. Status Graph**<a name="fig.webconsole.statusgraph"></a>

**Figure 3.15. Status graph**

![](images/webconsole/ecweb_statusgraph.png)

The Status graph reports historical information about the performance and throughput of your Momentum server. By default, the graph displays message throughput trends, in terms of messages per hour. The graph can also report trends on Concurrency and Queue size. Concurrency is the number of simultaneous SMTP connections that the server has at a given point in time. The Queues graph reports how many messages are in the delayed and active queues.

**3.4.1.2. Statistics**<a name="fig.webconsole.stats"></a>

**Figure 3.16. Statistics**

![](images/webconsole/ecweb_stats.png)

The Statistics section reports current statistics on connection concurrency, queue size and message delivery. This output is identical to the output returned by the 'summary' command, as described in the [Momentum Console Commands](operations.console-commands.php "4.2. Console Commands") reference guide.

**3.4.1.3. Top Deliverability Issues**

The Top Deliverability Issues are a list of possible issues that may exist with delivering outbound e-mail. These issues are defined by color-coded severity (red for severe, yellow for warning) and are indexed by recipient domain. To find out details about a domain's deliverability issues in this section, simply roll over the domain name and the details about that domain and the details of the warning detected will appear to the right of the domain list.

**3.4.1.4. Habeas Deliverability Report**

If you are subscribed to and have Habeas Deliverability Reporting configured in the Momentum Web Console, your Habeas Delivery Statistics will appear in this section, indexed by the recipient service provider.

### 3.4.2. Queues

<a name="fig.webconsole.queues_actdel"></a>

**Figure 3.17. Queues**

![](images/webconsole/ecweb_queues_actdel.png)

The Queues tab displays active and delayed queue sizes for domains that have active or delayed queue sizes that exceed the displayed threshold in terms of number of messages. To change either the active queue or delayed queue display threshold, change the value in the supplied text field and click the "Change Threshold" button.

### 3.4.3. Graphs

<a name="fig.webconsole.graphstab"></a>

**Figure 3.18. Graphs**

![](images/webconsole/ecweb_graphstab.png)

The Graphs tab displays historical graphs for Throughput, SMTP session concurrency and queue size. These graphs are all available for time periods covering the past hour, day, week, month, half year and full year. The Data Source section allows you to select whether to display global server trends or information for a specific domain. The [Section 3.4.5, “Domain Statistics”](webconsole.reports.php#webconsole.reports.domains "3.4.5. Domain Statistics") section of this document details how to add a domain to this list.

### 3.4.4. Logs

The Logs tab displays the Momentum delivery and bounce classification logs. By default information is shown for the current day.

<a name="fig.webconsole.logscal"></a>

**Figure 3.19. General logs screen**

![](images/webconsole/ecweb_logs_general.png)

Select a day other than the current day using the Calendar link in the top right-hand corner of the screen. Click a day in the 12 month calendar.

By default, general statistics are displayed. Each report format is detailed below.

**3.4.4.1. General Stats**

The General Stats report displays statistics for the time period in question for receptions, deliveries, failures, and message sizes. In addition, graphs are visible below that provide a graphical representation of log data.

**3.4.4.2. Deliveries Breakdown**

The Deliveries Breakdown report breaks down successful deliveries. At the top of the report deliveries are represented by horizontal bar graphs, indexed by the hour of the day. Below that, a pie chart breaks down message delivery times.

**3.4.4.3. Rejections Breakdown**

The Rejection Breakdown report breaks down rejections on a global server basis.

The Rejection Stage Breakdown graph shows message rejections based on where they happened in the SMTP transaction.

The Rejection Breakdown by Hour graph is a horizontal bar graph that shows the number of rejections by hour of the day.

The Rejection Module Breakdown graph shows how many messages were rejected by each validation module (validation modules which did not reject any messages are not shown in the graph legend).

The Rejection Reason Breakdown shows the reasons given by the remote SMTP servers for rejecting the messages that were rejected.

**3.4.4.4. Domains Breakdown**

The Domains Breakdown report breaks down delivery statistics on a per-domain basis, sorted in descending order by the number of messages per domain.

### 3.4.5. Domain Statistics

The Domain Statistics section shows current connection, delivery and queue size statistics for a domain. Use this tab to view and configure information for a specific domain by typing the domain name into the text field and pressing **Enter**. You will then be presented with information for the domain as follows.

**3.4.5.1. Summary**

The Summary tab gives an overview of the statistics related to this domain.

Use this tab to change delivery options as picture below below:

<a name="fig.webconsole.delivery"></a>

**Figure 3.20. Delivery options**

![](images/webconsole/ecweb_domain_delivery.png)

The Global link shows all settings for this domain that have been explicitly set. Clicking on this link displays a screen that permits changing these values. For more information on configuring domain settings, please see the [Momentum Web Console Configuration Reference.](webconsole.configuration.php "3.3. Configuration of Momentum")

**3.4.5.2. Graphs**

The Graphs tab shows the throughput for the current domain. Adjust the period shown using the drop-down list box.

**3.4.5.3. MX Statistics**

The MX tab shows all of the MX record and resolved IP addresses for this domain. Associated with each IP address are statistics on average connect and delivery time.

**3.4.5.4. Bounces**

The Bounces tab shows bounce statistics as pictured below:

<a name="fig.webconsole.domain.bounces"></a>

**Figure 3.21. Domain bounces**

![](images/webconsole/ecweb_domain_bounces.png)**3.4.5.5. Message Queue**

The Message Queue tab shows statistics related to the queues for the specified domain.

<a name="fig.webconsole.domain.queues"></a>

**Figure 3.22. Domain queues**

![](images/webconsole/ecweb_domain_queues.png)

Choose the desired queue and binding from a drop-down list box.

### 3.4.6. Bounces

The Bounces Breakdown report displays data in the following sections:

**3.4.6.1. Overall Bounces**

This section shows a graph of the percentage of messages in each category of bounce. Below that is the total number of bounced messages, the total number of messages, and the percentage of bounces as compared with the total number of messages.

**3.4.6.2. Top 20 Bounced Domains**

The Domain Bounce data by default shows the total number of messages sent to a domain, the number of bounces and the percentage of bounces as compared with the total number of messages. Clicking on a domain name will expand that domain and show the same data but broken down for each category of bounce found for that domain. Furthermore, clicking the "Advanced Mode" link at the top of the section will show the category as well as the actual bounce message received.

| [Prev](webconsole.configuration.php)  | [Up](webconsole.php) |  [Next](operations.php) |
| 3.3. Configuration of Momentum  | [Table of Contents](index.php) |  Chapter 4. Operations |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)