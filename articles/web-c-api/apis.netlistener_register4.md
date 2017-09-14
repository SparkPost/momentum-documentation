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

| netlistener_register4 |
| [Prev](apis.netlistener_stop_instance.php)  | Chapter 38. Netlistener Functions |  [Next](ptr_array.php) |

<a name="apis.netlistener_register4"></a>
## Name

netlistener_register4 — Register a listener, overriding the default TCP receive and send buffers that are set by the netlistener layer

## Synopsis

`#include "netlistener.h"`

| `netlistener_def * **netlistener_register4** (` | <var class="pdparam">listener_prefix</var>, |   |
|   | <var class="pdparam">servercode</var>, |   |
|   | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">accepthook</var>, |   |
|   | <var class="pdparam">recvbuf</var>, |   |
|   | <var class="pdparam">sendbuf</var>`)`; |   |

`const char * <var class="pdparam">listener_prefix</var>`;
`EventFunc <var class="pdparam">servercode</var>`;
`void * <var class="pdparam">closure</var>`;
`EventFunc <var class="pdparam">accepthook</var>`;
`const char * <var class="pdparam">recvbuf</var>`;
`const char * <var class="pdparam">sendbuf</var>`;<a name="idp30679376"></a>
## Description

Register a listener, overriding the default TCP receive and send buffers that are set by the netlistener layer.

**Parameters**

<dl class="variablelist">

<dt>listener_prefix</dt>

<dd>

Prefix for the listener in the configuration, e.g. "HTTP".

</dd>

<dt>servercode</dt>

<dd>

Event callback for the connection. The following typedef applies to this data type:

`typedef int (*EventFunc) (struct _Event * event, int eventtype, void *closure, struct timeval * now);`

</dd>

<dt>closure</dt>

<dd>

Closure to pass in to the `accept_construct.accept_construct_closure.vptr` field to the `servercode` callback. This can be `NULL`.

</dd>

<dt>accepthook</dt>

<dd>

Callback after the connection has been accepted, NULL if not needed. The following typedef applies to this data type:

`typedef int (*EventFunc) (struct _Event * event, int eventtype, void *closure, struct timeval * now);`

</dd>

<dt>recvbuf</dt>

<dd>

TCP receive buffer size, NULL to use default of 4 KB.

</dd>

<dt>sendbuf</dt>

<dd>

TCP send buffer size, NULL to use default of 4 KB.

</dd>

</dl>

**Return Values**

Returns the address of a `netlistener_def` instance. For documentation of this data structure see [Section 68.63, “netlistener_def”](structs.netlistener_def.php "68.63. netlistener_def"). You are responsible for releasing the memory in the structure.

**Threading**

It is legal to call this function in the any thread.

<a name="idp30699408"></a>
## See Also

[Section 68.63, “netlistener_def”](structs.netlistener_def.php "68.63. netlistener_def")

| [Prev](apis.netlistener_stop_instance.php)  | [Up](netlistener.php) |  [Next](ptr_array.php) |
| netlistener_stop_instance  | [Table of Contents](index.php) |  Chapter 39. Pointer Array Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)