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

| ec_authz_enum_groups |
| [Prev](apis.ec_authz_check.php)  | Chapter 43. Security |  [Next](apis.ec_authz_id.php) |

<a name="apis.ec_authz_enum_groups"></a>
## Name

ec_authz_enum_groups — Check authorization of groups

## Synopsis

`#include "security/auth_lookup.h"`

| `int **ec_authz_enum_groups** (` | <var class="pdparam">authzinfo</var>, |   |
|   | <var class="pdparam">all_groups</var>, |   |
|   | <var class="pdparam">session</var>`)`; |   |

`struct ec_authz_info * <var class="pdparam">authzinfo</var>`;
`ec_ptr_array * <var class="pdparam">all_groups</var>`;
`Event * <var class="pdparam">session</var>`;<a name="idp32136000"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

**Return Values**

This function returns `EC_AUTH_OK`, `EC_AUTH_FAIL` or `EC_AUTH_ERROR`.

<a name="idp32141088"></a>
## See Also

[authz id](https://support.messagesystems.com/docs/web-ref/console_commands.authz_id.php)

| [Prev](apis.ec_authz_check.php)  | [Up](security.php) |  [Next](apis.ec_authz_id.php) |
| ec_authz_check  | [Table of Contents](index.php) |  ec_authz_id |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)