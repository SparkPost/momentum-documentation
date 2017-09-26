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

| ec_mod_vdebug |
| [Prev](apis.ec_debug_printf.php)  | Chapter 17. Debug Functions |  [Next](apis.ec_render_my_stack_trace.php) |

<a name="apis.ec_mod_vdebug"></a>
## Name

ec_mod_vdebug — Log debugging information for a module

## Synopsis

`#include "module.h"`

| `void **ec_mod_vdebug** (` | <var class="pdparam">mod</var>, |   |
|   | <var class="pdparam">level</var>, |   |
|   | <var class="pdparam">fmt</var>, |   |
|   | <var class="pdparam">arg</var>`)`; |   |

`generic_module_infrastructure * <var class="pdparam">mod</var>`;
`int <var class="pdparam">level</var>`;
`const char * <var class="pdparam">fmt</var>`;
`va_list <var class="pdparam">arg</var>`;<a name="idp22356624"></a>
## Description

Log debugging information for a module.

**Parameters**

<dl class="variablelist">

<dt>mod</dt>

<dd>

The module to log on behalf of. This is a pointer to a [generic_module_infrastructure](structs.generic_module_infrastructure.php "68.53. generic_module_infrastructure")

</dd>

<dt>level</dt>

<dd>

Typically one of the following: `DDEBUG`, `DINFO`, `DNOTICE`, `DWARNING`, `DERROR`, or `DCRITICAL`. If `level` is greater than the `debug_level` set in the module, then log it.

</dd>

<dt>fmt</dt>

<dd>

The string to log.

</dd>

<dt>arg</dt>

<dd>

Optional arguments????

</dd>

</dl>

**Return Values**

This function returns `void`.

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.ec_debug_printf.php)  | [Up](debug.php) |  [Next](apis.ec_render_my_stack_trace.php) |
| ec_debug_printf  | [Table of Contents](index.php) |  ec_render_my_stack_trace |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)