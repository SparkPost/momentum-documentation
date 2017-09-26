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

| trace_headers |
| [Prev](conf.ref.tls_verify.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.trace_smtp_mode.php) |

<a name="conf.ref.trace_headers"></a>
## Name

trace_headers — rfc2822 conformance

## Synopsis

`RFC2822 { Trace_Headers = "true" }`
`RFC2822 { Trace_Headers = "false" }`

<a name="idp6992144"></a>
## Description

Trace headers are headers added to the email message as it passes through the system to provide evidence of its transit through the MTA. These are of the form "Return-path:" and "Received:". If this feature is set to `true`, Momentum will prepend a missing Return-path header to the beginning of a message. Momentum will also prepend a complete Received: header indicating that the message passed though the system.

**Configuration Change. ** This option has been renamed RFC2822_Trace_Headers in version 3.0.

Trace headers are defined in RFC 822 and 2822 and recommended by RFC 821 and 2821\. It is recommended that they be enabled (per the default), but can be disabled under special circumstances by setting this option to `false`.

Turning off trace headers can easily result in messages looking like direct-to-mx spam, especially if there are no additional hops through internal MTAs before leaving the network.

Turning off trace headers may hamper mail loop detection methods, allowing malformed addresses to loop infinitely through the system.

<a name="idp6999088"></a>
## Scope

Trace_Headers is valid in the RFC2822 scope.

<a name="idp7000736"></a>
## See Also

[lone_lf_in_body](conf.ref.lone_lf_in_body.php "lone_lf_in_body"), [lone_lf_in_headers](conf.ref.lone_lf_in_headers.php "lone_lf_in_headers"), [messageid_header](conf.ref.messageid_header.php "messageid_header")

| [Prev](conf.ref.tls_verify.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.trace_smtp_mode.php) |
| tls_verify  | [Table of Contents](index.php) |  trace_smtp_mode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)