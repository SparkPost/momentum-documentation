| generate_delay_dsn |
| [Prev](conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.growbuf_size.php) |

<a name="conf.ref.generate_delay_dsn"></a>
## Name

generate_delay_dsn — generate DSNs if mail is delayed

## Synopsis

`generate_delay_dsn = true`

`generate_delay_dsn = false`

<a name="idp24789056"></a>
## Description

Momentum has the ability to generate warning messages (delivery status notifications, or DSNs) that are delivered to the envelope sender of a message that has not yet been delivered.

The default value for this option is `false`.

### Note

To use this feature the [delay_dsn](modules.delay_dsn.php "71.26. delay_dsn – Delay DSN Generation") module must be loaded.

<a name="idp24793632"></a>
## Scope

`generate_delay_dsn` is valid in the binding_group, binding, domain and global scopes.

<a name="idp24795936"></a>
## See Also

[delay_dsn_retry_interval](conf.ref.delay_dsn_retry_interval.php "delay_dsn_retry_interval"), [delay_dsn_max_retry_interval](conf.ref.delay_dsn_max_retry_interval.php "delay_dsn_max_retry_interval") and [generate_delay_dsn](conf.ref.generate_delay_dsn.php "generate_delay_dsn")

| [Prev](conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.growbuf_size.php) |
| generate_bounces_for_multi_recipient_policy_rejections  | [Table of Contents](index.php) |  growbuf_size |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)