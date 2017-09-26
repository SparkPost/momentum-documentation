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

| 20.6. Bounce Classification Codes |
| [Prev](log_formats.rejectlog.php)  | Chapter 20. Log Formats |  [Next](log_formats.connection.stages.php) |

## 20.6. Bounce Classification Codes

The following is a list of bounce classification codes and their meanings.

<a name="log_formats.bounce.classification.codes"></a>

**Table 20.10. Bounce Classification Codes**

| Classification | Name | Description | Category |
| --- | --- | --- | --- |
| 1 | Undetermined | Response text could not be identified. | Undetermined |
| 10 | Invalid Recipient | Recipient is invalid. | Hard |
| 20 | Soft Bounce | Message soft bounced. | Soft |
| 21 | DNS Failure | Message bounced due to a DNS failure. | Soft |
| 22 | Mailbox Full | Message bounced due to the remote mailbox being over quota. | Soft |
| 23 | Too Large | Message bounced because it was too large for the recipient. | Soft |
| 24 | Timeout | Message timed out. | Soft |
| 25 | Admin Failure | Message was failed by SparkPost Elite's configured policies. | Admin |
| 30 | Generic Bounce: No RCPT | No recipient could be determined for the message. | Hard |
| 40 | Generic Bounce | Message failed for unspecified reasons. | Soft |
| 50 | Mail Block | Message was blocked by the receiver. | Block |
| 51 | Spam Block | Message was blocked by the receiver as coming from a known spam source. | Block |
| 52 | Spam Content | Message was blocked by the receiver as spam. | Block |
| 53 | Prohibited Attachment | Message was blocked by the receiver because it contained an attachment. | Block |
| 54 | Relaying Denied | Message was blocked by the receiver because relaying is not allowed. | Block |
| 60 | Auto-Reply | Message is an auto-reply/vacation mail. | Soft |
| 70 | Transient Failure | Message transmission has been temporarily delayed. | Soft |
| 80 | Subscribe | Message is a subscribe request. | Admin |
| 90 | Unsubscribe | Message is an unsubscribe request. | Hard |
| 100 | Challenge-Response | Message is a challenge-response probe. | Soft |

| [Prev](log_formats.rejectlog.php)  | [Up](log_formats.php) |  [Next](log_formats.connection.stages.php) |
| 20.5. `rejectlog`  | [Table of Contents](index.php) |  20.7. Connection Stages |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)