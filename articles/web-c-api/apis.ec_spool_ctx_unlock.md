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

| ec_spool_ctx_unlock |
| [Prev](apis.ec_spool_ctx_swap_out_met.php)  | Chapter 49. Spool-related Functions |  [Next](apis.ec_spool_in.php) |

<a name="apis.ec_spool_ctx_unlock"></a>
## Name

ec_spool_ctx_unlock — Unlock a spool context. Note that it is not safe to unlock the global spool context

## Synopsis

`#include "spool.h"`

| `int **ec_spool_ctx_unlock** (` | <var class="pdparam">ctx</var>`)`; |   |

`ec_spool_ctx * <var class="pdparam">ctx</var>`;<a name="idp35028176"></a>
## Description

Unlock a spool context. Note that it is not safe to unlock the global spool context.

**Parameters**

<dl class="variablelist">

<dt>ctx</dt>

<dd>

The spool context to unlock.

</dd>

</dl>

**Return Values**

Returns `0` on success; on error `-1` is returned.

**Threading**

It is legal to call this function in any thread.

<a name="idp35035072"></a>
## See Also

[Section 68.42, “ec_spool_ctx”](structs.ec_spool_ctx.php "68.42. ec_spool_ctx")

| [Prev](apis.ec_spool_ctx_swap_out_met.php)  | [Up](spool.php) |  [Next](apis.ec_spool_in.php) |
| ec_spool_ctx_swap_out_met  | [Table of Contents](index.php) |  ec_spool_in |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)