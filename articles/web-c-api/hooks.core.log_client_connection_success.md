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

| log_client_connection_success |
| [Prev](hooks.core.log_client_connection_failure.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.log_delivery_v1.php) |

<a name="hooks.core.log_client_connection_success"></a>
## Name

log_client_connection_success — Register a function with this hook that will be invoked whenever an outbound connection attempt succeeds

## Synopsis

`#include "hooks/core/log_client_connection_success.h"`

| `void **core_log_client_connection_failure** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">addr</var>, |   |
|   | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding_slot</var>, |   |
|   | <var class="pdparam">now</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`struct sockaddr * <var class="pdparam">addr</var>`;
`domain_record * <var class="pdparam">dr</var>`;
`int <var class="pdparam">binding_slot</var>`;
`struct timeval * <var class="pdparam">now</var>`;<a name="idp11321680"></a>
## Description

Register a function with this hook that will be invoked whenever an outbound connection attempt succeeds. The address of the peer as well as domain/binding information are passed to the hook.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>addr</dt>

<dd>

A pointer to a `sockaddr` struct.

</dd>

<dt>dr</dt>

<dd>

A pointer to a domain_record struct. For documentation of this data structure see [Section 68.14, “domain_record”](structs.domain_record.php "68.14. domain_record")

</dd>

<dt>binding_slot</dt>

<dd>

The binding slot.

</dd>

<dt>now</dt>

<dd>

A pointer to a timeval struct, which may be NULL.

**Configuration Change. ** Prior to version 3.0, NULL was not an allowed value.

</dd>

</dl>

**Return Values**

This hook returns `void`.

**Threading**

This hook will be called in `any` thread.

<a name="idp11338720"></a>
## See Also

[log_client_connection_failure](hooks.core.log_client_connection_failure.php "log_client_connection_failure").

| [Prev](hooks.core.log_client_connection_failure.php)  | [Up](hooks.core.php) |  [Next](hooks.core.log_delivery_v1.php) |
| log_client_connection_failure  | [Table of Contents](index.php) |  log_delivery_v1 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)