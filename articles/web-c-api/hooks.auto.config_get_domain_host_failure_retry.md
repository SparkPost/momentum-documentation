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

| config_get_domain_host_failure_retry |
| [Prev](hooks.core.config_fetch_domain_routes.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.config_get_message_routing_domain.php) |

<a name="hooks.auto.config_get_domain_host_failure_retry"></a>
## Name

config_get_domain_host_failure_retry — Determine whether there should be another delivery attempt

## Synopsis

`#include "hooks/auto/host_failure_retry.h"`

| `int **core_config_get_host_failure_retry** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">caller_scope</var>, |   |
|   | <var class="pdparam">value</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`generic_module_infrastructure * <var class="pdparam">caller_scope</var>`;
`int * <var class="pdparam">value</var>`;<a name="idp18664944"></a>
## Description

This hook is called to determine whether a delivery should be attempted after a connection failure. The wait period before attempting a retry is determined by the configuration option [host_failure_retry](https://support.messagesystems.com/docs/web-ref/conf.ref.host_failure_retry.php).

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

The closure function. This parameter can be `NULL`.

</dd>

<dt>caller_scope</dt>

<dd>

The module infrastructure. For more information see [generic_module_infrastructure](structs.generic_module_infrastructure.php "68.53. generic_module_infrastructure").

</dd>

<dt>value</dt>

<dd>

The value of [host_failure_retry](https://support.messagesystems.com/docs/web-ref/conf.ref.host_failure_retry.php) that is returned to the operating system. This parameter is optional.

</dd>

</dl>

**Return Values**

When this hook returns non-zero, no further hook providers are called, and the value that the hook provider returned is returned to the caller of the hook.

**Threading**

This hook will be invoked in any thread.

<a name="idp18678624"></a>
## See Also

[host_failure_retry](https://support.messagesystems.com/docs/web-ref/conf.ref.host_failure_retry.php)

| [Prev](hooks.core.config_fetch_domain_routes.php)  | [Up](hooks.core.php) |  [Next](hooks.core.config_get_message_routing_domain.php) |
| config_fetch_domain_routes  | [Table of Contents](index.php) |  config_get_message_routing_domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)