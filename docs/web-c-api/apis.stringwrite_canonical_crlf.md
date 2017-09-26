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

| stringwrite_canonical_crlf |
| [Prev](apis.stringwrite2.php)  | Chapter 51. String Functions |  [Next](apis.stringwrite_config_bool.php) |

<a name="apis.stringwrite_canonical_crlf"></a>
## Name

stringwrite_canonical_crlf — Write a string terminated by a carriage return and line feed

## Synopsis

`#include "misc/ec_string.h"`

| `string * **stringwrite_canonical_crlf** (` | <var class="pdparam">str</var>, |   |
|   | <var class="pdparam">buf</var>, |   |
|   | <var class="pdparam">buflen</var>`)`; |   |

`string * <var class="pdparam">str</var>`;
`const char * <var class="pdparam">buf</var>`;
`int <var class="pdparam">buflen</var>`;<a name="idp35542608"></a>
## Description

Write a string with the canonical carriage return and line feed indicating a line break.

**Parameters**

<dl class="variablelist">

<dt>str</dt>

<dd>

An ec_string.

</dd>

<dt>buf</dt>

<dd>

The character array.

</dd>

<dt>buflen</dt>

<dd>

The length of the character array.

</dd>

</dl>

**Return Values**

Return an ec_string with the canonical carriage return and line feed to indicate a line break.

**Threading**

It is legal to call this function in any thread.

<a name="idp35552368"></a>
## See Also

[Section 68.85, “string”](structs.string.php "68.85. string")

| [Prev](apis.stringwrite2.php)  | [Up](string.php) |  [Next](apis.stringwrite_config_bool.php) |
| stringwrite2  | [Table of Contents](index.php) |  stringwrite_config_bool |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)