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

| disable_nagle_algorithm |
| [Prev](conf.ref.delivery_response_timeout.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.disk_queue_drain_rate.php) |

<a name="conf.ref.disable_nagle_algorithm"></a>
## Name

disable_nagle_algorithm — disable nagle algorithm on sockets

## Synopsis

`disable_nagle_algorithm = false`

<a name="idp8963040"></a>
## Description

Momentum can be configured to disable the Nagle algorithm on the TCP connections it manages.

The default for this option is `false`.

### Warning

This is an advanced option. Thorough testing is recommended before deployment in a production environment.

<a name="idp8966528"></a>
## Scope

`disable_nagle_algorithm` is valid in the eccluster_listener, ecstream_listener, esmtp_listener, global, http_listener and listen scopes.

| [Prev](conf.ref.delivery_response_timeout.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.disk_queue_drain_rate.php) |
| delivery_response_timeout  | [Table of Contents](index.php) |  disk_queue_drain_rate |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)