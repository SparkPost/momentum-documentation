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

| smtp_next_state |
| [Prev](apis.smtp_get_state_machine.php)  | Chapter 47. SMTP-related Functions |  [Next](apis.smtp_parse_capabilities.php) |

<a name="apis.smtp_next_state"></a>
## Name

smtp_next_state — Change the SMTP state for the current connection to another state

## Synopsis

`#include "smtp.h"`

| `void **smtp_next_state** (` | <var class="pdparam">dc</var>, |   |
|   | <var class="pdparam">connh</var>, |   |
|   | <var class="pdparam">state</var>, |   |
|   | <var class="pdparam">now</var>`)`; |   |

`delivery_construct * <var class="pdparam">dc</var>`;
`connection_handle * <var class="pdparam">connh</var>`;
`smtp_state * <var class="pdparam">state</var>`;
`struct timeval * <var class="pdparam">now</var>`;<a name="idp34578720"></a>
## Description

Change the SMTP state for the current connection to another state.

**Parameters**

<dl class="variablelist">

<dt>dc</dt>

<dd>

The address of a `delivery_construct` for the connection. For more information on this data structure see [Section 68.11, “delivery_construct”](structs.delivery_construct.php "68.11. delivery_construct").

</dd>

<dt>connh</dt>

<dd>

The address of a `connection_handle`. For more information on this data structure see [Section 68.10, “connection_handle”](structs.connection_handle.php "68.10. connection_handle").

</dd>

<dt>state</dt>

<dd>

Move the connection state to this SMTP state. One typical usage is to use `smtp_get_state` as an argument. Another typical usage is to pass the `NULL` pointer. In this case, then move the connection state to the next (default) state. For more information on this data structure see [Section 68.83, “smtp_state”](structs.smtp_state.php "68.83. smtp_state").

</dd>

<dt>now</dt>

<dd>

A pointer to a timeval struct, which may be NULL.

**Configuration Change. ** Prior to version 3.0, NULL was not an allowed value.

</dd>

</dl>

**Return Values**

This function returns `void`.

**Threading**

It is *only* legal to call this function in the `Scheduler` thread.

<a name="idp34597472"></a>
## See Also

[ec_smtp_closeconn](apis.ec_smtp_closeconn.php "ec_smtp_closeconn") and [register_smtp_client_state](apis.register_smtp_client_state.php "register_smtp_client_state")

| [Prev](apis.smtp_get_state_machine.php)  | [Up](smtp.php) |  [Next](apis.smtp_parse_capabilities.php) |
| smtp_get_state_machine  | [Table of Contents](index.php) |  smtp_parse_capabilities |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)