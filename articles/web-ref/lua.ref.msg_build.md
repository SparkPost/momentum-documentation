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

| msg:build |
| [Prev](lua.ref.msg_body_replace.php)  | 15.2. Lua Functions |  [Next](lua.ref.msg_discard.php) |

<a name="lua.ref.msg_build"></a>
## Name

msg:build — Create a message

<a name="idp25407328"></a>
## Synopsis

`msg:build(headers, parts, attachments);`

```
headers: table
parts: table
attachments: array of userdata
```
<a name="idp25410064"></a>
## Description

When calling this function, msg must be an empty message (created using `msys.core.ec_message_new()`). It requires the following inputs:

*   `headers` a table of *`header name`*      /*`header value`*        pairs. If the header's value contains non-ASCII or non-printable ASCII text, the caller must encode the text appropriately (see RFC 2047).

*   `parts` a table of alternative contents. Each pair consists of *`content-type/content`* pairs. For example, "text/plain; charset=utf8" / "Momentum 3.1 rocks."; "text/html" / "<b>Momentum<b> 3.1 rocks.". "

    If the value of Content-Type is `text/*` and there is no charset specified, the content will be quoted-printable encoded; if a charset is specified or content type is not `text/*`, the content will be base64 encoded.

*   `attachments` an array of attachment objects. Each element is a table representing an attachment. The attachment table must contain the following pairs:

    *   `type` the "content-type" of the attachment. If your content charset encoding is not UTF-8, you will need to specify it in here as a parameter. For example: charset=*`charset_encoding`*.

    *   `name` a file name.

        ### Note

        If the file is in the current directory, you cannot use the file name alone. As a workaround, precede the file name with `./`, for example, `./attachment.txt`.

    *   `headers` a string of concatenated headers. Such as "Openby: iphone4\r\nCertificate: AKJSdwuiqdQIWDUHQIWDUH". Note that there should not be a CRLF at end.

    *   `content` the content of the attachment. The value can be a string, an io_object or an ec_message. For a string, the content will be quoted-printable encoded for transferring; for an io_object, the content will be base64 encoded. It is the caller's responsibility to encode the io_object. When the content is an ec_message, values of type, name or headers are ignored. The ec_message will be treated as an attached mail with content-type equal to `message/rfc822; name="Attached Message"`.

Enable this function with the statement `require('msys.extended.message');`.

When it is complete the message will have the following structure:

```
Content-Type: multipart/mixed; boundary="_bbb_"
Other-headers

--_bbb_
Content-Type: multipart/alternative; boundary="_ccc_"
Other-headers

--_ccc_
Content-Type: text/plain
Content-Disposition: inline
Other-headers

<the content of plain mail>
--_ccc_
Content-Type: text/html
Content-Disposition: inline
Content-Transfer-Encoding: quoted-printable
Other-headers

<the content of html mail>
--_ccc_
...
... other parts
...
--_ccc_--
--_bbb_
Content-type: attachment; name=cool-app.exe
other headers
Content-Transfer-Encoding: base64

<base64 encoded binary>
--_bbb_
...
... other attachments
...
--_bbb_--

.
```
<a name="idp25431952"></a>
## See Also

[msg:inject](lua.ref.msg_inject.php "msg:inject")

| [Prev](lua.ref.msg_body_replace.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_discard.php) |
| msg:body_replace  | [Table of Contents](index.php) |  msg:discard |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)