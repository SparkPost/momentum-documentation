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

| RFC2822 |
| [Prev](conf.ref.retry_interval.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.routes.php) |

<a name="conf.ref.rfc2822"></a>
## Name

RFC2822 — scope to define rfc2822 conformance options

## Synopsis

`RFC2822 { ... }`

<a name="idp6422640"></a>
## Description

Many mail user agents send messages that do not comply with the RFC2822 standard. You can have Momentum correct these mistakes message reception by setting the options defined in this scope. For example, RFC 2822 (section 2.2) requires that all headers end with a carriage return (CR) and a linefeed (LF). Technically, any MTA that accepts messages that do not separate headers with a CR LF sequence is not compliant. The default behavior is to reject those messages during the SMTP session.

Find below an example of this scope showing the default value for each option:

```
RFC2822 {
  Lone_LF_in_Body = "pedantic"
  Lone_LF_in_Headers = "pedantic"
  MessageID_Header = "ifneeded"
  Date_Header = "pedantic"
  Max_Line_Length = "pedantic"
  Pedantic_Address_Rules = true
  Missing_Headers = "reject"
}
```

### Note

This scope does not exist in version 3.0\. All RFC2822 options have been redefined with the prefix `RFC2822_` with the exception of `Pedantic_Address_Rules` which is prefixed with `RFC2821_`.

<a name="idp6428432"></a>
## Scope

RFC2822 is valid in the global scope.

<a name="idp6430064"></a>
## See Also

[lone_lf_in_body](conf.ref.lone_lf_in_body.php "lone_lf_in_body"), [lone_lf_in_headers](conf.ref.lone_lf_in_headers.php "lone_lf_in_headers"), [messageid_header](conf.ref.messageid_header.php "messageid_header"), [date_header](conf.ref.date_header.php "date_header"), [max_line_length](conf.ref.max_line_length.php "max_line_length"), [pedantic_address_rules](conf.ref.pedantic_address_rules.php "pedantic_address_rules"), [missing_headers](conf.ref.missing_headers.php "missing_headers"), [allow_whitespace_in_envelope](conf.ref.allow_whitespace_in_envelope.php "allow_whitespace_in_envelope")

| [Prev](conf.ref.retry_interval.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.routes.php) |
| retry_interval  | [Table of Contents](index.php) |  routes |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)