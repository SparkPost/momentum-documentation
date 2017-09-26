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

| ec_interpolate_crack_macro |
| [Prev](apis.ec_interpolate_calc_deps.php)  | Chapter 29. Interpolation Functions |  [Next](apis.ec_interpolate_register_constant.php) |

<a name="apis.ec_interpolate_crack_macro"></a>
## Name

ec_interpolate_crack_macro — Return the name and argument portions of a macro string

## Synopsis

`#include "misc/expand_string.h"`

| `int **ec_interpolate_crack_macro** (` | <var class="pdparam">input</var>, |   |
|   | <var class="pdparam">style</var>, |   |
|   | <var class="pdparam">namestart</var>, |   |
|   | <var class="pdparam">nameend</var>, |   |
|   | <var class="pdparam">argstart</var>, |   |
|   | <var class="pdparam">argend</var>`)`; |   |

`const string * <var class="pdparam">input</var>`;
`int <var class="pdparam">style</var>`;
`const char ** <var class="pdparam">namestart</var>`;
`const char ** <var class="pdparam">nameend</var>`;
`const char ** <var class="pdparam">argstart</var>`;
`const char ** <var class="pdparam">argend</var>`;<a name="idp25902704"></a>
## Description

This function returns the name and argument portions of a macro string.

A helper function for getting at the name and argument pieces of a macro from inside an ec_interpolator_func. This is required because there are multiple styles of macro placeholders in the various Message Systems' products/ Additionally, macro styles may be expanded in the future.

**Parameters**

<dl class="variablelist">

<dt>input</dt>

<dd>

The input parameter to the interpolator function.

</dd>

<dt>style</dt>

<dd>

The placeholder style detected by the parser.

</dd>

<dt>namestart</dt>

<dd>

Set to point to the first character of the macro. name.

</dd>

<dt>nameend</dt>

<dd>

Set to point to the character after the last character of the macro name.

</dd>

<dt>argstart</dt>

<dd>

Set to point to the first character of the argument, or `NULL` if not present.

</dd>

<dt>argend</dt>

<dd>

Set to point to the character after the last character of the macro argument, or `NULL` if not present.

</dd>

</dl>

**Return Values**

This function returns non-zero if successful; on error it returns zero.

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.ec_interpolate_calc_deps.php)  | [Up](interpolation.php) |  [Next](apis.ec_interpolate_register_constant.php) |
| ec_interpolate_calc_deps  | [Table of Contents](index.php) |  ec_interpolate_register_constant |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)