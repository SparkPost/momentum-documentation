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

| mail_queue_delayed_size |
| [Prev](apis.mail_queue_delay_domain.php)  | Chapter 32. Mail Queue Functions |  [Next](apis.mail_queue_purge_domain_binding.php) |

<a name="apis.mail_queue_delayed_size"></a>
## Name

mail_queue_delayed_size — Get the size of a delayed queue

## Synopsis

`#include "mail_queue.h"`

| `int **mail_queue_delayed_size** (` | <var class="pdparam">queue</var>`)`; |   |

`mail_queue * <var class="pdparam">queue</var>`;<a name="idp27095440"></a>
## Description

Returns the size of this mail queue's delayed queue.

**Parameters**

<dl class="variablelist">

<dt>queue</dt>

<dd>

A pointer to a mail_queue struct. For documentation of this data structure see [Section 68.58, “mail_queue”](structs.mail_queue.php "68.58. mail_queue")

</dd>

</dl>

**Return Values**

This function returns the number of messages in this mail queue's delayed queue.

**Threading**

It is only legal to call this function in the `Scheduler` thread.

<a name="idp27102560"></a>
## See Also

[__get_global_mail_queue](apis.get_global_mail_queue.php "__get_global_mail_queue"), [mail_queue_active_queue_for_binding](apis.mail_queue_active_queue_for_binding.php "mail_queue_active_queue_for_binding"), [mail_queue_size](apis.mail_queue_size.php "mail_queue_size"), and [mail_queue_purge_domain_binding](apis.mail_queue_purge_domain_binding.php "mail_queue_purge_domain_binding").

| [Prev](apis.mail_queue_delay_domain.php)  | [Up](mailq.php) |  [Next](apis.mail_queue_purge_domain_binding.php) |
| mail_queue_delay_domain  | [Table of Contents](index.php) |  mail_queue_purge_domain_binding |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)