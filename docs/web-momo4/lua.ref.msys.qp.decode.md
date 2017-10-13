<a name="lua.ref.msys.qp.decode"></a>
## Name

msys.qp.decode — Decode a quoted-printable message

<a name="idp18341280"></a>
## Synopsis

`msys.qp.decode(encoded_txt, charset);`

```
encoded_txt: string
charset: string, optional
```
<a name="idp18344288"></a>
## Description

`encoded_text` is a quoted-printable encoded string. This function returns the decoded bytes in a string. If the text cannot be decoded, it raises an error. By default, the character encoding for the decoded text is UTF-8\. If the original text is not UTF-8, its character encoding must be specified as `charset` in order for the decoded text returned from this function to be in UTF-8.

Enable this function with the statement `require('msys.qp');`.

<a name="idp18348320"></a>
## See Also

[msys.qp.encode](lua.ref.msys.qp.encode.php "msys.qp.encode")

| [Prev](lua.ref.msys.os.statvfs_subscribe.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.qp.encode.php) |
| msys.os.statvfs_subscribe  | [Table of Contents](index.php) |  msys.qp.encode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)