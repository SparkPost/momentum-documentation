| max_recipients_per_batch |
| [Prev](conf.ref.max_outbound_connections.php)  | Chapter 72. Configuration Options Reference |  [Next](config.max_request_size.php) |

<a name="conf.ref.max_recipients_per_batch"></a>
## Name

max_recipients_per_batch — maximum number of recipients to send in a single outbound message transaction

## Synopsis

`max_recipients_per_batch = 100`

<a name="idp25354992"></a>
## Description

For a given multi-recipient message leaving the system, this configuration directive specifies the maximum number of recipients to be sent for a given batch.

The default value is `100`. For example, if a message has `200` recipients and `max_recipients_per_batch` is set to `100`, then Momentum will attempt to deliver the message in two batches containing 100 recipients.

<a name="idp25359328"></a>
## Scope

max_recipients_per_batch is valid in the binding, binding_group, domain and global scopes.

| [Prev](conf.ref.max_outbound_connections.php)  | [Up](config.options.ref.php) |  [Next](config.max_request_size.php) |
| max_outbound_connections  | [Table of Contents](index.php) |  max_request_size |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)