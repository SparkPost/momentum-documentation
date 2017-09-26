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

| Chapter 32. Mail Queue Functions |
| [Prev](apis.ec_log_transient_failure.php)  | Part II. C API |  [Next](apis.__mail_queue_maintain.php) |

## Chapter 32. Mail Queue Functions

**Table of Contents**

<dl class="toc">

<dt>[__mail_queue_maintain](apis.__mail_queue_maintain.php) — __mail_queue_maintain is the default implementation if the __mail_queue_maintain hook</dt>

<dt>[__mailq_get_next_active](apis.__mailq_get_next_active.php) — __mailq_get_next_active is an internal function called by the default implementation if the mailq_get_next_active hook</dt>

<dt>[_mail_queue_maintain_domain](apis._mail_queue_maintain_domain.php) — _mail_queue_maintain_domain is an internal function that is called if no mail_queue_maintain_domain hook is registered</dt>

<dt>[ec_mailq_dequeue_live_message](apis.ec_mailq_dequeue_live_message.php) — Removes a message from the mail queues and returns it if found</dt>

<dt>[ec_mailq_enqueue_sam](apis.ec_mailq_enqueue_sam.php) — Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers</dt>

<dt>[ec_mailq_find_live_message](apis.ec_mailq_find_live_message.php) — Finds a message in the message queues and returns it</dt>

<dt>[ec_mailq_first_delayed](apis.ec_mailq_first_delayed.php) — returns the first delayed message in the supplied mail queue</dt>

<dt>[ec_mailq_get_mid](apis.ec_mailq_get_mid.php) — Returns a message by message_id</dt>

<dt>[ec_mailq_get_pending_enqueues](apis.ec_mailq_get_pending_enqueues.php) — Fetch the number of pending enqueue requests</dt>

<dt>[ec_mailq_insert_active](apis.ec_mailq_insert_active.php) — Insert a message into the active queue</dt>

<dt>[ec_mailq_message_requeue](apis.ec_mailq_message_requeue.php) — Re-enqueues a message after a delivery attempt</dt>

<dt>[ec_mailq_set_next_attempt_prep_quick](apis.ec_mailq_set_next_attempt_prep_quick.php) — pre-calculates next attempt times</dt>

<dt>[__get_global_mail_queue](apis.get_global_mail_queue.php) — Allocates memory and initializes the global mail queue</dt>

<dt>[mail_queue_active_queue_for_binding](apis.mail_queue_active_queue_for_binding.php) — Returns the active queue for a binding</dt>

<dt>[mail_queue_delay_domain](apis.mail_queue_delay_domain.php) — Add the specified domain record to the delayed queue</dt>

<dt>[mail_queue_delayed_size](apis.mail_queue_delayed_size.php) — Get the size of a delayed queue</dt>

<dt>[mail_queue_purge_domain_binding](apis.mail_queue_purge_domain_binding.php) — Fail all messages for a binding/domain with a given status code</dt>

<dt>[mail_queue_size](apis.mail_queue_size.php) — Get the size of a mail queue</dt>

</dl>

| [Prev](apis.ec_log_transient_failure.php)  | [Up](pt.apis.php) |  [Next](apis.__mail_queue_maintain.php) |
| ec_log_transient_failure  | [Table of Contents](index.php) |  __mail_queue_maintain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)