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

| debug_tools_register_event_func |
| [Prev](apis.debug_tools_init.php)  | Chapter 17. Debug Functions |  [Next](apis.ec_debug_printf.php) |

<a name="apis.debug_tools_register_event_func"></a>
## Name

debug_tools_register_event_func — Register an event function for debugging

## Synopsis

`#include "debug_tools.h"`

| `void **debug_tools_register_event_func** (` | <var class="pdparam">fptr</var>, |   |
|   | <var class="pdparam">name</var>, |   |
|   | <var class="pdparam">type</var>, |   |
|   | <var class="pdparam">dumper</var>`)`; |   |

`EventFunc <var class="pdparam">fptr</var>`;
`const char * <var class="pdparam">name</var>`;
`const char * <var class="pdparam">type</var>`;
`debug_tools_event_dumper <var class="pdparam">dumper</var>`;<a name="idp22305424"></a>
## Description

Register an event function for debugging.

The following macro may be helpful:

`#define insert_func_details(a,b,c,d) debug_tools_register_event_func((EventFunc)a, b, c, d)`

A sample call:

`debug_tools_register_event_func(log_heartbeat, "log_hearbeat", "ec_logger", NULL);`

**Parameters**

<dl class="variablelist">

<dt>fptr</dt>

<dd>

An `EventFunc` function pointer. The following typedef applies to this data type:

`typedef int (*EventFunc) (struct _Event * event, int eventtype, void *closure, struct timeval * now);`

</dd>

<dt>name</dt>

<dd>

Name of the event function.

</dd>

<dt>type</dt>

<dd>

A type, such as a module name.

</dd>

<dt>dumper</dt>

<dd>

A function pointer. The following typedef applies to this data type:

`typedef void (*debug_tools_event_dumper)(string *output, Event *e);`

</dd>

</dl>

**Return Values**

This function returns `void`.

**Threading**

It is *only* legal to call this function in the `Scheduler` thread.

| [Prev](apis.debug_tools_init.php)  | [Up](debug.php) |  [Next](apis.ec_debug_printf.php) |
| debug_tools_init  | [Table of Contents](index.php) |  ec_debug_printf |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)