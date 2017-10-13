<a name="lua.ref.session_response_status_set_std"></a>
## Name

session:response_status_set_std — Set the HTTP status for the session response

<a name="idp16474752"></a>
## Synopsis

`session:response_status_set_std(cod, message, mimetype);`

code: numeric
message: string
mimetype: string (optional)

<a name="idp16477088"></a>
## Description

Use this function with [msys.httpsrv.register](lua.ref.msys.httpsrv.register.php "msys.httpsrv.register") to set the HTTP status for the session response. For example code see [Example 70.30, “msys.httpsrv.register Example”](lua.ref.msys.httpsrv.register.php#lua.ref.msys.httpsrv.register.example "Example 70.30. msys.httpsrv.register Example"). For a description of the session object, see [ec_httpsrv_session](https://support.messagesystems.com/docs/web-c-api/structs.ec_httpsrv_session.php).

Set the `code` to a valid HTTP response code, the `message` to an appropriate message, and `mimetype` to a mime type. The following is an example:

`session:response_status_set_std(200, response, "text/plain");`

Enable this function with the statement `require("msys.extended.httpsrv");`.

<a name="idp16484304"></a>
## See Also

[msys.httpsrv.register](lua.ref.msys.httpsrv.register.php "msys.httpsrv.register") and [session:request_url_get](lua.ref.session_request_url_get.php "session:request_url_get")

| [Prev](lua.ref.session_request_url_get.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.json.decode.php) |
| session:request_url_get  | [Table of Contents](index.php) |  json.decode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)