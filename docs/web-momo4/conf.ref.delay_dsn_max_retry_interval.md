| delay_dsn_max_retry_interval |
| [Prev](conf.ref.default_charset.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.delay_dsn_retry_interval.php) |

<a name="conf.ref.delay_dsn_max_retry_interval"></a>
## Name

delay_dsn_max_retry_interval — maximum interval for sending DSNs to the sender of a message that has not yet been delivered

## Synopsis

`delay_dsn_max_retry_interval = "43200"`

<a name="idp24208192"></a>
## Description

The maximum interval between successive warning messages (delivery status notifications, or DSNs) sent to the sender of a message that has not yet been delivered. This provides a cap on the effective interval between DSNs calculated from `delay_dsn_retry_interval`.

### Note

To use this feature the [delay_dsn](modules.delay_dsn.php "71.26. delay_dsn – Delay DSN Generation") module must be loaded.

The default value is `0`.

<a name="idp24213280"></a>
## Scope

`delay_dsn_max_retry_interval` is valid in the binding_group, binding, domain, and global scopes.

<a name="idp24215600"></a>
## See Also

[generate_delay_dsn](conf.ref.generate_delay_dsn.php "generate_delay_dsn"), [delay_dsn_max_retry_interval](conf.ref.delay_dsn_max_retry_interval.php "delay_dsn_max_retry_interval"), and [delay_dsn_retry_interval](conf.ref.delay_dsn_retry_interval.php "delay_dsn_retry_interval")

| [Prev](conf.ref.default_charset.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.delay_dsn_retry_interval.php) |
| default_charset  | [Table of Contents](index.php) |  delay_dsn_retry_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)