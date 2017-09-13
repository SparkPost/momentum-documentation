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

| ec_ssl_set_verify_errmsg |
| [Prev](apis.ec_ssl_set_ctx_verify_mode.php)  | Chapter 50. SSL Functions |  [Next](string.php) |

<a name="apis.ec_ssl_set_verify_errmsg"></a>
## Name

ec_ssl_set_verify_errmsg — Set the verify error message and code

## Synopsis

`#include "ec_ssl.h"`

| `void **ec_ssl_set_verify_errmsg** (` | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">code</var>, |   |
|   | <var class="pdparam">msg</var>`)`; |   |

`ec_ssl_ctx * <var class="pdparam">ctx</var>`;
`int <var class="pdparam">code</var>`;
`const char * <var class="pdparam">msg</var>`;<a name="idp35302304"></a>
## Description

Set the verify error message and code. The error message **must** be a single line without line endings; it will be appropriately formatted and sent to the peer according to the protocol in use.

To clear the 'verify' error, call with code set to `0` and msg set to `NULL`.

**Parameters**

<dl class="variablelist">

<dt>ctx</dt>

<dd>

The SSL context.

</dd>

<dt>code</dt>

<dd>

The error code.

</dd>

<dt>msg</dt>

<dd>

The error message.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp35314592"></a>
## See Also

[Section 68.43, “ec_ssl_ctx”](structs.ec_ssl_ctx.php "68.43. ec_ssl_ctx")

| [Prev](apis.ec_ssl_set_ctx_verify_mode.php)  | [Up](ssl.php) |  [Next](string.php) |
| ec_ssl_set_ctx_verify_mode  | [Table of Contents](index.php) |  Chapter 51. String Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)