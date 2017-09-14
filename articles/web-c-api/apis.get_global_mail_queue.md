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

| __get_global_mail_queue |
| [Prev](apis.ec_mailq_set_next_attempt_prep_quick.php)  | Chapter 32. Mail Queue Functions |  [Next](apis.mail_queue_active_queue_for_binding.php) |

<a name="apis.get_global_mail_queue"></a>
## Name

__get_global_mail_queue — Allocates memory and initializes the global mail queue

## Synopsis

`#include "mail_queue.h"`

| `Skiplist * **__get_global_mail_queue** (` | `)`; |   |

`void`;<a name="idp27032608"></a>
## Description

Allocates memory and initializes the global mail queue.

**Return Values**

This function returns the address of a newly allocated global mail queue. This is an address of a [Section 68.77, “Skiplist”](structs.skiplist.php "68.77. Skiplist").

**Threading**
### Warning

Only call this function from the `Scheduler` thread.

<a name="idp27037376"></a>
## See Also

[mail_queue_active_queue_for_binding](apis.mail_queue_active_queue_for_binding.php "mail_queue_active_queue_for_binding"), [mail_queue_purge_domain_binding](apis.mail_queue_purge_domain_binding.php "mail_queue_purge_domain_binding"), [mail_queue_delayed_size](apis.mail_queue_delayed_size.php "mail_queue_delayed_size"), and [mail_queue_size](apis.mail_queue_size.php "mail_queue_size").

| [Prev](apis.ec_mailq_set_next_attempt_prep_quick.php)  | [Up](mailq.php) |  [Next](apis.mail_queue_active_queue_for_binding.php) |
| ec_mailq_set_next_attempt_prep_quick  | [Table of Contents](index.php) |  mail_queue_active_queue_for_binding |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)