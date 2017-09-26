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

| inbound_throttle_messages |
| [Prev](conf.ref.idle_timeout.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.initial_hash_buckets.php) |

<a name="conf.ref.inbound_throttle_messages"></a>
## Name

inbound_throttle_messages — rate limit inbound mail

## Synopsis

`inbound_throttle_messages = "3"`

`inbound_throttle_messages = "3/60"`

<a name="idp24999600"></a>
## Description

This allows you to limit the rate at which Momentum will accept messages from the network. By default, there are no artificial limitations on the acceptance rate (it accepts as quickly as possible). Sometimes limiting the acceptance rate gives finer control to the entire mailing process as well as controlling sudden bursts of inbound mail.

If a single integer parameter is provided, Momentum will ensure that no more than the specified number of messages are received in a given second of time. If a proper fraction parameter is provided, Momentum will limit the number of received message to the number specified in the numerator over the time window in seconds specified by the denominator.

For a discussion of throttles and fallback see [the section called “Throttles and Fallback”](conf.ref.outbound_throttle_messages.php#conf.ref.outbound_throttle_messages.fallback "Throttles and Fallback").

<a name="idp25003680"></a>
## Scope

inbound_throttle_messages is valid in the global, pathway_group, and pathway scopes.

| [Prev](conf.ref.idle_timeout.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.initial_hash_buckets.php) |
| idle_timeout  | [Table of Contents](index.php) |  initial_hash_buckets |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)