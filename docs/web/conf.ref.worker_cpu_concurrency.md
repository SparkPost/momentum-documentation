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

| worker_cpu_concurrency |
| [Prev](conf.ref.watchdog_interval.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.worker_io_concurrency.php) |

<a name="conf.ref.worker_cpu_concurrency"></a>
## Name

worker_cpu_concurrency — number of threads to use for CPU-bound jobs

## Synopsis

`worker_cpu_concurrency = 4`

<a name="idp7208176"></a>
## Description

**Configuration Change. ** This feature was introduced in Momentum 2.1.

Configures the number of threads for use by CPU-intensive jobs.

The default value for this option is 4 threads. You may change this value online using the console. The recommended value is 1 thread per CPU, with a small number of additional threads to compensate for portions of work that are not truly CPU-bound.

Making this value too large will result in increased CPU contention and context switching, and thus lower overall performance.

### Note

This option is deprecated starting with Momentum 2.2 in favor of the more flexible `ThreadPool` stanza. See [threadpool](conf.ref.threadpool.php "threadpool") for more information. As of version 3.0, this option is no longer available.

<a name="idp7216144"></a>
## Scope

worker_cpu_concurrency is valid in the global scope.

<a name="idp7217760"></a>
## See Also

[async_swap_in](conf.ref.async_swap_in.php "async_swap_in"), [async_swap_out](conf.ref.async_swap_out.php "async_swap_out"), [worker_io_concurrency](conf.ref.worker_io_concurrency.php "worker_io_concurrency")

| [Prev](conf.ref.watchdog_interval.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.worker_io_concurrency.php) |
| watchdog_interval  | [Table of Contents](index.php) |  worker_io_concurrency |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)