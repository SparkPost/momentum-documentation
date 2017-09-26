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

| rfc2822_lone_lf_in_headers |
| [Prev](conf.ref.rfc2822_lone_lf_in_body.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.rfc2822_max_line_length.php) |

<a name="conf.ref.rfc2822_lone_lf_in_headers"></a>
## Name

rfc2822_lone_lf_in_headers — rfc2822 conformance

## Synopsis

`RFC2822_Lone_LF_in_Headers = "fix"`
`RFC2822_Lone_LF_in_Headers = "pedantic"`

<a name="idp11353824"></a>
## Description

### Note

This option is available as of version 3.0 and replaces the version 2.2 option of the same name declared in the RFC2822 scope.

From the web UI, when this option has not been set, its value is shown as `0`. This is the integer constant value of the default, `pedantic`. Once this option has been set, the string value displays rather than the integer constant. If you set this value from the web UI, choose one of the string values rather than the `Custom` option.

RFC 2822 (section 2.2) requires that all headers end with a carriage return (CR) and a linefeed (LF). Technically, any MTA that accepts messages that do not separate headers with a CR LF sequence is not compliant. Therefore, the default behavior is to reject those messages during the SMTP session.

Many mail user agents do not comply to this standard and send messages with headers separated by lone LF. While non-compliant, you can have Momentum rectify these mistakes upon message reception by setting this option to "fix". *Note*: Setting this to "fix" will incur a slight performance penalty during reception. However, the performance impact is very small (almost negligible for a single message) and only applies to the messages that are badly formatted.

When set to `fix`, this option also fixes lone CRs.

<a name="idp11361120"></a>
## Scope

RFC2822_Lone_LF_in_Headers is valid in global and pathway scopes.

<a name="idp11362768"></a>
## See Also

[rfc2822_lone_lf_in_body](conf.ref.rfc2822_lone_lf_in_body.php "rfc2822_lone_lf_in_body"), [rfc2822_messageid_header](conf.ref.rfc2822_messageid_header.php "rfc2822_messageid_header"), [rfc2822_missing_headers](conf.ref.rfc2822_missing_headers.php "rfc2822_missing_headers"), [rfc2822_trace_headers](conf.ref.rfc2822_trace_headers.php "rfc2822_trace_headers"), [rfc2822_max_line_length](conf.ref.rfc2822_max_line_length.php "rfc2822_max_line_length"), [rfc2822_date_header](conf.ref.rfc2822_date_header.php "rfc2822_date_header"), [rfc2821_pedantic_address_rules](conf.ref.rfc2821_pedantic_address_rules.php "rfc2821_pedantic_address_rules"), [rfc2821_allow_whitespace_in_envelope](conf.ref.rfc2821_allow_whitespace_in_envelope.php "rfc2821_allow_whitespace_in_envelope")

| [Prev](conf.ref.rfc2822_lone_lf_in_body.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.rfc2822_max_line_length.php) |
| rfc2822_lone_lf_in_body  | [Table of Contents](index.php) |  rfc2822_max_line_length |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)