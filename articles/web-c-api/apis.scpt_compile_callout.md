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

| scpt_compile_callout |
| [Prev](apis.scpt_autoload_ns.php)  | Chapter 42. Scriptlet (and Alerting) Functions |  [Next](apis.scpt_compile_hook_callout.php) |

<a name="apis.scpt_compile_callout"></a>
## Name

scpt_compile_callout — Compile and register a scriptlet entrypoint

## Synopsis

`#include "modules/scriptlets/ec_scriptlet.h"`

| `scpt_callout * **scpt_compile_callout** (` | <var class="pdparam">name</var>, |   |
|   | <var class="pdparam">rettype</var>, |   |
|   | <var class="pdparam">params</var>`)`; |   |

`const char * <var class="pdparam">name</var>`;
`const char * <var class="pdparam">rettype</var>`;
`const char * <var class="pdparam">params</var>`;<a name="idp31527824"></a>
## Description

Compile and register a scriptlet entrypoint.

The entrypoint is defined in terms of the C function that it represents. Once registered, the function can be implemented by a scriptlet and will be bound as part of the scriptlet register_module call.

**Parameters**

<dl class="variablelist">

<dt>name</dt>

<dd>

The name of the callout.

</dd>

<dt>rettype</dt>

<dd>

The return type of the callout.

</dd>

<dt>params</dt>

<dd>

The parameters.

</dd>

</dl>

**Return Value**

This function returns a pointer to a scpt_callout. For a description of this data type see [Section 68.70, “scpt_callout”](structs.scpt_callout.php "68.70. scpt_callout").

Only a limited subset of return values are supported; if an unsupported return type is encountered, the entry point will fail to compile and this function will return `NULL`.

The returned entrypoint can be used as a helper to invoke a corresponding method in a scriptlet table.

**Threading**

It is legal to call this function in any thread.

<a name="idp31540848"></a>
## See Also

[Chapter 42, *Scriptlet (and Alerting) Functions*](script.php "Chapter 42. Scriptlet (and Alerting) Functions") 

| [Prev](apis.scpt_autoload_ns.php)  | [Up](script.php) |  [Next](apis.scpt_compile_hook_callout.php) |
| scpt_autoload_ns  | [Table of Contents](index.php) |  scpt_compile_hook_callout |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)