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

| add_ip |
| [Prev](extending.hooks.checklist.add_address.php)  | Chapter 19. Hooks in the checklist scope |  [Next](extending.hooks.checklist.add_user_address.php) |

<a name="extending.hooks.checklist.add_ip"></a>
## Name

add_ip

## Synopsis

`#include "hooks/checklist/add_ip.h"`

| `int **add_ip**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">listname</var>, |   |
|   | <var class="pdparam">addrstr</var>, |   |
|   | <var class="pdparam">netmask</var>, |   |
|   | <var class="pdparam">orientation</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`char * <var class="pdparam">listname</var>`;
`char * <var class="pdparam">addrstr</var>`;
`unsigned int <var class="pdparam">netmask</var>`;
`int <var class="pdparam">orientation</var>`;

| `int **has_checklist_add_ip_hook**(` | `)`; |   |

| `void **register_checklist_add_ip_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_checklist_add_ip_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_checklist_add_ip_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_checklist_add_ip_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_checklist_add_ip_hook**(` | <var class="pdparam">listname</var>, |   |
|   | <var class="pdparam">addrstr</var>, |   |
|   | <var class="pdparam">netmask</var>, |   |
|   | <var class="pdparam">orientation</var>`)`; |   |

`char * <var class="pdparam">listname</var>`;
`char * <var class="pdparam">addrstr</var>`;
`unsigned int <var class="pdparam">netmask</var>`;
`int <var class="pdparam">orientation</var>`;<a name="idp23196416"></a>
## Description

**THIS HOOK IS DEPRECATED AND SHOULD NO LONGER BE USED**

This hook adds an IP address to the named list.

`listname` is the list where to add the IP address. `addrstr` is the IP to be added, as a string. `netmask` is the length of the netmask (Valid values 0-32). `orientation` is whether this is a POSITIVE (1) or NEGATIVE (0) match

| [Prev](extending.hooks.checklist.add_address.php)  | [Up](extending.hooks.checklist.php) |  [Next](extending.hooks.checklist.add_user_address.php) |
| add_address  | [Table of Contents](index.php) |  add_user_address |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)