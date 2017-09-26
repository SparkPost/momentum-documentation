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

| ec_render_my_stack_trace |
| [Prev](apis.ec_mod_vdebug.php)  | Chapter 17. Debug Functions |  [Next](apis.heartbeat_init.php) |

<a name="apis.ec_render_my_stack_trace"></a>
## Name

ec_render_my_stack_trace — render a stack backtrace to a string

## Synopsis

`#include "debug_tools.h"`

| `void **ec_render_my_stack_trace** (` | <var class="pdparam">r</var>, |   |
|   | <var class="pdparam">start</var>, |   |
|   | <var class="pdparam">end</var>`)`; |   |

`string * <var class="pdparam">r</var>`;
`int <var class="pdparam">start</var>`;
`int <var class="pdparam">end</var>`;<a name="idp22382720"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

render a stack backtrace to a string

Renders a stack backtrace starting at frame start and going until frame end. Frame 0 is the caller's frame (i.e. the rendering function is skipped).

**Parameters**

<dl class="variablelist">

<dt>string</dt>

<dd>

string to render to

</dd>

<dt>start</dt>

<dd>

start rendering this number of frames past our caller

</dd>

<dt>end</dt>

<dd>

stop rendering this number of frames past our caller

</dd>

</dl>

| [Prev](apis.ec_mod_vdebug.php)  | [Up](debug.php) |  [Next](apis.heartbeat_init.php) |
| ec_mod_vdebug  | [Table of Contents](index.php) |  heartbeat_init |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)