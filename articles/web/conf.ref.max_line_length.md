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

| max_line_length |
| [Prev](conf.ref.max_dns_ttl.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.max_line_length_policy.php) |

<a name="conf.ref.max_line_length"></a>
## Name

max_line_length — rfc2822 conformance

## Synopsis

`RFC2822 { Max_Line_Length = "ignore" }`
`RFC2822 { Max_Line_Length = "pedantic" }`
`RFC2822 { Max_Line_Length = "fix" }`

<a name="idp5684880"></a>
## Description

RFC2822 requires that the maximum length of a single line of a message be no longer than 998 characters.

The default, "ignore," behavior is to ignore the length of the lines and process the email normally regardless.

If you would prefer to reject messages that do contain a line with more than 998 characters, the "pedantic" option can be used.

If you would prefer to accept messages with more than 998 characters on a line and have Momentum fix those messages by breaking up lines with more than 998 characters a value of "fix" may be specified.

### Note

This option has been renamed RFC2822_Max_Line_Length in version 3.0.

**Configuration Change. ** This feature is available as of version 2.2.3.46.

As of version 2.2.3.46, this option can be set to a numeric value. When `max_line_length_policy` is set to a value other than `none`, it is recommended that `max_line_length` be set to a *numeric* value greater than the RFC guideline. For example, `max_line_length = 2048`.

<a name="idp5695184"></a>
## Scope

Max_Line_Length is valid in the RFC2822 scope.

<a name="idp5696832"></a>
## See Also

[RFC2822](conf.ref.rfc2822.php "RFC2822"), [lone_lf_in_body](conf.ref.lone_lf_in_body.php "lone_lf_in_body"), [lone_lf_in_headers](conf.ref.lone_lf_in_headers.php "lone_lf_in_headers"), [messageid_header](conf.ref.messageid_header.php "messageid_header")

| [Prev](conf.ref.max_dns_ttl.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.max_line_length_policy.php) |
| max_dns_ttl  | [Table of Contents](index.php) |  max_line_length_policy |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)