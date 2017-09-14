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

| get_outbound_tls_parameters |
| [Prev](extending.hooks.core.get_msg_expiration_params.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.get_protocol_string_for_trace_headers.php) |

<a name="extending.hooks.core.get_outbound_tls_parameters"></a>
## Name

get_outbound_tls_parameters

## Synopsis

`#include "hooks/core/get_outbound_tls_parameters.h"`

| `int **get_outbound_tls_parameters**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">message</var>, |   |
|   | <var class="pdparam">params</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">message</var>`;
`ec_ssl_ctx_params * <var class="pdparam">params</var>`;

| `int **has_core_get_outbound_tls_parameters_hook**(` | `)`; |   |

| `void **register_core_get_outbound_tls_parameters_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_get_outbound_tls_parameters_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_get_outbound_tls_parameters_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_get_outbound_tls_parameters_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_get_outbound_tls_parameters_hook**(` | <var class="pdparam">message</var>, |   |
|   | <var class="pdparam">params</var>`)`; |   |

`ec_message * <var class="pdparam">message</var>`;
`ec_ssl_ctx_params * <var class="pdparam">params</var>`;<a name="idp21397392"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.

This hook point allows implementors to override and control the usage of TLS on a per-message basis when delivering mail out of the system.

See `ec_ssl.h` for the definition of struct _ec_ssl_ctx_params. Your hook implementation is responsible for setting the fields of the structure accordingly using `ec_ssl_set_ctx_param`.

Caller is expected to return 0.

| [Prev](extending.hooks.core.get_msg_expiration_params.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.get_protocol_string_for_trace_headers.php) |
| get_msg_expiration_params  | [Table of Contents](index.php) |  get_protocol_string_for_trace_headers |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)