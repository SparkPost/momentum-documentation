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

| mail_queue_active_queue_for_binding |
| [Prev](apis.get_global_mail_queue.php)  | Chapter 32. Mail Queue Functions |  [Next](apis.mail_queue_delay_domain.php) |

<a name="apis.mail_queue_active_queue_for_binding"></a>
## Name

mail_queue_active_queue_for_binding — Returns the active queue for a binding

## Synopsis

`#include "mail_queue.h"`

| `Skiplist * **mail_queue_active_queue_for_binding** (` | <var class="pdparam">mq</var>, |   |
|   | <var class="pdparam">binding</var>, |   |
|   | <var class="pdparam">create</var>`)`; |   |

`mail_queue * <var class="pdparam">mq</var>`;
`int <var class="pdparam">binding</var>`;
`int <var class="pdparam">create</var>`;<a name="idp27050768"></a>
## Description

Returns the active queue for a given binding.

**Parameters**

<dl class="variablelist">

<dt>queue</dt>

<dd>

A pointer to a mail_queue struct. For documentation of this data structure see [Section 68.58, “mail_queue”](structs.mail_queue.php "68.58. mail_queue").

</dd>

<dt>binding</dt>

<dd>

The binding slot.

</dd>

<dt>create</dt>

<dd>

An integer, typically 0 or 1\. If you intend to insert a new message into the queue, then pass `1` to this parameter. Alternatively, pass this parameter `0` if you are simply searching for a message in the queue.

</dd>

</dl>

**Return Values**

This function returns the address of the active queue for the binding (or NULL if it is empty). It returns a pointer to a Skiplist. For documentation of this data structure see [Section 68.77, “Skiplist”](structs.skiplist.php "68.77. Skiplist")

**Threading**

It is only legal to call this function in the `Scheduler` thread.

<a name="idp27063328"></a>
## See Also

[__get_global_mail_queue](apis.get_global_mail_queue.php "__get_global_mail_queue"), [mail_queue_size](apis.mail_queue_size.php "mail_queue_size"), [mail_queue_delayed_size](apis.mail_queue_delayed_size.php "mail_queue_delayed_size"), and [mail_queue_purge_domain_binding](apis.mail_queue_purge_domain_binding.php "mail_queue_purge_domain_binding").

| [Prev](apis.get_global_mail_queue.php)  | [Up](mailq.php) |  [Next](apis.mail_queue_delay_domain.php) |
| __get_global_mail_queue  | [Table of Contents](index.php) |  mail_queue_delay_domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)