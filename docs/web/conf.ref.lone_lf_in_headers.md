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

| lone_lf_in_headers |
| [Prev](conf.ref.lone_lf_in_body.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.mail_queue_check_vm_interval.php) |

<a name="conf.ref.lone_lf_in_headers"></a>
## Name

lone_lf_in_headers — rfc2822 conformance

## Synopsis

`RFC2822 { Lone_LF_in_Headers = "fix" }`
`RFC2822 { Lone_LF_in_Headers = "pedantic" }`

<a name="idp5530528"></a>
## Description

RFC 2822 (section 2.2) requires that all headers end with a carriage return (CR) and a linefeed (LF). Technically, any MTA that accepts messages that do not separate headers with a CR LF sequence is not compliant. Therefore, the default behavior is to reject those messages during the SMTP session.

Many mail user agents do not comply to this standard and send messages with headers separated by lone LF. While non-compliant, you can have Momentum rectify these mistakes upon message reception by setting this option to "fix". *Note*: Setting this to "fix" will incur a slight performance penalty during reception. However, the performance impact is very small (almost negligible for a single message) and only applies to the messages that are badly formatted.

When set to `fix`, this option also fixes lone CRs.

### Note

This option has been renamed RFC2822_Lone_LF_in_Headers in version 3.0.

<a name="idp5535808"></a>
## Scope

Lone_LF_in_Headers is valid in the RFC2822 scope.

<a name="idp5537456"></a>
## See Also

[lone_lf_in_body](conf.ref.lone_lf_in_body.php "lone_lf_in_body")

| [Prev](conf.ref.lone_lf_in_body.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.mail_queue_check_vm_interval.php) |
| lone_lf_in_body  | [Table of Contents](index.php) |  mail_queue_check_vm_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)