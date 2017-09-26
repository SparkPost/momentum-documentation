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

| async_unlink_concurrency |
| [Prev](conf.ref.async_swap_out.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.authorization.php) |

<a name="conf.ref.async_unlink_concurrency"></a>
## Name

async_unlink_concurrency, batch_unlink_concurrency, async_unlink_backlog — asynchronous spool unlinking

## Synopsis

`async_unlink_concurrency = 6`

`async_unlink_backlog = 100`

`batch_unlink_concurrency = 4`

<a name="idp4228848"></a>
## Description

When unlinking the storage for message that have left the system (either due to delivery or permanent failure), Momentum uses an asynchronous queue serviced by `async_unlink_concurrency` threads to handle the `unlink` system call. It is crucial that the unlink takes place within some reasonable time bound of the event that triggered the removal. To avoid the unlink queue growing too large, the `Async_Unlink_Backlog` setting places an upper bound on the number of pending asynchronous unlink requests that can be placed in the queue; when it is exceeded, Momentum will perform a blocking unlink call.

When unlinking the storage for messages that have failed due to timeouts, retry limits or administrative intervention, Momentum uses a separate asynchronous queue serviced by `batch_unlink_concurrency` threads. This class of unlink is not time critical because there is no transactional integrity to be maintained with any third party; as a result, there is no upper bound on the number of unlink requests that can be placed in the batch unlink queue.

The default value for `async_unlink_concurrency` is 6 threads, and the default for `async_unlink_backlog` is 100 unlinks. The default value for `batch_unlink_concurrency` is 4 threads.

### Warning

This is an advanced option. Setting these values too high can overwhelm the system with context switches and concurrent I/O. Setting them too low will increase throughput latency, due to blocking I/O. Thorough testing is recommended prior to deployment in a production environment.

### Note

This option is deprecated starting with Momentum 2.2 in favor of the more flexible `ThreadPool` stanza. See [threadpool](conf.ref.threadpool.php "threadpool") for more information. As of version 3.0, this option is no longer available.

<a name="idp4239008"></a>
## Scope

async_unlink_concurrency is valid in the global scope.

| [Prev](conf.ref.async_swap_out.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.authorization.php) |
| async_swap_out  | [Table of Contents](index.php) |  authorization |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)