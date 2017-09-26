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

| async_close_concurrency |
| [Prev](conf.ref.async_bounce_rendering.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.async_spool_in.php) |

<a name="conf.ref.async_close_concurrency"></a>
## Name

async_close_concurrency — Number of threads to use for asynchronous descriptor closing

## Synopsis

`async_close_concurrency = 0`

<a name="idp4160864"></a>
## Description

**Configuration Change. ** This feature was introduced in Momentum 2.1.

Closing sockets and files is a blocking operation; to avoid slowing down the Momentum scheduler, file and socket close and shutdown is delegated to up to `async_close_concurrency` threads.

Setting this option to a non-zero value can place increased pressure on your operating system's IO layer. You should carefully evaluate whether your system can effectively handle the strain before deploying in production.

The default value for this option is 0; sockets and files are closed synchronously.

### Note

This option is deprecated starting with Momentum 2.2 in favor of the more flexible `ThreadPool` stanza. See [threadpool](conf.ref.threadpool.php "threadpool") for more information. As of version 3.0, this option is no longer available.

<a name="idp4169312"></a>
## Scope

async_close_concurrency is valid in the global scope.

| [Prev](conf.ref.async_bounce_rendering.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.async_spool_in.php) |
| async_bounce_rendering  | [Table of Contents](index.php) |  async_spool_in |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)