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

| scpt_autoload_ns |
| [Prev](apis.ec_alerting_inc_count.php)  | Chapter 42. Scriptlet (and Alerting) Functions |  [Next](apis.scpt_compile_callout.php) |

<a name="apis.scpt_autoload_ns"></a>
## Name

scpt_autoload_ns — Wire up autoload items, just in time

## Synopsis

`#include "modules/scriptlets/ec_scriptlet.h"`

| `int **scpt_autoload_ns** (` | <var class="pdparam">thr</var>, |   |
|   | <var class="pdparam">name_space</var>`)`; |   |

`scpt_thread * <var class="pdparam">thr</var>`;
`const char * <var class="pdparam">name_space</var>`;<a name="idp31505216"></a>
## Description

Wire up autoload items, just in time.

Call this from an __index function to perform just-in-time registration of global constants and other registered items.

This reduces the initial set up time for a scriptlet VM, at the cost of an extra couple of hash lookups the first time each of these constants is accessed.

**Parameters**

<dl class="variablelist">

<dt>thr</dt>

<dd>

The Lua VM state. For more information see [Section 68.72, “scpt_thread”](structs.scpt_thread.php "68.72. scpt_thread").

</dd>

<dt>name_space</dt>

<dd>

The name space.

</dd>

</dl>

**Return Value**

This function returns `1` if any work is performed; Otherwise it returns `0`.

**Threading**

It is legal to call this function in any thread.

<a name="idp31516128"></a>
## See Also

[Chapter 42, *Scriptlet (and Alerting) Functions*](script.php "Chapter 42. Scriptlet (and Alerting) Functions") 

| [Prev](apis.ec_alerting_inc_count.php)  | [Up](script.php) |  [Next](apis.scpt_compile_callout.php) |
| ec_alerting_inc_count  | [Table of Contents](index.php) |  scpt_compile_callout |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)