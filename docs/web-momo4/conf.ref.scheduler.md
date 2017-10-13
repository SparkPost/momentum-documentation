<a name="conf.ref.scheduler"></a>
## Name

scheduler — override the default IO scheduler

## Synopsis

`scheduler = "scheduler-name"`

<a name="idp26439168"></a>
## Description

Momentum automatically selects the best available I/O scheduling mechanism for the platform on which it is running. You should not change this option unless advised by a Message Systems support engineer.

Changing the value of this option at runtime requires restarting the ecelerity process—issuing the ec_console command **`config reload`**         will not suffice.

<a name="idp26442208"></a>
## Scope

`scheduler` is valid in the global scope.

| [Prev](conf.ref.scope_max_outbound_connections.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.security.php) |
| scope_max_outbound_connections  | [Table of Contents](index.php) |  security |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)