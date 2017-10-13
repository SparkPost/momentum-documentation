| generate_bounces |
| [Prev](conf.ref.gateway.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php) |

<a name="conf.ref.generate_bounces"></a>
## Name

generate_bounces — generate MDNs if mail is failed after reception

## Synopsis

`generate_bounces = true`

`generate_bounces = false`

<a name="idp24757296"></a>
## Description

Momentum has the ability to generate failure messages to be delivered to the envelope sender of an undeliverable message. In large outbound mail systems (for example large mailing lists), it is often desirable to suppress the generation and delivery of such failure notifications and opt for a more efficient approach such as post-processing failure logs. Note that this configuration option applies only to in-band bounces.

The default value for this option is `true` for conformance with the SMTP specification.

<a name="idp24760528"></a>
## Scope

generate_bounces is valid in the binding, binding_group, domain and global scopes.

<a name="idp24762400"></a>
## See Also

[bounce_behavior](conf.ref.bounce_behavior.php "bounce_behavior")

| [Prev](conf.ref.gateway.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php) |
| gateway  | [Table of Contents](index.php) |  generate_bounces_for_multi_recipient_policy_rejections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)