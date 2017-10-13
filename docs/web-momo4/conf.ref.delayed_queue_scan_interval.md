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

| delayed_queue_scan_interval |
| [Prev](conf.ref.delayed_binding_domain_fuzz.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.delivery_method.php) |

<a name="conf.ref.delayed_queue_scan_interval"></a>
## Name

delayed_queue_scan_interval — how often to call the maintainer for a domain

## Synopsis

`delayed_queue_scan_interval = 15`

<a name="idp24259248"></a>
## Description

The primary function of the `delayed_queue_scan_interval` option is to determine how often to call the maintainer for a domain. If there are messages on the active queue, then it is called at least every delayed_queue_scan_interval. If all the messages are on the delayed queue, then the maintainer is scheduled for the next attempt on the first delayed message.

Additionally, when the maintainer is called, it will sweep any delayed messages that are ready to go onto the active queue. If there are constantly active messages, `delayed_queue_scan_interval` will control how often the delayed messages get swept onto the active queue.

### Note

This option has no effect when the entire queue is delayed.

The default value is `15`.

<a name="idp24264896"></a>
## Scope

delayed_queue_scan_interval is valid in the global scope.

| [Prev](conf.ref.delayed_binding_domain_fuzz.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.delivery_method.php) |
| delayed_binding_domain_fuzz  | [Table of Contents](index.php) |  delivery_method |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)