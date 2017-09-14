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

| config_fetch_domain_routes |
| [Prev](hooks.core.config_get_domain_relay.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.auto.config_get_domain_host_failure_retry.php) |

<a name="hooks.core.config_fetch_domain_routes"></a>
## Name

config_fetch_domain_routes — Override the routes setting

## Synopsis

`#include "hooks/auto/routes.h"`

| `int **core_config_fetch_domain_routes** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">valueptr</var>, |   |
|   | <var class="pdparam">from</var>, |   |
|   | <var class="pdparam">domain</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_config_value ** <var class="pdparam">valueptr</var>`;
`ec_config_header ** <var class="pdparam">from</var>`;
`const char * <var class="pdparam">domain</var>`;<a name="idp10528736"></a>
## Description

Use this hook to override the [routes](https://support.messagesystems.com/docs/web-ref/conf.ref.routes.php) setting for a given domain.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

The closure function.

</dd>

<dt>valueptr</dt>

<dd>

The value of `routes` that is returned to the operating system. For a description of this structure see [ec_config_value](structs.ec_config_value.php "68.23. ec_config_value").

</dd>

<dt>from</dt>

<dd>

Scope instances in the configuration. For a description of this structure see [ec_config_header](structs.ec_config_header.php "68.21. ec_config_header"). This parameter is optional.

</dd>

<dt>domain</dt>

<dd>

The domain name. This parameter is optional.

</dd>

</dl>

**Return Values**

When this hook returns non-zero, no further hook providers are called, and the value that the hook provider returned is returned to the caller of the hook.

**Threading**

This hook will be invoked in any thread.

| [Prev](hooks.core.config_get_domain_relay.php)  | [Up](hooks.core.php) |  [Next](hooks.auto.config_get_domain_host_failure_retry.php) |
| config_get_domain_relay  | [Table of Contents](index.php) |  config_get_domain_host_failure_retry |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)