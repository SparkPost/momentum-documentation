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

| get_inbound_tls_parameters |
| [Prev](hooks.core.generate_soft_bounce_message_preamble.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.get_msg_expiration_params.php) |

<a name="hooks.core.get_inbound_tls_parameters"></a>
## Name

get_inbound_tls_parameters — Allows implementors to override and control the usage of TLS on a per-message basis when accepting mail into the system

## Synopsis

`#include "hooks/core/get_inbound_tls_parameters.h"`

| `int **core_get_inbound_tls_parameters** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">mc</var>, |   |
|   | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">params</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`message_construct * <var class="pdparam">mc</var>`;
`validate_context * <var class="pdparam">ctx</var>`;
`ec_ssl_ctx_params * <var class="pdparam">params</var>`;<a name="idp18486384"></a>
## Description

Allows providers to override and control the usage of TLS on a per-message basis when accepting mail into the system.

Your hook provider is responsible for setting the fields of the structure accordingly using [ec_ssl_set_ctx_param](apis.ec_ssl_set_ctx_param.php "ec_ssl_set_ctx_param").

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>mc</dt>

<dd>

A `message_construct`. For documentation of this data structure see [Section 68.59, “message_construct”](structs.message_construct.php "68.59. message_construct").

</dd>

<dt>ctx</dt>

<dd>

The `validate_context` struct. For documentation of this data structure see [Section 68.86, “validate_context”](structs.validate_context.php "68.86. validate_context")

</dd>

<dt>params</dt>

<dd>

An `ec_ssl_ctx_params` struct. For documentation of this data structure see [Section 68.44, “ec_ssl_ctx_params”](structs.ec_ssl_ctx_params.php "68.44. ec_ssl_ctx_params")

</dd>

</dl>

**Return Values**

Caller is expected to return `0`.

**Threading**

This hook will be called in the `Scheduler` thread.

| [Prev](hooks.core.generate_soft_bounce_message_preamble.php)  | [Up](hooks.core.php) |  [Next](hooks.core.get_msg_expiration_params.php) |
| generate_soft_bounce_message_preamble  | [Table of Contents](index.php) |  get_msg_expiration_params |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)