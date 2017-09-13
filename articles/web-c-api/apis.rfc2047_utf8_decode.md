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

| rfc2047_utf8_decode |
| [Prev](apis.ec_rfc822_date.php)  | Chapter 40. RFC Functions |  [Next](apis.rfc2047_utf8_decode_to_string.php) |

<a name="apis.rfc2047_utf8_decode"></a>
## Name

rfc2047_utf8_decode — Decode rfc2047 encoding, returning a string that is utf-8 encoded

## Synopsis

`#include "misc/rfc2047.h"`

| `char * **rfc2047_utf8_decode** (` | <var class="pdparam">header</var>, |   |
|   | <var class="pdparam">hdrlen</var>, |   |
|   | <var class="pdparam">outlen</var>, |   |
|   | <var class="pdparam">needs_free</var>`)`; |   |

`const char * <var class="pdparam">header</var>`;
`int <var class="pdparam">hdrlen</var>`;
`int * <var class="pdparam">outlen</var>`;
`int * <var class="pdparam">needs_free</var>`;<a name="idp30946000"></a>
## Description

Decode rfc2047 encoding, returning a string that is utf-8 encoded.

The `needs_free` parameter indicates whether or not this function has allocated memory. If this function does allocate memory, it is of the `MEMTYPE_MESSAGE_BODY` type. For more information about memory types see [ec_malloc](apis.ec_malloc.php "ec_malloc").

<dl class="variablelist">

<dt>header</dt>

<dd>

The header to be decoded.

</dd>

<dt>hdrlen</dt>

<dd>

The length of the header in bytes.

</dd>

<dt>outlen</dt>

<dd>

If `outlen` is not NULL, the integer it points to will be updated to hold the length of the returned string.

</dd>

<dt>needs_free</dt>

<dd>

If `needs_free` is a NULL pointer, you are always responsible for freeing the returned buffer. Free the returned buffer using [ec_free](apis.ec_free.php "ec_free"). If `needs_free` points to an integer, that integer will be set to `1` if the call allocated memory for the returned string (which happens when the header is encoded), but `0` if it did not (which happens when the header is not encoded).

</dd>

</dl>

**Return Value**

If the header needs decoding, this function returns the decoded header.

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.ec_rfc822_date.php)  | [Up](rfc.php) |  [Next](apis.rfc2047_utf8_decode_to_string.php) |
| ec_rfc822_date  | [Table of Contents](index.php) |  rfc2047_utf8_decode_to_string |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)