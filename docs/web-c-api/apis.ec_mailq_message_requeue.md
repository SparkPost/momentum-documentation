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

| ec_mailq_message_requeue |
| [Prev](apis.ec_mailq_insert_active.php)  | Chapter 32. Mail Queue Functions |  [Next](apis.ec_mailq_set_next_attempt_prep_quick.php) |

<a name="apis.ec_mailq_message_requeue"></a>
## Name

ec_mailq_message_requeue — Re-enqueues a message after a delivery attempt

## Synopsis

`#include "mail_queue.h"`

| `void **ec_mailq_message_requeue** (` | <var class="pdparam">message</var>, |   |
|   | <var class="pdparam">now</var>`)`; |   |

`ec_message * <var class="pdparam">message</var>`;
`struct timeval * <var class="pdparam">now</var>`;<a name="idp26994720"></a>
## Description

Re-enqueues a message after a delivery attempt.

### Note

The domain to which the message is to be requeued to must be assigned to the message prior to calling this function. Such assignment may happen with `ec_message_assign_domain` or `ec_message_assign_domain_by_name`.

Once this function returns, it takes responsibility for the `ec_message` passed in.

**Parameters**

<dl class="variablelist">

<dt>message</dt>

<dd>

An ec_message struct. For the definition of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message").

</dd>

<dt>now</dt>

<dd>

A struct timeval.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp27006512"></a>
## See Also

[ec_mailq_dequeue_live_message](apis.ec_mailq_dequeue_live_message.php "ec_mailq_dequeue_live_message"), [ec_mailq_insert_active](apis.ec_mailq_insert_active.php "ec_mailq_insert_active") and [ec_mailq_find_live_message](apis.ec_mailq_find_live_message.php "ec_mailq_find_live_message")

| [Prev](apis.ec_mailq_insert_active.php)  | [Up](mailq.php) |  [Next](apis.ec_mailq_set_next_attempt_prep_quick.php) |
| ec_mailq_insert_active  | [Table of Contents](index.php) |  ec_mailq_set_next_attempt_prep_quick |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)