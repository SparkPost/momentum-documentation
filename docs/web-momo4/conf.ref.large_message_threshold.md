<a name="conf.ref.large_message_threshold"></a>
## Name

large_message_threshold — Consider a message large when its size exceeds this amount

## Synopsis

`large_message_threshold = 131072`

<a name="idp25068848"></a>
## Description

For performance reasons, Momentum prefers to keep message contents in memory. From time to time, messages that are much larger than average enter the system. Such messages may either be transiently rejected (because they cannot fit in memory) or increase demands on memory and have an adverse affect on overall system performance.

In order to avoid this, Momentum can use alternative techniques for working with messages that are larger than the `large_message_threshold`. Large messages pass through the system a little more slowly (wallclock time) than their regular counterparts, mitigating their impact on the rest of the system.

The default is 131072 bytes. If the majority of your messages are larger than the default, then you should adjust the threshold upwards so that the system will run more efficiently.

<a name="idp25072816"></a>
## Scope

large_message_threshold is valid in the global scope.

<a name="idp25074656"></a>
## See Also

[growbuf_size](conf.ref.growbuf_size.php "growbuf_size"), [legacy_message_threshold](conf.ref.legacy_message_threshold.php "legacy_message_threshold")

| [Prev](conf.ref.keep_message_dicts_in_memory.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.legacy_message_threshold.php) |
| keep_message_dicts_in_memory  | [Table of Contents](index.php) |  legacy_message_threshold |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)