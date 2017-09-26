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

| is_valid_email |
| [Prev](apis.is_valid_IP.php)  | Chapter 55. Utility Functions |  [Next](apis.isfinite.php) |

<a name="apis.is_valid_email"></a>
## Name

is_valid_email — Determines whether `emailaddr` is a valid email address

## Synopsis

`#include "util.h"`

| `int **is_valid_email** (` | <var class="pdparam">emailaddr</var>, |   |
|   | <var class="pdparam">mailbox_desc</var>, |   |
|   | <var class="pdparam">mailbox_desclen</var>, |   |
|   | <var class="pdparam">localpart</var>, |   |
|   | <var class="pdparam">lplen</var>, |   |
|   | <var class="pdparam">domain</var>, |   |
|   | <var class="pdparam">domainlen</var>`)`; |   |

`const char * <var class="pdparam">emailaddr</var>`;
`char * <var class="pdparam">mailbox_desc</var>`;
`int <var class="pdparam">mailbox_desclen</var>`;
`char * <var class="pdparam">localpart</var>`;
`int <var class="pdparam">lplen</var>`;
`char * <var class="pdparam">domain</var>`;
`int <var class="pdparam">domainlen</var>`;<a name="idp36653552"></a>
## Description

Determines whether `emailaddr` is a valid email address. If it is, then it will populate `localpart` and `domain` with the appropriate, parsed string values.

**Parameters**

<dl class="variablelist">

<dt>emailaddr</dt>

<dd>

The string that will be validated.

</dd>

<dt>mailbox_desc</dt>

<dd>

This value should always be passed `NULL`.

</dd>

<dt>mailbox_desclen</dt>

<dd>

The length of `mailbox_desc`, in bytes. This value should always be passed `0`.

</dd>

<dt>localpart</dt>

<dd>

The localpart of the email address.

</dd>

<dt>lplen</dt>

<dd>

The length of the `localpart`, in bytes.

</dd>

<dt>domain</dt>

<dd>

The domain part of the email address.

</dd>

<dt>domainlen</dt>

<dd>

The length of `domain`, in bytes.

</dd>

</dl>

**Return Values**

This function returns the non-zero constant `VALID_NOBRACKET` if the `emailaddr` is valid, and `0` otherwise.

**Threading**

It is legal to call this function in any thread.

<a name="idp36675632"></a>
## See Also

[is_valid_IP](apis.is_valid_IP.php "is_valid_IP") and [rfc2821_address_parse](apis.rfc2821_address_parse.php "rfc2821_address_parse").

| [Prev](apis.is_valid_IP.php)  | [Up](utility.php) |  [Next](apis.isfinite.php) |
| is_valid_IP  | [Table of Contents](index.php) |  isfinite |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)