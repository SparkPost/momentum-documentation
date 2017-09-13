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

| rfc2822_remove_header |
| [Prev](apis.rfc2822_prepend_headers.php)  | Chapter 40. RFC Functions |  [Next](scheduler.php) |

<a name="apis.rfc2822_remove_header"></a>
## Name

rfc2822_remove_header — Create a new header

## Synopsis

`#include "rfc2822_parser.h"`

| `int **rfc2822_remove_header** (` | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">h</var>`)`; |   |

`rfc2822_context * <var class="pdparam">ctx</var>`;
`const char * <var class="pdparam">h</var>`;<a name="idp31326080"></a>
## Description

Remove a header created using [rfc2822_new_header](apis.rfc2822_new_header.php "rfc2822_new_header").

### Note

When you remove a header, the memory associated with it is freed; be sure to deal with any external references to that header.

**Parameters**

<dl class="variablelist">

<dt>ctx</dt>

<dd>

The rfc2822_context associated with the header.

</dd>

<dt>h</dt>

<dd>

The header you wish to remove.

</dd>

</dl>

**Return Values**

This function returns the index of the removed header.

**Threading**

It is legal to call this function in any thread.

<a name="idp31335984"></a>
## See Also

[Section 68.66, “rfc2822_context”](structs.rfc2822_context.php "68.66. rfc2822_context")

| [Prev](apis.rfc2822_prepend_headers.php)  | [Up](rfc.php) |  [Next](scheduler.php) |
| rfc2822_prepend_header  | [Table of Contents](index.php) |  Chapter 41. Scheduler Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)