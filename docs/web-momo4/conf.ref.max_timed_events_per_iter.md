| max_timed_events_per_iter |
| [Prev](conf.ref.max_retry_interval.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.mdn_failures_notify.php) |

<a name="conf.ref.max_timed_events_per_iter"></a>
## Name

max_timed_events_per_iter — the maximum numer of timed events per scheduler iteration

## Synopsis

`max_timed_events_per_iter = 1024`

<a name="idp25477952"></a>
## Description

This option provides an upper boundary on how many timed events are dispatched in a single scheduler iteration. This caps the number of timed events that will be processed by the scheduler before tending to events triggered by network traffic, preventing network events from being starved by time-based events.

The default value is `1024`.

<a name="idp25480992"></a>
## Scope

max_timed_events_per_iter is valid in the global scope.

| [Prev](conf.ref.max_retry_interval.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.mdn_failures_notify.php) |
| max_retry_interval  | [Table of Contents](index.php) |  mdn_failures_notify |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)