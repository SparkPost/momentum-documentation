| sess:request_delete_header |
| [Prev](lua.ref.sess_request_add_header.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.sess_request_finalize.php) |

<a name="lua.ref.sess_request_delete_header"></a>
## Name

sess:request_delete_header — Delete a header from an HTTP session

<a name="idp15274912"></a>
## Synopsis

`require('msys.httpclnt');`

`sess:request__delete_header(header);`

`header: string`<a name="idp15278624"></a>
## Description

Delete a header from an HTTP session. `header` is the key that you wish to delete. You must call [sess:request_finalize](lua.ref.sess_request_finalize.php "sess:request_finalize") after invoking this function. Use this function in the `http_request_eval` callout.

On success this function returns `1` and on failure `0`.

<a name="idp15283232"></a>
### See Also

[sess:request_finalize](lua.ref.sess_request_finalize.php "sess:request_finalize") and [sess:request_add_header](lua.ref.sess_request_add_header.php "sess:request_add_header")

| [Prev](lua.ref.sess_request_add_header.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.sess_request_finalize.php) |
| sess:request_add_header  | [Table of Contents](index.php) |  sess:request_finalize |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)