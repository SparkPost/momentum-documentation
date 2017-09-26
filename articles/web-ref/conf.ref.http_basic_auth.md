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

| http_basic_auth |
| [Prev](conf.ref.hostname.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.http_host.php) |

<a name="conf.ref.http_basic_auth"></a>
## Name

http_basic_auth — Define the user credentials when using basic HTTP authentication

## Synopsis

http_basic_auth = "*`user:password`*"

<a name="idp9790112"></a>
## Description

**Configuration Change. ** This option is available as of version 3.5.6.

Define the user credentials when using basic HTTP authentication. Use this option when the [delivery_method](conf.ref.delivery_method.php "delivery_method") uses an HTTP protocol. Use a ‘`:`’ to separate the username and password.

Theres is no default value for this option.

<a name="idp9794496"></a>
## Scope

`http_` is valid in the global, binding_group, binding and domain scopes.

<a name="idp9796096"></a>
## See Also

[http_basic_auth](conf.ref.http_basic_auth.php "http_basic_auth"), [http_method](conf.ref.http_method.php "http_method"), [http_uri](conf.ref.http_uri.php "http_uri"), [http_host](conf.ref.http_host.php "http_host"), [http_version](conf.ref.http_version.php "http_version") and [Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/)

| [Prev](conf.ref.hostname.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.http_host.php) |
| hostname  | [Table of Contents](index.php) |  http_host |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)