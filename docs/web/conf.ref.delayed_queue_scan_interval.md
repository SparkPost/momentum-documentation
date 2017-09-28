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
| [Prev](conf.ref.delay_dsn_retry_interval.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.delivery_method.php) |

<a name="conf.ref.delayed_queue_scan_interval"></a>
## Name

delayed_queue_scan_interval — how often to call the maintainer for a domain

## Synopsis

`delayed_queue_scan_interval = 15`

<a name="idp4871264"></a>
## Description

The primary function of the `delayed_queue_scan_interval` option is to determine how often to call the maintainer for a domain; if there are messages on the active queue, then it is called at least every delayed_queue_scan_interval; if all the messages are on the delayed queue, then the maintainer is scheduled for when the next attempt on the first delayed message is.

Additionally, when the maintainer is called, it will sweep any delayed messages that are ready to go onto the active queue, so if there are constantly active messages then `delayed_queue_scan_interval` controls how often delayed messages will get swept onto the active queue; this is how the option got its name, but it is not its most important function. This can be confusing because when the entire queue is delayed this option has no effect.

The default value for this option is `15`.

<a name="idp4875872"></a>
## Scope

delayed_queue_scan_interval is valid in the global scope.

| [Prev](conf.ref.delay_dsn_retry_interval.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.delivery_method.php) |
| delay_dsn_retry_interval  | [Table of Contents](index.php) |  delivery_method |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)