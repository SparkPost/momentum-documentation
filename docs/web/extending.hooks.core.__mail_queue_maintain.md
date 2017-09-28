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

| __mail_queue_maintain |
| [Prev](extending.hooks.core.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.aaa_log.php) |

<a name="extending.hooks.core.__mail_queue_maintain"></a>
## Name

__mail_queue_maintain

## Synopsis

`#include "hooks/core/__mail_queue_maintain.h"`

| `int **__mail_queue_maintain**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding_slot</var>, |   |
|   | <var class="pdparam">sl</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">goalsz</var>, |   |
|   | <var class="pdparam">reserve</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`domain_record * <var class="pdparam">dr</var>`;
`int <var class="pdparam">binding_slot</var>`;
`Skiplist * <var class="pdparam">sl</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`int <var class="pdparam">goalsz</var>`;
`int <var class="pdparam">reserve</var>`;

| `int **has_core___mail_queue_maintain_hook**(` | `)`; |   |

| `void **register_core___mail_queue_maintain_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core___mail_queue_maintain_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core___mail_queue_maintain_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core___mail_queue_maintain_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core___mail_queue_maintain_hook**(` | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding_slot</var>, |   |
|   | <var class="pdparam">sl</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">goalsz</var>, |   |
|   | <var class="pdparam">reserve</var>`)`; |   |

`domain_record * <var class="pdparam">dr</var>`;
`int <var class="pdparam">binding_slot</var>`;
`Skiplist * <var class="pdparam">sl</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`int <var class="pdparam">goalsz</var>`;
`int <var class="pdparam">reserve</var>`;<a name="idp20328960"></a>
## Description

This hook is called from within regular mail queue maintenance on a per binding basis. *`binding_slot`* refers to the current MultiVIP™ binding that has messages in its active queue *`sl`*.

If goalsz is greater than zero, then a predetermined number of connections should be established. However, this should not cause the total number of connections in the system to exceed the configured maximum minus *`reserve`*.

If a non-zero value is returned, no further callbacks will be called. Functions implementing passive analysis or other accounting should hook here first, perform their function and return 0 to allow the default Ecelerity *`__mail_queue_maintain`* to act.

| [Prev](extending.hooks.core.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.aaa_log.php) |
| Chapter 18. Hooks in the core scope  | [Table of Contents](index.php) |  aaa_log |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)