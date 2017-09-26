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

| sp_async_schedule_event |
| [Prev](apis.sp_async_fail.php)  | Chapter 24. Event Functions |  [Next](apis.sp_make_swap_out_job.php) |

<a name="apis.sp_async_schedule_event"></a>
## Name

sp_async_schedule_event — Schedule an asynchronous event from any thread, and optionally dispatch the callback

## Synopsis

`#include "sp_async.h"`

| `void **sp_async_schedule_event** (` | <var class="pdparam">e</var>, |   |
|   | <var class="pdparam">dispatch_mask</var>`)`; |   |

`Event * <var class="pdparam">e</var>`;
`int <var class="pdparam">dispatch_mask</var>`;<a name="idp24501840"></a>
## Description

Schedule an event from any thread, and optionally dispatch the callback.

This adds the event scheduling and dispatch work to a queue in the Scheduler. The Scheduler will schedule and dispatch the event as soon as possible.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

The event.

</dd>

<dt>dispatch_mask</dt>

<dd>

The event mask to pass to the event's callback. If non-zero, the callback is also dispatched, otherwise, the event is just scheduled.

</dd>

</dl>

**Return Value**

This function returns void.

**Threading**

It is legal to call this function in any thread.

<a name="idp24510400"></a>
## See Also

[Section 68.49, “Event”](structs.event.php "68.49. Event")

| [Prev](apis.sp_async_fail.php)  | [Up](event.php) |  [Next](apis.sp_make_swap_out_job.php) |
| sp_async_fail  | [Table of Contents](index.php) |  sp_make_swap_out_job |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)