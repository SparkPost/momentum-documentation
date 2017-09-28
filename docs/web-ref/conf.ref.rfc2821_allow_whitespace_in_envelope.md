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

| rfc2821_allow_whitespace_in_envelope |
| [Prev](conf.ref.retry_interval.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.rfc2821_pedantic_address_rules.php) |

<a name="conf.ref.rfc2821_allow_whitespace_in_envelope"></a>
## Name

rfc2821_allow_whitespace_in_envelope — permit trailing whitespace before the final CRLF

## Synopsis

`rfc2821_allow_whitespace_in_envelope = false`

<a name="idp11266800"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.0.26.

In RFC 2821, in the interest of improved interoperability, SMTP receivers are encouraged to tolerate trailing white space before the terminating CRLF. When set to true, this directive instructs Momentum to ignore such trailing white spaces.

The default value for this option is `false`.

<a name="idp11272336"></a>
## Scope

`rfc2821_allow_whitespace_in_envelope` is valid in the global and pathway scopes.

<a name="idp11274400"></a>
## See Also

[rfc2822_lone_lf_in_body](conf.ref.rfc2822_lone_lf_in_body.php "rfc2822_lone_lf_in_body"), [rfc2822_lone_lf_in_headers](conf.ref.rfc2822_lone_lf_in_headers.php "rfc2822_lone_lf_in_headers"), [rfc2822_messageid_header](conf.ref.rfc2822_messageid_header.php "rfc2822_messageid_header"), [rfc2822_missing_headers](conf.ref.rfc2822_missing_headers.php "rfc2822_missing_headers"), [rfc2822_trace_headers](conf.ref.rfc2822_trace_headers.php "rfc2822_trace_headers"), [rfc2822_max_line_length](conf.ref.rfc2822_max_line_length.php "rfc2822_max_line_length"), [rfc2822_date_header](conf.ref.rfc2822_date_header.php "rfc2822_date_header"), [rfc2821_pedantic_address_rules](conf.ref.rfc2821_pedantic_address_rules.php "rfc2821_pedantic_address_rules")

| [Prev](conf.ref.retry_interval.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.rfc2821_pedantic_address_rules.php) |
| retry_interval  | [Table of Contents](index.php) |  rfc2821_pedantic_address_rules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)