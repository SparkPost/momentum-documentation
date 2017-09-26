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

| scpt_compile_hook_callout |
| [Prev](apis.scpt_compile_callout.php)  | Chapter 42. Scriptlet (and Alerting) Functions |  [Next](apis.scpt_execute_or_resume.php) |

<a name="apis.scpt_compile_hook_callout"></a>
## Name

scpt_compile_hook_callout — Compile and register a scriptlet hook implementation entrypoint

## Synopsis

`#include "modules/scriptlets/ec_scriptlet.h"`

| `int **scpt_compile_hook_callout** (` | <var class="pdparam">hookname</var>, |   |
|   | <var class="pdparam">coptr</var>`)`; |   |

`const char * <var class="pdparam">hookname</var>`;
`scpt_callout ** <var class="pdparam">coptr</var>`;<a name="idp31551888"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.2.

Compile and register a scriptlet hook implementation entrypoint.

Similar to [scpt_compile_callout](apis.scpt_compile_callout.php "scpt_compile_callout"), except that the hook signature will be queried from the hook subsystem.

**Parameters**

<dl class="variablelist">

<dt>hookname</dt>

<dd>

The name of the hook.

</dd>

<dt>coptr</dt>

<dd>

The location of the pointer to the callout.

</dd>

</dl>

**Return Value**

On success this function returns `1`; On failure, `0` is returned.

**Threading**

It is legal to call this function in any thread.

<a name="idp31563856"></a>
## See Also

[Chapter 42, *Scriptlet (and Alerting) Functions*](script.php "Chapter 42. Scriptlet (and Alerting) Functions") 

| [Prev](apis.scpt_compile_callout.php)  | [Up](script.php) |  [Next](apis.scpt_execute_or_resume.php) |
| scpt_compile_callout  | [Table of Contents](index.php) |  scpt_execute_or_resume |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)