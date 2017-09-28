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

| 35.5. `httplog` |
| [Prev](log_formats.fbllog.php)  | Chapter 35. Log Formats |  [Next](log_formats.importlog.php) |

## 35.5. `httplog`

The `httplog` logs HTTP requests and responses. It is configured in the [http_logger](modules.http_logger.php "71.37. http_logger – HTTP Requests and Responses") module.

### 35.5.1. HTTP Records

A line is written to the `httplog` for every HTTP request and response.

The fields in the log entry are delimited by spaces, such as the following:

`1398088802 10.77.0.158:18906 *:2081 "POST api/v1/transmissions HTTP/1.0" 500 332 1045.000`

The following is a description of the fields:

<a name="log_formats.http_logger.fields"></a>

**Table 35.7. HTTP Record Fields**

| Offset | Example Field | Description |
| --- | --- | --- |
| 0 | 1398088802 | Date of the HTTP request in Unix timestamp format (seconds since 00:00:00 Jan 1, 1970) |
| 1 | 10.77.0.158:18906 | Remote IP and port |
| 2 | *:2081 | Local IP and port |
| 3 | POST | HTTP request method |
| 4 | api/v1/transmissions | HTTP request URL path |
| 5 | HTTP/1.0 | HTTP version of the request |
| 6 | 500 | HTTP response status code |
| 7 | 332 | Total number of bytes of the response |
| 8 | 1045.000 | Time taken from request to response in milliseconds |

| [Prev](log_formats.fbllog.php)  | [Up](log_formats.php) |  [Next](log_formats.importlog.php) |
| 35.4. `fbllog`  | [Table of Contents](index.php) |  35.6. `importlog` |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)