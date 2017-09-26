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

| C.2. Bounce Classification Codes |
| [Prev](log_formats.version_2.php)  | Appendix C. Log Formats |  [Next](log_formats.connection.stages.php) |

## C.2. Bounce Classification Codes

The bounce classification codes are identical for all versions of Momentum. Find below a list of these codes and their meanings.

<a name="log_formats.bounce.classification.codes"></a>

**Table C.17. Bounce classification codes**

| Code | Description |
| --- | --- |
| 1 | The response text could not be identified. (Undetermined) |
| 10 | The recipient is invalid. (Invalid Recipient) |
| 20 | The message soft bounced. (Soft Bounce) |
| 21 | The message bounced due to a DNS failure. (DNS Failure) |
| 22 | The message bounced due to the remote mailbox being over quota. (Mailbox Full) |
| 23 | The message bounced because it was too large for the recipient. (Too Large) |
| 24 | The message timed out. (Timeout) |
| 25 | The message was failed by Momentum's configured policies. (Admin Failure) |
| 30 | No recipient could be determined for the message. (Generic Bounce: No RCPT) |
| 40 | The message failed for unspecified reasons. (Generic Bounce) |
| 50 | The message was blocked by the receiver. (Mail Block) |
| 51 | The message was blocked by the receiver as coming from a known spam source. (Spam Block) |
| 52 | The message was blocked by the receiver as spam (Spam Content) |
| 53 | The message was blocked by the receiver because it contained an attachment (Prohibited Attachment) |
| 54 | The message was blocked by the receiver because relaying is not allowed. (Relay Denied) |
| 60 | The message is an auto-reply/vacation mail. (Auto-Reply) |
| 70 | Message transmission has been temporarily delayed. (Transient Failure) |
| 80 | The message is a subscribe request. (Subscribe) |
| 90 | The message is an unsubscribe request. (Unsubscribe) |
| 100 | The message is a challenge-response probe. (Challenge-Response) |

| [Prev](log_formats.version_2.php)  | [Up](log_formats.php) |  [Next](log_formats.connection.stages.php) |
| C.1. Log Formats for Version 2.1 and 2.2  | [Table of Contents](index.php) |  C.3. Connection Stages |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)