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

| msg:address_header |
| [Prev](lua.ref.msg.id.php)  | 15.2. Lua Functions |  [Next](lua.ref.msg_binding.php) |

<a name="lua.ref.msg_address_header"></a>
## Name

msg:address_header — Returns address components as an array

<a name="idp25325920"></a>
## Synopsis

`msg:address_header(...);`

`...: mixed`<a name="idp25328608"></a>
## Description

Parses each instance of the named header for RFC2822 addresses and returns the component of those addresses as an array.

The ellipsis (...) in the parameter list indicates that this function has any number of arguments.

Enable this function with the statement `require('msys.extended.message');`.

<a name="idp25331792"></a>
## See Also

[msys.parseRFC2822Addresses](lua.ref.msys.parseRFC2822Addresses.php "msys.parseRFC2822Addresses")

| [Prev](lua.ref.msg.id.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_binding.php) |
| msg.id  | [Table of Contents](index.php) |  msg:binding |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)