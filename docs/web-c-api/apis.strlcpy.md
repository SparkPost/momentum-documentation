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

| strlcpy |
| [Prev](apis.strlcat.php)  | Chapter 51. String Functions |  [Next](apis.strncasestrn.php) |

<a name="apis.strlcpy"></a>
## Name

strlcpy — Size-bounded C string copying function

## Synopsis

`#include "util.h"`

| `size_t **strlcpy** (` | <var class="pdparam">dst</var>, |   |
|   | <var class="pdparam">src</var>, |   |
|   | <var class="pdparam">size</var>`)`; |   |

`char * <var class="pdparam">dst</var>`;
`const char * <var class="pdparam">src</var>`;
`size_t <var class="pdparam">size</var>`;<a name="idp35701408"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Size-bounded C string copying function.

Copies as many characters from src as will fit in dst, given that dst has at least size bytes of storage space available. Guarantees to NUL-terminate dst if size > 0.

**Parameters**

<dl class="variablelist">

<dt>src</dt>

<dd>

the string to copy from

</dd>

<dt>dst</dt>

<dd>

the string to copy to

</dd>

<dt>size</dt>

<dd>

the size of dst (including the terminating NUL)

</dd>

</dl>

**Return Values**

Returns the length of src. If the return value >= size, there was insufficient space in dst and truncation took place.

| [Prev](apis.strlcat.php)  | [Up](string.php) |  [Next](apis.strncasestrn.php) |
| strlcat  | [Table of Contents](index.php) |  strncasestrn |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)