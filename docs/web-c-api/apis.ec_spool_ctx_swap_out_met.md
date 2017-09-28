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

| ec_spool_ctx_swap_out_met |
| [Prev](apis.ec_spool_ctx_spool_in.php)  | Chapter 49. Spool-related Functions |  [Next](apis.ec_spool_ctx_unlock.php) |

<a name="apis.ec_spool_ctx_swap_out_met"></a>
## Name

ec_spool_ctx_swap_out_met — Swap out everything about the message except for the body

## Synopsis

`#include "spool.h"`

| `int **ec_spool_ctx_swap_out_met** (` | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">mid</var>, |   |
|   | <var class="pdparam">force</var>`)`; |   |

`ec_spool_ctx * <var class="pdparam">ctx</var>`;
`message_id * <var class="pdparam">mid</var>`;
`int <var class="pdparam">force</var>`;<a name="idp35005584"></a>
## Description

Swap out everything about a message such as the envelope, size, context dictionaries, etc.) except for the body.

**Parameters**

<dl class="variablelist">

<dt>ctx</dt>

<dd>

The spool context.

</dd>

<dt>mid</dt>

<dd>

The message id.

</dd>

<dt>force</dt>

<dd>

Set this parameter to `1` to force a swap out. Otherwise set it to `0`.

</dd>

</dl>

**Return Values**

On success this function returns `EC_MSG_SWAP_RESULT_COMPLETE` or `EC_MSG_SWAP_RESULT_PARTIAL`; on failure `EC_MSG_SWAP_RESULT_ERR` is returned.

**Threading**

It is legal to call this function in any thread.

<a name="idp35017568"></a>
## See Also

[Section 68.42, “ec_spool_ctx”](structs.ec_spool_ctx.php "68.42. ec_spool_ctx") and [Section 68.60, “message_id”](structs.message_id.php "68.60. message_id")

| [Prev](apis.ec_spool_ctx_spool_in.php)  | [Up](spool.php) |  [Next](apis.ec_spool_ctx_unlock.php) |
| ec_spool_ctx_spool_in  | [Table of Contents](index.php) |  ec_spool_ctx_unlock |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)