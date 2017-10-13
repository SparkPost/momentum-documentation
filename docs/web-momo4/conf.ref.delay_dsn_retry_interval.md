<a name="conf.ref.delay_dsn_retry_interval"></a>
## Name

delay_dsn_retry_interval — base interval for sending DSNs to the sender of a message that has not yet been delivered

## Synopsis

`delay_dsn_retry_interval = "3600"`

<a name="idp24226736"></a>
## Description

The base retry period in seconds for sending warning messages (delivery status notifications, or DSNs) to the sender of a message which has not yet been delivered. Momentum employs an exponential back-off scheme for sending DSNs. The first DSN is sent `delay_dsn_retry_interval` seconds after the message is queued for delivery. The second DSN is sent twice that after the second DSN. The third DSN four times that after the second DSN. The fourth DSN, eight times that. This process continues until delivery attempts for the message have ceased. The interval between DSNs cannot exceed `delay_dsn_max_retry_interval`.

### Note

To use this feature the [delay_dsn](modules.delay_dsn.php "71.26. delay_dsn – Delay DSN Generation") module must be loaded.

The default value for this option is `3600`.

<a name="idp24232656"></a>
## Scope

`delay_dsn_retry_interval` is valid in the binding_group, binding, domain, and global scopes.

<a name="idp24234976"></a>
## See Also

[generate_delay_dsn](conf.ref.generate_delay_dsn.php "generate_delay_dsn"), [delay_dsn_max_retry_interval](conf.ref.delay_dsn_max_retry_interval.php "delay_dsn_max_retry_interval")

| [Prev](conf.ref.delay_dsn_max_retry_interval.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.delayed_binding_domain_fuzz.php) |
| delay_dsn_max_retry_interval  | [Table of Contents](index.php) |  delayed_binding_domain_fuzz |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)