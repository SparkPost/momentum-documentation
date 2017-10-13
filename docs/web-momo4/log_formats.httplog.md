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