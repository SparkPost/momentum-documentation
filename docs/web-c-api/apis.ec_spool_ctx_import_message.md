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

| ec_spool_ctx_import_message |
| [Prev](apis.ec_spool_ctx_get_spool_base.php)  | Chapter 49. Spool-related Functions |  [Next](apis.ec_spool_ctx_lock.php) |

<a name="apis.ec_spool_ctx_import_message"></a>
## Name

ec_spool_ctx_import_message — import a message from a spool context into the system spool

## Synopsis

`#include "spool.h"`

| `int **ec_spool_ctx_import_message** (` | <var class="pdparam">src</var>, |   |
|   | <var class="pdparam">id</var>`)`; |   |

`ec_spool_ctx * <var class="pdparam">src</var>`;
`message_id * <var class="pdparam">id</var>`;<a name="idp34883552"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

import a message from a spool context into the system spool.

The import will try to preserve the message id if possible, or re-generate if it would conflict with something else already in the system.

**Parameters**

<dl class="variablelist">

<dt>src</dt>

<dd>

the spool from which to import the message

</dd>

<dt>id</dt>

<dd>

the id of the message within the src context

</dd>

</dl>

| [Prev](apis.ec_spool_ctx_get_spool_base.php)  | [Up](spool.php) |  [Next](apis.ec_spool_ctx_lock.php) |
| ec_spool_ctx_get_spool_base  | [Table of Contents](index.php) |  ec_spool_ctx_lock |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)