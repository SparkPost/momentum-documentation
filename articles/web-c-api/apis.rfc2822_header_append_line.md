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

| rfc2822_header_append_line |
| [Prev](apis.rfc2822_free_header.php)  | Chapter 40. RFC Functions |  [Next](apis.rfc2822_header_stringwrite.php) |

<a name="apis.rfc2822_header_append_line"></a>
## Name

rfc2822_header_append_line — Append a line to a header

## Synopsis

`#include "rfc2822_parser.h"`

| `void **rfc2822_header_append_line** (` | <var class="pdparam">hdr</var>, |   |
|   | <var class="pdparam">str</var>`)`; |   |

`rfc2822_field * <var class="pdparam">hdr</var>`;
`const char * <var class="pdparam">str</var>`;<a name="idp31183536"></a>
## Description

Append a line to a header.

**Parameters**

<dl class="variablelist">

<dt>hdr</dt>

<dd>

The header that you wish to add to.

</dd>

<dt>str</dt>

<dd>

The line you wish to appended.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

<a name="idp31191632"></a>
## See Also

[Section 68.67, “rfc2822_field”](structs.rfc2822_field.php "68.67. rfc2822_field")

| [Prev](apis.rfc2822_free_header.php)  | [Up](rfc.php) |  [Next](apis.rfc2822_header_stringwrite.php) |
| rfc2822_free_header  | [Table of Contents](index.php) |  rfc2822_header_stringwrite |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)