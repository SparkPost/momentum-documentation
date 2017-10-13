| drop_body_after_trans_fail |
| [Prev](conf.ref.domainkeys.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.ecstream_port.php) |

<a name="conf.ref.drop_body_after_trans_fail"></a>
## Name

drop_body_after_trans_fail — number of retry attempts before freeing message memory

## Synopsis

`drop_body_after_trans_fail = 3`

<a name="idp24499376"></a>
## Description

Momentum aggressively attempts to keep messages in memory, to avoid reading their contents from disk. For domains which have a large number of transient failures, or for which messages often remain for a long time in the queue, this can have abusive effects on memory usage. To counter this, Momentum allows you to specify a threshold of transient failures after which Momentum will not store the message in memory, but instead always read it from disk. To force Momentum to read from disk all messages that have had any transient failures, set this value to `0`.

The default value is 3 attempts.

<a name="idp24502688"></a>
## Scope

drop_body_after_trans_fail is valid in the binding, binding_group, domain, and global scopes.

| [Prev](conf.ref.domainkeys.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.ecstream_port.php) |
| domainkeys  | [Table of Contents](index.php) |  ecstream_port |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)