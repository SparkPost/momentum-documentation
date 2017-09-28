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

| stringprintf |
| [Prev](apis.stringprint_domainname.php)  | Chapter 51. String Functions |  [Next](apis.stringwrite2.php) |

<a name="apis.stringprintf"></a>
## Name

stringprintf — Print a formatted string

## Synopsis

`#include "misc/ec_string.h"`

| `string * **stringprintf** (` | <var class="pdparam">str</var>, |   |
|   | <var class="pdparam">format</var>, |   |
|   | <var class="pdparam">...</var>`)`; |   |

`string * <var class="pdparam">str</var>`;
`const char * <var class="pdparam">format</var>`;
`<var class="pdparam">...</var>`;<a name="idp35498960"></a>
## Description

Format a string passing in the format argument(s). Use this function in the following way:

```
stringprintf(out, "header '%s' has %d nodes %d childnodes\n",
    parent->ancestry, parent->nodes->size, parent->childnodes->size);
```
**Parameters**

<dl class="variablelist">

<dt>str</dt>

<dd>

The ec_string.

</dd>

<dt>format</dt>

<dd>

The string with embedded format specifier(s).

</dd>

<dt>...</dt>

<dd>

The variable argument(s).

</dd>

</dl>

**Return Values**

Returns the formatted string.

**Threading**

It is legal to call this function in any thread.

<a name="idp35509488"></a>
## See Also

[Section 68.85, “string”](structs.string.php "68.85. string")

| [Prev](apis.stringprint_domainname.php)  | [Up](string.php) |  [Next](apis.stringwrite2.php) |
| stringprint_domainname  | [Table of Contents](index.php) |  stringwrite2 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)