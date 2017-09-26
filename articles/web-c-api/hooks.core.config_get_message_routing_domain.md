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

| config_get_message_routing_domain |
| [Prev](hooks.auto.config_get_domain_host_failure_retry.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.config_option_post_set.php) |

<a name="hooks.core.config_get_message_routing_domain"></a>
## Name

config_get_message_routing_domain — Determine where to place a message

## Synopsis

`#include "hooks/core/config_get_message_routing_domain.h"`

| `int **core_config_get_message_routing_domain** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">cs</var>, |   |
|   | <var class="pdparam">m</var>, |   |
|   | <var class="pdparam">buff</var>, |   |
|   | <var class="pdparam">len</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`generic_module_infrastructure * <var class="pdparam">cs</var>`;
`ec_message * <var class="pdparam">m</var>`;
`char * <var class="pdparam">buff</var>`;
`int <var class="pdparam">len</var>`;<a name="idp18936016"></a>
## Description

This hook is called when the system needs to determine what domain to send a message to. It provides a way to set the [gateway](https://support.messagesystems.com/docs/web-ref/conf.ref.gateway.php) configuration directive at the per-message level.

This hook is called to determine which domain's queue messages should be placed in. The default queue is based on the result of `config_get_binding_domain_gateway`, but the queue can be overridden by registering a custom function at this hook. `buff` is supplied by the caller and is at least `len` bytes long. `buff` will be populated with the full gateway domain.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>cs</dt>

<dd>

For a description of this data type see [generic_module_infrastructure](structs.generic_module_infrastructure.php "68.53. generic_module_infrastructure").

</dd>

<dt>buff</dt>

<dd>

The buffer for holding the routing domain.

</dd>

<dt>len</dt>

<dd>

The length of the buffer.

</dd>

</dl>

**Return Values**

This hook returns zero or `1`. If non-zero, no further hook providers are called.

**Threading**

This hook will be called in any thread.

| [Prev](hooks.auto.config_get_domain_host_failure_retry.php)  | [Up](hooks.core.php) |  [Next](hooks.core.config_option_post_set.php) |
| config_get_domain_host_failure_retry  | [Table of Contents](index.php) |  config_option_post_set |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)