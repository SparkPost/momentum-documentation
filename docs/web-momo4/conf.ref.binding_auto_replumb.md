<a name="conf.ref.binding_auto_replumb"></a>
## Name

binding_auto_replumb — enable or disable the auto replumber

## Synopsis

`binding_auto_replumb = "enabled"`
`binding_auto_replumb = "disabled"`

<a name="idp23614192"></a>
## Description

This directive instructs Momentum to enable (or disable) the auto replumber. The replumber periodically checks the plumbed state for bindings with static addresses and replumbs any that are unplumbed. Bindings can become unplumbed if there are network issues or if the NIC goes down temporarily.

The default value is `disabled`.

<a name="idp23617200"></a>
## Scope

`binding_auto_replumb` is valid in the global scope.

<a name="idp23619456"></a>
## See Also

[binding_auto_replumb_interval](conf.ref.binding_auto_replumb_interval.php "binding_auto_replumb_interval")

| [Prev](conf.ref.binding.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.binding_auto_replumb_interval.php) |
| binding  | [Table of Contents](index.php) |  binding_auto_replumb_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)