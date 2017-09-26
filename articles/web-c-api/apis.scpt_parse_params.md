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

| scpt_parse_params |
| [Prev](apis.scpt_getspecific.php)  | Chapter 42. Scriptlet (and Alerting) Functions |  [Next](apis.scpt_push_double.php) |

<a name="apis.scpt_parse_params"></a>
## Name

scpt_parse_params — Parse scriptlet function parameters

## Synopsis

`#include "modules/scriptlets/ec_scriptlet.h"`

| `void **scpt_parse_params** (` | <var class="pdparam">thr</var>, |   |
|   | <var class="pdparam">fmt</var>, |   |
|   | <var class="pdparam">...</var>`)`; |   |

`scpt_thread * <var class="pdparam">thr</var>`;
`const char * <var class="pdparam">fmt</var>`;
`<var class="pdparam">...</var>`;<a name="idp31691152"></a>
## Description

**Configuration Change. ** This feature is available as of version 3.2.

Parse scriptlet function parameters.

**Parameters**

<dl class="variablelist">

<dt>thr</dt>

<dd>

script thread

</dd>

<dt>fmt</dt>

<dd>

A format string that specifies the types of the arguments.

</dd>

<dt>...</dt>

<dd>

The variable argument.

</dd>

</dl>

The format string can use the following placeholders:

*   `?` – The next placeholder is optional. If the argument is not present, then the corresponding variadic arguments will be skipped over unmodified, allowing you to initialize them to some default value.

*   `s` – A string parameter. Corresponds to the address of a const char * and the address of an int to receive the string and its length.

*   `i` – An integer parameter. Corresponds to the address of an integer to receive its value.

*   `d` – A double parameter. Corresponds to the address of a double to receive its value.

*   `o` – An object. Corresponds to a string representation of the type and a pointer to pointer to the type of the object.

*   `O` – An object plus a reference. Corresponds to a string representation of the type, a pointer to pointer to the type of the object, and a pointer to an integer to hold a reference to the object. This reference must be released by the caller at an appropriate time.

*   `c` – A closure. Corresponds to the address of an integer that holds the pinned reference. Use [scpt_push_ref](apis.scpt_push_ref.php "scpt_push_ref") to pass this back to Lua. Use [scpt_unpin_ref](apis.scpt_unpin_ref.php "scpt_unpin_ref") to allow it to be garbage collected.

*   `t` – A table. Corresponds to the address of an integer that holds the "acceptable index" of the table on the stack. The index will be set to `-1` if the parameter was marked as optional, it is present, and it is not a table.

*   `T` – A table. Corresponds to the address of an integer that holds the pinned reference. Use [scpt_push_ref](apis.scpt_push_ref.php "scpt_push_ref") to pass this back to Lua. Use [scpt_unpin_ref](apis.scpt_unpin_ref.php "scpt_unpin_ref") to allow it to be garbage collected.

*   `@O` – an object plus a reference. Corresponds to a string representation of the type, a pointer to pointer to the type of the object, and a pointer to a pointer to hold a reference to the object. This reference must be released by the caller at an appropriate time using lua_delrefobj().

*   `@c` – a closure. Corresponds to the address of a pointer that holds the pinned reference. Use lua_pushobjref() to pass this back to lua. Use lua_delrefobj() to allow it to be garbage collected.

*   `@T` – A table. Corresponds to the address of a pointer that holds the pinned reference. Use lua_pushobjref() to pass this back to lua. Use lua_delrefobj() to allow it to be garbage collected.

An error is raised if the parameters do not match the format string.

**Return Value**

This function returns the previously set pointer value.

**Threading**

It is legal to call this function in any thread.

<a name="idp31725520"></a>
## See Also

[Chapter 42, *Scriptlet (and Alerting) Functions*](script.php "Chapter 42. Scriptlet (and Alerting) Functions") 

| [Prev](apis.scpt_getspecific.php)  | [Up](script.php) |  [Next](apis.scpt_push_double.php) |
| scpt_getspecific  | [Table of Contents](index.php) |  scpt_push_double |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)