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

| 8.2. Report Columns |
| [Prev](mc3-reports.php)  | Chapter 8. Reports |  [Next](mc3-reports-domain-stats.php) |

## 8.2. Report Columns

In the various reports the columns are defined as follows:

*   `Targeted` – the sum of the counts of all the lists that were targeted by the mailing and where overlaps have been removed.

*   `Sent` – Targeted less Suppressions, taking Recipient Limits into account.

*   `Bounced` – includes *all* bounces, all errors (even if the recipient never left the system because of a malformed email address). This should be unique per recipient. This means that if an email was blocked and then there were four retries, it should report only one Non-Delivery event and it should report only the first one for proper classification.

*   `Delivered` – Sent less Non-Delivered. This means that every “Sent” recipient is accounted for once as either Delivered or Non-Delivered. (You cannot have a Delivered and a Bounced event for the same recipient.)

*   `Raw Viewed` – The number of times the tracking image was requested from the server.

*   `Unique Viewed` – The number of unique recipients who requested the tracking image from the server.

*   `Raw Clicked` – The number of times a given link was clicked.

*   `Unique Clicked` – The number of unique recipients who clicked on a given link.

### Note

For a specific mailing, the sum of the `Delivered` and `Bounced` columns will not necesarily equal the value of the `Sent` column. Email is not instantaneous. All messages may not have reached a final disposition.

When using Intelligent Message Disposition, there are circumstances where there may be delivery discrepancies. For more information see [Configuring For Intelligent Message Disposition](https://support.messagesystems.com/docs/web-mc/mc-post-installation.imd.php).

| [Prev](mc3-reports.php)  | [Up](mc3-reports.php) |  [Next](mc3-reports-domain-stats.php) |
| Chapter 8. Reports  | [Table of Contents](index.php) |  8.3. Domain Stats |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)