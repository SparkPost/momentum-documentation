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

| http_host |
| [Prev](conf.ref.http_basic_auth.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.http_method.php) |

<a name="conf.ref.http_host"></a>
## Name

http_host — Define the HTTP host

## Synopsis

`http_host = "android.google.apis.com"`

<a name="idp24902832"></a>
## Description

Define the HTTP host when the `delivery_method` uses an HTTP protocol.

There is no default value for this option.

<a name="idp24905136"></a>
## Scope

`http_host` is valid in the global, binding_group, binding, and domain scopes.

<a name="idp24906992"></a>
## See Also

[delivery_method](conf.ref.delivery_method.php "delivery_method"), [http_basic_auth](conf.ref.http_basic_auth.php "http_basic_auth"), [http_method](conf.ref.http_method.php "http_method"), [http_version](conf.ref.http_version.php "http_version"), and [Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/)

| [Prev](conf.ref.http_basic_auth.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.http_method.php) |
| http_basic_auth  | [Table of Contents](index.php) |  http_method |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)