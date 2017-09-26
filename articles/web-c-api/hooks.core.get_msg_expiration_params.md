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

| get_msg_expiration_params |
| [Prev](hooks.core.get_inbound_tls_parameters.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.get_outbound_tls_parameters.php) |

<a name="hooks.core.get_msg_expiration_params"></a>
## Name

get_msg_expiration_params — Allows modules to customize the expiration parameters on a per-message basis

## Synopsis

`#include "hooks/core/get_msg_expiration_params.h"`

| `int **core_get_msg_expiration_params** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">am</var>, |   |
|   | <var class="pdparam">message_expiration</var>, |   |
|   | <var class="pdparam">retry_interval</var>, |   |
|   | <var class="pdparam">max_retries</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`abstract_message * <var class="pdparam">am</var>`;
`time_t * <var class="pdparam">message_expiration</var>`;
`time_t * <var class="pdparam">retry_interval</var>`;
`int * <var class="pdparam">max_retries</var>`;<a name="idp10835024"></a>
## Description

Allows modules to customize the expiration parameters on a per-message basis. The *`message_expiration`*, *`retry_interval`* and *`max_retries`* parameters correspond to the `Message_Expiration`, `Retry_Interval` and `Max_Retries` configuration parameters, respectively.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>am</dt>

<dd>

An `abstract_message`. For documentation of this data structure see [Section 68.1, “abstract_message”](structs.abstract_message.php "68.1. abstract_message")

</dd>

<dt>message_expiration</dt>

<dd>

Corresponds to the [Message_Expiration](https://support.messagesystems.com/docs/web-ref/conf.ref.message_expiration.php) configuration option.

</dd>

<dt>retry_interval</dt>

<dd>

Corresponds to the [Retry_Interval](https://support.messagesystems.com/docs/web-ref/conf.ref.retry_interval.php) configuration option.

</dd>

<dt>max_retries</dt>

<dd>

Corresponds to the [Max_Retries](https://support.messagesystems.com/docs/web-ref/conf.ref.max_retries.php) configuration option.

</dd>

</dl>

**Return Values**

If you decide to take no action (and simply want the default behavior), then return `0`. If you set any of the parameters, then return `1`.

**Threading**

This hook will be called in any thread.

| [Prev](hooks.core.get_inbound_tls_parameters.php)  | [Up](hooks.core.php) |  [Next](hooks.core.get_outbound_tls_parameters.php) |
| get_inbound_tls_parameters  | [Table of Contents](index.php) |  get_outbound_tls_parameters |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)