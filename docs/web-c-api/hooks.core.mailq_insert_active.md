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

| mailq_insert_active |
| [Prev](hooks.core.mailq_get_next_active.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.message_body_in_core.php) |

<a name="hooks.core.mailq_insert_active"></a>
## Name

mailq_insert_active

## Synopsis

`#include "hooks/core/mailq_insert_active.h"`

| `int **core_mailq_insert_active** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">mq</var>, |   |
|   | <var class="pdparam">msg</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`mail_queue * <var class="pdparam">mq</var>`;
`ec_message * <var class="pdparam">msg</var>`;<a name="idp11944832"></a>
## Description

When a message is attempted it is removed from the delayed queue and inserted into the active queue for a given domain. This is done by invoking this hook. The default hook behavior will find the appropriate active queue within *`mq`* for the *`msg`* based on the message binding and then insert it. If this action is subverted by a new callee, then 0 should be returned to avoid a terminal error within Momentum.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>mq</dt>

<dd>

A mail queue. For documentation of this data structure see [Section 68.58, “mail_queue”](structs.mail_queue.php "68.58. mail_queue")

</dd>

<dt>msg</dt>

<dd>

An ec_message. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

</dl>

**Return Values**

Returning 0 will cause subsequent hooks to not be called.

**Threading**

nn This hook will be called in the `Scheduler` thread.

| [Prev](hooks.core.mailq_get_next_active.php)  | [Up](hooks.core.php) |  [Next](hooks.core.message_body_in_core.php) |
| mailq_get_next_active  | [Table of Contents](index.php) |  message_body_in_core |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)