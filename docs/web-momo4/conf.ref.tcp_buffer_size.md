| tcp_buffer_size |
| [Prev](conf.ref.suspend_delivery.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.threadpool.php) |

<a name="conf.ref.tcp_buffer_size"></a>
## Name

tcp_buffer_size — maximum tcp buffer size for outbound connections

## Synopsis

`tcp_buffer_size = 32768`

<a name="idp26825696"></a>
## Description

Momentum uses an auto-scaling algorithm to ensure that the tcp buffer size is set optimally. This option allows you to set an upper bound on the tcp buffer size selected.

The default is 32768 bytes.

### Warning

This is an advanced option. Setting the value too high can cause memory exhaustion. Thorough testing is recommended before deployment in a production environment.

<a name="idp26829200"></a>
## Scope

tcp_buffer_size is valid in the global scope.

<a name="idp26831040"></a>
## See Also

[use_mmap](conf.ref.use_mmap.php "use_mmap")

| [Prev](conf.ref.suspend_delivery.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.threadpool.php) |
| suspend_delivery  | [Table of Contents](index.php) |  threadpool |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)