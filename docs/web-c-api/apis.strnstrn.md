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

| strnstrn |
| [Prev](apis.strnchrn.php)  | Chapter 51. String Functions |  [Next](apis.suffix_tree_stringprint_next.php) |

<a name="apis.strnstrn"></a>
## Name

strnstrn — Find a binary substring within a binary string

## Synopsis

`#include "util.h"`

| `const char * **strnstrn** (` | <var class="pdparam">needle</var>, |   |
|   | <var class="pdparam">needle_len</var>, |   |
|   | <var class="pdparam">haystack</var>, |   |
|   | <var class="pdparam">haystack_len</var>`)`; |   |

`const char * <var class="pdparam">needle</var>`;
`int <var class="pdparam">needle_len</var>`;
`const char * <var class="pdparam">haystack</var>`;
`int <var class="pdparam">haystack_len</var>`;<a name="idp35773712"></a>
## Description

Find a binary substring within a binary string.

Search for needle in haystack. `NUL` characters in the strings are ignored; only the lengths are respected.

**Parameters**

<dl class="variablelist">

<dt>needle</dt>

<dd>

The string to find.

</dd>

<dt>needle_len</dt>

<dd>

The length of the needle.

</dd>

<dt>haystack</dt>

<dd>

The string to search.

</dd>

<dt>haystack_len</dt>

<dd>

The length of the haystack.

</dd>

</dl>

**Return Values**

Returns a pointer to the first instance of needle found in haystack.

**Threading**

It is legal to call this function in the `Scheduler` thread.

| [Prev](apis.strnchrn.php)  | [Up](string.php) |  [Next](apis.suffix_tree_stringprint_next.php) |
| strnchrn  | [Table of Contents](index.php) |  suffix_tree_stringprint_next |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)