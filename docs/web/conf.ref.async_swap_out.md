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

| async_swap_out |
| [Prev](conf.ref.async_swap_in.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.async_unlink_concurrency.php) |

<a name="conf.ref.async_swap_out"></a>
## Name

async_swap_out — number of threads to use for spooling to disk

## Synopsis

`async_swap_out = 5`

<a name="idp4209360"></a>
## Description

Spooling to disk is a blocking operation; to avoid slowing down the Momentum scheduler, the spooling phase is handed off to a thread pool of up to `async_swap_out` threads.

The default value for this option is 5 threads.

Starting with Momentum 2.1, `async_swap_out` can be tuned online via the console, spawning or terminating threads as required.

### Warning

This is an advanced option. Setting the value too high can overwhelm the system with context switches and concurrent I/O. Setting the value too low will increase throughput latency, due to blocking I/O. Thorough testing is recommended prior to deployment in a production environment.

### Note

This option is deprecated starting with Momentum 2.2 in favor of the more flexible `ThreadPool` stanza. See [threadpool](conf.ref.threadpool.php "threadpool") for more information. As of version 3.0, this option is no longer available.

<a name="idp4216416"></a>
## Scope

async_swap_out is valid in the global scope.

<a name="idp4218032"></a>
## See Also

[async_swap_in](conf.ref.async_swap_in.php "async_swap_in")

| [Prev](conf.ref.async_swap_in.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.async_unlink_concurrency.php) |
| async_swap_in  | [Table of Contents](index.php) |  async_unlink_concurrency |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)