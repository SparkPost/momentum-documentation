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

| 20.3. `fbllog` |
| [Prev](log_formats.eventlog.php)  | Chapter 20. Log Formats |  [Next](log_formats.mainlog.php) |

## 20.3. `fbllog`

Many ISPs offer a feedback loop service to qualified senders, by which the ISP sends a notification email to the sender every time that one of their users clicks on a “This is Spam” or “Report Abuse” type button. Qualified senders are usually required to maintain specific receiving addresses to close the feedback loop, such as `abuse@domain.com` and `unsubscribe@domain.com`, and should permanently remove the spam reporter email address from their recipient lists to preserve their deliverability rating. When SparkPost Elite receives a spam notification, it adds an entry in the `fbllog`.

### 20.3.1. FBL Records

An entry is written to the `fbllog` for every spam notification received.

The log entry is an `@` delimited string, such as the following:

`1224699438@18/00-02937-E2E6FF84@F@someone@test.com@default@default@abuse@yahoo.com@true`

The following is a description of the fields:

<a name="log_formats.fbl.record.fields"></a>

**Table 20.3. FBL Record Fields**

| Offset | Example Field | Description |
| --- | --- | --- |
| 0 | 1224699438 | Date of reception in Unix timestamp format (seconds since 00:00:00 Jan 1, 1970) |
| 1 | 18/00-02937-E2E6FF84 | Message's unique message-id |
| 2 | F | `F` indicating an FBL entry |
| 3 | someone | Original recipient local part |
| 4 | test.com | Original recipient domain |
| 5 | default | Binding on which the message was sent |
| 6 | default | Binding group on which the message was sent |
| 7 | abuse | Feedback type |
| 8 | yahoo.com | Domain to which the FBL message was sent |
| 9 | true | User-defined string |

### Note

Many ISPs use the Abuse Reporting Format (ARF) for spam reporting. When SparkPost Elite receives a message in ARF format, it extracts the X-MSFBL header, decodes it, and logs the sending information.

Some ISPs use the "Junk e-Mail Reporting Program" (JMR) format, which lacks the message/feedback-report MIME part of the ARF. When the JMR format is used, the feedback type will be unknown.

| [Prev](log_formats.eventlog.php)  | [Up](log_formats.php) |  [Next](log_formats.mainlog.php) |
| 20.2. `eventlog`  | [Table of Contents](index.php) |  20.4. `mainlog` |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)