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

| ec_httpsrv_request_event_get_scheduler_inst |
| [Prev](apis.ec_httpsrv_request_event_get.php)  | Chapter 28. httpsrv Functions |  [Next](apis.ec_httpsrv_request_header_get.php) |

<a name="apis.ec_httpsrv_request_event_get_scheduler_inst"></a>
## Name

ec_httpsrv_request_event_get_scheduler_inst — Returns the scheduler for an Event from the current session

## Synopsis

`#include "modules/listeners/httpsrv.h"`

| `ec_scheduler_inst * **ec_httpsrv_request_event_get_scheduler_inst** (` | <var class="pdparam">sess</var>`)`; |   |

`ec_httpsrv_session * <var class="pdparam">sess</var>`;<a name="idp25383776"></a>
## Description

Returns the scheduler for an Event from the current session.

**Parameters**

<dl class="variablelist">

<dt>sess</dt>

<dd>

The current session to interrogate. For documentation of this data structure see [Section 68.33, “ec_httpsrv_session”](structs.ec_httpsrv_session.php "68.33. ec_httpsrv_session").

</dd>

</dl>

**Return Values**

Returns the scheduler instance. For documentation of this data structure see [Section 68.41, “ec_scheduler_inst”](structs.ec_scheduler_inst.php "68.41. ec_scheduler_inst"). The scheduler instance will be valid for the lifetime of the inbound session.

**Threading**

It is legal to call this function in the any thread.

<a name="idp25391136"></a>
## See Also

[ec_httpsrv_request_event_get](apis.ec_httpsrv_request_event_get.php "ec_httpsrv_request_event_get")

| [Prev](apis.ec_httpsrv_request_event_get.php)  | [Up](httpsrv.php) |  [Next](apis.ec_httpsrv_request_header_get.php) |
| ec_httpsrv_request_event_get  | [Table of Contents](index.php) |  ec_httpsrv_request_header_get |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)