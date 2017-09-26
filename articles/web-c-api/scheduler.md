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

| Chapter 41. Scheduler Functions |
| [Prev](apis.rfc2822_remove_header.php)  | Part II. C API |  [Next](apis.is_scheduler_thread.php) |

## Chapter 41. Scheduler Functions

**Table of Contents**

<dl class="toc">

<dt>[is_scheduler_thread](apis.is_scheduler_thread.php) — Determines whether or not the thread that calls this function is a scheduler thread</dt>

<dt>[ping_scheduler](apis.ping_scheduler.php) — Pings the **master scheduler**           thread</dt>

<dt>[scheduler_active_queue_reinsert](apis.scheduler_active_queue_reinsert.php) — Reinsert a delivery construct's messages into the active queue, for re-processing</dt>

<dt>[scheduler_close_connection](apis.scheduler_close_connection.php) — Have the scheduler clean up a connection</dt>

<dt>[scheduler_recurrent_func_add](apis.scheduler_recurrent_func_add.php) — Registers a recurrent function and a closure for the **master scheduler**           thread</dt>

<dt>[scheduler_register](apis.scheduler_register.php) — Registers a scheduler with the system</dt>

<dt>[scheduler_reuse_connection](apis.scheduler_reuse_connection.php) — Have the scheduler re-use the connection</dt>

</dl>

| [Prev](apis.rfc2822_remove_header.php)  | [Up](pt.apis.php) |  [Next](apis.is_scheduler_thread.php) |
| rfc2822_remove_header  | [Table of Contents](index.php) |  is_scheduler_thread |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)