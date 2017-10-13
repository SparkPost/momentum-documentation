<a name="conf.ref.retry_interval"></a>
## Name

retry_interval — base retry interval

## Synopsis

`Retry_Interval = "1200"`

<a name="idp26102128"></a>
## Description

The base retry period in seconds for a message which could not be delivered. Momentum employs an exponential back-off scheme for retrying messages. On the first failure the message is retried `Retry_Interval` seconds later. On the second failure, twice that. On the third failure, four times that. On the fourth failure, eight times that. This process continues until the message is delivered, or the `Message_Expiration` timeout is reached, whichever comes first. The default value for this option is `1200` (20 minutes).

You can disable Momentum's exponential back-off scheme so that a message is retried at a fixed interval. For more information see [max_retries](conf.ref.max_retries.php "max_retries").

<a name="idp26106880"></a>
## Scope

retry_interval is valid in the binding, binding_group, domain and global scopes.

<a name="idp26108752"></a>
## See Also

[message_expiration](conf.ref.message_expiration.php "message_expiration")

| [Prev](conf.ref.response_transcode_replace.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.rfc2821_allow_whitespace_in_envelope.php) |
| response_transcode_replace  | [Table of Contents](index.php) |  rfc2821_allow_whitespace_in_envelope |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)