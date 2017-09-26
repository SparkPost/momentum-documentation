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
| [Prev](extending.hooks.core.get_message_expiration_params.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.get_outbound_tls_parameters.php) |

<a name="extending.hooks.core.get_msg_expiration_params"></a>
## Name

get_msg_expiration_params

## Synopsis

`#include "hooks/core/get_msg_expiration_params.h"`

| `int **get_msg_expiration_params**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">am</var>, |   |
|   | <var class="pdparam">expires</var>, |   |
|   | <var class="pdparam">interval</var>, |   |
|   | <var class="pdparam">max_times</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">am</var>`;
`time_t * <var class="pdparam">expires</var>`;
`time_t * <var class="pdparam">interval</var>`;
`int * <var class="pdparam">max_times</var>`;

| `int **has_core_get_msg_expiration_params_hook**(` | `)`; |   |

| `void **register_core_get_msg_expiration_params_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_get_msg_expiration_params_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_get_msg_expiration_params_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_get_msg_expiration_params_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_get_msg_expiration_params_hook**(` | <var class="pdparam">am</var>, |   |
|   | <var class="pdparam">expires</var>, |   |
|   | <var class="pdparam">interval</var>, |   |
|   | <var class="pdparam">max_times</var>`)`; |   |

`ec_message * <var class="pdparam">am</var>`;
`time_t * <var class="pdparam">expires</var>`;
`time_t * <var class="pdparam">interval</var>`;
`int * <var class="pdparam">max_times</var>`;<a name="idp21375376"></a>
## Description

The `get_msg_expiration_params` hook allows modules to customize the expiration parameters on a per-msg basis. If you decide to take no action (and want the default behavior), return 0\. If you set the parameters, return 1\. The *`expires`*, *`interval`* and *`max_times`* parameters correspond to the `Message_Expiration`, `Retry_Interval` and `Max_Retries` configuration parameters, respectively.

| [Prev](extending.hooks.core.get_message_expiration_params.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.get_outbound_tls_parameters.php) |
| get_message_expiration_params  | [Table of Contents](index.php) |  get_outbound_tls_parameters |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)