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

| scpt_push_object_by_typename |
| [Prev](apis.scpt_push_object_and_allocate2.php)  | Chapter 42. Scriptlet (and Alerting) Functions |  [Next](apis.scpt_push_ref.php) |

<a name="apis.scpt_push_object_by_typename"></a>
## Name

scpt_push_object_by_typename — box a C structure to pass into a scriptlet routine

## Synopsis

`#include "modules/scriptlets/ec_scriptlet.h"`

| `void **scpt_push_object_by_typename** (` | <var class="pdparam">thr</var>, |   |
|   | <var class="pdparam">type_name</var>, |   |
|   | <var class="pdparam">typep</var>, |   |
|   | <var class="pdparam">object</var>, |   |
|   | <var class="pdparam">flags</var>`)`; |   |

`scpt_thread * <var class="pdparam">thr</var>`;
`const char * <var class="pdparam">type_name</var>`;
`scpt_objtype ** <var class="pdparam">typep</var>`;
`void * <var class="pdparam">object</var>`;
`int <var class="pdparam">flags</var>`;<a name="idp31874832"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.2.

Box a C structure to pass it into a scriptlet routine.

**Parameters**

<dl class="variablelist">

<dt>thr</dt>

<dd>

The script thread. For a description of this data type see [Section 68.72, “scpt_thread”](structs.scpt_thread.php "68.72. scpt_thread").

</dd>

<dt>typename</dt>

<dd>

The name of the type of object being pushed.

</dd>

<dt>typep</dt>

<dd>

The in/out parameter. For a description of this data typer see [Section 68.71, “scpt_objtype”](structs.scpt_objtype.php "68.71. scpt_objtype").

</dd>

<dt>object</dt>

<dd>

The object being pushed.

</dd>

<dt>flags</dt>

<dd>

Flags affecting the push operation.

</dd>

</dl>

If `typep` is NULL, it will be ignored. Otherwise, it points to an instance of scpt_objtype that may be NULL. If it is NULL, upon return from `scpt_push_object_by_typename`, that instance will be set to the scpt_objtype corresponding to the objtype string. If `typep` is not NULL upon entry to scpt_push_object_by_typename, it will be used in preference to objtype and this function call will be equivalent to scpt_push_object4().

The intended usage scenario for `typep` is for a call sequence similar to that below, where the objtype string is constant; a static variable can be used to cache the resolved form of the type string, saving hash lookups in the common case:

```
static scpt_objtype *type = NULL;

scpt_push_object_by_typename(thr, "msys.core:_ec_string", &type, str, 0);
```
**Parameters**

<dl class="variablelist">

<dt>thr</dt>

<dd>

The script thread. For a description of this data type see [Section 68.72, “scpt_thread”](structs.scpt_thread.php "68.72. scpt_thread").

</dd>

<dt>value</dt>

<dd>

The double that you wish to push.

</dd>

</dl>

**Return Value**

This function returns void.

**Threading**

It is legal to call this function in any thread.

<a name="idp31901232"></a>
## See Also

[Chapter 42, *Scriptlet (and Alerting) Functions*](script.php "Chapter 42. Scriptlet (and Alerting) Functions") 

| [Prev](apis.scpt_push_object_and_allocate2.php)  | [Up](script.php) |  [Next](apis.scpt_push_ref.php) |
| scpt_push_object_and_allocate2  | [Table of Contents](index.php) |  scpt_push_ref |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)