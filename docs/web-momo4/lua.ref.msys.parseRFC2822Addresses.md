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