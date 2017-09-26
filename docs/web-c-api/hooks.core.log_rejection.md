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

| log_rejection |
| [Prev](hooks.core.log_reception_v1.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.log_reopen.php) |

<a name="hooks.core.log_rejection"></a>
## Name

log_rejection — Register a function with this hook that will be called whenever a logging event due to message rejection occurs

## Synopsis

`#include "hooks/core/log_rejection.h"`

| `void **core_log_rejection** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">ac</var>, |   |
|   | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">phase</var>, |   |
|   | <var class="pdparam">format</var>, |   |
|   | <var class="pdparam">args</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`accept_construct * <var class="pdparam">ac</var>`;
`validate_context * <var class="pdparam">ctx</var>`;
`int <var class="pdparam">phase</var>`;
`const char * <var class="pdparam">format</var>`;
`va_list <var class="pdparam">args</var>`;<a name="idp13863024"></a>
## Description

Register a function with this hook that will be called whenever a logging event due to message rejection occurs. This hook has a signature that closely mirrors the signature defined for the `log_rejection` callback in a `logging_infrastructure_1` struct. For documentation of this data structure see [Section 68.57, “logging_infrastructure_1”](structs.logging_infrastructure_1.php "68.57. logging_infrastructure_1").

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>now</dt>

<dd>

A timeval struct.

</dd>

<dt>ac</dt>

<dd>

The `accept_construct` struct. For documentation of this data structure see [Section 68.2, “accept_construct”](structs.accept_construct.php "68.2. accept_construct")

</dd>

<dt>ctx</dt>

<dd>

The `validate_context` struct. For documentation of this data structure see [Section 68.86, “validate_context”](structs.validate_context.php "68.86. validate_context")

</dd>

<dt>phase</dt>

<dd>

The phase in which the rejection occurred. Values will be one of:

```
MC_STATE_START, MC_STATE_START_RESPONSE, MC_STATE_EHLO, MC_STATE_EHLO_RESPONSE, 
MC_STATE_MAILFROM, MC_STATE_MAILFROM_RESPONSE, MC_STATE_RCPTTO, MC_STATE_RCPTTO_RESPONSE,
MC_STATE_DATA, MC_STATE_BODY, MC_STATE_BODY_RESPONSE, MC_STATE_ASYNC_BODY_RESPONSE, 
MC_STATE_OK, MC_STATE_RELAYING_DENIED, MC_STATE_EXTENSION_1, MC_STATE_EXTENSION_2,
MC_STATE_EXTENSION_3, MC_STATE_EXTENSION_4, MC_STATE_CONCURRENCY_LIMIT, 
MC_STATE_RCPTTO_LIST_RESPONSE, MC_STATE_RCPTTO_LIST_FINAL_RESPONSE, MC_STATE_SETUP,
MC_STATE_MCMT_FIXUP, MC_STATE_COUNT
```
</dd>

<dt>format</dt>

<dd>

The format for the rejection string that will be returned to the client.

</dd>

<dt>args</dt>

<dd>

The arguments for the format string.

</dd>

</dl>

**Return Values**

This hook returns `void`.

**Threading**

This hook will be called in any thread.

<a name="idp13738704"></a>
## See Also

[log_attempt_v1](hooks.core.log_attempt_v1.php "log_attempt_v1"), [log_delivery_v1](hooks.core.log_delivery_v1.php "log_delivery_v1"), [log_permanent_failure_v1](hooks.core.log_permanent_failure_v1.php "log_permanent_failure_v1"), [log_reopen](hooks.core.log_reopen.php "log_reopen"), and [log_transient_failure_v1](hooks.core.log_transient_failure_v1.php "log_transient_failure_v1").

| [Prev](hooks.core.log_reception_v1.php)  | [Up](hooks.core.php) |  [Next](hooks.core.log_reopen.php) |
| log_reception_v1  | [Table of Contents](index.php) |  log_reopen |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)