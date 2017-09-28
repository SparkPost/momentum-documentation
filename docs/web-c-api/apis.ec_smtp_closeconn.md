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

| ec_smtp_closeconn |
| [Prev](apis.ec_generate_connection_id.php)  | Chapter 13. Connection-related Functions |  [Next](apis.h_to_c.php) |

<a name="apis.ec_smtp_closeconn"></a>
## Name

ec_smtp_closeconn — Close an SMTP connection

## Synopsis

`#include "smtp.h"`

| `int **ec_smtp_closeconn** (` | <var class="pdparam">dc</var>, |   |
|   | <var class="pdparam">e</var>, |   |
|   | <var class="pdparam">conn</var>, |   |
|   | <var class="pdparam">connh</var>, |   |
|   | <var class="pdparam">domain</var>, |   |
|   | <var class="pdparam">binding_slot</var>, |   |
|   | <var class="pdparam">am</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">file</var>, |   |
|   | <var class="pdparam">line</var>`)`; |   |

`delivery_construct * <var class="pdparam">dc</var>`;
`Event * <var class="pdparam">e</var>`;
`connection * <var class="pdparam">conn</var>`;
`connection_handle * <var class="pdparam">connh</var>`;
`domain_record * <var class="pdparam">domain</var>`;
`ec_binding_slot <var class="pdparam">binding_slot</var>`;
`address_metrics * <var class="pdparam">am</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`const char * <var class="pdparam">file</var>`;
`int <var class="pdparam">line</var>`;<a name="idp21576192"></a>
## Description

Close an SMTP connection.

### Note

You can use the following macro

```
#define CLOSECONN  return ec_smtp_closeconn(dc, e, conn, connh, domain, binding_slot, am,
  now, __FILE__, __LINE__);
```
**Parameters**

<dl class="variablelist">

<dt>dc</dt>

<dd>

The address of a `delivery_construct` for the connection. For more information on this data structure see [Section 68.11, “delivery_construct”](structs.delivery_construct.php "68.11. delivery_construct").

</dd>

<dt>e</dt>

<dd>

The address of an `event`. For more information on this data structure see [Section 68.49, “Event”](structs.event.php "68.49. Event").

</dd>

<dt>conn</dt>

<dd>

The address of a `connection`. For more information on this data structure see [Section 68.9, “connection”](structs.connection.php "68.9. connection").

</dd>

<dt>connh</dt>

<dd>

The address of a `connection_handle`. For more information on this data structure see [Section 68.10, “connection_handle”](structs.connection_handle.php "68.10. connection_handle").

</dd>

<dt>domain</dt>

<dd>

A pointer to a [Section 68.14, “domain_record”](structs.domain_record.php "68.14. domain_record") struct.

</dd>

<dt>binding_slot</dt>

<dd>

The binding slot.

</dd>

<dt>am</dt>

<dd>

A pointer to a [Section 68.4, “address_metrics”](structs.address_metrics.php "68.4. address_metrics") struct.

</dd>

<dt>now</dt>

<dd>

A pointer to a timeval struct, which may be NULL.

**Configuration Change. ** Prior to version 3.0, NULL was not an allowed value.

</dd>

<dt>file</dt>

<dd>

The filename that invoked the call.

</dd>

<dt>line</dt>

<dd>

The line number of the file that invoked the call.

</dd>

</dl>

**Return Values**

This function returns `0`.

**Threading**

It is only legal to call this function in the `Scheduler` thread. thread.

<a name="idp21608432"></a>
## See Also

[register_smtp_client_state](apis.register_smtp_client_state.php "register_smtp_client_state"), and [smtp_next_state](apis.smtp_next_state.php "smtp_next_state").

| [Prev](apis.ec_generate_connection_id.php)  | [Up](connection.php) |  [Next](apis.h_to_c.php) |
| ec_generate_connection_id  | [Table of Contents](index.php) |  h_to_c |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)