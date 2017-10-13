| siv_throttle_cache_size |
| [Prev](conf.ref.signing_stats.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.skip_hosts.php) |

<a name="conf.ref.siv_throttle_cache_size"></a>
## Name

siv_throttle_cache_size — set the maximum number of named throttles

## Synopsis

`siv_throttle_cache_size = 1000`

<a name="idp26589840"></a>
## Description

This option sets the maximum number of named throttles created by Lua scripts. If you try to create more throttles than this value, throttles created earlier will be destroyed.

The default value is `1000` (because Adaptive Delivery makes heavy use of throttles).

<a name="idp26592784"></a>
## Scope

`siv_throttle_cache_size` is valid in the global scope.

<a name="idp26595056"></a>
## See Also

[Section 71.3, “adaptive – Adaptive Delivery”](modules.adaptive.php "71.3. adaptive – Adaptive Delivery")

| [Prev](conf.ref.signing_stats.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.skip_hosts.php) |
| signing_stats  | [Table of Contents](index.php) |  skip_hosts |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)