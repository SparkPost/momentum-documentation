| disable_nagle_algorithm |
| [Prev](conf.ref.delivery_response_timeout.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.disk_queue_drain_rate.php) |

<a name="conf.ref.disable_nagle_algorithm"></a>
## Name

disable_nagle_algorithm — disable nagle algorithm on sockets

## Synopsis

`disable_nagle_algorithm = false`

<a name="idp24341840"></a>
## Description

Momentum can be configured to disable the Nagle algorithm on the TCP connections it manages.

The default for this option is `false`.

### Warning

This is an advanced option. Thorough testing is recommended before deployment in a production environment.

<a name="idp24345648"></a>
## Scope

`disable_nagle_algorithm` is valid in the eccluster_listener, ecstream_listener, esmtp_listener, global, http_listener and listen scopes.

`disable_nagle_algorithm` is valid in the ecstream_listener, esmtp_listener, global and listen scopes.

| [Prev](conf.ref.delivery_response_timeout.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.disk_queue_drain_rate.php) |
| delivery_response_timeout  | [Table of Contents](index.php) |  disk_queue_drain_rate |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)