| client:set_timeout |
| [Prev](lua.ref.client_set_header.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.curl.c_close.php) |

<a name="lua.ref.client_set_timeout"></a>
## Name

client:set_timeout — Set the timeout for an HTTP client

<a name="idp15387360"></a>
## Synopsis

`require('msys.http.client')`

`client:set_timeout(number);`

`number: integer (optional)`<a name="idp15391088"></a>
## Description

Set the timeout for an HTTP client. Setting the parameter to an integer value determines the length of the timeout. Passing no parameter clears the timeout setting.

<a name="idp15392608"></a>
## See Also

[msys.http.client.new](lua.ref.msys.http.client.new.php "msys.http.client.new"), [client:do_request](lua.ref.client_do_request.php "client:do_request"), [client:get_status](lua.ref.client_get_status.php "client:get_status"), [client:set_header](lua.ref.client_set_header.php "client:set_header"), [client:get_body](lua.ref.client_get_body.php "client:get_body"), [client:parse_headers](lua.ref.client_parse_headers.php "client:parse_headers") [client:get_headers](lua.ref.client_get_headers.php "client:get_headers")

| [Prev](lua.ref.client_set_header.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.curl.c_close.php) |
| client:set_header  | [Table of Contents](index.php) |  c:close |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)