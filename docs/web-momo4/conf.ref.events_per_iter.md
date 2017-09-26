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

| events_per_iter |
| [Prev](config.ref.eventloop.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.exclude_vctx_conn.php) |

<a name="conf.ref.events_per_iter"></a>
## Name

events_per_iter — employ when using a concurrency greater than 1.

## Synopsis

`events_per_iter = 0`

<a name="idp24628656"></a>
## Description

This option may be used when using a concurrency greater than 1 (a threaded accept). When running in this mode, `accept()` is called on a secondary thread (specified by the `pool_name`) and the accepted connection put on a queue to be dispatched from the main thread. `events_per_iter` limits the number of items that can be dispatched in a single scheduler iteration. If unspecified, or less than 1, then `events_per_iter` will be treated as though it was set to 1.

The default value is `0`.

<a name="idp24633888"></a>
## Scope

events_per_iter is valid in the control_listener, eccluster_listener, ecstream_listener, esmtp_listener, http_listener, listen, and xmpp_listener scopes.

<a name="idp24635840"></a>
## See Also

[pool_name](esmtp_listener.php#esmtp_listener.config "19.1. ESMTP_Listener Configuration")

| [Prev](config.ref.eventloop.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.exclude_vctx_conn.php) |
| eventloop  | [Table of Contents](index.php) |  exclude_vctx_conn |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)