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

| next_delay_dsn |
| [Prev](extending.hooks.delay_dsn.generate_delay_dsn.php)  | Chapter 21. Hooks in the delay_dsn scope |  [Next](extending.hooks.delay_dsn.send_notification.php) |

<a name="extending.hooks.delay_dsn.next_delay_dsn"></a>
## Name

next_delay_dsn

## Synopsis

`#include "hooks/delay_dsn/next_delay_dsn.h"`

| `int **next_delay_dsn**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">when</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">mess</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`time_t * <var class="pdparam">when</var>`;

| `int **has_delay_dsn_next_delay_dsn_hook**(` | `)`; |   |

| `void **register_delay_dsn_next_delay_dsn_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_delay_dsn_next_delay_dsn_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_delay_dsn_next_delay_dsn_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_delay_dsn_next_delay_dsn_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_delay_dsn_next_delay_dsn_hook**(` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">when</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`time_t * <var class="pdparam">when</var>`;<a name="idp23579600"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

This hook allows you to override when the next delay notification for a message will be sent by the `delay_dsn` module. `now` is the current epoch time. `when` is the epoch time when the next notification should be sent. If `GENERATE_DELAY_DSN_HOOK_CONT` is returned, processing will fallback to other modules and then to the configuration. If `GENERATE_DELAY_DSN_HOOK_OK` is returned, then processing will terminate and the value passed back via `when` will be used.

| [Prev](extending.hooks.delay_dsn.generate_delay_dsn.php)  | [Up](extending.hooks.delay_dsn.php) |  [Next](extending.hooks.delay_dsn.send_notification.php) |
| generate_delay_dsn  | [Table of Contents](index.php) |  send_notification |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)