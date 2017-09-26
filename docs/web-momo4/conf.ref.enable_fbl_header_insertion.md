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

| enable_fbl_header_insertion |
| [Prev](conf.ref.ehlo_timeout.php)  | Chapter 72. Configuration Options Reference |  [Next](config.ref.event_loop.php) |

<a name="conf.ref.enable_fbl_header_insertion"></a>
## Name

enable_fbl_header_insertion — enable or disable fbl header insertion

## Synopsis

`enable_fbl_header_insertion = "enabled"`

<a name="idp24574672"></a>
## Description

This option is used to enable or disable feedback loop header insertion. Note that for header insertion to work, the fbl module option, `Auto_log`, must also be set to `true`.

<a name="idp24577520"></a>
## Scope

This option is valid in the global, binding, binding_group, and domain scopes.

<a name="idp24579392"></a>
## See Also

[Section 71.35, “fbl - Feedback Loop”](modules.fbl.php "71.35. fbl - Feedback Loop")

| [Prev](conf.ref.ehlo_timeout.php)  | [Up](config.options.ref.php) |  [Next](config.ref.event_loop.php) |
| ehlo_timeout  | [Table of Contents](index.php) |  event_loop |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)