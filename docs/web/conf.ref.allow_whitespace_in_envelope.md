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

| allow_whitespace_in_envelope |
| [Prev](conf.ref.allow_null_envelope_sender.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.async_bounce_rendering.php) |

<a name="conf.ref.allow_whitespace_in_envelope"></a>
## Name

allow_whitespace_in_envelope — permit trailing whitespace before the final CRLF

## Synopsis

`allow_whitespace_in_envelope = false`

<a name="idp4131264"></a>
## Description

**Configuration Change. ** This feature is available as of version 2.2.3.46.

In RFC 2822, in the interest of improved interoperability, SMTP receivers are encouraged to tolerate trailing white space before the terminating CRLF. When set to true, this directive instructs Momentum to ignore such trailing white spaces.

The default value for this option is `false`.

<a name="idp4136784"></a>
## Scope

`allow_whitespace_in_envelope` is valid in the RFC2822 scope.

<a name="idp4138848"></a>
## See Also

[RFC2822](conf.ref.rfc2822.php "RFC2822")

| [Prev](conf.ref.allow_null_envelope_sender.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.async_bounce_rendering.php) |
| allow_null_envelope_sender  | [Table of Contents](index.php) |  async_bounce_rendering |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)