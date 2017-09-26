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

| ec_interpolate_register_constant |
| [Prev](apis.ec_interpolate_crack_macro.php)  | Chapter 29. Interpolation Functions |  [Next](apis.ec_interpolate_register_func.php) |

<a name="apis.ec_interpolate_register_constant"></a>
## Name

ec_interpolate_register_constant — Register a macro that expands to a constant string

## Synopsis

`#include "misc/expand_string.h"`

| `void **ec_interpolate_register_constant** (` | <var class="pdparam">macro</var>, |   |
|   | <var class="pdparam">expansion</var>`)`; |   |

`const char * <var class="pdparam">macro</var>`;
`const char * <var class="pdparam">expansion</var>`;<a name="idp25929008"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Register a macro that expands to a constant string.

**Parameters**

<dl class="variablelist">

<dt>macro</dt>

<dd>

the string to match

</dd>

<dt>expansion</dt>

<dd>

the text that will be substituted for macro

</dd>

</dl>

macro is treated as a literal string; if it is found in the input string then it will be replaced by the expansion string.

macro is an identifier like: "foo" which will means that a %{foo} in an input string will match and be expanded to expansion.

| [Prev](apis.ec_interpolate_crack_macro.php)  | [Up](interpolation.php) |  [Next](apis.ec_interpolate_register_func.php) |
| ec_interpolate_crack_macro  | [Table of Contents](index.php) |  ec_interpolate_register_func |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)