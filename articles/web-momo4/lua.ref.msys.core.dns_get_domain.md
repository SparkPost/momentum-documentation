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

| msys.core.dns_get_domain |
| [Prev](lua.ref.curl.unescape.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.core.get_now_ts.php) |

<a name="lua.ref.msys.core.dns_get_domain"></a>
## Name

msys.core.dns_get_domain — Get a domain record

<a name="idp15692832"></a>
## Synopsis

`msys.core.dns_get_domain(domain);`

`domain: string`<a name="idp15695360"></a>
## Description

Get domain record userdata by passing in the domain name. For a code example see [Example 70.33, “registerControl example”](lua.ref.msys.registerControl.php#lua.ref.msys.registerControl.example "Example 70.33. registerControl example").

Because this function is in the `msys.core` namespace, an explicit `require('msys.core')` is not necessary.

<a name="idp15698752"></a>
## See Also

[msys.core.mail_queue_delay_domain](lua.ref.msys.core.mail_queue_delay_domain.php "msys.core.mail_queue_delay_domain")

| [Prev](lua.ref.curl.unescape.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.core.get_now_ts.php) |
| curl.unescape  | [Table of Contents](index.php) |  msys.core.get_now_ts |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)