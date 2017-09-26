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

| set_delayed_queue_event |
| [Prev](apis.schedule_event_and_dispatch.php)  | Chapter 24. Event Functions |  [Next](apis.sp_async_fail.php) |

<a name="apis.set_delayed_queue_event"></a>
## Name

set_delayed_queue_event — Schedule a mail queue maintainer for this `mail_queue`

## Synopsis

`#include "mail_queue.h"`

| `void **set_delayed_queue_event** (` | <var class="pdparam">mq</var>, |   |
|   | <var class="pdparam">now</var>`)`; |   |

`mail_queue * <var class="pdparam">mq</var>`;
`struct timeval * <var class="pdparam">now</var>`;<a name="idp24466464"></a>
## Description

Schedule a mail queue maintainer for this `mail_queue`.

**Parameters**

<dl class="variablelist">

<dt>mq</dt>

<dd>

A pointer to a mail_queue struct. For documentation of this data structure see [Section 68.58, “mail_queue”](structs.mail_queue.php "68.58. mail_queue").

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

It is only legal to call this function in the `Scheduler` thread.

<a name="idp24477920"></a>
## See Also

[mail_queue_size](apis.mail_queue_size.php "mail_queue_size"), [mail_queue_delayed_size](apis.mail_queue_delayed_size.php "mail_queue_delayed_size"), and [mail_queue_purge_domain_binding](apis.mail_queue_purge_domain_binding.php "mail_queue_purge_domain_binding").

| [Prev](apis.schedule_event_and_dispatch.php)  | [Up](event.php) |  [Next](apis.sp_async_fail.php) |
| schedule_event_and_dispatch  | [Table of Contents](index.php) |  sp_async_fail |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)