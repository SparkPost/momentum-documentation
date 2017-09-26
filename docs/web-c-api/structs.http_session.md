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

| 68.54. http_session |
| [Prev](structs.generic_module_infrastructure.php)  | Chapter 68. Structs |  [Next](structs.io_object.php) |

## 68.54. http_session

This struct is defined as follows:

```
typedef struct _http_request {
 /* request line: Method SP Request-URI SP HTTP-Version CRLF */
 string *method;
 string *version;
 string *uri;
 ec_hash_table headers;
 string* body;
 string* data;   /* string representation of entire HTTP request line + headers + payload */
 int to_send_offset;  /* offset of the data already sent in "data". internal use only */
 void *userdata; /* protocol specific data. Shall be released in reset_request func */
} http_request;

typedef struct http_response {
 int read_done;   /* whether received complete payload */
 int header_done; /* whether received complete header */
 int64_t content_length;  /* -1: chunked data */
 /* structural data after parsing */
 /* status line: HTTP-Version SP Status-Code SP Reason-Phrase CRLF */
 string *version;          
 string *status_code;       
 string *status_reason;  
 ec_hash_table headers;
 char *body;             /* pos in data.buffer */
 string* data;   /* HTTP status line + header lines + body if exist  */
 int payload_offset;  /* pointer to the start of the payload in data */
                      /* TODO: may merge with *body + read_done ?    */
 /* the following place holder are only for internal use */
 /* used to keep the raw data from socket.               */
 /* for non-chunked response, they are same as data & payload_offset */
 string* raw_data;  
 int raw_offset; /* pointer to the start of the current chunk in raw_data */
 void *userdata; /* protocol specific data. Shall be released in reset_response func */
} http_response;

typedef struct http_session {
 connection_handle *connh;
 string *ipaddr; /* remote ip address, for logging purpose */
 http_request *request;
 http_response *response;
 void *userdata; /* protocol specific data */
 Event *response_timer; /* timeout event for waiting for response */
} http_session;
```

To use this struct, include the file `modules/delivery/http/httpclnt.h`.

### 68.54.1. See Also

[Chapter 63, *Hooks in the generic_delivery and httpclnt Scope*                                           ](hooks.generic_delivery.php "Chapter 63. Hooks in the generic_delivery and httpclnt Scope") and [Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/)

| [Prev](structs.generic_module_infrastructure.php)  | [Up](structs.php) |  [Next](structs.io_object.php) |
| 68.53. generic_module_infrastructure  | [Table of Contents](index.php) |  68.55. io_object |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)