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

| 35.8. `paniclog` |
| [Prev](log_formats.mainlog.php)  | Chapter 35. Log Formats |  [Next](log_formats.rejectlog.php) |

## 35.8. `paniclog`

The `paniclog` is a debugging log in which system events are logged depending on the level of Debug_Flags set in your configuration. It is configured in the [ec_logger](modules.ec_logger.php "71.30. EC_logger – Momentum-Style Logging").

Under normal circumstances, Debug_Flags should be empty or should be omitted from the `ecelerity.conf` file. For debugging purposes, set up Debug_Flags as described in [debug_flags](conf.ref.debug_flags.php "debug_flags"). When a problem event occurs and it is within the logging level set by the `Debug_Flags` option, the event is written to the `paniclog`. Excepting informational startup messages, the `paniclog` should be empty under normal circumstances. It is recommended that you periodically check your `paniclog` to look for any anomalous events.

In addition, Momentum logs entries to the `paniclog` when the `log_requests_to_paniclog` option is enabled in the HTTP_Listener and its nested scopes.

### 35.8.1. Panic Records

A line is written to the `paniclog` for every system event, when enabled in the configuration. The fields in the log entry are delimited by spaces.

The following is an example entry for an HTTP request when `log_requests_to_paniclog` is set to `true`:

`1307461172:192.168.0.197 "POST api/v1/transmissions HTTP/1.1" 200 224 5.000`

The following is a description of the fields:

<a name="log_formats.paniclog.ec.record.fields"></a>

**Table 35.14. Paniclog Record Fields**

| Offset | Example Field | Description |
| --- | --- | --- |
| 0 | 1307461172: | Date of delivery in Unix timestamp format (seconds since 00:00:00 Jan 1, 1970) |
| 1 | 192.168.0.197 | IP address where the injection originated |
| 2 | POST | HTTP request method |
| 3 | api/v1/transmissions | HTTP request URL path |
| 4 | HTTP/1.0 | HTTP version of the request |
| 5 | 200 | HTTP response status code |
| 6 | 224 | Total number of bytes of the response |
| 7 | 5.000 | Time taken from request to response in milliseconds |

| [Prev](log_formats.mainlog.php)  | [Up](log_formats.php) |  [Next](log_formats.rejectlog.php) |
| 35.7. `mainlog`  | [Table of Contents](index.php) |  35.9. `rejectlog` |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)