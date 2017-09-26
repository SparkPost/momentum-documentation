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

| scpt_getspecific |
| [Prev](apis.scpt_get_traceback.php)  | Chapter 42. Scriptlet (and Alerting) Functions |  [Next](apis.scpt_parse_params.php) |

<a name="apis.scpt_getspecific"></a>
## Name

scpt_getspecific — Fetch previously associated pointer value

## Synopsis

`#include "modules/scriptlets/ec_scriptlet.h"`

| `void * **scpt_getspecific** (` | <var class="pdparam">thr</var>, |   |
|   | <var class="pdparam">key</var>`)`; |   |

`scpt_thread * <var class="pdparam">thr</var>`;
`const char * <var class="pdparam">key</var>`;<a name="idp31669824"></a>
## Description

Fetch the pointer value set with [scpt_setspecific](apis.scpt_setspecific.php "scpt_setspecific").

**Parameters**

<dl class="variablelist">

<dt>thr</dt>

<dd>

The script thread. For a description of this data type see [Section 68.72, “scpt_thread”](structs.scpt_thread.php "68.72. scpt_thread").

</dd>

<dt>key</dt>

<dd>

The key associated with the script.

</dd>

</dl>

**Return Value**

This function returns the previously set pointer value.

**Threading**

It is legal to call this function in any thread.

<a name="idp31679680"></a>
## See Also

[Chapter 42, *Scriptlet (and Alerting) Functions*](script.php "Chapter 42. Scriptlet (and Alerting) Functions") 

| [Prev](apis.scpt_get_traceback.php)  | [Up](script.php) |  [Next](apis.scpt_parse_params.php) |
| scpt_get_traceback  | [Table of Contents](index.php) |  scpt_parse_params |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)