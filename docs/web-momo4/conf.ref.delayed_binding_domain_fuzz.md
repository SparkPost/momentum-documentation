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

| delayed_binding_domain_fuzz |
| [Prev](conf.ref.delay_dsn_retry_interval.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.delayed_queue_scan_interval.php) |

<a name="conf.ref.delayed_binding_domain_fuzz"></a>
## Name

delayed_binding_domain_fuzz — length of time to spread scheduled messages over when a bulk requeue is necessary

## Synopsis

`delayed_binding_domain_fuzz = 0`

<a name="idp24244336"></a>
## Description

When a bulk requeue is necessary, this option sets the number of seconds to spread scheduled messages over. This option must be a power-of-two value from 2 - n. It is possible to set this to values that are not powers of two, but this may result in sub-optimal performance and ecelerity scheduler congestion.

The default value is `0`.

<a name="idp24247376"></a>
## Scope

delayed_binding_domain_fuzz is valid in the global, binding, and binding_group scopes.

<a name="idp24249264"></a>
## See Also

[Section 71.3, “adaptive – Adaptive Delivery”](modules.adaptive.php "71.3. adaptive – Adaptive Delivery")

| [Prev](conf.ref.delay_dsn_retry_interval.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.delayed_queue_scan_interval.php) |
| delay_dsn_retry_interval  | [Table of Contents](index.php) |  delayed_queue_scan_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)