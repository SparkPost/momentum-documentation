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

| date_header |
| [Prev](conf.ref.crypto_lock_method.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.debug_flags.php) |

<a name="conf.ref.date_header"></a>
## Name

date_header — rfc2822 conformance

## Synopsis

`RFC2822 { Date_Header = "ignore" }`
`RFC2822 { Date_Header = "pedantic" }`
`RFC2822 { Date_Header = "ifneeded" }`

<a name="idp4761440"></a>
## Description

RFC 2822 requires that a Date header be present in all email messages. This requirement can often pose problems with incompatible mail user agents that neglect to present messages with Date fields.

The default, "ifneeded," behavior is to add a Date header if one is not present upon receiving the message.

If you would prefer to reject messages that do not contain a Date header, the "pedantic" option can be used.

If you would prefer to accept messages without Date headers and have Momentum attempt delivery of those messages without adding a Date header, a value of "ignore" may be specified.

### Note

This option has been renamed RFC2822_Date_Header in version 3.0.

<a name="idp4766048"></a>
## Scope

Date_Header is valid in the RFC2822 scope.

<a name="idp4767680"></a>
## See Also

[lone_lf_in_body](conf.ref.lone_lf_in_body.php "lone_lf_in_body"), [lone_lf_in_headers](conf.ref.lone_lf_in_headers.php "lone_lf_in_headers"), [messageid_header](conf.ref.messageid_header.php "messageid_header")

| [Prev](conf.ref.crypto_lock_method.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.debug_flags.php) |
| crypto_lock_method  | [Table of Contents](index.php) |  debug_flags |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)