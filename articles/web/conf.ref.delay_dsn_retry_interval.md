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

| delay_dsn_retry_interval |
| [Prev](conf.ref.delay_dsn_max_retry_interval.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.delayed_queue_scan_interval.php) |

<a name="conf.ref.delay_dsn_retry_interval"></a>
## Name

delay_dsn_retry_interval — base interval for sending DSNs to the sender of a message that has not yet been delivered

## Synopsis

`Delay_DSN_Retry_Interval = "3600"`

<a name="idp4851536"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

The base retry period in seconds for sending warning messages (delivery status notifications, or DSNs) to the sender of a message which has not yet been delivered. Momentum employs an exponential back-off scheme for sending DSNs. The first DSN is sent `Delay_DSN_Retry_Interval` seconds after the message is queued for delivery. The second DSN is sent twice that after the second DSN. The third DSN four times that after the second DSN. The fourth DSN, eight times that. This process continues until delivery attempts for the message have ceased. The interval between DSNs cannot exceed `Delay_DSN_Max_Retry_Interval`.

### Note

To use this feature the delay_dsn module must be loaded. Do this by adding the following to your `ecelerity.conf` file:

```
Module generic/delay_dsn delay_dsn {
}
```
<a name="idp4860032"></a>
## Scope

`delay_dsn_retry_interval` is valid in the binding_group, binding, domain and global scopes.

<a name="idp4862128"></a>
## See Also

[generate_delay_dsn](conf.ref.generate_delay_dsn.php "generate_delay_dsn"), [delay_dsn_max_retry_interval](conf.ref.delay_dsn_max_retry_interval.php "delay_dsn_max_retry_interval")

| [Prev](conf.ref.delay_dsn_max_retry_interval.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.delayed_queue_scan_interval.php) |
| delay_dsn_max_retry_interval  | [Table of Contents](index.php) |  delayed_queue_scan_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)