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

| check_outbound_conn_throttle |
| [Prev](extending.hooks.core.cache_set.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.check_outbound_mess_throttle.php) |

<a name="extending.hooks.core.check_outbound_conn_throttle"></a>
## Name

check_outbound_conn_throttle

## Synopsis

`#include "hooks/core/check_outbound_conn_throttle.h"`

| `int **check_outbound_conn_throttle**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">binding_id</var>, |   |
|   | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">later</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`int <var class="pdparam">binding_id</var>`;
`domain_record * <var class="pdparam">dr</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`struct timeval * <var class="pdparam">later</var>`;

| `int **has_core_check_outbound_conn_throttle_hook**(` | `)`; |   |

| `void **register_core_check_outbound_conn_throttle_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_check_outbound_conn_throttle_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_check_outbound_conn_throttle_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_check_outbound_conn_throttle_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_check_outbound_conn_throttle_hook**(` | <var class="pdparam">binding_id</var>, |   |
|   | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">later</var>`)`; |   |

`int <var class="pdparam">binding_id</var>`;
`domain_record * <var class="pdparam">dr</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`struct timeval * <var class="pdparam">later</var>`;<a name="idp20543984"></a>
## Description

Called when a throttle is checked. Returning non-zero causes the session to be suspended until at least 'later'

| [Prev](extending.hooks.core.cache_set.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.check_outbound_mess_throttle.php) |
| cache_set  | [Table of Contents](index.php) |  check_outbound_mess_throttle |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)