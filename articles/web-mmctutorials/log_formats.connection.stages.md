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

| 20.7. Connection Stages |
| [Prev](bounce_logger.classification.codes.php)  | Chapter 20. Log Formats |  [Next](getting.started.smtp_tracking.php) |

## 20.7. Connection Stages

The following is a list of the codes for the stages and their meanings.

<a name="table.log_formats.connection.stages"></a>

**Table 20.11. Connection stages**

| Phase | Description |
| --- | --- |
| 0 | while not connected |
| 1 | while idle |
| 2 | during MAIL FROM |
| 3 | after MAIL FROM |
| 4 | during RCPT TO |
| 5 | after RCPT TO |
| 6 | during DATA |
| 7 | after DATA |
| 8 | while sending BODY |
| 9 | reading confirmation |
| 10 | during EHLO |
| 11 | after EHLO |
| 12 | reading BANNER |
| 13 | during RSET |
| 14 | after RSET |
| 15 | during STARTTLS |
| 16 | after STARTTLS |
| 17 | handshaking TLS |
| 18 | renegotiating TLS |
| 19 | during XCLIENT |
| 20 | after XCLIENT |
| 21 | out of band bounce |
| 22 | in unknown state |

Code `21` is the only message disposition notification (MDN). With the exception of `22`, which is unknown, all other stages occur during the SMTP transaction. In other words, they are in-band bounces.

| [Prev](bounce_logger.classification.codes.php)  | [Up](log_formats.php) |  [Next](getting.started.smtp_tracking.php) |
| 20.6. Bounce Classification Codes  | [Table of Contents](index.php) |  Chapter 21. Tracking Engagement for SMTP |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)