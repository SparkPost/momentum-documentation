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

| rfc2822_max_line_length_policy |
| [Prev](conf.ref.rfc2822_max_line_length.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.rfc2822_messageid_header.php) |

<a name="conf.ref.rfc2822_max_line_length_policy"></a>
## Name

rfc2822_max_line_length_policy — determine how non-RFC-compliant line lengths are handled

## Synopsis

`rfc2822_max_line_length_policy = "none"`

<a name="idp11405328"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.0.26.

This option defines how messages with non-RFC-compliant line lengths are handled. When set to `none`, messages are processed as usual. When set to `fix`, Momentum will attempt to fix the body of the message. When set to `reject`, messages with non-RFC-compliant line lengths are rejected.

### Note

From the web UI, when this option has not been set, its value is shown as `0`. This is the integer constant value of the default, `none`. Once this option has been set, the string value displays rather than the integer constant. If you set this value from the web UI, choose one of the string values rather than the `Custom` option.

When `rfc2822_max_line_length_policy` is set to a value other than `none`, it is recommended that `RFC2822_Max_Line_Length` be set to a *numeric* value greater than the RFC guideline. For example, `rfc2822_max_line_length = 2048`.

The default value for this option is `none`.

<a name="idp11417632"></a>
## Scope

`rfc2822_max_line_length_policy` is valid in the global, pathway and pathway_group scopes.

<a name="idp11419712"></a>
## See Also

[rfc2822_max_line_length](conf.ref.rfc2822_max_line_length.php "rfc2822_max_line_length")

| [Prev](conf.ref.rfc2822_max_line_length.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.rfc2822_messageid_header.php) |
| rfc2822_max_line_length  | [Table of Contents](index.php) |  rfc2822_messageid_header |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)