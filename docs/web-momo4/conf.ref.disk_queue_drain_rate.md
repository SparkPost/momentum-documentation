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

| disk_queue_drain_rate |
| [Prev](conf.ref.disable_nagle_algorithm.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.dns_cache_purge_interval.php) |

<a name="conf.ref.disk_queue_drain_rate"></a>
## Name

disk_queue_drain_rate — control the rate at which messages are spooled in on start-up

## Synopsis

`disk_queue_drain_rate = 100`

<a name="idp24357056"></a>
## Description

Every iteration through the system, messages are taken from the disk queue. The disk queue's asynchronous population commences at Momentum's startup. As messages are ready (swapped in), they are pushed onto the "disk queue". This configuration directive dictates the maximum number of messages that will be pulled off the disk queue in a single iteration of the scheduler. The default value is `100`.

### Warning

This is an advanced option. Setting this value too high could saturate a server's I/O subsystem. Thorough testing is recommended before deployment in a production environment.

<a name="idp24360800"></a>
## Scope

disk_queue_drain_rate is valid in the global scope.

| [Prev](conf.ref.disable_nagle_algorithm.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.dns_cache_purge_interval.php) |
| disable_nagle_algorithm  | [Table of Contents](index.php) |  dns_cache_purge_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)