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

| ec_interpolate_calc_deps |
| [Prev](apis.ec_interpolate_add_reqs.php)  | Chapter 29. Interpolation Functions |  [Next](apis.ec_interpolate_crack_macro.php) |

<a name="apis.ec_interpolate_calc_deps"></a>
## Name

ec_interpolate_calc_deps — Determine the requirements for a macro expansion

## Synopsis

`#include "misc/expand_string.h"`

| `int **ec_interpolate_calc_deps** (` | <var class="pdparam">input</var>, |   |
|   | <var class="pdparam">default_namespace</var>, |   |
|   | <var class="pdparam">flags</var>, |   |
|   | <var class="pdparam">reqs</var>, |   |
|   | <var class="pdparam">typednames</var>`)`; |   |

`const char * <var class="pdparam">input</var>`;
`const char * <var class="pdparam">default_namespace</var>`;
`int <var class="pdparam">flags</var>`;
`int * <var class="pdparam">reqs</var>`;
`ECDict <var class="pdparam">typednames</var>`;<a name="idp25876208"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Determine the requirements for a macro expansion.

This function evaluates a string expansion and builds up a list of requirements or dependencies for the set of macros used in the string.

This is useful in situations where you are queuing jobs and need to copy or marshal the required pieces that would otherwise be discarded by a code path outside of your control.

**Parameters**

<dl class="variablelist">

<dt>input</dt>

<dd>

the string to be expanded

</dd>

<dt>default_namespace</dt>

<dd>

the allowed namespaces

</dd>

<dt>flags</dt>

<dd>

flags to control the interpolation style

</dd>

<dt>reqs</dt>

<dd>

populated with a bitfield of general requirements

</dd>

<dt>typednames</dt>

<dd>

if not NULL, will be populated with the type names that were requested from the bag in the interpolation context.

</dd>

</dl>

| [Prev](apis.ec_interpolate_add_reqs.php)  | [Up](interpolation.php) |  [Next](apis.ec_interpolate_crack_macro.php) |
| ec_interpolate_add_reqs  | [Table of Contents](index.php) |  ec_interpolate_crack_macro |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)