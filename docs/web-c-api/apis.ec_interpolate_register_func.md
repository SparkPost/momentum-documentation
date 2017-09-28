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

| ec_interpolate_register_func |
| [Prev](apis.ec_interpolate_register_constant.php)  | Chapter 29. Interpolation Functions |  [Next](apis.ec_interpolate_string.php) |

<a name="apis.ec_interpolate_register_func"></a>
## Name

ec_interpolate_register_func — Register a macro expansion function

## Synopsis

`#include "misc/expand_string.h"`

| `void **ec_interpolate_register_func** (` | <var class="pdparam">macro</var>, |   |
|   | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">func</var>, |   |
|   | <var class="pdparam">flags</var>`)`; |   |

`const char * <var class="pdparam">macro</var>`;
`void * <var class="pdparam">closure</var>`;
`ec_interpolator_func <var class="pdparam">func</var>`;
`int <var class="pdparam">flags</var>`;<a name="idp25948144"></a>
## Description

Register a macro expansion function. The macro string will be matched using a literal string comparison, unless the macro string contains the character ‘`*`’ which will match any sequence of 1 or more characters terminated by the character that follows it.

Consequently, "foo" will be a literal string match, but "foo:*" will match "%{foo:bar}" and "%{foo:baz}" but not "%{foo:}".

**Parameters**

<dl class="variablelist">

<dt>macro</dt>

<dd>

The macro to be matched.

</dd>

<dt>closure</dt>

<dd>

A pointer to the closure function. This parameter can be `NULL`.

</dd>

<dt>func</dt>

<dd>

The function to perform the expansion.

</dd>

<dt>flags</dt>

<dd>

Indicate function capabilities. This is typically `0`.

</dd>

</dl>

If a macro is registered as a recursive macro, then it will be called again on its own output continually for as long as the output matches its own macro definition. The number of times that this happens is limited by the expansion infrastructure to a reasonable number to avoid infinitely recursing.

**Return Value**

This function returns void.

**Threading**

It is legal to call this function in the `Scheduler` thread.

| [Prev](apis.ec_interpolate_register_constant.php)  | [Up](interpolation.php) |  [Next](apis.ec_interpolate_string.php) |
| ec_interpolate_register_constant  | [Table of Contents](index.php) |  ec_interpolate_string |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)