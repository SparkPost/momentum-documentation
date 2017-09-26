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

| remove_address |
| [Prev](extending.hooks.checklist.check_user_ip.php)  | Chapter 19. Hooks in the checklist scope |  [Next](extending.hooks.checklist.remove_ip.php) |

<a name="extending.hooks.checklist.remove_address"></a>
## Name

remove_address

## Synopsis

`#include "hooks/checklist/remove_address.h"`

| `int **remove_address**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">listname</var>, |   |
|   | <var class="pdparam">email</var>, |   |
|   | <var class="pdparam">complete</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`char * <var class="pdparam">listname</var>`;
`char * <var class="pdparam">email</var>`;
`int <var class="pdparam">complete</var>`;

| `int **has_checklist_remove_address_hook**(` | `)`; |   |

| `void **register_checklist_remove_address_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_checklist_remove_address_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_checklist_remove_address_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_checklist_remove_address_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_checklist_remove_address_hook**(` | <var class="pdparam">listname</var>, |   |
|   | <var class="pdparam">email</var>, |   |
|   | <var class="pdparam">complete</var>`)`; |   |

`char * <var class="pdparam">listname</var>`;
`char * <var class="pdparam">email</var>`;
`int <var class="pdparam">complete</var>`;<a name="idp23355248"></a>
## Description

**THIS HOOK IS DEPRECATED AND SHOULD NO LONGER BE USED**

This hook does nothing now. The return value is 0.

`listname` is the list where to remove the email address. `email` is the email address to be removed. `complete` indicates whether the email address is a complete one or a globbed one.

| [Prev](extending.hooks.checklist.check_user_ip.php)  | [Up](extending.hooks.checklist.php) |  [Next](extending.hooks.checklist.remove_ip.php) |
| check_user_ip  | [Table of Contents](index.php) |  remove_ip |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)