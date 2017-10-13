| transfail_drain_rate |
| [Prev](config.tracking_link_expiry.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.transform_8bitmime_content.php) |

<a name="conf.ref.transfail_drain_rate"></a>
## Name

transfail_drain_rate — the maximum number of messages to pop off the transient failure queue in a single scheduler iteration

## Synopsis

`transfail_drain_rate = 100`

<a name="idp27211120"></a>
## Description

The maximum number of messages to pop off the transient failure queue in a single scheduler iteration, mitigating the potential for watchdog timeout.

The default value is `100`.

<a name="idp27213984"></a>
## Scope

transfail_drain_rate is valid in the global scope.

<a name="idp27215824"></a>
## See Also

[inline_transfail_processing](conf.ref.inline_transfail_processing.php "inline_transfail_processing") and [max_resident_transfails](conf.ref.max_resident_transfails.php "max_resident_transfails")

| [Prev](config.tracking_link_expiry.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.transform_8bitmime_content.php) |
| tracking_link_expiry  | [Table of Contents](index.php) |  transform_8bitmime_content |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)