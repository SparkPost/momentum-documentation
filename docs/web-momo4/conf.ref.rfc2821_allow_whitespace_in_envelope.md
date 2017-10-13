| rfc2821_allow_whitespace_in_envelope |
| [Prev](conf.ref.retry_interval.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.rfc2821_pedantic_address_rules.php) |

<a name="conf.ref.rfc2821_allow_whitespace_in_envelope"></a>
## Name

rfc2821_allow_whitespace_in_envelope — permit trailing whitespace before the final CRLF

## Synopsis

`rfc2821_allow_whitespace_in_envelope = false`

<a name="idp26118672"></a>
## Description

In RFC 2821, in the interest of improved interoperability, SMTP receivers are encouraged to tolerate trailing white space before the terminating CRLF. When set to true, this directive instructs Momentum to ignore such trailing white spaces.

The default value for this option is `false`.

<a name="idp26121648"></a>
## Scope

`rfc2821_allow_whitespace_in_envelope` is valid in the global and pathway scopes.

<a name="idp26123936"></a>
## See Also

[rfc2822_lone_lf_in_body](conf.ref.rfc2822_lone_lf_in_body.php "rfc2822_lone_lf_in_body"), [rfc2822_lone_lf_in_headers](conf.ref.rfc2822_lone_lf_in_headers.php "rfc2822_lone_lf_in_headers"), [rfc2822_messageid_header](conf.ref.rfc2822_messageid_header.php "rfc2822_messageid_header"), [rfc2822_missing_headers](conf.ref.rfc2822_missing_headers.php "rfc2822_missing_headers"), [rfc2822_trace_headers](conf.ref.rfc2822_trace_headers.php "rfc2822_trace_headers"), [rfc2822_max_line_length](conf.ref.rfc2822_max_line_length.php "rfc2822_max_line_length"), [rfc2822_date_header](conf.ref.rfc2822_date_header.php "rfc2822_date_header"), [rfc2821_pedantic_address_rules](conf.ref.rfc2821_pedantic_address_rules.php "rfc2821_pedantic_address_rules")

| [Prev](conf.ref.retry_interval.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.rfc2821_pedantic_address_rules.php) |
| retry_interval  | [Table of Contents](index.php) |  rfc2821_pedantic_address_rules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)