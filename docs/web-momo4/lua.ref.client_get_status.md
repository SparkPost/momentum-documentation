| client:get_status |
| [Prev](lua.ref.client_get_headers.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.sess_request_add_header.php) |

<a name="lua.ref.client_get_status"></a>
## Name

client:get_status — Return the status of an HTTP request

<a name="idp15241712"></a>
## Synopsis

`require('msys.http.client')`

client:get_status();

<a name="idp15244256"></a>
## Description

Return the status code and description of an HTTP request.

<a name="lua.ref.client_get_status.example"></a>

**Example 70.12. client:get_status example**

`local code, status = client:get_status();`
<a name="idp15247776"></a>
## See Also

[msys.http.client.new](lua.ref.msys.http.client.new.php "msys.http.client.new"), [client:set_timeout](lua.ref.client_set_timeout.php "client:set_timeout"), [client:set_header](lua.ref.client_set_header.php "client:set_header"), [client:do_request](lua.ref.client_do_request.php "client:do_request"), [client:get_body](lua.ref.client_get_body.php "client:get_body"), [client:parse_headers](lua.ref.client_parse_headers.php "client:parse_headers") [client:get_headers](lua.ref.client_get_headers.php "client:get_headers")

| [Prev](lua.ref.client_get_headers.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.sess_request_add_header.php) |
| client:get_headers  | [Table of Contents](index.php) |  sess:request_add_header |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)