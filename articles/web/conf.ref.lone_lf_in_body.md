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

| lone_lf_in_body |
| [Prev](conf.ref.logger.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.lone_lf_in_headers.php) |

<a name="conf.ref.lone_lf_in_body"></a>
## Name

lone_lf_in_body — rfc2822 conformance

## Synopsis

`RFC2822 { Lone_LF_in_Body = "ignore" }`
`RFC2822 { Lone_LF_in_Body = "pedantic" }`
`(Since version 2.2.3.46) RFC2822 { Lone_LF_in_Body = "fix" }`

<a name="idp5515344"></a>
## Description

RFC 2822 (section 2.3) strictly forbids Internet email from containing a carriage return (CR) or a linefeed (LF) by itself. If they do occur, they must appear in a CR LF sequence.

However, a wide variety of Internet email messages are transmitted with lone CR or LF characters in them. To be pedantic would lead to the rejection of messages that may be of importance. By default, Momentum will accept messages with lone CR or LF characters in the body. If the value "pedantic" is given, Momentum will inspect the body for violations of this nature and reject the message during SMTP.

Since version 2.2.3.46, you can set Lone_LF_in_Body to `fix` which will convert lone linefeeds into a canonical CRLF sequence. This option is intended for use by sites that are injecting mail.

### Note

This option has been renamed RFC2822_Lone_LF_in_Body in version 3.0.

<a name="idp5520144"></a>
## Scope

Lone_LF_in_Body is valid in the RFC2822 scope.

<a name="idp5521792"></a>
## See Also

[lone_lf_in_headers](conf.ref.lone_lf_in_headers.php "lone_lf_in_headers")

| [Prev](conf.ref.logger.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.lone_lf_in_headers.php) |
| logger  | [Table of Contents](index.php) |  lone_lf_in_headers |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)