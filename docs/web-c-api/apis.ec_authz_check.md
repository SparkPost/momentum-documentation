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

| ec_authz_check |
| [Prev](security.php)  | Chapter 43. Security |  [Next](apis.ec_authz_enum_groups.php) |

<a name="apis.ec_authz_check"></a>
## Name

ec_authz_check — Check if commands are authorized

## Synopsis

`#include "security/auth_lookup.h"`

| `int **ec_authz_check** (` | <var class="pdparam">cc</var>, |   |
|   | <var class="pdparam">e</var>, |   |
|   | <var class="pdparam">unpriv_commands</var>`)`; |   |

`command_construct * <var class="pdparam">cc</var>`;
`Event * <var class="pdparam">e</var>`;
`const char ** <var class="pdparam">unpriv_commands</var>`;<a name="idp32112400"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Check whether commands are authorized.

**Parameters**

<dl class="variablelist">

<dt>cc</dt>

<dd>

A command construct. See [Section 68.8, “command_construct”](structs.command_construct.php "68.8. command_construct").

</dd>

<dt>e</dt>

<dd>

An event. See [Section 68.49, “Event”](structs.event.php "68.49. Event").

</dd>

<dt>unpriv_commands</dt>

<dd>

The commands.

</dd>

</dl>

**Return Values**

This function returns `EC_AUTH_OK`, `EC_AUTH_FAIL` or `EC_AUTH_ERROR`.

**Threading**

It is legal to call this function in any thread.

| [Prev](security.php)  | [Up](security.php) |  [Next](apis.ec_authz_enum_groups.php) |
| Chapter 43. Security  | [Table of Contents](index.php) |  ec_authz_enum_groups |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)