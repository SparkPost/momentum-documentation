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

| ec_mailq_insert_active |
| [Prev](apis.ec_mailq_get_pending_enqueues.php)  | Chapter 32. Mail Queue Functions |  [Next](apis.ec_mailq_message_requeue.php) |

<a name="apis.ec_mailq_insert_active"></a>
## Name

ec_mailq_insert_active — Insert a message into the active queue

## Synopsis

`#include "mail_queue.h"`

| `void **ec_mailq_insert_active** (` | <var class="pdparam">mq</var>, |   |
|   | <var class="pdparam">message</var>`)`; |   |

`mail_queue * <var class="pdparam">mq</var>`;
`ec_message * <var class="pdparam">message</var>`;<a name="idp26969296"></a>
## Description

Insert a message into the active queue. The location of the message in the active queue is determined by its `next_attempt` time (as set by the [ec_message_set_next_attempt](apis.ec_message_set_next_attempt.php "ec_message_set_next_attempt") function).

### Note

The message must **not** be in any other Momentum queue when this function is called. Once this function returns, it takes responsibility for the `ec_message` passed in.

**Parameters**

<dl class="variablelist">

<dt>mq</dt>

<dd>

A pointer to a mail queue. The mail_queue struct is defined at [Section 68.58, “mail_queue”](structs.mail_queue.php "68.58. mail_queue").

Mail queues are typically determined by looking at the domain record.

</dd>

<dt>message</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message").

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp26982624"></a>
## See Also

[ec_mailq_dequeue_live_message](apis.ec_mailq_dequeue_live_message.php "ec_mailq_dequeue_live_message"), [ec_mailq_message_requeue](apis.ec_mailq_message_requeue.php "ec_mailq_message_requeue") and [ec_mailq_find_live_message](apis.ec_mailq_find_live_message.php "ec_mailq_find_live_message")

| [Prev](apis.ec_mailq_get_pending_enqueues.php)  | [Up](mailq.php) |  [Next](apis.ec_mailq_message_requeue.php) |
| ec_mailq_get_pending_enqueues  | [Table of Contents](index.php) |  ec_mailq_message_requeue |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)