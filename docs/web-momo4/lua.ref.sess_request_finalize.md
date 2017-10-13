| sess:request_finalize |
| [Prev](lua.ref.sess_request_delete_header.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.sess_request_set_body.php) |

<a name="lua.ref.sess_request_finalize"></a>
## Name

sess:request_finalize — Finalize changes to an HTTP request

<a name="idp15290416"></a>
## Synopsis

`require('msys.httpclnt')`

`sess:request_finalize(update);`

`update: boolean`<a name="idp15294128"></a>
## Description

Finalize changes to an HTTP session. Call this function whenever the data in an http_session has been modified. Set `update` to `1` if you are updating existing data. If you are adding new session elements, set it to `0`.

For a code example see [http_request_eval](https://support.messagesystems.com/docs/web-push/push.http_request_eval.php). Use this function in the `http_request_eval` callout.

<a name="idp15299904"></a>
## See Also

[sess:request_set_body](lua.ref.sess_request_set_body.php "sess:request_set_body") and [sess:request_add_header](lua.ref.sess_request_add_header.php "sess:request_add_header")

| [Prev](lua.ref.sess_request_delete_header.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.sess_request_set_body.php) |
| sess:request_delete_header  | [Table of Contents](index.php) |  sess:request_set_body |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)