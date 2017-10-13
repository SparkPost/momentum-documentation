<a name="conf.ref.mail_queue_check_vm_interval"></a>
## Name

mail_queue_check_vm_interval — how often to apply memory management reduction on mail queues

## Synopsis

`mail_queue_check_vm_interval = 60`

<a name="idp25167840"></a>
## Description

How often to apply memory management reduction on mail queues, based on the configured memory utilization limits.

By default, the system checks once a minute to see if too much memory is being used and attempts to swap out messages from the queues if usage is excessive.

The default value is `60`.

<a name="idp25171264"></a>
## Scope

mail_queue_check_vm_interval is valid in the global scope.

| [Prev](conf.ref.local_changes_only.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.mailerdaemon.php) |
| local_changes_only  | [Table of Contents](index.php) |  mailerdaemon |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)