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

| strnchrn |
| [Prev](apis.strncasestrn.php)  | Chapter 51. String Functions |  [Next](apis.strnstrn.php) |

<a name="apis.strnchrn"></a>
## Name

strnchrn — Searches a string for the first occurence of any of a set of characters

## Synopsis

`#include "util.h"`

| `char * **strnchrn** (` | <var class="pdparam">str</var>, |   |
|   | <var class="pdparam">nstr</var>, |   |
|   | <var class="pdparam">chars</var>, |   |
|   | <var class="pdparam">nchars</var>`)`; |   |

`const char * <var class="pdparam">str</var>`;
`int <var class="pdparam">nstr</var>`;
`const char * <var class="pdparam">chars</var>`;
`int <var class="pdparam">nchars</var>`;<a name="idp35746048"></a>
## Description

Searches a string for the first occurence of any of a set of characters

Searches `nstr` chars starting at str for any of the `nchars` characters that are in `chars`. It **will** go past a *NUL* character in *str*.

**Parameters**

<dl class="variablelist">

<dt>str</dt>

<dd>

The string to search.

</dd>

<dt>nstr</dt>

<dd>

The number of characters to search.

</dd>

<dt>chars</dt>

<dd>

The characters to search for.

</dd>

<dt>nchars</dt>

<dd>

The number of characters in *chars*.

</dd>

</dl>

**Return Values**

Returns a pointer to the first matching character or NULL if there is no match.

**Threading**

It is legal to call this function in any thread.

<a name="idp35761552"></a>
## See Also

[string_init_type](apis.string_init_type.php "string_init_type")

| [Prev](apis.strncasestrn.php)  | [Up](string.php) |  [Next](apis.strnstrn.php) |
| strncasestrn  | [Table of Contents](index.php) |  strnstrn |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)