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

| 35.4. `fbllog` |
| [Prev](log_formats.bouncelog.php)  | Chapter 35. Log Formats |  [Next](log_formats.httplog.php) |

## 35.4. `fbllog`

When a user selects "Mark as Spam", the ISP generates a notification email and sends it to one of the recipients defined by the `Addresses` option in the [fbl](modules.fbl.php "71.35. fbl - Feedback Loop") module. When Momentum receives the message, it extracts the X-MSFBL header, decodes it, and then logs it.

### 35.4.1. fbl Records

A line is written to the `fbllog` for every ARF message received. The log entry is an `@` delimited string, such as the following:

`1224699438@18/00-02937-E2E6FF84@F@someone@test.com@default@default@abuse@yahoo.com@true`

The following is a description of the fields:

<a name="log_formats.fbl_logger.fields"></a>

**Table 35.6. fbl Record Fields**

| Offset | Example Field | Description |
| --- | --- | --- |
| 0 | 1224699438 | Date of reception in Unix timestamp format (seconds since 00:00:00 Jan 1, 1970) |
| 1 | 18/00-02937-E2E6FF84 | Message ID |
| 2 | F | `F` indicating an FBL entry |
| 3 | someone | Original recipient local part |
| 4 | test.com | Original recipient domain |
| 5 | default | Binding on which the message was sent |
| 6 | default | Binding group on which the message was sent |
| 7 | abuse | Feedback type |
| 8 | yahoo.com | Domain to which the FBL message was sent |
| 9 | true | User-defined string |

| [Prev](log_formats.bouncelog.php)  | [Up](log_formats.php) |  [Next](log_formats.httplog.php) |
| 35.3. `bouncelog`  | [Table of Contents](index.php) |  35.5. `httplog` |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)