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

| ec_bag_find |
| [Prev](extending.hooks.core.dns_get_MXs.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.ec_message_enqueue.php) |

<a name="extending.hooks.core.ec_bag_find"></a>
## Name

ec_bag_find

## Synopsis

`#include "hooks/core/ec_bag_find.h"`

| `void * **ec_bag_find**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">bag</var>, |   |
|   | <var class="pdparam">type_name</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_bag * <var class="pdparam">bag</var>`;
`const char * <var class="pdparam">type_name</var>`;

| `int **has_core_ec_bag_find_hook**(` | `)`; |   |

| `void **register_core_ec_bag_find_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_ec_bag_find_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_ec_bag_find_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_ec_bag_find_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void * **call_core_ec_bag_find_hook**(` | <var class="pdparam">bag</var>, |   |
|   | <var class="pdparam">type_name</var>`)`; |   |

`ec_bag * <var class="pdparam">bag</var>`;
`const char * <var class="pdparam">type_name</var>`;<a name="idp21051584"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Called whenever an ec_bag_find operation is executed. The default is to attempt to find the type, and then to attempt to locate the type within other types, provided that the original type is known. This hook allows others to create a way to search for their types within the context of the bag of holding.

| [Prev](extending.hooks.core.dns_get_MXs.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.ec_message_enqueue.php) |
| dns_get_MXs  | [Table of Contents](index.php) |  ec_message_enqueue |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)