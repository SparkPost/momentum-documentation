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

| connect_timeout_to_delay |
| [Prev](conf.ref.connect_timeout.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.connection_allocation_aggressiveness.php) |

<a name="conf.ref.connect_timeout_to_delay"></a>
## Name

connect_timeout_to_delay — time interval before sweeping mail into the delayed queue

## Synopsis

`connect_timeout_to_delay = 900`

<a name="idp24031584"></a>
## Description

When Momentum detects that a domain cannot be contacted (for example, due to a network block), it will move all that domain's active messages into the delayed queue. This setting allows you to configure the sensitivity of Momentum to the time spent attempting to contact a domain before temporarily giving up and sweeping its messages into the delayed queue.

The default value is 900 seconds.

<a name="idp24034240"></a>
## Scope

connect_timeout_to_delay is valid in the binding, binding_group, domain, and global scopes.

| [Prev](conf.ref.connect_timeout.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.connection_allocation_aggressiveness.php) |
| connect_timeout  | [Table of Contents](index.php) |  connection_allocation_aggressiveness |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)