<a name="conf.ref.delayed_queue_scan_interval"></a>
## Name

delayed_queue_scan_interval — how often to call the maintainer for a domain

## Synopsis

`delayed_queue_scan_interval = 15`

<a name="idp24259248"></a>
## Description

The primary function of the `delayed_queue_scan_interval` option is to determine how often to call the maintainer for a domain. If there are messages on the active queue, then it is called at least every delayed_queue_scan_interval. If all the messages are on the delayed queue, then the maintainer is scheduled for the next attempt on the first delayed message.

Additionally, when the maintainer is called, it will sweep any delayed messages that are ready to go onto the active queue. If there are constantly active messages, `delayed_queue_scan_interval` will control how often the delayed messages get swept onto the active queue.

### Note

This option has no effect when the entire queue is delayed.

The default value is `15`.

<a name="idp24264896"></a>
## Scope

delayed_queue_scan_interval is valid in the global scope.

| [Prev](conf.ref.delayed_binding_domain_fuzz.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.delivery_method.php) |
| delayed_binding_domain_fuzz  | [Table of Contents](index.php) |  delivery_method |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)