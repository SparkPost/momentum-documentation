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

| rfc2822_lone_lf_in_body |
| [Prev](conf.ref.rfc2822_date_header.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.rfc2822_lone_lf_in_headers.php) |

<a name="conf.ref.rfc2822_lone_lf_in_body"></a>
## Name

rfc2822_lone_lf_in_body — rfc2822 conformance

## Synopsis

`RFC2822_Lone_LF_in_Body = "ignore"`
`RFC2822_Lone_LF_in_Body = "pedantic"`
`RFC2822_Lone_LF_in_Body = "fix"`

<a name="idp11329264"></a>
## Description

### Note

This option is available as of version 3.0 and replaces the version 2.2 option of the same name declared in the RFC2822 scope.

From the web UI, when this option has not been set, its value is shown as `0`. This is the integer constant value of the default, `ignore`. Once this option has been set, the string value displays rather than the integer constant. If you set this value from the web UI, choose one of the string values rather than the `Custom` option.

RFC 2822 (section 2.3) strictly forbids Internet email from containing a carriage return (CR) or a linefeed (LF) by itself. If they do occur, they must appear in a CR LF sequence.

However, a wide variety of Internet email messages are transmitted with lone CR or LF characters in them. To be pedantic would lead to the rejection of messages that may be of importance. By default, Momentum will accept messages with lone CR or LF characters in the body. If the value "pedantic" is given, Momentum will inspect the body for violations of this nature and reject the message during SMTP.

Since version 3.0.11, you can set `RFC2822_Lone_LF_in_Body` to `fix` which will convert lone linefeeds into a canonical CRLF sequence. This option is intended for use by sites that are injecting mail.

Any MTA which modifies the body of a message is considered hostile, and Momentum will not act as a hostile MTA without being explicitly configured to do so. If you are considering setting this option to `fix`, think twice: message content modification in any MTA can invalidate digital signatures and imposes a performance overhead. It is generally better to ensure that the content you are injecting is appropriately formed, rather than leaving it for the MTA to correct. We recognize that this may not always be possible, so we offer the "fix" option as a convenience.

When set to `fix`, this option also fixes lone CRs.

<a name="idp11338896"></a>
## Scope

RFC2822_Lone_LF_in_Body is valid in the global and the pathway scopes.

<a name="idp11340576"></a>
## See Also

[rfc2822_lone_lf_in_headers](conf.ref.rfc2822_lone_lf_in_headers.php "rfc2822_lone_lf_in_headers"), [rfc2822_messageid_header](conf.ref.rfc2822_messageid_header.php "rfc2822_messageid_header"), [rfc2822_missing_headers](conf.ref.rfc2822_missing_headers.php "rfc2822_missing_headers"), [rfc2822_trace_headers](conf.ref.rfc2822_trace_headers.php "rfc2822_trace_headers"), [rfc2822_max_line_length](conf.ref.rfc2822_max_line_length.php "rfc2822_max_line_length"), [rfc2822_date_header](conf.ref.rfc2822_date_header.php "rfc2822_date_header"), [rfc2821_pedantic_address_rules](conf.ref.rfc2821_pedantic_address_rules.php "rfc2821_pedantic_address_rules"), [rfc2821_allow_whitespace_in_envelope](conf.ref.rfc2821_allow_whitespace_in_envelope.php "rfc2821_allow_whitespace_in_envelope")

| [Prev](conf.ref.rfc2822_date_header.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.rfc2822_lone_lf_in_headers.php) |
| rfc2822_date_header  | [Table of Contents](index.php) |  rfc2822_lone_lf_in_headers |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)