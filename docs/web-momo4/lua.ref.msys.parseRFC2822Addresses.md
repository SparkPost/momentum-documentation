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

| msys.parseRFC2822Addresses |
| [Prev](lua.ref.msys.lock.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.readfile.php) |

<a name="lua.ref.msys.parseRFC2822Addresses"></a>
## Name

msys.parseRFC2822Addresses — Parse the address string per the address parsing rules defined in RFC2822

<a name="idp16215968"></a>
## Synopsis

`msys.parseRFC2822Addresses(addressstring, component);`

```
addressstring: string
component: string
```
<a name="idp16219008"></a>
## Description

Parse the address string per the address parsing rules defined in RFC2822\. *Note that this is NOT the same specification used to parse SMTP protocol addresses (RFC2821)* .

Where the address header is made up of `user+detail@domain`, the possible components are:

*   `all` the entire email address

*   `localpart` everything before the `@`

*   `user` the user portion

*   `detail` the detail portion

*   `domain` the domain portion

A table containing each detected address component is returned.

It is anticipated that you will usually want to use the `msg:address_header` function as it is more convenient.

Because this function is in the `msys` namespace, an explicit `require` is not necessary.

<a name="idp16232928"></a>
## See Also

[msg:address_header](lua.ref.msg_address_header.php "msg:address_header")

| [Prev](lua.ref.msys.lock.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.readfile.php) |
| msys.lock  | [Table of Contents](index.php) |  msys.readfile |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)