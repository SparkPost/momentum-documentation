<a name="lua.ref.sess_request_set_body"></a>
## Name

sess:request_set_body — Set the body of an HTTP session

<a name="idp15306928"></a>
## Synopsis

`require('msys.httpclnt')`

`sess:request_set_body(request);`

`request: JSON string`<a name="idp15310640"></a>
## Description

Set the body of an HTTP session. `request` is a JSON-formatted string. You must call [sess:request_finalize](lua.ref.sess_request_finalize "sess:request_finalize") after invoking this function.

For a code example see [http_request_eval](https://support.messagesystems.com/docs/web-push/push.http_request_eval).

<a name="idp15314640"></a>
### See Also

[sess:request_finalize](lua.ref.sess_request_finalize "sess:request_finalize") and [sess:request_add_header](lua.ref.sess_request_add_header.php "sess:request_add_header")
