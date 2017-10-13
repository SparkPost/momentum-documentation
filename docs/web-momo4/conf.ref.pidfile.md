| pidfile |
| [Prev](conf.ref.permastore_interval.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.prohibited_hosts.php) |

<a name="conf.ref.pidfile"></a>
## Name

pidfile — set the PID file path

## Synopsis

`pidfile = "/path/to/ecelerity.pid"`

<a name="idp25877936"></a>
## Description

Sets the path to the PID file. This is used by **ec_ctl** to determine whether Momentum is running.

The PID file can be used by other processes to determine if the instance is running; therefore, each instance must have its own PID file.

<a name="idp25880848"></a>
## Scope

pidfile is valid in the global scope.

<a name="idp25882672"></a>
## See Also

| [Prev](conf.ref.permastore_interval.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.prohibited_hosts.php) |
| permastore_interval  | [Table of Contents](index.php) |  prohibited_hosts |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)