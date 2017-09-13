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

| Chapter 8. Reports |
| [Prev](mc3-content-attachments.php)  |   |  [Next](mc3-report-columns.php) |

## Chapter 8. Reports

**Table of Contents**

<dl class="toc">

<dt>[8.1\. Mailing Summary](mc3-reports.php#mc3-reports-mailing-summary)</dt>

<dt>[8.2\. Report Columns](mc3-report-columns.php)</dt>

<dt>[8.3\. Domain Stats](mc3-reports-domain-stats.php)</dt>

<dt>[8.4\. Bounce Details](mc3-reports-bounce-details.php)</dt>

<dt>[8.5\. Click Details](mc3-reports-click-details.php)</dt>

<dt>[8.6\. Direct Access](mc3-reports-direct-access.php)</dt>

</dl>

To manipulate reports, choose the Reports menu.

Opens and clicks are loaded into the database every five seconds, so at a minimum this data is at least five seconds old.

Deliveries and bounces are processed every five minutes so do not make it into the database as quickly as opens and clicks. Also, it can take up to several days for bounces to be returned by ISPs.

## 8.1. Mailing Summary

The MAILINGS SUMMARY page shows a summary of all mailings and is the default view when you navigate to the REPORTS page. When you navigate to this page you should see something similar to the following:

<a name="figure-reports"></a>

**Figure 8.1. Reports**

![Reports](images/reports.jpg)

You can filter the content that is shown on this page by choosing from the `Filters` drop-down list box. The available filters are:

*   Running

*   Finished

*   Approved

*   Archived

If you are filtering mailings, be sure to press the UPDATE button.

### Note

Reports do not appear on the reports page until they have finished building.

Use the CREATE CSV DATA button to export report data in CSV format. Clicking this button creates a file named mailing-summary-*`date_time`*.

The SHOW DATA FROM text boxes are used to refine the results presented in the reports and only make sense for "recurring" or "API-triggered" mailings. These text boxes do not filter based on the SENT column.

You can sort the data on any of the available columns. Click the "up" arrow for an ascending sort and click the "down" arrow for a descending sort.

| [Prev](mc3-content-attachments.php)  |   |  [Next](mc3-report-columns.php) |
| 7.6. Content Attachments  | [Table of Contents](index.php) |  8.2. Report Columns |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)