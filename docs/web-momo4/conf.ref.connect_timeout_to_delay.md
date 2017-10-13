<a name="conf.ref.connect_timeout_to_delay"></a>
## Name

connect_timeout_to_delay — time interval before sweeping mail into the delayed queue

## Synopsis

`connect_timeout_to_delay = 900`

<a name="idp24031584"></a>
## Description

When Momentum detects that a domain cannot be contacted (for example, due to a network block), it will move all that domain's active messages into the delayed queue. This setting allows you to configure the sensitivity of Momentum to the time spent attempting to contact a domain before temporarily giving up and sweeping its messages into the delayed queue.

The default value is 900 seconds.

<a name="idp24034240"></a>
## Scope

connect_timeout_to_delay is valid in the binding, binding_group, domain, and global scopes.

| [Prev](conf.ref.connect_timeout.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.connection_allocation_aggressiveness.php) |
| connect_timeout  | [Table of Contents](index.php) |  connection_allocation_aggressiveness |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)