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

| validate_auth |
| [Prev](extending.hooks.core.validate_accept.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.validate_connect.php) |

<a name="extending.hooks.core.validate_auth"></a>
## Name

validate_auth

## Synopsis

`#include "hooks/core/validate_auth.h"`

| `int **validate_auth**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">c</var>, |   |
|   | <var class="pdparam">auth_info</var>, |   |
|   | <var class="pdparam">auth_status</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`validate_context * <var class="pdparam">c</var>`;
`struct ec_auth_info * <var class="pdparam">auth_info</var>`;
`int <var class="pdparam">auth_status</var>`;

| `int **has_core_validate_auth_hook**(` | `)`; |   |

| `void **register_core_validate_auth_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_validate_auth_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_validate_auth_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_validate_auth_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_validate_auth_hook**(` | <var class="pdparam">c</var>, |   |
|   | <var class="pdparam">auth_info</var>, |   |
|   | <var class="pdparam">auth_status</var>`)`; |   |

`validate_context * <var class="pdparam">c</var>`;
`struct ec_auth_info * <var class="pdparam">auth_info</var>`;
`int <var class="pdparam">auth_status</var>`;<a name="idp23039744"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.42.

This hook allows a module to perform an action in response to an SMTP AUTH event. The validate context will contain an "auth_status" key, containing either "fail," "pass," or "error" depending on whether authentication failed, succeeded, or encountered an internal error, respectively. Additionally, an "auth_user" key may exist containing the user name: the DIGEST-MD5 authentication method may fail an authentication attempt before the username is known. An "auth_name" key is also provided, describing what form of authentication was attempted (e.g. PLAIN, LOGIN, CRAM-MD5, DIGEST-MD5).

| [Prev](extending.hooks.core.validate_accept.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.validate_connect.php) |
| validate_accept  | [Table of Contents](index.php) |  validate_connect |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)