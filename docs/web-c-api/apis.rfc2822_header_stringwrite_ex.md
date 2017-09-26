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

| rfc2822_header_stringwrite_ex |
| [Prev](apis.rfc2822_header_stringwrite.php)  | Chapter 40. RFC Functions |  [Next](apis.rfc2822_new_header.php) |

<a name="apis.rfc2822_header_stringwrite_ex"></a>
## Name

rfc2822_header_stringwrite_ex — Renders the rfc2822 header to a string, with formatting options

## Synopsis

`#include "rfc2822_parser.h"`

| `string * **rfc2822_header_stringwrite_ex** (` | <var class="pdparam">s</var>, |   |
|   | <var class="pdparam">field</var>, |   |
|   | <var class="pdparam">flags</var>`)`; |   |

`string * <var class="pdparam">s</var>`;
`rfc2822_field * <var class="pdparam">field</var>`;
`int <var class="pdparam">flags</var>`;<a name="idp31220880"></a>
## Description

Renders the rfc2822 header to a string, with formatting options.

**Parameters**

<dl class="variablelist">

<dt>s</dt>

<dd>

The string to write to.

</dd>

<dt>field</dt>

<dd>

The header to render.

</dd>

<dt>flags</dt>

<dd>

Zero or more RFC2822_HDR_RENDER_* flags These flags are:

*   `RFC2822_HDR_RENDER_NAME` – Render the field name and wsp_pad between name and first line

*   `RFC2822_HDR_RENDER_FOLD` – Render CRLF and wsp_pad between lines (else render a single space)

*   `RFC2822_HDR_RENDER_CRLF` – End with a CRLF

</dd>

</dl>

**Return Values**

On success this function returns the string passed in; on error, NULL.

**Threading**

It is legal to call this function in any thread.

<a name="idp31235344"></a>
## See Also

[Section 68.67, “rfc2822_field”](structs.rfc2822_field.php "68.67. rfc2822_field")

| [Prev](apis.rfc2822_header_stringwrite.php)  | [Up](rfc.php) |  [Next](apis.rfc2822_new_header.php) |
| rfc2822_header_stringwrite  | [Table of Contents](index.php) |  rfc2822_new_header |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)