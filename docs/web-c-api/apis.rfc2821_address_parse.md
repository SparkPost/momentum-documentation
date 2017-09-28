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

| rfc2821_address_parse |
| [Prev](apis.rfc2821_address_destroy.php)  | Chapter 40. RFC Functions |  [Next](apis.rfc2822_address_destroy.php) |

<a name="apis.rfc2821_address_parse"></a>
## Name

rfc2821_address_parse — Parse an rfc2821 address

## Synopsis

`#include "misc/rfc2821addr.h"`

| `int **rfc2821_address_parse** (` | <var class="pdparam">addr</var>, |   |
|   | <var class="pdparam">addrlen</var>, |   |
|   | <var class="pdparam">ctx</var>`)`; |   |

`const char * <var class="pdparam">addr</var>`;
`int <var class="pdparam">addrlen</var>`;
`rfc2821_ctx * <var class="pdparam">ctx</var>`;<a name="idp31035152"></a>
## Description

Parse an rfc2821 address.

**Parameters**

<dl class="variablelist">

<dt>addr</dt>

<dd>

The address to be parsed.

</dd>

<dt>addrlen</dt>

<dd>

The length of the address.

</dd>

<dt>ctx</dt>

<dd>

See [rfc2821_ctx](structs.rfc2821_ctx.php "68.64. rfc2821_ctx").

</dd>

</dl>

**Return Values**

On success this function returns `0` and populates the rfc2821_ctx passed in. On failure this function returns `-1`.

**Threading**

It is legal to call this function in any thread.

<a name="idp31046752"></a>
## See Also

[rfc2821_address_destroy](apis.rfc2821_address_destroy.php "rfc2821_address_destroy")

| [Prev](apis.rfc2821_address_destroy.php)  | [Up](rfc.php) |  [Next](apis.rfc2822_address_destroy.php) |
| rfc2821_address_destroy  | [Table of Contents](index.php) |  rfc2822_address_destroy |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)