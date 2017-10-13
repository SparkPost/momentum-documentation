<a name="conf.ref.initial_hash_buckets"></a>
## Name

initial_hash_buckets — Set the number of hash buckets used by the system

## Synopsis

`initial_hash_buckets = 32`

<a name="idp25012352"></a>
## Description

This option sets the number of hash buckets used by the system

If this value is set too low, the system will incur additional overhead during rehashing in order to enlarge the tables to match your workload. Setting this value too high uses more memory, but does not otherwise reduce system performance. If the environmental variable `ECELERITY_TRACE_EC_HASH` is set, the system will collect distribution metrics and display a simple histogram to `stderr` when it exits. Turning on ECELERITY_TRACE_EC_HASH will impact performance.

The default value is `32`.

<a name="idp25016896"></a>
## Scope

`initial_hash_buckets` is valid in the global scope.

| [Prev](conf.ref.inbound_throttle_messages.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.inline_transfail_processing.php) |
| inbound_throttle_messages  | [Table of Contents](index.php) |  inline_transfail_processing |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)