| client:parse_headers |
| [Prev](lua.ref.msys.http.client.new.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.client_set_header.php) |

<a name="lua.ref.client_parse_headers"></a>
## Name

client:parse_headers — Parse the headers of an HTTP response

<a name="idp15353984"></a>
## Synopsis

`require('msys.http.client')`

`client:parse_headers(headers);`

`headers: table`<a name="idp15357696"></a>
## Description

Parse the headers of an HTTP response. Use this function in the following way:

`local headers = client:parse_headers(client:get_headers());`

Returns a table with the header name as a key and the header value as the value.

<a name="idp15360416"></a>
## See Also

[msys.http.client.new](lua.ref.msys.http.client.new.php "msys.http.client.new"), [client:set_timeout](lua.ref.client_set_timeout.php "client:set_timeout"), [client:do_request](lua.ref.client_do_request.php "client:do_request"), [client:get_status](lua.ref.client_get_status.php "client:get_status"), [client:set_header](lua.ref.client_set_header.php "client:set_header"), [client:get_body](lua.ref.client_get_body.php "client:get_body") [client:get_headers](lua.ref.client_get_headers.php "client:get_headers")

| [Prev](lua.ref.msys.http.client.new.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.client_set_header.php) |
| msys.http.client.new  | [Table of Contents](index.php) |  client:set_header |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)