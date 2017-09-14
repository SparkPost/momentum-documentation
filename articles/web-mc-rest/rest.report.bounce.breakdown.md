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

| 19.2. Report: Bounce Breakdown |
| [Prev](rest.reporting.php)  | Chapter 19. Reports |  [Next](rest.Report_Mailing_Summary.php) |

## 19.2. Report: Bounce Breakdown

The bounce classification breakdown by domain and classification can be returned as objects. Bounce Breakdown has the following definition:

<a name="rest.bounce.breakdown.object"></a>

**Example 19.1. The Bounce Breakdown object**

```
{
  // the domain to which this data is applicable
  domain: "yahoo.com"

  // the Momentum bounce classification code
  // See https://support.messagesystems.com/docs/web/bounce_logger.classification.codes.php
  bouncecode: 24,

  // the Momentum bounce classification label (corresponds to code)
  bouncetype: "Timeout",

  // How many messages were classified in this way for this domain
  bouncecount: 123
}
```

The Bounce Breakdown report API is as follows:

*   `GET /v1.0/report/mailingbouncedetails?orgid=2&mid=23`

    Enumerates the bounce detail records.

    Like the other enumeration APIs, this is limited to the default limit (20). You will likely need to fetch multiple pages of data to get the complete set; use the limit and offset parameters as described in [Section 7.7, “Query Restrictions”](rest.query.restrictions.php "7.7. Query Restrictions").

### 19.2.1. A Note About Bounce Reports

Bounces with a bounce code of `25`, meaning, `The message was failed by Momentum's configured policies. (Admin Failure)`, are considered neither hard nor soft bounces. This may lead to apparent inconsistencies in bounce totals. For example, if a bounce is coded `25`, it is possible to have a bounce total of `1` and zero hard bounces and zero soft bounces.

For a complete listing of the Momentum bounce codes see ["Bounce Classification Codes"](https://support.messagesystems.com/docs/web-ref/bounce_logger.classification.codes.php).

| [Prev](rest.reporting.php)  | [Up](rest.reporting.php) |  [Next](rest.Report_Mailing_Summary.php) |
| Chapter 19. Reports  | [Table of Contents](index.php) |  19.3. Report_Mailing_Summary |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)