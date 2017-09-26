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

| 35.2. `adaptive` Log |
| [Prev](log_formats.php)  | Chapter 35. Log Formats |  [Next](log_formats.bouncelog.php) |

## 35.2. `adaptive` Log

The `adaptive` log is configured in the [adaptive](modules.adaptive.php "71.3. adaptive – Adaptive Delivery") module. The adaptive log entry is an `@` delimited string, such as the following:

12345679@1@G@default@hotmail.com@NOTICE@ retry_interval *`from`* -> *`to`*

The following is a description of the fields:

<a name="adaptive.log.format.fields"></a>

**Table 35.3. Adaptive Record Fields**

| Offset | Example Field | Description |
| --- | --- | --- |
| 0 | 12345679 | Date in Unix timestamp format (seconds since 00:00:00 Jan 1, 1970) |
| 1 | 1 | Version of the log file format (decimal number currently set to `1` ) |
| 2 | G | Record type identifier (single ASCII character currently set to ‘`G`’ for "generic") |
| 3 | default | Binding name, only included in ‘`G`’ record types (may be empty) |
| 4 | hotmail.com | Domain name, only included in ‘`G`’ record types (may be empty) |
| 5 | NOTICE | Log level name, only included in ‘`G`’ record types (see [debug_flags](conf.ref.debug_flags.php "debug_flags") for a list of valid names.) |
| 6 | retry_interval *`from`* -> *`to`* | Free-form string, only included in ‘`G`’ record types (this string may include additional ‘`@`’ signs; typically, it will show how an option has changed.) |

| [Prev](log_formats.php)  | [Up](log_formats.php) |  [Next](log_formats.bouncelog.php) |
| Chapter 35. Log Formats  | [Table of Contents](index.php) |  35.3. `bouncelog` |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)