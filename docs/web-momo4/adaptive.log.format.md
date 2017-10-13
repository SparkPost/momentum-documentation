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