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

| msg:header |
| [Prev](lua.ref.msg_get_envelope2.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msg_listener_addr.php) |

<a name="lua.ref.header"></a>
## Name

msg:header — Manipulate message headers

<a name="idp15811504"></a>
## Synopsis

`require('msys.extended.message')`

`msg:header(hdr, value, mode)`

```
hdr: string
value: string (optional)
mode: string (optional)
```

### Warning

This Lua function may not give expected results for multi-part MIME messages such as an MCMT message. It will behave as expected in the first MIME part. Consider using [msgpart:header](lua.ref.msgpart_header.php "msgpart:header").

<a name="idp15816912"></a>
## Description

This function may be used to manipulate message headers in a variety of ways: get, set, delete, prepend, append, and replace.

In order to *get* headers, pass only the first parameter and msg:header returns an array of header values. The headers will have RFC2047 header encoding removed, which means that any non-ASCII characters that are properly encoded according to MIME will be translated to UTF-8 text.

When used to *delete* a header, specify the name of the header you wish to delete and pass an empty string, `""`, as the second parameter.

If `mode` is `replace` (or omitted) then the following occurs: first all other headers of that name are deleted and then the new value is appended to the message headers. If `mode` is `prepend`, existing headers are preserved with the same name and the new value is prepended to the message. If the `mode` is `append`, existing headers are preserved with the same name and the new value is appended to the message. If the `value` is a table, multiple headers are added. When setting headers, any non-ASCII content will be subject to RFC2047 MIME header encoding, and stored in the header as UTF-8 encoded text.

<a name="lua.ref.msg_header.example.get"></a>

**Example 70.23. Getting a Header: Pass One Parameter**

```
local header_list;
header_list =  msg:header("X-Custom-Header");
local hdrval = header_list[1];
```

Note that when getting a header, the return value is a table.

<a name="lua.ref.msg_header.example.delete"></a>

**Example 70.24. Delete a Header: Pass Two Parameters**

`msg:header("X-Custom-Header", "");`

In this case, the return value of the `msg:header` function is a boolean.

<a name="lua.ref.msg_header.example.set"></a>

**Example 70.25. Setting a Header: Pass Two Parameters**

`msg:header("X-Custom-Header", "header value");`

When adding a header, the third parameter defaults to `append`. If you wish to prepend the header specify `prepend` as the third parameter. In this case, the return value of the `msg:header` function is a boolean.

<a name="lua.ref.msg_header.example.replace"></a>

**Example 70.26. Replace a Header: Pass Three Parameters**

`msg:header("X-Custom-Header", "123456", "replace");`

In this case the return value of the `msg:header` function is also a boolean.

<a name="idp15840240"></a>
## See Also

[msg:body](lua.ref.msg_body.php "msg:body") and [msgpart:header](lua.ref.msgpart_header.php "msgpart:header").

| [Prev](lua.ref.msg_get_envelope2.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_listener_addr.php) |
| msg:get_envelope2  | [Table of Contents](index.php) |  msg:listener_addr |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)