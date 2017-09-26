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

| 35.6. `importlog` |
| [Prev](log_formats.httplog.php)  | Chapter 35. Log Formats |  [Next](log_formats.mainlog.php) |

## 35.6. `importlog`

The `importlog` records the outcome of a [spool import](console_commands.spool_import.php "spool import") operation. It is configured in the [ec_logger](modules.ec_logger.php "71.30. EC_logger – Momentum-Style Logging").

### 35.6.1. Import Records

The following is a description of the fields:

<a name="log_formats.import_logger.fields"></a>

**Table 35.8. Import Record Fields**

| Offset | Example Field | Description |
| --- | --- | --- |
| 0 | 1064869327 | Date of the event in Unix timestamp format (seconds since 00:00:00 Jan 1, 1970) |
| 1 | 00/00-25004-31B987F3 | 

Message's original in-spool message-id

(This is a unique value per message and corresponds with its location in the spool being imported.)

 |
| 2 | I | `I` indicates that this log line is an import event. |
| 3 | 00/00-25004-31B987F3 | 

Message's new in-spool message-id

(This is usually the same as the message-id recorded in field 1, but may be altered during import to avoid collisions with existing messages with the same identifier.)

 |
| 4 | 1 | 

Result indicator

(This is a number between 1 and 4 with the following meanings: 1 is complete success, 2 indicates failure during the read of metadata, 3 is failure reading the message from the spool. and 4 is failure writing the message into the main Momentum spool.)

 |
| 5 | /var/spool/my-alternative-spool | Base directory containing the spool being imported |

| [Prev](log_formats.httplog.php)  | [Up](log_formats.php) |  [Next](log_formats.mainlog.php) |
| 35.5. `httplog`  | [Table of Contents](index.php) |  35.7. `mainlog` |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)