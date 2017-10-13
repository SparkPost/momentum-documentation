<a name="config.ref.maintainer_pool"></a>
## Name

maintainer_pool — associate a pool of event loops with mail queues, DNS lookup, and module events to use multiple threads

## Synopsis

`maintainer_pool = "pool_name"`

<a name="idp25203984"></a>
## Description

### Note

To use this option, you must have a Supercharger license.

This option is used in a multiple event loop configuration. To configure threading for mail queues, DNS lookup, and module events, assign `maintainer_pool` the name of your `eventloop`. Note that the name must match what was defined in the EventLoop configuration. See [eventloop](config.ref.eventloop.php "eventloop").

For an example multiple event loop configuration, see [Chapter 24, *Configuring Multiple Event Loops*](multi_event_loops.php "Chapter 24. Configuring Multiple Event Loops") .

### Note

If you change the value of `maintainer_pool` at runtime, you must restart the ecelerity process using the executable command [ec_ctl](executable.ec_ctl.php "ec_ctl"). Note: issuing the ec_console command **config reload**        will not work.

There is no default value for this option.

<a name="idp25212464"></a>
## Scope

`maintainer_pool` is valid in the global scope.

<a name="idp25214272"></a>
## See Also

[eventloop](config.ref.eventloop.php "eventloop")

| [Prev](conf.ref.mailfrom_timeout.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.malloc2mmap_threshold.php) |
| mailfrom_timeout  | [Table of Contents](index.php) |  malloc2mmap_threshold |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)