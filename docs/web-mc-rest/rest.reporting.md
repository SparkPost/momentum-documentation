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

| Chapter 19. Reports |
| [Prev](rest.links.php)  |   |  [Next](rest.report.bounce.breakdown.php) |

## Chapter 19. Reports

**Table of Contents**

<dl class="toc">

<dt>[19.1\. Reporting: Mailing Statistics](rest.reporting.php#idp608256)</dt>

<dt>[19.2\. Report: Bounce Breakdown](rest.report.bounce.breakdown.php)</dt>

<dt>[19.3\. Report_Mailing_Summary](rest.Report_Mailing_Summary.php)</dt>

</dl>

## 19.1. Reporting: Mailing Statistics

You may query for mailing statistics broken out either by Link or email domain.

### Note

This API does not support the `csv` response format. For more information see [Section 7.5, “Response Formats”](rest.response.formats.php "7.5. Response Formats").

As of Message Central version 3.6, it is possible to authenticate users via LDAP. This may have a performance impact in specific scenarios where a high volume of REST API calls are requested with an expectation of high performance. For example, this may occur during api-triggered mailings or custom reporting.

In both cases, the following mailingstatistics object is returned with the requested data:

### The Mailing Statistics object

For details of the Mailing Statistics object see [Section 25.24, “report.mailingstatistics”](rest.autogen.struct.report.mailingstatistics.php "25.24. report.mailingstatistics").

Find the Report APIs below:

*   `GET /v1.0/report/mailingstats?orgid=2&mid=5`

    Optional parameters are `startDate` and `endDate`, which specify a date range for the query.

    ### Note

    Time zone abreviations such as EST or IST should be avoided. Date/time values should be in RFC3339 format, which is a profile of ISO 8601\. Time zones should be represented as a numeric offset such as `-04:00` or `+05:30` or the suffix "Z" may be used to represent UTC. So a full date/time value may look like "`2012-10-19T16:39:57-08:00`" or "`2012-06-12T23:20:50Z`". The system will try to interpret other formats but unexpected results may occur if the format uses an abreviation shared by multiple time zones.

    This API returns overall summary statistics for the specified mailing, with a breakdown by segment. The return value is an array of "report.mailingstatistics" objects each of which contains an array of "report.segmentstatistics" objects.

*   `GET /v1.0/report/mailingstats?orgid=1&mid=1&groupby=domain&limit=20&offset=0`

    This API returns the mailing statistics broken down by domain. The return value is an array of "report.mailingstatistics", one for each domain. This API respects the "limit" and "offset" grouping parameters; the default limit is 20.

*   `GET /v1.0/report/mailingstats?orgid=2&mid=5&groupby=domain`

    This API returns the mailing statistics broken down by link. The return value is an array of "report.mailingstatistics", one for each tracked link. This API does *not* accept or respect startDate, endDate, limit, or offset.

| [Prev](rest.links.php)  |   |  [Next](rest.report.bounce.breakdown.php) |
| Chapter 18. Links  | [Table of Contents](index.php) |  19.2. Report: Bounce Breakdown |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)