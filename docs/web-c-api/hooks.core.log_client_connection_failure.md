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

| log_client_connection_failure |
| [Prev](hooks.core.log_attempt_v1.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.log_client_connection_success.php) |

<a name="hooks.core.log_client_connection_failure"></a>
## Name

log_client_connection_failure — Register a function with this hook that will be invoked whenever an outbound connection attempt fails

## Synopsis

`#include "hooks/core/log_client_connection_failure.h"`

| `void **core_log_client_connection_failure** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">addr</var>, |   |
|   | <var class="pdparam">err</var>, |   |
|   | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding_slot</var>, |   |
|   | <var class="pdparam">now</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`struct sockaddr * <var class="pdparam">addr</var>`;
`int <var class="pdparam">err</var>`;
`domain_record * <var class="pdparam">dr</var>`;
`int <var class="pdparam">binding_slot</var>`;
`struct timeval * <var class="pdparam">now</var>`;<a name="idp4987152"></a>
## Description

Register a function with this hook that will be invoked whenever an outbound connection attempt fails. The address of the peer as well as domain/binding information are passed to the hook.

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

<dt>err</dt>

<dd>

A bitmask constructed from the following bitmasks:

```
CONN_ACTION_REQUEUE1, CONN_ACTION_PURGE_DOMAIN, CONN_ERROR_MX_LOOKUP_FAILED, CONN_ERROR_MX_LOOKUP_PENDING, CONN_ERROR_SMTP_NULL_MX,
CONN_ERROR_NO_MXS_REACHABLE, CONN_ERROR_PROHIBITED_IP, CONN_ERROR_HOST_MAX_REACHED, CONN_ERROR_SOCKET, CONN_ERROR_IOCTL,
CONN_ERROR_BIND, CONN_ERROR_CONNECT, CONN_ERROR_CONNECT_NETWORK, and CONN_ERROR_CONNECT_TIMEOUT.
```
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

<a name="idp11308864"></a>
## See Also

[log_client_connection_success](hooks.core.log_client_connection_success.php "log_client_connection_success").

| [Prev](hooks.core.log_attempt_v1.php)  | [Up](hooks.core.php) |  [Next](hooks.core.log_client_connection_success.php) |
| log_attempt_v1  | [Table of Contents](index.php) |  log_client_connection_success |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)